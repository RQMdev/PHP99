<html>
  <head>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <h1>Exercice PHP sur la manipulation de Tableaux</h1>

    <h2>Exercice 1 Niveau 2</h2>
    <?php  
    $viandes = array("poulet", "boeuf", "mouton");
    $cuissons = array("à point", "saignant", "bleu", "bien cuit");
    $commandes = array();

    // Two Loop Try
    /*
    function commander($array1, $array2) {
      for ($i = 0; $i < count($array1); $i+=1){
        for ($j = 0; $j < count($array2); $j+=1){
          $commandes[] = ($array1[$i].' '.$array2[$j]);
        }
      }
      print_r($commandes);
    }
    commander($viandes, $cuissons);
    */

    //One Loop Try
    function commander($array1, $array2){
      for ($i = 0; $i < count($array1)*count($array2); $i++){
        $commandes[] = $array1[$i%count($array1)].' '.$array2[$i/count($array1)];
      }
      print "Voici la liste des commandes :";
      print "<pre>";
      print_r($commandes);
      print "</pre>";
    }
    commander($viandes, $cuissons);
    

    ?>
    <h2>Exercice 2 Niveau 2</h2>




    <h2>Exercice 3 Niveau 2</h2>




    <h2>Exercice 4 Niveau 2</h2>




    <h2>Exercice 5 Niveau 2</h2>



    <h2>Exercice 6 Niveau 2</h2>




    <h2>Exercice 7 Niveau 2</h2>
  </body>
</html>