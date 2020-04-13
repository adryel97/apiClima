<?php
require './Classes/OpenWheatherApi.php';
$openWheater = new OpenWheatherApi();
$clima = $openWheater->getClima();
?>
<?php 
//Como imprimir a temperatura
//echo $clima->getTemperaturaCelsius(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>
<body>
    <div class="w-100 vh-100 d-flex align-items-md-center justify-content-center">
            <div class="col-md-7 col-sm-12 col-xs-12 col-12 card__clima p-3 shadow-sm">
                <small class="cod__cidade">cod: <?=$clima->codCidade?></small>
                <div class="row">
                    <div class="col-7">
                        <p class="p__cidade">Cidade - <span class="nome__cidade"><?=$clima->cidade?></span></p>
                        <h4 class="text-cinza-claro">Temperatura <i class="fas fa-temperature-low"></i></h4>
                        <div class="d-flex">
                        <div id="icon"><img id="wicon" src="http://openweathermap.org/img/w/<?=$clima->icone?>.png" alt="Weather icon"></div>
                            <div>
                                <h1><?= $clima->getTemperaturaCelsius()?>°C</h1>
                            </div>
                        </div>
                        <p class="text-cinza-claro mb-0 mt-3"><?=$clima->getPordosolHora()?></p>
                    </div>
                    <div class="col-5">
                            <div>
                                <p class="text-cinza" title="Velocida do vento"><i class="fas fa-wind"></i> <?= $clima->velocidadeVento?> m/s</p>
                                <p class="text-cinza" title="Humidade"><i class="fas fa-smog"></i> <?= $clima->humidade?>%</p>
                                <p class="text-cinza" title="Pressao"><i class="fas fa-cloud-meatball"></i> <?= $clima->pressao?> hpa</p>
                                <p class="text-cinza" title="Nascer do Sol"><i class="fas fa-cloud-sun"></i> <?= $clima->getNascerDoSol()?>h</p>
                                <p class="text-cinza-claro">Descrição: <?=$clima->descricao?></p>
                            </div>
                    </div>
                </div>
            </div>  
    </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>