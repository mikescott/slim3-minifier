<?php
namespace MikeScott\Minifier;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Body;
use \Minify_HTML;
use \Minify_CSS;
use \JSMin;

class Minifier {
    public function __invoke(Request $request, Response $response, Callable $next)
    {
        $response = $next($request, $response);

        $html = $response->getBody()->__toString();
        $html = $this->html($html);

        $body = new Body(fopen('php://temp', 'r+'));

        $response = $response->withBody($body);
        $response->write($html);

        return $response;
    }

    protected function html($html)
    {
        return Minify_HTML::minify($html, [
            'jsCleanComments' => true,

            'cssMinifier' => function ($css) {
                return $this->css($css);
            },

            'jsMinifier' => function ($js) {
                return $this->js($js);
            },
        ]);
    }

    protected function css($css)
    {
        return Minify_CSS::minify($css);
    }

    protected function js($js)
    {
        return JSMin::minify($js);
    }
}