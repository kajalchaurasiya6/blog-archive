<?php
    // ? CURR_PATH variable stores file path relative to root directory!
    $CURR_PATH = "./";

    // ? PAGE_TITLE variable stores title for current page that will be injected
    // ? into PHP Partials
    $PAGE_TITLE = "";

    // * Including required files
    require_once $CURR_PATH."includes/header.php";
    include_once $CURR_PATH."config/db.php";

    if(!isset($_SESSION['name'])) {
        header("Location: ".$CLIENT_PATH."/auth/login");
    }

    // ! Connecting to Database
    $db = new Database();
    $db->connect();
?>
<h1>Hello</h1>
<?php require_once $CURR_PATH."includes/footer.php"?>