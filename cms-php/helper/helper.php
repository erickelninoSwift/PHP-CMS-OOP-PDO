<?php 

//production level base url http://locahost or https://www.google.com for our link url 
    function base_url($path = ''){

        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];

        $base_url = $protocol .$host . "/" . trim($path);
        return  $base_url;
        
    }

    // this will give us the root path of our project /Applications/MAMP/htdocs/php_basics/CMS-OOP/cms-php/
    function base_root_path($path = '') {
        //
        $root_path = dirname(__DIR__);
        return $root_path . DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR);
        
    }


    // this is for our upload folder path
    function uploads_path ($file_name = '') {
       return base_root_path('uploads' . DIRECTORY_SEPARATOR . $file_name);
    }

    // uploads file url 

    function uploads_url($filename = '') {
      return base_root_path('uploads/' . ltrim($filename , DIRECTORY_SEPARATOR));
    }

    function assets_url ($filename = '') {
      return base_url('assets' . DIRECTORY_SEPARATOR  ) . ltrim($filename, '/');
    }

    function classes_url ($filename = '') {
      return base_root_path('classes' . DIRECTORY_SEPARATOR . ltrim($filename) );
    }

    function redirect($url){
        header('location : ' . base_url($url));
        exit;
    }