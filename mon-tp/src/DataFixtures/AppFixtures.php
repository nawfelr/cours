<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        ;
        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $product->setTitle($faker->realText($maxNbChars = 20));
            $product->setPrice($faker->numberBetween($min = 25, $max = 600));

            $product->setDescription($faker->realText($maxNbChars = 200, $indexsize = 1));
            $product->setimage($faker->imageUrl($width = 640, $height = 480));
            $product->setCreateur($this->getReference(UserFixtures::ADMIN_USER_REFERENCE));



            $manager->persist($product);
        }
        $manager->flush();

    }
    public function getDependencies()
    {

        return [
                    UserFixtures::class,
                ];
    }
}
