<?php

namespace App\Controllers;

use Slim\Container;

abstract class BaseController
{

    private $container = null;

    public function __construct(Container $container = null)
    {
        if (null !== $container) {
            $this->container = $container;
        }

        $view = $this->container->get('view');
        $logger = $this->container->get('logger');
    }

    public function __get($var)
    {
        return $this->container->get($var);
    }
}