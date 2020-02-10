<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel = "stylesheet" href = "CSS.css">
</head>


<?php

include "header.php";
include "form.php";
include "footer.php";
?>

</body>

</html>