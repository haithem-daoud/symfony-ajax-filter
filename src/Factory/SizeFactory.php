<?php

namespace App\Factory;

use App\Entity\Size;
use App\Repository\SizeRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static Size|Proxy findOrCreate(array $attributes)
 * @method static Size|Proxy random()
 * @method static Size[]|Proxy[] randomSet(int $number)
 * @method static Size[]|Proxy[] randomRange(int $min, int $max)
 * @method static SizeRepository|RepositoryProxy repository()
 * @method Size|Proxy create($attributes = [])
 * @method Size[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class SizeFactory extends ModelFactory
{


    protected function getDefaults(): array
    {
        return [
            'title' => 'this is a test',
        ];
    }

    protected function initialize(): self
    {
        return $this;
    }

    protected static function getClass(): string
    {
        return Size::class;
    }
}
