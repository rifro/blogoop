<?php
include("includes/header.php");
if (!$session->is_signed_in()) {
    redirect("login.php");

}

$user = new User();

if(isset($_POST['submit'])){
    if($user){
        $user->username= $_POST['username'];
        $user->first_name= $_POST['first_name'];
        $user->last_name= $_POST['last_name'];
        $user->password= $_POST['password'];
        $user->user_image = // RR!!
        $user->set_file($_FILES['user_image']);
        $user->save_user_and_image();

    }
    //redirect("users.php"); RR!! debug
}

/*if(empty($_GET['id'])){

    redirect("users.php");
}else{
   $user = user::find_by_id($_GET['id']);

    if(isset($_POST['update'])){
        if($user){

            $user->title = $_POST['title'];
            $user->caption = $_POST['caption'];
            $user->alternate_text = $_POST['alternate_text'];
            $user->description = $_POST['description'];
            $user->update();
            redirect("users.php");
        }
    }
}*/
?>

<?php include("includes/sidebar.php"); ?>
<?php include("includes/content-top.php"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-success" href="users.php">All Users</a>
            <h1>User toevoegen</h1>

            <form action="add_user.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="first_name">First name</label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last name</label>
                            <input type="text" name="last_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                <div class="form-group">
                    <label for="file">User image</label>
                    <input type="file" name="user_image" class="form-control">
                </div>
                        <div class="form-group">

                            <input class="btn btn-primary" type="submit" value="Create user" name="submit"
                                   class="form-control">
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>

