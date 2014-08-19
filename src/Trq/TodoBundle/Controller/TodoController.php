<?php

namespace Trq\TodoBundle\Controller;

use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Trq\TodoBundle\Entity\Todo;

class TodoController extends Controller
{
    /**
     * getTodosAction
     *
     * @access public
     * @return void
     */
    public function getTodosAction()
    {
        $todos = $this->getDoctrine()
            ->getRepository('TrqTodoBundle:Todo')
            ->findAll();

        $view = View::create();
        $view->setData(['todos' => $todos]);
        return $view;
    }

    /**
     * getTodoAction
     *
     * @param mixed $todo
     * @access public
     * @return void
     */
    public function getTodoAction(Todo $todo)
    {
        return ['todo' => $todo];
    }
}
