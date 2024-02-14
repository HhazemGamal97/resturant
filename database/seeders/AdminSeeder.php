<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "🚦 start seeding Admin\n";
        $this->seedCategory();
    }
    private function seedCategory()
    {
        echo "🕛 admins";
        $records = [
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('secret'),
                'created_at'=> now()
            ]

        ];
        \App\Models\Admin::insert($records);
        echo " 👍\n";
    }

}
