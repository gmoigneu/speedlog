<?php

namespace SpeedLog\CoreBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use SpeedLog\UserBundle\Document\Group;
use SpeedLog\CoreBundle\Document\Website;
use SpeedLog\CoreBundle\Document\Page;
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
        return 2;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {   
        $website = new Website();
        $website->setName('Github')
                        ->setUrl('https://github.com/');
    
        $page1 = new Page();
        $page1->setName('Homepage')
                    ->setUrl('https://github.com');
        $manager->persist($page1);
        $website->addPage($page1);

        $page2 = new Page();
        $page2->setName('Features')
                    ->setUrl('https://github.com/features');
        $manager->persist($page2);
        $website->addPage($page2);

        $manager->persist($website);
        $manager->flush();
    }
}
