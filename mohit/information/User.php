<?php
require($_SERVER['DOCUMENT_ROOT'] . '/project_viralite/connection/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/project_viralite/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="http://localhost/project_viralite/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css"></script>
    <title>user_data</title>
</head>
<body>
    <div class="container-fluid ">
        <div class="row py-2 d-flex justify-content-center">
    <div class="col-sm-10 text-center fs-1"> welcome to this page</div>
               
                <?php
                    session_start(); // Add this at the very beginning of the file

                    if (isset($_SESSION['admin'])) {
                        // echo "The session is set. Admin: " . $_SESSION['admin'];
                        $query = $conn->prepare("SELECT * FROM query_data");
                        $query->execute();
                        
                        $data = $query->fetchAll(PDO::FETCH_ASSOC); // Fetch all the data as an associative array
                        
                        if ($data) {
                            foreach ($data as $row) {

                                echo'
                                    <div class="col-md-3 my-2 align-center">
                                    <div class="card" style="width: 14rem;">
                                    <div class="card-body ">
                                    <h5 class="card-title fw-bold fs-2">'.$row["name"] .'</h5>
                                        <p class="card-text fw-bold">'.$row["email"].'</p>
                                        <p class="card-text fw-bold">'.$row["number"].'</p>
                                        <p class="card-text fw-bold">'.$row["query"].'</p>
                                    </div>
                                    </div>
                                  </div>';
                            }
                        } else {
                            echo "No data found.";
                        }
                        
                    } else {
                        echo '<div class="col-sm-10 text-center fs-4">Please login 👉 <a href="http://localhost/project_viralite/mohit/admin/login.php">login</a></div>';
                    }
                    ?>


            </div>
    </div>
</body>
</html>