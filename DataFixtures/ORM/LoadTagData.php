<?php
namespace Zorbus\ArticleBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zorbus\ArticleBundle\Entity\Tag;

class LoadTagData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tag1 = new Tag();
        $tag1->setLang('en_US');
        $tag1->setName('School');

        $tag2 = new Tag();
        $tag2->setLang('en_US');
        $tag2->setName('Home');

        $tag3 = new Tag();
        $tag3->setLang('en_US');
        $tag3->setName('Park');

        $manager->persist($tag1);
        $manager->persist($tag2);
        $manager->persist($tag3);
        $manager->flush();

        $this->addReference('school', $tag1);
        $this->addReference('home', $tag2);
        $this->addReference('park', $tag3);
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}