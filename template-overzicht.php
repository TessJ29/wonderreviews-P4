<?php
/*
 * Template Name: Overzicht
 */

$title = get_the_title();
$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));


?>

<!doctype html>
<!-- Overzichts pagina -->
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
<div class="row">
    <div class="card">
        <?php
        $image = get_field('Image', get_post()->ID);
        $title = get_field('inputTitle', get_post()->ID);
        $content = get_field('inputContent', get_post()->ID);
        $score = get_field('Score', get_post()->ID);
        $url = get_field('inputURL', get_post()->ID);
        var_dump($image);
        ?>

        <img class="singlepage-img" src= <?php echo $image['url'] ?> >
        <h5><?php echo $title ?></h5>
        <p><?php echo $content ?></p>
        <p><?php echo $score ?> </p>
        <p><?php echo $url ?></p>
    </div>
</div>
