<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\ActorFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class MovieFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $movie1 = new Movie();
        $movie1->setTitle("Pirate of the caribean");
        $movie1->setDescription("Best movie ever");
        $movie1->setReleaseYear(2012);
        $movie1->addActor($this->getReference('actor_1'));
        $movie1->addActor($this->getReference('actor_2'));
        $manager->persist($movie1);

        $movie2 = new Movie();
        $movie2->setTitle("Spider man");
        $movie2->setDescription("Best marvel movie");
        $movie2->setReleaseYear(2016);
        $movie2->addActor($this->getReference('actor_2'));
        $movie2->addActor($this->getReference('actor_3'));
        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle("Up!");
        $movie3->setDescription("Best pixal movie");
        $movie3->setReleaseYear(2014);
        $movie3->addActor($this->getReference('actor_3'));
        $movie3->addActor($this->getReference('actor_1'));
        $manager->persist($movie3);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ActorFixtures::class,
        ];
    }
}