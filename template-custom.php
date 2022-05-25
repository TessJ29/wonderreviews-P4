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
