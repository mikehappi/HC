<?php
    /*
Template Name: Home Page
*/

get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <?php
        $args = array(
          'post_type' => 'page',
          'post__in' => array( 81, 83 ) //list of page_ids
        );
        $page_query = new WP_Query( $args );
        if( $page_query->have_posts() ) :
        echo '<div class="pages-on-page">';
        //print any general title or any header here//
        while( $page_query->have_posts() ) : $page_query->the_post();
        echo '<div class="page-on-page" id="page_id-' . $post->ID . '">';
        //print any output you want per page//
        echo '</div>';
        endwhile;
        echo '</div>';
        else:
        //optional text here is no pages found//
        endif;
        wp_reset_postdata();
        ?>

    </div><!-- #content -->
</div><!-- #primary -->
