<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents = [
            'Atty. Ding',
            'Aldous',
            'Bea',
            'Eden',
            'Jhen',
            'Joy',
            'Justine',
            'Karl',
            'Kim',
            'Kris',
            'Ley',
            'Lotis',
            'Marco',
            'Mark',
            'Mark E',
            'PJ',
            'Roweiji',
            'Tere',
            'TWG',
            'Vinoe',
            'Yoram',
        ];

        foreach ($documents as $document)
        {
            DB::table('staff')->insert([
                'name' => $document,
                'slug'  => Str::slug($document),
            ]);
        }
    }
}
