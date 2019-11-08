<?php
include("includes/header.php");



if(!$session->is_signed_in()){
    redirect('login.php');
}

if(empty($_GET['id'])){
    redirect('photos.php');
}

/*ophalen uit database*/
$photo = Photo::find_by_id($_GET['id']);
if($photo){
    $photo->delete();
    redirect('photos.php');
}else{
    redirect('photos.php');
}


include("includes/sidebar.php");
include("includes/content-top.php");
?>
<h1>Welkom delete pagina!</h1>

<?php
include("includes/footer.php");

?>