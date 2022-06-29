<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $actor1 = new Actor();
        $actor1->setName("Johny Depp");
        $manager->persist($actor1);
        $this->addReference('actor_1', $actor1);

        $manager->flush();

    }
}
