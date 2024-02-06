<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Liyana Badminton Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="images/logo1.jpg" style="width:100%">
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#committee" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-users w3-xxlarge"></i>
    <p>COMMITTEE</p>
  </a>
  <a href="#membership" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>MEMBERSHIP</p>
  </a>
  <a href="#activity" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-calendar w3-xxlarge"></i>
    <p>ACTIVITY</p>
  </a>
  <a href="#achievement" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-star w3-xxlarge"></i>
    <p>ACHIEVEMENT</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
  <a href="admin/index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ADMIN</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#committee" class="w3-bar-item w3-button" style="width:25% !important">COMMITTEE</a>
    <a href="#membership" class="w3-bar-item w3-button" style="width:25% !important">MEMBERSHIP</a>
    <a href="#activity" class="w3-bar-item w3-button" style="width:25% !important">ACTIVITY</a>
    <a href="#achievement" class="w3-bar-item w3-button" style="width:25% !important">ACHIEVEMENT</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    <a href="admin/index.php" class="w3-bar-item w3-button" style="width:25% !important">ADMIN</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  
  <!-- About Section -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="about">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Welcome to</span></h1>
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Liyana Badminton Academy</h1>
    <img src="images/img1.png" alt="boy" class="w3-image" width="992" height="1108">
  </header>
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">About Us</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Liyana Badminton Academy (LBA) is a professional club that trains both beginners and professional players. Our certified coaches, lead by Coach Liyana Ruslan, have combined decades of competitive badminton experience with understanding of sports science and global exposure to create specialised individual and group training programmes that will meet your demands and help you improve your game. LBA has developed since its inception in 2019, with 200 athletes currently training under its auspices. Even now, the Club still develops global champions and helps its players advance to new heights. At LBA, we put a lot of effort into developing our employees' talents, and the outcomes speak for themselves. Here, we let the players' parents and the players themselves to share their experiences with LBA, a club that is genuinely favoured by world champions. Our performance history has equipped athletes for significant competitions including the Youth Olympics, World Junior Championship, International Challenge, Grand Prix Gold, Super Series, and World Championships.
    </p>

             <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="portfolio">
    <h3 class="w3-padding-16 w3-text-light-grey">Photo Gallery</h3>
    
    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="images/img3.jpg" style="width:100%">
        <img src="images/img4.jpg" style="width:100%">
        <img src="images/img8.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="images/img6.jpg" style="width:100%">
        <img src="images/img7.jpg" style="width:100%">
        <img src="images/img9.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>   


<!-- Committee Section -->
    <header class="w3-container w3-padding-32 w3-black" id="committee">
    <h2 class="w3-text-light-grey">Our Committee Members</h2>
    <hr style="width:200px" class="w3-opacity">

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="images/img25.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Liyana Ruslan</h3>
  <p>Co-Founder & CEO</p>
</div>

<div class="w3-quarter">
  <img src="images/img27.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Justin Hoh</h3>
  <p>Finance Manager</p>
</div>

<div class="w3-quarter">
  <img src="images/img26.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Arif Shah</h3>
  <p>Men Double Coach</p>
</div>

<div class="w3-quarter">
  <img src="images/img28.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Pearly Tan</h3>
  <p>Women Double Coach</p>
</div>
</div>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="images/img29.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Renumathi</h3>
  <p>Women Single Coach</p>
</div>

<div class="w3-quarter">
  <img src="images/img30.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Haikal Zikri</h3>
  <p>Men Double Coach</p>
</div>

<div class="w3-quarter">
  <img src="images/img31.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Aidil Soleh</h3>
  <p>Men Single Coach</p>
</div>

<div class="w3-quarter">
  <img src="images/img36.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ung Yi Xing</h3>
  <p>Women Single Coach</p>
</div>
</div>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="images/img33.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Bryan Jeremy</h3>
  <p>Men Double Coach</p>
</div>

<div class="w3-quarter">
  <img src="images/img34.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Eogene Ng</h3>
  <p>Men Single Coach</p>
</div><br>
</div>


<header class="w3-container w3-padding-32 w3-black" id="committee">
    <h2 class="w3-text-light-grey">Our Club Collaborations</h2>
    <hr style="width:200px" class="w3-opacity">

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
   
    ?>
  
    <a href="add_club.php" class="btn btn-light mb-3">Add New</a>

    <table class="table table-light text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Club ID</th>
          <th scope="col">Club Name</th>
          <th scope="col">Club Ownership</th>
          <th scope="col">Club Type</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `club`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["club_id"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
            <td><?php echo $row["club_owner"] ?></td>
            <td><?php echo $row["club_type"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>


<!-- Activities Section -->
  <div class="w3-padding-64 w3-content" id="membership">
  <h2 class="w3-text-light-grey">Membership Form 2024</h2>
    <hr style="width:200px" class="w3-opacity">

  

<div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
    <p>It's time for badminton !</p>
    <p>Experience the excitement of badminton! Our club offers exciting badminton games, qualified coaches, and the best atmosphere.</p>
    <a href="add-new.php" class="btn btn-light mb-3">Add New</a>

    <table class="table table-light text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>          
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>        
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    
<!-- Activities Section -->
    <header class="w3-container w3-padding-32 w3-black" id="activity">
    <h2 class="w3-text-light-grey">Our Activities</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
    <a href="add_activity.php" class="btn btn-light mb-3">Add New</a>

    <table class="table table-light text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <br></br>

  <h2 class="w3-text-light-grey">Previous & Upcoming Events</h2>
    <hr style="width:200px" class="w3-opacity">
          <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="images/img10.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Youth Olympics 2020</b></p>
            <p class="w3-opacity">Fri 28 Aug 2020</p>
            <p>The first, the Youth Olympics 2020, is scheduled to take place from the 28th to the 30rd of August. This tournament operates under the BWF points system, as a BWF World Tour event promising intense competition and a chance for players to earn valuable points.</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/img11.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Purple League 2023</b></p>
            <p class="w3-opacity">Sat 5 Mar 2023</p>
            <p>Following closely is the Purple League 2023, set to unfold from the 5th to the 7th of March at the Ampang Jaya in Kuala Lumpur. Distinguished as a BWF World Tour event, this tournament holds significant importance in the badminton calendar.</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/img12.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>World Junior Championship 2023</b></p>
            <p class="w3-opacity">Sun 27 Oct 2023</p>
            <p>Mark your calendars for the World Junior Championship 2023, the second-oldest international tournament in the world. Watch the battles unfold in Georgetown, Penang, starting from 27th to 30rd October. It is part of the 2023 BWF World Tour.</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/img13.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>International Challenge 2021</b></p>
            <p class="w3-opacity">Mon 26 Mar 2021</p>
            <p>Next, we have the International Challenge 2021. Don't miss out on the live action of the upcoming badminton tournaments featuring an international star lineup. Tune in to Astro SuperSports for all the exciting highlights. The badminton star players such as Viktor Axelsen and An Se Young are invited.</p>
</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/img14.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Grand Prix Gold 2022</b></p>
            <p class="w3-opacity">Sat 11 June 2022</p>
            <p>Get ready for the Grand Prix Gold 2022, where the absolute world elite of badminton will compete against each other. This thrilling event will be held in Indonesia, from 11st June to 15th June. It is part of the BWF World Tour. Come and join us for an unforgettable week of intense competition at this tournament!</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/img15.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Super Series 2023</b></p>
            <p class="w3-opacity">Tue 25 Aug 2023</p>
            <p>This August, catch all the back-to-back BWF World Tour tournaments from the YONEX Canada Open, US Open 2023 to the Korea Open 2023! Witness the intensity of these matches as the world’s top players and reigning champions compete for glory and valuable points to qualify for the Paris 2024 Olympics. </p>
      </div>
    </div>
  </div>
    
<!-- Explore Nature -->
   <div class="w3-padding-64 w3-content" id="achievement">
  <h2 class="w3-text-light-grey">Achievements</h2>
    <hr style="width:200px" class="w3-opacity">

 <!-- Achievements-->
  <div class="w3-container">
    <br>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td><b>Achievements</b></td>
        <td><b>Medal</b></td>
      </tr>
      <tr>
        <td>Purple League Professional 2019</td>
        <td>Gold</td>
      </tr>
      <tr>
        <td>Penang Badminton Tournament 2019</td>
        <td>Gold</td>
      </tr>
      <tr>
        <td>Jakarta Badminton Open 2020</td>
        <td>Silver</td>
      </tr>
      <tr>
        <td>China Master Open 2020</td>
        <td>Bronze</td>
      </tr>
      <tr>
        <td>Ampang Jaya Badminton Tournament 2021</td>
        <td>Gold</td>
      </tr>
      <tr>
        <td>Purple League Professional 2022</td>
        <td>Silver</td>
      </tr>
      <tr>
        <td>Korea Open 2022</td>
        <td>Bronze</td>
      </tr>
      <tr>
        <td>Kedah Badminton Open 2023</td>
        <td>Silver</td>
      </tr>
      <tr>
        <td>Hong Kong Master Open 2023</td>
        <td>Bronze</td>
      </tr>
      <tr>
        <td>Olympic 2023</td>
        <td>Silver</td>
      </tr>
    </table><br>
  </div><br>

             <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="portfolio">
    <h3 class="w3-padding-16 w3-text-light-grey">Photo Gallery</h3>
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="images/img16.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="images/img21.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
    </div>

    <div class="w3-half">
      <img src="images/img17.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="images/img20.jpg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
    </div>
  </div>

<!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Get In Touch With Us Now !</h2>
    <hr style="width:200px" class="w3-opacity">

<div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Simpang Ampat, Penang, MY</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +60 1156789233</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: lba123@gmail.com</p>
    </div><br>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
    <a href="add_contact.php" class="btn btn-light mb-3">Add New</a>

    <table class="table table-light text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">IC No.</th>
          <th scope="col">Email</th>
          <th scope="col">Phone No.</th>
          <th scope="col">Comment</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    
  <!-- End Contact Section -->
  </div> 

    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <p class="w3-medium">©Copyright 2024 Liyana Badminton Academy. All rights reserved.<a href="https://www.w3schools.com/w3css/default.asp" target="_blank"</a></p>
  <!-- End footer -->
  </footer>  

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
