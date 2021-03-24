<?php if(!isset($ano)){ $ano=0;}  ?>
<form method="get" action="form2.php"><!-- Formulário da Questão 1--> 
    <p>Ano:
        <select name="ano">
            <option value=""></option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
        </select>
    </p>
    <p><button type="submit">Mostrar</button></p>
</form>
<p>Procurar localidade<p><!-- Formulário da Questão 2 --> 
<form method="post" action="form2b.php">
    <p> Localidade <input type="text" name="nome" >
    </p>
    <p><button type="submit">Procurar</button></p>
</form>
<br><!-- Questão 3-->
<button onclick="window.location.href='/quest3.php'">Sobre POST, GET e Varíaveis de Sessão</button>


<?php
/*Questão 1: Elabore um script em PHP que receberá como parâmetro pelo método GET um ano e apresentará o nome de todas as localidades e a quantidade de ocorrências naquele ano. (2,0 pontos)

Questão 2: Crie um formulário com uma caixa de texto e um botão de submissão. O usuário deverá escrever o nome da 
localidade (tem que ser idêntico ao que está no arquivo). Os dados serão enviados pelo método POST. Não precisa validar.
Procure no arquivo a linha que contém a localidade informada e apresente a quantidade de ocorrências por ano e o somatório das ocorrências. (2,0 pontos)

Questão 3: Explique resumidamente: GET, POST e variáveis de sessão. (2,0 pontos).





*/  
    if($ano==0){
        $ano= $_GET["ano"];
        if(!isset($ano)){ $ano=0;}
    }
    //Não consegui tirar a mensagem de variavel indefinida, na verdade, consegui
    //quase todas mas menos essa
    if($ano!=0){
        $ano= $_GET["ano"];
    $f = fopen("violencia-domestica-df.csv", "r");
    $i= 0;
    $date=fgetcsv($f);
    foreach($date as $values){
        if($values != $ano){
            $i++;
        }
        else break;
    }      
    $date=fgetcsv($f);
    while($date){
        echo "<p>Código_Cidade: $date[0], | Ano $ano: $date[$i]<p>";
        $date = fgetcsv($f);
    }
    fclose($f);
}
?>
</table>