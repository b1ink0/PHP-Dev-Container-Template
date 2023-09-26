<?php
include "namespace_helper.php";

$table = new Test\Table();

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