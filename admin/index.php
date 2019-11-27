<?php
    include("includes/header.php");
    if(!$session->is_signed_in()){
        redirect("login.php");
    }

    $aantalUsers = User::find_all();
    $aantalComments = Comment::find_all();
    $aantalPhotos = Photo::find_all();

    include("includes/sidebar.php");
    include("includes/content-top.php");
    include("includes/content.php");
    include("includes/footer.php");
?>







