<!DOCTYPE html>
<html>

    <head>
        <meta charset=”UTF-8”>

        <link rel = "stylesheet" type = "text/css" href = "http://localhost/php/css/page.css">

        <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">

        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
        <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <title><?php echo $title; ?></title>

    </head>

    <body>

    <div id="page">

        <div id="header">
            <ul>
                <li><a href="<?php echo base_url().'lang_control/change_language/romanian';?>">Romanian</a></li>
                <li><a href="<?php echo base_url().'lang_control/change_language/english';?>">English</a></li>
            </ul>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>



