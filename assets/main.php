<?php
    if (isset($_POST['calcular'])
        && !empty($_POST['lado_1'])
        && !empty($_POST['lado_2'])){
        $l1 = trim($_POST['lado_1']);
        $l2 = trim($_POST['lado_2']);
        
        $resultado = number_format(sqrt(pow($l1,2) + pow($l2,2)), 2,',','.');
        echo '<br><span class="Mensaje-resultado">La hipotenusa es igual a:</span>';
        echo '<br>','<span class="rsltd">', $resultado,'</span>';
    }

?>