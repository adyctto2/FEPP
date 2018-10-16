<?php

use Faker\Generator as Faker;

$factory->define(App\Entidades::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'descripcion' => $faker->sentence,
      'img' => $faker->url,
      'gerente' => $faker ->name,
      'presidente' => $faker ->name,
      'telefono' => $faker ->postcode,
      'email' => $faker ->safeEmail,
      'direccion' => $faker ->streetAddress,
      'website' => $faker ->url,
      'facebook' => $faker ->url,
      'twitter' => $faker ->url
    ];
});
