<DOCTYPE html>

    <html>
    <head>
        <meta charset="UTF-8">
        <title><?php    echo $title;    ?></title>
        <?php include_once "/../../includes/CSS_Link.php";?>
        <link rel = "stylesheet" type = "text/css" href = "http://localhost/php/css/admin.css">
    </head>

    <body>

    <div id="page">

        <div id="header">
            <h1>Welcome</h1>

            <?php
            $user = $this->session->userdata('user');
            if(isset($user)) echo $user;
            else redirect(base_url().'auth/login', 'refresh');
            ?>

            <br>

            <a href="<?php echo base_url()."auth/unset_session_data" ?>">Logout</a>
        </div>

        <div id="member_main">