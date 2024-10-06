<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = Carbon::now();

        Province::insert([
            ['id' => 1, 'name_en' => 'Western', 'name_si' => 'බස්නාහිර', 'name_ta' => 'மேல்', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name_en' => 'Central', 'name_si' => 'මධ්‍යම', 'name_ta' => 'மத்திய', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name_en' => 'Southern', 'name_si' => 'දකුණු', 'name_ta' => 'தென்', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'name_en' => 'North Western', 'name_si' => 'වයඹ', 'name_ta' => 'வட மேல்', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'name_en' => 'Sabaragamuwa', 'name_si' => 'සබරගමුව', 'name_ta' => 'சபரகமுவ', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 6, 'name_en' => 'Eastern', 'name_si' => 'නැගෙනහිර', 'name_ta' => 'கிழக்கு', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 7, 'name_en' => 'Uva', 'name_si' => 'ඌව', 'name_ta' => 'ஊவா', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 8, 'name_en' => 'North Central', 'name_si' => 'උතුරු මැද', 'name_ta' => 'வட மத்திய', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 9, 'name_en' => 'Northern', 'name_si' => 'උතුරු', 'name_ta' => 'வட', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
