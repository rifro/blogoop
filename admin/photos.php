<?php
include("includes/header.php");
if(!$session->is_signed_in ()){
    redirect ('login.php');
}

/*
if (empty($_GET['id'])){
    redirect('photos.php');
}
*/

$photos = Photo::find_all();
include("includes/sidebar.php");
include("includes/content-top.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>PHOTOS <a class="btn btn-primary" href="add_photo.php">New photo</a></h2>
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
                    <th>Comments</th>
                    <th>Wijzig?</th>
                    <th>Delete?</th>
                    <th>View?</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($photos as $photo) :
                ?>
                    <tr>
                        <td><img src="<?php echo $photo->picture_path();?>" height="62" width="62" alt=""></td>
                        <td><?php echo $photo->id; ?></td>
                        <td><?php echo $photo->title; ?></td>
                        <td><?php echo $photo->caption; ?></td>
                        <td><?php echo $photo->filename; ?></td>
                        <td><?php echo $photo->alternate_text; ?></td>
                        <td><?php echo $photo->size; ?></td>
                            <td>
                                <a href="comments_photo.php?id=<?php echo $photo->id; ?>">
                                    <?php
                                        $comments = Comment::find_the_comments ($photo->id);
                                        echo count($comments);
                                    ?>
                                </a>
                            </td>
                        <td><a class="btn btn-danger rounded-0"
                               href="delete_photo.php?id=<?php echo $photo->id; ?>">
                                <i class="far fa-trash-alt"></i>
                              </a>
			</td>
                        <td><a class="btn btn-warning rounded-0"
                               href="edit_photo.php?id=<?php echo $photo->id; ?>">
                                <i class="fas fa-edit"></i>
                            </a>
			</td>
                        <td><a href="../photo.php?id=<?php echo $photo->id; ?>" class="btn btn-danger rounded-0"><i class="fas fa-eye"></i></a></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>