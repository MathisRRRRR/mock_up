<!Doctype html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="./static/css/base.css">
    <link rel="stylesheet" href="./static/css/account.css">
</head>

<body>
    <?php include("template/header.php"); ?>


    <?php
    if (isset($_GET['page'])) {
        include("template/quizz.php");
    } else {
        include("template/home.php");
    }

    include('template/footer.php'); ?>
</body>

</html>