<?php

require_once 'simple-parse/simple_html_dom.php';


header('Content-type: application/json');




        $html = file_get_html('https://tekno.kompas.com');
        $title = $html->find('h3.article__title');
        $link = $html->find('a.article__link');
        
        // $gambar = $html->find('div.article_asset');
        // $gambar1 = $gambar->find('img');
        // foreach ($html->find('div.article_asset') as $img) {
        //     $gambar = $img->find('img', 0)->src;
        // }
        $gambar = $html->find('div.article__asset img');
        // echo $tes;
        // $gambar = $html->find('img');
        
        $isi = $html->find('div.article__lead');
        $waktu = $html->find('div.article__date');

        for ($i=0; $i < 15; $i++) { 
            # code...
            // $berita = array();
            // $berita['info'] = 'sukses';
            // $berita['title'] = $title[$i]->plaintext;
            // $berita['title'] = str_replace('"', '',$berita['title']);
            // $berita['isi'] = $isi[$i]->plaintext;

            $berita = array(
                "title" => $title[$i]->plaintext,
                "link" => $link[$i]->href,
                "gambar" => $gambar[$i]->src,
                "isi" => $isi[$i]->plaintext,
                "waktu" => $waktu[$i]->plaintext
            );
            
            $data = json_encode($berita);
            // $berita['title'] = str_replace('"', '', $data);
            // echo json_encode($berita);
            
            print_r($berita);
            // echo json_encode($berita);
            
        }
        // $berita = array();
        // $berita['info'] = 'sukses';
        // print_r($berita);
   


