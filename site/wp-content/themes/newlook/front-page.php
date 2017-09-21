<?php
/**
 * Template Name: Inicio
 *
 * @package WordPress
 * @subpackage Newloook
 */


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render('front-page.twig', $context );
