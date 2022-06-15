<?php

// $title = get_the_title();
// $content = get_the_content();
$newsCategories = get_the_terms(\get_post(), 'reviewsCategory');

// var_dump($newsCategories);
render('views/templates/news-detail.php', compact('title','content', 'newsCategories'));

$arguments = ['post_type' => 'Reviews', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'desc'];
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

<?php

  $image = get_field('Image', get_post()->ID);
  $title = get_field('inputTitle', get_post()->ID);
  $content = get_field('inputContent', get_post()->ID);
  $score = get_field('Score', get_post()->ID);
  $url = get_field('inputURL', get_post()->ID);

?>
<div class="container" id="singlepage">
    <div class="container" id="singlepage1">
        <h1><?php echo $title ?></h1>
        <p><?php echo $content ?></p>
        <p>Score (<?php echo $score ?>)</p>
        <h4>Link van website: </h4><?php echo $url ?> <br>
    </div>
        <img class="review-pagina" src="<?php echo $image['url'] ?>" alt="">
</div>
