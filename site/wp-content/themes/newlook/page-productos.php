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
$products = Timber::get_posts($args);
$context['products'] = $products;

$prod = $products[0];

// Redirect to first product.
header("Location: {$prod->link}");

//Timber::render(array( 'page-productos.twig', 'page.twig' ), $context);
