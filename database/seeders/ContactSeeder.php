<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'Contact',
            'email' => 'contact@example.com',
            'phone' => '123-456-7890',
            'country' => 'United States',
            'message' => 'Hello Worlds!',
        ]);
    }
}
