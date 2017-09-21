<?php
/**
 * Template Name: Contacto
 *
 * @package WordPress
 * @subpackage Newloook
 */


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render( array( 'page-contacto.twig', 'page.twig' ), $context );
