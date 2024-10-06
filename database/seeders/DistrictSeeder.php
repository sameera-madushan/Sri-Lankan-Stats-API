<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        District::insert([
            ['id' => 1, 'province_id' => 6, 'name_en' => 'Ampara', 'name_si' => 'අම්පාර', 'name_ta' => 'அம்பாறை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'province_id' => 8, 'name_en' => 'Anuradhapura', 'name_si' => 'අනුරාධපුරය', 'name_ta' => 'அனுராதபுரம்', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'province_id' => 7, 'name_en' => 'Badulla', 'name_si' => 'බදුල්ල', 'name_ta' => 'பதுளை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'province_id' => 6, 'name_en' => 'Batticaloa', 'name_si' => 'මඩකලපුව', 'name_ta' => 'மட்டக்களப்பு', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'province_id' => 1, 'name_en' => 'Colombo', 'name_si' => 'කොළඹ', 'name_ta' => 'கொழும்பு', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 6, 'province_id' => 3, 'name_en' => 'Galle', 'name_si' => 'ගාල්ල', 'name_ta' => 'காலி', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 7, 'province_id' => 1, 'name_en' => 'Gampaha', 'name_si' => 'ගම්පහ', 'name_ta' => 'கம்பஹா', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 8, 'province_id' => 3, 'name_en' => 'Hambantota', 'name_si' => 'හම්බන්තොට', 'name_ta' => 'அம்பாந்தோட்டை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 9, 'province_id' => 9, 'name_en' => 'Jaffna', 'name_si' => 'යාපනය', 'name_ta' => 'யாழ்ப்பாணம்', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 10, 'province_id' => 1, 'name_en' => 'Kalutara', 'name_si' => 'කළුතර', 'name_ta' => 'களுத்துறை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 11, 'province_id' => 2, 'name_en' => 'Kandy', 'name_si' => 'මහනුවර', 'name_ta' => 'கண்டி', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 12, 'province_id' => 5, 'name_en' => 'Kegalle', 'name_si' => 'කෑගල්ල', 'name_ta' => 'கேகாலை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 13, 'province_id' => 9, 'name_en' => 'Kilinochchi', 'name_si' => 'කිලිනොච්චිය', 'name_ta' => 'கிளிநொச்சி', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 14, 'province_id' => 4, 'name_en' => 'Kurunegala', 'name_si' => 'කුරුණෑගල', 'name_ta' => 'குருணாகல்', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 15, 'province_id' => 9, 'name_en' => 'Mannar', 'name_si' => 'මන්නාරම', 'name_ta' => 'மன்னார்', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 16, 'province_id' => 2, 'name_en' => 'Matale', 'name_si' => 'මාතලේ', 'name_ta' => 'மாத்தளை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 17, 'province_id' => 3, 'name_en' => 'Matara', 'name_si' => 'මාතර', 'name_ta' => 'மாத்தறை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 18, 'province_id' => 7, 'name_en' => 'Monaragala', 'name_si' => 'මොණරාගල', 'name_ta' => 'மொணராகலை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 19, 'province_id' => 9, 'name_en' => 'Mullaitivu', 'name_si' => 'මුලතිව්', 'name_ta' => 'முல்லைத்தீவு', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 20, 'province_id' => 2, 'name_en' => 'Nuwara Eliya', 'name_si' => 'නුවර එළිය', 'name_ta' => 'நுவரேலியா', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 21, 'province_id' => 8, 'name_en' => 'Polonnaruwa', 'name_si' => 'පොළොන්නරුව', 'name_ta' => 'பொலன்னறுவை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 22, 'province_id' => 4, 'name_en' => 'Puttalam', 'name_si' => 'පුත්තලම', 'name_ta' => 'புத்தளம்', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 23, 'province_id' => 5, 'name_en' => 'Ratnapura', 'name_si' => 'රත්නපුර', 'name_ta' => 'இரத்தினபுரி', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 24, 'province_id' => 6, 'name_en' => 'Trincomalee', 'name_si' => 'ත්‍රිකුණාමලය', 'name_ta' => 'திருகோணமலை', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 25, 'province_id' => 9, 'name_en' => 'Vavuniya', 'name_si' => 'වව්නියාව', 'name_ta' => 'வவுனியா', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
