<?php

  $file_name= "data.txt";

  $entries_from_file = file_get_contents($file_name);

  //massiiv olemasolevate purkidega
  $entries = json_decode($entries_from_file);

  $json = json_encode($entries);

  if(isset($_GET["id"]) && !empty($_GET["id"])){

	  $object = $_GET["id"];

    $counter = 0;
    foreach ($entries as $i){
      $obj = $i->id;
      echo $counter+". ";
      echo $obj;
      echo "<br>";
      if($obj == $object){
        echo "///////////////kustutab";
        unset($entries[$counter]);
      }
      $counter ++;
    }

  }

  echo "<br>//////<br>";


  var_dump($entries);
	echo(json_encode($entries));

?>
