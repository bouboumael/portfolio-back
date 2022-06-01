<?php

namespace App\DataFixtures;

use App\Entity\Technology;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TechnologyFixtures extends Fixture
{
    private const TECHNOLOGIES = [
        [
            "logoSrc" => "logos/html.png",
            "logoAlt" => "Html Logo",
            "starNumber" => 5,
            "link" => "https://developer.mozilla.org/fr/docs/Web/HTML",
            "title" => "HTML 5",
        ],
        [
            "logoSrc" => "logos/css.png",
            "logoAlt" => "Css Logo",
            "starNumber" => 4,
            "link" => "https://developer.mozilla.org/fr/docs/Web/CSS",
            "title" => "CSS 3",
        ],
        [
            "logoSrc" => "logos/js.png",
            "logoAlt" => "Js Logo",
            "starNumber" => 4,
            "link" => "https://developer.mozilla.org/fr/docs/Web/JavaScript",
            "title" => "JavaScript",
        ],
        [
            "logoSrc" => "logos/php.png",
            "logoAlt" => "Php Logo",
            "starNumber" => 5,
            "link" => "https://www.php.net/",
            "title" => "PHP",
        ],
        [
            "logoSrc" => "logos/Bootstrap.svg",
            "logoAlt" => "Bootstrap Logo",
            "starNumber" => 5,
            "link" => "https://getbootstrap.com/",
            "title" => "Bootstrap",
        ],
        [
            "logoSrc" => "logos/Tailwind.png",
            "logoAlt" => "Tailwind Logo",
            "starNumber" => 4,
            "link" => "https://tailwindcss.com/",
            "title" => "Tailwind",
        ],
        [
            "logoSrc" => "logos/symfony.png",
            "logoAlt" => "Symfony Logo",
            "starNumber" => 5,
            "link" => "https://symfony.com/",
            "title" => "Symfony",
        ],
        [
            "logoSrc" => "logos/mysql.png",
            "logoAlt" => "Mysql Logo",
            "starNumber" => 5,
            "link" => "https://www.mysql.com/",
            "title" => "MySQL",
        ],
        [
            "logoSrc" => "logos/react.png",
            "logoAlt" => "React Logo",
            "starNumber" => 4,
            "link" => "https://reactjs.org/",
            "title" => "React",
        ],
        [
            "logoSrc" => "logos/react-native.png",
            "logoAlt" => "React Native Logo",
            "starNumber" => 2,
            "link" => "https://reactnative.dev/",
            "title" => "React Native",
        ],
        [
            "logoSrc" => "logos/Gatsby.png",
            "logoAlt" => "Gatsby Logo",
            "starNumber" => 3,
            "link" => "https://www.gatsbyjs.org/",
            "title" => "Gatsby",
        ],
        [
            "logoSrc" => "logos/WordPress.png",
            "logoAlt" => "WordPress Logo",
            "starNumber" => 4,
            "link" => "https://wordpress.org/",
            "title" => "WordPress",
        ],
        [
            "logoSrc" => "logos/git.png",
            "logoAlt" => "Git Logo",
            "starNumber" => 5,
            "link" => "https://git-scm.com/",
            "title" => "Git",
        ],
        [
            "logoSrc" => "logos/linux.png",
            "logoAlt" => "Linux Logo",
            "starNumber" => 4,
            "link" => "https://www.linux.org/",
            "title" => "Linux",
        ],
        [
            "logoSrc" => "logos/windows.png",
            "logoAlt" => "Windows Logo",
            "starNumber" => 5,
            "link" =>"https://www.microsoft.com/fr-fr/windows?r=1",
            "title" => "Windows",
        ],
        [
            "logoSrc" => "logos/office.png",
            "logoAlt" => "Office Logo",
            "starNumber" => 4,
            "link" => "https://office.com/fr-fr/",
            "title" => "Office 365",
        ],
        [
            "logoSrc" => "logos/phpstorm.png",
            "logoAlt" => "Phpstorm Logo",
            "starNumber" => 5,
            "link" => "https://www.jetbrains.com/phpstorm/",
            "title" => "Phpstorm",
        ],
        [
            "logoSrc" => "logos/webstorm.png",
            "logoAlt" => "logo Webstorm",
            "starNumber" => 5,
            "link" => "https://www.jetbrains.com/fr-fr/webstorm/",
            "title" => 'Webstorm'
        ],
        [
            "logoSrc" => "logos/vscode.png",
            "logoAlt" => "logo VsCode",
            "starNumber" => 5,
            "link" => "https://code.visualstudio.com/",
            "title" => 'VsCode'
        ],
        [
            "logoSrc" => "logos/docker.png",
            "logoAlt" => "logo Docker",
            "starNumber" => 3,
            "link" => "https://www.docker.com/",
            "title" => 'Docker'
        ]
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::TECHNOLOGIES as $technology) {
            $technologyObject = new Technology();
            $technologyObject->setLogoSrc($technology["logoSrc"]);
            $technologyObject->setLogoAlt($technology["logoAlt"]);
            $technologyObject->setStarNumber($technology["starNumber"]);
            $technologyObject->setLink($technology["link"]);
            $technologyObject->setTitle($technology["title"]);
            $manager->persist($technologyObject);
        }

        $manager->flush();
    }
}
