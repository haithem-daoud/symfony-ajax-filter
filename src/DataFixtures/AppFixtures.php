<?php

namespace App\DataFixtures;

use App\Entity\Size;
use App\Factory\ProductFactory;
use App\Factory\SizeFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    protected array $sizes = [
        'S',
        'M',
        'L',
        'XL',
        'XXL',
    ];

    public function load(ObjectManager $manager)
    {
        ProductFactory::new()->createMany(8);

        $manager->flush();
    }
}