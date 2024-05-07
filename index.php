<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu programa em php</title>
</head>
<body>
    <h1>Isso é HTML</h1>
    <?php

    $dia = "Terça";
    $temperatura = 18;
    

    if ($temperatura > 25) {
        $clima = "quente";
    }elseif($temperatura <= 25 && $temperatura>= 18){
        $clima = "chuvoso";
    }elseif($temperatura < 18){
        $clima = "nevando";
    }
    
    echo "O clima está $clima a temperatura $temperatura º e o dia hoje é $dia feira. <br>";

    $nome = array("Emylle", "Sarah", "Kendrick", "Theo", "Isabela");

    echo "<br>";

    for($i=0; $i <= 4; $i++){
        echo "<br>";
        echo $nome[$i];
    };
    
    echo"<br><hr>";
    $total=0;

    foreach ($nome as $nome) {
        echo "<br>";
        echo $nome;
        $total ++ ;
    };



    echo "<br>";
    echo "<b> A quantidade total de nomes é $total </b>";

    ?>
</body>
</html>