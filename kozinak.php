<?php
$arr1 = [
    'Крутые бобры' => 1,
    'Губка Боб квадратные штаны' => 2,
    'Фанбой и Чам-Чам' => 3,
    'Эй, Арнольд' => 4,
    'Котопес' => 5,
    'Ох, уж эти детки' => 6,
    'Волшебные покровители' => 7,
    'Настоящие монстры' => 8,
    'Семейка Торнбери' => 9,
    'Шоу Рена и Стимпи' => 10,
];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Фон</title>
    <style>

        body {
            background: #c7b39b url(https://media1.tenor.com/images/05fefe667cec9e2f5c555759f5fc34eb/tenor.gif?itemid=12208339
            ) ;
            background-size: cover;
        }
    </style>
</head>
<body>
<div>
    <?php


    foreach ($arr1 as $Nick=>$Nick_count) {
        echo  '<pre> Мультик с никелодион ' .$Nick . ' под номером '. $Nick_count  ;

        ?>
    <?php }?>
</div> <br>

</div>  <br>
</body>
</html>