<?php
include("includes/header.php");
if (!$session->is_signed_in()) {
    redirect('login.php');
}


$user = new User();
if (isset($_POST['submit'])) {
    if ($user) {
        $user->username = $_POST['username'];
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->password = $_POST['password'];
        $user->set_file($_FILES['user_image']);
        $user->save_user_and_image();
    }
}
//$users = user::find_all();


include("includes/sidebar.php");
include("includes/content-top.php");

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <h1>Welkom op de user toevoegen pagina</h1>

            <form action="add_user.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 ">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control"

                        </div><!--
                            <div class="form-group">
                                <a class="thumbnail" href="#"> <img src="<?php /*echo $user->picture_path(); */?>" height="150" width="300" alt="">
                                </a>
                            </div>-->
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control"

                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" >
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user_image">User Image</label>
                            <input type="file" name="user_image" class="form-control">
                        </div>
                        <input type="submit" name="submit" value="Add User" class="btn btn-primary">

                    </div>
                </div>


                   </form>
        </div>
    </div>
</div>
<?php
include ("includes/footer.php");

?>}