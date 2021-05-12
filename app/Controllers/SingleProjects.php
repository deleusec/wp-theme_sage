<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleProjects extends Controller
{
    public function project(){
        return (object) [
            'name' => get_field('name', get_the_ID()),
            'description' => get_field('description', get_the_ID()),
            'collab' => get_field('collaborateurs', get_the_ID()),
            'url' => get_field('url', get_the_ID()),
        ];
    }
}
