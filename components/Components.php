<?php

class Components
{
    public static function head($title)
    {
        return '<meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <script src="https://cdn.tailwindcss.com"></script>
              <link rel="stylesheet" href="./css/style.css">
              <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
              <script src="./lib/vanilla-masker.min.js"></script>
              <title>socialNetwork > ' . $title . '</title>';
    }

    public static function lang()
    {
        return '<html lang="en">';
    }
}
