<?php

// Global data available in all views extending app.blade.php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function currentTemplate()
    {
        return basename(get_page_template() ,'.blade.php');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function excerpt()
    {
        return get_the_excerpt();
    }

    public static function thumbnail()
    {
        return get_the_post_thumbnail_url();
    }


    public static function glideImage()
    {
        return str_replace('/app/uploads/', '/img/', get_the_post_thumbnail_url());
    }

    //Controlador para los posts

    function postsLoop()
    {
        $posts = get_posts([
            'post_type' => 'post',
        ]);
    
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID)    
            ];
        }, $posts);
    }
    
    function pageLoop()
    {
        $page = get_posts([
            'post_type' => 'page',
            'numberposts' => -1,
        ]);
    
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'), 
                'title' => get_the_title($post->ID),
            ];
        }, $page);
    }

    
    function proyectosLoop()
    {
        $proyecto = get_posts([
            'post_type' => 'proyectos',
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID),
                'id' => $post->ID,
                'categori-name' => get_the_category( $post->ID ),
            ];
        }, $proyecto);
    }

    function servicioLoop()
    {
        $servi = get_posts([
            'page' => 'servicios',
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID),
                'id' => $post->ID,
                'categori-name' => get_the_category( $post->ID ),
            ];
        }, $servi);
    }

    ////////////////
    function categoryLoop()
    {
        $category = get_terms([
            'taxonomy' => 'category',
            'numberposts' => -1,
        ]);

        return array_map(function ($term) {
            return [
                'title' => $term->name,
                'img' => get_field('icono_de_la_categoria', $term),
                'desc' => $term->description,
                'link' => get_term_link($term),
                'id' => $term->term_id,
                'slug' => $term->slug
            ];
        }, $category);
    }
}
add_post_type_support( 'page', 'excerpt' );


