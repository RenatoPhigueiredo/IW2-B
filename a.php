<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome=$_POST["nome"];
        $endereco=$_POST["endereco"];
        $ativo=$_POST["ativo"];

        $con=mysqli_connect("localhost","root","","servidor") or die("Error!");

        $in="INSERT into  usuarios VALUES ('$nome',
                                        '$endereco',
                                        '$ativo')";

        $incluir=mysqli_query($con,$in);
        if($incluir ==1){
            echo"td certo";
        }
        else{
            echo"td errado";
        }

    ?>
</body>
</html>