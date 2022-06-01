<?php

namespace App\DataFixtures;

use App\Entity\Social;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SocialFixtures extends Fixture
{
    private const socials = [
        [
            'name' => 'github',
            'url' => 'https://github.com/bouboumael',
            'icon' => 'fab fa-github',
            'isActive' => true,
        ],
        [
            'name' => 'Linkedin',
            'url' => 'https://www.linkedin.com/in/ma%C3%ABl-chariault/',
            'icon' => 'fab fa-linkedin',
            'isActive' => true,
        ],
        [
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/bouboumael',
            'icon' => 'fab fa-facebook',
            'isActive' => true,
        ],
        [
            'name' => 'Twitter',
            'url' => 'https://twitter.com/djboubou45',
            'icon' => 'fab fa-twitter',
            'isActive' => true,
        ]
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::socials as $social) {
            $entity = new Social();
            $entity->setName($social['name']);
            $entity->setUrl($social['url']);
            $entity->setIcon($social['icon']);
            $entity->setIsActive($social['isActive']);
            $manager->persist($entity);
        }
        $manager->flush();
    }
}
