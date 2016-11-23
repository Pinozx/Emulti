
    <?php
    session_start();
    foreach ($_SESSION as $index => $value) {
        echo __FILE__ . __LINE__ . " $index: $value<br>";
    }
    ?>
