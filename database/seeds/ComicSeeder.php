<?php
use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $comics= config('db.comics');
            foreach($comics as $comic){
            $objcect = new Comic();
            $objcect->title = $comic['title'];
            $objcect->description = $comic['description'];
            $objcect->thumb = $comic['thumb'];
            $objcect->price = $comic['price'];
            $objcect->series = $comic['series'];
            $objcect->sale_date = $comic['sale_date'];
            $objcect->type = $comic['type'];
            $objcect->save();
        }
    }
}
