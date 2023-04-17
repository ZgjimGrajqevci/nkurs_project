<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B7XKCPR71F"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-B7XKCPR71F');
    </script>
    <title>
        <?php
        if (empty($title)){
            echo "nkurs";
        }
        else{
            echo "nkurs - $title";
        }
        $activePage = basename($_SERVER['PHP_SELF'], ".php");
        ?>
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" type="image/x=icon" href="assets/images/logo/nLogo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>