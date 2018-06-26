<?php
namespace App;
use Faker\Generator as Faker;
use App\Producto;
$factory->define(Model::class, function (Faker $faker) {
    return [
        'nombre'=>substr($faker->sentence(3), 0, -1),
        'u_medida'=>$faker->sentence(10),
        'cantidad'=>$faker->numberBetween($min = 1000, $max = 9000),
        'precio_venta_mayoreo'=>$faker->randomDouble(2 ,5, 150),
        'precio_vente_menudeo'=>$faker->randomDouble(2 ,5, 150),
        'fecha_ingreso'=>$faker->date($format = 'd-m-Y', $max = 'now'),
        'imagen' => $faker->imageUrl('250,250')
    ];
});
