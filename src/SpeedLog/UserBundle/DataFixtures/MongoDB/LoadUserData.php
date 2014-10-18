<?php

namespace SpeedLog\UserBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use SpeedLog\UserBundle\Document\Group;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {   
        $userManager = $this->container->get('fos_user.user_manager');

        $groupTest = new Group('Test', ['ROLE_USER']);
        $manager->persist($groupTest);

        $user = $userManager->createUser();
        $user->setUsername('admin');
        $user->setEmail('admin@speedlog.dev.net');
        $user->setPlainPassword('speedlog');
        $user->setEnabled(1);
        $user->setGroup($groupTest);
        $user->addRole('ROLE_ADMIN');
        $userManager->updateUser($user);

        $user = $userManager->createUser();
        $user->setUsername('user');
        $user->setEmail('user@speedlog.dev.net');
        $user->setPlainPassword('speedlog');
        $user->setEnabled(1);
        $user->setGroup($groupTest);
        $userManager->updateUser($user);

        $manager->flush();
    }
}
