<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="fibonacci.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div>
            <h1>Fibonacci</h1>
        </div>
        <form action="fibonacci.php" method="get">
            <span>Valor</span>
            <div class="group">
            <input type="text" name="value" id="">
        </div>
        <div class="group">
            <button type="submit">Resultado</button>
        </div>
        </form>

        <?php
    $value = $_GET['value'] ?? null;
    $first = 1;
    $second = 0;

    echo '0 <br>';
    echo '1 <br>';

    for($i = 1; $i <= $value -2; $i++) {
        $number = $first + $second;
        echo $number . '<br>';

        $second = $first;
        $first = $number;
    }
?>
        <script src="" async defer></script>
    </body>
</html>