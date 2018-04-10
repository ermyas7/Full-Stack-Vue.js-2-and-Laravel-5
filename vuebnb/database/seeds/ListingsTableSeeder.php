<?php

use Illuminate\Database\Seeder;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //get path of the json file
        $path = base_path() .'/database/data.json';
        //open the file
        $file = File::get($path);
        //change the json file into array
        $data = json_decode($file, true);
        //store the data into a database
        DB::table('listings')->insert($data);
    }
}
