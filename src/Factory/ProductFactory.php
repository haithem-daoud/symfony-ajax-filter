<?php

namespace App\Factory;

use App\Entity\Product;
use App\Entity\Size;
use App\Repository\ProductRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Product|Proxy findOrCreate(array $attributes)
 * @method static Product|Proxy random()
 * @method static Product[]|Proxy[] randomSet(int $number)
 * @method static Product[]|Proxy[] randomRange(int $min, int $max)
 * @method static ProductRepository|RepositoryProxy repository()
 * @method Product|Proxy create($attributes = [])
 * @method Product[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class ProductFactory extends ModelFactory
{
    protected array $sizes = [
        'S',
        'M',
        'L',
        'XL',
        'XXL',
    ];

    protected function getDefaults(): array
    {
        return [
            'title' => 'Product ' . self::faker()->numberBetween(0, 10),
            'subtitle' => self::faker()->realText(20),
            'price' => self::faker()->numberBetween(0, 100),
            'image' => 'product' . self::faker()->numberBetween(1, 4). '.png',
            'size' => SizeFactory::findOrCreate(['title' => self::faker()->randomElement($this->sizes)]),
        ];
    }

    protected function initialize(): self
    {
        return $this;
    }

    protected static function getClass(): string
    {
        return Product::class;
    }
}
