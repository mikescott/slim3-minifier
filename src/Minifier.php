<?php
namespace MikeScott\Minifier;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Body;
use zz\Html\HTMLMinify;

class Minifier {
    protected $options = [
        'optimizationLevel' => HTMLMinify::OPTIMIZATION_ADVANCED,
        'doctype' => HTMLMinify::DOCTYPE_HTML5,
        'removeComment' => false,
        'removeDuplicateAttribute' => true
    ];

    public function __construct(array $options = [])
    {
        $this->options = array_merge($this->options, $options);
    }

    public function __invoke(Request $request, Response $response, Callable $next)
    {
        $response = $next($request, $response);

        $html = $response->getBody()->__toString();
        $html = HTMLMinify::minify($html, $this->options);

        $body = new Body(fopen('php://temp', 'r+'));

        $response = $response->withBody($body);
        $response->write($html);

        return $response;
    }
}