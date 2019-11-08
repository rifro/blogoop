<?php
include("includes/header.php");
if (!$session->is_signed_in()) {
    redirect("login.php");
}

if(empty($_GET['id'])){

    redirect("photos.php");
}else{
    $photo = Photo::find_by_id($_GET['id']);

    if(isset($_POST['update'])){
        if($photo){

            $photo->title = $_POST['title'];
            $photo->caption = $_POST['caption'];
            $photo->alternate_text = $_POST['alternate_text'];
            $photo->description = $_POST['description'];
            $photo->update();
            redirect("photos.php");
        }
    }
}
include("includes/sidebar.php");
include("includes/content-top.php");

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Welkom op de edit photo pagina</h1>
            <form action="edit_photo.php?id=<?php echo $photo->id; ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" required class="form-control"

                                   value="<?php echo $photo->title; ?>">
                        </div>
                        <div class="form-group">
                            <a href="#" class="thumbnail"><img src="<?php echo $photo->picture_path(); ?>" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <input type="text" name="caption" class="form-control"
                                   value="<?php echo $photo->caption; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alternate_text">Alternate Text</label>
                            <input type="text" name="alternate_text" class="form-control"
                                   value="<?php echo $photo->alternate_text; ?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">
				<?php echo $photo->description; ?>
			    </textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="photo-info-box">
                            <div class="info-box-header">
                                <h4>Save <span id="toggle" class="fas fa-arrow-up"></span></h4>
                            </div>
                            <div class="inside">
                                <div class="box-inner">
                                    <p class="text">
                                        <span class="fas fa-calendar">Uploaded on: April 01, 2020 @ 5:26</span>
                                    </p>
                                    <p class="text">
                                       <span class="data photo_id_box">Uploaded on: April 01, 2020 @ 5:26</span>
                                    </p>
                                    <p class="text">
                                        Photo Id: <span class="data photo_id_box">34</span>
                                    </p>
                                    <p class="text">
                                        Filename:<span class="data">image.jpg</span>
                                    </p>
                                    <p class="text">
                                        <label for="type">File Type:</label>
                                        <input readonly type="text" name="type" class="form-control" value="<?php echo $photo->type; ?>">
                                    </p>
                                    <p class="text">
                                        <label for="size">File Size:</label>
                                        <input readonly type="text" name="size" class="form-control" value="<?php echo $photo->size; ?>">
                                    </p>
                                </div>
                                <div class="info-box-footer">
                                    <div class="info-box-delete float-left">
                                        <a href="delete_photo.php?id=<?php echo  $photo->id; ?>" class="btn btn-danger btn-lg">Delete</a>
                                    </div>
                                    <div class="info-box-update float-right">
                                        <input type="submit" name="update" value="update" class="btn btn-primary btn-lg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
include("includes/footer.php");
?>