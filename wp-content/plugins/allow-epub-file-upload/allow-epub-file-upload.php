<?php

/*
Plugin Name: Allow ePUB File Upload
Version: v1.0
Plugin URI: https://www.tipsandtricks-hq.com/wordpress-plugin-to-allow-epub-file-uploads-to-your-wordpress-site-8726
Author: Tips and Tricks HQ
Author URI: https://www.tipsandtricks-hq.com/
Description: WordPress doesn't let you upload ePUB file via the media uploader. This plugin will enable the uploading of ePUB file types.
License: GPL2
*/

//Slug - epubfu

function epubfu_add_upload_mimes($mimes) {

    $mimes = array_merge($mimes, array(
        'epub|mobi' => 'application/octet-stream'
    ));
    return $mimes;
}

add_filter('upload_mimes', 'epubfu_add_upload_mimes');
