<?php
include("includes/header.php");
if (!$session->is_signed_in()) {
    redirect('login.php');
}

/*
if (empty($_GET['id'])){
    redirect('photos.php');
}
*/

$users = User::find_all();
include("includes/sidebar.php");
include("includes/content-top.php");
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>USERS<abbr title="New user"><a class="btn btn-primary" href="add_user.php"> <i
                                    class="fas fa-user-plus"></i></a></abbr></h2>
                <table class="table table-header">
                    <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Edit?</th>
                        <th>Delete?</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><img src="<?php echo $user->image_path_and_placeholder(); ?>" alt="" height="62"
                                     width="62"></td>
                            <td><?php echo $user->id; ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td><?php echo $user->first_name; ?></td>
                            <td><?php echo $user->last_name; ?></td>
                            <td><a class="btn btn-warning rounded-0"
                                   href="edit_user.php?id=<?php echo $user->id; ?>">
                                    <i class="fas fa-edit"></i></a></td>
                            <td>
                                <a class="btn btn-danger rounded-0"
                                   href="delete_user.php?id=<?php echo $user->id; ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
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