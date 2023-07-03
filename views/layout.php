<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Conf Bs As - <?php echo $title; ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="/build/img/codoacodo.png"/>
    <link href="/build/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/build/css/main.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body data-bs-spy="scroll" data-bs-target="#nav" class="d-flex flex-column min-vh-100">
    <?php 
        if($title != "Index") {
            include_once __DIR__ .'/templates/header.php';
        };
        
        echo $content;
        include_once __DIR__ .'/templates/footer.php'; 
    ?>
    <script src="/build/js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="/build/js/main.js" crossorigin="anonymous"></script>
</body>
</html>