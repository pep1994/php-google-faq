<?php
  
  // funzione che stampa in pagina le FAQ
  function printFaq ($faqs) {
    foreach ($faqs as $faq) {
      echo "<h2>" . $faq["domanda"] . "</h2>";
      echo "<p>" . $faq["risposta"] . "</p>";
    }
  }

  // funzione che stampa in pagina il numero delle FAQ
  function printNumberFAQ ($faqs) {
    echo "<span>Il numero totale delle FAQ è: " . count($faqs) . "</span>";
  }

?>