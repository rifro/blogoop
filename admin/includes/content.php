<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <hr>
            <p>
                <?php
                  /*$user = new User();
                  $user->username = 'Emanuel';
                  $user->password = '1234';
                  $user->first_name = 'Emanuel';
                  $user->last_name = 'Degruyter';

                  $user->create();*/

                /*UPDATE
                  $user = User::find_user_by_id(1);
                  $user->last_name = "VANHOUTTE";
                  $user->password = 123456;
                  $user->update();*/

                /*DELETE
                 $user = User::find_user_by_id(7);
                 $user->delete();*/

              /* $user = User::find_user_by_id(200);
                $user->username = "TEST";
                $user->save();
	      */
	      
             /* $users = User::find_all();
              foreach($users as $user){
                  echo $user->username . "<br>";
              }

              $photos = Photo::find_all();
              foreach($photos as $photo){
                  echo $photo->title . "<br>";
              }

              $photo = new Photo();
              $photo->title = "Sam";
              $photo->description = "Lorem ipsum hond";
              $photo->size = 15;

              $photo->create();
	     */
	     
             echo INCLUDES_PATH;
             echo IMAGES_PATH;
                ?>

            </p>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->