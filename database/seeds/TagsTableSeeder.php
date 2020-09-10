<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tags = [
         'Energia',
         'Amore',
         'Paura',
         'Tempo libero',
         'Relax',
       ];

       foreach ($tags as $tag) {
         $new_tag = new Tag();
         $new_tag->name = $tag;
         $new_tag->save();
       }
    }
}
