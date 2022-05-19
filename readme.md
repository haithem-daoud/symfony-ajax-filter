# Project Description
This is small project to learn how to use filter with Symfony.

## Overview
![symfony ajax pagination](overview.png "symfony ajax pagination")

## Requirements
  1.PHP 8 <br>
  2.Symfony cli altest versiion

## Installation
  1. Setup your driver from the <b>.env</b> file <br>
  2. Run <b>composer install</b>
  3. Run these commands : <br>
    - symfony console doctrine:database:create <br>
    - symfony console doctrine:migration:migrate <br>
    - symfony console doctrine:fixture:load // Generate data from the Fixture <br>
  4. Run <b>npm i</b> and <b>npm run watch</b> for compiling css files
  5. Run command : symfony server:start
