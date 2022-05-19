<?php

namespace App\Classes;

use App\Entity\Size;

class Search
{
    /**
     * @var string|null
     */
    public string|null $string = '';

    /**
     * @var Size[]
     */
    public array $sizes = [];
}