<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [ // 30 مطعم
            [
                'name_ar' => 'ستيم',
                'name_en'=>'Steam',
                'address_ar'=>'المالكي',
                'address_en'=>'Al-Malki',
                'logoImage'=>'public/images/Food/Drinks/صور ستيم/صورة ستيم الغلاف.jpg',
                'image'=>'public/images/Food/Drinks/صور ستيم/صورة ستيم.jpg',
            ],
            [
                'name_ar' => 'أشاطي',
                'name_en'=>'Ashati',
                'address_ar'=>'أبو رمانة',
                'address_en'=>'Abu Rummaneh',
                'logoImage'=>'public/images/Food/Drinks/صور اشاطي/صورة اشاطي الغلاف.jpg',
                'image'=>'public/images/Food/Drinks/صور اشاطي/صورة اشاطي.jpg',
            ],
            [
                'name_ar' => 'دي كاف',
                'name_en'=>'De-Caf',
                'address_ar'=>'المزرعة',
                'address_en'=>'Al-Mazraa',
                'logoImage'=>'public/images/Food/Drinks/دي كاف/صورة الغلاف.jpg',
                'image'=>'public/images/Food/Drinks/دي كاف/صورة دي كاف.jpg',
            ],
            [
                'name_ar' => 'تريسز كافيه',
                'name_en'=>'Traces Café',
                'address_ar'=>'المزرعة',
                'address_en'=>'Al-Mazraa',
                'logoImage'=>'public/images/Food/Drinks/تريسز/صورة الغلاف تريسز.jpg',
                'image'=>'public/images/Food/Drinks/تريسز/صورة تريسز.jpg',
            ],
            [
                'name_ar' => 'آدمز',
                'name_en'=>'Adams',
                'address_ar'=>'المزة',
                'address_en'=>'Al-Mazza',
                'logoImage'=>'public/images/Food/Drinks/آدمز/صورة غلاف.jpg',
                'image'=>'public/images/Food/Drinks/آدمز/صورة ادمز.jpg',
            ],
            [
                'name_ar' => 'معمول وكنافة الطيب',
                'name_en' => 'Maamoul & Kunafa Al-Tayyib',
                'address_ar' => 'البرامكة',
                'address_en' => 'Baramka',
                'logoImage' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/معمول وكنافة الطيب صورة شعار المطعم.jpg',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/معمول وكنافة الطيب صورة المطعم.jpg',
            ],
            [
                'name_ar' => 'أمية كلاس',
                'name_en' => 'Omayya Class',
                'address_ar' => 'كفرسوسة',
                'address_en' => 'Kafarsouseh',
                'logoImage' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/أمية كلاس صورة شعار المطعم.jpg',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/أمية كلاس صورة المطعم.jpg',
            ],
            [
                'name_ar' => 'هوليود دوناتس',
                'name_en' => 'Hollywood Donuts',
                'address_ar' => 'كفرسوسة، دامسكينو مول',
                'address_en' => 'Kafarsouseh, Damasquino Mall',
                'logoImage' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/هوليود دوناتس صورة شعار المطعم.jpg',
                'image' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/هوليود دوناتس صورة المطعم.jpg',
            ],
            [
                'name_ar' => 'ناش بيكري',
                'name_en' => 'Nash Bakery',
                'address_ar' => 'الروضة',
                'address_en' => 'Al-Rawda',
                'logoImage' => 'public/images/Food/Desserts/صور الحلويات/ناش بيكري/ناش بيكري صورة شعار المطعم.jpg',
                'image' => 'public/images/Food/Desserts/صور الحلويات/ناش بيكري/ناش بيكري صورة المطعم.jpg',
            ],
            [
                'name_ar' => 'لويزا مورو',
                'name_en' => 'Louisa Moro',
                'address_ar' => 'الميدان',
                'address_en' => 'Al-Midan',
                'logoImage' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/لويزا مورو صورة شعار المطعم.jpg',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/لويزا مورو صورة المطعم.jpg',
            ],
            [
                'name_ar' => 'كالتي مالتي',
                'name_en' => 'Kalti Malti',
                'address_ar' => 'الميدان',
                'address_en' => 'Al-Midan',
                'logoImage' => 'public/images/Food/غربي/مالتي كالتي/مالتي كالتي لوغو.jpg',
                'image' => 'public/images/Food/غربي/مالتي كالتي/مالتي كالتي غلاف.jpg',
            ],
            [
                'name_ar' => 'شام غريل',
                'name_en' => 'Sham Grill',
                'address_ar' => 'كفرسوسة',
                'address_en' => 'Kafar Souseh',
                'logoImage' => 'public/images/Food/غربي/شام غريل/شام غريل لوغو.png',
                'image' => 'public/images/Food/غربي/شام غريل/شام غريل غلاف.jpg',
            ],
            [
                'name_ar' => 'سيليستا',
                'name_en' => 'Celesta',
                'address_ar' => 'أبو رمانة',
                'address_en' => 'Abu Rummaneh',
                'logoImage' => 'public/images/Food/غربي/سيليستا/سيليستا لوغو.jpg',
                'image' => 'public/images/Food/غربي/سيليستا/سيليستل غلاف.jpg',
            ],
            [
                'name_ar' => 'ستيد',
                'name_en' => 'Steed',
                'address_ar' => 'القصاع',
                'address_en' => 'Al-Qasaa',
                'logoImage' => 'public/images/Food/غربي/ستيد/ستييد لوغو.jpg',
                'image' => 'public/images/Food/غربي/ستيد/ستييد علاف.jpg',
            ],
            [
                'name_ar' => 'بيت ستوب',
                'name_en' => 'Pit Stop',
                'address_ar' => 'الشعلان',
                'address_en' => 'Al-Shaalan',
                'logoImage' => 'public/images/Food/غربي/بيت ستوب/بيت ستوب لوغو.jpg',
                'image' => 'public/images/Food/غربي/بيت ستوب/بيت ستوب غلاف.jpg',
            ],
            [
                'name_ar' => 'استبرق',
                'name_en' => 'Estabraq',
                'address_ar' => 'الروضة',
                'address_en' => 'Al-Rawda',
                'logoImage' => 'public/images/Food/شرقي/استبرق/استبرق لوغو.jpg',
                'image' => 'public/images/Food/شرقي/استبرق/استبرق غلاف.jpg',
            ],
            [
                'name_ar' => 'بيت الشرق',
                'name_en' => 'Bayt Al-Sharq',
                'address_ar' => 'برامكة',
                'address_en' => 'Baramkeh',
                'logoImage' => 'public/images/Food/شرقي/بيت الشرق/بيت الشرق لوغو.jpg',
                'image' => 'public/images/Food/شرقي/بيت الشرق/بيت الشرق غلاف.jpg',
            ],
            [
                'name_ar' => 'زين الشام',
                'name_en' => 'Zain Al-Sham',
                'address_ar' => 'الميدان',
                'address_en' => 'Al-Midan',
                'logoImage' => 'public/images/Food/شرقي/مطبخ زين الشام/زين الشام لوغو.jpeg',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/زين الشام غلاف.jpg',
            ],
            [
                'name_ar' => 'اللقمة الطيبة',
                'name_en' => 'Al Loqma Al Tayeba',
                'address_ar' => 'باب مصلى',
                'address_en' => 'Bab Musalla',
                'logoImage' => 'public/images/Food/مخبوزات/اللقمة الطيبة/اللقمة الطيبة لوغو.jpg',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/اللقمة الطيبة غلاف.jpg',
            ],
            [
                'name_ar' => 'مطعم باب توما',
                'name_en' => 'Bab Touma Restaurant',
                'address_ar' => 'باب توما',
                'address_en' => 'Bab Touma',
                'logoImage' => 'public/images/Food/مخبوزات/باب توما/باب توما لوغو.jpg',
                'image' => 'public/images/Food/مخبوزات/باب توما/باب توما غلاف.jpg',
            ],
            [
                'name_ar' => 'بيتزا هات',
                'name_en' => 'Pizza Hut',
                'address_ar' => 'المالكي',
                'address_en' => 'Al Maliki',
                'logoImage' => 'public/images/Food/مخبوزات/بيتزا هات/بيتزا هات لوغو.jpg',
                'image' => 'public/images/Food/مخبوزات/بيتزا هات/بيتزا هات غلاف.jpg',
            ],
            [
                'name_ar' => 'فطائر بيدا بوت',
                'name_en' => 'Pida Bot Pastries',
                'address_ar' => 'المالكي',
                'address_en' => 'Al Maliki',
                'logoImage' => 'public/images/Food/مخبوزات/فطائر بيدا بوت/بيدا لوغو.jpg',
                'image' => 'public/images/Food/مخبوزات/فطائر بيدا بوت/بيدا بيتزا غلاف.jpg',
            ],
            [
                'name_ar' => 'مستر فلافل',
                'name_en' => 'Mr. Falafel',
                'address_ar' => 'الميدان',
                'address_en' => 'Al Midan',
                'logoImage' => 'public/images/Food/مخبوزات/مستر فلافل/مستر فلافل لوغو.jpg',
                'image' => 'public/images/Food/مخبوزات/مستر فلافل/مستر فلافل غلاف.jpg',
            ],
            [
                'name_ar' => 'تيست فل',
                'name_en' => 'Taste Full',
                'address_ar' => 'المزة',
                'address_en' => 'Al Mazzeh',
                'logoImage' => 'public/images/Food/الاكل الصحي/تيست فل/تيست فل.jpg',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/غلاف.jpg',
            ],
            [
                'name_ar' => 'دايت هاوس',
                'name_en' => 'Diet House',
                'address_ar' => 'المزرعة',
                'address_en' => 'Al Mazraa',
                'logoImage' => 'public/images/Food/الاكل الصحي/دايت هاوس/دايت هاوس.jpg',
                'image' => 'public/images/Food/الاكل الصحي/دايت هاوس/صورة الغلاف.jpg',
            ],
            [
                'name_ar' => 'كاسبريسو',
                'name_en' => 'Caspresso',
                'address_ar' => 'المالكي',
                'address_en' => 'Al Maliki',
                'logoImage' => 'public/images/Food/الاكل الصحي/كاسبريسو/صورة كاسبريسو.jpg',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/صورة غلاف.jpg',
            ],
            [
                'name_ar' => 'كريف ات',
                'name_en' => 'Crave It',
                'address_ar' => 'كفرسوسة',
                'address_en' => 'Kafr Sousa',
                'logoImage' => 'public/images/Food/الاكل الصحي/كريف ات/كريف ات.jpg',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/غلاف.jpg',
            ],
            [
                'name_ar' => 'لورسين',
                'name_en' => 'Lorsin',
                'address_ar' => 'مشروع دمر',
                'address_en' => 'Mashrou Dummar',
                'logoImage' => 'public/images/Food/الاكل الصحي/نورسين/نورسين.jpg',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/صورة الغلاف.jpg',
            ],
        ];
        foreach ($restaurants as $restaurant) {
            Restaurant::create($restaurant);
        }
    }
}
