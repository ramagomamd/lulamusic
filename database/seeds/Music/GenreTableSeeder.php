<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

/**
 * Class GenreTableSeeder.
 */
class GenreTableSeeder extends Seeder
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
        $this->truncate(config('music.genre.table'));

        $genres = [
            [
                'name'  			=> 'Hip hop',
                'slug'				=> str_slug('Hip hop'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'name'  			=> 'Rap',
                'slug'				=> str_slug('Rap'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'name'  			=> 'Top Charts',
                'slug'				=> str_slug('Top Charts'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'name'  			=> 'House',
                'slug'				=> str_slug('House'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'name'  			=> 'Gospel',
                'slug'				=> str_slug('Gospel'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'name'  			=> 'Kwaito',
                'slug'				=> str_slug('Kwaito'),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];

        DB::table(config('music.genre.table'))->insert($genres);

        $this->enableForeignKeys();
    }
}