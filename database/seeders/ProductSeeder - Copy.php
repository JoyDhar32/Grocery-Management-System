<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            //Fresh Foods
            [
                "name" => "Organic Mixed Greens",
                "slug" => "organic-mixed-greens",
                "short_description" => "Enjoy a vibrant mix of fresh organic greens. A nutritious blend of lettuce, spinach, and arugula.",
                "description" => "Our Organic Mixed Greens offer a colorful medley of fresh and crisp lettuce, nutrient-packed spinach leaves, and peppery arugula. This delightful blend is perfect for creating refreshing salads or adding a healthy dose of greens to your sandwiches and wraps. Packed with vitamins, minerals, and antioxidants, these organic greens are a fantastic way to nourish your body and elevate your meals. Whether you're a health-conscious individual or simply looking to add more freshness to your diet, our Organic Mixed Greens are a delicious choice.",
                "regular_price" => 4.99,
                "old_price" => 6.99,
                "SKU" => "ORGGRN-001",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  50

            ],
            [
                "name" => "Sweet Cherry Tomatoes",
                "slug" => "sweet-cherry-tomatoes",
                "short_description" => "Indulge in the sweetness of our cherry tomatoes. Bursting with flavor and perfect for snacking or adding to salads.",
                "description" => "Our Sweet Cherry Tomatoes are a delightful and convenient way to enjoy the taste of summer all year round. These bite-sized tomatoes are bursting with natural sweetness and have a firm texture that adds a satisfying crunch to your dishes. Whether you snack on them straight out of the container, toss them into salads for a burst of flavor, or use them as a colorful garnish, our sweet cherry tomatoes are a versatile and healthy addition to your kitchen. Stock up on these little gems and elevate your culinary creations with their vibrant taste and freshness.",
                "regular_price" => 3.49,
                "old_price" => 4.49,
                "SKU" => "SWTTOM-002",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Fresh Atlantic Salmon",
                "slug" => "fresh-atlantic-salmon",
                "short_description" => "Dive into the ocean's flavors with our fresh Atlantic salmon. Tender, flavorful, and perfect for grilling or baking.",
                "description" => "Our Fresh Atlantic Salmon is sourced from the pristine waters of the Atlantic Ocean, ensuring its superior quality and taste. With its rich, succulent flesh and delicate flavor, this versatile fish is a favorite among seafood enthusiasts. Whether you grill it to perfection, bake it with aromatic herbs and spices, or pan-sear it for a crispy skin, our fresh Atlantic salmon will impress your taste buds and elevate your culinary skills. Packed with omega-3 fatty acids and protein, it's a nutritious choice that brings the ocean's flavors straight to your plate.",
                "regular_price" => 12.99,
                "old_price" => 14.99,
                "SKU" => "SALM-003",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  30

            ],
            [
                "name" => "Organic Rainbow Carrots",
                "slug" => "organic-rainbow-carrots",
                "short_description" => "Add a pop of color to your meals with our organic rainbow carrots. Vibrant, sweet, and full of nutrients.",
                "description" => "Our Organic Rainbow Carrots are a beautiful and nutritious addition to your culinary creations. With their vibrant hues of orange, purple, yellow, and white, these carrots add a pop of color to your salads, stir-fries, and roasted vegetable dishes. Not only do they look visually appealing, but they also pack a sweet and earth y flavor that pairs well with a variety of ingredients. Grown organically, these carrots are free from pesticides and chemicals, ensuring a pure and wholesome eating experience. Discover the joy of cooking with these colorful gems and elevate your meals with their freshness and nutritional benefits.",
                "regular_price" => 3.99,
                "old_price" => 5.49,
                "SKU" => "ORGCAR-004",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  40

            ],
            [
                "name" => "Freshly Baked Sourdough Bread",
                "slug" => "freshly-baked-sourdough-bread",
                "short_description" => "Taste the tangy goodness of our freshly baked sourdough bread. Crispy crust, chewy texture, and irresistible flavor.",
                "description" => "Our Freshly Baked Sourdough Bread is a true artisanal delight. Made with a traditional sourdough starter and crafted using time-honored techniques, this bread boasts a tangy flavor, crispy crust, and a chewy texture that will satisfy any bread lover's cravings. Whether you enjoy it as the perfect accompaniment to soups and stews, use it for gourmet sandwiches, or savor it on its own with a slather of butter, our freshly baked sourdough bread is a staple that brings comfort and satisfaction to every bite. Stock up on this wholesome and delicious bread and elevate your culinary creations.",
                "regular_price" => 5.99,
                "old_price" => 7.99,
                "SKU" => "SOURDO-005",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  20

            ],
            [
                "name" => "Ripe Avocados",
                "slug" => "ripe-avocados",
                "short_description" => "Experience the creamy goodness of our ripe avocados. Perfect for guacamole, salads, or spreading on toast.",
                "description" => "Our Ripe Avocados are a creamy and versatile fruit that can elevate your culinary creations. These avocados are carefully selected at the peak of ripeness, ensuring a buttery texture and rich flavor. Whether you mash them into a delectable guacamole, slice them for salads and sandwiches, or spread them on toast for a healthy and delicious snack, our ripe avocados are a must-have in your kitchen. Packed with healthy fats, fiber, and an array of vitamins and minerals, they are not only tasty but also contribute to a balanced and nutritious diet.",
                "regular_price" => 2.49,
                "old_price" => 3.49,
                "SKU" => "RAVO-006",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  60

            ],
            [
                "name" => "Freshly Squeezed Orange Juice",
                "slug" => "freshly-squeezed-orange-juice",
                "short_description" => "Start your day with the refreshing taste of our freshly squeezed orange juice. Pure, tangy, and packed with vitamin C.",
                "description" => "Our Freshly Squeezed Orange Juice is a zesty and invigorating way to kickstart your mornings. Made from the juiciest oranges, each glass is bursting with pure and tangy goodness. Packed with immune-boosting vitamin C and natural antioxidants, our orange juice is not only refreshing but also a nutritious choice for the whole family. Whether you enjoy it on its own, use it as a base for smoothies, or add it to your favorite cocktail recipes, our freshly squeezed orange juice is a versatile and delicious addition to your beverage collection. Start your day off right with a glass of pure citrus delight.",
                "regular_price" => 3.99,
                "old_price" => 5.49,
                "SKU" => "OJUICE-007",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  50

            ],
            [
                "name" => "Organic Strawberries",
                "slug" => "organic-strawberries",
                "short_description" => "Indulge in the sweetness of our organic strawberries. Juicy, flavorful, and free from pesticides.",
                "description" => "Our Organic Strawberries are nature's candy, offering a burst of sweetness and vibrant flavor with every bite. Grown organically, these strawberries are free from harmful pesticides and chemicals, ensuring a pure and wholesome snacking experience. Whether you enjoy them on their own, add them to smoothies, or use them as a topping for desserts, our organic strawberries are a guilt-free treat that satisfies your sweet tooth and nourishes your body with essential vitamins and antioxidants. Stock up on these luscious gems and indulge in the pure taste of nature.",
                "regular_price" => 4.99,
                "old_price" => 6.99,
                "SKU" => "ORGSTRAW-008",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  40

            ],
            [
                "name" => "Fresh Basil Leaves",
                "slug" => "fresh-basil-leaves",
                "short_description" => "Elevate your dishes with the aromatic freshness of our basil leaves. Perfect for pesto, salads, and pasta sauces.",
                "description" => "Our Fresh Basil Leaves are a fragrant and versatile herb that adds a burst of flavor to your culinary creations. With their distinct aroma and slightly peppery taste, these basil leaves are ideal for making homemade pesto, enhancing the flavor of salads, or infusing your pasta sauces with a touch of freshness. Whether you use them as a garnish or incorporate them into your favorite recipes, our fresh basil leaves are a must-have herb in your kitchen. Discover the joy of cooking with this aromatic herb and elevate your dishes with its vibrant and distinctive taste.",
                "regular_price" => 2.49,
                "old_price" => 3.49,
                "SKU" => "BASIL-009",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  30

            ],
            [
                "name" => "Crunchy Honeycrisp Apples",
                "slug" => "crunchy-honeycrisp-apples",
                "short_description" => "Experience the crispness of our honeycrisp apples. Sweet, juicy, and perfect for snacking or baking.",
                "description" => "Our Crunchy Honeycrisp Apples are a true delight for apple lovers. With their exceptional crispness, juicy texture, and balanced sweetness, these apples are a favorite choice for snacking or incorporating into your baked goods. Whether you enjoy them on their own, slice them for salads, or use them as a filling for pies and tarts, our honeycrisp apples will add a burst of flavor to every bite. Packed with fiber and essential nutrients, they are a healthy and satisfying choice that will keep you coming back for more. Stock up on these refreshing apples and enjoy the taste of autumn all year long.",
                "regular_price" => 1.99,
                "old_price" => 2.99,
                "SKU" => "HCRISP-010",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Organic Baby Spinach",
                "slug" => "organic-baby-spinach",
                "short_description" => "Nourish your body with our organic baby spinach. Tender leaves packed with vitamins and minerals.",
                "description" => "Our Organic Baby Spinach is a nutritional powerhouse that brings a touch of
     freshness to your meals. Grown organically, these tender and vibrant spinach leaves are packed with vitamins, minerals, and antioxidants that support your overall well-being. Whether you use them as a base for salads, sauté them as a side dish, or blend them into smoothies, our organic baby spinach is a versatile leafy green that adds a nutritious boost to your diet. Embrace a healthier lifestyle and indulge in the goodness of this vibrant and delicious superfood.",
                "regular_price" => 3.99,
                "old_price" => 5.49,
                "SKU" => "ORGSPIN-011",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  60

            ],
            [
                "name" => "Freshly Roasted Coffee Beans",
                "slug" => "freshly-roasted-coffee-beans",
                "short_description" => "Awaken your senses with our freshly roasted coffee beans. Rich aroma and full-bodied flavor.",
                "description" => "Our Freshly Roasted Coffee Beans are a coffee lover's dream come true. Carefully selected and roasted to perfection, these beans boast a rich aroma and a full-bodied flavor that will delight your senses with every sip. Whether you enjoy a strong and robust espresso, a smooth and balanced drip coffee, or a creamy and indulgent latte, our freshly roasted coffee beans are the foundation for a perfect cup of joe. Start your day off right or indulge in a mid-afternoon pick-me-up with the finest quality coffee beans. Experience the difference of freshly roasted beans and elevate your coffee experience.",
                "regular_price" => 9.99,
                "old_price" => 12.99,
                "SKU" => "COFFBEAN-012",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  25

            ],
            [
                "name" => "Crisp Romaine Lettuce",
                "slug" => "crisp-romaine-lettuce",
                "short_description" => "Enjoy the crunch of our crisp romaine lettuce. Versatile, refreshing, and perfect for salads and wraps.",
                "description" => "Our Crisp Romaine Lettuce is a staple in the world of salads and wraps. With its crisp texture, mild flavor, and refreshing crunch, this lettuce variety provides the perfect base for a variety of culinary creations. Whether you toss it with your favorite dressing and toppings, use it as a wrap for a healthy and satisfying meal, or add it to sandwiches for an extra layer of freshness, our crisp romaine lettuce adds a delightful crunch to your dishes. Packed with vitamins and fiber, it's a nutritious choice that brings a burst of freshness to your plate.",
                "regular_price" => 2.49,
                "old_price" => 3.49,
                "SKU" => "ROMLET-013",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  70

            ],
            [
                "name" => "Freshly Squeezed Lemonade",
                "slug" => "freshly-squeezed-lemonade",
                "short_description" => "Quench your thirst with our freshly squeezed lemonade. Tangy, refreshing, and made with real lemons.",
                "description" => "Our Freshly Squeezed Lemonade is the perfect beverage to beat the heat and quench your thirst. Made with real lemons, this tangy and refreshing drink offers a delightful balance of sweetness and tartness that invigorates your taste buds. Whether you enjoy it on a hot summer day, use it as a base for cocktails, or serve it at picnics and parties, our freshly squeezed lemonade is a crowd-pleaser that brings a burst of citrusy goodness to every sip. Stock up on this classic and timeless beverage and savor
    
     the taste of summer all year round.",
                "regular_price" => 2.99,
                "old_price" => 4.49,
                "SKU" => "LEMONADE-014",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  50

            ],
            [
                "name" => "Organic Blueberries",
                "slug" => "organic-blueberries",
                "short_description" => "Indulge in the sweetness of our organic blueberries. Bursting with antioxidants and flavor.",
                "description" => "Our Organic Blueberries are a superfood that combines deliciousness with nutritional benefits. These plump and juicy berries are bursting with antioxidants, vitamins, and minerals that contribute to your well-being. Whether you enjoy them as a quick and healthy snack, add them to your morning cereal or yogurt, or incorporate them into baked goods and smoothies, our organic blueberries offer a burst of natural sweetness and a pop of vibrant color to your meals. Stock up on these little powerhouses of nutrition and enjoy the taste of summer all year long.",
                "regular_price" => 5.99,
                "old_price" => 7.99,
                "SKU" => "ORGBLUE-015",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  40

            ],
            [
                "name" => "Fresh Mint Leaves",
                "slug" => "fresh-mint-leaves",
                "short_description" => "Infuse your dishes with the refreshing flavor of our fresh mint leaves. Perfect for teas, cocktails, and desserts.",
                "description" => "Our Fresh Mint Leaves are a versatile herb that adds a refreshing and cooling touch to your culinary creations. Whether you steep them in hot water for a soothing mint tea, muddle them for cocktails, or sprinkle them over desserts for an extra burst of flavor, our fresh mint leaves elevate your dishes with their invigorating taste and aroma. With their bright green color and distinctive flavor profile, they are a delightful addition to a variety of recipes. Discover the endless possibilities of cooking with fresh mint leaves and create refreshing and tantalizing dishes.",
                "regular_price" => 1.99,
                "old_price" => 2.99,
                "SKU" => "MINT-016",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  30

            ],
            [
                "name" => "Heirloom Tomatoes",
                "slug" => "heirloom-tomatoes",
                "short_description" => "Experience the variety of flavors with our heirloom tomatoes. Colorful, juicy, and bursting with taste.",
                "description" => "Our Heirloom Tomatoes offer a delightful array of flavors, colors, and textures that elevate your culinary creations. From vibrant reds and yellows to deep purples and greens, each variety of heirloom tomato brings its own unique taste and visual appeal to your dishes. Whether you slice them for salads, use them in salsas and sauces, or enjoy them on their own with a sprinkle of salt, our heirloom tomatoes are a treasure trove of deliciousness. Juicy, flavorful, and packed with antioxidants, they are a versatile ingredient that brings a pop of freshness to your kitchen.",
                "regular_price" => 4.49,
                "old_price" => 5.99,
                "SKU" => "HRTOM-017",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  50

            ],
            [
                "name" => "Freshly Baked Baguettes",
                "slug" => "freshly-baked-baguettes",
                "short_description" => "Delight in the crusty goodness of our freshly baked baguettes. Perfect for sandwiches, bruschetta, and more.",
                "description" => "Our Freshly Baked Baguettes are a French classic that brings a touch of sophistication to your meals. With their golden crust, light and airy interior, and irresistible aroma, these baguettes are a versatile bread option that can be enjoyed in various ways. Whether you use them to create gourmet sandwiches, slice them for bruschetta, or serve them as a side with soups and stews, our freshly baked baguettes elevate the dining experience. Baked with love and expertise, they are a staple for any bread lover who appreciates the craftsmanship and artistry of traditional baking.",
                "regular_price" => 3.99,
                "old_price" => 5.49,
                "SKU" => "BAGUETTE-018",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  40

            ],
            [
                "name" => "Freshly Pressed Apple Cider",
                "slug" => "freshly-pressed-apple-cider",
                "short_description" => "Savor the natural sweetness of our freshly pressed apple cider. Crisp, refreshing, and full of flavor.",
                "description" => "Our Freshly Pressed Apple Cider is a quintessential fall beverage that celebrates the bounty of apples. Made from a blend of fresh apple varieties, this cider offers a balance of sweetness, tartness, and a crisp finish that delights your taste buds. Whether you enjoy it chilled, warm it up with spices for a cozy drink, or use it as a base for cocktails and mocktails, our freshly pressed apple cider brings the essence of autumn to every sip. Embrace the flavors of the season and savor the pure and natural taste of this timeless beverage.",
                "regular_price" => 4.99,
                "old_price" => 6.99,
                "SKU" => "CIDER-019",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  30

            ],
            [
                "name" => "Organic Kale",
                "slug" => "organic-kale",
                "short_description" => "Nourish your body with our organic kale. Packed with vitamins and minerals for a healthy boost.",
                "description" => "Our Organic Kale is a leafy green powerhouse that deserves a spot in your healthy eating routine. Packed with vitamins, minerals, and antioxidants, this nutrient-dense vegetable offers a range of health benefits. Whether you sauté it as a side dish, blend it into smoothies, or use it as a base for salads, our organic kale adds a hearty and nutritious element to your meals. With its slightly bitter and earthy flavor, it pairs well with a variety of ingredients and can be incorporated into a wide range of recipes. Embrace the goodness of organic kale and nourish your body with every bite.",
                "regular_price" => 2.99,
                "old_price" => 4.49,
                "SKU" => "ORGKALE-020",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  60

            ],
            [
                "name" => "Sweet Juicy Watermelon",
                "slug" => "sweet-juicy-watermelon",
                "short_description" => "Quench your thirst with our sweet juicy watermelon. Refreshing, hydrating, and bursting with summer flavors.",
                "description" => "Our Sweet Juicy Watermelon is the perfect summertime treat. With its vibrant red flesh, sweet flavor, and high water content, this fruit is not only delicious but also incredibly hydrating. Bite into a slice and experience the refreshing burst of juiciness that instantly quenches your thirst. Whether you enjoy it on its own, blend it into refreshing smoothies, or use it as a base for fruity salads and desserts, our sweet juicy watermelon is a true summer delight. Stock up on this seasonal favorite and savor the taste of summer all year long.",
                "regular_price" => 0.59,
                "old_price" => 0.79,
                "SKU" => "WATERMEL-021",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Fresh Wild Caught Salmon",
                "slug" => "fresh-wild-caught-salmon",
                "short_description" => "Indulge in the rich flavor of our fresh wild-caught salmon. High in omega-3 fatty acids for a healthy heart.",
                "description" => "Our Fresh Wild Caught Salmon is a premium seafood option that brings the taste of the ocean to your table. Sourced from pristine waters and carefully selected, this salmon offers a rich and buttery flavor that melts in your mouth. Packed with omega-3 fatty acids, it promotes heart health and provides a range of other health benefits. Whether you grill it, bake it, or pan-sear it, our fresh wild-caught salmon is a versatile fish that can be enjoyed in a variety of preparations. Treat yourself to a gourmet dining experience and savor the natural goodness of this exquisite seafood.",
                "regular_price" => 12.99,
                "old_price" => 14.99,
                "SKU" => "SALMON-022",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  50

            ],
            [
                "name" => "Organic Avocado",
                "slug" => "organic-avocado",
                "short_description" => "Add a creamy touch to your meals with our organic avocado. Rich in healthy fats and essential nutrients.",
                "description" => "Our Organic Avocado is a versatile fruit that adds a creamy and luscious element to your dishes. Packed with healthy fats, fiber, and essential nutrients, avocados are not only delicious but also offer a range of health benefits. Mash them into guacamole, slice them for sandwiches and salads, or spread them on toast for a nutritious and satisfying snack. With their smooth texture and mild, buttery flavor, our organic avocados are a must-have ingredient in any kitchen. Embrace the goodness of this superfood and elevate your meals with its creamy goodness.",
                "regular_price" => 1.99,
                "old_price" => 2.49,
                "SKU" => "ORGAVO-023",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Fresh Strawberries",
                "slug" => "fresh-strawberries",
                "short_description" => "Indulge in the sweetness of our fresh strawberries. Juicy, flavorful, and perfect for snacking or desserts.",
                "description" => "Our Fresh Strawberries are a delightful fruit that brings a burst of sweetness to your palate. With their juicy texture, vibrant red color, and refreshing flavor, these strawberries are a true summer favorite. Enjoy them     as a healthy and satisfying snack, incorporate them into smoothies and shakes, or use them to top off your favorite desserts. Packed with antioxidants and vitamin C, they offer a range of health benefits while satisfying your sweet cravings. Stock up on these luscious berries and experience the taste of summer all year round.",
                "regular_price" => 3.99,
                "old_price" => 4.99,
                "SKU" => "STRAWB-024",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  60

            ],
            [
                "name" => "Fresh Basil Leaves",
                "slug" => "fresh-basil-leaves",
                "short_description" => "Infuse your dishes with the aromatic flavor of our fresh basil leaves. Perfect for pasta, pesto, and more.",
                "description" => "Our Fresh Basil Leaves are a culinary delight that adds an aromatic and herbal touch to your recipes. With their distinctive fragrance and slightly peppery taste, these basil leaves are a versatile herb that can be used in various cuisines. Whether you sprinkle them over pizzas, toss them in salads, blend them into homemade pesto, or use them as a garnish for pasta dishes, our fresh basil leaves elevate the flavors of your favorite meals. Discover the versatility of this classic herb and bring a taste of Italy to your kitchen.",
                "regular_price" => 1.99,
                "old_price" => 2.49,
                "SKU" => "BASIL-025",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  40

            ],
            [
                "name" => "Organic Quinoa",
                "slug" => "organic-quinoa",
                "short_description" => "Enjoy the nutty goodness of our organic quinoa. High in protein and fiber for a nutritious meal.",
                "description" => "Our Organic Quinoa is a nutritious grain that offers a range of health benefits and is a perfect addition to a balanced diet. Packed with protein, fiber, and essential minerals, quinoa is a complete protein source that keeps you feeling satisfied and nourished. Whether you use it as a base for salads, stir it into soups and stews, or create flavorful quinoa bowls, our organic quinoa adds a nutty and satisfying element to your meals. Embrace the versatility of this ancient grain and enjoy a nutritious and delicious culinary experience.",
                "regular_price" => 4.99,
                "old_price" => 6.49,
                "SKU" => "QUINOA-026",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  30

            ],
            [
                "name" => "Fresh Pineapple",
                "slug" => "fresh-pineapple",
                "short_description" => "Experience the tropical sweetness of our fresh pineapple. Juicy, flavorful, and perfect for snacking or desserts.",
                "description" => "Our Fresh Pineapple is a tropical delight that brings a taste of paradise to your plate. With its golden yellow flesh, sweet aroma, and refreshing flavor, this fruit is a true crowd-pleaser. Enjoy it on its own as a refreshing snack, use it to create exotic fruit salads, or grill it for a caramelized and mouthwatering dessert. Packed with vitamins, minerals, and enzymes, our fresh pineapple not only satisfies your sweet cravings but also offers a range of health benefits. Treat yourself to a tropical indulgence and enjoy the sunny flavors of this delicious fruit.",
                "regular_price" => 2.99,
                "old_price" => 3.99,
                "SKU" => "PINEAP-027",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" => 50

            ],
            [
                "name" => "Organic Spinach",
                "slug" => "organic-spinach",
                "short_description" => "Boost your meals with our organic spinach. Packed with vitamins and minerals for a healthy boost.",
                "description" => "Our Organic Spinach is a nutrient-rich leafy green that adds vibrancy and nutritional value to your meals. Packed with vitamins A, C, and K, as well as iron and antioxidants, spinach is a superfood that promotes overall health and well-being. Whether you sauté it as a side dish, toss it into salads, or blend it into smoothies, our organic spinach adds a fresh and vibrant element to your recipes. With its tender leaves and mild, slightly earthy taste, it pairs well with a variety of ingredients and can be enjoyed in both cooked and raw preparations. Embrace the power of organic spinach and nourish your body with every bite.",
                "regular_price" => 2.49,
                "old_price" => 3.49,
                "SKU" => "SPINACH-028",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  70

            ],
            [
                "name" => "Fresh Raspberries",
                "slug" => "fresh-raspberries",
                "short_description" => "Indulge in the sweet-tartness of our fresh raspberries. Bursting with flavor and antioxidants.",
                "description" => "Our Fresh Raspberries are a delightful berry that offers a harmonious blend of sweetness and tartness. With their vibrant red color, delicate texture, and intense flavor, raspberries are a versatile fruit that can be enjoyed in various ways. Whether you sprinkle them over breakfast cereals, blend them into smoothies, or use them as a topping for desserts and pastries, our fresh raspberries add a burst of freshness and antioxidants to your meals. Treat yourself to these juicy and nutritious berries and experience the joy of their delightful flavors.",
                "regular_price" => 4.99,
                "old_price" => 6.49,
                "SKU" => "RASP-029",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  60

            ],
            [
                "name" => "Fresh Whole Chicken",
                "slug" => "fresh-whole-chicken",
                "short_description" => "Enjoy the succulent taste of our fresh whole chicken. Versatile and perfect for roasting, grilling, or frying.",
                "description" => "Our Fresh Whole Chicken is a staple protein source that brings versatility to your cooking. Whether you roast it with herbs and spices for a Sunday dinner, grill it for a barbecue feast, or fry it for a crispy and indulgent meal, our whole chicken offers a succulent and flavorful experience. With its tender meat and juicy texture, it serves as the foundation for a variety of dishes. Add your own culinary touch to create delectable recipes and enjoy the comforting taste of a perfectly cooked chicken. Stock up on our fresh whole chicken and elevate your home-cooked meals.",
                "regular_price" => 1.99,
                "old_price" => 2.49,
                "SKU" => "CHICKEN-030",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  40

            ],
            // Fresh Foods ends here

            // Beverage starts

            [
                "name" => "Sparkling Lemonade",
                "slug" => "sparkling-lemonade",
                "short_description" => "Refreshing and effervescent, our sparkling lemonade is the perfect balance of sweet and tangy flavors.",
                "description" => "Indulge in the fizzy delight of our Sparkling Lemonade. Made with the finest lemons and infused with tiny bubbles, this refreshing beverage is a delightful thirst quencher on hot summer days. The crisp citrus flavor combined with a hint of sweetness creates a perfect harmony that dances on your taste buds. Serve it chilled over ice, garnish with a lemon slice, and enjoy the effervescence of this classic drink. Whether you're hosting a gathering or simply relaxing at home, our sparkling lemonade is a crowd-pleaser that brings a burst of sunshine to any occasion.",
                "regular_price" => 2.99,
                "old_price" => 3.99,
                "SKU" => "SPARKLEMON-001",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Cold Brew Coffee",
                "slug" => "cold-brew-coffee",
                "short_description" => "Smooth and bold, our cold brew coffee delivers a rich flavor and a caffeine kick.",
                "description" => "Start your mornings with a jolt of energy and indulge in the smoothness of our Cold Brew Coffee. Made from carefully selected coffee beans and brewed slowly in cold water, this beverage offers a bold and robust flavor with a low acidity level. Served over ice or mixed with your favorite creamer, our cold brew coffee is a refreshing and invigorating way to kickstart your day. Whether you're a coffee connoisseur or just looking for an energizing pick-me-up, our cold brew coffee is the perfect choice to satisfy your caffeine cravings.",
                "regular_price" => 4.99,
                "old_price" => 5.99,
                "SKU" => "COLD-BREW-002",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Organic Green Tea",
                "slug" => "organic-green-tea",
                "short_description" => "Embrace the goodness of our organic green tea. Refreshing, aromatic, and packed with antioxidants.",
                "description" => "Our Organic Green Tea is a delightful blend of handpicked tea leaves that have undergone minimal processing, preserving their natural antioxidants and nutrients. Sip on the invigorating flavors and delicate aroma of this classic beverage, known for its numerous health benefits. Whether you enjoy it hot or cold, our organic green tea is a refreshing and comforting drink that uplifts your spirits and promotes well-being. Take a moment to relax and savor the soothing qualities of this ancient elixir.",
                "regular_price" => 3.49,
                "old_price" => 4.49,
                "SKU" => "GREEN-TEA-003",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  120

            ],
            [
                "name" => "Freshly Squeezed Orange Juice",
                "slug" => "freshly-squeezed-orange-juice",
                "short_description" => "Experience the tangy sweetness of our freshly squeezed orange juice. Made with handpicked oranges for a burst of flavor.",
                "description" => "Start your day with a glass of pure sunshine with our Freshly Squeezed Orange Juice. Made from handpicked, ripe oranges, this juice is packed with vitamins and natural goodness. Each sip delivers a refreshing burst of tangy sweetness that wakes up your taste buds and invigorates your senses. Whether enjoyed on its own or mixed into smoothies
     , cocktails, or mocktails, our freshly squeezed orange juice is a versatile and nutritious beverage that adds a zing of citrus to any moment.",
                "regular_price" => 3.99,
                "old_price" => 4.99,
                "SKU" => "ORANGE-JUICE-004",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Herbal Infusion Sampler Pack",
                "slug" => "herbal-infusion-sampler-pack",
                "short_description" => "Discover a variety of flavors with our herbal infusion sampler pack. A perfect way to unwind and relax.",
                "description" => "Embark on a flavor-filled journey with our Herbal Infusion Sampler Pack. This collection of handpicked herbal teas features a selection of soothing and aromatic blends, carefully crafted to provide moments of relaxation and tranquility. From soothing chamomile to invigorating peppermint and exotic blends like hibiscus and ginger, this sampler pack allows you to explore a diverse range of flavors and discover your personal favorites. Whether you're looking to unwind after a long day or simply enjoy a comforting cuppa, our herbal infusion sampler pack is the perfect choice.",
                "regular_price" => 9.99,
                "old_price" => 12.99,
                "SKU" => "HERBAL-SAMPLER-005",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  70

            ],
            [
                "name" => "Sparkling Raspberry Lemonade",
                "slug" => "sparkling-raspberry-lemonade",
                "short_description" => "Experience the delightful blend of raspberries and lemon in our sparkling raspberry lemonade.",
                "description" => "Treat your taste buds to a burst of fruity goodness with our Sparkling Raspberry Lemonade. The tangy-sweet combination of raspberries and lemon creates a refreshing and invigorating beverage that is perfect for any occasion. The fizzy bubbles add an extra layer of enjoyment, making every sip a delightful experience. Whether you're hosting a party, lounging by the pool, or simply craving a flavorful drink, our sparkling raspberry lemonade is the ideal choice to quench your thirst and add a touch of vibrancy to your day.",
                "regular_price" => 2.99,
                "old_price" => 3.99,
                "SKU" => "SPARK-RASPLEM-006",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  110

            ],
            [
                "name" => "Iced Chai Latte",
                "slug" => "iced-chai-latte",
                "short_description" => "Indulge in the aromatic blend of spices in our iced chai latte. Creamy, smooth, and perfectly balanced.",
                "description" => "Savor the rich flavors of our Iced Chai Latte, a delightful blend of black tea, aromatic spices, and creamy milk. This indulgent beverage offers a harmonious balance of sweetness and warmth, creating a comforting drink that can be enjoyed year-round. Served over ice and garnished with a sprinkle of cinnamon, our iced chai latte is the perfect companion for moments of relaxation or a pick-me-up on a hot day. Experience the exotic allure of this traditional Indian drink and let it transport you to a world of flavor and indulgence.",
                "regular_price" => 4.49,
                "old_price" => 5.49,
                "SKU" => "ICED-CHAI-007",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Coconut Water",
                "slug" => "coconut-water",
                "short_description" => "Stay hydrated with our refreshing coconut water. Pure, natural, and full of
           electrolytes.",
                "description" => "Quench your thirst and replenish your body with the hydrating power of our Coconut Water. Extracted from fresh coconuts, this natural beverage is packed with electrolytes, vitamins, and minerals that help keep you hydrated and energized. With its light, refreshing taste and delicate sweetness, our coconut water is a healthy alternative to sugary drinks and a perfect way to stay hydrated on-the-go. Enjoy it chilled straight from the can or use it as a base for tropical smoothies and mocktails. Embrace the natural goodness of coconuts and experience the ultimate hydration boost.",
                "regular_price" => 2.99,
                "old_price" => 3.99,
                "SKU" => "COCO-WATER-008",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  120

            ],
            [
                "name" => "Matcha Green Tea Latte",
                "slug" => "matcha-green-tea-latte",
                "short_description" => "Indulge in the smooth and creamy matcha green tea latte. A perfect balance of earthiness and sweetness.",
                "description" => "Immerse yourself in the ancient traditions of Japan with our Matcha Green Tea Latte. Made from finely ground matcha powder and steamed milk, this velvety beverage offers a harmonious blend of earthy flavors and delicate sweetness. The vibrant green color and rich texture create a visual and gustatory delight, making every sip an experience to savor. Whether you're a matcha enthusiast or new to this unique tea, our matcha green tea latte is a delicious and energizing choice that can be enjoyed hot or iced.",
                "regular_price" => 4.99,
                "old_price" => 5.99,
                "SKU" => "MATCHA-LATTE-009",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Fruit Punch",
                "slug" => "fruit-punch",
                "short_description" => "Dive into a refreshing blend of tropical fruits with our fruit punch. A vibrant and flavorful thirst quencher.",
                "description" => "Transport yourself to a tropical paradise with our Fruit Punch. Bursting with the flavors of ripe mangoes, tangy pineapples, juicy oranges, and luscious berries, this vibrant drink is a celebration of summer in every sip. The combination of sweet and tangy fruits creates a refreshing and invigorating beverage that is perfect for parties, picnics, or simply quenching your thirst on a hot day. Serve it over ice, garnish with a fruit skewer, and let the tropical vibes wash over you. Embrace the joy of summer with our delightful fruit punch.",
                "regular_price" => 3.49,
                "old_price" => 4.49,
                "SKU" => "FRUIT-PUNCH-010",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Hibiscus Iced Tea",
                "slug" => "hibiscus-iced-tea",
                "short_description" => "Enjoy the vibrant flavors of hibiscus in our refreshing iced tea. A floral and invigorating beverage.",
                "description" => "Discover the enchanting flavors of our Hibiscus Iced Tea, a captivating blend of hibiscus flowers, citrus, and a hint of sweetness. The deep red infusion delivers a bold and tangy flavor that is both refreshing and invigorating. Served over ice, our hibiscus iced tea is a perfect companion for lazy summer afternoons or as a delightful accompaniment to meals. Allow the floral aroma and vibrant taste
    
     of this exotic beverage to transport you to a world of relaxation and sensory pleasure.",
                "regular_price" => 2.99,
                "old_price" => 3.99,
                "SKU" => "HIBISCUS-TEA-011",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Energizing Berry Smoothie",
                "slug" => "energizing-berry-smoothie",
                "short_description" => "Kickstart your day with our energizing berry smoothie. Packed with antioxidants and natural sweetness.",
                "description" => "Fuel your mornings with our Energizing Berry Smoothie, a luscious blend of ripe berries, creamy yogurt, and a touch of honey. This refreshing and nutrient-rich smoothie provides a burst of antioxidants, vitamins, and fiber to kickstart your day with vitality. The harmonious balance of tart and sweet flavors creates a delightful concoction that satisfies your cravings and nourishes your body. Whether enjoyed as a quick breakfast option or a post-workout refresher, our energizing berry smoothie is a delicious and convenient way to boost your well-being.",
                "regular_price" => 4.49,
                "old_price" => 5.49,
                "SKU" => "BERRY-SMOOTHIE-012",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Ginger Turmeric Wellness Shot",
                "slug" => "ginger-turmeric-wellness-shot",
                "short_description" => "Give your immune system a boost with our ginger turmeric wellness shot. A potent elixir of health and vitality.",
                "description" => "Nourish your body and invigorate your senses with our Ginger Turmeric Wellness Shot. Crafted with a powerful combination of ginger, turmeric, lemon, and a touch of black pepper, this potent elixir is packed with antioxidants and anti-inflammatory properties. With its spicy kick and invigorating taste, our wellness shot is a natural way to support your immune system and promote overall well-being. Take a daily shot to kickstart your morning or as a pick-me-up throughout the day. Embrace the healing power of ginger and turmeric with this revitalizing wellness shot.",
                "regular_price" => 2.99,
                "old_price" => 3.99,
                "SKU" => "WELLNESS-SHOT-013",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  120

            ],
            [
                "name" => "Iced Passion Fruit Tea",
                "slug" => "iced-passion-fruit-tea",
                "short_description" => "Experience the tropical flavors of passion fruit in our iced tea. A refreshing and exotic beverage.",
                "description" => "Embark on a tropical journey with our Iced Passion Fruit Tea. The luscious and tangy flavors of passion fruit create a refreshing and exotic beverage that delights your taste buds. Served over ice, our iced passion fruit tea is a perfect thirst quencher on hot summer days. Whether enjoyed by the poolside or as a treat during afternoon tea, this vibrant drink transports you to a paradise of flavor and relaxation. Take a sip and let the enchanting essence of passion fruit whisk you away to sun-soaked beaches and swaying palm trees.",
                "regular_price" => 3.49,
                "old_price" => 4.49,
                "SKU" => "PASSION-TEA-014",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Probiotic Kombucha",
                "slug" => "probiotic-kombucha",
                "short_description" => "Nurture your gut health with our probiotic kombucha. A fizzy and flavorful fermented tea.",
                "description" => "Discover the benefits of our Probiotic Kombucha, a sparkling and tangy fermented tea rich in beneficial bacteria. This probiotic powerhouse not only tantalizes your taste buds with its fizzy and tangy flavors but also supports digestive health and boosts your immune system. Crafted with a blend of organic tea, cane sugar, and a SCOBY (symbiotic culture of bacteria and yeast), our kombucha is a delicious and refreshing way to nurture your gut microbiome. Enjoy it chilled and experience the effervescent delight of this ancient elixir.",
                "regular_price" => 4.99,
                "old_price" => 5.99,
                "SKU" => "KOMBUCHA-015",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80


            ],
            [
                "name" => "Mango Lassi",
                "slug" => "mango-lassi",
                "short_description" => "Indulge in the creamy and tropical flavors of our mango lassi. A classic Indian delight.",
                "description" => "Transport your taste buds to the streets of India with our Mango Lassi, a traditional yogurt-based drink blended with ripe mangoes. The creamy texture, refreshing taste, and natural sweetness of this beloved beverage make it a perfect accompaniment to spicy dishes or a cooling treat on its own. Made with fresh yogurt, juicy mangoes, and a hint of cardamom, our mango lassi is a delightful fusion of flavors that leaves you craving for more. Savor the richness of Indian culture and indulge in the velvety goodness of this exotic drink.",
                "regular_price" => 3.99,
                "old_price" => 4.99,
                "SKU" => "MANGO-LASSI-016",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Herbal Iced Tea Sampler Pack",
                "slug" => "herbal-iced-tea-sampler-pack",
                "short_description" => "Explore a variety of refreshing herbal iced teas with our sampler pack. A cooling and flavorful experience.",
                "description" => "Beat the heat and quench your thirst with our Herbal Iced Tea Sampler Pack. This assortment features a selection of herbal teas specially crafted to be enjoyed over ice. From zesty citrus blends to soothing mint and floral infusions, this sampler pack allows you to savor a range of flavors that invigorate and refresh. Discover your personal favorites, mix and match flavors, and create your own signature iced tea creations. With each sip, our herbal iced teas transport you to a state of cool relaxation, revitalizing your body and tantalizing your taste buds.",
                "regular_price" => 9.99,
                "old_price" => 12.99,
                "SKU" => "ICED-TEA-SAMPLER-017",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  70

            ],
            [
                "name" => "Watermelon Limeade",
                "slug" => "watermelon-limeade",
                "short_description" => "Enjoy the refreshing combination of watermelon and lime in our tangy limeade. A summer essential.",
                "description" => "Quench your thirst and beat the heat with our Watermelon Limeade, a tangy and invigorating beverage that captures the essence of summer. Made with the juiciest watermelons and zesty limes, this refreshing drink offers a perfect balance of sweetness and citrus tang. Served over ice, our watermelon limeade is a crowd-pleaser at picnics, barbecues, and outdoor gatherings. The vibrant pink color and thirst-quench
    
    ing properties make it a summer essential. Take a sip, feel the refreshing burst of flavors, and let the carefree vibes of summer wash over you.",
                "regular_price" => 2.99,
                "old_price" => 3.99,
                "SKU" => "WATERMELON-LIME-018",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  110

            ],
            [
                "name" => "Detoxifying Green Juice",
                "slug" => "detoxifying-green-juice",
                "short_description" => "Cleanse and rejuvenate with our detoxifying green juice. Packed with vitamins and antioxidants.",
                "description" => "Give your body a revitalizing boost with our Detoxifying Green Juice. This nutrient-dense blend of leafy greens, cucumber, celery, and a hint of lemon delivers a powerful dose of vitamins, minerals, and antioxidants. The cleansing properties of this green elixir help support your body's natural detoxification processes and promote overall well-being. Start your day on a fresh note or enjoy it as a mid-day pick-me-up. With each sip, our detoxifying green juice nourishes your body from within, leaving you feeling refreshed and rejuvenated.",
                "regular_price" => 5.49,
                "old_price" => 6.49,
                "SKU" => "GREEN-JUICE-019",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Cold Brew Coffee",
                "slug" => "cold-brew-coffee",
                "short_description" => "Experience the smooth and bold flavor of our cold brew coffee. Perfectly brewed for your enjoyment.",
                "description" => "Indulge in the velvety goodness of our Cold Brew Coffee, meticulously brewed to perfection for a smooth and rich taste. Sourced from the finest coffee beans, this cold-brewed delight offers a bold and robust flavor with low acidity and bitterness. Whether enjoyed black, with a splash of milk, or over ice, our cold brew coffee is a refreshing and invigorating choice for coffee lovers. Energize your mornings, power through the day, or satisfy your coffee cravings with this satisfying and decadent beverage.",
                "regular_price" => 4.99,
                "old_price" => 5.99,
                "SKU" => "COLD-BREW-020",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Chai Tea Latte",
                "slug" => "chai-tea-latte",
                "short_description" => "Indulge in the aromatic blend of spices with our creamy chai tea latte. A comforting and flavorful beverage.",
                "description" => "Immerse yourself in the exotic flavors of our Chai Tea Latte, a warm and comforting beverage that combines the robust flavors of black tea with a blend of aromatic spices like cinnamon, cardamom, ginger, and cloves. The creamy texture and balanced sweetness make it a perfect treat for cozy evenings or a delightful companion during cold winter days. Savor the enchanting aroma and let the flavors of this traditional Indian drink transport you to a world of relaxation and indulgence.",
                "regular_price" => 3.99,
                "old_price" => 4.99,
                "SKU" => "CHAI-LATTE-021",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Pineapple Coconut Smoothie",
                "slug" => "pineapple-coconut-smoothie",
                "short_description" => "Experience the tropical fusion of pineapple and coconut in our creamy smoothie. A taste of paradise.",
                "description" => "Take a sip of paradise with our Pineapple Coconut Smoothie, a luscious blend of sweet pineapple, creamy coconut milk, and a hint of vanilla. This tropical fusion creates a creamy and refreshing smoothie that transports you to a beachside hammock under swaying palm trees. Packed with vitamins, minerals, and natural sweetness, our pineapple coconut smoothie is a delicious way to nourish your body and indulge your senses. Whether enjoyed as a breakfast alternative or a mid-day treat, this smoothie will leave you craving for more.",
                "regular_price" => 4.49,
                "old_price" => 5.49,
                "SKU" => "PINE-COCONUT-SMOOTHIE-022",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Herbal Infusion Variety Pack",
                "slug" => "herbal-infusion-variety-pack",
                "short_description" => "Discover a range of soothing herbal infusions with our variety pack. A calming and flavorful tea experience.",
                "description" => "Embark on a journey of relaxation and tranquility with our Herbal Infusion Variety Pack. This collection features an assortment of herbal teas carefully crafted to soothe and rejuvenate your senses. From chamomile and lavender for calm evenings to peppermint and ginger for digestive support, each herbal infusion offers a unique blend of flavors and therapeutic properties. Explore the world of herbal tea, discover your favorite blends, and unwind with a cup of natural goodness. Let the delicate aromas and gentle flavors of our herbal infusions enhance your well-being.",
                "regular_price" => 9.99,
                "old_price" => 12.99,
                "SKU" => "HERBAL-VARIETY-023",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Sparkling Raspberry Lemonade",
                "slug" => "sparkling-raspberry-lemonade",
                "short_description" => "Quench your thirst with our effervescent raspberry lemonade. A refreshing and tangy delight.",
                "description" => "Delight your taste buds with our Sparkling Raspberry Lemonade, a bubbly and tangy blend of sweet raspberries and zesty lemons. This effervescent beverage offers a perfect balance of fruity sweetness and citrus tartness, making it a thirst-quenching treat for any occasion. Served chilled in a tall glass with ice and a garnish of
    
     fresh raspberries, our sparkling raspberry lemonade is a crowd-pleaser at parties, picnics, and outdoor gatherings. Experience the burst of flavors and enjoy the refreshing sensation as it invigorates your senses.",
                "regular_price" => 3.49,
                "old_price" => 4.49,
                "SKU" => "RASPBERRY-LEMONADE-024",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  110

            ],
            [
                "name" => "Matcha Green Tea",
                "slug" => "matcha-green-tea",
                "short_description" => "Embrace the centuries-old tradition with our ceremonial-grade matcha green tea. A vibrant and invigorating experience.",
                "description" => "Experience the essence of Zen with our Matcha Green Tea, a ceremonial-grade powdered tea renowned for its vibrant color and earthy flavor. Made from finely ground green tea leaves, matcha is packed with antioxidants and offers a natural boost of energy and focus. Whether prepared traditionally with a bamboo whisk or incorporated into your favorite recipes, our matcha green tea allows you to savor the ancient ritual of tea appreciation. Take a moment to relax, enjoy the vibrant green hues, and let the smooth and vegetal flavors transport you to a state of tranquility.",
                "regular_price" => 6.99,
                "old_price" => 8.99,
                "SKU" => "MATCHA-GREEN-TEA-025",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Coconut Water",
                "slug" => "coconut-water",
                "short_description" => "Hydrate and refresh with our pure and natural coconut water. A tropical thirst quencher.",
                "description" => "Beat the heat and replenish your body with our Coconut Water, a pure and revitalizing tropical drink straight from the coconut. Bursting with electrolytes, minerals, and natural hydration, coconut water is a healthy and refreshing choice to quench your thirst. Sip it straight from the bottle, blend it into smoothies, or use it as a base for your favorite mocktails. With its delicate sweetness and subtle nutty flavor, our coconut water is a taste of paradise in every sip.",
                "regular_price" => 2.99,
                "old_price" => 3.99,
                "SKU" => "COCONUT-WATER-026",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Hibiscus Mint Iced Tea",
                "slug" => "hibiscus-mint-iced-tea",
                "short_description" => "Discover the refreshing blend of hibiscus and mint in our iced tea. A revitalizing and cooling experience.",
                "description" => "Cool down and invigorate your senses with our Hibiscus Mint Iced Tea, a vibrant and refreshing blend of hibiscus flowers and cooling mint leaves. The deep red color, tangy flavors, and soothing mint undertones make it a perfect companion on hot summer days. Served over ice, our hibiscus mint iced tea is a delightful way to stay hydrated and enjoy a moment of relaxation. Experience the revitalizing properties of hibiscus and the cooling sensation of mint as they combine to create a truly refreshing beverage.",
                "regular_price" => 3.49,
                "old_price" => 4.49,
                "SKU" => "HIBISCUS-MINT-TEA-027",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  120

            ],
            [
                "name" => "Orange Mango Smoothie",
                "slug" => "orange-mango-smoothie",
                "short_description" => "Indulge in the tropical blend of oranges and mangoes in our creamy smoothie. A burst of sunshine in a glass.",
                "description" => "Immerse yourself in the tropical paradise with our Orange Mango Smoothie, a delightful fusion of juicy oranges and luscious mangoes. The creamy texture, vibrant colors, and natural sweetness make it a delicious and nutritious treat. Packed with vitamins, antioxidants, and a refreshing taste, our orange mango smoothie is the perfect way to start your day or enjoy as a refreshing snack. Close your eyes, take a sip, and let the flavors transport you to a sun-drenched beachside retreat.",
                "regular_price" => 4.49,
                "old_price" => 5.49,
                "SKU" => "ORANGE-MANGO-SMOOTHIE-028",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Ginger Turmeric Shot",
                "slug" => "ginger-turmeric-shot",
                "short_description" => "Boost your immunity with our potent ginger turmeric shot. A fiery and invigorating elixir.",
                "description" => "Supercharge your immune system with our Ginger Turmeric Shot, a potent blend of ginger, turmeric, lemon, and a touch of black pepper. This fiery elixir is rich in antioxidants and anti-inflammatory compounds, providing a natural boost to your overall well-being. Take a shot to kickstart your day, alleviate digestion issues, or give your immune system a helping hand. The vibrant flavors and warming sensations of ginger and turmeric will awaken your senses and leave you feeling energized.",
                "regular_price" => 2.99,
                "old_price" => 3.99,
                "SKU" => "GINGER-TURMERIC-SHOT-029",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Lemon Ginger Iced Tea",
                "slug" => "lemon-ginger-iced-tea",
                "short_description" => "Enjoy the zesty blend of lemon and ginger in our refreshing iced tea. A burst of tangy goodness.",
                "description" => "Quench your thirst and invigorate your taste buds with our Lemon Ginger Iced Tea, a tangy and refreshing blend of zesty lemons and warming ginger. This invigorating combination offers a perfect balance of citrus brightness and spicy undertones, creating a tantalizing iced tea experience. Served over ice with a sprig of fresh mint, our lemon ginger iced tea is a go-to option for hot summer days or a pick-me-up during the afternoon slump. Let the flavors awaken your senses and enjoy the cooling sensation with every sip.",
                "regular_price" => 3.49,
                "old_price" => 4.49,
                "SKU" => "LEMON-GINGER-TEA-030",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  110

            ],
            // Beverage ends here
            // Home Health starts

            [
                "name" => "Aromatherapy Essential Oil Diffuser",
                "slug" => "aromatherapy-essential-oil-diffuser",
                "short_description" => "Create a soothing atmosphere with our aromatherapy essential oil diffuser. Relax and rejuvenate at home.",
                "description" => "Transform your living space into a sanctuary of relaxation and serenity with our Aromatherapy Essential Oil Diffuser. This sleek and stylish diffuser uses ultrasonic technology to disperse a fine mist of your favorite essential oils into the air, filling your home with delightful aromas and therapeutic benefits. Enhance your well-being, promote better sleep, and reduce stress as the soothing mist envelops you. With adjustable mist settings and soft LED lighting, our aromatherapy diffuser is the perfect addition to any home for creating a tranquil ambiance and revitalizing your mind, body, and spirit.",
                "regular_price" => 29.99,
                "old_price" => 39.99,
                "SKU" => "AROMA-DIFFUSER-001",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Himalayan Salt Lamp",
                "slug" => "himalayan-salt-lamp",
                "short_description" => "Experience the calming glow of our Himalayan salt lamp. Create a soothing atmosphere in any room.",
                "description" => "Immerse yourself in the warm and soothing glow of our Himalayan Salt Lamp, handcrafted from ancient salt crystals found deep within the Himalayan mountains. When lit, the lamp emits a soft, amber light that creates a calming ambiance and helps to purify the air by releasing negative ions. These ions promote a sense of well-being, reduce stress, and enhance relaxation. Place the Himalayan salt lamp in your bedroom, living room, or workspace to create a serene and tranquil environment that soothes your senses and promotes a peaceful atmosphere.",
                "regular_price" => 19.99,
                "old_price" => 24.99,
                "SKU" => "SALT-LAMP-002",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  120

            ],
            [
                "name" => "Memory Foam Pillow",
                "slug" => "memory-foam-pillow",
                "short_description" => "Sleep soundly with our supportive and comfortable memory foam pillow. Wake up refreshed and rejuvenated.",
                "description" => "Rest your head on cloud-like comfort with our Memory Foam Pillow, designed to provide optimal support and align your neck and spine for a restful night's sleep. The premium memory foam conforms to the contours of your head and neck, relieving pressure points and promoting proper spinal alignment. Experience enhanced comfort and wake up feeling refreshed and rejuvenated. The breathable and hypoallergenic cover adds an extra layer of softness and protection. Say goodbye to tossing and turning and enjoy the blissful comfort of our memory foam pillow.",
                "regular_price" => 39.99,
                "old_price" => 49.99,
                "SKU" => "MEMORY-PILLOW-003",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Electric Heating Pad",
                "slug" => "electric-heating-pad",
                "short_description" => "Relieve muscle tension and soothe aches with our electric heating pad. Find comfort at home.",
                "description" => "Ease muscle soreness and find soothing relief with our Electric Heating Pad. This versatile pad offers customizable heat therapy to target specific areas of your body, providing fast and effective pain relief. The adjustable temperature settings allow you to choose the level of heat that suits your needs, while the soft and plush fabric provides comfort during use. Whether you're experiencing back pain, menstrual cramps, or muscle tension, our electric heating pad is an essential home health accessory for finding comfort and promoting relaxation.",
                "regular_price" => 24.99,
                "old_price" => 29.99,
                "SKU" => "HEATING-PAD-004",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Yoga Mat",
                "slug" => "yoga-mat",
                "short_description" => "Enhance your yoga practice with our high-quality and non-slip yoga mat. Find balance and inner peace at home.",
                "description" => "Elevate your yoga and meditation sessions with our premium Yoga Mat. Made from high-density foam material, this non-slip mat provides a stable and supportive surface for your practice. The textured surface offers excellent grip, allowing you to maintain proper alignment and stability during poses. Whether you're a beginner or an experienced yogi, our yoga mat is perfect for enhancing your flexibility, balance, and strength. Roll it out in your living room or create a dedicated space in your home, and embark on a journey of self-discovery and inner peace.",
                "regular_price" => 29.99,
                "old_price" => 34.99,
                "SKU" => "YOGA-MAT-005",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Air Purifier",
                "slug" => "air-purifier",
                "short_description" => "Breathe cleaner air at home with our powerful air purifier. Create a healthy living environment.",
                "description" => "Ensure fresh and clean air in your home with our Air Purifier. Equipped with advanced filtration technology, this purifier removes airborne pollutants, allergens, and odors, creating a healthier living environment. The multi-layered filter captures dust particles, pet dander, pollen, and even microscopic particles as small as 0.3 microns. With adjustable fan speeds and a quiet operation, our air purifier silently works to improve air quality, making it ideal for bedrooms, living rooms, and home offices. Breathe easy and enjoy the benefits of cleaner air with our powerful air purifier.",
                "regular_price" => 79.99,
                "old_price" => 99.99,
                "SKU" => "AIR-PURIFIER-006",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Ultrasonic Humidifier",
                "slug" => "ultrasonic-humidifier",
                "short_description" => "Add moisture to the air and alleviate dryness with our ultrasonic humidifier. Create a comfortable environment at home.",
                "description" => "Combat dry air and create a soothing atmosphere in your home with our Ultrasonic Humidifier. This sleek and compact device uses ultrasonic technology to emit a fine cool mist that adds moisture to the air, relieving dryness and improving indoor air quality. With adjustable mist levels and a built-in night light, our humidifier creates a comfortable environment for better sleep, easier breathing, and healthier skin. Perfect for bedrooms, nurseries, or home offices, our ultrasonic humidifier is a must-have for maintaining optimal humidity levels and enhancing your overall well-being.",
                "regular_price" => 39.99,
                "old_price" => 49.99,
                "SKU" => "HUMIDIFIER-007",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Digital Thermometer",
                "slug" => "digital-thermometer",
                "short_description" => "Monitor body temperature accurately with our digital thermometer. Ensure your family's health at home.",
                "description" => "Stay on top of your family's health with our Digital Thermometer. This precise and reliable thermometer provides fast and accurate temperature readings in seconds. The digital display allows for easy reading, and the flexible tip ensures a comfortable and safe measurement experience. With its memory function, you can track temperature changes over time and easily monitor fever symptoms. Whether you're checking your child's temperature or keeping tabs on your own health, our digital thermometer is an essential tool for every home.",
                "regular_price" => 9.99,
                "old_price" => 12.99,
                "SKU" => "THERMOMETER-008",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  120

            ],
            [
                "name" => "Noise-Canceling Earbuds",
                "slug" => "noise-canceling-earbuds",
                "short_description" => "Block out distractions and enjoy immersive sound with our noise-canceling earbuds. Experience audio bliss at home.",
                "description" => "Immerse yourself in your favorite music, podcasts, or audiobooks with our Noise-Canceling Earbuds. These high-quality earbuds feature advanced noise-canceling technology that blocks out external distractions, allowing you to focus on your audio experience. With crystal-clear sound and deep bass, our earbuds deliver an immersive and captivating soundstage. The ergonomic design ensures a comfortable fit, and the wireless connectivity offers freedom of movement. Whether you're relaxing at home, working, or traveling, our noise-canceling earbuds provide a personal sanctuary of audio bliss.",
                "regular_price" => 79.99,
                "old_price" => 89.99,
                "SKU" => "EAR-BUDS-009",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Weighted Blanket",
                "slug" => "weighted-blanket",
                "short_description" => "Experience deep relaxation and better sleep with our weighted blanket. Find comfort and tranquility at home.",
                "description" => "Drift into a state of calm and relaxation with our Weighted Blanket. Designed to provide gentle pressure and the feeling of being hugged, this blanket promotes a sense of security and comfort, helping you unwind and achieve a restful sleep. The weighted beads evenly distributed throughout the blanket create a soothing sensation that reduces anxiety, stress, and insomnia. With a plush, soft cover, our weighted blanket is perfect for curling up on the couch, reading a book, or enjoying a cozy night's sleep. Embrace the benefits of deep touch pressure therapy and experience the tranquility at home.",
                "regular_price" => 59.99,
                "old_price" => 69.99,
                "SKU" => "WEIGHT-BLANKET-010",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Fitness Tracker Watch",
                "slug" => "fitness-tracker-watch",
                "short_description" => "Monitor your health and fitness goals with our smart fitness tracker watch. Stay active and motivated at home.",
                "description" => "Stay on top of your health and fitness goals with our Fitness Tracker Watch. This sleek and stylish smartwatch offers an array of features to help you track your steps, monitor your heart rate, measure calories burned, and analyze your sleep patterns. With its intuitive touchscreen display and long battery life, our fitness tracker watch is perfect for monitoring your progress, setting reminders, and staying motivated to achieve your fitness goals. Whether you're working out at home or taking a stroll in the neighborhood, our fitness tracker watch is the perfect companion for a healthy and active lifestyle.",
                "regular_price" => 49.99,
                "old_price" => 59.99,
                "SKU" => "FITNESS-WATCH-011",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Meditation Cushion",
                "slug" => "meditation-cushion",
                "short_description" => "Find peace and tranquility during meditation with our comfortable meditation cushion. Create a serene space at home.",
                "description" => "Create a sacred space for your meditation practice with our Meditation Cushion. Made from high-quality materials, this cushion provides firm yet comfortable support, allowing you to maintain proper posture and alignment during meditation. The ergonomic design helps alleviate strain on your knees, hips, and back, ensuring a comfortable and peaceful meditation experience. Whether you're a beginner or an experienced practitioner, our meditation cushion is essential for creating a serene and tranquil environment where you can reconnect with yourself and find inner peace at home.",
                "regular_price" => 34.99,
                "old_price" => 44.99,
                "SKU" => "MEDITATION-CUSHION-012",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Electric Toothbrush",
                "slug" => "electric-toothbrush",
                "short_description" => "Achieve a brighter smile and healthier gums with our electric toothbrush. Elevate your oral care routine at home.",
                "description" => "Upgrade your oral care routine with our Electric Toothbrush. With its advanced sonic technology and high-frequency vibrations, this toothbrush removes plaque, stains, and improves gum health for a brighter smile. The built-in timer ensures that you brush for the recommended two minutes, and the multiple brushing modes cater to your specific needs, whether it's deep cleaning, whitening, or sensitive teeth. With replaceable brush heads and a long-lasting battery, our electric toothbrush is a convenient and effective solution for maintaining optimal oral hygiene from the comfort of your home.",
                "regular_price" => 39.99,
                "old_price" => 49.99,
                "SKU" => "TOOTHBRUSH-013",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Adjustable Laptop Stand",
                "slug" => "adjustable-laptop-stand",
                "short_description" => "Improve ergonomics and comfort while working from home with our adjustable laptop stand. Enhance productivity.",
                "description" => "Enhance your work-from-home setup with our Adjustable Laptop Stand. This ergonomic stand elevates your laptop to an optimal viewing angle, reducing neck and eye strain. With adjustable height and angle settings, you can customize the position that suits your posture and comfort. The built-in cooling fans prevent overheating, ensuring optimal performance for your laptop. Lightweight and portable, our laptop stand is ideal for use in the home office, living room, or even while lounging on the couch. Boost your productivity and create a comfortable and efficient workspace with our adjustable laptop stand.",
                "regular_price" => 29.99,
                "old_price" => 39.99,
                "SKU" => "LAPTOP-STAND-014",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Posture Corrector",
                "slug" => "posture-corrector",
                "short_description" => "Improve your posture and alleviate back pain with our posture corrector. Feel confident and supported at home.",
                "description" => "Correct poor posture and relieve back pain with our Posture Corrector. This adjustable brace gently pulls your shoulders back, aligns your spine, and provides support to your upper back and neck. By promoting proper alignment, our posture corrector helps alleviate muscle tension, improve posture, and reduce the risk of long-term posture-related issues. The lightweight and breathable design make it comfortable to wear at home, and the adjustable straps ensure a customizable fit for all body types. Feel confident and supported as you go about your daily activities with our posture corrector.",
                "regular_price" => 19.99,
                "old_price" => 24.99,
                "SKU" => "POSTURE-CORRECTOR-015",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Portable UV-C Sanitizer Wand",
                "slug" => "portable-uv-sanitizer-wand",
                "short_description" => "Disinfect surfaces and objects at home with our portable UV-C sanitizer wand. Maintain cleanliness and hygiene.",
                "description" => "Keep your home clean and free from harmful germs and bacteria with our Portable UV-C Sanitizer Wand. This handheld device emits powerful UV-C light that effectively kills bacteria, viruses, and other pathogens on surfaces and objects. With a simple swipe of the wand, you can disinfect countertops, doorknobs, electronics, and more, without the need for harsh chemicals. Compact and easy to use, our portable UV-C sanitizer wand is a convenient solution for maintaining cleanliness and hygiene in your home. Stay protected and enjoy a germ-free environment with our sanitizer wand.",
                "regular_price" => 49.99,
                "old_price" => 59.99,
                "SKU" => "SANITIZER-WAND-016",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Massage Gun",
                "slug" => "massage-gun",
                "short_description" => "Relieve muscle soreness and tension with our powerful massage gun. Experience rejuvenation at home.",
                "description" => "Treat your muscles to a therapeutic massage with our Massage Gun. This powerful handheld device delivers deep tissue percussion massage, targeting specific areas to relieve muscle soreness, tension, and knots. With adjustable intensity levels and multiple attachments, you can customize your massage experience to meet your needs. The compact and ergonomic design allows for easy reach and maneuverability, making it perfect for self-massage at home. Whether you're an athlete, fitness enthusiast, or simply in need of relaxation, our massage gun provides rejuvenation and promotes muscle recovery.",
                "regular_price" => 79.99,
                "old_price" => 89.99,
                "SKU" => "MASSAGE-GUN-017",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Blood Pressure Monitor",
                "slug" => "blood-pressure-monitor",
                "short_description" => "Monitor your blood pressure accurately at home with our digital blood pressure monitor. Prioritize your health.",
                "description" => "Take control of your cardiovascular health with our Blood Pressure Monitor. This easy-to-use device accurately measures your blood pressure and heart rate, providing valuable information for monitoring and managing hypertension. The digital display offers clear readings, and the adjustable cuff fits most arm sizes comfortably. With its memory function, you can track your measurements over time and share them with your healthcare professional. Stay proactive about your well-being and prioritize your health from the comfort of your home with our digital blood pressure monitor.",
                "regular_price" => 29.99,
                "old_price" => 34.99,
                "SKU" => "BP-MONITOR-018",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  120

            ],
            [
                "name" => "Herbal Tea Sampler Set",
                "slug" => "herbal-tea-sampler-set",
                "short_description" => "Discover the flavors and benefits of herbal tea with our sampler
     set. Indulge in relaxation at home.",
                "description" => "Unwind and indulge in a soothing cup of herbal tea with our Herbal Tea Sampler Set. This carefully curated set features a variety of herbal teas, each with its unique flavors and health benefits. From calming chamomile to invigorating peppermint, you'll experience the natural goodness of these aromatic blends. Savor the rich aroma and taste as you relax at home, enjoying moments of tranquility and self-care. Our herbal tea sampler set is the perfect companion for cozy evenings and quiet moments of reflection.",
                "regular_price" => 14.99,
                "old_price" => 19.99,
                "SKU" => "TEA-SAMPLER-019",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Resistance Bands Set",
                "slug" => "resistance-bands-set",
                "short_description" => "Stay active and workout at home with our versatile resistance bands set. Tone and strengthen your body.",
                "description" => "Get a full-body workout in the comfort of your home with our Resistance Bands Set. This versatile set includes different levels of resistance bands, allowing you to customize your workouts and target specific muscle groups. From strength training to stretching exercises, these bands provide the resistance you need to tone and strengthen your body. Compact and portable, they can be used anywhere, whether it's in your living room, backyard, or even while traveling. Stay active, stay fit, and achieve your fitness goals with our resistance bands set.",
                "regular_price" => 24.99,
                "old_price" => 29.99,
                "SKU" => "RESISTANCE-BANDS-020",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Aromatherapy Essential Oil Diffuser",
                "slug" => "aromatherapy-oil-diffuser",
                "short_description" => "Create a relaxing ambiance at home with our aromatherapy essential oil diffuser. Enjoy soothing scents.",
                "description" => "Transform your home into a sanctuary of tranquility with our Aromatherapy Essential Oil Diffuser. This elegant and compact diffuser uses ultrasonic technology to disperse a fine mist of water and essential oils, filling your space with delightful aromas and creating a soothing ambiance. With adjustable mist settings and soft LED lighting, you can customize the intensity and color to suit your mood. Create a serene atmosphere in your living room, bedroom, or home office and enjoy the benefits of aromatherapy for relaxation, stress relief, and improved well-being.",
                "regular_price" => 29.99,
                "old_price" => 34.99,
                "SKU" => "OIL-DIFFUSER-021",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Yoga Mat",
                "slug" => "yoga-mat",
                "short_description" => "Enhance your yoga practice at home with our premium yoga mat. Find balance and serenity.",
                "description" => "Elevate your yoga practice with our Premium Yoga Mat. Designed with optimal thickness and non-slip texture, this mat provides excellent cushioning and stability, allowing you to perform your yoga poses with confidence and comfort. The eco-friendly and durable material ensures long-lasting use, and the lightweight design makes it easy to carry and store. Whether you're a beginner or an experienced yogi, our yoga mat is an essential tool for finding balance, strength, and serenity in your home practice.",
                "regular_price" => 39.99,
                "old_price" => 49.99,
                "SKU" => "YOGA-MAT-022",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Air Purifier",
                "slug" => "air-purifier",
                "short_description" => "Breathe clean and fresh air at home with our advanced air purifier. Improve indoor air quality.",
                "description" => "Create a healthier living environment with our Advanced Air Purifier. This powerful device utilizes advanced filtration technology to remove allergens, dust, pet dander, and other airborne pollutants, improving the overall air quality in your home. With multiple air purification modes and adjustable fan speed, you can customize the settings to suit your needs. The compact and sleek design seamlessly blends into any room decor, and the quiet operation ensures a peaceful ambiance. Breathe clean and fresh air, and enjoy the benefits of a purified home environment with our air purifier.",
                "regular_price" => 89.99,
                "old_price" => 99.99,
                "SKU" => "AIR-PURIFIER-023",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Organic Bamboo Cutting Board",
                "slug" => "organic-bamboo-cutting-board",
                "short_description" => "Prepare your meals with style and sustainability using our organic bamboo cutting board. Upgrade your kitchen.",
                "description" => "Upgrade your kitchen essentials with our Organic Bamboo Cutting Board. Crafted from sustainably sourced bamboo, this cutting board offers a durable and eco-friendly surface for all your food preparation needs. The natural antibacterial properties of bamboo make it a hygienic choice, while the sleek and stylish design adds an elegant touch to your kitchen decor. With a generous size and a convenient juice groove, our cutting board is perfect for slicing, dicing, and chopping fruits, vegetables, and meats. Elevate your culinary experience and embrace sustainable living with our organic bamboo cutting board.",
                "regular_price" => 24.99,
                "old_price" => 29.99,
                "SKU" => "CUTTING-BOARD-024",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Sleep Mask",
                "slug" => "sleep-mask",
                "short_description" => "Enjoy deep and uninterrupted sleep with our luxurious sleep mask. Wake up refreshed at home.",
                "description" => "Experience blissful sleep with our Luxurious Sleep Mask. Made from soft and breathable materials, this mask provides complete darkness and blocks out any unwanted light, helping you achieve a deep and uninterrupted sleep. The contoured design ensures a comfortable fit, and the adjustable strap allows for a customizable fit. Whether you're taking a nap during the day or getting a good night's rest, our sleep mask promotes relaxation and rejuvenation. Wake up feeling refreshed and energized, ready to conquer the day in the comfort of your home.",
                "regular_price" => 9.99,
                "old_price" => 12.99,
                "SKU" => "SLEEP-MASK-025",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Shower Filter",
                "slug" => "shower-filter",
                "short_description" => "Transform your shower into a spa-like experience with our shower filter. Enjoy healthier skin and hair at home.",
                "description" => "Turn your daily shower into a rejuvenating spa-like experience with our Shower Filter. This advanced filter effectively removes impurities, chlorine, and heavy metals from the water, reducing skin dryness, hair damage, and irritation. The result is softer skin, smoother hair, and an overall healthier bathing experience. With easy installation and universal compatibility, our shower filter is suitable for most showerheads and requires minimal maintenance. Treat yourself to a luxurious and revitalizing shower in the comfort of your own home with our shower filter.",
                "regular_price" => 29.99,
                "old_price" => 34.99,
                "SKU" => "SHOWER-FILTER-027",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Electric Blanket",
                "slug" => "electric-blanket",
                "short_description" => "Stay cozy and warm during chilly nights with our electric blanket. Embrace comfort at home.",
                "description" => "Embrace warmth and comfort with our Electric Blanket. This luxurious blanket features multiple heat settings and ultra-soft fabric, providing soothing warmth on cold nights. With a generous size and dual controls for individual comfort, our electric blanket ensures a cozy and personalized experience. The automatic shut-off feature offers peace of mind, and the machine-washable design allows for easy cleaning and maintenance. Whether you're relaxing on the couch or sleeping in your bed, our electric blanket is your go-to companion for ultimate comfort and warmth at home.",
                "regular_price" => 79.99,
                "old_price" => 89.99,
                "SKU" => "ELECTRIC-BLANKET-028",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Smart Thermostat",
                "slug" => "smart-thermostat",
                "short_description" => "Control your home's temperature efficiently with our smart thermostat. Save energy and stay comfortable.",
                "description" => "Take control of your home's climate with our Smart Thermostat. This intelligent device allows you to regulate the temperature and create personalized schedules, ensuring optimal comfort and energy efficiency. With Wi-Fi connectivity, you can control your thermostat remotely using a smartphone app, even when you're away from home. The intuitive interface and energy-saving features help you reduce your carbon footprint and lower your energy
    
     bills. Upgrade your home's heating and cooling system with our smart thermostat and enjoy a comfortable and eco-friendly living environment.",
                "regular_price" => 129.99,
                "old_price" => 149.99,
                "SKU" => "SMART-THERMOSTAT-029",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Foot Massager",
                "slug" => "foot-massager",
                "short_description" => "Relieve tired and achy feet with our rejuvenating foot massager. Pamper yourself at home.",
                "description" => "Treat your feet to a spa-like experience with our Rejuvenating Foot Massager. This ergonomically designed massager uses a combination of air compression, heat therapy, and rolling massage to relieve tired and achy feet. The adjustable settings allow you to customize the intensity and target specific areas for personalized relaxation. With its compact and portable design, you can enjoy a revitalizing foot massage anytime, anywhere in your home. Pamper yourself, alleviate foot discomfort, and unwind after a long day with our foot massager.",
                "regular_price" => 69.99,
                "old_price" => 79.99,
                "SKU" => "FOOT-MASSAGER-030",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            // Home health ends here

            // Pet Foods starts
            [
                "name" => "Grain-Free Salmon Dog Food",
                "slug" => "grain-free-salmon-dog-food",
                "short_description" => "Nourish your dog with our grain-free salmon dog food. Packed with essential nutrients for optimal health.",
                "description" => "Give your dog the nutrition they deserve with our Grain-Free Salmon Dog Food. Made with real salmon as the primary ingredient, this premium dog food is rich in omega-3 fatty acids and high-quality protein, promoting healthy skin, coat, and overall vitality. The grain-free formula is gentle on sensitive stomachs and avoids common allergens. Each bite is packed with essential vitamins, minerals, and antioxidants to support your dog's immune system and joint health. Feed your furry friend a balanced and delicious meal with our grain-free salmon dog food.",
                "regular_price" => 29.99,
                "old_price" => 34.99,
                "SKU" => "SALMON-DOG-001",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Organic Cat Treats",
                "slug" => "organic-cat-treats",
                "short_description" => "Spoil your cat with our organic cat treats. Made from natural ingredients for a healthy indulgence.",
                "description" => "Pamper your feline companion with our Organic Cat Treats. These delectable treats are made from premium organic ingredients, free from artificial additives and preservatives. Each bite-sized treat is packed with flavor and nutrients, enticing your cat with every nibble. Whether you're rewarding good behavior or simply showing your love, our organic cat treats are a guilt-free indulgence. Treat your furry friend to a wholesome and delicious snack with our organic cat treats.",
                "regular_price" => 9.99,
                "old_price" => 12.99,
                "SKU" => "CAT-TREATS-002",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Dental Chews for Dogs",
                "slug" => "dental-chews-for-dogs",
                "short_description" => "Promote dental health in your dog with our dental chews. Freshen breath and reduce plaque.",
                "description" => "Take care of your dog's dental health with our Dental Chews for Dogs. These specially formulated chews are designed to promote oral hygiene by reducing plaque and tartar buildup, freshening breath, and maintaining healthy gums. The textured surface helps scrub away plaque while your dog enjoys a tasty treat. Made with natural ingredients and free from artificial flavors and colors, our dental chews are a convenient and effective way to support your dog's dental hygiene. Keep your dog's teeth clean and their breath fresh with our dental chews.",
                "regular_price" => 14.99,
                "old_price" => 19.99,
                "SKU" => "DENTAL-CHEWS-003",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Premium Fish Cat Food",
                "slug" => "premium-fish-cat-food",
                "short_description" => "Satisfy your cat's cravings with our premium fish cat food. Rich in protein and essential nutrients.",
                "description" => "Give your cat a gourmet dining experience with our Premium Fish Cat Food. Made with high-quality fish as the main ingredient, this cat food is packed with protein, essential fatty acids, and a blend of vitamins and minerals to support your cat's overall health and well-being. The delicious fish flavor will satisfy even the pickiest eaters, while the balanced formula ensures optimal nutrition. Treat your feline friend to a meal that satisfies their cravings and nourishes their body with our premium fish cat food.",
                "regular_price" => 24.99,
                "old_price" => 29.99,
                "SKU" => "FISH-CAT-004",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Rawhide Bones for Dogs",
                "slug" => "rawhide-bones-for-dogs",
                "short_description" => "Keep your dog entertained and promote dental health with our rawhide bones.",
                "description" => "Provide your dog with hours of chewing satisfaction and dental benefits with our Rawhide Bones for Dogs. Made from natural, high-quality rawhide, these bones help satisfy your dog's natural urge to chew while promoting dental hygiene. Chewing on the textured surface helps reduce plaque and tartar buildup, keeping your dog's teeth clean and healthy. The long-lasting and flavorful rawhide bones are perfect for aggressive chewers and provide mental stimulation and entertainment. Keep your furry friend happy and their teeth strong with our rawhide bones for dogs.",
                "regular_price" => 12.99,
                "old_price" => 14.99,
                "SKU" => "RAWHIDE-DOG-005",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Natural Cat Litter",
                "slug" => "natural-cat-litter",
                "short_description" => "Provide a natural and odor-free litter box experience for your cat with our natural cat litter.",
                "description" => "Create a clean and odor-free litter box for your cat with our Natural Cat Litter. Made from natural and biodegradable materials, this litter is highly absorbent and controls odors effectively. It clumps tightly for easy scooping, minimizing mess and wastage. The low dust formula ensures a healthier environment for both you and your cat. Our natural cat litter is free from harsh chemicals, fragrances, and artificial additives, making it safe for your cat and the environment. Keep your home fresh and your cat happy with our natural cat litter.",
                "regular_price" => 19.99,
                "old_price" => 24.99,
                "SKU" => "CAT-LITTER-006",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Puppy Training Pads",
                "slug" => "puppy-training-pads",
                "short_description" => "Simplify house training for your puppy with our absorbent and leak-proof training pads.",
                "description" => "Make house training your puppy easier with our Puppy Training Pads. These absorbent pads feature multiple layers and a leak-proof bottom to ensure maximum protection for your floors. The quick-drying surface locks in moisture, preventing tracking and odors. With built-in attractant, these pads encourage your puppy to use them for their bathroom needs. Whether you're house training a new puppy or dealing with senior dogs, our training pads provide a convenient and hygienic solution. Simplify the training process and keep your home clean with our puppy training pads.",
                "regular_price" => 14.99,
                "old_price" => 19.99,
                "SKU" => "PUPPY-PADS-007",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ],
            [
                "name" => "Cat Scratching Post",
                "slug" => "cat-scratching-post",
                "short_description" => "Protect your furniture and satisfy your cat's natural instincts with our cat scratching post.",
                "description" => "Give your cat an outlet for their natural scratching behavior with our Cat Scratching Post. This sturdy and tall post provides a dedicated space for your cat to scratch, helping to protect your furniture and keep their claws healthy. The sisal rope wrapping on the post is durable and enticing for cats, encouraging them to scratch and stretch. The compact design allows for easy placement in any room, and the base is stable and sturdy. Provide your cat with a designated scratching area and preserve your furniture with our cat scratching post.",
                "regular_price" => 29.99,
                "old_price" => 34.99,
                "SKU" => "SCRATCH-POST-008",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  80

            ],
            [
                "name" => "Dog Grooming Brush",
                "slug" => "dog-grooming-brush",
                "short_description" => "Keep your dog's coat healthy and tangle-free with our dog grooming brush.",
                "description" => "Maintain your dog's beautiful coat with our Dog Grooming Brush. The ergonomic design and soft bristles make grooming comfortable for both you and your furry friend. The brush removes loose fur, tangles, and dirt while stimulating the skin and promoting healthy hair growth. Regular grooming sessions not only keep your dog looking their best but also help to reduce shedding and minimize allergens in your home. Enhance the bond between you and your dog while keeping their coat healthy and tangle-free with our dog grooming brush.",
                "regular_price" => 12.99,
                "old_price" => 14.99,
                "SKU" => "GROOM-BRUSH-009",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  90

            ],
            [
                "name" => "Small Animal Cage",
                "slug" => "small-animal-cage",
                "short_description" => "Provide a comfortable and secure home for your small pet with our small animal cage.",
                "description" => "Create a safe and comfortable living space for your small pet with our Small Animal Cage. This spacious cage features multiple levels and platforms, providing ample room for your pet to explore, play, and rest. The sturdy construction and secure locks ensure the safety of your furry friend. The cage is designed with easy access doors and removable trays for convenient cleaning and maintenance. Whether you have a hamster, guinea pig, or other small animal, our small animal cage offers a cozy and secure home for them to thrive. Give your small pet the perfect habitat with our small animal cage.",
                "regular_price" => 39.99,
                "old_price" => 49.99,
                "SKU" => "ANIMAL-CAGE-010",
                "stock_status" => "In Stock",
                "featured" => 0,
                "popular" => 0,
                "best_sell" => 0,
                "quantity" =>  100

            ]


        ];
        DB::table("products")->insert($products);
    }
}
