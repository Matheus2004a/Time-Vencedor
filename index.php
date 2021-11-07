<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identicando time vencedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="TimeVencedor.php" method="post">
        <h2>Descobrindo o time vencedor</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o nome de um time:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="time1">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Quantos gols feitos:</label>
            <input type="number" class="form-control" id="formGroupExampleInput" name="num-gol-time1">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Digite o nome de outro time:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="time2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Quantos gols feitos:</label>
            <input type="number" class="form-control" id="formGroupExampleInput" name="num-gol-time2">
        </div>
        <p>
            <?php
                if(empty($_SESSION['time1'] || $_SESSION['gols-time1'] || $_SESSION['time2'] || $_SESSION['gols-time2'])){
                    echo $_SESSION['msg-error'];
                }
                elseif(empty($_SESSION['time1'] && $_SESSION['time2'])){
                    echo $_SESSION['msg-error-times'];
                }
                elseif(empty($_SESSION['gols-time1'] && $_SESSION['gols-time2'])){
                    echo $_SESSION['msg-error-gols'];
                }
                else{
                    echo $_SESSION['time-venc'];
                }
            ?>
        </p>
        <fieldset>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-primary">Limpar</button>
        </fieldset>
    </form>
</body>

</html>