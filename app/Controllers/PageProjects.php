<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageProjects extends Controller
{
    public function projects(){
        $args = [
            'posts_per_page' => -1,
            'offset' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'projects'
        ];

        $the_query = new \WP_QUERY($args);
        $projects = [];

        if ($the_query->post_count >0){
            $projects = array_map(function($project){
                $image = get_field('image_project', $project);
                
                $url = $image['url'];
                $alt = $image['alt'];

                
                $name = get_field('name', $project);

            return(object)[
                'url' => $url,
                'alt' => $alt,
                'name' => $name,
                'permalink' => get_post_permalink($project)
            ];
            }, $the_query->posts);

            wp_reset_postdata();
        }
        return $projects;
    }
}
