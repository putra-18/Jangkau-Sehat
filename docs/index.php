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
<link rel="shortcut icon" href="img/jangkau_sehat.png">
</head>
<body>
    <div class="header mb-4" style="font-family: Roboto Slab,serif;">
        <nav class="navbar navbar-expand-lg" style="background-color: #0a4771;">
            <div class="container-fluid">
              <b><a class="navbar-brand" href="user/" style="color: white;">Jangkau Sehat</a></b>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="user/dashboard" style="color: white;">Dashboard</a>
                  </li>
                </ul>
              </div>
              <a href="index"><button class="btn" style="color: white;" type="submit">Masuk</button></a>
            </div>
          </nav>
    </div>
<div class="login d-flex justify-content-evenly">
    <div class="img">
    <img src="img/jangkau_sehat.png" alt="" width="500" height="500">
  </div>
    <div class="form_login" style="margin: auto;">
      <form  action="proses_login" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input name="username" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
       <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        
     <button type="submit" class="btn btn-primary" name="login">Submit</button>
  </form>
    </div>
  </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>