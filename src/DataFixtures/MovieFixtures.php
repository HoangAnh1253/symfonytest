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
        $manager->persist($movie1);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ActorFixtures::class,
        ];
    }
}
