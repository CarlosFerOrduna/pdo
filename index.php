<?php
include_once './includes/survey.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        $survey = new Survey();
        $showResults = false;

        if (isset($_POST['lenguaje'])) {
            $showResults = true;

            $survey->setOptionSelected($_POST['lenguaje']);
            $survey->vote();
        }
        ?>


        <form action="#" method="post">
            
            <h2>¿Cual es tu lenguaje favorito?</h2>
            
            <?php
            if ($showResults) {
                $lenguajes = $survey->showResults();

                echo '<h2>' . $survey->getTotalVotes() . ' votos totales.</h2>';

                foreach ($lenguajes as $lenguaje) {
                    $percentage = $survey->getPercentageVotes($lenguaje['votes']);

                    include './vistas/vistaresultado.php';
                }
            } else {
                include './vistas/vistavotacion.php';
            }
            ?>



        </form>


    </body>
</html>
