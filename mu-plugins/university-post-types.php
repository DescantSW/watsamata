<?php

function university_post_types() {
  // Campus post type
  register_post_type('campus', array(
    'capability_type' => 'campus',   // establish event post type as a user permission
    'map_meta_cap' => true,         // requests wp to enforce capability_type permissions
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'campus'),
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
  
  // Events post type
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
  
  // Programs post type
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
    'menu-icon' => 'dashicons-awards'
  ));
  
  // Professor post type
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
    'menu-icon' => 'dashicons-welcom-learn-more'
  ));

}
add_action('init', 'university_post_types');
