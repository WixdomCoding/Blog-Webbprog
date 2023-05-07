<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="post1style.css">
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
  </head>
  <body>
    <header class="header1">
      <h1>Welcome To My Blog</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#bottom">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
       <article>
       <a href="post.php">
        <header class="header2">
          <h2>Article Title</h2>
          <p>Posted on <time datetime="2023-04-28">2023-04-28</time> by Wixdom</p>
        </header>
        </a>
      </article>  
    </main>
    <footer name="bottom" id="bottom">

      <?php
        if ($_SESSION['namn'] == NULL) 
        {
          header('Location: index.php');
        }
        echo "Just nu är  " . $_SESSION["namn"] ."  inloggad <br>";
        if($_SESSION['namn'] != NULL)
        {
            echo "<a href='logout.php'>Logga ut</a>";
        }
      ?>
      <ul>
        <a href="mailto:contact@example.com">contact@example.com</a></li>
        <a href="tel:+1234567890">123-456-7890</a></li>
        <a href="https://www.example.com">www.example.com</a></li>
      </ul>    </footer>
  </body>
</html>