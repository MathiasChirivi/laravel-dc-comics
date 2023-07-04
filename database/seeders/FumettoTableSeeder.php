<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fumetto;

class FumettoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetti = config("fumetti");

        foreach($fumetti as $fumetto){
            $newFumetto = new Fumetto();
            $newFumetto->title = $fumetto["title"];
            $newFumetto->description = $fumetto["description"];
            $newFumetto->thumb = $fumetto["thumb"];
            $newFumetto->price = $fumetto["price"];
            $newFumetto->series = $fumetto["series"];
            $newFumetto->sale_date = $fumetto["sale_date"];
            $newFumetto->type = $fumetto["type"];
            $newFumetto->save();

        }
    }
}
