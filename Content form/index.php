<?php
    session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
</head>
<body>
    
    <p>FORMULÁRIO PARA INSCRIÇÃO</p>
    <form action="./script.php" method="post">
    <p>Nome: <input type="text" name = "nome"/></p>
    <p>Idade: <input type="text" name = "idade"/></p>
    <p><input type="submit" value="enviar dados do competidor" /></p>
    </form>


</body>

</html>