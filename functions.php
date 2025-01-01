<?php

// Theme setup
function smartpoolplayer_setup()
{
  add_theme_support('title-tag', 'post-thumbnails');
}
add_action('after_setup_theme', 'smartpoolplayer_setup');

// Load assets
function smartpoolplayer_assets()
{
  wp_enqueue_style('main-styles', get_parent_theme_file_uri('dist/css/styles.css'));
  wp_enqueue_script('main-scripts', get_parent_theme_file_uri('dist/js/main.js'), array(), null, true);

  // Load quiz scripts if on those pages
  if (is_page('billiard-ball-color-quiz')) {
    wp_enqueue_script('quiz-script', get_parent_theme_file_uri('dist/js/quiz.js'), array(), null, true);
  }
}
add_action('wp_enqueue_scripts', 'smartpoolplayer_assets');
