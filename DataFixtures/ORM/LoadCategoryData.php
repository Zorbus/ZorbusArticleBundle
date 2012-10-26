<?php
namespace Zorbus\ArticleBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zorbus\ArticleBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName('Science');
        $category1->setLang('en_US');
        $category1->setDescription('All the articles related to science.');
        $category1->setEnabled(true);
        $category1->setIsHighlighted(true);

        $category2 = new Category();
        $category2->setName('Mathematic');
        $category2->setLang('en_US');
        $category2->setDescription('All the articles related to mathematics.');
        $category2->setEnabled(true);
        $category2->setIsHighlighted(true);
        $category2->setParent($category1);

        $category3 = new Category();
        $category3->setName('Hobbies');
        $category3->setLang('en_US');
        $category3->setDescription('All the articles related to hobbies.');
        $category3->setEnabled(true);
        $category3->setIsHighlighted(true);

        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->flush();

        $this->addReference('science', $category1);
        $this->addReference('mathematics', $category2);
        $this->addReference('hobbies', $category3);
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}