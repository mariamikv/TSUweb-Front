<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blueberry Online Library</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="icon/svg" href="svg/icon.svg">
        <meta name="author" content="Mariam Kvantaliani">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Open+Sans:wght@600&family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <script src="index.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans+HK:wght@700&family=Oswald:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    </head>
    <body>
        <header>
            <header class="header_style">
                <img src="svg/icon.svg" style="width: 20px; height:20px;">
                <a id="title" href="index.html">blueberry online library</a>
            </header>
        </header>
            <nav>
                <div class="nav" id="navigation">
                  <a href="index.php" >home<a>
                  <a href="books.php" >books<a>
                  <a href="about.php" style="color:#B8B9C6 ">about<a>
                  <a href="contacts.php">contacts<a>
                  <!-- <a href="login.php" id="login">login<a></a> -->
                  <?php
                  if(isset($_SESSION['userId'])){
                    echo '<a href="bookAndUsers.php" id="login">users<a></a> ';
                  }
                if(isset($_SESSION['userId'])){
                  
                  echo '<a>
                  <form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit" class="logout">Logout</button>
                  </form>
                  </a>';
                }
                else{
                  echo '<a href="login.php" id="login"style="color:#B8B9C6 ">login<a></a>';
                }
              ?>
                  <?php
              if(isset($_SESSION['userId'])){
                echo '<a><p>WELCOME</p></a>';
              }
              
              else{
                echo '';
              }
            ?>
                  <!-- <a>
                  <form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit" class="logout">Logout</button>
                  </form>
                  </a> -->
                  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                  </a>
                </div>
              </nav>
        <main>
          
          <div class="about-page">
            <h1>About Us</h1>
            <p>Blueberry Online Library empowers researchers, learners, universities, and corporations to achieve their goals in an 
              ever-changing world.
              <br>
              For over 200 years we have been helping people and organizations develop the skills and knowledge they 
              need to succeed. We develop digital education, learning, assessment, and certification solutions to help
               universities, businesses, and individuals move between education and employment and achieve their ambitions.
                By partnering with learned societies, we support researchers to communicate discoveries that make a difference.
                 Our online scientific, technical, medical, and scholarly journals, books, and other digital content build on a
                  200-year heritage of quality publishing.</p>
          </div>
          <div class="scene scene--card">
            <div class="card">
              <div class="card__face card__face--front">
                <h1>Session cookies and persistent cookies</h1>
                <p>Cookies are small text files placed on your computer by websites you visit. Cookies can be deleted or 
                  disabled at any time by using the privacy settings in your browser. However, if you disable cookies completely 
                  this may mean that you will not be able to use some of the services offered by our websites. Below is an overview 
                  of the types of cookies we use on Wiley's websites. For more information about cookies,
                   go to http://www.aboutcookies.org.</p>
              </div>
              <div class="card__face card__face--back"></div>
            </div>
          </div>

          <div class=terms>
            <div id="flip"><h1>Privacy Policy</h1></div>
            <div id="panel">
            <p>John Wiley & Sons, Inc. and its subsidiary and affiliate companies (collectively, "Wiley," "we," "us" or 
              "our") recognize the importance of protecting the personal information collected from users in the operation
               of its services and taking reasonable steps to maintain the security, integrity and privacy of any information 
               in accordance with this Privacy Policy. By submitting your information to Wiley you consent to the practices 
               described in this policy. If you are less than 18 years of age, then you must first seek the consent of your
                parent or guardian prior to submitting any personal information.
              <br>
              This Privacy Policy describes how Wiley collects and uses the personal information you provide to Wiley.
               It also describes the choices available to you regarding our use of your personal information and how you can 
               access and update this information.</p>
              </div>
          </div>
          <div class=terms>
            <div id="flip2"><h1>Leadership Team</h1></div>
            <div id="panel2">
            <p>John Wiley & Sons, Inc. and its subsidiary and affiliate companies (collectively, "Wiley," "we," "us" or 
              "our") recognize the importance of protecting the personal information collected from users in the operation
               of its services and taking reasonable steps to maintain the security, integrity and privacy of any information 
               in accordance with this Privacy Policy. By submitting your information to Wiley you consent to the practices 
               described in this policy. If you are less than 18 years of age, then you must first seek the consent of your
                parent or guardian prior to submitting any personal information.
              <br>
              This Privacy Policy describes how Wiley collects and uses the personal information you provide to Wiley.
               It also describes the choices available to you regarding our use of your personal information and how you can 
               access and update this information.</p>
              </div>
          </div>
          <div class=terms>
            <div id="flip3"><h1>Corporate Governance</h1></div>
            <div id="panel3">
            <p>John Wiley & Sons, Inc. and its subsidiary and affiliate companies (collectively, "Wiley," "we," "us" or 
              "our") recognize the importance of protecting the personal information collected from users in the operation
               of its services and taking reasonable steps to maintain the security, integrity and privacy of any information 
               in accordance with this Privacy Policy. By submitting your information to Wiley you consent to the practices 
               described in this policy. If you are less than 18 years of age, then you must first seek the consent of your
                parent or guardian prior to submitting any personal information.
              <br>
              This Privacy Policy describes how Wiley collects and uses the personal information you provide to Wiley.
               It also describes the choices available to you regarding our use of your personal information and how you can 
               access and update this information.</p>
              </div>
          </div>
        </main>
        <footer>
            <h1>About Blueberry Online Library</h1>
            <ul>
              <li><a href="about.php">Privacy Policy</a></li>
              <li><a  href="about.php">Terms of Use</a></li>
              <li> <a  href="about.php">Cookes</a></li>
              <li> <a  href="about.php">Accessibility</a></li>
              <li> <a  href="contacts.php">Constacts</a></li>
            </ul>
        </footer>
        <script>
            $(document).ready(function(){
            $("#flip").click(function(){
            $("#panel").slideToggle("slow");
             });
             });
             $(document).ready(function(){
            $("#flip2").click(function(){
            $("#panel2").slideToggle("slow");
             });
             });
             $(document).ready(function(){
            $("#flip3").click(function(){
            $("#panel3").slideToggle("slow");
             });
             });

             var card = document.querySelector('.card');
              card.addEventListener( 'click', function() {
                card.classList.toggle('is-flipped');
              });

        </script>
    </body>

</html>