<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina2</title>
</head>
<body>
    <?php
    if ($get->get('A')<>''&&$get->get('B')<>''){
        $a = $get->get('A');
        $b = $get->get('B');
        $soma = $a + $b;  
        ?>
    <section>
        <img src="<?=$value['img']?>">
        <p>Email: <?=$value['User'] ?></p>
        <p>Nome:<?=$value['name'] ?></p>
        <p>CPF:<?=$value['cpf'] ?></p> <br><br>
        <p class = 'resultados'>O resultado é <?=$soma?></p>
    </section>
    <?php     
    }
    ?>  
</body>
</html>
