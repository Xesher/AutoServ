<?php

use Illuminate\Database\Seeder;
use App\Brands;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $brands = [
            ['name' => 'Acura'],
            ['name' => 'Alfa Romeo'],
            ['name' => 'Aston Martin'],
            ['name' => 'Audi'],
            ['name' => 'Bentley'],
            ['name' => 'BMW'],
            ['name' => 'Buick'],
            ['name' => 'Cadillac'],
            ['name' => 'Chery'],
            ['name' => 'Chevrolet'],
            ['name' => 'Chrysler'],
            ['name' => 'Citroen'],
            ['name' => 'Daewoo'],
            ['name' => 'Daihatsu'],
            ['name' => 'Dodge'],
            ['name' => 'FAW'],
            ['name' => 'Ferrari'],
            ['name' => 'Fiat'],
            ['name' => 'Ford'],
            ['name' => 'Ford'],
            ['name' => 'Geely'],
            ['name' => 'GMC'],
            ['name' => 'Great Wall'],
            ['name' => 'Honda'],
            ['name' => 'Hummer'],
            ['name' => 'Hyundai'],
            ['name' => 'Infiniti'],
            ['name' => 'Isuzu'],
            ['name' => 'Jaguar'],
            ['name' => 'Jeep'],
            ['name' => 'Kia'],
            ['name' => 'Lamborghini'],
            ['name' => 'Lancia'],
            ['name' => 'Land Rover'],
            ['name' => 'Lexus'],
            ['name' => 'Lifan'],
            ['name' => 'Lincoln'],
            ['name' => 'Lotus'],
            ['name' => 'Marussia'],
            ['name' => 'Maybach'],
            ['name' => 'Mazda'],
            ['name' => 'McLaren'],
            ['name' => 'Mercedes'],
            ['name' => 'Mercury'],
            ['name' => 'MG'],
            ['name' => 'Mini'],
            ['name' => 'Mitsubishi'],
            ['name' => 'Nissan'],
            ['name' => 'Opel'],
            ['name' => 'Peugeot'],
            ['name' => 'Pontiac'],
            ['name' => 'Porsche'],
            ['name' => 'Renault'],
            ['name' => 'Rolls-Royce'],
            ['name' => 'Rover'],
            ['name' => 'Saab'],
            ['name' => 'Saturn'],
            ['name' => 'Scion'],
            ['name' => 'Seat'],
            ['name' => 'Skoda'],
            ['name' => 'Smart'],
            ['name' => 'Ssang Yong'],
            ['name' => 'Subaru'],
            ['name' => 'Suzuki'],
            ['name' => 'Tesla'],
            ['name' => 'Toyota'],
            ['name' => 'Volkswagen'],
            ['name' => 'Volvo'],
            ['name' => 'ВАЗ'],
            ['name' => 'ГАЗ'],
            ['name' => 'УАЗ']
        ];
        foreach ($brands as $item) {
            Brand::created($item['name']);
        }
    }
}
