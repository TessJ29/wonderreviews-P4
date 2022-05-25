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
        <ul>   
        <img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/logo_transparent.png" class="logo" alt="">   
            <li><a href="http://www.wonder-reviews.local/homepage/">Home</a></li>
            <li><a href="http://www.wonder-reviews.local/overzicht/ ">Overzicht</a></li>
        </ul>
    </nav>
</header>
<img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/homepage-banner-e1652883073752.png" class="banner" alt="">

<h1>Laatste reviews</h1>

<!-- Cards met de posts -->
<div class="container" id="cards">
  <div class="card-1">
    <img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/tikibad-wassenaar.png" alt="">
  </div>
  <div class="card-2">
    <img src="" alt="">
    <div class="card-title">pretpark</div>
    <div class="card-content"><?php $content = get_field('inputContent', get_post()->ID); echo $content ?></div>
  </div>
</div>

<div class="container" id="cards-row">
  <div class="card">
    <img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/efteling.png" alt="">
    <div class="card-title">De Efteling</div>
    <div class="card-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, a magni molestias illo possimus repellat ea sit aperiam reprehenderit aliquam, cumque consectetur, nostrum ratione totam autem dolorum? Doloremque, labore deleniti.</div>
  </div>

<div class="card">
    <img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/pretparkwalibi.png" alt="">
    <div class="card-title">Walibi Nederland</div>
    <div class="card-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi quidem aliquam officia quos nam, doloremque numquam molestias perspiciatis molestiae. Eum pariatur unde fugiat natus assumenda magnam, placeat temporibus a totam.</div>
  </div>

  <div class="card">
    <img src="" alt="">
    <div class="card-title">afdsafhdakfhdlkahfk</div>
    <div class="card-content">fdhajfdkafhdjaf</div>
  </div>
</div>

<?php

  $title = get_field('inputTitle', get_post()->ID);
  var_dump($title);
  // echo $title;
  $content = get_field('inputContent', get_post()->ID);
  var_dump($content);
  $score = get_field('Score', get_post()->ID);
  var_dump($score);
  $url = get_field('inputURL', get_post()->ID);
  var_dump($url);
?>