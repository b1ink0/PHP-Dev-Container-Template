<?php
include "namespace_helper.php";
use Test as T;

$table = new T\Table();

$table->title = "My table 1";
$table->numRows = 10;

?>
<!DOCTYPE html>
<html>

<body>

    <?php
    $table->message();
    ?>

</body>

</html>