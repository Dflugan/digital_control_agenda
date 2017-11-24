<?php
namespace Foundation;

use Container;

abstract class Controller
{
    protected function render($view, array $data = [])
    {
        extract($data);

        $file = Container::get('app.view.path') . $view . '.phtml';

        if( ! file_exists($file)) {
            throw new \Exception('O arquivo de visão não foi localizado.');
        }

        return require $file;
    }
    protected function renderXml($view, array $data = [])
    {
        extract($data);

        $file = Container::get('app.view.path') . $view . '.xml';

        if( ! file_exists($file)) {
            throw new \Exception('O arquivo de visão não foi localizado.');
        }

        return require $file;
    }
}
