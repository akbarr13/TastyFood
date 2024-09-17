<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\News;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory(50)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'test@admin.com',
            'role' => 'admin',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'superadmin',
            'username' => 'superadmin',
            'email' => 'test@superadmin.com',
            'role' => 'superadmin',
        ]);
        DB::table('news')->insert([
            [
                'title' => 'Breaking News: Market Crash',
                'content' => 'The stock market experienced a significant crash today, wiping out gains from the past month.',
                'slug' => 'breaking-news-market-crash',
                'status' => 'published',
                'published_at' => now(),
                'image' => 'berita1.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tech Industry Booming',
                'content' => 'Tech companies are seeing record growth as the demand for software solutions increases.',
                'slug' => 'tech-industry-booming',
                'status' => 'published',
                'published_at' => now(),
                'image' => 'berita2.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sports Highlights of the Week',
                'content' => 'This week saw thrilling moments in football, basketball, and tennis.',
                'slug' => 'sports-highlights-week',
                'status' => 'draft',
                'published_at' => null,
                'image' => 'berita3.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Weather Alert: Storm Warning',
                'content' => 'A major storm is expected to hit the coast this weekend, with high winds and heavy rainfall.',
                'slug' => 'weather-alert-storm-warning',
                'status' => 'published',
                'published_at' => now(),
                'image' => 'berita4.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Restaurant Opens Downtown',
                'content' => 'A trendy new restaurant has opened its doors, offering gourmet food at reasonable prices.',
                'slug' => 'new-restaurant-opens-downtown',
                'status' => 'published',
                'published_at' => now(),
                'image' => 'berita5.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Health Tips: Staying Fit During Winter',
                'content' => 'Here are some great tips to stay healthy and fit during the cold winter months.',
                'slug' => 'health-tips-staying-fit-during-winter',
                'status' => 'published',
                'published_at' => now(),
                'image' => 'berita6.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Movie Review: Summer Blockbuster',
                'content' => 'The latest summer blockbuster has arrived, and it’s a thrilling ride from start to finish.',
                'slug' => 'movie-review-summer-blockbuster',
                'status' => 'published',
                'published_at' => now(),
                'image' => 'berita7.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Travel Guide: Top Destinations for 2024',
                'content' => 'Here are the top travel destinations for 2024, from bustling cities to serene beaches.',
                'slug' => 'travel-guide-top-destinations-2024',
                'status' => 'draft',
                'published_at' => null,
                'image' => 'berita8.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Local Hero Saves Family from Fire',
                'content' => 'A brave local hero saved a family from a fire, earning praise from the community.',
                'slug' => 'local-hero-saves-family-from-fire',
                'status' => 'published',
                'published_at' => now(),
                'image' => 'berita9.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Education Trends: Online Learning in 2024',
                'content' => 'Online learning continues to grow in popularity as more institutions embrace digital solutions.',
                'slug' => 'education-trends-online-learning-2024',
                'status' => 'published',
                'published_at' => now(),
                'image' => 'berita10.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);


        DB::table('galleries')->insert([
            [
                'title' => 'wleo',
                'filename' => 'anh-nguyen-kcA-c3f_3FE-unsplash.jpg',
                'user_id' => 1
            ],
            [
                'title' => 'yeah',
                'filename' => 'anna-pelzer-IGfIGP5ONV0-unsplash.jpg',
                'user_id' => 1
            ],
            [
                'title' => 'First News',
                'filename' => 'foto1.jpg',
                'user_id' => 1
            ],
            [
                'title' => 'Second News',
                'filename' => 'foto2.jpg',
                'user_id' => 1
            ],
            [
                'title' => 'Third News',
                'filename' => 'foto3.jpg',
                'user_id' => 1
            ],
            [
                'title' => 'Fourth News',
                'filename' => 'foto4.jpg',
                'user_id' => 1
            ],
            [
                'title' => 'Fifth News',
                'filename' => 'foto5.jpg',
                'user_id' => 1
            ],
            [
                'title' => 'Sixth News',
                'filename' => 'foto6.jpg',
                'user_id' => 1
            ],
            [
                'title' => 'Seventh News',
                'filename' => 'foto7.jpg',
                'user_id' => 1
            ],

        ]);

        DB::table('messages')->insert([
            [
                'subject' => 'Product Inquiry',
                'name' => 'Alice Brown',
                'email' => 'alice.brown@example.com',
                'content' => 'Can you provide more details about the warranty for the product?',
                'is_readed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'Order Status',
                'name' => 'Bob Green',
                'email' => 'bob.green@example.com',
                'content' => 'I haven’t received any updates on my order. Can you check the status?',
                'is_readed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'Refund Request',
                'name' => 'Charlie Blue',
                'email' => 'charlie.blue@example.com',
                'content' => 'I’d like to request a refund for the item I purchased last week.',
                'is_readed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'Shipping Delay',
                'name' => 'David Black',
                'email' => 'david.black@example.com',
                'content' => 'My package has been delayed. Can you provide an updated delivery date?',
                'is_readed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'Product Exchange',
                'name' => 'Emma White',
                'email' => 'emma.white@example.com',
                'content' => 'I’d like to exchange my product for a different size. What is the process?',
                'is_readed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'Discount Inquiry',
                'name' => 'Frank Gray',
                'email' => 'frank.gray@example.com',
                'content' => 'I saw a discount last week, is it still available?',
                'is_readed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'Technical Support',
                'name' => 'Grace Yellow',
                'email' => 'grace.yellow@example.com',
                'content' => 'I’m having trouble setting up the device. Can you help?',
                'is_readed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'Billing Issue',
                'name' => 'Henry Purple',
                'email' => 'henry.purple@example.com',
                'content' => 'There’s a mistake on my recent bill. Can you look into it?',
                'is_readed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'Product Review',
                'name' => 'Ivy Cyan',
                'email' => 'ivy.cyan@example.com',
                'content' => 'I’d like to leave a review for the product I purchased. How do I do that?',
                'is_readed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'Account Deletion Request',
                'name' => 'Jack Violet',
                'email' => 'jack.violet@example.com',
                'content' => 'I’d like to delete my account. What steps do I need to take?',
                'is_readed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
