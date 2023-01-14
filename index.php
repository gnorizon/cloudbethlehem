<?php
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Bethlehem</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-danger container-fluid">
                <a class="navbar-brand white-link mr-5" href="#"> Cloud Bethlehem</a>
                <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-5">
                    <li class="nav-item active">
                      <a class="nav-link white-link active-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link white-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link white-link" href="#">Contact</a>
                      </li> -->
                  </ul>
                </div>
            </nav>
        </div>
        <div class="row mt-1">
            <div class="col-md-4 mb-3">
                <img class="image-full" src="./assets/images/gla.png" alt="">
            </div>
            <div class="col-md-8">
                <div class="row songs">
                    <?php
                        $files = get_files("musics");
                        foreach ($files as $file) {
                            if(!is_dir($file)){
                            $song_details = get_song_details($file);
                    ?>
                    <div class="col-md-4 col-sm-6 song mb-3 row">
                        <img class="img-fluid col-12 song-art" src="./assets/images/<?php echo $song_details["artist_name"].' - '.$song_details["song_title"];?>.png"  alt="">
                        <div class="song-details col-12">
                            <div class="song-title"><?php echo $song_details["song_title"];?></div>
                            <div class="song-artist"><?php echo $song_details["artist_name"];?></div>
                            <div class="text-center">
                                <a href="musics/<?php echo $file;?>" class="btn btn-danger white-link" download>Download</a>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
        <footer class="bg-danger row text-white text-center">
            <div class="col-12 text-center" style="padding-top: 10px;padding-bottom:5px;">
                <p style="padding-top: 5px;padding-bottom:5px;" >&copy; 2023</p>
                <p>Powered by Gnorizon </p>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




