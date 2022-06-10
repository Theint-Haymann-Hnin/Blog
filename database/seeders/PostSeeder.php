<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'category_id' => 1,
            'image' => '',
            'title' => 'What is Html',
            'content' => 'The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript. ',
        ]);
        DB::table('posts')->insert([
            'category_id' => 2,
            'image' => '',
            'title' => 'What is Css',
            'content' => 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. Wikipedia',
        ]);
        DB::table('posts')->insert([
            'category_id' => 3,
            'image' => '',
            'title' => 'What is Javascript',
            'content' => 'JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. Over 97% of websites use JavaScript on the client side for web page behavior, often incorporating third-party libraries. Wikipedia',
        ]);
        DB::table('posts')->insert([
            'category_id' => 4,
            'image' => '',
            'title' => 'What is Bootstrap',
            'content' => 'Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains HTML, CSS and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components. Wikipedia',
        ]);
        DB::table('posts')->insert([
            'category_id' => 5,
            'image' => '',
            'title' => 'What is Vue',
            'content' => 'Vue.js is an open-source model–view–viewmodel front end JavaScript framework for building user interfaces and single-page applications. It was created by Evan You, and is maintained by him and the rest of the active core team members. Wikipedia',
        ]);
    }
}
