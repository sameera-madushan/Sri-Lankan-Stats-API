<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\PollingDivision;
use Illuminate\Database\Seeder;

class PollingDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        PollingDivision::insert([


            // Anuradhapura (polling_district_id = 1)
            ['polling_district_id' => 1, 'name_en' => 'Medawachchiya', 'name_si' => 'මැදවච්චිය', 'name_ta' => 'மதவாச்சி', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 1, 'name_en' => 'Horowpathana', 'name_si' => 'හොරොව්පතාන', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 1, 'name_en' => 'Anuradhapura East', 'name_si' => 'අනුරාධපුර නැගෙනහිර', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 1, 'name_en' => 'Anuradhapura West', 'name_si' => 'අනුරාධපුර බටහිර', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 1, 'name_en' => 'Kalawewa', 'name_si' => 'කලාවැව', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 1, 'name_en' => 'Mihinthale', 'name_si' => 'මිහින්තලේ', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 1, 'name_en' => 'Kekirawa', 'name_si' => 'කැකිරාව', 'name_ta' => 'கெக்கிராவ', 'created_at' => $now, 'updated_at' => $now],

            // Badulla (polling_district_id = 2)
            ['polling_district_id' => 2, 'name_en' => 'Mahiyanganaya', 'name_si' => 'මහියංගනය', 'name_ta' => 'மஹியங்கனை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 2, 'name_en' => 'Wiyaluwa', 'name_si' => 'වියළුව', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 2, 'name_en' => 'Passara', 'name_si' => 'පස්සර', 'name_ta' => 'பசறை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 2, 'name_en' => 'Badulla', 'name_si' => 'බදුල්ල', 'name_ta' => 'பதுளை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 2, 'name_en' => 'Haliela', 'name_si' => 'හාලිඇල', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 2, 'name_en' => 'Uvaparanagama', 'name_si' => 'ඌව-පරණගම', 'name_ta' => 'ஊவா பரணகம', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 2, 'name_en' => 'Welimada', 'name_si' => 'වැලිමඩ', 'name_ta' => 'வெளிமடை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 2, 'name_en' => 'Bandarawela', 'name_si' => 'බණ්ඩාරවෙල', 'name_ta' => 'பண்டாரவளை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 2, 'name_en' => 'Haputhale', 'name_si' => 'හපුතලේ', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],

            // Batticaloa (polling_district_id = 3)
            ['polling_district_id' => 3, 'name_en' => 'Kalkudah', 'name_si' => 'කල්කුඩා', 'name_ta' => 'கல்குடா', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 3, 'name_en' => 'Batticaloa', 'name_si' => 'මඩකලපුව', 'name_ta' => 'மட்டக்களப்பு', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 3, 'name_en' => 'Paddiruppu', 'name_si' => 'පද්දිරුප්පු', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],

            // Colombo (polling_district_id = 4)
            ['polling_district_id' => 4, 'name_en' => 'Colombo North', 'name_si' => 'උතුරු කොළඹ', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Colombo Central', 'name_si' => 'මධ්‍යම කොළඹ', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Borella', 'name_si' => 'බොරැල්ල', 'name_ta' => 'பொறளை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Colombo East', 'name_si' => 'නැගෙනහිර කොළඹ', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Colombo West', 'name_si' => 'බටහිර කොළඹ', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Dehiwala', 'name_si' => 'දෙහිවල', 'name_ta' => 'தெஹிவளை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Ratmalana', 'name_si' => 'රත්මලාන', 'name_ta' => 'இரத்மலானை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Kolonnawa', 'name_si' => 'කොලොන්නාව', 'name_ta' => 'கொலன்னாவ', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Kotte', 'name_si' => 'කෝට්ටේ', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Kaduwela', 'name_si' => 'කඩුවෙල', 'name_ta' => 'கடுவெல', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Avissawella', 'name_si' => 'අවිස්සාවේල්ල', 'name_ta' => 'அவிசாவளை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Homagama', 'name_si' => 'හෝමාගම', 'name_ta' => 'ஹோமாகம', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Maharagama', 'name_si' => 'මහරගම', 'name_ta' => 'மகரகம', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Kesbewa', 'name_si' => 'කැස්බෑව', 'name_ta' => 'கெஸ்பேவா', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 4, 'name_en' => 'Moratuwa', 'name_si' => 'මොරටුව', 'name_ta' => 'மொரட்டுவ', 'created_at' => $now, 'updated_at' => $now],

            // Digamadulla (polling_district_id = 5)
            ['polling_district_id' => 5, 'name_en' => 'Ampara', 'name_si' => 'අම්පාර', 'name_ta' => 'அம்பாறை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 5, 'name_en' => 'Sammanthurai', 'name_si' => 'සම්මන්තුරේ', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 5, 'name_en' => 'Kalmunai', 'name_si' => 'කල්මුණේ', 'name_ta' => 'கல்முனை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 5, 'name_en' => 'Pothuvil', 'name_si' => 'පොතුවිල්', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],

            // Galle (polling_district_id = 6)
            ['polling_district_id' => 6, 'name_en' => 'Balapitiya', 'name_si' => 'බලපිටිය', 'name_ta' => 'பலபிட்டிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 6, 'name_en' => 'Ambalangoda', 'name_si' => 'අම්බලන්ගොඩ', 'name_ta' => 'அம்பலாங்கொடை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 6, 'name_en' => 'Karandeniya', 'name_si' => 'කරන්දෙණිය', 'name_ta' => 'கரந்தெனிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 6, 'name_en' => 'Bentara Elpitiya', 'name_si' => 'බෙන්තර ඇල්පිටිය', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 6, 'name_en' => 'Hiniduma', 'name_si' => 'හිනිදුම', 'name_ta' => 'ஹினிடும', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 6, 'name_en' => 'Baddegama', 'name_si' => 'බද්දේගම', 'name_ta' => 'பத்தேகம', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 6, 'name_en' => 'Rathgama', 'name_si' => 'රත්ගම', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 6, 'name_en' => 'Galle', 'name_si' => 'ගාල්ල', 'name_ta' => 'காலி', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 6, 'name_en' => 'Akmeemana', 'name_si' => 'අක්මීමාන', 'name_ta' => 'அக்மீமான', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 6, 'name_en' => 'Habaraduwa', 'name_si' => 'හබරාදූව', 'name_ta' => 'ஹபரதுவ', 'created_at' => $now, 'updated_at' => $now],

            // Gampaha (polling_district_id = 7)
            ['polling_district_id' => 7, 'name_en' => 'Wattala', 'name_si' => 'වත්තල', 'name_ta' => 'வத்தளை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Negombo', 'name_si' => 'මීගමුව', 'name_ta' => 'நீர்கொழும்பு', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Katana', 'name_si' => 'කටාන', 'name_ta' => 'கட்டான', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Divulapitiya', 'name_si' => 'දිවුලපිටිය', 'name_ta' => 'திவுலபிட்டிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Mirigama', 'name_si' => 'මීරිගම', 'name_ta' => 'மீரிகம', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Minuwangoda', 'name_si' => 'මිනුවන්ගොඩ', 'name_ta' => 'மினுவன்கொட', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Attanagalla', 'name_si' => 'අත්තනගල්ල', 'name_ta' => 'அத்தனகல்ல', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Gampaha', 'name_si' => 'ගම්පහ', 'name_ta' => 'கம்பஹா', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Ja-Ela', 'name_si' => 'ජා-ඇල', 'name_ta' => 'ஜா-எல', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Mahara', 'name_si' => 'මහර', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Dompe', 'name_si' => 'දොම්පෙ', 'name_ta' => 'தொம்பே', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Biyagama', 'name_si' => 'බියගම', 'name_ta' => 'பியகம', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 7, 'name_en' => 'Kelaniya', 'name_si' => 'කැළණිය', 'name_ta' => 'களனி', 'created_at' => $now, 'updated_at' => $now],

            // Hambantota (polling_district_id = 8)
            ['polling_district_id' => 8, 'name_en' => 'Mulkirigala', 'name_si' => 'මුල්කිරිගල', 'name_ta' => 'முல்கிரிகல', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 8, 'name_en' => 'Beliatta', 'name_si' => 'බෙලිඅත්ත', 'name_ta' => 'பெலியத்த', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 8, 'name_en' => 'Tangalle', 'name_si' => 'තංගල්ල', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 8, 'name_en' => 'Tissamaharama', 'name_si' => 'තිස්සමහාරාම', 'name_ta' => 'திஸ்ஸமஹராமை', 'created_at' => $now, 'updated_at' => $now],

            // Jaffna (polling_district_id = 9)
            ['polling_district_id' => 9, 'name_en' => 'Kayts', 'name_si' => 'කයිට්ස්', 'name_ta' => 'ஊர்காவற்துறை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Vaddukoddai', 'name_si' => 'වඩ්ඩුකොඩ්ඩෙයි', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Kankesanthurai', 'name_si' => 'කන්කසන්තුරේ', 'name_ta' => 'காங்கேசன்துறை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Manipay', 'name_si' => 'මනිපායි', 'name_ta' => 'மானிப்பாய்', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Kopai', 'name_si' => 'කෝපායි', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Uduppiddy', 'name_si' => 'උඩුප්පිඩ්ඩි', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Point Pedro', 'name_si' => 'පේදුරුතුඩුව', 'name_ta' => 'பருத்தித்துறை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Chavakachcheri', 'name_si' => 'චාවකච්චේරි', 'name_ta' => 'சாவகச்சேரி', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Nallur', 'name_si' => 'නල්ලුර්', 'name_ta' => 'நல்லூர்', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Jaffna', 'name_si' => 'යාපනය', 'name_ta' => 'யாழ்ப்பாணம்', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 9, 'name_en' => 'Kilinochchi', 'name_si' => 'කිළිනොච්චි', 'name_ta' => 'கிளிநொச்சி', 'created_at' => $now, 'updated_at' => $now],

            // Kalutara (polling_district_id = 10)
            ['polling_district_id' => 10, 'name_en' => 'Panadura', 'name_si' => 'පානදුර', 'name_ta' => 'பாணந்துறை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 10, 'name_en' => 'Bandaragama', 'name_si' => 'බණ්ඩාරගම', 'name_ta' => 'பண்டாரகம', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 10, 'name_en' => 'Horana', 'name_si' => 'හොරණ', 'name_ta' => 'ஹொரன', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 10, 'name_en' => 'Bulathsinhala', 'name_si' => 'බුලත්සිංහල', 'name_ta' => 'புலத்சிங்கள', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 10, 'name_en' => 'Matugama', 'name_si' => 'මතුගම', 'name_ta' => 'மத்துகம', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 10, 'name_en' => 'Kalutara', 'name_si' => 'කළුතර', 'name_ta' => 'களுத்துறை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 10, 'name_en' => 'Beruwala', 'name_si' => 'බේරුවල', 'name_ta' => 'பேருவளை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 10, 'name_en' => 'Agalawatta', 'name_si' => 'අගලවත්ත', 'name_ta' => 'அகலவத்தை', 'created_at' => $now, 'updated_at' => $now],

            // Kandy (polling_district_id = 11)
            ['polling_district_id' => 11, 'name_en' => 'Galagedara', 'name_si' => 'ගලගෙදර', 'name_ta' => 'கலகெதர', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Harispattuwa', 'name_si' => 'හාරිස්පත්තුව', 'name_ta' => 'ஹாரிஸ்பத்துவ', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Patadumbara', 'name_si' => 'පටදුම්බර', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Udadumbara', 'name_si' => 'උඩදුම්බර', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Teldeniya', 'name_si' => 'තෙල්දෙණිය', 'name_ta' => 'தெல்தெனிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Kundasale', 'name_si' => 'කුණ්ඩසාලෙ', 'name_ta' => 'குண்டசாலை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Hewahata', 'name_si' => 'හේවාහැට', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Senkadagala', 'name_si' => 'සෙංකඩගල', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Kandy', 'name_si' => 'මහනුවර', 'name_ta' => 'கண்டி', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Yatinuwara', 'name_si' => 'යටිනුවර', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Udunuwara', 'name_si' => 'උඩුනුවර', 'name_ta' => 'உடுநுவர', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Gampola', 'name_si' => 'ගම්පොල', 'name_ta' => 'கம்பளை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 11, 'name_en' => 'Nawalapitiya', 'name_si' => 'නාවලපිටිය', 'name_ta' => 'நாவலப்பிட்டி', 'created_at' => $now, 'updated_at' => $now],

            // Kegalle (polling_district_id = 12)
            ['polling_district_id' => 12, 'name_en' => 'Dedigama', 'name_si' => 'දැදිගම', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 12, 'name_en' => 'Galigamuwa', 'name_si' => 'ගලිගමුව', 'name_ta' => 'கலிகமுவ', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 12, 'name_en' => 'Kegalle', 'name_si' => 'කෑගල්ල', 'name_ta' => 'கேகாலை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 12, 'name_en' => 'Rambukkana', 'name_si' => 'රඹුක්කන', 'name_ta' => 'ரம்புக்கன', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 12, 'name_en' => 'Mawanella', 'name_si' => 'මාවනැල්ල', 'name_ta' => 'மாவனெல்ல', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 12, 'name_en' => 'Aranayake', 'name_si' => 'අරණායක', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 12, 'name_en' => 'Yatiyantota', 'name_si' => 'යටියන්තොට', 'name_ta' => 'யாட்டியாந்தோட்டை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 12, 'name_en' => 'Ruwanwella', 'name_si' => 'රුවන්වැල්ල', 'name_ta' => 'ருவன்வெல்ல', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 12, 'name_en' => 'Deraniyagala', 'name_si' => 'දැරණියගල', 'name_ta' => 'தெரணியகல', 'created_at' => $now, 'updated_at' => $now],

            // Kurunegala (polling_district_id = 13)
            ['polling_district_id' => 13, 'name_en' => 'Galgamuwa', 'name_si' => 'ගල්ගමුව', 'name_ta' => 'கல்கமுவ', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Nikaweratiya', 'name_si' => 'නිකවැරටිය', 'name_ta' => 'நிக்கவெரட்டிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Yapahuwa', 'name_si' => 'යාපහුව', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Hiriyala', 'name_si' => 'හිරියාල', 'name_ta' => 'ஹிரியால', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Wariyapola', 'name_si' => 'වාරියපොළ', 'name_ta' => 'வாரியபொல', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Paduwasnuwara', 'name_si' => 'පඩුවස්නුවර', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Bingiriya', 'name_si' => 'බින්ගිරිය', 'name_ta' => 'பிங்கிரிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Katugampola', 'name_si' => 'කටුගම්පොල', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Kuliyapitiya', 'name_si' => 'කුලියාපිටිය', 'name_ta' => 'குளியபிட்டிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Dambadeniya', 'name_si' => 'දඹදෙණිය', 'name_ta' => 'தம்பதெனிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Polgahawela', 'name_si' => 'පොල්ගහවෙල', 'name_ta' => 'பொல்காவெல', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Kurunegala', 'name_si' => 'කුරුණෑගල', 'name_ta' => 'குருநாகல்', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Mawathagama', 'name_si' => 'මාවතගම', 'name_ta' => 'மாவத்தகம', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 13, 'name_en' => 'Dodangaslanda', 'name_si' => 'දොඩන්ගස්ලන්ද', 'name_ta' => 'தொடங்கஸ்லாண்டா', 'created_at' => $now, 'updated_at' => $now],

            // Matale (polling_district_id = 14)
            ['polling_district_id' => 14, 'name_en' => 'Dambulla', 'name_si' => 'දඹුල්ල', 'name_ta' => 'தம்புள்ள', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 14, 'name_en' => 'Laggala', 'name_si' => 'ලග්ගල', 'name_ta' => 'லக்கல', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 14, 'name_en' => 'Matale', 'name_si' => 'මාතලේ', 'name_ta' => 'மாத்தளை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 14, 'name_en' => 'Rattota', 'name_si' => 'රත්තොට', 'name_ta' => 'ரத்தோட்ட', 'created_at' => $now, 'updated_at' => $now],

            // Matara (polling_district_id = 15)
            ['polling_district_id' => 15, 'name_en' => 'Deniyaya', 'name_si' => 'දෙණියාය', 'name_ta' => 'தெனியாய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 15, 'name_en' => 'Hakmana', 'name_si' => 'හක්මන', 'name_ta' => 'ஹக்மன', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 15, 'name_en' => 'Akuressa', 'name_si' => 'අකුරැස්ස', 'name_ta' => 'அக்குரஸ்ஸை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 15, 'name_en' => 'Kamburupitiya', 'name_si' => 'කඹුරුපිටිය', 'name_ta' => 'கம்புருபிட்டிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 15, 'name_en' => 'Devinuwara (Dondra)', 'name_si' => 'දෙවිනුවර (දෙවුන්දර)', 'name_ta' => 'தெவிநுவர', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 15, 'name_en' => 'Matara', 'name_si' => 'මාතර', 'name_ta' => 'மாத்தறை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 15, 'name_en' => 'Weligama', 'name_si' => 'වැලිගම', 'name_ta' => 'வெலிகம', 'created_at' => $now, 'updated_at' => $now],

            // Monaragala (polling_district_id = 16)
            ['polling_district_id' => 16, 'name_en' => 'Bibila', 'name_si' => 'බිබිල', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 16, 'name_en' => 'Moneragala', 'name_si' => 'මොණරාගල', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 16, 'name_en' => 'Wellawaya', 'name_si' => 'වැල්ලවාය', 'name_ta' => 'வெல்லவாய', 'created_at' => $now, 'updated_at' => $now],

            // Nuwara Eliya (polling_district_id = 17)
            ['polling_district_id' => 17, 'name_en' => 'N.E. Maskeliya', 'name_si' => null, 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 17, 'name_en' => 'Kothmale', 'name_si' => 'කොත්මලේ', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 17, 'name_en' => 'Hanguranketha', 'name_si' => 'හඟුරන්කෙත', 'name_ta' => 'ஹங்குரன்கெத', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 17, 'name_en' => 'Walapane', 'name_si' => 'වලපනේ', 'name_ta' => 'வலப்பனை', 'created_at' => $now, 'updated_at' => $now],

            // Polonnaruwa (polling_district_id = 18)
            ['polling_district_id' => 18, 'name_en' => 'Minneriya', 'name_si' => 'මින්නේරිය', 'name_ta' => 'மின்னேரியா', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 18, 'name_en' => 'Medirigiriya', 'name_si' => 'මැදිරිගිරිය', 'name_ta' => 'மெதிரிகிரிய', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 18, 'name_en' => 'Polonnaruwa', 'name_si' => 'පොළොන්නරුව', 'name_ta' => 'பொலநறுவை', 'created_at' => $now, 'updated_at' => $now],

            // Puttalam (polling_district_id = 19)
            ['polling_district_id' => 19, 'name_en' => 'Puttalam', 'name_si' => 'පුත්තලම', 'name_ta' => 'புத்தளம்', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 19, 'name_en' => 'Anamaduwa', 'name_si' => 'ආනමඩුව', 'name_ta' => 'ஆனைமடு', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 19, 'name_en' => 'Chilaw', 'name_si' => 'හලාවත', 'name_ta' => 'சிலாபம்', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 19, 'name_en' => 'Nattandiya', 'name_si' => 'නාත්තණ්ඩිය', 'name_ta' => 'நாத்தாண்டி', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 19, 'name_en' => 'Wennappuwa', 'name_si' => 'වෙන්නප්පුව', 'name_ta' => 'வென்னப்புவ', 'created_at' => $now, 'updated_at' => $now],

            // Ratnapura (polling_district_id = 20)
            ['polling_district_id' => 20, 'name_en' => 'Eheliyagoda', 'name_si' => 'ඇහැළියගොඩ', 'name_ta' => 'எஹலியகொட', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 20, 'name_en' => 'Ratnapura', 'name_si' => 'රත්නපුර', 'name_ta' => 'இரத்தினபுரி', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 20, 'name_en' => 'Pelmadulla', 'name_si' => 'පැල්මඩුල්ල', 'name_ta' => 'பெல்மடுல்லை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 20, 'name_en' => 'Balangoda', 'name_si' => 'බලන්ගොඩ', 'name_ta' => 'பலாங்கொடை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 20, 'name_en' => 'Rakwana', 'name_si' => 'රක්වාන', 'name_ta' => 'ரக்வானா', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 20, 'name_en' => 'Nivithigala', 'name_si' => 'නිවිතිගල', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 20, 'name_en' => 'Kalawana', 'name_si' => 'කලවාන', 'name_ta' => 'களவான', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 20, 'name_en' => 'Kolonna', 'name_si' => 'කොළොන්න', 'name_ta' => 'கொலொன்னா', 'created_at' => $now, 'updated_at' => $now],

            // Trincomalee (polling_district_id = 21)
            ['polling_district_id' => 21, 'name_en' => 'Seruwila', 'name_si' => 'සේරුවිල', 'name_ta' => 'சேருவில', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 21, 'name_en' => 'Trincomalee', 'name_si' => 'තිරිකුණාමලය', 'name_ta' => 'திருகோணமலை', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 21, 'name_en' => 'Muthur', 'name_si' => 'මුතූර්', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],

            // Vanni (polling_district_id = 22)
            ['polling_district_id' => 22, 'name_en' => 'Mannar', 'name_si' => 'මන්නාරම', 'name_ta' => 'மன்னார்', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 22, 'name_en' => 'Vavuniya', 'name_si' => 'වව්නියාව', 'name_ta' => 'வவுனியா', 'created_at' => $now, 'updated_at' => $now],
            ['polling_district_id' => 22, 'name_en' => 'Mulaithivu', 'name_si' => 'මුලතිව්', 'name_ta' => null, 'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}
