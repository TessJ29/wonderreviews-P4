<?php

// $title = get_the_title();
// $content = get_the_content();

// $newsCategories = get_the_terms(\get_post(), 'newsCategory');

render('views/templates/news-detail.php', compact('title','content', 'newsCategories'));

$arguments = ['post_type' => 'Reviews', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'desc'];
$listOfReviews = get_posts($arguments);

?>

<!doctype html>

<?php

// $id = $post->ID;

  $image = get_field('Image', get_post()->ID);
  $title = get_field('inputTitle', get_post()->ID);
  $content = get_field('inputContent', get_post()->ID);
  $score = get_field('Score', get_post()->ID);
  $url = get_field('inputURL', get_post()->ID);
  // var_dump($url);
?>
<div class="container" id="singlepage">
    <img class="review-pagina" src="<?php echo $image['url'] ?>" alt="">
    <h1><?php echo $title ?></h1>
    <p><?php echo $content ?></p>
    <p>Score (<?php echo $score ?>)</p>
    <p>Link naar website: </p><a href="<?php echo $url ?>"><?php echo $url ?></a>
</div>
