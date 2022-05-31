<?php

$title = 'Reviews archief';

$arguments = ['post_type' => 'reviews', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$newsItemCollection = get_posts($arguments);

render('views/templates/reviews-archive.php', compact('title', 'newsItemCollection'));