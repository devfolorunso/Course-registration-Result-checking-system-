<?php
       if (isset($_FILES['image'])) {
              $allowedFile =  array("jpg","JPG", "PNG","JPEG", "png", "jpeg");
              $upload = new Upload($_FILES['image'], "studentimg/", 10000000000 ,$allowedFile);
              $image = $upload->GetFile();
          }

      if (Input::exists()) {
          if (Token::check(Input::get('token'))) {
            try{

                $user->update(array(
                    'studentimg' => $image
                ));?>
                <script>

                Swal.fire({
                  type: 'success',
                  title: 'Profile Picture Changed!!',
                  showConfirmButton: false,
                })

                  setTimeout(function(){
                      window.location.href= "complete-profile.php";
                      }, 700);

                      </script>
                <?php
              }
                catch(Exception $e)
                {
                die($e->getMessage());
                }
          }
      }
      ?>