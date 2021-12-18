<?php
  include_once './templates/navbar.php';

  function start_document($title) {
    $nav = navbar($title);
    
    $start = <<<"EOT"
    <!DOCTYPE html>
      <html lang="en">  
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="/static/bootstrap/bootstrap.min.css">
          <link rel="stylesheet" href="/static/font_awesome/css/font-awesome.min.css">
          <link rel="stylesheet" href="/static/style.css">
          <title>$title</title>
        </head>
      <body>
      $nav
    EOT;

    echo $start;
  }
?>
