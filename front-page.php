<?php
/*
 * Template Name: Home
 */

// $title = get_the_title();
// $content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));

?>


<!doctype html>
<header>
    <nav> 
        <ul>   
        <img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/logo_transparent.png" class="logo" alt="">   
            <li><a href="http://www.wonder-reviews.local/">Home</a></li>
            <li><a href="http://www.wonder-reviews.local/overzicht/ ">Overzicht</a></li>
        </ul>
    </nav>
</header>
<img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/homepage-banner-e1652883073752.png" class="banner" alt="">

<h1>Laatste reviews</h1>

<div class="row">
  <div class="card">
    <?php
    $image = get_field('Image', get_post()->ID);
    $title = get_field('inputTitle', get_post()->ID);
    $content = get_field('content', get_post()->ID);
    $score = get_field('score', get_post()->ID);
    $url = get_field('inputURL', get_post()->ID);

    ?>
    <img src= <?php echo $image['url']?>>
  </div>
</div>

