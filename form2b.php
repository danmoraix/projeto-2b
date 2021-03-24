<?php
/*Questão 2: Programa para procurar*/
    echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Anos<br>";
    echo "Local &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;/ 2011 / 2012 / 2013 / 2014 / 2015 / 2016<br>";
    $local = $_POST["nome"];
    $f = fopen("violencia-domestica-df.csv", "r");
    $date = fgetcsv($f);
    $resultado;
    $soma = 0;
    while($date){
        if($local==$date[0]){
            for($i=1;$i<=6;$i++){
                $soma+=$date[$i];
            }
            foreach($date as $resultado){
                echo " $resultado / ";
            }
            echo "<br>Casos totais nesta localidade: $soma";
        }
        $date= fgetcsv($f); 
    }
    fclose($f);
?>