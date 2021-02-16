<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayBlogs = config("blog");

        foreach ($arrayBlogs as $item){

            $blog = new Blog();
            $blog->fill($item);
            $blog->save();


        }

    }
}
