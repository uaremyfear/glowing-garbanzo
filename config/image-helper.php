<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Image Paths and Settings
    |--------------------------------------------------------------------------
    |
    |
    | We set the config here so that we can keep our controllers clean.
    | Configure each image type with an image path.
    |
    */

        'savehouse' => [
            'destinationFolder'     => '/images/savehouse/',
            'destinationThumbnail'      => '/images/savehouse/thumbnails/',
            'thumbPrefix'           => 'thumb-',
            'imagePath'             => '/images/savehouse/',
            'thumbnailPath'         => '/images/savehouse/thumbnails/thumb-',
            'thumbHeight'           => 120,
            'thumbWidth'            => 120,
        ],

        'foundation' => [
            'destinationFolder'     => '/images/foundation/',
            'destinationThumbnail'      => '/images/foundation/thumbnails/',
            'thumbPrefix'           => 'thumb-',
            'imagePath'             => '/images/foundation/',
            'thumbnailPath'         => '/images/foundation/thumbnails/thumb-',
            'thumbHeight'           => 120,
            'thumbWidth'            => 120,            
        ], 

        'organization' => [
            'destinationFolder'     => '/images/organization/',
            'destinationThumbnail'      => '/images/organization/thumbnails/',
            'thumbPrefix'           => 'thumb-',
            'imagePath'             => '/images/organization/',
            'thumbnailPath'         => '/images/organization/thumbnails/thumb-',
            'thumbHeight'           => 120,
            'thumbWidth'            => 120,            
        ],

        'thadin' => [
            'destinationFolder'     => '/images/thadin/',
            'destinationThumbnail'      => '/images/thadin/thumbnails/',
            'thumbPrefix'           => 'thumb-',
            'imagePath'             => '/images/thadin/',
            'thumbnailPath'         => '/images/thadin/thumbnails/thumb-',
            'thumbHeight'           => 120,
            'thumbWidth'            => 120,            
        ],
];