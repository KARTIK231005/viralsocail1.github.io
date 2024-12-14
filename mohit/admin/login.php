<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/project_viralite/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="http://localhost/project_viralite/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css"></script>
    <title>Admin</title>
</head>
<body>
    <div class="container-fluid my-4">
    <div class="row d-flex justify-content-center align-middle" >
        <div class="col-sm-6  border bg-light " style="background-image: url('http://localhost/project_viralite/assets/images/aboutus.jpg'); margin-top: 50px;">

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = strip_tags(trim($_POST['username']));
                $password = strip_tags(trim($_POST['password']));
                
                // Corrected the comparison operator for password
                if($username == "mohitcyber@1122domian.com" && $password == "cyberkey852") {
                    
                    session_start(); 

                    $_SESSION['admin'] = $username; 

                    // Corrected the header function to remove the space after "location"
                    header("Location: http://localhost/project_viralite/mohit/information/User.php");
                    exit(); // Added exit to stop script execution after redirection
                }
            }
            ?>


            <form class="row g-3 p-5" action="<?=htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <div class="col-md-12">
                  <label for="inputEmail4" class="form-label text-white">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" name="username">
                </div>
                <div class="col-md-12">
                  <label for="inputPassword4" class="form-label text-white">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" name="password">
                </div>

                <div class="col-12 my-4">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </form>
            </div>
            
        </div>
    </div>
        
    </div>
</body>
</html>