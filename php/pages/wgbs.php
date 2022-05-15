<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" href="../../img/icon.jpg">
    <title>WGBS - AY</title>
</head>
<body>
<style>
    * {
        overflow-y: hidden;
    }
</style>
<nav class="navbar navbar-expand-sm navbar-light" id="neubar">
    <div class="container">
        <a class="navbar-brand" href="#">Alperen Yilmaz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="#">WGBS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="gif.php">GIF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="video.php">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="journal.php">Journal</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="ttl-index">
    <h1 class="h1">WGBS</h1>
    <hr>
    <h3>If the image doesn't load correctly, you have to reload the website at least once!</h3>
</div>
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src='../backend/b-wgbs.php' width="670" height="720"></iframe>
</div>
</body>
</html>