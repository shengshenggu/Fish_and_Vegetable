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
			[
                'name' => 'Basella',
                'eng_name' => 'Basella alba',
                'chi_name' => '皇宮菜',
                'description' => 'Magnoliopsida:Caryophyllidae',
                'temp_min' => 23,
                'temp_max' => 27,
                'pH_min' => 5.5,
                'pH_max' => 7,
                'cropcycle_min' => 55,
                'cropcycle_max' => 180,
                'photoperiod_min' => 0,
                'photoperiod_max' => 14,
            ],
			[
                'name' => 'Basil',
                'eng_name' => 'Basil',
                'chi_name' => '羅勒',
                'description' => 'Magnoliopsida:Asteridae:Lamiales:Labiatae',
                'temp_min' => 18,
                'temp_max' => 27,
                'pH_min' => 6,
                'pH_max' => 7,
                'cropcycle_min' => 80,
                'cropcycle_max' => 270,
                'photoperiod_min' => 14,
                'photoperiod_max' => 24,
            ],
			[
                'name' => 'Colocasia',
                'eng_name' => 'Colocasia esculenta',
                'chi_name' => '芋頭',
                'description' => 'Liliopsida:Arecidae:Arales:Araceae',
                'temp_min' => 21,
                'temp_max' => 28,
                'pH_min' => 5.5,
                'pH_max' => 6.5,
                'cropcycle_min' => 180,
                'cropcycle_max' => 300,
                'photoperiod_min' => 0,
                'photoperiod_max' => 24,
            ],
			[
                'name' => 'Ipomoea',
                'eng_name' => 'Ipomoea Aquatic',
                'chi_name' => '空心菜',
                'description' => 'Magnoliopsida:Asteridae:Solanales',
                'temp_min' => 15,
                'temp_max' => 35,
                'pH_min' => 5,
                'pH_max' => 7,
                'cropcycle_min' => 30,
                'cropcycle_max' => 70,
                'photoperiod_min' => 0,
                'photoperiod_max' => 12,
            ],
			[
                'name' => 'Lettuce',
                'eng_name' => 'Lettuce',
                'chi_name' => '萵苣',
                'description' => 'Lactuca sativa',
                'temp_min' => 11,
                'temp_max' => 21,
                'pH_min' => 6,
                'pH_max' => 7,
                'cropcycle_min' => 35,
                'cropcycle_max' => 85,
                'photoperiod_min' => 0,
                'photoperiod_max' => 14,
            ],
			[
                'name' => 'Mentha',
                'eng_name' => 'Mentha arvensis',
                'chi_name' => '薄荷',
                'description' => '',
                'temp_min' => 10,
                'temp_max' => 25,
                'pH_min' => 5.5,
                'pH_max' => 6.4,
                'cropcycle_min' => 120,
                'cropcycle_max' => 365,
                'photoperiod_min' => 14,
                'photoperiod_max' => 24,
            ],
			[
                'name' => 'Rosmarinus',
                'eng_name' => 'Rosmarinus officinails',
                'chi_name' => '??',
                'description' => '',
                'temp_min' => 18,
                'temp_max' => 30,
                'pH_min' => 5.5,
                'pH_max' => 6.8,
                'cropcycle_min' => 120,
                'cropcycle_max' => 270,
                'photoperiod_min' => 0,
                'photoperiod_max' => 24,
            ],
			[
                'name' => 'Solanum',
                'eng_name' => 'Solanum melongena',
                'chi_name' => '??',
                'description' => '',
                'temp_min' => 20,
                'temp_max' => 35,
                'pH_min' => 5.5,
                'pH_max' => 6.8,
                'cropcycle_min' => 70,
                'cropcycle_max' => 120,
                'photoperiod_min' => 0,
                'photoperiod_max' => 24,
            ],
			[
                'name' => 'Strawbeny',
                'eng_name' => 'Strawbeny',
                'chi_name' => '??',
                'description' => '',
                'temp_min' => 11,
                'temp_max' => 24,
                'pH_min' => 6,
                'pH_max' => 6.8,
                'cropcycle_min' => 180,
                'cropcycle_max' => 270,
                'photoperiod_min' => 0,
                'photoperiod_max' => 24,
            ],
			[
                'name' => 'Tomato',
                'eng_name' => 'Tomato',
                'chi_name' => '番茄',
                'description' => '',
                'temp_min' => 20,
                'temp_max' => 27,
                'pH_min' => 5.5,
                'pH_max' => 6.8,
                'cropcycle_min' => 70,
                'cropcycle_max' => 150,
                'photoperiod_min' => 0,
                'photoperiod_max' => 24,
            ],
        ];
        foreach ($plants as $plant) {
            factory(App\Plant::class)->create($plant)->save();
        }
    }
}