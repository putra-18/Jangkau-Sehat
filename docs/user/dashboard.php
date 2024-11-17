<?php 
session_start();
if(!ISSET($_SESSION["username"])) {
    echo "<script>
    alert('anda sudah logout / belum login')
    document.location.href='../index'
    </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">    
<title>Jangkau Sehat</title>
<link rel="shortcut icon" href="../img/jangkau_sehat.png">
</head>
<body>
  <div class="header mb-4" style="font-family: Roboto Slab,serif;">
    <nav class="navbar navbar-expand-lg" style="background-color: #0a4771;">
        <div class="container-fluid">
          <b><a class="navbar-brand" href="index" style="color: white;">Jangkau Sehat</a></b>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard" style="color: white;">Dashboard</a>
              </li>
            </ul>
          </div>
          <a href="logout" onclick="return confirm('yakin ingin keluar ?')"><button class="btn" style="color: white;" type="submit">Keluar</button></a>
        </div>
      </nav>
</div>
    <div class="embed" style="width: 90%; height: 100vh; margin: 0 auto;">
        <iframe width="100%" height="100%" src="https://lookerstudio.google.com/embed/reporting/c83c2dfb-85ba-4134-866b-983e08feabe3/page/9UcLE" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>