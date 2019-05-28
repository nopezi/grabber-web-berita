<?php

require_once 'simple-parse/simple_html_dom.php';

function kiblat_news(){
    // header('Content-type: application/json');
    $property = 'data-original';
    $html = file_get_html('https://www.kiblat.net/news/nasional/');

    $title   = $html->find('div.js-ajax-wrap p.title');
    $link    = $html->find('div.js-ajax-wrap p.title a');
    $gambar  = $html->find('div.js-ajax-wrap img');
    $isi     = $html->find('div.js-ajax-wrap p.excerpt');
    $waktu   = $html->find('div.js-ajax-wrap span.time');

    for ($i=0; $i < 15; $i++) { 
        
        $posting = array(
                "title" => $title[$i]->plaintext,
                "link"  => $link[$i]->href,
                "gambar" => $gambar[$i]->$property,
                "isi"    => $isi[$i]->plaintext,
                "waktu"  => $waktu[$i]->plaintext    
        );

        $data = json_encode($posting);
        return $posting;
        // print_r($posting);

    }
}