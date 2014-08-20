<?php

namespace Trq\TodoBundle\Controller;

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

        return ['todos' => $todos];
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
