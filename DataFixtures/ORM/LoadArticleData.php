<?php
namespace Zorbus\ArticleBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zorbus\ArticleBundle\Entity\Article;

class LoadArticleData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setTitle('Importance of mathematics in our world');
        $article1->setSubtitle('A presentation by Euler');
        $article1->setAuthor('Tito Miguel Costa');
        $article1->setBody('<p>You can not miss this event.</p><p>Euler will present us with a magnific insight about the importance of mathematics in our world.</p>');
        $article1->setEnabled(true);
        $article1->setIsHighlighted(true);
        $article1->setType('event');
        $article1->setLang('en_US');
        $article1->setStatus('published');
        $article1->addCategorie($this->getReference('science'));
        $article1->addCategorie($this->getReference('mathematics'));
        $article1->addTag($this->getReference('school'));

        $article2 = new Article();
        $article2->setTitle('A simple game');
        $article2->setSubtitle('');
        $article2->setAuthor('Tito Miguel Costa');
        $article2->setBody('<p>Get to know a few games you can play alone at home and get entertained.</p>');
        $article2->setEnabled(true);
        $article2->setIsHighlighted(false);
        $article2->setType('event');
        $article2->setLang('en_US');
        $article2->setStatus('published');
        $article2->addTag($this->getReference('home'));

        $article3 = new Article();
        $article3->setTitle('The next Bobby Fischer');
        $article3->setSubtitle('Learn chess like a master');
        $article3->setAuthor('Tito Miguel Costa');
        $article3->setBody('<p>Master you chess game.</p><p>Improve you game immediately with our recommendations.</p><p>Impress your friends with new tactics.</p>');
        $article3->setEnabled(true);
        $article3->setIsHighlighted(false);
        $article3->setType('event');
        $article3->setLang('en_US');
        $article3->setStatus('published');
        $article3->addTag($this->getReference('home'));
        $article3->addCategorie($this->getReference('science'));

        $manager->persist($article1);
        $manager->persist($article2);
        $manager->persist($article3);
        $manager->flush();

        $this->addReference('article_1', $article1);
        $this->addReference('article_2', $article2);
        $this->addReference('article_3', $article3);
    }
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}