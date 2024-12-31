<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void // 300
    {
        $foods = [
            // ستيم
            [
                'name_ar' => 'قهوة أمريكانو مثلجة',
                'name_en' => 'Iced Coffee Americano',
                'category_foods_id' => 1,
            ],
            [
                'name_ar' => 'قهوة بالحليب مثلجة',
                'name_en' => 'Iced Coffee with Milk',
                'category_foods_id' => 1,
            ],
            [
                'name_ar' => 'لاتيه مثلج سادة',
                'name_en' => 'Plain Iced Latte',
                'category_foods_id' => 1,
            ],
            [
                'name_ar' => 'فانيل ميلك شيك',
                'name_en' => 'Vanilla Milkshake',
                'category_foods_id' => 2,
            ],
            [
                'name_ar' => 'فريز ميلك شيك',
                'name_en' => 'Strawberry Milkshake',
                'category_foods_id' => 2,
            ],
            [
                'name_ar' => 'لاتيه فانيل',
                'name_en' => 'Vanilla Latte',
                'category_foods_id' => 3,
            ],
            [
                'name_ar' => 'لاتيه كراميل',
                'name_en' => 'Caramel Latte',
                'category_foods_id' => 3,
            ],
            [
                'name_ar' => 'لاتيه موكا',
                'name_en' => 'Mocha Latte',
                'category_foods_id' => 3,
            ],
            [
                'name_ar' => 'آيس تي دراق',
                'name_en' => 'Peach Iced Tea',
                'category_foods_id' => 4,
            ],
            [
                'name_ar' => 'آيس تي أخضر',
                'name_en' => 'Green Iced Tea',
                'category_foods_id' => 4,
            ], // اشاطي
            [
                'name_ar' => 'بطيخ',
                'name_en' => 'Watermelon',
                'category_foods_id' => 5,
            ],
            [
                'name_ar' => 'شمام',
                'name_en' => 'Melon',
                'category_foods_id' => 5,
            ],
            [
                'name_ar' => 'برتقال وجزر',
                'name_en' => 'Orange and Carrot',
                'category_foods_id' => 6,
            ],
            [
                'name_ar' => 'فريز وليمون',
                'name_en' => 'Strawberry and Lemon',
                'category_foods_id' => 6,
            ],
            [
                'name_ar' => 'برتقال وليمون',
                'name_en' => 'Orange and Lemon',
                'category_foods_id' => 6,
            ],
            [
                'name_ar' => 'توت وفريز وحليب',
                'name_en' => 'Berry, Strawberry, and Milk',
                'category_foods_id' => 7,
            ],
            [
                'name_ar' => 'شمام وحليب ونسلة',
                'name_en' => 'Melon, Milk, and Nestlé',
                'category_foods_id' => 7,
            ],
            [
                'name_ar' => 'موز وحليب',
                'name_en' => 'Banana and Milk',
                'category_foods_id' => 7,
            ],
            [
                'name_ar' => 'ميلك شيك فريز',
                'name_en' => 'Strawberry Milkshake',
                'category_foods_id' => 7,
            ],
            [
                'name_ar' => 'ميلك شيك فانيل',
                'name_en' => 'Vanilla Milkshake',
                'category_foods_id' => 7,
            ],
// De-Caf
            [
                'name_ar' => 'آيس لاتيه',
                'name_en' => 'Iced Latte',
                'category_foods_id' => 8,
            ],
            [
                'name_ar' => 'آيس أميريكان',
                'name_en' => 'Iced Americano',
                'category_foods_id' => 8,
            ],
            [
                'name_ar' => 'برتقال فريش',
                'name_en' => 'Fresh Orange Juice',
                'category_foods_id' => 5,
            ],
            [
                'name_ar' => 'ليمون فريش',
                'name_en' => 'Fresh Lemon Juice',
                'category_foods_id' => 5,
            ],
            [
                'name_ar' => 'بولو فريش',
                'name_en' => 'Fresh Polo Juice',
                'category_foods_id' => 5,
            ],
            [
                'name_ar' => 'آيس سويس ميس',
                'name_en' => 'Iced Swiss Miss',
                'category_foods_id' => 1,
            ],
            [
                'name_ar' => 'آيس تي فريش',
                'name_en' => 'Fresh Iced Tea',
                'category_foods_id' => 4,
            ],
            [
                'name_ar' => 'آيس تي سوبر فروت',
                'name_en' => 'Super fruit Iced Tea',
                'category_foods_id' => 4,
            ],
            [
                'name_ar' => 'دولنغ كافيه',
                'name_en' => 'Dolling Café',
                'category_foods_id' => 1,
            ],
            [
                'name_ar' => 'آيس تشوكلت',
                'name_en' => 'Iced Chocolate',
                'category_foods_id' => 1,
            ],//تريسز
            [
                'name_ar' => 'موكا',
                'name_en' => 'Mocha',
                'category_foods_id' => 1,
            ],
            [
                'name_ar' => 'كرميل',
                'name_en' => 'Caramel',
                'category_foods_id' => 9,
            ],
            [
                'name_ar' => 'آيس كابتشينو موكا',
                'name_en' => 'Iced Cappuccino Mocha',
                'category_foods_id' => 10,
            ],
            [
                'name_ar' => 'آيس كابتشينو باونتي',
                'name_en' => 'Iced Cappuccino Bounty',
                'category_foods_id' => 10,
            ],
            [
                'name_ar' => 'آيس كابتشينو سنيكرز',
                'name_en' => 'Iced Cappuccino Snickers',
                'category_foods_id' => 10,
            ],
            [
                'name_ar' => 'آيس كابتشينو وايت',
                'name_en' => 'Iced Cappuccino White',
                'category_foods_id' => 10,
            ],
            [
                'name_ar' => 'أوريو شيك',
                'name_en' => 'Oreo Shake',
                'category_foods_id' => 11,
            ],
            [
                'name_ar' => 'تويكس شيك',
                'name_en' => 'Twix Shake',
                'category_foods_id' => 11,
            ],
            [
                'name_ar' => 'لوتس شيك',
                'name_en' => 'Lotus Shake',
                'category_foods_id' => 11,
            ],
            [
                'name_ar' => 'بلو سكاي',
                'name_en' => 'Blue Sky',
                'category_foods_id' => 11,
            ], // ادمز
            [
                'name_ar' => 'موز وحليب',
                'name_en' => 'Banana and Milk',
                'category_foods_id' => 6,
            ],
            [
                'name_ar' => 'حليب وفريز',
                'name_en' => 'Strawberry and Milk',
                'category_foods_id' => 6,
            ],
            [
                'name_ar' => 'موز وحليب وفريز',
                'name_en' => 'Banana, Milk, and Strawberry',
                'category_foods_id' => 6,
            ],
            [
                'name_ar' => 'أفوكادو',
                'name_en' => 'Avocado',
                'category_foods_id' => 6,
            ],
            [
                'name_ar' => 'موز وحليب ولوتس',
                'name_en' => 'Banana, Milk, and Lotus',
                'category_foods_id' => 6,
            ],
            [
                'name_ar' => 'فريز',
                'name_en' => 'Strawberry',
                'category_foods_id' => 5,
            ],
            [
                'name_ar' => 'توت',
                'name_en' => 'Berries',
                'category_foods_id' => 5,
            ],
            [
                'name_ar' => 'برتقال',
                'name_en' => 'Orange',
                'category_foods_id' => 5,
            ],
            [
                'name_ar' => 'ليمون',
                'name_en' => 'Lemon',
                'category_foods_id' => 5,
            ],
            [
                'name_ar' => 'بولو',
                'name_en' => 'Polo',
                'category_foods_id' => 5,
            ], // كنافة ومعمول الطيب
            [
                'name_ar' => 'كنافة جبنة',
                'name_en' => 'Cheese Kunafa',
                'category_foods_id' => 12,
            ],
            [
                'name_ar' => 'كنافة لوتس',
                'name_en' => 'Lotus Kunafa',
                'category_foods_id' => 12,
            ],
            [
                'name_ar' => 'كنافة شوكولا',
                'name_en' => 'Chocolate Kunafa',
                'category_foods_id' => 12,
            ],
            [
                'name_ar' => 'معمول جبنة',
                'name_en' => 'Cheese Maamoul',
                'category_foods_id' => 13,
            ],
            [
                'name_ar' => 'معمول جبنة مع اللوتس',
                'name_en' => 'Cheese Maamoul with Lotus',
                'category_foods_id' => 13,
            ],
            [
                'name_ar' => 'معمول جبنة مع نسلة',
                'name_en' => 'Cheese Maamoul with Nestlé',
                'category_foods_id' => 13,
            ],
            [
                'name_ar' => 'صحن شرائح جزرية',
                'name_en' => 'Plate of Jazariyeh Slices',
                'category_foods_id' => 14,
            ],
            [
                'name_ar' => 'كرابيج مع الناطف',
                'name_en' => 'Karabeej with Natif',
                'category_foods_id' => 14,
            ],
            [
                'name_ar' => 'قالب جزرية',
                'name_en' => 'Jazariyeh Mold',
                'category_foods_id' => 14,
            ],
            [
                'name_ar' => 'صحن بوظة فواكه 24 طابة مشكلة',
                'name_en' => 'Fruit Ice Cream Plate (24 Assorted Scoops)',
                'category_foods_id' => 15,
            ],
            [
                'name_ar' => 'كاسيتا ماكس',
                'name_en' => 'Casetta Max',
                'category_foods_id' => 15,
            ],
            [
                'name_ar' => 'عربي فستق برش',
                'name_en' => 'Arabic Pistachio Shavings',
                'category_foods_id' => 15,
            ],
            [
                'name_ar' => 'عربي فستق اكسترا',
                'name_en' => 'Arabic Extra Pistachio',
                'category_foods_id' => 15,
            ],
            [
                'name_ar' => 'براونيز',
                'name_en' => 'Brownies',
                'category_foods_id' => 16,
            ],
            [
                'name_ar' => 'براونيز أمية',
                'name_en' => 'Omayya Brownies',
                'category_foods_id' => 16,
            ],
            [
                'name_ar' => 'قطعة كيك بابلي',
                'name_en' => 'Bubbly Cake Slice',
                'category_foods_id' => 17,
            ],
            [
                'name_ar' => 'قطعة كيك لوتس',
                'name_en' => 'Lotus Cake Slice',
                'category_foods_id' => 17,
            ],
            [
                'name_ar' => 'قطعة كيك غالاكسي',
                'name_en' => 'Galaxy Cake Slice',
                'category_foods_id' => 17,
            ],
            [
                'name_ar' => 'محلاية فستق برش',
                'name_en' => 'Mhalaya with Pistachio Shavings',
                'category_foods_id' => 17,
            ],
            [
                'name_ar' => 'مغطسة',
                'name_en' => 'Dipped',
                'category_foods_id' => 18,
            ],
            [
                'name_ar' => 'مشكل',
                'name_en' => 'Assorted',
                'category_foods_id' => 18,
            ],
            [
                'name_ar' => 'محشي',
                'name_en' => 'Stuffed',
                'category_foods_id' => 18,
            ],
            [
                'name_ar' => 'مغطسة',
                'name_en' => 'Dipped',
                'category_foods_id' => 19,
            ],
            [
                'name_ar' => 'مشكل',
                'name_en' => 'Assorted',
                'category_foods_id' => 19,
            ],
            [
                'name_ar' => 'محشي',
                'name_en' => 'Stuffed',
                'category_foods_id' => 19,
            ],
            [
                'name_ar' => 'سينامون',
                'name_en' => 'Cinnamon',
                'category_foods_id' => 14,
            ],
            [
                'name_ar' => 'البراونيز',
                'name_en' => 'The Brownies',
                'category_foods_id' => 14,
            ],
            [
                'name_ar' => 'كيك الجزر قياس صغير',
                'name_en' => 'Small-sized Carrot Cake',
                'category_foods_id' => 20,
            ],
            [
                'name_ar' => 'اورانج كيك',
                'name_en' => 'Orange Cake',
                'category_foods_id' => 20,
            ],
            [
                'name_ar' => 'ريد فيلفيت مافن',
                'name_en' => 'Red Velvet Muffin',
                'category_foods_id' => 21,
            ],
            [
                'name_ar' => 'مافن الفراولة واللوز',
                'name_en' => 'Strawberry and Almond Muffin',
                'category_foods_id' => 21,
            ],
            [
                'name_ar' => 'مافن الموز والجوز',
                'name_en' => 'Banana and Walnut Muffin',
                'category_foods_id' => 21,
            ],
            [
                'name_ar' => 'سينامون رول مغطاة بكريمة الجبن',
                'name_en' => 'Cinnamon Roll Topped with Cream Cheese',
                'category_foods_id' => 22,
            ],
            [
                'name_ar' => 'سينامون على وجهها كريمة الجبن الكثيفة',
                'name_en' => 'Cinnamon Roll with Thick Cream Cheese Frosting',
                'category_foods_id' => 22,
            ],
            [
                'name_ar' => 'قطعة كيك سانتانا',
                'name_en' => 'Santana Cake Slice',
                'category_foods_id' => 23,
            ],
            [
                'name_ar' => 'قطعة شوكولا مونتانا',
                'name_en' => 'Montana Chocolate Slice',
                'category_foods_id' => 23,
            ],
            [
                'name_ar' => 'قطعة كيك سيجان',
                'name_en' => 'Sijan Cake Slice',
                'category_foods_id' => 23,
            ],
            [
                'name_ar' => 'قطعة كيك تيرامسو',
                'name_en' => 'Tiramisu Cake Slice',
                'category_foods_id' => 23,
            ],
            [
                'name_ar' => 'فور بلانش برش',
                'name_en' => 'Four Blanche Brush',
                'category_foods_id' => 24,
            ],
            [
                'name_ar' => 'فور بلانش صب شوكولا بيضاء سائلة مع نسلة',
                'name_en' => 'Four Blanche with White Liquid Chocolate and Nesquik',
                'category_foods_id' => 24,
            ],
            [
                'name_ar' => 'انكليش كيك (شوكولا)',
                'name_en' => 'English Chocolate Cake',
                'category_foods_id' => 25,
            ],
            [
                'name_ar' => 'سواريه 24',
                'name_en' => 'Soiree 24',
                'category_foods_id' => 25,
            ],
            [
                'name_ar' => 'بتيفور مشكل',
                'name_en' => 'Mixed Petit Four',
                'category_foods_id' => 25,
            ],
            [
                'name_ar' => 'ديسباسيتو شوكولا',
                'name_en' => 'Chocolate Despacito',
                'category_foods_id' => 25,
            ],
            [
                'name_ar' => 'كرانشي دونز تورتيلا',
                'name_en' => 'Crunchy Donz Tortilla',
                'category_foods_id' => 27,
            ],
            /////////////// غربي ////////////////////////////////////////////////////////////////
            [
                'name_ar' => 'مالتي بيف برغر',
                'name_en' => 'Multi Beef Burger',
                'category_foods_id' => 27,
            ],
            [
                'name_ar' => 'كريسبي',
                'name_en' => 'Crispy',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'شيش',
                'name_en' => 'Shish',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'سكالوب',
                'name_en' => 'Scallop',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كرات البطاطا مع الجبن',
                'name_en' => 'Cheesy Potato Balls',
                'category_foods_id' => 29,
            ],
            [
                'name_ar' => 'سيزر',
                'name_en' => 'Caesar',
                'category_foods_id' => 31,
            ],
            [
                'name_ar' => 'سلطة مالتي كالتي',
                'name_en' => 'Multi Kalti Salad',
                'category_foods_id' => 31,
            ],
            [
                'name_ar' => 'سيزر',
                'name_en' => 'Caesar',
                'category_foods_id' => 32,
            ],
            [
                'name_ar' => 'باربكيو',
                'name_en' => 'Barbecue',
                'category_foods_id' => 32,
            ],
            [
                'name_ar' => 'فتوتشيني الفريدو',
                'name_en' => 'Fettuccine Alfredo',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'دجاج كريسبي',
                'name_en' => 'Crispy Chicken',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كوردون بلو',
                'name_en' => 'Cordon Bleu',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'دجاج إيطالي',
                'name_en' => 'Italian Chicken',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'دجاج بيري بيري',
                'name_en' => 'Peri Peri Chicken',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'دجاج بكريمة الكاجو',
                'name_en' => 'Chicken with Cashew Cream',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'دجاج تريكاني',
                'name_en' => 'Tricani Chicken',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'بتر تشيكن',
                'name_en' => 'Butter Chicken',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'دجاج بيريزيه',
                'name_en' => 'Parisian Chicken',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'شيش بالفخارة',
                'name_en' => 'Shish in Clay Pot',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'اسكالوب بانيه',
                'name_en' => 'Scallop Pane',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كريسبي باربيكيو',
                'name_en' => 'Crispy Barbecue',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كريسبي',
                'name_en' => 'Crispy',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'اسكالوب ميالنيز',
                'name_en' => 'Scallop Milanese',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كوردون بلو دجاج مشوي',
                'name_en' => 'Grilled Chicken Cordon Bleu',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'تشكن سليستا',
                'name_en' => 'Chicken Celesta',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كوردون بلو دجاج',
                'name_en' => 'Chicken Cordon Bleu',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'تشكن استروغونوف',
                'name_en' => 'Chicken Stroganoff',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'بابا غنوج',
                'name_en' => 'Baba Ghanoush',
                'category_foods_id' => 30,
            ],
            [
                'name_ar' => 'حمص بيروتي',
                'name_en' => 'Beiruti Hummus',
                'category_foods_id' => 30,
            ],
            [
                'name_ar' => 'منقوشة محمرة مع جبنة',
                'name_en' => 'Manakish with Cheese and Tomato Paste',
                'category_foods_id' => 26,
            ],
            [
                'name_ar' => 'منقوشة زعتر',
                'name_en' => 'Za’atar Manakish',
                'category_foods_id' => 26,
            ],
            [
                'name_ar' => 'فاهيتا دجاج',
                'name_en' => 'Chicken Fajita',
                'category_foods_id' => 27,
            ],
            [
                'name_ar' => 'دجاج دايت',
                'name_en' => 'Diet Chicken',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'شيش طاووك',
                'name_en' => 'Shish Tawook',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'اسكالوب بانيه',
                'name_en' => 'Breaded Chicken Escalope',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'دجاج كريم مع الفطر',
                'name_en' => 'Chicken with Cream and Mushrooms',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كوردون بلو دجاج',
                'name_en' => 'Chicken Cordon Bleu',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'دجاج بارميزان',
                'name_en' => 'Chicken Parmesan',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'سيزر دجاج',
                'name_en' => 'Chicken Caesar',
                'category_foods_id' => 31,
            ],
            [
                'name_ar' => 'شيش ساندويتش',
                'name_en' => 'Shish Sandwich',
                'category_foods_id' => 27,
            ],
            [
                'name_ar' => 'سكالوب ساندويتش',
                'name_en' => 'Scallop Sandwich',
                'category_foods_id' => 27,
            ],
            [
                'name_ar' => 'كاريبيان ساندويتش',
                'name_en' => 'Caribbean Sandwich',
                'category_foods_id' => 27,
            ],
            [
                'name_ar' => 'سموكي باربيكو ساندويتش',
                'name_en' => 'Smoky BBQ Sandwich',
                'category_foods_id' => 27,
            ],
            [
                'name_ar' => 'ماشروم بيف برغر',
                'name_en' => 'Mushroom Beef Burger',
                'category_foods_id' => 27,
            ],
            [
                'name_ar' => 'دوريتوس بيف برغر',
                'name_en' => 'Doritos Beef Burger',
                'category_foods_id' => 27,
            ],
            [
                'name_ar' => 'بطاطا مقلية',
                'name_en' => 'French Fries',
                'category_foods_id' => 29,
            ],
            [
                'name_ar' => 'بوب كورن كرات',
                'name_en' => 'Popcorn Balls',
                'category_foods_id' => 29,
            ],
            [
                'name_ar' => 'كريسبي تندر تشيكن',
                'name_en' => 'Crispy Tender Chicken',
                'category_foods_id' => 29,
            ],
            [
                'name_ar' => 'سيزر سالاد',
                'name_en' => 'Caesar Salad',
                'category_foods_id' => 31,
            ],
            ////  شرقي /////////////////////////////////////////////////////////////////////////////////////
            [
                'name_ar' => 'رز بالبازلاء',
                'name_en' => 'Rice with Peas',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'ملوخية',
                'name_en' => 'Molokhia',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كبسة دجاج',
                'name_en' => 'Chicken Kabsa',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'يالنجي باذنجان',
                'name_en' => 'Eggplant Yalanji',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'برك الجبن الهشة',
                'name_en' => 'Flaky Cheese Pastry',
                'category_foods_id' => 29,
            ],
            [
                'name_ar' => 'برك دجاج',
                'name_en' => 'Chicken Pastry',
                'category_foods_id' => 29,
            ],
            [
                'name_ar' => 'برك لحم',
                'name_en' => 'Meat Pastry',
                'category_foods_id' => 29,
            ],
            [
                'name_ar' => 'حراق اصبعو',
                'name_en' => 'Harrak Osba’o',
                'category_foods_id' => 30,
            ],
            // بيت الشرق
            [
                'name_ar' => 'كبة لبنية',
                'name_en' => 'Kibbeh in Yogurt Sauce',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'شاكرية',
                'name_en' => 'Shakriya (Lamb in Yogurt Sauce)',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'شيش برك',
                'name_en' => 'Shish Barak (Meat Dumplings in Yogurt Sauce)',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'شرحات لحم على عجين',
                'name_en' => 'Lamb Slices on Dough',
                'category_foods_id' => 35,
            ],
            [
                'name_ar' => 'لحمة بالصينية',
                'name_en' => 'Lamb in a Tray',
                'category_foods_id' => 35,
            ],
            [
                'name_ar' => 'بيني ارابياتا',
                'name_en' => 'Penne Arrabbiata',
                'category_foods_id' => 33,
            ],
            [
                'name_ar' => 'بيني بيستو',
                'name_en' => 'Penne Pesto',
                'category_foods_id' => 33,
            ],
            [
                'name_ar' => 'فيتوتشيني فونجي',
                'name_en' => 'Fettuccine Funghi',
                'category_foods_id' => 33,
            ],
            [
                'name_ar' => 'شوربة عدس',
                'name_en' => 'Lentil Soup',
                'category_foods_id' => 34,
            ],
            [
                'name_ar' => 'شوربة فطر',
                'name_en' => 'Mushroom Soup',
                'category_foods_id' => 34,
            ], ////
            [
                'name_ar' => 'أرز ولازلاء بالدجاج',
                'name_en' => 'Rice with Peas and Chicken',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كبسة بالدجاج',
                'name_en' => 'Chicken Kabsa',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'كباب هندي',
                'name_en' => 'Indian Kebab',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'لحمة بالصحن',
                'name_en' => 'Meat Platter',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'سلطة شرقية',
                'name_en' => 'Eastern Salad',
                'category_foods_id' => 31,
            ],
            [
                'name_ar' => 'فتوش',
                'name_en' => 'Fattoush',
                'category_foods_id' => 31,
            ],
            [
                'name_ar' => 'كبة مقلية',
                'name_en' => 'Fried Kibbeh',
                'category_foods_id' => 29,
            ],
            [
                'name_ar' => 'برك لحمة',
                'name_en' => 'Meat Pastries',
                'category_foods_id' => 29,
            ],
            [
                'name_ar' => 'كبة مشوية',
                'name_en' => 'Grilled Kibbeh',
                'category_foods_id' => 29,
            ], /////
            [
                'name_ar' => 'كباب شامي',
                'name_en' => 'Shami Kebab',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'لحمة شقف',
                'name_en' => 'Meat Chunks',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'فتة مكدوس',
                'name_en' => 'Makdous Fatteh',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'متبل',
                'name_en' => 'Mutabbal',
                'category_foods_id' => 30,
            ],
            [
                'name_ar' => 'محمرة',
                'name_en' => 'Mhammara',
                'category_foods_id' => 30,
            ],
            [
                'name_ar' => 'يالنجي',
                'name_en' => 'Yalanji (Stuffed Vine Leaves)',
                'category_foods_id' => 30,
            ],
            [
                'name_ar' => 'كباب باذنجان',
                'name_en' => 'Eggplant Kebab',
                'category_foods_id' => 28,
            ],
            [
                'name_ar' => 'شوربة دجاج',
                'name_en' => 'Chicken Soup',
                'category_foods_id' => 34,
            ],
            [
                'name_ar' => 'سلطة خضار',
                'name_en' => 'Vegetable Salad',
                'category_foods_id' => 31,
            ],
            [
                'name_ar' => 'تبولة',
                'name_en' => 'Tabbouleh',
                'category_foods_id' => 31,
            ],
            ///////////////////////////////////////////////////////////////
            [
                'name_ar' => 'فلافل سياحي',
                'name_en' => 'Tourist Falafel',
                'category_foods_id' => 27,
            ], [
                'name_ar' => 'فلافل صمون',
                'name_en' => 'Falafel in Samoon Bread',
                'category_foods_id' => 27,
            ], [
                'name_ar' => 'فلافل عربي',
                'name_en' => 'Arabic Falafel',
                'category_foods_id' => 27,
            ], [
                'name_ar' => 'زعتر مع خضار',
                'name_en' => 'Thyme with Vegetables',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'محمرة بقشقوان',
                'name_en' => 'Muhammara with Kashkaval Cheese',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'محمرة بقشقوان',
                'name_en' => 'Muhammara with Kashkaval Cheese',
                'category_foods_id' => 38,
            ],
            [
                'name_ar' => 'زعتر بقشقوان',
                'name_en' => 'Thyme with Kashkaval Cheese',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'جبنة',
                'name_en' => 'Cheese',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيتزا الفصول الأربعة',
                'name_en' => 'Four Seasons Pizza',
                'category_foods_id' => 37,
            ], [
                'name_ar' => 'بيتزا الفصول الأربعة',
                'name_en' => 'Four Seasons Pizza',
                'category_foods_id' => 38,
            ], [
                'name_ar' => 'بيتزا الفصول الأربعة',
                'name_en' => 'Four Seasons Pizza',
                'category_foods_id' => 39,
            ],  /////////
            [
                'name_ar' => 'قشقوان',
                'name_en' => 'Kashkaval',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'سجق',
                'name_en' => 'Sujuk',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'سنفورة',
                'name_en' => 'Smurf',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'توشكا',
                'name_en' => 'Toshka',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'زعتر',
                'name_en' => 'Zaatar',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'سبانخ',
                'name_en' => 'Spinach',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'مارغريتا بيتزا',
                'name_en' => 'Margherita Pizza',
                'category_foods_id' => 38,
            ], [
                'name_ar' => 'فور سيون بيتزا',
                'name_en' => 'Four Seasons Pizza',
                'category_foods_id' => 38,
            ], [
                'name_ar' => 'بوفالو تشكن بيتزا',
                'name_en' => 'Buffalo Chicken Pizza',
                'category_foods_id' => 38,
            ], [
                'name_ar' => 'باربيكيو تشكن بيتزا',
                'name_en' => 'Barbecue Chicken Pizza',
                'category_foods_id' => 38,
            ], [
                'name_ar' => 'فور تشيز بيتزا',
                'name_en' => 'Four Cheese Pizza',
                'category_foods_id' => 38,
            ], [
                'name_ar' => 'مارغريتا بيتزا',
                'name_en' => 'Margherita Pizza',
                'category_foods_id' => 39,
            ], [
                'name_ar' => 'فور سيون بيتزا',
                'name_en' => 'Four Seasons Pizza',
                'category_foods_id' => 39,
            ], [
                'name_ar' => 'بوفالو تشكن بيتزا',
                'name_en' => 'Buffalo Chicken Pizza',
                'category_foods_id' => 39,
            ], [
                'name_ar' => 'باربيكيو تشكن بيتزا',
                'name_en' => 'Barbecue Chicken Pizza',
                'category_foods_id' => 39,
            ], [
                'name_ar' => 'فور تشيز بيتزا',
                'name_en' => 'Four Cheese Pizza',
                'category_foods_id' => 39,
            ], [
                'name_ar' => 'بيدا لبنة وخضار',
                'name_en' => 'Pide with Labneh and Vegetables',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيدا زعتر ولبنة',
                'name_en' => 'Pide with Thyme and Labneh',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيدا شيش وقشقوان',
                'name_en' => 'Pide with Shish and Kashkaval',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'كفتة',
                'name_en' => 'Kofta',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيدا فطر وقشقوان',
                'name_en' => 'Pide with Mushrooms and Kashkaval',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيدا محمرة بقشقوان',
                'name_en' => 'Pide with Muhammara and Kashkaval',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيدا زعتر',
                'name_en' => 'Pide with Thyme',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيدا تماري',
                'name_en' => 'Pide with Tamari',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيدا نوتيلا ولوتس',
                'name_en' => 'Pide with Nutella and Lotus',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيتزا الفصول الأربعة',
                'name_en' => 'Four Seasons Pizza',
                'category_foods_id' => 37,
            ], [
                'name_ar' => 'لحمة صفيحة',
                'name_en' => 'Meat Sfiha',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'شيش قشقوان',
                'name_en' => 'Shish with Kashkaval',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'بيتزا شيش',
                'name_en' => 'Shish Pizza',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'جبنة مع قشقوان',
                'name_en' => 'Cheese with Kashkaval',
                'category_foods_id' => 36,
            ], [
                'name_ar' => 'محمرة',
                'name_en' => 'Muhammara',
                'category_foods_id' => 36,
            ],[
                'name_ar' => 'بيتزا',
                'name_en' => 'Pizza',
                'category_foods_id' => 36,
            ],  ///
            [
                'name_ar' => 'سلطة روكا',
                'name_en' => 'Rocca Salad',
                'category_foods_id' => 41,
            ],
            [
                'name_ar' => 'سلطة خضرا',
                'name_en' => 'Green Salad',
                'category_foods_id' => 41,
            ],
            [
                'name_ar' => 'سلطة تونا',
                'name_en' => 'Tuna Salad',
                'category_foods_id' => 41,
            ],
            [
                'name_ar' => 'سلطة باستا',
                'name_en' => 'Pasta Salad',
                'category_foods_id' => 41,
            ],
            [
                'name_ar' => 'سلطة سيزر',
                'name_en' => 'Caesar Salad',
                'category_foods_id' => 41,
            ],
            [
                'name_ar' => 'بيض مسلوق',
                'name_en' => 'Boiled Eggs',
                'category_foods_id' => 40,
            ],
            [
                'name_ar' => 'اومليت',
                'name_en' => 'Omelette',
                'category_foods_id' => 40,
            ],
            [
                'name_ar' => 'لبنة و زيتون',
                'name_en' => 'Labneh and Olives',
                'category_foods_id' => 40,
            ],
            [
                'name_ar' => 'جبنة حلوم',
                'name_en' => 'Halloumi Cheese',
                'category_foods_id' => 40,
            ],
            [
                'name_ar' => 'حبش مع موزاريللا',
                'name_en' => 'Turkey with Mozzarella',
                'category_foods_id' => 40,
            ], // دايت هاوس
            [
                'name_ar' => 'تشكن لايت',
                'name_en' => 'Chicken Lite',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'شرحات دجاج دايت',
                'name_en' => 'Diet Chicken Fillets',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'دجاج بالباربكيو',
                'name_en' => 'BBQ Chicken',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'دجاج بالحمض والثوم',
                'name_en' => 'Chicken with Lemon and Garlic',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'دجاج بالكريمة',
                'name_en' => 'Chicken with Cream',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'دجاج صيني',
                'name_en' => 'Chinese Chicken',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'توست بيض',
                'name_en' => 'Egg Toast',
                'category_foods_id' => 40,
            ], [
                'name_ar' => 'شوفان مع الحليب',
                'name_en' => 'Oats with Milk',
                'category_foods_id' => 40,
            ], // كاسبريسو
            [
                'name_ar' => 'لبنة',
                'name_en' => 'Labneh',
                'category_foods_id' => 42,
            ], [
                'name_ar' => 'حلومي',
                'name_en' => 'Halloumi',
                'category_foods_id' => 42,
            ], [
                'name_ar' => 'حبش',
                'name_en' => 'Turkey',
                'category_foods_id' => 42,
            ], [
                'name_ar' => 'تونا',
                'name_en' => 'Tuna',
                'category_foods_id' => 42,
            ], [
                'name_ar' => 'تشكن افوكادو',
                'name_en' => 'Chicken Avocado',
                'category_foods_id' => 42,
            ], [
                'name_ar' => 'ترياكي تشكن',
                'name_en' => 'Teriyaki Chicken',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'تشكن هيلثي',
                'name_en' => 'Healthy Chicken',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'كاري تشكن',
                'name_en' => 'Curry Chicken',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'هيلثي ستيك',
                'name_en' => 'Healthy Steak',
                'category_foods_id' => 28,
            ], // كريف ات
            [
                'name_ar' => 'دجاج ورز',
                'name_en' => 'Chicken with Rice',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'باستا',
                'name_en' => 'Pasta',
                'category_foods_id' => 28,
            ],  [
                'name_ar' => 'مندي',
                'name_en' => 'Mandi',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'ترياكي مع رز',
                'name_en' => 'Teriyaki with Rice',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'فاهيتا',
                'name_en' => 'Fajita',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'شيش طاووق مع رز',
                'name_en' => 'Shish Tawook with Rice',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'دجاج بالاعشاب',
                'name_en' => 'Herb Chicken',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'شاورما',
                'name_en' => 'Shawarma',
                'category_foods_id' => 28,
            ]
            , // نورسين
            [
                'name_ar' => 'الفصول الاربعة',
                'name_en' => 'Four Seasons',
                'category_foods_id' => 43,
            ], [
                'name_ar' => 'بيتزا روكا',
                'name_en' => 'Pizza Roca',
                'category_foods_id' => 43,
            ], [
                'name_ar' => 'بيتزا نورسين',
                'name_en' => 'Pizza Nursine',
                'category_foods_id' => 43,
            ], [
                'name_ar' => 'بيتزا سوبريم',
                'name_en' => 'Supreme Pizza',
                'category_foods_id' => 43,
            ], [
                'name_ar' => 'كيتو دجاج',
                'name_en' => 'Keto Chicken',
                'category_foods_id' => 27,
            ], [
                'name_ar' => 'كيتو لحم',
                'name_en' => 'Keto Beef',
                'category_foods_id' => 27,
            ], [
                'name_ar' => 'كريسبي تورتيلا',
                'name_en' => 'Crispy Tortilla',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'فولكانو',
                'name_en' => 'Volcano',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'زنجر',
                'name_en' => 'Zinger',
                'category_foods_id' => 28,
            ], [
                'name_ar' => 'فرانشيسكو',
                'name_en' => 'Francesco',
                'category_foods_id' => 28,
            ]

        ];
        foreach ($foods as $food) {
            DB::table('foods')->insert($food);
        }
    }
}
