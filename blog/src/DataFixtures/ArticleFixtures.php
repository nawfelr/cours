<?php

namespace App\DataFixtures;

use App\Entity\Article;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{


    public function load(ObjectManager $manager): void
    { // create 20 products! Bam!
        $faker = Faker\Factory::create('fr_FR');;
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitle($faker->realText($maxNbChars = 20));
            $article->setResume($faker->realText($maxNbChars = 200, $indexsize = 1));
            $article->setcontenu($faker->realText($maxNbChars = 200));
            $article->setimage($faker->imageUrl($width = 640, $height = 480));
            $article->setCreatedAt(new DateTimeImmutable());
            $article->setAuteur($this->getReference(UserFixtures::ADMIN_USER_REFERENCE));

            $manager->persist($article);
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
