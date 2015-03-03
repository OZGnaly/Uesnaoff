<?php

namespace UESNA\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UESNABaseBundle:Default:index.html.twig');
    }
}
