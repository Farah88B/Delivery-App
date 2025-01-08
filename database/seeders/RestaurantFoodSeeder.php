<?php

namespace Database\Seeders;

use App\Models\Food\Food;
use App\Models\Restaurant\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurant1 = Restaurant::where('name_en', 'Steam')->first();
        $restaurant2 = Restaurant::where('name_en', 'Ashati')->first();
        $restaurant3 = Restaurant::where('name_en', 'De-Caf')->first();
        $restaurant4 = Restaurant::where('name_en', 'Traces Café')->first();
        $restaurant5 = Restaurant::where('name_en', 'Adams')->first();
        ////
        $restaurant6 = Restaurant::where('name_en', 'Maamoul & Kunafa Al-Tayyib')->first();
        $restaurant7 = Restaurant::where('name_en', 'Omayya Class')->first();
        $restaurant8 = Restaurant::where('name_en', 'Hollywood Donuts')->first();
        $restaurant9 = Restaurant::where('name_en', 'Nash Bakery')->first();
        $restaurant10 = Restaurant::where('name_en', 'Louisa Moro')->first();
        ////
        $restaurant11 = Restaurant::where('name_en', 'Kalti Malti')->first();
        $restaurant12 = Restaurant::where('name_en', 'Sham Grill')->first();
        $restaurant13 = Restaurant::where('name_en', 'Celesta')->first();
        $restaurant14 = Restaurant::where('name_en', 'Steed')->first();
        $restaurant15 = Restaurant::where('name_en', 'Pit Stop')->first();
        /////////
        $restaurant16 = Restaurant::where('name_en', 'Estabraq')->first();
        $restaurant17 = Restaurant::where('name_en', 'Bayt Al-Sharq')->first();
        $restaurant18 = Restaurant::where('name_en', 'Zain Al-Sham')->first();
        ////////////
        $restaurant19 = Restaurant::where('name_en', 'Al Loqma Al Tayeba')->first();
        $restaurant20 = Restaurant::where('name_en','Bab Touma Restaurant')->first();
        $restaurant21 = Restaurant::where('name_en','Pizza Hut')->first();
        $restaurant22 = Restaurant::where('name_en','Pida Bot Pastries')->first();
        $restaurant23 = Restaurant::where('name_en','Mr. Falafel')->first();
        /////////
        $restaurant24 = Restaurant::where('name_en','Taste Full')->first();
        $restaurant25 = Restaurant::where('name_en','Diet House')->first();
        $restaurant26 = Restaurant::where('name_en','Caspresso')->first();
        $restaurant27 = Restaurant::where('name_en','Crave It')->first();
        $restaurant28 = Restaurant::where('name_en','Lorsin')->first();
        ////////////////////////////////////


        $food1 = Food::where('name_en','Iced Coffee Americano')->first();
        $food2 = Food::where('name_en','Iced Coffee with Milk')->first();
        $food3 =Food::where('name_en','Plain Iced Latte')->first();
        $food4= Food::where('name_en','Vanilla Milkshake')->first();
        $food5= Food::where('name_en','Strawberry Milkshake')->first();
        $food6= Food::where('name_en','Vanilla Latte')->first();
        $food7= Food::where('name_en','Caramel Latte')->first();
        $food8= Food::where('name_en','Mocha Latte')->first();
        $food9= Food::where('name_en','Peach Iced Tea')->first();
        $food10= Food::where('name_en','Green Iced Tea')->first();
        $food11= Food::where('name_en','Watermelon')->first();
        $food12= Food::where('name_en','Melon')->first();
        $food13= Food::where('name_en','Orange and Carrot')->first();
        $food14= Food::where('name_en','Strawberry and Lemon')->first();
        $food15= Food::where('name_en','Orange and Lemon')->first();
        $food16= Food::where('name_en','Berry, Strawberry, and Milk')->first();
        $food17= Food::where('name_en','Melon, Milk, and Nestlé')->first();
        $food18= Food::where('name_en','Banana and Milk')->where('category_foods_id',7)->first();
        $food19= Food::where('name_en','Strawberry Milkshake')->where('category_foods_id',7)->first();
        $food20= Food::where('name_en','Vanilla Milkshake')->where('category_foods_id',7)->first();
        $food21= Food::where('name_en','Iced Latte')->first();
        $food22= Food::where('name_en','Iced Americano')->first();
        $food23= Food::where('name_en','Fresh Orange Juice')->first();
        $food24= Food::where('name_en','Fresh Lemon Juice')->first();
        $food25= Food::where('name_en','Fresh Polo Juice')->first();
        $food26= Food::where('name_en','Iced Swiss Miss')->first();
        $food27= Food::where('name_en','Fresh Iced Tea')->first();
        $food28= Food::where('name_en','Super fruit Iced Tea')->first();
        $food29= Food::where('name_en','Dolling Café')->first();
        $food30= Food::where('name_en','Iced Chocolate')->first();
        $food31= Food::where('name_en','Mocha')->first();
        $food32= Food::where('name_en','Caramel')->first();
        $food33= Food::where('name_en','Iced Cappuccino Mocha')->first();
        $food34= Food::where('name_en','Iced Cappuccino Bounty')->first();
        $food35= Food::where('name_en','Iced Cappuccino Snickers')->first();
        $food36= Food::where('name_en','Iced Cappuccino White')->first();
        $food37= Food::where('name_en','Oreo Shake')->first();
        $food38= Food::where('name_en','Twix Shake')->first();
        $food39= Food::where('name_en','Lotus Shake')->first();
        $food40= Food::where('name_en','Blue Sky')->first();
        $food41= Food::where('name_en','Banana and Milk')->where('category_foods_id',6)->first();
        $food42= Food::where('name_en','Strawberry and Milk')->first();
        $food43= Food::where('name_en','Banana, Milk, and Strawberry')->first();
        $food44= Food::where('name_en','Avocado')->first();
        $food45= Food::where('name_en','Banana, Milk, and Lotus')->first();
        $food46= Food::where('name_en','Strawberry')->first();
        $food47= Food::where('name_en','Berries')->first();
        $food48= Food::where('name_en','Orange')->first();
        $food49= Food::where('name_en','Lemon')->first();
        $food50= Food::where('name_en','Polo')->first();
        ////////////////////////////////////// Desserts ////////////////////////////////////////////////
        $food51= Food::where('name_en','Cheese Kunafa')->first();
        $food52= Food::where('name_en','Lotus Kunafa')->first();
        $food53= Food::where('name_en','Chocolate Kunafa')->first();
        $food54= Food::where('name_en','Cheese Maamoul')->first();
        $food55= Food::where('name_en','Cheese Maamoul with Lotus')->first();
        $food56= Food::where('name_en','Cheese Maamoul with Nestlé')->first();
        $food57= Food::where('name_en','Plate of Jazariyeh Slices')->first();
        $food58= Food::where('name_en','Karabeej with Natif')->first();
        $food59= Food::where('name_en','Jazariyeh Mold')->first();
        //
        $food60= Food::where('name_en','Fruit Ice Cream Plate (24 Assorted Scoops)')->first();
        $food61= Food::where('name_en','Casetta Max')->first();
        $food62= Food::where('name_en','Arabic Pistachio Shavings')->first();
        $food63= Food::where('name_en','Arabic Extra Pistachio')->first();
        $food64= Food::where('name_en','Brownies')->first();
        $food65= Food::where('name_en','Omayya Brownies')->first();
        $food66= Food::where('name_en','Bubbly Cake Slice')->first();
        $food67= Food::where('name_en','Lotus Cake Slice')->first();
        $food68= Food::where('name_en','Galaxy Cake Slice')->first();
        $food69= Food::where('name_en','Mhalaya with Pistachio Shavings')->first();
        //Hollywood Donuts
        $food70= Food::where('name_en','Dipped')->where('category_foods_id',18)->first();
        $food71= Food::where('name_en','Assorted')->where('category_foods_id',18)->first();
        $food72= Food::where('name_en','Stuffed')->where('category_foods_id',18)->first();
        $food73= Food::where('name_en','Dipped')->where('category_foods_id',19)->first();
        $food74= Food::where('name_en','Assorted')->where('category_foods_id',19)->first();
        $food75= Food::where('name_en','Stuffed')->where('category_foods_id',19)->first();
        $food76= Food::where('name_en','Cinnamon')->where('category_foods_id',14)->first();
        $food77= Food::where('name_en','The Brownies')->where('category_foods_id',14)->first();
        //Nash Bakery
        $food78= Food::where('name_en','Small-sized Carrot Cake')->first();
        $food79= Food::where('name_en','Orange Cake')->first();
        $food80= Food::where('name_en','Red Velvet Muffin')->first();
        $food81= Food::where('name_en','Strawberry and Almond Muffin')->first();
        $food82= Food::where('name_en','Banana and Walnut Muffin')->first();
        $food83= Food::where('name_en','Cinnamon Roll Topped with Cream Cheese')->first();
        $food84= Food::where('name_en','Cinnamon Roll with Thick Cream Cheese Frosting')->first();
        //Louisa Moro
        $food85= Food::where('name_en','Santana Cake Slice')->first();
        $food86= Food::where('name_en','Montana Chocolate Slice')->first();
        $food87= Food::where('name_en','Sijan Cake Slice')->first();
        $food88= Food::where('name_en','Tiramisu Cake Slice')->first();
        $food89= Food::where('name_en','Four Blanche Brush')->first();
        $food90= Food::where('name_en','Four Blanche with White Liquid Chocolate and Nesquik')->first();
        $food91= Food::where('name_en','English Chocolate Cake')->first();
        $food92= Food::where('name_en','Soiree 24')->first();
        $food93= Food::where('name_en','Mixed Petit Four')->first();
        $food94= Food::where('name_en','Chocolate Despacito')->first();
        //////////////////////// غربي  //////////////////////////////////////////
        /// Kalti Malti
        $food95= Food::where('name_en','Crunchy Donz Tortilla')->first();
        $food96= Food::where('name_en','Multi Beef Burger')->first();
        $food97= Food::where('name_en','Crispy')->first();
        $food98= Food::where('name_en','Shish')->first();
        $food99= Food::where('name_en','Scallop')->first();
        $food100= Food::where('name_en','Cheesy Potato Balls')->first();
        $food101= Food::where('name_en','Caesar')->where('category_foods_id',31)->first();
        $food102= Food::where('name_en','Multi Kalti Salad')->first();
        $food103= Food::where('name_en','Caesar')->where('category_foods_id',32)->first();
        $food104= Food::where('name_en','Barbecue')->first();
        // sham grill
        $food105= Food::where('name_en','Fettuccine Alfredo')->first();
        $food106= Food::where('name_en','Crispy Chicken')->first();
        $food107= Food::where('name_en','Cordon Bleu')->first();
        $food108= Food::where('name_en','Italian Chicken')->first();
        $food109= Food::where('name_en','Peri Peri Chicken')->first();
        $food110= Food::where('name_en','Chicken with Cashew Cream')->first();
        $food111= Food::where('name_en','Tricani Chicken')->first();
        $food112= Food::where('name_en','Butter Chicken')->first();
        $food113= Food::where('name_en','Parisian Chicken')->first();
        $food114= Food::where('name_en','Shish in Clay Pot')->first();
        //Celesta
        $food115= Food::where('name_en','Scallop Pane')->first();
        $food116= Food::where('name_en','Crispy Barbecue')->first();
        $food117= Food::where('name_en','Crispy')->first();
        $food118= Food::where('name_en','Scallop Milanese')->first();
        $food119= Food::where('name_en','Grilled Chicken Cordon Bleu')->first();
        $food120= Food::where('name_en','Chicken Celesta')->first();
        $food121= Food::where('name_en','Chicken Cordon Bleu')->first();
        $food122= Food::where('name_en','Chicken Stroganoff')->first();
        $food123= Food::where('name_en','Baba Ghanoush')->first(); // بابا غنوج
        $food124= Food::where('name_en','Beiruti Hummus')->first();
        //Steed
        $food125= Food::where('name_en','Manakish with Cheese and Tomato Paste')->first();
        $food126= Food::where('name_en','Za’atar Manakish')->first();
        $food127= Food::where('name_en','Chicken Fajita')->first();
        $food128= Food::where('name_en','Diet Chicken')->first();
        $food129= Food::where('name_en','Shish Tawook')->first();
        $food130= Food::where('name_en','Breaded Chicken Escalope')->first();
        $food131= Food::where('name_en','Chicken with Cream and Mushrooms')->first();
        $food132= Food::where('name_en','Chicken Cordon Bleu')->first();
        $food133= Food::where('name_en','Chicken Parmesan')->first();
        $food134= Food::where('name_en','Chicken Caesar')->first();
        // pit stop
        $food135= Food::where('name_en','Shish Sandwich')->first();
        $food136= Food::where('name_en','Scallop Sandwich')->first();
        $food137= Food::where('name_en','Caribbean Sandwich')->first();
        $food138= Food::where('name_en','Smoky BBQ Sandwich')->first();
        $food139= Food::where('name_en','Mushroom Beef Burger')->first();
        $food140= Food::where('name_en','Doritos Beef Burger')->first();
        $food141= Food::where('name_en','French Fries')->first();  // بطاطا مقلية
        $food142= Food::where('name_en','Popcorn Balls')->first();
        $food143= Food::where('name_en','Crispy Tender Chicken')->first();
        $food144= Food::where('name_en','Caesar Salad')->first();
        // استبرق
        $food145= Food::where('name_en','Rice with Peas')->first();
        $food146= Food::where('name_en','Molokhia')->first();
        $food147= Food::where('name_en','Chicken Kabsa')->first();
        $food148= Food::where('name_en','Eggplant Yalanji')->first();
        $food149= Food::where('name_en','Flaky Cheese Pastry')->first(); // برك جبنة
        $food150= Food::where('name_en','Chicken Pastry')->first(); // برك دجاج
        $food151= Food::where('name_en','Meat Pastry')->first();  // برك لحمة
        $food152= Food::where('name_en','Harrak Osba’o')->first();
        // بيت الشرق
        $food153= Food::where('name_en','Kibbeh in Yogurt Sauce')->first(); // كبة لبنية
        $food154= Food::where('name_en','Shakriya (Lamb in Yogurt Sauce)')->first();
        $food155= Food::where('name_en','Shish Barak (Meat Dumplings in Yogurt Sauce)')->first();
        $food156= Food::where('name_en','Lamb Slices on Dough')->first();
        $food157= Food::where('name_en','Lamb in a Tray')->first();
        $food158= Food::where('name_en','Penne Arrabbiata')->first();
        $food159= Food::where('name_en','Penne Pesto')->first();
        $food160= Food::where('name_en','Fettuccine Funghi')->first();
        $food161= Food::where('name_en','Lentil Soup')->first(); // شورية عدس
        $food162= Food::where('name_en','Mushroom Soup')->first(); // شوربة فطر
        //Zain Al-Sham
        $food163= Food::where('name_en','Rice with Peas and Chicken')->first();
        $food164= Food::where('name_en','Chicken Kabsa')->first();
        $food165= Food::where('name_en','Indian Kebab')->first(); // كباب هندي
        $food166= Food::where('name_en','Meat Platter')->first();
        $food167= Food::where('name_en','Eastern Salad')->first();
        $food168= Food::where('name_en','Fattoush')->first(); // فتوش
        $food169= Food::where('name_en','Fried Kibbeh')->first(); //كبة مقلية
        $food170= Food::where('name_en','Meat Pastries')->first();
        $food171= Food::where('name_en','Grilled Kibbeh')->first(); // كبة مشوية
        // شام غريل شرقي
        $food172= Food::where('name_en','Shami Kebab')->first(); // كباب شامي
        $food173= Food::where('name_en','Meat Chunks')->first(); // لحمة شقف
        $food174= Food::where('name_en','Makdous Fatteh')->first(); //فتة مكدوس
        $food175= Food::where('name_en','Mutabbal')->first(); // متبل
        $food176= Food::where('name_en','Mhammara')->first(); // محمرة
        $food177= Food::where('name_en','Yalanji (Stuffed Vine Leaves)')->first(); // يالنجي
        /// سيليستا شرقي
        $food178= Food::where('name_en','Eggplant Kebab')->first(); //كباب باذنجان
        $food179= Food::where('name_en','Chicken Soup')->first(); // شوربة دجاج
        $food180= Food::where('name_en','Vegetable Salad')->first(); // سلطة خضار
        $food181= Food::where('name_en','Tabbouleh')->first(); // تبولة
         /////////////////////////////////////////////////////////////////////////// مخبوزااات/////////////////
        ///
        $food182= Food::where('name_en','Cheese')->first(); // جبنة
        $food183= Food::where('name_en','Kashkaval')->first(); // قشقوان
        $food184= Food::where('name_en','Sujuk')->first(); // سجق
        $food185= Food::where('name_en','Smurf')->first(); // سنفورة
        $food186= Food::where('name_en','Toshka')->first(); // توشكا
        $food187= Food::where('name_en','Zaatar')->first(); // زعتر
        $food188= Food::where('name_en','Muhammara with Kashkaval Cheese')->first(); // محمرة قشقوان
        $food189= Food::where('name_en','Pizza')->first(); // بيتزا
        $food190= Food::where('name_en','Spinach')->first(); // سبانخ
        // باب توما
        $food191= Food::where('name_en','Muhammara')->first(); //
        $food192= Food::where('name_en','Zaatar')->first(); //
        $food193= Food::where('name_en','Cheese')->first(); //
        $food194= Food::where('name_en','Muhammara with Kashkaval Cheese')->first(); //
        $food195= Food::where('name_en','Meat Sfiha')->first(); //
        $food196= Food::where('name_en','Cheese with Kashkaval')->first(); //
        $food197= Food::where('name_en','Muhammara with Kashkaval Cheese')->where('category_foods_id',38)->first(); // محمرة فشقوان
        $food198= Food::where('name_en','Pizza')->first(); //
        $food199= Food::where('name_en','Shish with Kashkaval')->first(); //
        $food200= Food::where('name_en','Shish Pizza')->first(); //
        // بيتزا هات
        $food201= Food::where('name_en','Margherita Pizza')->where('category_foods_id',38)->first();
        $food202= Food::where('name_en','Four Seasons Pizza')->where('category_foods_id',38)->first();
        $food203= Food::where('name_en','Buffalo Chicken Pizza')->where('category_foods_id',38)->first();
        $food204= Food::where('name_en','Barbecue Chicken Pizza')->where('category_foods_id',38)->first();
        $food205= Food::where('name_en','Four Cheese Pizza')->where('category_foods_id',38)->first();
        $food206= Food::where('name_en','Margherita Pizza')->where('category_foods_id',39)->first();
        $food207= Food::where('name_en','Four Seasons Pizza')->where('category_foods_id',39)->first();
        $food208= Food::where('name_en','Buffalo Chicken Pizza')->where('category_foods_id',39)->first();
        $food209= Food::where('name_en','Barbecue Chicken Pizza')->where('category_foods_id',39)->first();
        $food210= Food::where('name_en','Four Cheese Pizza')->where('category_foods_id',39)->first();
        // بيدا بوت
        $food211= Food::where('name_en','Pide with Labneh and Vegetables')->first(); //
        $food212= Food::where('name_en','Pide with Thyme and Labneh')->first(); //
        $food213= Food::where('name_en','Pide with Shish and Kashkaval')->first(); //
        $food214= Food::where('name_en','Kofta')->first(); //
        $food215= Food::where('name_en','Pide with Mushrooms and Kashkaval')->first(); //
        $food216= Food::where('name_en','Pide with Muhammara and Kashkaval')->first(); //
        $food217= Food::where('name_en','Pide with Thyme')->first(); //
        $food218= Food::where('name_en','Pide with Tamari')->first(); //
        $food219= Food::where('name_en','Pide with Nutella and Lotus')->first(); //
        $food220= Food::where('name_en','Four Seasons Pizza')->first(); //
        // مستر فلافل
        $food221= Food::where('name_en','Tourist Falafel')->first(); //
        $food222= Food::where('name_en','Falafel in Samoon Bread')->first(); //
        $food223= Food::where('name_en','Arabic Falafel')->first(); //
        $food224= Food::where('name_en','Thyme with Vegetables')->first(); //
        $food225= Food::where('name_en','Muhammara with Kashkaval Cheese')->first(); //
        $food226= Food::where('name_en','Thyme with Kashkaval Cheese')->first(); //
        $food227= Food::where('name_en','Cheese')->first(); //
        $food228= Food::where('name_en','Four Seasons Pizza')->where('category_foods_id',37)->first();
        $food229= Food::where('name_en','Four Seasons Pizza')->where('category_foods_id',38)->first();
        $food230= Food::where('name_en','Four Seasons Pizza')->where('category_foods_id',39)->first();
        ///////////////////////////////////////////////////////// HealthyFood /////////////////////////////
        /// تيست فل
        $food231= Food::where('name_en','Rocca Salad')->first(); //
        $food232= Food::where('name_en','Green Salad')->first(); //
        $food233= Food::where('name_en','Tuna Salad')->first(); //
        $food234= Food::where('name_en','Pasta Salad')->first(); //
        $food235= Food::where('name_en','Caesar Salad')->where('category_foods_id',41)->first();
        $food236= Food::where('name_en','Boiled Eggs')->first(); //
        $food237= Food::where('name_en','Omelette')->first(); //
        $food238= Food::where('name_en','Labneh and Olives')->first(); //
        $food239= Food::where('name_en','Halloumi Cheese')->first(); //
        $food240= Food::where('name_en','Turkey with Mozzarella')->first(); //
        // دابت هاوس
        $food241= Food::where('name_en','Chicken Lite')->first(); //
        $food242= Food::where('name_en','Diet Chicken Fillets')->first(); //
        $food243= Food::where('name_en','BBQ Chicken')->first(); //
        $food244= Food::where('name_en','Chicken with Lemon and Garlic')->first(); //
        $food245= Food::where('name_en','Chicken with Cream')->first(); //
        $food246= Food::where('name_en','Chinese Chicken')->first(); //
        $food247= Food::where('name_en','Egg Toast')->first(); //
        $food248= Food::where('name_en','Oats with Milk')->first(); //
        // كاسبريسو
        $food249= Food::where('name_en','Labneh')->first(); //
        $food250= Food::where('name_en','Halloumi')->first(); //
        $food251= Food::where('name_en','Turkey')->first(); //
        $food252= Food::where('name_en','Tuna')->first(); //
        $food253= Food::where('name_en','Chicken Avocado')->first(); //
        $food254= Food::where('name_en','Teriyaki Chicken')->first(); //
        $food255= Food::where('name_en','Healthy Chicken')->first(); //
        $food256= Food::where('name_en','Curry Chicken')->first(); //
        $food257= Food::where('name_en','Healthy Steak')->first(); //
        // كريف ات
        $food258= Food::where('name_en','Chicken with Rice')->first(); //
        $food259= Food::where('name_en','Pasta')->first(); //
        $food260= Food::where('name_en','Scallop')->first(); //
        $food261= Food::where('name_en','Mandi')->first(); //
        $food262= Food::where('name_en','Teriyaki with Rice')->first(); //
        $food263= Food::where('name_en','Fajita')->first(); //
        $food264= Food::where('name_en','Shish Tawook with Rice')->first(); //
        $food265= Food::where('name_en','Herb Chicken')->first(); //
        $food266= Food::where('name_en','Shawarma')->first(); //
        // نورسين
        $food267= Food::where('name_en','Four Seasons')->first(); //
        $food268= Food::where('name_en','Pizza Roca')->first(); //
        $food269= Food::where('name_en','Pizza Nursine')->first(); //
        $food270= Food::where('name_en','Supreme Pizza')->first(); //
        $food271= Food::where('name_en','Keto Chicken')->first(); //
        $food272= Food::where('name_en','Keto Beef')->first(); //
        $food273= Food::where('name_en','Crispy Tortilla')->first(); //
        $food274= Food::where('name_en','Volcano')->first(); //
        $food275= Food::where('name_en','Zinger')->first(); //
        $food276= Food::where('name_en','Francesco')->first(); //


        DB::table('restaurant_food')->insert([
            [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food1->id,
                'description_ar' => 'دبل إسبريسو مع ثلج',
                'description_en' => 'Double espresso with ice',
                'image' => 'public/images/Food/Drinks/صور ستيم/مشروبات باردة/ايس كوفي اميركانو.jpg',
                'price' => '32000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food2->id,
                'description_ar' => 'اسبريسو دبل شوت مع حليب',
                'description_en' => 'Double shot espresso with milk',
                'image' => 'public/images/Food/Drinks/صور ستيم/مشروبات باردة/ايس كوفي حليب.jpg',
                'price' => '40000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food3->id,
                'description_ar' => 'اسبريسو غني مع حليب',
                'description_en' => 'Rich espresso with milk',
                'image' => 'public/images/Food/Drinks/صور ستيم/مشروبات باردة/ايس لاتيه سادة.jpg',
                'price' => '40000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food4->id,
                'description_ar' => 'حليب مع آيس كرم الفانيليا',
                'description_en' => 'Milk with vanilla ice cream',
                'image' => 'public/images/Food/Drinks/صور ستيم/ميلك شيك/فانيل.jpg',
                'price' => '42000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food5->id,
                'description_ar' => 'حليب مع آيس كرم فريز',
                'description_en' => 'Milk with strawberry ice cream',
                'image' => 'public/images/Food/Drinks/صور ستيم/ميلك شيك/فريز.jpg',
                'price' => '42000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food6->id,
                'description_ar' => 'سيروب فانيل خالي من السكر',
                'description_en' => 'Sugar-free vanilla syrup',
                'image' => 'public/images/Food/Drinks/صور ستيم/لاتيه دايت ساخن/فانيل.jpg',
                'price' => '40000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food7->id,
                'description_ar' => 'سيروب كراميل خالي من السكر',
                'description_en' => 'Sugar-free caramel syrup',
                'image' => 'public/images/Food/Drinks/صور ستيم/لاتيه دايت ساخن/كرميل.jpg',
                'price' => '40000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food8->id,
                'description_ar' => 'حليب خالي من الدسم، سيروب موكا خالي من السكر',
                'description_en' => 'Skimmed milk, sugar-free mocha syrup',
                'image' => 'public/images/Food/Drinks/صور ستيم/لاتيه دايت ساخن/موكا.jpg',
                'price' => '40000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food9->id,
                'description_ar' => 'شاي طبيعي ممزوج بسيروب الدراق',
                'description_en' => 'Natural tea mixed with peach syrup',
                'image' => 'public/images/Food/Drinks/صور ستيم/ايس تي/دراق.jpg',
                'price' => '40000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant1->id,
                'food_id' => $food10->id,
                'description_ar' => 'شاي طبيعي ممزوج بمجموعة مختارة من السيروبات',
                'description_en' => 'Natural tea mixed with a selection of syrups',
                'image' => 'public/images/Food/Drinks/صور ستيم/ايس تي/اخضر.jpg',
                'price' => '40000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food11->id,
                'description_ar' => 'بطيخ لذيذ',
                'description_en' => 'Delicious Watermelon',
                'image' => 'public/images/Food/Drinks/صور اشاطي/العصائر/بطيخ.jpg',
                'price' => '17000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food12->id,
                'description_ar' => 'شمام لذيذ',
                'description_en' => 'Delicious Melon',
                'image' => 'public/images/Food/Drinks/صور اشاطي/العصائر/شمام.jpg',
                'price' => '17000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food13->id,
                'description_ar' => 'برتقال وجزر',
                'description_en' => 'Orange and Carrot',
                'image' => 'public/images/Food/Drinks/صور اشاطي/كوكتيلات العصائر/برتقال وجزر.jpg',
                'price' => '17000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food14->id,
                'description_ar' => 'فريز وليمون',
                'description_en' => 'Strawberry and Lemon',
                'image' => 'public/images/Food/Drinks/صور اشاطي/كوكتيلات العصائر/فريز وليمون.jpg',
                'price' => '20000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food15->id,
                'description_ar' => 'برتقال وليمون',
                'description_en' => 'Orange and Lemon',
                'image' => 'public/images/Food/Drinks/صور اشاطي/كوكتيلات العصائر/برتقال وليمون.jpg',
                'price' => '17000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food16->id,
                'description_ar' => 'توت وفريز وحليب',
                'description_en' => 'Berry, Strawberry, and Milk',
                'image' => 'public/images/Food/Drinks/صور اشاطي/كوكتيلات الحليب 1لتر/توت وفريز وحليب.jpg',
                'price' => '42000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food17->id,
                'description_ar' => 'شمام وحليب ونسلة',
                'description_en' => 'Melon, Milk, and Nestlé',
                'image' => 'public/images/Food/Drinks/صور اشاطي/كوكتيلات الحليب 1لتر/شمام وحليب ونسلة.jpg',
                'price' => '42000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food18->id,
                'description_ar' => 'موز وحليب',
                'description_en' => 'Banana and Milk',
                'image' => 'public/images/Food/Drinks/صور اشاطي/كوكتيلات الحليب 1لتر/موز وحليب.jpg',
                'price' => '47000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food19->id,
                'description_ar' => 'ميلك شيك فريز',
                'description_en' => 'Strawberry Milkshake',
                'image' => 'public/images/Food/Drinks/صور اشاطي/كوكتيلات الحليب 1لتر/ميلك شيك فريز.jpg',
                'price' => '42000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant2->id,
                'food_id' => $food20->id,
                'description_ar' => 'ميلك شيك فانيل',
                'description_en' => 'Vanilla Milkshake',
                'image' => 'public/images/Food/Drinks/صور اشاطي/كوكتيلات الحليب 1لتر/ميلك شيك فانيل.jpg',
                'price' => '52000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food21->id,
                'description_ar' => 'حليب ، ثلج ، اسبريسو',
                'description_en' => 'Milk, Ice, and Espresso',
                'image' => 'public/images/Food/Drinks/دي كاف/ايس لاتيه.jpg',
                'price' => '22000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food22->id,
                'description_ar' => 'قهوة مفلترة ، ثلج',
                'description_en' => 'Filtered Coffee with Ice',
                'image' => 'public/images/Food/Drinks/دي كاف/ايس اميركان.jpg',
                'price' => '20000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food23->id,
                'description_ar' => 'برتقال',
                'description_en' => 'Orange',
                'image' => 'public/images/Food/Drinks/دي كاف/برتقال.jpg',
                'price' => '20000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food24->id,
                'description_ar' => 'ليمون',
                'description_en' => 'Lemon',
                'image' => 'public/images/Food/Drinks/دي كاف/ليمون.jpg',
                'price' => '20000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food25->id,
                'description_ar' => 'بولو',
                'description_en' => 'Polo',
                'image' => 'public/images/Food/Drinks/دي كاف/بولو.jpg',
                'price' => '20000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food26->id,
                'description_ar' => 'حليب ، باودر تشوكلت ،نسلة',
                'description_en' => 'Milk, Chocolate Powder, and Nestlé',
                'image' => 'public/images/Food/Drinks/دي كاف/ايس سويس مس.jpg',
                'price' => '22000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food27->id,
                'description_ar' => 'شاي، سيروب حسب النكهة',
                'description_en' => 'Tea with Flavored Syrup',
                'image' => 'public/images/Food/Drinks/دي كاف/ايس تي.jpg',
                'price' => '26000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food28->id,
                'description_ar' => 'شاي ، ميكس سيروبات',
                'description_en' => 'Tea with Mixed Syrups',
                'image' => 'public/images/Food/Drinks/دي كاف/سوبر فروت.jpg',
                'price' => '27000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food29->id,
                'description_ar' => 'حليب، غولد ، ثلج',
                'description_en' => 'Milk, Gold, and Ice',
                'image' => 'public/images/Food/Drinks/دي كاف/دلونغ كافيه.jpg',
                'price' => '26000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant3->id,
                'food_id' => $food30->id,
                'description_ar' => 'حليب ، صوص شوكولا',
                'description_en' => 'Milk with Chocolate Sauce',
                'image' => 'public/images/Food/Drinks/دي كاف/ايس شوكلت.jpg',
                'price' => '29000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food31->id,
                'description_ar' => 'اسبريسو ، حليب وصوص الموكا',
                'description_en' => 'Espresso, milk, and mocha sauce',
                'image' => 'public/images/Food/Drinks/تريسز/فراب/موكا.jpg',
                'price' => '47000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food32->id,
                'description_ar' => 'اسبريسو ، ايس كريم فانيليا وحليب',
                'description_en' => 'Espresso, vanilla ice cream, and milk',
                'image' => 'public/images/Food/Drinks/تريسز/فراب/كرميل.jpg',
                'price' => '47000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food33->id,
                'description_ar' => 'اسبريسو ، حليب وصوص الموكا',
                'description_en' => 'Espresso, milk, and mocha sauce',
                'image' => 'public/images/Food/Drinks/تريسز/كابتشينو مثلج/ايس كابتشينو موكا.jpg',
                'price' => '42000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food34->id,
                'description_ar' => 'اسبريسو ، حليب وصوص الشوكولا وباونتي',
                'description_en' => 'Espresso, milk, chocolate sauce, and Bounty',
                'image' => 'public/images/Food/Drinks/تريسز/كابتشينو مثلج/ايس كابتشينو باونت.jpg',
                'price' => '42000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food35->id,
                'description_ar' => 'اسبريسو ، حليب وصوص الشوكولا وسنيكرز',
                'description_en' => 'Espresso, milk, chocolate sauce, and Snickers',
                'image' => 'public/images/Food/Drinks/تريسز/كابتشينو مثلج/ايس كابتشينو سنيكرز.jpg',
                'price' => '42000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food36->id,
                'description_ar' => 'اسبريسو ، حليب وصوص الشوكولا البيضاء',
                'description_en' => 'Espresso, milk, and white chocolate sauce',
                'image' => 'public/images/Food/Drinks/تريسز/كابتشينو مثلج/وايت.jpg',
                'price' => '42200',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food37->id,
                'description_ar' => 'اوريو ، آيس كريم',
                'description_en' => 'Oreo and ice cream',
                'image' => 'public/images/Food/Drinks/تريسز/تريسز شيك/اوريو.jpg',
                'price' => '47200',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food38->id,
                'description_ar' => 'تويكس ، آيس كريم',
                'description_en' => 'Twix and ice cream',
                'image' => 'public/images/Food/Drinks/تريسز/تريسز شيك/تويكس.jpg',
                'price' => '48000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food39->id,
                'description_ar' => 'لوتس ، آيس كريم',
                'description_en' => 'Lotus and ice cream',
                'image' => 'public/images/Food/Drinks/تريسز/تريسز شيك/لوتس.jpg',
                'price' => '47200',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant4->id,
                'food_id' => $food40->id,
                'description_ar' => 'شراب بلو كوراكاو ، آيس كريم فانيليا',
                'description_en' => 'Blue Curacao syrup and vanilla ice cream',
                'image' => 'public/images/Food/Drinks/تريسز/تريسز شيك/بلو سكاي.jpg',
                'price' => '48000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food41->id,
                'description_ar' => 'موز وحليب',
                'description_en' => 'Banana and milk',
                'image' => 'public/images/Food/Drinks/آدمز/كوكتيلات/موز وحليب.jpg',
                'price' => '12000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food42->id,
                'description_ar' => 'فريز وحليب',
                'description_en' => 'Strawberry and milk',
                'image' => 'public/images/Food/Drinks/آدمز/كوكتيلات/فريز وحليب.jpg',
                'price' => '17000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food43->id,
                'description_ar' => 'موز وحليب وفريز',
                'description_en' => 'Banana, milk, and strawberry',
                'image' => 'public/images/Food/Drinks/آدمز/كوكتيلات/موز وحليب وفريز.jpg',
                'price' => '12000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food44->id,
                'description_ar' => 'افوكادو',
                'description_en' => 'Avocado',
                'image' => 'public/images/Food/Drinks/آدمز/كوكتيلات/افوكادو.jpg',
                'price' => '24000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food45->id,
                'description_ar' => 'موز وحليب ولوتس',
                'description_en' => 'Banana, milk, and Lotus',
                'image' => 'public/images/Food/Drinks/آدمز/كوكتيلات/موز وحليب ولوتس.jpg',
                'price' => '12000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food46->id,
                'description_ar' => 'فريز',
                'description_en' => 'Strawberry',
                'image' => 'public/images/Food/Drinks/آدمز/عصائر/فريز.jpg',
                'price' => '19000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food47->id,
                'description_ar' => 'توت',
                'description_en' => 'Berry',
                'image' => 'public/images/Food/Drinks/آدمز/عصائر/توت.jpg',
                'price' => '20000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food48->id,
                'description_ar' => 'برتقال',
                'description_en' => 'Orange',
                'image' => 'public/images/Food/Drinks/آدمز/عصائر/برتقال.jpg',
                'price' => '17000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food49->id,
                'description_ar' => 'ليمون',
                'description_en' => 'Lemon',
                'image' => 'public/images/Food/Drinks/آدمز/عصائر/ليمون.jpg',
                'price' => '19000',
                'quantity' => '10',
            ], [
                'restaurant_id' => $restaurant5->id,
                'food_id' => $food50->id,
                'description_ar' => 'بولو',
                'description_en' => 'Polo',
                'image' => 'public/images/Food/Drinks/آدمز/عصائر/بولو.jpg',
                'price' => '19000',
                'quantity' => '10',
            ],
            [
                'restaurant_id' => $restaurant6->id,
                'food_id' => $food51->id,
                'description_ar' => 'كنافة جبنة',
                'description_en' => 'Kunafa with Cheese',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/كنافة جبنة .jpg',
                'price' => '10000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant6->id,
                'food_id' => $food52->id,
                'description_ar' => 'كنافة لوتس',
                'description_en' => 'Kunafa with Lotus',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/كنافة لوتس .jpg',
                'price' => '10000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant6->id,
                'food_id' => $food53->id,
                'description_ar' => 'كنافة شوكولا',
                'description_en' => 'Kunafa with Chocolate',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/كنافة شوكولا .jpg',
                'price' => '10000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant6->id,
                'food_id' => $food54->id,
                'description_ar' => 'معمول جبنة',
                'description_en' => 'Maamoul with Cheese',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/معمول جبنة .jpg',
                'price' => '20000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant6->id,
                'food_id' => $food55->id,
                'description_ar' => 'معمول جبنة مع اللوتس',
                'description_en' => 'Maamoul with Cheese and Lotus',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/معمول جبنة مع اللوتس .jpg',
                'price' => '20000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant6->id,
                'food_id' => $food56->id,
                'description_ar' => 'معمول جبنة مع النستلة',
                'description_en' => 'Maamoul with Cheese and Nestlé',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/معمول جبنة مع النستلة.jpg',
                'price' => '20000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant6->id,
                'food_id' => $food57->id,
                'description_ar' => 'صحن شرائح جزرية 220غ',
                'description_en' => 'Plate of Jazariyeh Slices (220g)',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/صحن شرائح جزرية .jpg',
                'price' => '29000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant6->id,
                'food_id' => $food58->id,
                'description_ar' => 'تقدم مع الناطف ، 220غ',
                'description_en' => 'Served with Natif (220g)',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/كرابيج مع الناطف .jpg',
                'price' => '22000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant6->id,
                'food_id' => $food59->id,
                'description_ar' => '200غ',
                'description_en' => '200g',
                'image' => 'public/images/Food/Desserts/صور الحلويات/معمول وكنافة الطيب/قالب جزرية .jpg',
                'price' => '58000',
                'quantity' => '20',
            ],  [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food60->id,
                'description_ar' => 'صحن طابات مشكلة',
                'description_en' => 'Mixed Fruit Ice Cream Plate',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/صحن بوظة فواكه 24 طابة .jpg',
                'price' => '90000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food61->id,
                'description_ar' => 'رول',
                'description_en' => 'Roll',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/كاسيتا ماكس.jpg',
                'price' => '92000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food62->id,
                'description_ar' => 'رول',
                'description_en' => 'Roll',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/عربي فستق برش .jpg',
                'price' => '140000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food63->id,
                'description_ar' => 'رول',
                'description_en' => 'Roll',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/عربي فستق اكسترا .jpg',
                'price' => '180000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food64->id,
                'description_ar' => 'قطعة براونيز مغطسة بالشوكولا الفاخرة',
                'description_en' => 'A piece of brownies dipped in premium chocolate',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/براونيز.jpg',
                'price' => '22000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food65->id,
                'description_ar' => 'قطعة براونيز محشوة بالآيس كريم مغطسة بالشوكولا الفاخرة',
                'description_en' => 'A piece of brownies stuffed with ice cream and dipped in premium chocolate',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/براونيز أمية .jpg',
                'price' => '22000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food66->id,
                'description_ar' => 'قطعة من كيك شوكولا بابلي لذيذة',
                'description_en' => 'A delicious piece of bubbly chocolate cake',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/قطعة كيك بابلي .jpg',
                'price' => '22000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food67->id,
                'description_ar' => 'قطعة من كيك تشيز لوتس اللذيذ',
                'description_en' => 'A piece of delicious Lotus cheesecake',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/تشيز كيك لوتس .jpg',
                'price' => '22000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food68->id,
                'description_ar' => 'قطعة من كيك شوكولا جالاكسي لذيذة',
                'description_en' => 'A delicious piece of Galaxy chocolate cake',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/قطعة كيك جالاكسي .jpg',
                'price' => '22000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant7->id,
                'food_id' => $food69->id,
                'description_ar' => 'كأس من المحلاية المزينة بالكاجو والفستق الحلبي المبروش',
                'description_en' => 'A cup of Mahalaya garnished with cashews and grated pistachios',
                'image' => 'public/images/Food/Desserts/صور الحلويات/أمية كلاس/محلاية (فستق برش).jpg',
                'price' => '22000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant8->id,
                'food_id' => $food70->id,
                'description_ar' => 'قطعتين مغطسة من الدونانس',
                'description_en' => 'Two dipped donuts',
                'image' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/قطعتين مغطسة.jpg',
                'price' => '30000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant8->id,
                'food_id' => $food71->id,
                'description_ar' => 'قطعة دوناتس مغطسة، قطعة دوناتس محشية',
                'description_en' => 'One dipped donut and one stuffed donut',
                'image' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/قطعتين مشكل.jpg',
                'price' => '32000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant8->id,
                'food_id' => $food72->id,
                'description_ar' => 'قطعتين من الدوناتس المحشية',
                'description_en' => 'Two stuffed donuts',
                'image' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/قطعتين محشي.jpg',
                'price' => '32000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant8->id,
                'food_id' => $food73->id,
                'description_ar' => '12 قطعة من الدوناتس المغطسة بنكهات مختلفة',
                'description_en' => '12 dipped donuts with various flavors',
                'image' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/دزينة مغطسة.jpg',
                'price' => '180000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant8->id,
                'food_id' => $food74->id,
                'description_ar' => '12 قطعة من الدوناتس المحشية والمغطسة بنكهات مختلفة ',
                'description_en' => '12 stuffed and dipped donuts with various flavors',
                'image' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/دزينة مشكل.jpg',
                'price' => '192000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant8->id,
                'food_id' => $food75->id,
                'description_ar' => '12 قطعة من الدوناتس المحشية بنكهات مختلفة',
                'description_en' => '12 stuffed donuts with various flavors',
                'image' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/دزينة محشي.jpg',
                'price' => '200000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant8->id,
                'food_id' => $food76->id,
                'description_ar' => 'بحاجة إلى تسخين بين 30 إلى 45 ثانية',
                'description_en' => 'Needs heating for 30 to 45 seconds',
                'image' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/سينامون.jpg',
                'price' => '30000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant8->id,
                'food_id' => $food77->id,
                'description_ar' => 'براونيز خاصة بهوليوود دوناتس مصنوعة على الطريقة الأمريكية الأصلية',
                'description_en' => 'Hollywood Donuts special brownies made in authentic American style',
                'image' => 'public/images/Food/Desserts/صور الحلويات/هوليود دوناتس/البراونيز.jpg',
                'price' => '18000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant9->id,
                'food_id' => $food78->id,
                'description_ar' => 'مغطى بكريمة الجبن والجوز يكفي من 6 ل 8 أشخاص',
                'description_en' => 'Covered with cream cheese and walnuts, serves 6-8 people',
                'image' => 'public/images/Food/Desserts/صور الحلويات/ناش بيكري/كيك الجزر قياس صغير .jpg',
                'price' => '60000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant9->id,
                'food_id' => $food79->id,
                'description_ar' => 'يكفي من 6 ل 8 أشخاص',
                'description_en' => 'Serves 6-8 people',
                'image' => 'public/images/Food/Desserts/صور الحلويات/ناش بيكري/اورانج كيك .jpg',
                'price' => '62000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant9->id,
                'food_id' => $food80->id,
                'description_ar' => 'مغطاة بكريمة الباتر كريم',
                'description_en' => 'Covered with buttercream frosting',
                'image' => 'public/images/Food/Desserts/صور الحلويات/ناش بيكري/ريد فيلفيت مافن .jpg',
                'price' => '20000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant9->id,
                'food_id' => $food81->id,
                'description_ar' => 'مصنوعة من الفراولة الطازجة ومغطاة باللوز المبشور',
                'description_en' => 'Made with fresh strawberries and topped with shredded almonds',
                'image' => 'public/images/Food/Desserts/صور الحلويات/ناش بيكري/مافن الفراولة واللوز .jpg',
                'price' => '20000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant9->id,
                'food_id' => $food82->id,
                'description_ar' => 'مصنوعة من الموز والجوز',
                'description_en' => 'Made with bananas and walnuts',
                'image' => 'public/images/Food/Desserts/صور الحلويات/ناش بيكري/مافن الموز والجوز .jpg',
                'price' => '18000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant9->id,
                'food_id' => $food83->id,
                'description_ar' => 'قطعة1 - مغطاة بكريمة الجبن',
                'description_en' => 'One piece - covered with cream cheese',
                'image' => 'public/images/Food/Desserts/صور الحلويات/ناش بيكري/سينامون رول مغطاة بكريمة الجبن .jpg',
                'price' => '26000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant9->id,
                'food_id' => $food84->id,
                'description_ar' => 'قطعة1 - مغطاة بكريمة الجبن والجوز',
                'description_en' => 'One piece - covered with cream cheese and walnuts',
                'image' => 'public/images/Food/Desserts/صور الحلويات/ناش بيكري/سينامون على وجهها كريمة الجبن الكثيفة .jpg',
                'price' => '32000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food85->id,
                'description_ar' => 'كيك شوكولا مع كريمة جالاكسي برش جالاكسي',
                'description_en' => 'Chocolate cake with Galaxy cream and Galaxy sprinkles',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/سانتانا .jpg',
                'price' => '22200',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food86->id,
                'description_ar' => 'كيك كرانش أبيض مع مكسرات',
                'description_en' => 'White crunch cake with nuts',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/قطعة شوكولا مونتانا .jpg',
                'price' => '22500',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food87->id,
                'description_ar' => 'كيك شوكولا حشوة كريمة شوكولا',
                'description_en' => 'Chocolate cake filled with chocolate cream',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/قطعة كيك سيجان .jpg',
                'price' => '22500',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food88->id,
                'description_ar' => 'حشوة كيك نسكافيه مع كريمة تشيز وشوكولا جالاكسي',
                'description_en' => 'Nescafe cake with cream cheese and Galaxy chocolate',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/قطعة كيك تيرامسو .jpg',
                'price' => '23600',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food89->id,
                'description_ar' => 'كيك شوكولا غنية , بحشوة الكريمة البيضاء مع فواكه استوائية',
                'description_en' => 'Rich chocolate cake filled with white cream and tropical fruits',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/فور بلانش برش .jpg',
                'price' => '130000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food90->id,
                'description_ar' => 'كيك شوكولا غنية , بحشوة الكريمة البيضاء مع فواكه استوائية',
                'description_en' => 'Rich chocolate cake filled with white cream and tropical fruits',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/فور بلانش صب شوكولا بيضاء سائلة مع نسلة .jpg',
                'price' => '147000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food91->id,
                'description_ar' => 'كيك شوكولا وعلى الوجه صوص شوكولا مع بندق',
                'description_en' => 'Chocolate cake topped with chocolate sauce and hazelnuts',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/انكليش كيك (شوكولا).jpg',
                'price' => '70000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food92->id,
                'description_ar' => 'سكسيه شوكولا وكلير وشوالا وتارت',
                'description_en' => 'Chocolate eclairs, choux, and tarts',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/سواريه 24 .jpg',
                'price' => '130000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food93->id,
                'description_ar' => '(شوكولا - حليب - جوز هند - نسكافيه)',
                'description_en' => '(Chocolate - Milk - Coconut - Nescafe)',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/بتيفور مشكل .jpg',
                'price' => '94500',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant10->id,
                'food_id' => $food94->id,
                'description_ar' => 'ديسباسيتو شوكولا لذيذة',
                'description_en' => 'Delicious Chocolate Despacito',
                'image' => 'public/images/Food/Desserts/صور الحلويات/لويزا مورو/ديسباسيتو شوكولا .jpg',
                'price' => '82600',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food95->id,
                'description_ar' => 'شرحات دجاج مشوية بنكهات مالتي كالتي مع كريم التوم والفطر المقرمشة وجبنة قشقوان، مقدمة بخبزة تورتيلا المقرمشة.',
                'description_en' => 'Grilled chicken slices with Multi Kalti flavors, crispy mushrooms, garlic cream, and Kashkawan cheese, served in a crispy tortilla wrap.',
                'image' => 'public/images/Food/غربي/مالتي كالتي/كرانشي دونز تورتيلا.jpg',
                'price' => '68000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food96->id,
                'description_ar' => 'برغر عجل مشوي مع قطع اللحم المقدد، والتشيدر وصزث الباربيكيو، وشرائح بندورة والفطر فريش والمخلل والبصل والخس.',
                'description_en' => 'Grilled beef burger with crispy bacon, cheddar cheese, barbecue sauce, fresh tomato slices, mushrooms, pickles, onions, and lettuce.',
                'image' => 'public/images/Food/غربي/مالتي كالتي/مالتي بيف برغر.jpg',
                'price' => '93000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food97->id,
                'description_ar' => 'قطع من الدجاج المقلية تقدم مع البطاطس وصوص التشيدر',
                'description_en' => 'Fried chicken pieces served with fries and cheddar sauce.',
                'image' => 'public/images/Food/غربي/مالتي كالتي/كريسبي.jpg',
                'price' => '99000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food98->id,
                'description_ar' => 'وجبة شيش تقدم مع البطاطا، كريم الثوم، والكول سلو',
                'description_en' => 'Shish meal served with fries, garlic cream, and coleslaw.',
                'image' => 'public/images/Food/غربي/مالتي كالتي/شيش.jpg',
                'price' => '88000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food99->id,
                'description_ar' => 'شرائح الدجاج المقلية مع صوص التشيدر، تقدم مع سلطة كول سلو والبطاطا المقلية وكريم الثوم',
                'description_en' => 'Fried chicken slices with cheddar sauce, served with coleslaw, fries, and garlic cream.',
                'image' => 'public/images/Food/غربي/مالتي كالتي/سكالوب.jpg',
                'price' => '99000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food100->id,
                'description_ar' => 'كرات بطاطا محشية بنوعين من الأجبان، تقدم مع صوص الشيدر',
                'description_en' => 'Potato balls stuffed with two types of cheese, served with cheddar sauce.',
                'image' => 'public/images/Food/غربي/مالتي كالتي/كرات البطاطا مع الجبن.jpg',
                'price' => '29000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food101->id,
                'description_ar' => 'قطع خس، توست محمص ودجاج مشوي، تقدم مع صوص السيزر وجبنة البارميزان',
                'description_en' => 'Lettuce pieces, toasted bread, and grilled chicken, served with Caesar dressing and Parmesan cheese.',
                'image' => 'public/images/Food/غربي/مالتي كالتي/سيزر.jpg',
                'price' => '47000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food102->id,
                'description_ar' => 'جرجير، خس، بندورة كزبرية، فطر فريش، ذرة، جبنة البارميزان، وصوص سويت اند شيلي',
                'description_en' => 'Arugula, lettuce, coriander tomato, fresh mushrooms, corn, Parmesan cheese, and sweet and chili sauce.',
                'image' => 'public/images/Food/غربي/مالتي كالتي/سلطة مالتي كالتي.jpg',
                'price' => '47000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food103->id,
                'description_ar' => 'اكسترا',
                'description_en' => 'Extra',
                'image' => 'public/images/Food/غربي/مالتي كالتي/صوص سيزر.jpg',
                'price' => '6,600',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant11->id,
                'food_id' => $food104->id,
                'description_ar' => 'اكسترا',
                'description_en' => 'Extra',
                'image' => 'public/images/Food/غربي/مالتي كالتي/صوص باربكيو.jpg',
                'price' => '6,600',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food105->id,
                'description_ar' => 'معكرونة فيتوتشيني، صوص بشاميل، فطر، شرحات دجاج، جبنة البارميزان',
                'description_en' => 'Fettuccine pasta, béchamel sauce, mushrooms, chicken slices, Parmesan cheese',
                'image' => 'public/images/Food/غربي/شام غريل/فتوتشيني الفريدو.jpg',
                'price' => '78000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food106->id,
                'description_ar' => 'دجاج باينه 250غ ، بطاطا مقلية، سلطة كول سلو، كريم الثوم',
                'description_en' => '250g breaded chicken, French fries, coleslaw salad, garlic cream',
                'image' => 'public/images/Food/غربي/شام غريل/دجاج كريسبي.jpg',
                'price' => '85000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food107->id,
                'description_ar' => '300غ قطعة دجاج، صوص الفطر، بطاطا ودجز، خضار سوتيه.',
                'description_en' => '300g chicken breast, mushroom sauce, potato wedges, sautéed vegetables',
                'image' => 'public/images/Food/غربي/شام غريل/كوردون بلو.jpg',
                'price' => '99000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food108->id,
                'description_ar' => '250غ شرحات دجاج، صوص بشاميل مع كريمة الطبخ، فليفلة نوعين، أوريغانو، شرحات زيتون أسود، رز أصفر، خضار سوتيه',
                'description_en' => '250g chicken slices, béchamel sauce with cooking cream, two types of bell peppers, oregano, black olive slices, yellow rice, sautéed vegetables',
                'image' => 'public/images/Food/غربي/شام غريل/دجاج إيطالي.jpg',
                'price' => '97000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food109->id,
                'description_ar' => 'دجاج مشوي 250غ، صوص بيري بيري، بطاطا مقليه، كول سلو',
                'description_en' => '250g grilled chicken, peri-peri sauce, French fries, coleslaw',
                'image' => 'public/images/Food/غربي/شام غريل/دجاج بيري بيري.jpg',
                'price' => '93000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food110->id,
                'description_ar' => 'شرحات دجاج، كاجو، صوص بشاميل، زبدة فستق، زيت السمسم، رز أصفر، خضار سوتيه',
                'description_en' => 'Chicken slices, cashews, béchamel sauce, peanut butter, sesame oil, yellow rice, sautéed vegetables',
                'image' => 'public/images/Food/غربي/شام غريل/دجاج بكريمة الكاجو.jpg',
                'price' => '99000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food111->id,
                'description_ar' => 'دجاج 200غ ، عسل، زيت سمسم، صوص صويا، فليفلة، زنجبيل، رز.',
                'description_en' => '200g chicken, honey, sesame oil, soy sauce, bell peppers, ginger, rice',
                'image' => 'public/images/Food/غربي/شام غريل/دجاج تريكاني.jpg',
                'price' => '96000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food112->id,
                'description_ar' => 'دجاج محضر على الطريقة الهندية، صوص غرامسالا، بهارات قصور منتهى، بصل، بندورة، فليفلة نوعين',
                'description_en' => 'Indian-style chicken, garam masala sauce, royal spices, onions, tomatoes, two types of bell peppers',
                'image' => 'public/images/Food/غربي/شام غريل/بتر تشيكن.jpg',
                'price' => '99000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food113->id,
                'description_ar' => 'شرحات دجاج، كوسا، جزر، بشاميل، بهارات مدخنة، قشقوان، رز أصفر، خضار سوتيه',
                'description_en' => 'Chicken slices, zucchini, carrots, béchamel, smoked spices, Kashkaval cheese, yellow rice, sautéed vegetables',
                'image' => 'public/images/Food/غربي/شام غريل/دجاج بيريزيه.jpg',
                'price' => '97000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food114->id,
                'description_ar' => 'قطع شيش مشوية عالفحم، صوص الفخارة، جبنة قشقوان، رز أصفر',
                'description_en' => 'Grilled kebab skewers, clay pot sauce, Kashkaval cheese, yellow rice',
                'image' => 'public/images/Food/غربي/شام غريل/شيش بالفخارة.jpg',
                'price' => '98000',
                'quantity' => '20',
            ], ////
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food115->id,
                'description_ar' => 'شرحات دجاج، صوص بيتزا، موزاريلا، خضار سوتيه وبطاطا.',
                'description_en' => 'Chicken slices, pizza sauce, mozzarella, sautéed vegetables, and potatoes.',
                'image' => 'public/images/Food/غربي/سيليستا/اسكالوب بانيه.jpg',
                'price' => '101000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food116->id,
                'description_ar' => 'فتايل دجاج، صوص الباربيكيو، بطاطا، كول سلو، صوص كوكتيل',
                'description_en' => 'Chicken fillets, BBQ sauce, fries, coleslaw, cocktail sauce.',
                'image' => 'public/images/Food/غربي/سيليستا/كريسبي باربيكيو.jpg',
                'price' => '101000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food117->id,
                'description_ar' => 'فتايل دجاج، كول سلو، بطاطا، صوص كوكتيل، مايونيز',
                'description_en' => 'Chicken fillets, coleslaw, fries, cocktail sauce, mayonnaise.',
                'image' => 'public/images/Food/غربي/سيليستا/كريسبي.jpg',
                'price' => '101000',
                'quantity' => '40',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food118->id,
                'description_ar' => 'شرحات دجاج، صوص بيتزا، موزاريلا، خضار سوتيه، بطاطا',
                'description_en' => 'Chicken slices, pizza sauce, mozzarella, sautéed vegetables, and potatoes.',
                'image' => 'public/images/Food/غربي/سيليستا/اسكالوب ميالنيز.jpg',
                'price' => '107000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food119->id,
                'description_ar' => 'شرحات دجاج، موزاريلا، فطر فريش، كريمة فريش، جرجير، خل، بطاطا ودجز، خضار سوتيه',
                'description_en' => 'Chicken slices, mozzarella, fresh mushrooms, fresh cream, arugula, vinegar, potato wedges, sautéed vegetables.',
                'image' => 'public/images/Food/غربي/سيليستا/كوردون بلو دجاج مشوي.jpg',
                'price' => '107000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food120->id,
                'description_ar' => 'شرحات دجاج، موزاريلا، فليفلة خضراء، فليفلة حمراء، حبش مدخن، رز، خضار سوتيه',
                'description_en' => 'Chicken slices, mozzarella, green peppers, red peppers, smoked turkey, rice, sautéed vegetables.',
                'image' => 'public/images/Food/غربي/سيليستا/تشكن سليستا.jpg',
                'price' => '107000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food121->id,
                'description_ar' => 'شرحات دجاج، موزاريلا، فطر، بشميل، خضار سوتيه، بطاطا ودجز',
                'description_en' => 'Chicken slices, mozzarella, mushrooms, béchamel, sautéed vegetables, potato wedges.',
                'image' => 'public/images/Food/غربي/سيليستا/كوردون بلو دجاج.jpg',
                'price' => '107000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food122->id,
                'description_ar' => 'فليفلة خضراء، فليفلة حمراء، بصل، فطر فريش، صوص صويا، كريمة فريش، صويا، ذرة',
                'description_en' => 'Green peppers, red peppers, onions, fresh mushrooms, soy sauce, fresh cream, soybeans, corn.',
                'image' => 'public/images/Food/غربي/سيليستا/تشكن استروغونوف.jpg',
                'price' => '107000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food123->id,
                'description_ar' => 'فليفلة نوعين، بندورة، بقدونس، جوز',
                'description_en' => 'Two types of peppers, tomatoes, parsley, walnuts.',
                'image' => 'public/images/Food/غربي/سيليستا/بابا غنوج.jpg',
                'price' => '29000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food124->id,
                'description_ar' => 'حمص، بقدونس، ثوم، ليمون',
                'description_en' => 'Hummus, parsley, garlic, lemon.',
                'image' => 'public/images/Food/غربي/سيليستا/حمص بيروتي.jpg',
                'price' => '29000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food125->id,
                'description_ar' => 'منقوشة محمرة مع جبنة',
                'description_en' => 'Baked Manoucheh with Cheese',
                'image' => 'public/images/Food/غربي/ستيد/منقوشة محمرة مع جبنة.jpg',
                'price' => '58000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food126->id,
                'description_ar' => 'منقوشة زعتر',
                'description_en' => 'Za’atar Manoucheh',
                'image' => 'public/images/Food/غربي/ستيد/منقوشة زعتر.jpg',
                'price' => '43000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food127->id,
                'description_ar' => 'دجاج مشوي مع فليفلة نوعين، بصل، فطر فريش، جبنة الموزريلا',
                'description_en' => 'Grilled Chicken with Two Types of Bell Peppers, Onion, Fresh Mushrooms, Mozzarella Cheese',
                'image' => 'public/images/Food/غربي/ستيد/سندويشة فاهيتا دجاج.jpg',
                'price' => '135000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food128->id,
                'description_ar' => 'دجاج مع اوريغانو وزيت زيتون، يقدم مع سلطة خضراء، بطاطا مشوية',
                'description_en' => 'Chicken with Oregano and Olive Oil, Served with Green Salad and Roasted Potatoes',
                'image' => 'public/images/Food/غربي/ستيد/دجاج دايت.jpg',
                'price' => '99000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food129->id,
                'description_ar' => 'شيش دجاج',
                'description_en' => 'Chicken Skewers',
                'image' => 'public/images/Food/غربي/ستيد/شيش طاووك.jpg',
                'price' => '99000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food130->id,
                'description_ar' => 'يقدم مع خضار سوتيه، وبطاطا مقلية مع صوص المايو',
                'description_en' => 'Served with Sautéed Vegetables, French Fries, and Mayo Sauce',
                'image' => 'public/images/Food/غربي/ستيد/اسكالوب بانيه.jpg',
                'price' => '109000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food131->id,
                'description_ar' => 'فتايل دجاج مشوية مع كريم الفطر، تقدم مع بطاطا ودجز، ارز',
                'description_en' => 'Grilled Chicken Fillet with Mushroom Cream, Served with Potato Wedges and Rice',
                'image' => 'public/images/Food/غربي/ستيد/دجاج كريم مع الفطر.jpg',
                'price' => '120000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food132->id,
                'description_ar' => 'دجاج محشي بجبنة موزاريلا والفطر وحبش مدخن، يقدم مع خضار سوتيه وبطاطا مقلية',
                'description_en' => 'Chicken Stuffed with Mozzarella Cheese, Mushrooms, and Smoked Turkey, Served with Sautéed Vegetables and French Fries',
                'image' => 'public/images/Food/غربي/ستيد/كوردون بلو دجاج.jpg',
                'price' => '122000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food133->id,
                'description_ar' => 'فتايل دجاج مشوية مع كريم البارميزان، تقدم مع أرز أو ودجز',
                'description_en' => 'Grilled Chicken Fillet with Parmesan Cream, Served with Rice or Wedges',
                'image' => 'public/images/Food/غربي/ستيد/دجاج بارميزان.jpg',
                'price' => '133000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant14->id,
                'food_id' => $food134->id,
                'description_ar' => 'خس عربي، خبز كروتون، بارميزان، صوص السيزر، صدر دجاج مشوي',
                'description_en' => 'Arabic Lettuce, Croutons, Parmesan, Caesar Sauce, Grilled Chicken Breast',
                'image' => 'public/images/Food/غربي/ستيد/سيزر دجاج.jpg',
                'price' => '114000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food135->id,
                'description_ar' => 'دجاج، مخلل، كول سلو، كريم الثوم',
                'description_en' => 'Chicken, Pickles, Coleslaw, Garlic Cream',
                'image' => 'public/images/Food/غربي/بيت ستوب/شيش.jpg',
                'price' => '63000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food136->id,
                'description_ar' => 'اسكالوب دجاج، كول سلو، مايونيز، مخلل',
                'description_en' => 'Chicken Escalope, Coleslaw, Mayonnaise, Pickles',
                'image' => 'public/images/Food/غربي/بيت ستوب/سكالوب.jpg',
                'price' => '61000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food137->id,
                'description_ar' => 'صدر دجاج مقلي، صوص كاريبان، مايونيز، مخلل، خس فرنجي',
                'description_en' => 'Fried Chicken Breast, Caribbean Sauce, Mayonnaise, Pickles, Romaine Lettuce',
                'image' => 'public/images/Food/غربي/بيت ستوب/كاريبيان ساندويتش.jpg',
                'price' => '61000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food138->id,
                'description_ar' => 'صدر دجاج مقلي، مايونيز، صوص باربيكيو، صوص تشيدر، مخلل، خس فرنجي',
                'description_en' => 'Fried Chicken Breast, Mayonnaise, BBQ Sauce, Cheddar Sauce, Pickles, Romaine Lettuce',
                'image' => 'public/images/Food/غربي/بيت ستوب/سموكي باربيكو ساندويتش.jpg',
                'price' => '72000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food139->id,
                'description_ar' => 'لحمة، صوص، ماشروم، خس فرنجي',
                'description_en' => 'Beef, Sauce, Mushrooms, Romaine Lettuce',
                'image' => 'public/images/Food/غربي/بيت ستوب/ماشروم بيف برغر.jpg',
                'price' => '83000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food140->id,
                'description_ar' => 'لحمة، صوص الشيدر، صوص الباربيكيو، بصل، صوص كوكتيل، دوريتوز، خس',
                'description_en' => 'Beef, Cheddar Sauce, BBQ Sauce, Onion, Cocktail Sauce, Doritos, Lettuce',
                'image' => 'public/images/Food/غربي/بيت ستوب/دوريتوس بيف برغر.jpg',
                'price' => '83000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food141->id,
                'description_ar' => 'بطاطا مقلية',
                'description_en' => 'French Fries',
                'image' => 'public/images/Food/غربي/بيت ستوب/بطاطا مقلية.jpg',
                'price' => '37000',
                'quantity' => '70',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food142->id,
                'description_ar' => 'شرحات دجاج مقلية، محشي جبنة',
                'description_en' => 'Fried Chicken Slices Stuffed with Cheese',
                'image' => 'public/images/Food/غربي/بيت ستوب/بوب كورن كرات.jpg',
                'price' => '35000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food143->id,
                'description_ar' => 'كريسبي تشكن',
                'description_en' => 'Crispy Chicken',
                'image' => 'public/images/Food/غربي/بيت ستوب/كريسبي تندر تشيكن.jpg',
                'price' => '114000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant15->id,
                'food_id' => $food144->id,
                'description_ar' => 'خس، خبز توست، دجاج، بارميزان، صوص السيزر',
                'description_en' => 'Lettuce, Toasted Bread, Chicken, Parmesan, Caesar Dressing',
                'image' => 'public/images/Food/غربي/بيت ستوب/سيزر سالاد.jpg',
                'price' => '63000',
                'quantity' => '30',
            ], //////
            [
                'restaurant_id' => $restaurant16->id,
                'food_id' => $food145->id,
                'description_ar' => 'رز بالبازلاء مع لحمة ولوز',
                'description_en' => 'Rice with peas, meat, and almonds',
                'image' => 'public/images/Food/شرقي/استبرق/رز بازلاء.jpg',
                'price' => '25000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant16->id,
                'food_id' => $food146->id,
                'description_ar' => 'تقدم مع الأرز',
                'description_en' => 'Served with rice',
                'image' => 'public/images/Food/شرقي/استبرق/ملوخية.jpg',
                'price' => '25000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant16->id,
                'food_id' => $food147->id,
                'description_ar' => 'رز كبسة مع دجاج ولوز',
                'description_en' => 'Kabsa rice with chicken and almonds',
                'image' => 'public/images/Food/شرقي/استبرق/كبسة.jpg',
                'price' => '20000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant16->id,
                'food_id' => $food148->id,
                'description_ar' => 'قطعة',
                'description_en' => 'One piece',
                'image' => 'public/images/Food/شرقي/استبرق/يالنجي باذنجان.jpg',
                'price' => '7000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant16->id,
                'food_id' => $food149->id,
                'description_ar' => 'قطعة',
                'description_en' => 'One piece',
                'image' => 'public/images/Food/شرقي/استبرق/برك الجبنة.jpg',
                'price' => '6000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant16->id,
                'food_id' => $food150->id,
                'description_ar' => 'قطعة',
                'description_en' => 'One piece',
                'image' => 'public/images/Food/شرقي/استبرق/برك دجاج.jpg',
                'price' => '9000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant16->id,
                'food_id' => $food151->id,
                'description_ar' => 'قطعة',
                'description_en' => 'One piece',
                'image' => 'public/images/Food/شرقي/استبرق/برك لحمة.jpg',
                'price' => '9000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant16->id,
                'food_id' => $food152->id,
                'description_ar' => 'صحن لشخص واحد',
                'description_en' => 'Plate for one person',
                'image' => 'public/images/Food/شرقي/استبرق/حراق إصبعو.jpg',
                'price' => '15000',
                'quantity' => '30',
            ], //////////////////
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food153->id,
                'description_ar' => '٥ قطع من الكبة اللبنية تقدم مع رز',
                'description_en' => '5 pieces of kibbeh in yogurt sauce served with rice',
                'image' => 'public/images/Food/شرقي/بيت الشرق/كبة لبنية.jpg',
                'price' => '40000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food154->id,
                'description_ar' => 'قطع من لحم الغنم المطبوخ، لبن مطبوخ تقدم مع رز',
                'description_en' => 'Cooked lamb pieces in yogurt sauce served with rice',
                'image' => 'public/images/Food/شرقي/بيت الشرق/شاكرية.jpg',
                'price' => '50000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food155->id,
                'description_ar' => '١٥ قطعة شيش برك باللحم ، كزبرة خضراء تقدم مع رز',
                'description_en' => '15 pieces of meat-filled dumplings in yogurt sauce with fresh coriander served with rice',
                'image' => 'public/images/Food/شرقي/بيت الشرق/شيش برك.jpg',
                'price' => '45000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food156->id,
                'description_ar' => 'قطع من اللحم والدهن على عجين',
                'description_en' => 'Pieces of meat and fat on dough',
                'image' => 'public/images/Food/شرقي/بيت الشرق/شرحات لحم على العجين.jpg',
                'price' => '90000',
                'quantity' => '40',
            ],
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food157->id,
                'description_ar' => 'لحم بلدي مشوي بالفرن، بصل، بندورة ، بهارات خاصة',
                'description_en' => 'Grilled local lamb, onions, tomatoes, and special spices',
                'image' => 'public/images/Food/شرقي/بيت الشرق/لحمة بالصينية.jpg',
                'price' => '80000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food158->id,
                'description_ar' => 'بيني باستا ، صلصة بندورة ، جبنة البارميزان',
                'description_en' => 'Penne pasta, tomato sauce, parmesan cheese',
                'image' => 'public/images/Food/شرقي/بيت الشرق/بيني ارابيتا.jpg',
                'price' => '40000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food159->id,
                'description_ar' => 'بيني باستا مخلوطة مع جبنة البيستو ، صلصة الحبق، جبنة البارميزان',
                'description_en' => 'Penne pasta mixed with pesto cheese, basil sauce, parmesan cheese',
                'image' => 'public/images/Food/شرقي/بيت الشرق/بيني بيستو.jpg',
                'price' => '40000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food160->id,
                'description_ar' => 'فيتوتشيني باستا مع صوص الفونجي الإيطالي',
                'description_en' => 'Fettuccine pasta with Italian mushroom sauce',
                'image' => 'public/images/Food/شرقي/بيت الشرق/فيتوتشيني فونجي.jpg',
                'price' => '40000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food161->id,
                'description_ar' => 'عدس',
                'description_en' => 'Lentil',
                'image' => 'public/images/Food/شرقي/بيت الشرق/شوربة عدس.jpg',
                'price' => '40000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant17->id,
                'food_id' => $food162->id,
                'description_ar' => 'فطر',
                'description_en' => 'Mushroom',
                'image' => 'public/images/Food/شرقي/بيت الشرق/شوربة فطر.jpg',
                'price' => '40000',
                'quantity' => '15',
            ],
            ///
            [
                'restaurant_id' => $restaurant18->id,
                'food_id' => $food163->id,
                'description_ar' => 'أرز مع بازلاء بالدجاج',
                'description_en' => 'Rice with peas and chicken',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/أرز بازلاء.jpg',
                'price' => '75000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant18->id,
                'food_id' => $food164->id,
                'description_ar' => 'رز مطبوخ مع فخذ دجاج، صوص الكبسة، لبن، سرفيس',
                'description_en' => 'Cooked rice with chicken thigh, Kabsa sauce, yogurt, and sides',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/كبسة.jpg',
                'price' => '75000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant18->id,
                'food_id' => $food165->id,
                'description_ar' => 'قطع من اللحم مع البندورة المطبوخة، رز أبيض، سرفيس',
                'description_en' => 'Meat pieces with cooked tomato, white rice, and sides',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/كباب هندي.jpg',
                'price' => '90000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant18->id,
                'food_id' => $food166->id,
                'description_ar' => '300غ',
                'description_en' => '300g of meat platter',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/لحمة بالصحن.jpg',
                'price' => '70000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant18->id,
                'food_id' => $food167->id,
                'description_ar' => 'بندورة، خيار، حمض وزيت',
                'description_en' => 'Tomatoes, cucumbers, lemon, and oil',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/سلطة شرقية.jpg',
                'price' => '20000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant18->id,
                'food_id' => $food168->id,
                'description_ar' => 'خس، بندورة، خيار، نعنع، بقلة، بصل، حمض وزيت',
                'description_en' => 'Lettuce, tomatoes, cucumbers, mint, purslane, onions, lemon, and oil',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/فتوش.jpg',
                'price' => '22000',
                'quantity' => '22',
            ],
            [
                'restaurant_id' => $restaurant18->id,
                'food_id' => $food169->id,
                'description_ar' => 'قطعة واحدة',
                'description_en' => 'One piece of fried kibbeh',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/كبة مقلية.jpg',
                'price' => '15000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant18->id,
                'food_id' => $food170->id,
                'description_ar' => 'قطعة واحدة',
                'description_en' => 'One piece of meat pastry',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/برك لحمة.jpg',
                'price' => '7000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant18->id,
                'food_id' => $food171->id,
                'description_ar' => 'قطعة واحدة',
                'description_en' => 'One piece of grilled kibbeh',
                'image' => 'public/images/Food/شرقي/مطبخ زين الشام/كبة مشوية.jpg',
                'price' => '15000',
                'quantity' => '30',
            ],  [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food172->id,
                'description_ar' => '٢٠٠ غ لحمة ، بيواظ، بطاطا مقلية',
                'description_en' => '200g of meat, pita bread, and fries',
                'image' => 'public/images/Food/شرقي/شام غريل/كباب شامي.jpg',
                'price' => '90000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food173->id,
                'description_ar' => '٢٠٠ غ لحمة ، بيواظ، بطاطا مقلية',
                'description_en' => '200g of meat, pita bread, and fries',
                'image' => 'public/images/Food/شرقي/شام غريل/لحمة شقف.jpg',
                'price' => '1000000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food141->id,
                'description_ar' => 'بطاطا مقلية',
                'description_en' => 'French fries',
                'image' => 'public/images/Food/شرقي/شام غريل/بطاطا مقلية.jpg',
                'price' => '22000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food174->id,
                'description_ar' => 'باذنجان محشي لحمة',
                'description_en' => 'Eggplant stuffed with meat',
                'image' => 'public/images/Food/شرقي/شام غريل/فتة مكدوس.jpg',
                'price' => '25000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food171->id,
                'description_ar' => 'قطعة',
                'description_en' => 'One piece of grilled kibbeh',
                'image' => 'public/images/Food/شرقي/شام غريل/كبة مشوية.jpg',
                'price' => '30000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food149->id,
                'description_ar' => 'قطعة',
                'description_en' => 'One piece of cheese pastry',
                'image' => 'public/images/Food/شرقي/شام غريل/برك جبنة.jpg',
                'price' => '15000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food175->id,
                'description_ar' => 'متبل',
                'description_en' => 'Mutabbal (eggplant dip)',
                'image' => 'public/images/Food/شرقي/شام غريل/متبل.jpg',
                'price' => '22000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food123->id,
                'description_ar' => 'بابا غنوج',
                'description_en' => 'Baba Ghanoush',
                'image' => 'public/images/Food/شرقي/شام غريل/بابا غنوج.jpg',
                'price' => '22000',
                'quantity' => '22',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food176->id,
                'description_ar' => 'محمرة',
                'description_en' => 'Muhammara (spicy red pepper dip)',
                'image' => 'public/images/Food/شرقي/شام غريل/محمرة.jpg',
                'price' => '22000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant12->id,
                'food_id' => $food177->id,
                'description_ar' => 'ورق عنب ملفوف',
                'description_en' => 'Stuffed vine leaves (Yalanji)',
                'image' => 'public/images/Food/شرقي/شام غريل/يالانجي.jpg',
                'price' => '25000',
                'quantity' => '20',
            ],  ////
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food178->id,
                'description_ar' => 'كباب لحمة ،باذنجان',
                'description_en' => 'Meat kebab with eggplant',
                'image' => 'public/images/Food/شرقي/سيليستا/كباب باذنجان.jpg',
                'price' => '80000',
                'quantity' => '20',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food165->id,
                'description_ar' => 'بندورة ، فليفلة خضراء، فليفلة حمراء، ثوم، بصل، رز بالشعيرية',
                'description_en' => 'Tomatoes, green pepper, red pepper, garlic, onion, and rice with vermicelli',
                'image' => 'public/images/Food/شرقي/سيليستا/كباب هندي.jpg',
                'price' => '80000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food153->id,
                'description_ar' => 'لبن ، كبة، رز بالشعيرية',
                'description_en' => 'Yogurt, kibbeh, and rice with vermicelli',
                'image' => 'public/images/Food/شرقي/سيليستا/كبة لبنية.jpg',
                'price' => '70000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food161->id,
                'description_ar' => 'عدس، جزر، بطاطا، بصل',
                'description_en' => 'Lentils, carrots, potatoes, and onions',
                'image' => 'public/images/Food/شرقي/سيليستا/شوربة عدس.jpg',
                'price' => '20000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food162->id,
                'description_ar' => 'زبدة، طحين، كريمة فريش، حليب، فطر',
                'description_en' => 'Butter, flour, fresh cream, milk, and mushrooms',
                'image' => 'public/images/Food/شرقي/سيليستا/شوربة فطر.jpg',
                'price' => '20000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food179->id,
                'description_ar' => 'زبدة، طحين، كريمة فريش، حليب، دجاج',
                'description_en' => 'Butter, flour, fresh cream, milk, and chicken',
                'image' => 'public/images/Food/شرقي/سيليستا/شوربة دجاج.jpg',
                'price' => '30000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food180->id,
                'description_ar' => 'خيار بندورة نعنع زيت حمض',
                'description_en' => 'Cucumber, tomatoes, mint, oil, and lemon',
                'image' => 'public/images/Food/شرقي/سيليستا/سلطة خضار.jpg',
                'price' => '10000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food168->id,
                'description_ar' => 'خس، بندورة، خيار، بصل، خبز مقلي، دبس رمان',
                'description_en' => 'Lettuce, tomatoes, cucumber, onion, fried bread, and pomegranate molasses',
                'image' => 'public/images/Food/شرقي/سيليستا/فتوش.jpg',
                'price' => '10000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant13->id,
                'food_id' => $food181->id,
                'description_ar' => 'خس، بندورة، بقدونس، نعنع، ليمون',
                'description_en' => 'Lettuce, tomatoes, parsley, mint, and lemon',
                'image' => 'public/images/Food/شرقي/سيليستا/تبولة.jpg',
                'price' => '10000',
                'quantity' => '30',
            ],  // مطعم اللقمة الطيبة
            [
                'restaurant_id' => $restaurant19->id,
                'food_id' => $food182->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/جبنة.jpg',
                'price' => '3000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant19->id,
                'food_id' => $food183->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/قشقوان.jpg',
                'price' => '10000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant19->id,
                'food_id' => $food184->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/سجق.jpg',
                'price' => '10000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant19->id,
                'food_id' => $food185->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/سنفورة.jpg',
                'price' => '5000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant19->id,
                'food_id' => $food186->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/توشكا.jpg',
                'price' => '10000',
                'quantity' => '70',
            ],
            [
                'restaurant_id' => $restaurant19->id,
                'food_id' => $food187->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/زعتر.jpg',
                'price' => '3000',
                'quantity' => '75',
            ],
            [
                'restaurant_id' => $restaurant19->id,
                'food_id' => $food188->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/محمرة بقشقوان.jpg',
                'price' => '4500',
                'quantity' => '90',
            ],
            [
                'restaurant_id' => $restaurant19->id,
                'food_id' => $food189->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/بيتزا.jpg',
                'price' => '4500',
                'quantity' => '70',
            ],
            [
                'restaurant_id' => $restaurant19->id,
                'food_id' => $food190->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/اللقمة الطيبة/سبانخ.jpg',
                'price' => '3000',
                'quantity' => '50',
            ],
            // باب توما
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food191->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/محمرة.jpg',
                'price' => '1600',
                'quantity' => '75',
            ],
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food192->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/زعتر.jpg',
                'price' => '1600',
                'quantity' => '75',
            ],
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food193->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/جبنة.jpg',
                'price' => '1600',
                'quantity' => '90',
            ],
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food194->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/محمرة بقشقوان .jpg',
                'price' => '3700',
                'quantity' => '80',
            ],
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food195->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/لحمة صفيحة.jpg',
                'price' => '40000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food196->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/جبنة مع قشقوان كبير.jpg',
                'price' => '25000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food197->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/محمرة مع قشقوان كبير.jpg',
                'price' => '25000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food198->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/بيتزا.jpg',
                'price' => '25000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food199->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/شيش قشقوان كبير.jpg',
                'price' => '25000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant20->id,
                'food_id' => $food200->id,
                'description_ar' => 'قطعة',
                'description_en' => 'Piece',
                'image' => 'public/images/Food/مخبوزات/باب توما/بيتزا شيش .jpg',
                'price' => '62000',
                'quantity' => '50',
            ],
            // بيتزا هات
            [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food201->id,
                'description_ar' => 'صوص بيتزا هات، جبنة موزاريلا',
                'description_en' => 'Pizza Hut sauce, mozzarella cheese',
                'image' => 'public/images/Food/مخبوزات/بيتزا هات/مارغريتا بيتزا وسط.jpg',
                'price' => '80000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food202->id,
                'description_ar' => 'صوص بيتزا هات، جبنة موزاريلا، قشقوان',
                'description_en' => 'Pizza Hut sauce, mozzarella cheese, kashkaval',
                'image' => 'public/images/Food/مخبوزات/بيتزا هات/فور سيون بيتزا وسط.jpg',
                'price' => '90000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food203->id,
                'description_ar' => 'صوص بوفالو سبايسي، جبنة موزاريلا مع قشقوان، دجاج',
                'description_en' => 'Buffalo spicy sauce, mozzarella cheese with kashkaval, chicken',
                'image' => 'public/images/Food/مخبوزات/بيتزا هات/بوفالو تشكن بيتزا .jpg',
                'price' => '110000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food204->id,
                'description_ar' => 'صوص باربيكيو، جبنة موتزاريلا، قشقوان و دجاج، فطر فريش',
                'description_en' => 'Barbecue sauce, mozzarella cheese, kashkaval, chicken, fresh mushrooms',
                'image' => 'public/images/Food/مخبوزات/بيتزا هات/باربيكيو تشكن بيتزا وسط.jpg',
                'price' => '110000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food205->id,
                'description_ar' => 'صوص بيتزا هات، جبنة موزاريلا، قشقوان، بارميزان، شيدر',
                'description_en' => 'Pizza Hut sauce, mozzarella cheese, kashkaval, parmesan, cheddar',
                'image' => 'public/images/Food/مخبوزات/بيتزا هات/فور تشيز وسط.jpg',
                'price' => '110000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food206->id,
                'description_ar' => 'صوص بيتزا هات، جبنة موزاريلا',
                'description_en' => 'Pizza Hut sauce, mozzarella cheese',
                'image' => 'public/images/Food/مخبوزات/بيتزا هات/مارغريتا بيتزا.jpg',
                'price' => '115000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food207->id,
                'description_ar' => 'صوص بيتزا هات، جبنة موزاريلا، قشقوان',
                'description_en' => 'Pizza Hut sauce, mozzarella cheese, kashkaval',
                'image' => 'public/images/Food/مخبوزات/بيتزا هات/فور سيون بيتزا .jpg',
                'price' => '135000',
                'quantity' => '50',
            ],     [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food208->id,
                'description_ar' => 'صوص بوفالو سبايسي، جبنة موزاريلا مع قشقوان، دجاج',
                'description_en' => 'Buffalo spicy sauce, mozzarella cheese with kashkaval, chicken',
                'image' => 'public/images/Food/Baked Goods/Pizza Hut/Buffalo Chicken Pizza Medium.jpg',
                'price' => '145000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food209->id,
                'description_ar' => 'صوص باربيكيو، جبنة موتزاريلا، قشقوان و دجاج، فطر فريش',
                'description_en' => 'Barbecue sauce, mozzarella cheese, kashkaval, chicken, fresh mushrooms',
                'image' => 'public/images/Food/Baked Goods/Pizza Hut/Barbecue Chicken Pizza.jpg',
                'price' => '145000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant21->id,
                'food_id' => $food210->id,
                'description_ar' => 'صوص بيتزا هات، جبنة موزاريلا، قشقوان، بارميزان، شيدر',
                'description_en' => 'Pizza Hut sauce, mozzarella cheese, kashkaval, parmesan, cheddar',
                'image' => 'public/images/Food/Baked Goods/Pizza Hut/Four Cheese Pizza.jpg',
                'price' => '145000',
                'quantity' => '50',
            ],[
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food211->id,
                'description_ar' => 'لبنة بلدية، مع بندورة وخيار أخضر',
                'description_en' => 'Traditional labneh, with tomatoes and fresh cucumber',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Pida Labneh and Vegetables.jpg',
                'price' => '40000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food212->id,
                'description_ar' => 'زيت وزعتر ولبنة بلدية، مع النعناع الأخضر',
                'description_en' => 'Olive oil, thyme, traditional labneh, with fresh mint',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Pida Thyme and Labneh.jpg',
                'price' => '30000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food213->id,
                'description_ar' => 'شيش وقشقوان، ومخلل ومايونيز',
                'description_en' => 'Shish, kashkaval cheese, pickles, and mayonnaise',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Pida Shish and Kashkaval.jpg',
                'price' => '60000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food214->id,
                'description_ar' => 'لحمة كفتة ، مخلل وبندورة ومايونيز',
                'description_en' => 'Kofta meat, pickles, tomatoes, and mayonnaise',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Kofta.jpg',
                'price' => '60000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food215->id,
                'description_ar' => 'فطر فريش وقشقوان',
                'description_en' => 'Fresh mushrooms and kashkaval cheese',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Pida Mushrooms and Kashkaval.jpg',
                'price' => '60000',
                'quantity' => '40',
            ],
            [
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food216->id,
                'description_ar' => 'محمرة',
                'description_en' => 'Muhammara',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Pida Muhammara.jpg',
                'price' => '30000',
                'quantity' => '45',
            ],
            [
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food217->id,
                'description_ar' => 'زعتر',
                'description_en' => 'Thyme',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Pida Thyme.jpg',
                'price' => '25000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food218->id,
                'description_ar' => 'طحينة، دبس تمر، سكر ناعم، سمسم، موز',
                'description_en' => 'Tahini, date molasses, powdered sugar, sesame, banana',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Pida Tamari.jpg',
                'price' => '45000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food219->id,
                'description_ar' => 'نوتيلا، لوتس، موز، شوكولا مبروش',
                'description_en' => 'Nutella, Lotus, banana, shredded chocolate',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Pida Nutella and Lotus.jpg',
                'price' => '45000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant22->id,
                'food_id' => $food220->id,
                'description_ar' => 'صوص بيتزا، فطر فريش، فليفلة نوعين، زيتون أسود، قشقوان',
                'description_en' => 'Pizza sauce, fresh mushrooms, two types of peppers, black olives, kashkaval cheese',
                'image' => 'public/images/Food/Baked Goods/Pida Bot/Four Seasons Pizza.jpg',
                'price' => '45000',
                'quantity' => '55',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food221->id,
                'description_ar' => 'فلافل، بندورة، خس، مخلل خيار، مخلل لفت، دبس رمان',
                'description_en' => 'Falafel, tomatoes, lettuce, pickled cucumber, pickled turnip, pomegranate molasses',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Falafel Tourist.jpg',
                'price' => '9000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food222->id,
                'description_ar' => 'فلافل، بندورة، خس، مخلل خيار، مخلل لفت، دبس رمان',
                'description_en' => 'Falafel, tomatoes, lettuce, pickled cucumber, pickled turnip, pomegranate molasses',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Falafel Smoon.jpg',
                'price' => '9000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food223->id,
                'description_ar' => 'سندويشة فلافل مقطعة إلى عشر قطع',
                'description_en' => 'Falafel sandwich cut into ten pieces',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Arabic Falafel.jpg',
                'price' => '25000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food224->id,
                'description_ar' => 'زعتر ، زيت، فليفلة، بندورة، زيتون',
                'description_en' => 'Thyme, oil, pepper, tomatoes, olives',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Vegetable Thyme.jpg',
                'price' => '4000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food225->id,
                'description_ar' => 'محمرة، قشقوان',
                'description_en' => 'Muhammara, kashkaval cheese',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Muhammara Kashkaval.jpg',
                'price' => '6000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food226->id,
                'description_ar' => 'زعتر، زيت، جبنة قشقوان',
                'description_en' => 'Thyme, oil, kashkaval cheese',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Thyme Kashkaval.jpg',
                'price' => '5000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food227->id,
                'description_ar' => 'جبنة بلدية، سمسم',
                'description_en' => 'Traditional cheese, sesame',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Cheese.jpg',
                'price' => '6000',
                'quantity' => '60',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food228->id,
                'description_ar' => 'قشقوان، صوص البيتزا، فليفلة، زيتون، ذرة',
                'description_en' => 'Kashkaval, pizza sauce, pepper, olives, corn',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Four Seasons Pizza.jpg',
                'price' => '25000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food229->id,
                'description_ar' => 'قشقوان، صوص البيتزا، فليفلة، زيتون، ذرة',
                'description_en' => 'Kashkaval, pizza sauce, pepper, olives, corn',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Four Seasons Pizza.jpg',
                'price' => '50000',
                'quantity' => '',
            ],
            [
                'restaurant_id' => $restaurant23->id,
                'food_id' => $food230->id,
                'description_ar' => 'قشقوان، صوص البيتزا، فليفلة، زيتون، ذرة',
                'description_en' => 'Kashkaval, pizza sauce, pepper, olives, corn',
                'image' => 'public/images/Food/Baked Goods/Mr Falafel/Four Seasons Family Size.jpg',
                'price' => '100000',
                'quantity' => '',
            ], ///////////////////////
            [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food231->id,
                'description_ar' => 'سلطة',
                'description_en' => 'Salad',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/سلطات صحية/روكا.jpg',
                'price' => '35000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food232->id,
                'description_ar' => 'سلطة',
                'description_en' => 'Salad',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/سلطات صحية/خضرا.jpg',
                'price' => '35000',
                'quantity' => '35',
            ], [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food233->id,
                'description_ar' => 'سلطة تونا',
                'description_en' => 'Tuna Salad',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/سلطات صحية/تونا.jpg',
                'price' => '75000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food234->id,
                'description_ar' => 'سلطة باستا',
                'description_en' => 'Pasta Salad',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/سلطات صحية/باستا.jpg',
                'price' => '50000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food235->id,
                'description_ar' => 'سلطة سيزر',
                'description_en' => 'Caesar Salad',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/سلطات صحية/سيزر.jpg',
                'price' => '55000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food236->id,
                'description_ar' => 'بيض مسلوق',
                'description_en' => 'Boiled Eggs',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/فطور صحي/بيض مسلوق.jpg',
                'price' => '40000',
                'quantity' => '40',
            ], [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food237->id,
                'description_ar' => 'اومليت',
                'description_en' => 'Omelette',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/فطور صحي/اومليت.jpg',
                'price' => '40000',
                'quantity' => '35',
            ], [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food238->id,
                'description_ar' => 'لبنة وزيتون',
                'description_en' => 'Labneh and Olives',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/فطور صحي/لبنة وزيتون.jpg',
                'price' => '35000',
                'quantity' => '40',
            ], [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food239->id,
                'description_ar' => 'جبنة حلوم',
                'description_en' => 'Halloumi Cheese',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/فطور صحي/جبنة حلوم.jpg',
                'price' => '35000',
                'quantity' => '30',
            ], [
                'restaurant_id' => $restaurant24->id,
                'food_id' => $food240->id,
                'description_ar' => 'حبش',
                'description_en' => 'Turkey',
                'image' => 'public/images/Food/الاكل الصحي/تيست فل/فطور صحي/حبش.jpg',
                'price' => '50000',
                'quantity' => '35',
            ],  // دايت هاوس
            [
                'restaurant_id' => $restaurant25->id,
                'food_id' => $food241->id,
                'description_ar' => 'وجبة دجاج خفيفة',
                'description_en' => 'Light Chicken Meal',
                'image' => 'public/images/Food/الاكل الصحي/دايت هاوس/الوجبات/تشكن لايت.jpg',
                'price' => '45000',
                'quantity' => '30',
            ], [
                'restaurant_id' => $restaurant25->id,
                'food_id' => $food242->id,
                'description_ar' => 'شرحات دجاج مشوية',
                'description_en' => 'Grilled Chicken Strips',
                'image' => 'public/images/Food/الاكل الصحي/دايت هاوس/الوجبات/شرحات دجاج دايت.jpg',
                'price' => '45000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant25->id,
                'food_id' => $food243->id,
                'description_ar' => 'دجاج بصوص الباربكيو',
                'description_en' => 'Chicken with BBQ Sauce',
                'image' => 'public/images/Food/الاكل الصحي/دايت هاوس/الوجبات/دجاج بالباربكيو.jpg',
                'price' => '45000',
                'quantity' => '40',
            ], [
                'restaurant_id' => $restaurant25->id,
                'food_id' => $food244->id,
                'description_ar' => 'دجاج مطهي مع الحمض والثوم',
                'description_en' => 'Chicken Cooked with Lemon and Garlic',
                'image' => 'public/images/Food/الاكل الصحي/دايت هاوس/الوجبات/دجاج بالحمض والثوم.jpg',
                'price' => '45000',
                'quantity' => '40',
            ], [
                'restaurant_id' => $restaurant25->id,
                'food_id' => $food245->id,
                'description_ar' => 'دجاج بالكريمة الصحية',
                'description_en' => 'Chicken with Healthy Cream',
                'image' => 'public/images/Food/الاكل الصحي/دايت هاوس/الوجبات/دجاج بالكريمة.jpg',
                'price' => '45000',
                'quantity' => '35',
            ], [
                'restaurant_id' => $restaurant25->id,
                'food_id' => $food246->id,
                'description_ar' => 'دجاج بالطريقة الصينية',
                'description_en' => 'Chinese-Style Chicken',
                'image' => 'public/images/Food/الاكل الصحي/دايت هاوس/الوجبات/دجاج صيني.jpg',
                'price' => '50000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant25->id,
                'food_id' => $food247->id,
                'description_ar' => 'توست مع البيض',
                'description_en' => 'Toast with Egg',
                'image' => 'public/images/Food/الاكل الصحي/دايت هاوس/الفطور/توست بيض.jpg',
                'price' => '10000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant25->id,
                'food_id' => $food248->id,
                'description_ar' => 'شوفان مع الحليب',
                'description_en' => 'Oatmeal with Milk',
                'image' => 'public/images/Food/الاكل الصحي/دايت هاوس/الفطور/شوفان بالحليب.jpg',
                'price' => '28000',
                'quantity' => '35',
            ], [
                'restaurant_id' => $restaurant26->id,
                'food_id' => $food249->id,
                'description_ar' => 'ساندويتش لبنة',
                'description_en' => 'Labneh Sandwich',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/ساندويش صحي/لبنة.jpg',
                'price' => '45000',
                'quantity' => '30',
            ], [
                'restaurant_id' => $restaurant26->id,
                'food_id' => $food250->id,
                'description_ar' => 'ساندويتش جبنة حلومي',
                'description_en' => 'Halloumi Sandwich',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/ساندويش صحي/حلومي.jpg',
                'price' => '68000',
                'quantity' => '60',
            ], [
                'restaurant_id' => $restaurant26->id,
                'food_id' => $food251->id,
                'description_ar' => 'ساندويتش حبش',
                'description_en' => 'Turkey Sandwich',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/ساندويش صحي/حبش.jpg',
                'price' => '98000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant26->id,
                'food_id' => $food252->id,
                'description_ar' => 'ساندويتش تونا',
                'description_en' => 'Tuna Sandwich',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/ساندويش صحي/تونا.jpg',
                'price' => '125000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant26->id,
                'food_id' => $food253->id,
                'description_ar' => 'ساندويتش تشكن افوكادو',
                'description_en' => 'Chicken Avocado Sandwich',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/ساندويش صحي/تشكن افوكادو.jpg',
                'price' => '160000',
                'quantity' => '45',
            ], [
                'restaurant_id' => $restaurant26->id,
                'food_id' => $food254->id,
                'description_ar' => 'دجاج مطهي بصلصة الصويا والعسل وعصير التفاح',
                'description_en' => 'Chicken Cooked with Soy Sauce, Honey, and Apple Juice',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/وجبات صحي/ترياكي تشكن.jpg',
                'price' => '150000',
                'quantity' => '50',
            ], [
                'restaurant_id' => $restaurant26->id,
                'food_id' => $food255->id,
                'description_ar' => 'دجاج مشوي ، بروكلي، جزر، فاصوليا ، فطر',
                'description_en' => 'Grilled Chicken, Broccoli, Carrots, Beans, and Mushrooms',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/وجبات صحي/تشيكن هيلثي.jpg',
                'price' => '150500',
                'quantity' => '36',
            ], [
                'restaurant_id' => $restaurant26->id,
                'food_id' => $food256->id,
                'description_ar' => 'دجاج مطهي مع حليب جوز الهند منزوع الدسم',
                'description_en' => 'Chicken Cooked with Low-Fat Coconut Milk',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/وجبات صحي/كاري تشكن.jpg',
                'price' => '150500',
                'quantity' => '36',
            ], [
                'restaurant_id' => $restaurant26->id,
                'food_id' => $food257->id,
                'description_ar' => 'فيليه عجل مشوي، بروكلي، جزر، فاصوليا',
                'description_en' => 'Grilled Veal Fillet, Broccoli, Carrots, and Beans',
                'image' => 'public/images/Food/الاكل الصحي/كاسبريسو/وجبات صحي/هيلثي ستيك2.jpg',
                'price' => '270000',
                'quantity' => '25',
            ],  // كريف ات
            [
                'restaurant_id' => $restaurant27->id,
                'food_id' => $food258->id,
                'description_ar' => 'خضار مشوية ذرة صوص من اختيار الزبون',
                'description_en' => 'Grilled vegetables, corn, sauce of customer’s choice',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/جاج ورز.jpg',
                'price' => '36000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant27->id,
                'food_id' => $food259->id,
                'description_ar' => 'فليفلة خضرا وحمرا بقدونس ذرة',
                'description_en' => 'Green and red pepper, parsley, corn',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/باستا.jpg',
                'price' => '36000',
                'quantity' => '55',
            ],
            [
                'restaurant_id' => $restaurant27->id,
                'food_id' => $food260->id,
                'description_ar' => 'شرائح سكالوب مشوي مع صوص المارينارا',
                'description_en' => 'Grilled scallop slices with marinara sauce',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/سكالوب.jpg',
                'price' => '36000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant27->id,
                'food_id' => $food261->id,
                'description_ar' => 'دجاج وارز مدخن',
                'description_en' => 'Smoked chicken and rice',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/مندي.jpg',
                'price' => '39000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant27->id,
                'food_id' => $food262->id,
                'description_ar' => 'خضار مشوية ذرة صوص ترياكي',
                'description_en' => 'Grilled vegetables, corn, teriyaki sauce',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/ترياكي.jpg',
                'price' => '40000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant27->id,
                'food_id' => $food263->id,
                'description_ar' => 'خضار مشوية ذرة بصل',
                'description_en' => 'Grilled vegetables, corn, onion',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/فاهيتا.jpg',
                'price' => '40000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant27->id,
                'food_id' => $food264->id,
                'description_ar' => ':بصل ذرة صوص كريفت',
                'description_en' => 'Onion, corn, Crave sauce',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/شيش طاووق.jpg',
                'price' => '40000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant27->id,
                'food_id' => $food265->id,
                'description_ar' => 'دجاج ،ذرة ،صوص الليمون',
                'description_en' => 'Chicken, corn, lemon sauce',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/جاج بالاعشاب.jpg',
                'price' => '39000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant27->id,
                'food_id' => $food266->id,
                'description_ar' => 'شاورما بطاطا ويدجز سلطة',
                'description_en' => 'Shawarma, potato wedges, salad',
                'image' => 'public/images/Food/الاكل الصحي/كريف ات/شاورما.jpg',
                'price' => '39000',
                'quantity' => '45',
            ],  // نورسين
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food267->id,
                'description_ar' => 'بصل ، طماطم ،فطر، فليفلة',
                'description_en' => 'Onion, tomato, mushroom, pepper',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/بيتزا/الفصول الاربعة.jpg',
                'price' => '75000',
                'quantity' => '70',
            ],
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food268->id,
                'description_ar' => 'فطر ، باراميزان ،فطر، موزاريللا',
                'description_en' => 'Mushroom, parmesan, mushroom, mozzarella',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/بيتزا/روكا.jpg',
                'price' => '84000',
                'quantity' => '50',
            ],
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food269->id,
                'description_ar' => 'صدر دجاج ، صوص شاورما، موزاريللا',
                'description_en' => 'Chicken breast, shawarma sauce, mozzarella',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/بيتزا/نورسين (2).jpg',
                'price' => '98000',
                'quantity' => '60',
            ],
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food270->id,
                'description_ar' => 'رول دجاج ذرة،فطر، موزاريللا',
                'description_en' => 'Chicken roll, corn, mushroom, mozzarella',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/بيتزا/سوبريم.jpg',
                'price' => '84000',
                'quantity' => '70',
            ],
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food271->id,
                'description_ar' => 'صدر دجاج مشوي ، سلطة كيتو، صوص ليمون',
                'description_en' => 'Grilled chicken breast, keto salad, lemon sauce',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/وجبات الدايت/كيتو دجاج.jpg',
                'price' => '92000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food272->id,
                'description_ar' => 'شرحات لحمة مشوي ، سلطة كيتو، صوص ليمون',
                'description_en' => 'Grilled meat slices, keto salad, lemon sauce',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/وجبات الدايت/كيتو لحم.jpg',
                'price' => '92000',
                'quantity' => '28',
            ],
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food273->id,
                'description_ar' => 'كريسبي، حبش، ذرة',
                'description_en' => 'Crispy, turkey, corn',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/سااندويش دجاج/كريسبي تورتيلات.jpg',
                'price' => '79000',
                'quantity' => '30',
            ],
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food274->id,
                'description_ar' => 'قطع دجاج مقلي، حبش، فطر،شيدر',
                'description_en' => 'Fried chicken pieces, turkey, mushroom, cheddar',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/سااندويش دجاج/فولكانو.jpg',
                'price' => '79000',
                'quantity' => '25',
            ],
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food275->id,
                'description_ar' => 'بيبروني، تباسكو، شيدر',
                'description_en' => 'Pepperoni, Tabasco, cheddar',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/سااندويش دجاج/زنجر.jpg',
                'price' => '79000',
                'quantity' => '35',
            ],
            [
                'restaurant_id' => $restaurant28->id,
                'food_id' => $food276->id,
                'description_ar' => '',
                'description_en' => '',
                'image' => 'public/images/Food/الاكل الصحي/نورسين/سااندويش دجاج/فرانشيسكو.jpg',
                'price' => '79000',
                'quantity' => '40',
            ]


        ]);
    }
}
