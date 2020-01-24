<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 15; $i++) { 
            $user = new User();
        $user->setEmail('lucas' . $i . '@lucas.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            $i
        ));
        $manager->persist($user);
        $manager->flush();
        };
    }
}
