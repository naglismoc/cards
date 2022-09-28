<?php

$data = [
    ['name'=>'azuolas','age'=>414, 'perennial' => false,'img'=>"1.jpg"],
    ['name'=>'uosis','age'=>200, 'perennial' => false,'img'=>"2.jpg"],
    ['name'=>'klevas','age'=>160, 'perennial' => false,'img'=>"3.png"],
    ['name'=>'tuopa','age'=>30, 'perennial' => false,'img'=>"4.jpg"],
    ['name'=>'drebule','age'=>60, 'perennial' => false,'img'=>"5.jpg"],
    ['name'=>'juodalksnis','age'=>160, 'perennial' => false,'img'=>"1.jpg"],
    ['name'=>'riesutmedis','age'=>120, 'perennial' => false,'img'=>"2.jpg"],
    ['name'=>'sermuksnis','age'=>20, 'perennial' => false,'img'=>"3.png"],
    ['name'=>'bazilikas','age'=>0.6, 'perennial' => true,'img'=>"4.jpg"],
    ['name'=>'bazilikas','age'=>0.6, 'perennial' => true,'img'=>"5.jpg"],
    ['name'=>'bazilikas','age'=>0.6, 'perennial' => true,'img'=>"1.jpg"],
    ['name'=>'bazilikas','age'=>0.6, 'perennial' => true,'img'=>"2.jpg"]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
        
        <?php
            foreach ($data as $i => $card) {
                if($i % 4 == 0){
                    echo '<div class="row">';
                }
        ?>
                <div class="col-sm-3 ml-1 card">
                    <h4> <?=$card['name']?> </h4>
                    <h2> <?=$card['age']?> </h2>
                    <h3> <?=$card['perennial'] ? "vienmetis" :"daugiametis" ?> </h3>
                    <img src=" ./images/<?=$card["img"]?> " alt="">
                </div>

        <?php
            if($i % 4 == 3){
            echo '</div>';
            
            } 
            ?>
           

        <?php } ?>
    </div>


<hr>
<hr>
<hr>
<hr>
<hr>

    <div class="container">
        <?php foreach ($data as $i => $card) { ?>
                <div class="card-manual">
                    <h4> <?=$card['name']?> </h4>
                    <h2> <?=$card['age']?> </h2>
                    <h3> <?=$card['perennial'] ? "vienmetis" :"daugiametis" ?> </h3>
                    <img src=" ./images/<?=$card["img"]?> " alt="">
                </div>
        <?php } ?>
    </div>
</body>
</html>