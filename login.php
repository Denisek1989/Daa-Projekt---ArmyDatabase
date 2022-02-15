
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset-UTF-8">
        <title>Login</title>
</head>
<body>
    <?php
    
    if($_POST["Meno"] == "Mato" && $_POST["Heslo"] == "kukurista")
    {
        echo "Uspesne prihlasenie xdddddddd";
    }
    else{
        echo "Zle meno alebo heslo";
        header("Location: http://localhost/dotaznik.php");
        exit();
    }
?>

</body>
</html>