<!doctype html>
<html lang="en">
  <head>
    <style>
body {
  background-image: url('residue.jpg');
}
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Image Crud</title>
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
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header bg-info">
                    <h4 class="text-white"><center> CROP RESIDUE DONATION DATA </center> </h4>
                </div>
            <div class="card-body">
                <?php
                $conn = mysqli_connect("localhost","root","","farmer");
                $query = "SELECT * FROM form";
                $query_run = mysqli_query($conn,$query);
                ?>
             <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FARM_NAME</th>
                        <th>FARM-ADDR</th>
                        <th>FARM_PH</th>
                        <th>RESIDUE</th>
                        <th>FARM_CROP</th>
                        <th>QUANTITY</th>
                        <th>FARM_IMAGE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(mysqli_num_rows($query_run)>0) 
                    {
                        foreach($query_run as $row)
                        {
                          ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['stud_name']; ?></td>
                            <td><?php echo $row['stud_addr']; ?></td>
                            <td><?php echo $row['stud_phone']; ?></td>
                            <td><?php echo $row['residue']; ?></td>
                            <td><?php echo $row['stud_crop']; ?></td>
                            <td><?php echo $row['stud_quan']; ?></td>
                            <td>
                               <img src="<?php echo "upload/".$row['stud_image'];?>"width="100px" alt="image"> 
                            </td>
                          </tr>
                          <?php
                        }
                    }
                    else{
                        ?>
                        <tr>
                            <td>NO OF RECORD AVAILABLE</td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                    </tr>
                </tbody>
             </table>
            </div>
              </div>  

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>