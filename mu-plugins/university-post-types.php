<?php

function university_post_types() {
  // Campus Post type
  register_post_type('campus', array(
    'capability_type' => 'campus',   // establish event post type as a user permission
    'map_meta_cap' => true,         // requests wp to enforce capability_type permissions
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'campuses'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Campuses',
      'add_new_item' => 'Add New Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus'
    ),
    'menu_icon' => 'dashicons-location-alt'
  ));

  // Event Post type
  register_post_type('event', array(
    'capability_type' => 'event',   // establish event post type as a user permission
    'map_meta_cap' => true,         // requests wp to enforce capability_type permissions
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  // Program Post Type
  register_post_type('program', array(
    'supports' => array('title'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    ),
    'menu_icon' => 'dashicons-awards'
  ));


  // Professor Post Type
  register_post_type('professor', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));

  // Note Post Type
  register_post_type('note', array(
    'capability_type' => 'note',   // establish note post type as a user permission
    'map_meta_cap' => true,        // requests wp to enforce capability_type permissions
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'Notes',
      'add_new_item' => 'Add New Note',
      'edit_item' => 'Edit Note',
      'all_items' => 'All Notes',
      'singular_name' => 'Note'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog'
  ));

  // Like Post Type
  register_post_type('like', array(
    'supports' => array('title'),
    'public' => false,
    'show_ui' => true, 
    'labels' => array(
      'name' => 'Likes',
      'add_new_item' => 'Add New Like',
      'edit_item' => 'Edit Likee',
      'all_items' => 'All Likes',
      'singular_name' => 'Like'
    ),
    'menu_icon' => 'dashicons-heart'
  ));

  // Slide post type
    register_post_type('slide', array(
    'capability_type' => 'slide',   // establish event post type as a user permission
    'map_meta_cap' => true,         // requests wp to enforce capability_type permissions
    'supports' => array('title', 'editor', 'thumbnail', 'linkto'),
    'rewrite' => array('slug' => 'slides'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Slides',
      'add_new_item' => 'Add New Slide',
      'edit_item' => 'Edit Slide',
      'all_items' => 'All Slides',
      'singular_name' => 'Slide'
    ),
    'menu_icon' => 'dashicons-images-alt2'
  ));

}

add_action('init', 'university_post_types');