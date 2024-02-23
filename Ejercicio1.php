<?php
        $edades = array(25, 17, 30, 16, 20, 22, 18, 19, 21, 24);
        $i = 0;
        echo "<h2>Edades mayores de 18 años:</h2>";
        while ($i < count($edades)) {
            if ($edades[$i] > 18) {
                echo $edades[$i] . "<br>";
            }
            $i++;
        }
    ?>