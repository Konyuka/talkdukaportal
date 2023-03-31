<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('infos')->insert([
            [
                'label' => 'senderID',
                'title' => 'Sender ID',
                'description' => "Sender ID is the alpha-numeric name or number which appears on the mobile phone as the sender of a SMS (It is used to identify who's sending the message to the recipient). Sender ID can be a numeric number or an alphanumeric such as the name of your company or brand You can use different sender IDs from the drop down if you have multiple sender ID",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'label' => 'Info 2',
            //     'title' => 'Title for Info 2',
            //     'description' => 'Description for Info 2',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
        ]);
    }
}
