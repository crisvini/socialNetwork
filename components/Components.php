<?php

class Components
{
    public static function head($title)
    {
        return '<meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="preconnect" href="https://fonts.googleapis.com">
              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
              <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
              <script src="https://cdn.tailwindcss.com"></script>
              <link rel="stylesheet" href="./css/style.css">
              <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
              <script src="./lib/vanilla-masker.min.js"></script>
              <script src="./js/functions.js"></script>
              <title>socialNetwork > ' . $title . '</title>';
    }

    public static function lang()
    {
        return '<html lang="en">';
    }
}
