<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">
    <h2 class="site-title"><a href="<?php bloginfo('wpurl') ?>"><?php bloginfo('title') ?></a></h2>

    <nav class="main-nav">
      <ul class="main-nav__list">
        <li class="main-nav__item">
          <a class="main-nav__link" href="/">Home</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link" href="/quizzes">Quizzes</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link" href="/tips">Tips</a>
        </li>
      </ul>
    </nav>