<?php
/**
 * Created by PhpStorm.
 * User: schmithd
 * Date: 21.06.2016
 * Time: 11:42
 */

use Opis\Container\Container;
use Store\Memory;
use Store\UserInterface;
use App\User;

include "vendor/autoload.php";
include "Storage/autoload.php";

$container = new Container();

$container->bind(UserInterface::class, Memory::class);

$user = $container(User::class);

$user->addUser(['name'=>'dani']);
$user->addUser(['name'=>'jani']);

print_r($user->search(1));



