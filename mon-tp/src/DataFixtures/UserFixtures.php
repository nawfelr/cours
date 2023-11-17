<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class UserFixtures extends Fixture
{
    public const ADMIN_USER_REFERENCE = 'admin-user';

    private UserPasswordHasherInterface $hasher;
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    { // create 20 products! Bam!
        $faker = Faker\Factory::create('fr_FR');
        ;
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setEmail($faker->email);
            $password = $this->hasher->hashPassword($user, '12345678');
            $user->setPassword($password);

            $manager->persist($user);
        }
        $manager->flush();
        $this->addReference(self::ADMIN_USER_REFERENCE, $user);
    }
}