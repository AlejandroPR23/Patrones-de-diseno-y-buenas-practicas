<?php

    $numero = $_POST['Numero'];

    function ImprimirNumero ($numero,$iteracion) {
        return "$numero x $iteracion";
    }

    function Multiplicar ($numero, $iteracion) {
        return $numero * $iteracion;
    }

    function Factorial ($numero) {
        $factorial = 1;
        for ($f = $numero; $f >= 1; $f--) {
            $factorial *= $f;
        }
        return $factorial;
    }

?>
<table border="1">

    <?php for ($i = 0; $i <= 10; $i++): ?>
            <tr>
                <td><?= ImprimirNumero($numero,$i) ?></td>

                <td><?=  Multiplicar($numero,$i) ?></td>
            </tr>
    <?php endfor; ?>

    <tr>
        <td><?= "$numero!"; ?></td>
        <td><?= Factorial($numero); ?></td>
    </tr>
</table>