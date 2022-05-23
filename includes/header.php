<?php 
    require_once $CURR_PATH."includes/global.php";

    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog <?php echo $PAGE_TITLE ?></title>
    <link rel="shortcut icon" href=<?php echo $CURR_PATH."favicon.ico"?> type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href=<?php echo $CURR_PATH."static/css/styles.css" ?>> -->
    <?php echo $EXTRAS?>
</head>

<body>
    <?php 
        if(!isset($navbarNotReq)){ 
            require_once $CURR_PATH."includes/navbar.php";
        }
    ?>