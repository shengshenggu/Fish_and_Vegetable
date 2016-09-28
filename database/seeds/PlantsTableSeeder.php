<?php

use Illuminate\Database\Seeder;

class PlantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plants = [
            [
                'name' => 'Allium',
                'eng_name' => 'Allium schoenoprasum',
                'chi_name' => '韭菜',
                'description' => 'Liliopsida:Liliidae:Asparagales:Alliaceae',
                'temp_min' => 10,
                'temp_max' => 20,
                'pH_min' => 6,
                'pH_max' => 6.6,
                'cropcycle_min' => 70,
                'cropcycle_max' => 100,
                'photoperiod_min' => 14,
                'photoperiod_max' => 24,
            ],
            [
                'name' => 'Apium',
                'eng_name' => 'Apium graveolens',
                'chi_name' => '芹菜',
                'description' => 'Magnoliopsida:Rosidae',
                'temp_min' => 18,
                'temp_max' => 25,
                'pH_min' => 5.8,
                'pH_max' => 6.8,
                'cropcycle_min' => 80,
                'cropcycle_max' => 160,
                'photoperiod_min' => 14,
                'photoperiod_max' => 24,
            ],
        ];
        foreach ($plants as $plant) {
            factory(App\Plant::class)->create($plant)->save();
        }
    }
}
