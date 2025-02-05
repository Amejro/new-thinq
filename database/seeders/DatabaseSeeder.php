<?php

namespace Database\Seeders;

use App\Models\Industry;
use App\Models\ProductIndustry;
use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ShippingMethod;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test'),
        ]);


        ShippingMethod::insert([
            ['name' => 'Air Freight', 'description' => ''],
            ['name' => 'Sea Freight', 'description' => ''],
            ['name' => 'Road Freight', 'description' => ''],
            ['name' => 'Rail Freight', 'description' => ''],
            ['name' => 'Container', 'description' => ''],
        ]);

        Category::insert([
            ['name' => 'Computer electronics', 'description' => ''],
            ['name' => 'Fashion/Accessories', 'description' => ''],
            ['name' => 'Household appliance', 'description' => ''],
            ['name' => 'Automotive/accessories', 'description' => ''],
            ['name' => 'Construction machinery', 'description' => ''],
            ['name' => 'Energy/Utilities', 'description' => ''],
        ]);

        Industry::insert([
            ['name' => 'Accounting/Finance'],
            ['name' => 'Advertising/Public Relations'],
            ['name' => 'Aerospace/Aviation'],
            ['name' => 'Arts/Entertainment/Publishing'],
            ['name' => 'Automotive'],
            ['name' => 'Business Development'],
            ['name' => 'Business Opportunity'],
            ['name' => 'Clerical/Administration'],
            ['name' => 'Banking'],
        ]);

        ProductIndustry::insert([
            
            ['name' => 'Automotive'],
            ['name' => 'Vehicle Spare Parts'],
            ['name' => 'New Energy Vehicle & Smart Mobility'],
            ['name' => 'Construction Machinery'],
            ['name' => 'General Machinery & Parts'],
            ['name' => 'General Machinery Mechanical Parts'],
            ['name' => 'Power Machinery & Electrical Power'],
            ['name' => 'Electronics and Electrical Products'], 
        ]);

    }
}
