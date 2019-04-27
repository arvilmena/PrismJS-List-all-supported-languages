<?php

require_once dirname( __FILE__, 2 ) . '/vendor/autoload.php';

use Goutte\Client;

//$client = new Client();
//
//$crawler = $client->request('GET', 'https://api.github.com/repositories/4979467/contents/components');
//
//$response = $client->getResponse();
//
//$content = json_decode( $response->getContent(), true );
//
//$files = array_column( $content, 'name' );
//
//// filter files so that:
//// only files WITHOUT `.min.`
//// only files WITH `.js`
//// only files WITH `prism-`
//$files = array_filter( $files, function($name) {
//    return false === stripos( $name, '.min.' ) && false !== stripos( $name, '.js' ) && false !== stripos( $name, 'prism-' );
//} );
//
//// clean names, remove `prism-` and `.js` to file names.
//$trimmedFiles = array_map( function($name) {
//    $name = str_replace( 'prism-', '', $name );
//    return str_replace( '.js', '', $name );
//}, $files );
//
//echo 'PrismJS Supported languages' . PHP_EOL;
//echo implode( "\n", $trimmedFiles );

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

(new Application('crawl', '1.0.0'))
    ->register('crawl')
    ->addArgument('format', InputArgument::OPTIONAL, 'The format: "list" or "named"')
//    ->addOption('bar', null, InputOption::VALUE_REQUIRED)
    ->setCode(function(InputInterface $input, OutputInterface $output) {
        $format = ($input->getArgument('format')) ?: 'list';

        echo 'Format set to: ' . $format . PHP_EOL;

        $client = new Client();

        $client->request('GET', 'https://api.github.com/repositories/4979467/contents/components');

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

        if ( 'list' === $format ) {
            echo implode( "\n", $trimmedFiles );
            return;
        }

        $client = new Client();

        $client->request('GET', 'https://prismjs.com/components.js');

        $response = $client->getResponse();

        $content = $response->getContent();

        preg_match_all( '/var components = ({.*?});/m', $content, $matches );

        $components = json_decode( $matches[1][0], true )['languages'];

        $named = array();
        foreach( $components as $key => $value ) {
            // only show those named.
            if ( ! isset($value['title']) ) continue;

            // trim check if this key is in $trimmedFiles array;
            if ( ! in_array( $key, $trimmedFiles ) ) continue;

            $named[ $key ] = $value['title'];
        }

        if ( 'named' === $format ) {
            print_r( $named );
            return;
        }

    })
    ->getApplication()
    ->setDefaultCommand('crawl', true) // Single command application
    ->run();
