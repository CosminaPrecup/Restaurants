<?php
/*
namespace Acme\RestuarantsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\RestaurantsBundle\Entity\Comment;
use Acme\RestaurantsBundle\Entity\Places;

class CommentFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $comment = new Comment();
        $comment->setCommentUser('symfony');
        $comment->setcommentContent('To make a long story short. You can\'t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.');
        $comment->setPlaceId($manager->merge($this->getReference('1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('David');
        $comment->setcommentContent('To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment. Make sure that you make the right selection!');
        $comment->setPlaceId($manager->merge($this->getReference('1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Dade');
        $comment->setComment('Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Kate');
        $comment->setcommentContent('Are you challenging me? ');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $comment->setCommentCreated(new \DateTime("2011-07-23 06:15:20"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Dade');
        $comment->setcommentContent('Name your stakes.');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $comment->setCommentCreated(new \DateTime("2011-07-23 06:18:35"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Kate');
        $comment->setcommentContent('If I win, you become my slave.');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $comment->setCommentCreated(new \DateTime("2011-07-23 06:22:53"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Dade');
        $comment->setcommentContent('Your SLAVE?');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $comment->setCommentCreated(new \DateTime("2011-07-23 06:25:15"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Kate');
        $comment->setcommentContent('You wish! You\'ll do shitwork, scan, crack copyrights...');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $comment->setCreated(new \DateTime("2011-07-23 06:46:08"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Dade');
        $comment->setcommentContent('And if I win?');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $comment->setCommentCreated(new \DateTime("2011-07-23 10:22:46"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Kate');
        $comment->setcommentContent('Make it my first-born!');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $comment->setCommentCreated(new \DateTime("2011-07-23 11:08:08"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Dade');
        $comment->setcommentContent('Make it our first-date!');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $comment->setCommentCreated(new \DateTime("2011-07-24 18:56:01"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Kate');
        $comment->setcommentContent('I don\'t DO dates. But I don\'t lose either, so you\'re on!');
        $comment->setPlaceId($manager->merge($this->getReference('2')));
        $comment->setCommentCreated(new \DateTime("2011-07-25 22:28:42"));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Stanley');
        $comment->setcommentContent('It\'s not gonna end like this.');
        $comment->setPlaceId($manager->merge($this->getReference('3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Gabriel');
        $comment->setcommentContent('Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.');
        $comment->setPlaceId($manager->merge($this->getReference('3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Mile');
        $comment->setcommentContent('Doesn\'t Bill Gates have something like that?');
        $comment->setPlaceId($manager->merge($this->getReference('5')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setCommentUser('Gary');
        $comment->setcommentContent('Bill Who?');
        $comment->setPlaceId($manager->merge($this->getReference('5')));
        $manager->persist($comment);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
*/