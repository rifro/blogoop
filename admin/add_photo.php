<?php
include("includes/header.php");
if (!$session->is_signed_in()) {
    redirect("login.php");
}
$message = "";
if (isset($_POST['submit'])) {
    $photo = new Photo();
    $photo->title = $_POST['title'];
    $photo->set_file($_FILES['file']);
    $photo->caption = $_POST['caption'];
    $photo->description = $_POST['description'];
    $photo->alternate_text = $_POST['alternate_text'];
    if ($photo->save()) {
        $message = "Photo uploaded successfully";
    } else {
        $message = join('<br>', $photo->errors);
    }
    // RR! Doen we nog iets met deze message?
}

include("includes/sidebar.php");
include("includes/content-top.php");

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="page-header">
                Foto toevoegen
            </h1>
            <form action="add_photo.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="caption">Caption</label>
                    <input type="text" name="caption" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10">
		    </textarea>
                </div>
                <div class="form-group">
                    <label for="alternate_text">Alternate Text</label>
                    <input type="text" name="alternate_text" class="form-control"
                    >
                </div>
                <input type="submit" name="add" value="Add photo" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>