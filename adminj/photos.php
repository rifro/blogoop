<?php
include("includes/header.php");
if(!$session->is_signed_in()){
    redirect('login.php');
}
$photos = Photo::find_all();


include("includes/sidebar.php");
include("includes/content-top.php");

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>PHOTOS <a class="btn btn-primary" href="add_photo.php">New Photo</a></h2>
            <table class="table table-header">
                <thead>
                <tr>
                    <th>Photo</th>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Caption</th>
                    <th>File Name</th>
                    <th>Alternate Text</th>
                    <th>Size</th>
                    <th>Wijzig?</th>
                    <th>Delete?</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($photos as $photo) :                ?>
                <tr>
                    <td><img src=" <?php echo $photo->picture_path(); ?>" height="40" width="40" alt=""></td>
                    <td class="d-flex align-self-stretch"><?php echo $photo->id; ?></td>
                    <td><?php echo $photo->title; ?></td>
                    <td><?php echo $photo->caption; ?></td>
                    <td><?php echo $photo->filename; ?></td>
                    <td><?php echo $photo->alternate_text; ?></td>
                    <td><?php echo $photo->size; ?></td>
                    <td><a class="btn btn-danger rounded-0" href="edit_photo.php?id=<?php echo $photo->id; ?>" ><i class="far fa-edit"></i></a></td>
                    <td><a class="btn btn-danger rounded-0" href="delete_photo.php?id=<?php echo $photo->id; ?>" ><i class="far fa-trash-alt"></i></a></td>
                </tr>
                <?php endforeach;  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>







<?php
include("includes/footer.php");
?>