<?php
session_start();

function carregarPosts()
{
    $arquivoPosts = "json/posts.json";

    if (file_exists($arquivoPosts)) {
        $jsonPosts = file_get_contents($arquivoPosts);
        $arrayPosts = json_decode($jsonPosts, true);

        return $arrayPosts["posts"];
    }
}
