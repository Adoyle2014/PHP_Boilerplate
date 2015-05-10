<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="" content="">
    <link rel="icon" href="../../favicon.ico">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URI; ?>templates/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI; ?>templates/css/custom.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo BASE_URI; ?>templates/js/bootstrap.js"></script>
    <script src="<?php echo BASE_URI; ?>templates/js/ckeditor/ckeditor.js"></script>

    <?php
    //Check if title is set, if not set default
    if(!isset($title)) {
        $title = SITE_TITLE;
    }
    ?>

</head>

<body>


