<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Uploader driver.
    |--------------------------------------------------------------------------
    |
    | Support local, s3
    |
    */

    'default' => 's3',

    'drivers' => array(

        'local' => array(

            /*
            |--------------------------------------------------------------------------
            | Base path (support only local driver)
            |--------------------------------------------------------------------------
            |
            | Full path to view your image
            | http://...image.jpg
            |
            |
            */

            'baseUrl' => \URL::to(''),

            /*
            |--------------------------------------------------------------------------
            | Base storage dir (support only local driver)
            |--------------------------------------------------------------------------
            |
            | Base directory to store uploaded files.
            |
            */

            'baseDir' => \App::make('path.public'),

        ),

        's3' => array(

            'key'    => 'AKIAIGAYWWN45WRIYKUQ',
            'secret' => '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',
            'region' => 'ap-southeast-1',
            'bucket' => 'teeplus',

        )

    ),

    /*
    |--------------------------------------------------------------------------
    | Upload type.
    |--------------------------------------------------------------------------
    |
    | Up allow upload type simple, remote, base64
    | by the default set detect.
    |
    */

    'type' => 'detect',

    /*
    |--------------------------------------------------------------------------
    | Append sub directory to 'base_dir'
    |--------------------------------------------------------------------------
    |
    | You can append a sub directories to base path
    | this allow you to use 'Closure'.
    |
    */

    'subpath' => 'uploads',

    /*
    |--------------------------------------------------------------------------
    | All scales to resize.
    |--------------------------------------------------------------------------
    |
    | For image uploaded you can resize to
    | selected or whole of scales.
    |
    */

    'scales' => array(
        //'wm' => array(260, 180),
        //'wl' => array(300, 200),
        //'wx' => array(360, 270),
        //'ww' => array(260, 120),
        'ws' => array(160, 120),
        'l'  => array(200, 200),
        'm'  => array(125, 125),
        's'  => array(64, 64),
        'ss' => array(45, 45)
    ),

    /*
    |--------------------------------------------------------------------------
    | Upload quality.
    |--------------------------------------------------------------------------
    |
    | Quality, resolution and flatten all uploaded.
    |
    */

    'quality' => array(
        'jpeg' => 90,
        'png'  => 90
    ),

    /*
    |--------------------------------------------------------------------------
    | Callback on each file uploaded.
    |--------------------------------------------------------------------------
    |
    | This should be closure to listen when each file uploaded.
    |
    */

    'onUpload' => null,

    /*
    |--------------------------------------------------------------------------
    | Callback on all files uploaded.
    |--------------------------------------------------------------------------
    |
    | This should be closure to listen when all files uploaded.
    |
    */

    'onComplete' => null,

    /*
    |--------------------------------------------------------------------------
    | Callback on all files deleted.
    |--------------------------------------------------------------------------
    |
    | This should be closure to listen when file deleted.
    |
    */

    'onRemove' => null,

);