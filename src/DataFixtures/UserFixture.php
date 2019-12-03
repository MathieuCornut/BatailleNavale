<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

//Generateur de noms cohérents
use Faker;

class UserFixture extends Fixture
{
    private $passwordEncoder;

	public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
		$this->passwordEncoder = $passwordEncoder;
    }
    
    public function load(ObjectManager $manager) {
        $now = date_create(date('Y-m-d'));
        // on créé 1 admin et 10 utilisateurs

        $fakeUser = new User();
        $fakeUser->setPseudo('Admin');
        $fakeUser->setRoles(['ROLE_ADMIN']);
        $fakeUser->setEmail('admin@abusdepouvoir.com');
        $fakeUser->setPassword($this->passwordEncoder->encodePassword(
            $fakeUser,
            'aliptic87'
        ));
        $fakeUser->setRegistrationDate($now);
        $fakeUser->setCountCombat(10000);
        $fakeUser->setCountVictory(rand(0,10000));
        $manager->persist($fakeUser);

        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            

            $fakeUser = new User();
            $fakeUser->setPseudo($faker->name);
            $fakeUser->setRoles(['ROLE_USER']);
            $fakeUser->setEmail($faker->email);
            $fakeUser->setPassword($this->passwordEncoder->encodePassword(
                $fakeUser,
                'az'
            ));
            $fakeUser->setRegistrationDate($now);
            $fakeUser->setCountCombat(10000);
            $fakeUser->setCountVictory(rand(0,10000));

            $manager->persist($fakeUser);
        }

        $manager->flush();
    }
}