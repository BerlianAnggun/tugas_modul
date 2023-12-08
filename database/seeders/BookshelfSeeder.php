<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Bookshelf::insert([
            [
                'id' => '1',
                'code' => '620',
                'name' => 'Engineering',
                'created_at' => now(),
                'uppdate_at' => now()
            ],
            [
                'id' => '2',
                'code' => '621',
                'name' => 'Mechanial',
                'created_at' => now(),
                'update_at' => now()
            ],
        ]);
    }
}
