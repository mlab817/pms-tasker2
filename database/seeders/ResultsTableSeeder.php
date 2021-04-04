<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents = [
            'TWG for Evaluation',
            'Failed',
        ];

        foreach ($documents as $document)
        {
            DB::table('results')->insert([
                'name' => $document,
                'slug'  => Str::slug($document),
            ]);
        }
    }
}
