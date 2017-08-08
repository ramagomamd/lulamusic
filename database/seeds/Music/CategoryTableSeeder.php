<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

/**
 * Class CategoryTableSeeder.
 */
class CategoryTableSeeder extends Seeder
{
	use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate(config('music.category.table'));

        $categories = [
            [
                'name'  			=> 'Music',
                'slug'              => str_slug('Music'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'name'  			=> 'Mzansi',
                'slug'              => str_slug('Mzansi'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'name'  			=> 'African',
                'slug'              => str_slug('African'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'name'  			=> 'International',
                'slug'              => str_slug('International'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];

        DB::table(config('music.category.table'))->insert($categories);

        $this->enableForeignKeys();
    }
}