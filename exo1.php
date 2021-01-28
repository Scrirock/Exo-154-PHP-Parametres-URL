<?php

    if (isset($_GET["iteration"])){
        $iteration = intval($_GET["iteration"]);
        if ($iteration <= 0) $iteration = 1;
        if ($iteration > 1000) $iteration = 1000;
        for ($i = 0;$i < $iteration; $i++) echo "Hello Wolrd!<br>";
    }

?>