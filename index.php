<?php
#   Write text on image 
#-------------------------
# 1/ first you need to install composer 
# 2/ install intervention/image
# 3/ need to have image to write on and need font 
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'gd'));

// to finally create image instances
$image = $manager->make('image.jpg');

// write text at position
#$image->text('The quick brown fox jumps over the lazy dog.', 20, 100);
//or we can use anthor method 
// use callback to define details
$image->text('The quick brown fox jumps over the lazy dog.', 400, 500, function($font) {
    $font->file(__DIR__.'/font.woff'); # font file
    $font->size(100); # font size
    $font->color('#F00'); # font color
    // $font->align('center');
    // $font->valign('top');
    // $font->angle(45);
});


// save 
$image->save('new_image.jpg');
?>

<img src="new_image.jpg" alt="">
