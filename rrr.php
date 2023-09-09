<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <style>
body {
  background-image: url('flower.jpg');
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.php">
    <title>Hello, world!</title>
  </head>
  <body>

    <ul>
              <li><div id="google_translate_element"></div>
                <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                <script>
                  function googleTranslateElementInit(){
                    new google.translate.TranslateElement(
                      {pageLanguage: 'en'},
                      'google_translate_element'
                    );
                  }
                </script></li>
             
            </ul>
    <div class= "container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><center> DONATE CROP RESIDUE</center></h4>
                    </div>  
                <div class="card-body">
                <?php
                if(isset($_SESSION['status']) && $_SESSION != '')
                {
                     ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?PHP echo($_SESSION['status']); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            unset($_SESSION['status']);
            }
            ?>


  <form action="code.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="stud_name" class="form-control"placeholder="Enter Name" required><br>
        </div>
        <div class="form-group">
        <input type="text" name="stud_addr" class="form-control"placeholder="Address" required><br>
        </div>
        <div class="form-group">
        <input type="text" name="stud_phone" class="form-control" placeholder="Enter Phone Number" required><br>
    </div>
    <div class="form-group">
     <input type="text" name="residue" class="form-control"placeholder="Type ofResidue"required><br>
    </div>
      <div class="form-group">
        <input type="text" name="stud_crop" class="form-control" placeholder="Specify the Crop" required><br>
    </div>
    <div class="form-group">
        <input type="text" name="stud_quan" class="form-control" placeholder="Quantity Available" required><br>
    </div>
    <div class="form-group">
            <label for =""> Upload Image</labe1>
            <input type="file" name="stud_image" class="form-control" required><br>
        </div>
        <div class="form-group">
            <button name="save_stud_image"class="btn btn-primary">SUBMIT </button>
        </div>
    </form>
             </div>
          </div>
       </div>
   </div>
</div></section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

  </body>
</html> 