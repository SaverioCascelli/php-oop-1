<!DOCTYPE html>
<html lang="en">

<?php
include_once './partials/head.php';
?>

<body>
    <?php
    include './class/movie.php';
    $arr = [
        'romantico', 'azione'
    ];

    $test = new Movie('asdf', 'romantico', 10, 'ilmiourl');
    $test2 = new Movie('asdf', 'romantico', 5);

    var_dump($test);
    var_dump($test2);
    echo $test->getStars();
    echo $test2->getStars();
    ?>
</body>

</html>