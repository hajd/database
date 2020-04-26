<html>
   
   <head>
      <style>
         .error {color: #ff0000;}
      </style>

        <?php
         // definice promennych
         $id = "";
         $nazev = $latina = $rise = $podrise = $kontinent ="";
         $domaci = $chraneny = "";
        $nameErr = $latinaErr = $riseErr = $podriseErr = $kontinentErr = $domaciErr = $chranenyErr = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nazev"])) {
               $nameErr = "Nazev zivocicha je povinny";
            }else {
               $nazev = test_input($_POST["nazev"]);
            }

            if (empty($_POST["latina"])) {
               $latinaErr = "Latinsky nazev je povinny";
            }else {
                $latina = test_input($_POST["latina"]);
            }

              if (empty($_POST["rise"])) {
                  $riseErr = "Nazev rise je povinny";
              }else {
                  $rise = test_input($_POST["rise"]);
                }

                  if (empty($_POST["podrise"])) {
                  $podriseErr = "Nazev podrise je povinny";
              }else {
                  $podrise = test_input($_POST["podrise"]);
                }

              if (empty($_POST["kontinent"])) {
                  $kontinentErr = "Nazev podrise je povinny";
              }else {
                  $kontinent = test_input($_POST["kontinent"]);
                }

              if (empty($_POST["domaci"])) {
                  $domaciErr = "Nazev podrise je povinny";
              }else {
                  $domaci = test_input($_POST["domaci"]);
              }

              if (empty($_POST["chraneny"])) {
                  $chranenyErr = "Je zvire chranene? povinne";
              }else {
                  $chraneny = test_input($_POST["chraneny"]);
                 }
      }
        // orezat mezery a dalsi atypicke znaky
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   </head>
   
   <body>

      <h2>Atlas zivocichu</h2>
     
      <p><span class = "error">* povinne pole.</span></p>
     
     <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Název:</td>
               <td><input type = "text" name = "nazev">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>Latinsky nazev: </td>
               <td><input type = "text" name = "latina">
                  <span class = "error">* <?php echo $latinaErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>Říše:</td>
               <td> <input type = "text" name = "rise">
                  <span class = "error"><?php echo $riseErr;?></span>
               </td>
            </tr>

             <tr>
                 <td>Podříše:</td>
                 <td> <input type = "text" name = "podrise">
                     <span class = "error"><?php echo $podriseErr;?></span>
                 </td>
             </tr>

            <tr>
             <td>Kontinent:</td>
             <td> <input type = "text" name = "kontinent">
                 <span class = "error"><?php echo $kontinentErr;?></span>
             </td>
            </tr>
            
            <tr>
               <td>Domácí mazlíček:</td>
               <td>
                  <input type = "radio" name = "domaci" value = "1">Ano
                  <input type = "radio" name = "domaci" value = "0">Ne
                  <span class = "error">* <?php echo $domaciErr;?></span>
               </td>
            </tr>

             <tr>
                 <td>Chraneny druh:</td>
                 <td>
                     <input type = "radio" name = "chraneny" value = "1">Ano
                     <input type = "radio" name = "chraneny" value = "0">Ne
                     <span class = "error">* <?php echo $chranenyErr;?></span>
                 </td>
             </tr>

            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
				
         </table>
			
      </form>
    </body>
</html>

      <?php
         echo "<h2>Zadal jsi tyto udaje:</h2>";
         echo $nazev;
         echo "<br>";
         
         echo $latina;
         echo "<br>";
         
         echo $rise;
         echo "<br>";
         
         echo $podrise;
         echo "<br>";

         echo $domaci;
         echo "<br>";

         echo $chraneny;
         echo "<br>";

         echo $kontinent;

      // vlozit do databaze


      ?>