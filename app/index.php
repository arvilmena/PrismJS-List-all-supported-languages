<?php

require_once dirname( __FILE__, 2 ) . '/vendor/autoload.php';

use Goutte\Client;

$client = new Client();

$crawler = $client->request('GET', 'https://api.github.com/repositories/4979467/contents/components');

$response = $client->getResponse();

$content = json_decode( $response->getContent(), true );

$files = array_column( $content, 'name' );

// filter files so that:
// only files WITHOUT `.min.`
// only files WITH `.js`
// only files WITH `prism-`
$files = array_filter( $files, function($name) {
    return false === stripos( $name, '.min.' ) && false !== stripos( $name, '.js' ) && false !== stripos( $name, 'prism-' );
} );

// clean names, remove `prism-` and `.js` to file names.
$trimmedFiles = array_map( function($name) {
    $name = str_replace( 'prism-', '', $name );
    return str_replace( '.js', '', $name );
}, $files );

echo 'PrismJS Supported languages' . PHP_EOL;
echo implode( "\n", $trimmedFiles );
