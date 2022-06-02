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
            'text' => "JobPermut est une application web permettant d'échanger son emploi par le même mais à proximité de chez vous. il met en relation les différents acteurs de ce changement afin d'améliorer la vie de chacun. JobPermut est un projet de fin de formation à la Wild Code School."
        ],
        [
            'title' => 'DevItEasy',
            'description' => "Site d'un projet de création d'agence web",
            'year' => 2021,
            'subDescription' => "Projet de fin d'étude et de futur professionnel",
            'imgSrc' => 'deviteasy.webp',
            'imgAlt'=> 'deviteasy webpage',
            'link' => "https://deviteasy.fr/",
        ],
    ];

    private const TEXT = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel felis sed lorem lobortis euismod ut nec lorem. Quisque vel egestas sapien. Duis nec pellentesque sem. Maecenas facilisis ante a lectus dapibus, suscipit elementum velit pellentesque. Donec lobortis odio at ante dignissim iaculis. Integer bibendum pulvinar cursus. Nam tincidunt lacinia dictum. Curabitur hendrerit ut nulla quis pharetra. Quisque sollicitudin massa quis ante suscipit, nec suscipit eros suscipit. Proin vitae volutpat nunc. Fusce lorem arcu, accumsan et elementum quis, pellentesque non eros. Praesent quis lectus est. Sed ac tellus vestibulum nulla scelerisque gravida vitae sed erat. Donec nec convallis sem. Duis iaculis id felis eu hendrerit. Curabitur laoreet vehicula luctus.

Phasellus non velit est. Nulla facilisi. Cras quis metus euismod, suscipit mi bibendum, sodales orci. In scelerisque quis massa luctus molestie. Donec ante nisi, consequat ac tristique eget, ultrices sed leo. Morbi eros purus, fringilla nec urna in, semper viverra diam. Aenean lobortis pellentesque mi, nec pharetra neque auctor non. Etiam in nisl lacus. Fusce convallis, sem vitae volutpat volutpat, quam magna gravida augue, vitae tempor erat lacus vel leo. Fusce sit amet turpis imperdiet, egestas nibh eget, elementum mauris. Duis ultrices porta ante a cursus. Donec pellentesque ultrices ipsum vitae pharetra.

Sed id dolor fermentum, porttitor ex ac, pharetra lectus. Aliquam et nisl dignissim nibh rutrum consequat. Suspendisse sapien nulla, pellentesque at ullamcorper ac, auctor eget velit. Nullam vulputate rutrum bibendum. Vivamus feugiat, dui a tristique semper, lectus elit faucibus ipsum, consequat euismod justo purus quis lectus. Aenean egestas venenatis orci id dictum. Etiam tristique lorem sed orci ultricies sodales. Vivamus sed sodales arcu. Sed semper quam id elit vehicula, a rutrum tortor scelerisque.

Quisque sem lacus, laoreet sed laoreet quis, ultricies rutrum ex. Mauris vitae eros eu massa eleifend pellentesque. Curabitur non ipsum id velit tempus gravida at id urna. Phasellus in metus iaculis, lobortis lectus non, accumsan elit. Maecenas tristique ipsum quis urna semper rutrum. Sed tristique, enim sed consequat dictum, nisi dolor elementum lectus, in commodo risus turpis elementum sapien. Sed quis rutrum eros. Sed posuere, justo ac feugiat feugiat, ipsum leo porttitor nisi, in efficitur erat odio vel neque. Donec posuere diam nec lectus ultrices, sed gravida nibh ultrices. Etiam neque tellus, ultrices non iaculis tincidunt, tincidunt eu sem.

Nulla sodales massa sed sapien feugiat imperdiet eget a tellus. Donec sit amet elit ac tellus laoreet aliquet eget et eros. Donec vulputate leo risus, nec imperdiet risus vehicula at. Morbi ut sem tristique, bibendum mauris vel, dignissim leo. Donec tincidunt diam justo, dignissim consectetur ex tincidunt viverra. Proin at vestibulum diam. Sed at lobortis arcu, nec hendrerit elit. Phasellus tempus rutrum ipsum, id tempor est viverra vitae. Aenean euismod ipsum eget gravida molestie. Curabitur sit amet fringilla est. Mauris interdum ultrices libero eget imperdiet. Suspendisse sagittis pharetra elit sed aliquet. Integer aliquet et nibh eu dictum. Cras hendrerit nisi mi, sit amet pretium sapien tincidunt nec. Nulla accumsan nunc posuere sagittis viverra. Etiam sed posuere urna.';

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
            $entity->setText($project['text'] ?? self::TEXT);
            $manager->persist($entity);
        }

        $manager->flush();
    }
}
