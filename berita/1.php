<?php require_once '../kiblat_news.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <!-- <script src='https://code.responsivevoice.org/responsivevoice.js'></script> -->
     <script src="//code.responsivevoice.org/responsivevoice.js?key=loTExm6m"></script>
    <title>Berita</title>
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-md-3">
            <div class="card">
                lorem6
            </div>
        </div>
            

        <div class="col-md-7">
        <?php
        for ($i=0; $i < 30; $i++) { 
                
            $posting = array(
                    "title" => $title[$i]->plaintext,
                    "link"  => $link[$i]->href,
                    "gambar" => $gambar[$i]->$property,
                    "isi"    => $isi[$i]->plaintext,
                    "waktu"  => $waktu[$i]->plaintext    
                
            );

            $data = json_encode($posting);
            $judul = $posting['title'];
        ?>
            <div class="hoverable">
                <div class="row">
                    <div class="col-md-3">
                        <img class="card-img-top" src="https://www.kiblat.net/<?=$posting['gambar']?>">
                    </div>
                    
                    <div class="col-md-9">
                    <div class="card-body">
                        <h6 class="card-title mr-0"> <a href="https://www.kiblat.net/<?=$posting["link"]?>" target="_blank"><?=$posting["title"]?></a></h5>
                        <p class="card-text"><?=$posting["isi"]?></p>
                        <p class="card-text"><small class="text-muted"><?=$posting['waktu']?></small></p>
                    </div>
                    </div>
                </div>
            </div>
            
            <?php } ?> 
        </div>

        <div class="col align-self-center">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
        </div>
        <?php
          echo $judul = $title[0]->plaintext;
        ?>
        <script type="text/javascript">
        var judul = <?=$data?>;
        responsiveVoice.speak(judul.title, "Indonesian Female", {pitch: 2}); 
     </script>
     <script type="text/javascript">
         var emp = <?=$data?>;
         console.log(emp.title);
     </script>
            <!-- <div class="col s2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quibusdam veritatis iure, laudantium eveniet maiores fugit sapiente doloribus exercitationem voluptatum aspernatur magni minima sit alias non voluptas at provident rerum?
            </div>
            <div class="col s2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quibusdam veritatis iure, laudantium eveniet maiores fugit sapiente doloribus exercitationem voluptatum aspernatur magni minima sit alias non voluptas at provident rerum?
            </div>
            <div class="col s2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quibusdam veritatis iure, laudantium eveniet maiores fugit sapiente doloribus exercitationem voluptatum aspernatur magni minima sit alias non voluptas at provident rerum?
            </div> -->
    </div>
</div> 
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>