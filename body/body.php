<?php
include_once('header/header.php');
require_once('function.php');

echo "<main>";
echo "<div class='container'>";
echo "<div class='row align-items-start'>";
    $posts = carregarPosts();
if (count($posts) > 0){
    foreach ($posts as $indice => $valor) {
        echo "<div class='col-sm-12 col-md-6 my-1'>";
        echo "<div class='card mb-4 box-shadow h-md-250'>";
        echo "<div class='card-body d-flex flex-column justify-content'>";
        echo "<strong class='". $posts[$indice]['tipo'] ."'>" . $posts[$indice]['chapeu'] . "</strong>";
        echo "<a href='class=" . $posts[$indice]['link'] . "'><h3 class='mb-0 text-dark'>" . $posts[$indice]['titulo'] . "</h3></a>";
        echo "<p class='card-text'>" . $posts[$indice]['linhafina'] . "</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}
echo "</div>";
echo "</div>";
echo "</main>";


include_once('footer/footer.php');
?>