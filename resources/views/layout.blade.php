<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="./asset/favicon/favicon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Roboto&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/20d905b1f0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="asset/css/style.css">
  <title>DevPosts</title>
</head>

<body>
  <header id='main-header'>
    <div class="header-container">
      <div class="bio-wrapper">
        <h2>Biswajit's Blog</h2>
        <img src="asset/img/js.jpg" alt="author-img">
        <p>Hey I am Biswajit, Expert in both font-end and back-end of web application using modern technologies.</p>
      </div>
      <div class="socials-wrapper">
        <i class="fab fa-twitter fa-lg"></i>
        <i class="fab fa-facebook-f fa-lg"></i>
        <i class="fab fa-stack-overflow fa-lg"></i>
        <i class="fab fa-github-alt fa-lg"></i>
      </div>
      <div class="navbar-wrapper">
        <ul>
          <li><i class="fas fa-home"></i> <a href="{{URL::to('/')}}">HOME</a></li>
        <li><i class="fas fa-user"></i> <a href="{{URL::to('/about')}}">ABOUT ME</a></li>
        <li><i class="fas fa-edit"></i> <a href="{{URL::to('/create_post')}}">ADD NEW POST</a></li>
        </ul>
      </div>
      <div class="button-wrapper">
        <a href="#">Get In Touch</a>
      </div>
    </div>
  </header>

  <section id="main-body">
    <div class="site-top">
      <h1>DevPosts</h1>
      <p>A developer community!</p>
      <form action="GET" id="search-post">
        <input type="text" name="" id="" placeholder="Enter post title here">
        <input type="submit" value="SEARCH">
      </form>
    </div>
    {{-- Header and sidebar end --}}
    @yield('content')
    {{-- Footer --}}
    <footer id="main-footer">
      <p>Design and Developed by Biswajit Biswas</p>
    </footer>
  </section>
</body>

</html>