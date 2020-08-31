<?php

use Intervention\Image\ImageManager;

$manager = new ImageManager(array('driver' => 'gd'));
$watermark = $manager
    ->make('img/logo.png')
    ->resize(100, null, function ($watermark)
    {
        $watermark->aspectRatio();
    })
    ->opacity(40)
    ->invert()
    ->save('results/logo.png');

$image = $manager
    ->make('img/cat.png')
    ->resize(200, null, function ($image) {
        $image->aspectRatio();
    })
    ->insert('results/logo.png', 'bottom-left', 5, 5)
    ->save('results/cat.png');
;