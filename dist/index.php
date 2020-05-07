<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ Google</title>
  <link rel="stylesheet" href="style/app.css">
</head>
<body>

  <header>
    <div class="logo">
      <a href="">
       <img id="logo" src="img/logo-google.png" alt="logo-google">
      </a>
      <a href="" class="privacy">
        Privacy e termini
      </a>
    </div>
    <nav>
      <div class="nav-left">
        <ul>
          <li>
            <a href="">Introduzione</a>        
          </li>
          <li>
            <a href="">Norme sulla privacy</a>        
          </li>      
          <li>
            <a href="">Termini di servizio</a>        
          </li>      
          <li>
            <a href="">Tecnologie</a>        
          </li>      
          <li>
            <a href="" class="active">Domande frequenti</a>        
          </li>            
        </ul>
      </div>
      <div class="nav-right">
        <ul>
          <li>
            <a href="">Account Google</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>

    <div class="container">

      <?php 

        require_once __DIR__ . "/../src/partials-php/variables.php";
        require_once __DIR__ . "/../src/partials-php/function.php";

        if (array_key_exists("faq", $_GET)) {

          printFaq($faqs);

        } 

        
      ?>

    </div>

    <?php 

        printNumberFAQ($faqs);
     
    ?>

  </main>


  

  <footer>

      <div class="container">
        <ul class="footer-left">
          <li>
            <a href="">Google</a>
          </li>
          <li>
            <a href="">Tutto su Google</a>
          </li>
          <li>
            <a href="">Privacy</a>
          </li>
          <li>
            <a href="">Termini</a>
          </li>
        </ul>
        <ul>
          <li>
            <select name="select_language">
              <option value="italiano">Italiano</option>
              <option value="inglese">Inglese</option>
            </select>
          </li>
        </ul>
      </div>

  </footer>
  
  <script src="js/app.js"></script>
</body>
</html>