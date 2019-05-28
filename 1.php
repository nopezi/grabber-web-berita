<?php

require_once 'simple-parse/simple_html_dom.php';
header('Content-type: application/json');
$html = file_get_html('https://tekno.kompas.com');

$data2 =  $html->find('title', 0)->plaintext;
$data3 =  $html->find('h3', 2);
// echo $data3;
// echo $data2;
ini_set("memory_limit","-1");
$title = $html->find('h3.article__title');
$isi = $html->find('div.article__lead');
// print_r($list);
for ($i=0; $i < 15; $i++) { 
    # code...
    // $berita = array();
    $berita['title'] = $title[$i]->plaintext;
    $berita['isi'] = $isi[$i]->plaintext;
    print_r($berita);
    // print_r($berita);
    // echo json_encode($berita);
    // print_r($berita);
}

// echo $list;

// // echo $list;
// $list_array = $list->find('a');

// for ($i=0; $i < 1; $i++) { 
//     # code...
//     echo $list_array[$i];
// }

// foreach($html->find('div.article__box') as $article) {
//     $item['title']     = $article->find('h3.article__title', 0)->plaintext;
//     $item['intro']    = $article->find('div.article__lead', 0)->plaintext;
//     // $item['details'] = $article->find('div.details', 0)->plaintext;
//     $articles[] = $item;
// }
// print_r(json_encode($articles));