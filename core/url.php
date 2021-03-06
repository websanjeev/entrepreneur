<?php

function base_url( $path = '' ) {

    $base_url = get_config( 'base_url' );
    $base_url = rtrim( $base_url, '/' );
    if( empty( $base_url ) ){
        return $path;
    }
    $base_url .= '/' . ltrim( $path, '/' );
    return $base_url;

}

function mix($path, $manifestDirectory = '')
{
    static $manifest;
    /*if ($manifestDirectory && strpos($manifestDirectory, '/') !== 0) {
        $manifestDirectory = "/{$manifestDirectory}";
    }*/
    $manifestDirectory = APP_PATH . '/' .  $manifestDirectory;
    if (! $manifest) {
        if (! file_exists($manifestPath = $manifestDirectory.'/mix-manifest.json')) {
            throw new Exception('The Mix manifest does not exist.');
        }
        $manifest = json_decode(file_get_contents($manifestPath), true);
    }
    if (strpos($path, '/') !== 0) {
        $path = "/{$path}";
    }
    if (! array_key_exists($path, $manifest)) {
        throw new Exception(
            "Unable to locate Mix file: {$path}. Please check your ".
            'webpack.mix.js output paths and try again.'
        );
    }
    return file_exists($manifestDirectory.'/hot')
        ? "http://localhost:8080{$manifest[$path]}"
        : $manifest[$path];
}