<?php

namespace Trq\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontEndController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrqTodoBundle:FrontEnd:index.html.twig');
    }
}
