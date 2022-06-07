<?php

// $title = get_the_title();
// $content = get_the_content();

// $newsCategories = get_the_terms(\get_post(), 'newsCategory');

render('views/templates/news-detail.php', compact('title','content', 'newsCategories'));


?>

<!doctype html>

<?php

$post = get_post();
// $id = $post->ID;

  $image = get_field('Image', get_post()->ID);
  $title = get_field('inputTitle', get_post()->ID);
  $content = get_field('inputContent', get_post()->ID);
  $score = get_field('Score', get_post()->ID);
  $url = get_field('inputURL', get_post()->ID);
  // var_dump($image);
?>
<div class="container" id="singlepage">
    <img src="<?php echo $image['url'] ?>" alt="">
    </div>
    <h1><?php echo $title ?></h1>
    <p><?php echo $content ?></p>
    <p>Score (<?php echo $score ?>)</p>
    <p>Url: <?php echo $url ?></p>
    </div>
