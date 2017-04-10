<!doctype html>

<html>
  <head>
    <meta name ="author" content="Alexandra Savage">
    <title>Alexandra Savage</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./slick-1.6.0/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick-1.6.0/slick/slick-theme.css"/>
  </head>
  <body>
    <nav class='top'>
      <ul>
      <?php
        $bar = [ "About", "Portfolio", "Interest", "Contact"];
        for($i=0; $i<sizeof($bar); $i++){
          echo '<li> <a href="#'.$bar[$i].'">'.$bar[$i].'</a>';
        }
      ?>
      </ul>
    </nav>
    <main>
      <section id ="Title">
      </section>

      <section id ="About">
        <h1 class= "header">About Me</h1>
        <h2 class= "header">The Story of Me</h2>
        <p>
		<?php
          include("Docs/about.php");
        ?>
        </p>
      </section>
      <section id ="Portfolio">
      <h1 class= "header">Portfolio</h1>
        <p>
          To view my resume please click
          <a target="_blank" href="./Docs/resume.pdf"> here</a>.
        </p>
        <p>
          The below links bring you to my Github and LinkedIn:
          <br /><br />
          <a target="_blank" href="https://github.com/asavage8"> Github</a>
          <a target="_blank" href="https://www.linkedin.com/in/alexandra-savage-9a397494"> LinkedIn</a>
        </p>
      </section>
      <section id ="Interest">
      <h1 class= "header">Interest</h1>
        <div id="Tiny_dancer">
          <h2 class="header"> Dance</h2>
          <img id= "Dance_pic" src="./Images/100_3333.jpg" alt="Irish dancer">
          <p id="Dance_p">
		  <?php
          include("Docs/Dance.php");
			?>         
          </p>
        </div>

        <h2 class="header">Photography </h2>
        <p>
		 <?php
          include("Docs/Photo.php");
			?> 
        </p>
        <div class="carousel">
          <div class="Photographs">
            <img src="./Images/103_4949c.jpg" alt="Cactus Room">
            <img src="./Images/100_4653c.jpg" alt="Ruins cool angle">
            <img src="./Images/100_4401c.jpg" alt="Outlook">
            <img src="./Images/100_4657c.jpg" alt="Arc picture">
            <img src="./Images/100_1241.jpg" alt="Me and Mom">
            <img src="./Images/100_1363.jpg" alt="Stormy Day">
            <img src="./Images/100_1568c.jpg" alt="Effile">
            <img src="./Images/100_4444.jpg" alt="Sunshine">
            <img src="./Images/100_4457.jpg" alt="Sunshine Day">
            <img src="./Images/100_4695c.jpg" alt="Sunshine in Church">
            <img src="./Images/IMG_6102.jpg" alt="Cake">
          </div>
          <div class="Photographs-nav">
            <img src="./Images/103_4949.jpg" alt="Cactus Room">
            <img src="./Images/100_4653.jpg" alt="Ruins cool angle">
            <img src="./Images/100_4401.jpg" alt="Outlook">
            <img src="./Images/100_4657.jpg" alt="Arc picture">
            <img src="./Images/100_1241c.jpg" alt="Me and Mom">
            <img src="./Images/100_1363c.jpg" alt="Stormy Day">
            <img src="./Images/100_1568.jpg" alt="Effile">
            <img src="./Images/100_4444c.jpg" alt="Sunshine">
            <img src="./Images/100_4457c.jpg" alt="Sunshine Day">
            <img src="./Images/100_4695.jpg" alt="Sunshine in Church">
            <img src="./Images/IMG_6102c.jpg" alt="Cake">
          </div>
          <h2>Guess the place above?</h2>
          <button id="Place-button">Answer!</button>
        </div>
      </section>
      <section id ="Contact">
      <h1 class= "header">Contact</h1>
        <?php include './php/Createdb.php'; ?>
        <form id="myForm" action="./php/Insert.php" method="POST">
          <div id="contactHalf">
            <div>
              <label>Name:</label><br />
              <input type="text"  maxlength="30" id="name" name="name" placeholder="Your Name"/>
              <br /><br />
            </div>
            <div>
              <label>Email:</label><br />
               <input type="email"  maxlength="40" id="email" name="email" placeholder="your@email.com"/>
               <br /><br />
             </div>
           </div>
          <label>Message:</label><br />
          <textarea type="text" id="Message" name="Message" placeholder="Message"></textarea>
          <br /><br />
        <input type="submit"  id="submitButton" onclick="submitForm()" />
      </form>
      </section>
    </main>
    <footer>
      <div class="leftAlign"> A. Savage</div>
      <div class="rightAlign">&copy;2017</div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="./JS/jquery.easing.1.3.js"></script>
    <script type="text/javascript"  src="./JS/nav.js"> </script>
     <script type="text/javascript" src="./slick-1.6.0/slick/slick.min.js"></script>
    <script type="text/javascript" src="./JS/slickjs.js"></script>
  </body>
</html>
