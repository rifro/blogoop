<?php
include("includes/header.php");
if (!$session->is_signed_in()) {
    redirect("login.php");
}

if (empty($_GET['id'])) {
    redirect("users.php");
}

$user = User::find_by_id($_GET['id']);
if (isset($_POST['update'])) {
    if ($user) {
        $user->username   = $_POST['username'];
        $user->first_name = $_POST['first_name'];
        $user->last_name  = $_POST['last_name'];
        $user->password   = $_POST['password'];
        if (empty($_FILES['user_image'])) {
            $user->save(); // doet move pic + update
        } else {
            $user->set_file($_FILES['user_image']);
            $user->save_user_and_image();
            $user->save();
            redirect("edit_user.php?id={$user->id}"); // RR! compare edit_photo.php, waarom hier niet naar users.php?
        }
    }
}
include("includes/sidebar.php");
include("includes/content-top.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Welkom op de edit user pagina</h1>
            <form action="edit_user.php?id=<?php echo $photo->id; ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 ">
                        <div class="form-group">
                                <label for="username">ID</label>
                                <input type="text" readonly name="id" class="form-control" value="<?php echo $user->id; ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" 
				value="<?php echo $user->username; ?>">
                            </div>
                            <div class="form-group">
                                <label for="first name">First Name</label>
                                <input type="text" name="first_name" class="form-control" 
				value="<?php echo $user->first_name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="last name">Last Name</label>
                            <input type="text" class="form-control" name="last_name"
                                   value="<?php echo $user->last_name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" 
				value="<?php echo $user->password; ?>">
                            </div>
                        <div class="form-group">
                            <img src="<?php echo $user->image_path_and_placeholder(); ?>" alt="" class="img-fluid" width="40" height="40">
                            <label for="user_image">User Image</label>
                            <input type="file" name="user_image" class="form-control">
                        </div>
                        <input type="submit" name="edit" value="Edit User" class="btn btn-primary">
                        <a class="btn btn-danger" href="delete_user.php?id=<?php echo $user->id; ?>">delete user</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>

