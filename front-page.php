<?php
/*
 * Template Name: Home
 */

// $title = get_the_title();
// $content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));

$arguments = ['post_type' => 'reviews', 'numberposts' => 2, 'category' => 0, 'orderby' => 'date', 'order' => 'desc'];
$listOfReviews = get_posts($arguments);
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

<?php 
  foreach($listOfReviews as $review) {
  echo $review->post_title;
}
?>

<div class="row">
<?php
  foreach($listOfReviews as $review): ?>
  <?php
        $image = get_field('Image', get_post()->ID);
        $title = get_field('inputTitle', get_post()->ID);
        $content = get_field('inputContent', get_post()->ID);
        $score = get_field('Score', get_post()->ID);
        $url = get_field('inputUrl', get_post()->ID);
        // var_dump($image);
  ?>

  <div class="card">
    <div class="col-sm">
      <img src="<?php echo $image['url']; ?>">
        <h5><?php echo $title ?></h5>
        <p><?php echo $content ?></p>
        <p><?php echo $score ?> </p>
        <p><?php echo $url ?></p>
        <a href="<?php echo get_permalink($review); ?>">Lees meer</a>
      </div>
    </div>
  <?php endforeach ?>
  </div>