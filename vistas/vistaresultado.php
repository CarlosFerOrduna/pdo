<div class="options">
    <?php
    $whidthBar = $percentage * 5;
    $estilo = "barra";

    if ($survey->getOptionSelected() == $lenguaje['option']) {
        $estilo = "seleccionado";
    }

    echo $lenguaje['option'];
    ?>    

    <div class="<?php echo $estilo; ?>" style="width:  <?php echo $whidthBar . 'px;'; ?>"><?php echo $percentage . '%'; ?></div>
</div>