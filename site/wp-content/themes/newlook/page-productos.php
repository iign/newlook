<?php
/**
 * Template Name: Productos
 *
 * @package WordPress
 * @subpackage Newloook
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

$args = array(
                'post_type' => 'product',
                'orderby' => 'menu_order',
                'order' => 'ASC' ,
                'posts_per_page' => -1
            );
$context['products'] = Timber::get_posts($args);

Timber::render(array( 'page-productos.twig', 'page.twig' ), $context);
