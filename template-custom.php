<?php
/*
 * Template Name: Home
 */

$title = get_the_title();
$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));


?>


<!doctype html>
<header>
    <nav>
        <div id="logo">
            <img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/logo_transparent.png" class="logo" alt="">
        </div>    
        <ul>        
            <li><a href="http://www.wonder-reviews.local/homepage/">Home</a></li>
            <li><a href="http://www.wonder-reviews.local/overzicht/ ">Overzicht</a></li>
        </ul>
    </nav>
</header>
<img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/homepage-banner.png" class="banner" alt="">

<h1>Laatste reviews</h1>

<!-- Cards met de posts -->
<div class="container">
  <div class="card">
    <img src="" alt="">
    <div class="card-title">afdsafhdakfhdlkahfk</div>
    <div class="card-content">fdhajfdkafhdjaf</div>
  </div>
</div>
<script>
      window.addEventListener('scroll', function() {
        var scrollY = window.scrollY;

        if ( window.scrollY > 80 ) {
          document.querySelector('nav').classList.add('small');
        } else {
          document.querySelector('nav').classList.remove('small');
        }
      });
    </script>
