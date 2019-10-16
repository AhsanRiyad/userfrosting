<?php

namespace UserFrosting\Sprinkle\Site\Controller;

use UserFrosting\Sprinkle\Core\Controller\SimpleController;


class OwlController extends SimpleController
{
    public function getOwls($request, $response, $args)
    {
        return $response->write("Okay I am trying");
    }

    
}