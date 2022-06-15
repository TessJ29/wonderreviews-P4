<?php
/*
 * Template Name: Home
 */

// $title = get_the_title();
// $content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));

$arguments = ['post_type' => 'reviews', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'desc'];
$listOfReviews = get_posts($arguments);
?>

<!doctype html>
<header>
    <nav> 
        <ul>   
        <img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/logo_transparent.png" class="logo" alt="">   
            <li><a href="http://www.wonder-reviews.local/">Home</a></li>
            <li><a href="http://www.wonder-reviews.local/overzicht/ ">Overzicht</a></li>
            <li><a href="http://www.wonder-reviews.local/wp-admin">Inloggen</a></li>
        </ul>
    </nav>
</header>
<img src="http://www.wonder-reviews.local/wp-content/uploads/2022/05/homepage-banner-e1652883073752.png" class="banner" alt="">

<h1>Laatste reviews</h1>


<div class="row">
<?php
  foreach($listOfReviews as $review): ?>
  <?php
        $id = $review->ID;
        $image = get_field('Image', $id);
        $title = get_field('inputTitle', $id);
        $content = get_field('inputContent', $id);
        $score = get_field('Score', $id);
        $url = get_field('inputUrl', $id);
  ?>
    <div class="card">
      <div class="col-sm">
        <img class="review" src="<?php echo $image['url']; ?>">
          <h3><?php echo $review->post_title; ?></h3>
          <p>Score: (<?php echo $score ?>) </p>
          <p><?php echo $url ?></p>
          <a class="lees-meer" href="<?php echo get_permalink($review); ?>">Lees meer</a>
        </div>
      </div>
  <?php endforeach ?>
  </div>