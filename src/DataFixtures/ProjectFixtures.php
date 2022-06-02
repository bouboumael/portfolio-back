<?php

namespace App\DataFixtures;

use App\Entity\Project;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    private const PROJECTS = [
        [
            'title' => 'JobPermut',
            'description' => "MVP sur le concept de l'échange d'un meme travail à distances différentes",
            'year' => 2021,
            'subDescription' => "Dernier Projet de formation",
            'imgSrc' => 'JobPermutPc.webp',
            'imgAlt'=> 'JobPermut',
            'link' => "http://jobpermut.fr/",
        ],
        [
            'title' => 'DevItEasy',
            'description' => "Site d'un projet de création d'agence web",
            'year' => 2021,
            'subDescription' => "Projet de fin d'étude et de futur professionnel",
            'imgSrc' => 'JobPermutPc.webp',
            'imgAlt'=> 'JobPermut',
            'link' => "https://deviteasy.fr/",
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PROJECTS as $project) {
            $entity = new Project();
            $entity->setTitle($project['title']);
            $entity->setDescription($project['description']);
            $entity->setYear(new DateTime($project['year'] . '-01-01'));
            $entity->setSubDescription($project['subDescription']);
            $entity->setImgSrc($project['imgSrc']);
            $entity->setImgAlt($project['imgAlt']);
            $entity->setLink($project['link']);
            $manager->persist($entity);
        }

        $manager->flush();
    }
}
