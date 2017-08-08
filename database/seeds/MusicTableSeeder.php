<?php

use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;

/**
 * Class MusicTableSeeder.
 */
class MusicTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        $this->call(CategoryTableSeeder::class);
        $this->call(GenreTableSeeder::class);

        $this->enableForeignKeys();
    }
}
