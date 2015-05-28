<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap-theme.css.map">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap.css.map">
    <link type="text/css" rel="stylesheet"  href="css/contact.css">
    <title>Maxwell Karp</title>
</head>
<body>
    <div id="container">
  <div class="navT">
    <div class="icon"></div>
    <div id="title">C O N T A C T</div>
  </div>
  
  <div id="menu">
    <ul>
      <li><a href="/LandingPage/home.php">Hom<span class="space">e</span></a></li>
      <li><a href="/LandingPage/Projects.php">Project<span class="space">s</span></a></li>
      <li><a href="/LandingPage/Contact.php">Contac<span class="space">t</span></a></li>
    </ul>
  </div>
<div class="panel-group content" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          My Contact Info
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <address>
            Created by Maxwell Karp<br> 
            Contact me at: (626)-429-9610 or<br>
            maxwell.karp@yahoo.com or<br>
            iamthemaxwell@gmail.com<br>
            Pasadena, California<br>
            USA
        </address>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Your Contact Info
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
            <?php
                require_once(__DIR__ . "/model/config.php");

            ?>
            <h1 id="acheone">Enter Your Info</h1>
            <!-- goes to create-user page and displays whatevers there -->   <!-- used to create users -->
            <form class="register" method="post" action="<?php echo $path . "controller/create-user.php";?> ">
                <div id="name">
                    <!-- input box for user's username  -->
                    <label for="name">Name: </label>
                    <input type="text" name="name" placeholder="John Doe"/>
                </div>
                <div id="number">
                    <!-- input box for user's password -->
                    <label for="number">Phone: </label>
                    <input type="text" name="number" placeholder="(123)-456-7899"/>
                </div>
                <div id="email">
                    <!-- input box for user's email -->
                    <label for="email">Email: </label>
                    <input type="text" name="email" placeholder="john.doe@example.com"/>
                </div>
                <div id="other">
                    <!-- input box for user's username  -->
                    <label for="other">Other: </label>
                    <input type="text" name="other" placeholder="@johndoe"/>
                </div>
                <div>
                    <!-- button to submit previous three input values -->
                    <button type="submit" class="btn btn-primary btn-lg" id="submitbutton" data-toggle="modal" data-target="#myModal" >
                        Submit
                    </button>
                    
                </div>
            </form>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Find Me On Social Media
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
              
          <a href="">INstagram</a>
          <a href="">Snapchat</a>
          <a href="">Skype</a>
          <a href="">Github</a>
          <a href="">youtube</a>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
</html>
