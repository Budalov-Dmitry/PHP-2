<?php

namespace app\engine;

use app\interfaces\IRenderer;

class TwigRender implements IRenderer
{
    protected $twig;


    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../twig_views');
        $this->twig = new \Twig\Environment($loader);
    }

    public function renderTemplate($template, $params = [])
    {
        $templatePath = $template . ".twig";


        return $this->twig->render($templatePath, $params);
    }
}