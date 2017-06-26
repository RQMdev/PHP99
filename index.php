<html>
  <head>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <nav>
    <ul>
      <li class="list1 is-active">Exercice 1</li>
      <li class="list2">Exercice 2</li>
      <li class="list3">Exercice 3</li>
      <li class="list4">Exercice 4</li>
      <li class="list5">Exercice 5</li>
      <li class="list6">Exercice 6</li>
      <li class="list7">Exercice 7</li>
    </ul>
    </nav>
    <span><h1>Exercice PHP sur la manipulation<br> de Tableaux</h1></span>
    <section class="section1 is-showing">
      <h2>Exercice 1 Niveau 2</h2>
      <?php  
        $viandes = array("poulet", "boeuf", "mouton");
        $cuissons = array("à point", "saignant", "bleu", "bien cuit");
        $commandes = array();

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
    </section>
    <section class="section2">
      <h2>Exercice 2 Niveau 2</h2>
      <?php
        $genres = "horreur fantastique action western thriller comédie drame romance historique";
        
        function explod_e($array){

        print "Voici le tableau contenant les mots séparés :";
        print "<pre>";
        print_r(explode(" ", $array));
        print "</pre>";
        }

        explod_e($genres);
        
      ?>
    </section>
    <section class="section3">
      <h2>Exercice 3 Niveau 2</h2>
      <?php
        $fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];

        function itTakesTwo($array){
          $fruits_favoris = [];
          for ($i = 0; $i < 2; $i++){
            array_push($fruits_favoris, $array[count($array)-1]);
            array_pop($array);
          } 
            print "Voici les deux derniers éléments sortis du tableau :";
            print "<pre>";
            print_r($fruits_favoris);
            print "</pre>";
        }

        itTakesTwo($fruits);

      ?>
    </section>
    <section class="section4">
      <h2>Exercice 4 Niveau 2</h2>
      <?php
        $prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];

        function chooseYourSide($array){

          $middle = floor(count($array)/2);

          if (count($array)%2 == 0) {
            print "Le tableau n'est pas impaire, il n'a donc pas de valeur médiane!";
          } else {

            for ($i = 0; $i < $middle; $i++){
            $array[$middle + $i] = $array[$middle + $i + 1];
            }

          array_pop($array);
          print "Le tableau sans sa valeur du milieu est :";
          print "<pre>";
          print_r($array);
          print "</pre>";
          }
        }

        chooseYourSide($prenoms);

      ?>
    </section>
    <section class="section5">
      <h2>Exercice 5 Niveau 2</h2>
      <?php
        $phrase = ["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];

        function findTheLongest($array){

          $holder = "";

          foreach($array as $keys => $value){
            if (strlen($value) > strlen($holder)){
              $holder = $value;
            }
          }

          print "La chaine de caractère la plus longue est :";
          print "<pre>";
          print_r($holder);
          print "</pre>";
        }

        findTheLongest($phrase);

      ?>
    </section>
    <section class="section6">
      <h2>Exercice 6 Niveau 2</h2>
      <?php
        $portables = ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];

        function convertToInternational($array){
          for ($i = 0; $i < count($array); $i++){
            $array[$i] = substr($array[$i], 1);
            $array[$i] = "+33".$array[$i];
          }

          print "Les numéros internationaux sont :";
          print "<pre>";
          print_r($array);
          print "</pre>";
        }

        convertToInternational($portables);

      ?>
    </section>
    <section class="section7">
      <h2>Exercice 7 Niveau 2</h2>
      <?php
        $sadisme = ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];

        function howManyHThereIs($array){
          $global_count = 0;
          foreach ($array as $keys => $value){
            $global_count += substr_count($value, "h");
          }
          print "Il y a ";
          print_r($global_count);
          print " fois la lettre H !";
        }

        howManyHThereIs($sadisme);
        
      ?>
    </section>
    <script type="text/javascript" src="jquery-3.2.1.slim.js"></script>
    <script type="text/javascript" src="learn-jquery.js"></script>
  </body>
</html>