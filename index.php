<?php
require('connection/conn.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/project_viralite/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <script src="http://localhost/project_viralite/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css"></script>
  <title>Viral Light</title>
  <link rel="stylesheet" href="http://localhost/project_viralite/assets/customcss/homepage.css">

  <script>
        function validateForm() {
            var isValid = true;
            var username = document.getElementById('username').value.trim();
            var email = document.getElementById('email').value.trim();
            var number = document.getElementById('number').value.trim();
            var query = document.getElementById('query').value.trim();

            // Remove <script> tags
            username = username.replace(/<script>/gi, "");
            email = email.replace(/<script>/gi, "");
            number = number.replace(/<script>/gi, "");
            query = query.replace(/<script>/gi, "");

            // Reset error messages
            document.getElementById('usernameError').style.display = 'none';
            document.getElementById('emailError').style.display = 'none';
            document.getElementById('numberError').style.display = 'none';
            document.getElementById('queryError').style.display = 'none';
            document.getElementById('genericError').style.display = 'none';

            if (username === "" || email === "" || number === "" || query === "") {
                document.getElementById('genericError').style.display = 'block';
                isValid = false;
            }

            if (username.length > 50) {
                document.getElementById('usernameError').style.display = 'block';
                isValid = false;
            }

            if (email.length > 100) {
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            }

            if (!/^\d{10}$/.test(number)) {
                document.getElementById('numberError').style.display = 'block';
                isValid = false;
            }

            if (query.length > 200) {
                document.getElementById('queryError').style.display = 'block';
                isValid = false;
            }

            return isValid;
        }
    </script>



</head>

<body class="bg-secondary">

  <div class="container-fluid">

    <div class="row  ">
      <div class="col-sm-12">
        <img src="http://localhost/project_viralite/assets/images/brand_strategy.jpg" class="w-100 " alt="...">
        <div class=" w-50 position-absolute bottom-50 start-0 home-note">
          <h1 class="font-monospace fs-1 text-white  bg-danger">
            "READY TO MAKE<br>
            YOUR BRAND VIRAL<br>
            WITH VIRALIGHT!"
          </h1>
          <h3 class="fs-4 bg-white fw-bold text-primary">
            UNTANGLE THE ENGAGEMENT WITH US
          </h3>
        </div>
      </div>
    </div>

    <!-- new section  -->

    <div class="row about d-flex justify-content-between bg-danger">
      <div class="col-sm-5 my-4 ">
        <p class="fs-1 fw-bold text-white">
          ABOUT US
        </p>
        <p class="fs-4 text-white">
          Viralight.social, we're experts in modern digital
          strategies, harnessing the power of trending
          content and innovative campaigns. From
          creating Instagram-worthy experiences to
          igniting buzz-worthy discussions, we excel in
          making your brand stand out in today's
          dynamic social media landscape. Let's turn
          your brand into a trendsetter that captivates
          audiences everywhere!
        </p>
      </div>
      <div class="col-sm-6 mb-4 mt-5">
        <img src="http://localhost/project_viralite/assets/images/middle.png" class="" style="width: 100%; ">
      </div>
      <div class="col-12 mb-5">
        <p class="fs-4 text-white text-start">
          Social media is at the heart of today's marketing landscape, and we excel at creating content that sparks
          engagement and builds a loyal community around your brand. Think of us as your brand’s social media
          matchmakers! With performance marketing, we use data-driven insights to optimize campaigns, ensuring
          every dollar spent delivers maximum returns and drives your growth forward. Our influencer marketing
          connects you with influencers who genuinely align with your brand values, forging authentic partnerships
          that boost trust and drive sales. We promise not to pair you with influencers who ignore your posts!<br><br>
          A robust online presence is crucial, and our website management services ensure your digital footprint is
          not just visually stunning but also user-friendly and high-performing. We provide tailored business growth
          strategies that help you scale efficiently and sustainably. At the heart of our approach is a commitment to
          presenting your message and identity in the most creative and impactful way possible. Partner with us, and
          together, let’s make your brand shine brightly in today's fast-paced digital world!
        </p>
      </div>
    </div>

    <!-- WHAT WE DO section  -->

    <div class="row about d-flex justify-content-evenly my-2">
      <div class="col-sm-12">
        <img src="http://localhost/project_viralite/assets/images/content_creation.jpg" alt="" class="img-fluid w-100">
      </div>
    </div>

    <!-- the video section -->

    <div class="row about d-flex justify-content-evenly my-4 bg-danger py-5">
      <div class="col-sm-5 mb-4">
        <img src="http://localhost/project_viralite/assets/images/youtube.png" alt="" class="img-fluid">
      </div>

      <div class="col-sm-5">
        <img src="http://localhost/project_viralite/assets/images/youtube.png" alt="" class="img-fluid">
      </div>


    </div>

    <!-- image section  -->

    <div class="row about my-2">
      <div class="col-sm-12">
        <img src="http://localhost/project_viralite/assets/images/paid_ads.jpg" alt="" class="img-fluid w-100">
      </div>
    </div>

    <!-- Our SERVICES -->

    <div class="row about d-flex justify-content-around my-2 bg-danger py-5">

      <div class="col-sm-12 fs-1 fw-bold my-4">
        <span class="text-white">
          OUR
        </span>
        <span class="text-warning">
          SERVICES
        </span>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="http://localhost/project_viralite/assets/images/content_creation.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-danger text-center">
            <p class="card-text fw-bold text-white">
              CONTENT
              CREATION</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="http://localhost/project_viralite/assets/images/brand_strategy.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-danger text-center">
            <p class="card-text fw-bold text-white">
              BRAND
              STRATEGY</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="http://localhost/project_viralite/assets/images/social_media.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-danger text-center">
            <p class="card-text fw-bold text-white">
              SOCIAL MEDIA
              MANAGEMENT</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="http://localhost/project_viralite/assets/images/creative_designs.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-danger text-center">
            <p class="card-text fw-bold text-white">
              CREATIVE DESIGNS
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="http://localhost/project_viralite/assets/images/video_editing.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-danger text-center">
            <p class="card-text fw-bold text-white">
              VIDEO EDITING
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="http://localhost/project_viralite/assets/images/paid_ads.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-danger text-center">
            <p class="card-text fw-bold text-white">
              Paid Ads Google and meta
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="http://localhost/project_viralite/assets/images/copywrite.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-danger text-center">
            <p class="card-text fw-bold text-white">COPYWRITING</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
          <img src="http://localhost/project_viralite/assets/images/video_photography.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-danger text-center">
            <p class="card-text fw-bold text-white">VIDEO GRAPHY AND PHOTOGRAPHY</p>
          </div>
        </div>
      </div>


    </div>

    <!-- image section  -->

    <div class="row about my-2">
      <div class="col-sm-12">
        <img src="http://localhost/project_viralite/assets/images/paid_ads.jpg" alt="" class="img-fluid w-100">
      </div>
    </div>

    <!-- the digital solution section -->

    <div class="row about d-flex justify-content-between my-2 bg-danger">
      <div class="col-sm-6">
        <img src="http://localhost/project_viralite/assets/images/connected.jpeg" alt="" class="img-fluid">
      </div>
      <div class="col-sm-6 ">
        <div class="fs-2 fw-bold text-warning">
          Integrated <br>Digital <br>Solution
        </div>
        <hr style="border-top: 4px solid rgb(2, 1, 98);">

        <div class="fs-4  text-white fw-bold">
          INSIGHTS, METRICS AND ANALYTICS -
          EVERYTHING IS CONNECTED!
        </div>

        <p class="fs-5 mt-4 text-white">
          In a digital world where everything’s connected, we
          believe that the approach to digital
          communications has to be joined-up too. Our
          approach combines creativity & technology and
          blends a diverse range of digital marketing
          disciplines — from mobile and responsive web
          design to search and social media campaigns — all
          under one roof.
        </p>

      </div>
    </div>

    <!-- the digital solution section -->

    <div class="row about flex-row-reverse justify-content-between my-2 bg-danger">
      <div class="col-sm-6 ">
        <img src="http://localhost/project_viralite/assets/images/stategy.jpg" alt="" class="img-fluid" style="height: 31rem;">
      </div>
      <div class="col-sm-6 ">
        <div class="fs-2 fw-bold text-warning text-end">
          STRATEGY, <br> CREATIVITY <br>& RESULTS!
        </div>
        <hr style="border-top: 4px solid rgb(2, 1, 98);">

        <div class="fs-4  text-white fw-bold text-end ">
          Our approach is backed by strategy, creativity
          and optimised for results.
        </div>

        <p class="fs-5 mt-4 text-white text-end">
          We understand that each client and each project
          we undertake is different and so we have
          developed a repeatable process that we know
          works. Our methodology puts the user at the heart
          of the experience from the start. By working
          iteratively through a pre-defined set of stages, we
          create beautiful and usable solutions that work
          hard and deliver targeted results.
        </p>

      </div>
    </div>

    <!-- image section  -->

    <div class="row about my-2">
      <div class="col-sm-12">
        <img src="http://localhost/project_viralite/assets/images/paid_ads.jpg" alt="" class="img-fluid w-100">
      </div>
    </div>

    <!-- APPROACH REDEFINED -->

    <div class="row bg-danger py-5 d-flex justify-content-center">

      <div class="col-sm-12 my-4 text-center fs-2 text-white">
        APPROACH <span class="fw-bold">REDEFINED</span>
        <div class="fs-6">
          <hr style="width:100%; border-top: 4px solid white">
          What brings success to CREATIVE INC.
        </div>

      </div>



      <div class="col-md-4 my-2 align-center">
        <div class="card" style="width: 14rem;">
          <img src="http://localhost/project_viralite/assets/images/copywrite.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-bold">STEP 1</p>
            <h5 class="card-title fw-bold fs-2">PLAN</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2 ">
        <div class="card" style="width: 14rem;">
          <img src="http://localhost/project_viralite/assets/images/excute.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-bold">STEP 2</p>
            <h5 class="card-title fw-bold fs-2">EXECUTE</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 my-2 ">
        <div class="card" style="width: 14rem;">
          <img src="http://localhost/project_viralite/assets/images/deliver.jpg" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <p class="card-text fw-bold">STEP 3</p>
            <h5 class="card-title fw-bold fs-2">DELIVER</h5>
          </div>
        </div>
      </div>

    </div>


    <!-- THE GO-TO GUY! -->

    <div class="row bg-white py-5 d-flex justify-content-center">

      <div class="col-sm-10 text-center">
        <h4 class="fs-1 fw-bold goto-section">T<span class="text-danger">HE</span> G<span
            class="text-danger">O</span>-T<span class="text-danger">O</span> G<span class="text-danger">UY!</span></h4>
        <h4 class="fs-1 fw-bold goto-section mb-4">COVERS IT ALL</h4>
      </div>

      <div class="col-sm-3  text-center">
        <p class="para-of-think fs-4 fw-bold">THINK</p>
        <h1 class="lower-text fw-bold goto-section">T</h1>
        <p class="fs-4 fw-bold">BRAND</p>
        <p class="fw-bold text-danger">IDENTITY | STRATEGY</p>
      </div>

      <div class="col-sm-3  text-center">
        <p class="para-of-think fs-4 fw-bold">GLORIFY</p>
        <h1 class="lower-text fw-bold goto-section">G</h1>
        <p class="fs-4 fw-bold">DESIGN</p>
        <p class="fw-bold text-danger">GRAPHICS | UI/UX</p>
      </div>

      <div class="col-sm-3  text-center">
        <p class="para-of-think fs-4 fw-bold">TRANSFORM</p>
        <h1 class="lower-text fw-bold goto-section">T</h1>
        <p class="fs-4 fw-bold">TECHNOLOGY</p>
        <p class="fw-bold text-danger"> WEB | MOBILE</p>
      </div>

      <div class="col-sm-3  text-center">
        <p class="para-of-think fs-4 fw-bold">GROW</p>
        <h1 class="lower-text fw-bold goto-section">G</h1>
        <p class="fs-4 fw-bold">DIGITAL</p>
        <p class="fw-bold text-danger">SEARCH | SOCIAL | CONTENT | LEAD GEN</p>
      </div>

    </div>


    <!-- THE TESTIMONIALS -->

    <div class="row bg-danger py-4 d-flex justify-content-evenly">
      <div class="col-sm-5 text-center">
        <p class="text-white fs-1 fw-bold ">TESTIMONIALS</p>
        <div class="">
          <img src="http://localhost/project_viralite/assets/images/image.png" alt="" class="img-fluid rounded">
        </div>
      </div>

      <div class="col-sm-5">

        <div class="testimonial mt-4">
          <p class="fs-6 fw-bold testimonial-text">
            PRIYA SHARMA, MUMBAI
          </p>
          <p class="fs-6 text-white">
            "Working with their team has been a game-changer for us. Their creative strategies helped us redefine our
            brand identity and really connect with our audience. Their dedication and innovative ideas truly made a
            difference!"
          </p>
        </div>

        <div class="testimonial mt-4">
          <p class="fs-6 fw-bold testimonial-text">
            PRIYA SHARMA, MUMBAI
          </p>
          <p class="fs-6 text-white">
            "Working with their team has been a game-changer for us. Their creative strategies helped us redefine our
            brand identity and really connect with our audience. Their dedication and innovative ideas truly made a
            difference!"
          </p>
        </div>

        <div class="testimonial mt-4">
          <p class="fs-6 fw-bold testimonial-text">
            PRIYA SHARMA, MUMBAI
          </p>
          <p class="fs-6 text-white">
            "Working with their team has been a game-changer for us. Their creative strategies helped us redefine our
            brand identity and really connect with our audience. Their dedication and innovative ideas truly made a
            difference!"
          </p>
        </div>


      </div>
    </div>

    <!-- image section -->

    <div class="row about my-2">
      <div class="col-sm-12">
        <img src="http://localhost/project_viralite/assets/images/btmimg.jpg" alt="" class="img-fluid w-100">
      </div>
    </div>

    <!-- the logo section -->

    <div class="row bg-danger py-4 d-flex justify-content-center">
      <div class="col-sm-10 text-center">
        <p class="fs-1 text-white fw-bold">OUR CLIENTS</p>
      </div>

      <div class="col-sm-3 text-center">
        <div class=" imglogo">
          <img src="http://localhost/project_viralite/assets/images/logo1.jpeg" alt="" class="img-fluid rounded-circle logo">
        </div>
      </div>

      <div class="col-sm-3 text-center">
        <div class=" imglogo">
          <img src="http://localhost/project_viralite/assets/images/logo2.jpeg" alt="" class="img-fluid rounded-circle logo">
        </div>
      </div>

      <div class="col-sm-3 text-center">
        <div class=" imglogo">
          <img src="http://localhost/project_viralite/assets/images/logo3.jpeg" alt="" class="img-fluid rounded-circle logo">
        </div>
      </div>

      <div class="col-sm-3 text-center">
        <div class=" imglogo">
          <img src="http://localhost/project_viralite/assets/images/logo4.jpeg" alt="" class="img-fluid rounded-circle logo">
        </div>
      </div>

    </div>

    <!-- the form section -->

    <div class="row  py-4 d-flex justify-content-center form-img">

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = strip_tags(trim($_POST['username']));
            $email = strip_tags(trim($_POST['email']));
            $number = strip_tags(trim($_POST['number']));
            $query = strip_tags(trim($_POST['query']));

            // Remove any remaining script tags
            $username = str_ireplace('<script>', '', $username);
            $email = str_ireplace('<script>', '', $email);
            $number = str_ireplace('<script>', '', $number);
            $query = str_ireplace('<script>', '', $query);

            // Validate inputs
            if (!empty($username) && !empty($email) && !empty($number) && !empty($query)) {
                if (strlen($username) > 50) {
                    echo "<span class='text-center text-white'> Name must be 50 characters or less.</span><br>";
                } elseif (strlen($email) > 100) {
                    echo "<span class='text-center text-white'> Email must be 100 characters or less.</span><br>";
                } elseif (strlen($number) != 10) {
                    echo "<span class='text-center text-white'> Phone number must be exactly 10 characters.</span><br>";
                } elseif (strlen($query) > 200) {
                    echo "<span class='text-center text-white'> Query must be 200 characters or less.</span><br>";
                } else {
                    // Insert form data into the database
                    try {
                        $stmt = $conn->prepare("INSERT INTO query_data (name, email, number, query) VALUES (:name, :email, :number, :query)");
                        $stmt->bindParam(':name', $username);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':number', $number);
                        $stmt->bindParam(':query', $query);
                        $stmt->execute();
                        echo "<span class='text-center text-white'>Form submitted successfully!</span><br>";
                    } catch (PDOException $e) {

                    }
                }
            } else {
                echo "<span class='text-center text-white'>All fields are required!</span>";
            }
        }
    ?>

      <div class="col-md-5 my-4 text-center">

      <h3 id="genericError" class="error">All fields are required!</h3>
      <form action="<?=htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" onsubmit="return validateForm();">

          <div class="input-box">
            <input type="text" placeholder="NAME" name="username" id="username">
            <span id="usernameError" class="error">Name must be 50 characters or less.</span>
          </div>

          <div class="input-box">
            <input type="text" placeholder="EMAIL" name="email" id="email">
            <span id="emailError" class="error">Email must be 100 characters or less.</span>
          </div>

          <div class="input-box">
            <input type="text" placeholder="CONTACT" name="number" id="number">
            <span id="numberError" class="error">Phone number must be exactly 10 digits.</span>
          </div>
      </div>

      <div class="col-md-5 my-4 text-center">
        <div class="textarea mt-2">
          <textarea  id="" placeholder="QUERY" name="query" id="query"></textarea>
          <span id="queryError" class="error">Query must be 200 characters or less.</span>
        </div>
        <div class="submit-btn">
          <input type="submit" class=" text-uppercase">
        </div>

      </div>

      </form>

    </div>


    <!-- bottom section -->
    <div class="row  py-4 d-flex justify-content-center bg-white">

      <div class="col-sm-5 text-danger fw-bold">
        <p class=" fs-4 ">viralight.social</p>

        <h4 class="fs-1 ">CONNECT</h4>

        <h1 class="btm-text-count">TO WHAT COUNT</h1>

        <p class="fs-1 ">LET'S GET STARTED</p>

      </div>

      <div class="col-sm-5 mt-4">
        <p class="fs-2 fw-bold">EMAIL</p>
        <p class="fs-2 fw-bold text-danger">contact@viralight.social</p>
        <p class="fs-2 fw-bold">SOCIAL</p>
        <p class="fs-2 fw-bold text-danger">📱@viralight.social</p>
      </div>

    </div>



  </div>

</body>

</html>