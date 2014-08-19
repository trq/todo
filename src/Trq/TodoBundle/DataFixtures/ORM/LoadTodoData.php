<?php

namespace Trq\TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Trq\TodoBundle\Entity\Todo;

class LoadTodoData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $todo1 = (new Todo())
            ->setTitle('some todo')
            ->setDescription('some todo data')
            ->setCreatedAt(new \DateTime());

        $todo2 = (new Todo())
            ->setTitle('some other todo')
            ->setDescription('some other todo data')
            ->setCreatedAt(new \DateTime());

        $manager->persist($todo1);
        $manager->persist($todo2);

        $manager->flush();
    }
}
