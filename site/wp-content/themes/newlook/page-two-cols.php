<?php
/**
 * Template Name: Dos columnas
 *
 * @package WordPress
 * @subpackage Newloook
 */


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-two-cols.twig', 'page.twig' ), $context );
