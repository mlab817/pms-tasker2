<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents = [
            'PRAS/PR',
            'PRAS/PR for preparation of RFQ',
            'Resolutions for Review',
            'Opened proposals for memo',
            'RFQ For Review/Posting',
            'TWG Results of Evaluation',
            'Request for Reposting',
            'Other Memo/Letter'
        ];

        foreach ($documents as $document)
        {
            DB::table('documents')->insert([
                'name' => $document,
                'slug'  => Str::slug($document),
            ]);
        }
    }
}
