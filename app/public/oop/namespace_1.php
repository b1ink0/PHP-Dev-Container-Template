<?php
namespace Test;
include "namespace_helper.php";

$table = new Table();

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