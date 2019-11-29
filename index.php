<?php
include("includes/header.php");
?>
<div class="container-fluid">
   <div class="row">
       <div class="col-12">
           <h1>Home page photos</h1>
           <?php foreach ($photos as $photo) ?>
    <div class="col-3">
        <a href="photo.php?id=<?php echo $photo->id; ?>">
            <img src="" alt="" class="img-fluid">

        </a>
        ?>
    </div>
       </div>
   </div>
</div>
<?php
include("includes/footer.php");
?>