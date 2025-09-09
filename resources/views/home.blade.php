<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Biography Project</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f5f5dc; 
      font-family: Arial, sans-serif;
      color: #2c2c2c;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    
    header {
      background: #5a4634;
      color: #f5f5dc;
      padding: 12px 90px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    header .logo img {
      width: 70px;
      height: 70px;
      object-fit: cover;
      border-radius: 50%;
      background: #fffaf0;
      border: 2px solid #d2b48c;
    }

    header nav a {
      color: #f5f5dc;
      text-decoration: none;
      font-size: 16px;
      margin-left: 20px;
      padding: 6px 10px;
      border-radius: 6px;
      transition: background 0.3s;
    }

    header nav a:hover {
      background-color: #8b6f47;
    }

    
    .hero {
      flex: 1;
      text-align: center;
      padding: 80px 20px;
      background: linear-gradient(rgba(90, 70, 52, 0.8), rgba(90, 70, 52, 0.8)), url("{{ asset('pictures/cat.jpg') }}") center/cover no-repeat;
      color: #f5f5dc;
    }

    .hero h1 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 20px;
      margin-bottom: 30px;
    }

    .hero .btn {
      background-color: #8b6f47;
      color: #f5f5dc;
      border: none;
      padding: 12px 25px;
      font-size: 18px;
      border-radius: 8px;
      transition: background 0.3s;
    }

    .hero .btn:hover {
      background-color: #5a4634;
    }

    
    .features {
      padding: 60px 20px;
      background: #fffaf0;
      text-align: center;
    }

    .features h2 {
      color: #5a4634;
      font-weight: bold;
      margin-bottom: 40px;
    }

    .feature-box {
      background: #f5f5dc;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }

    .feature-box h4 {
      color: #8b6f47;
      margin-bottom: 10px;
    }

    
    footer {
      background: #5a4634; 
      color: #f5f5dc; 
      text-align: center;
      padding: 15px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  
  <header>
    <div class="logo">
      <img src="{{ asset('pictures/ispsc.jpg') }}" alt="Logo">
      
    </div>
    <nav>
      <a href="{{ route('biographies') }}">BIOGRAPHIES</a>
      <a href="{{ route('cats.index') }}">CATS</a>
      <a href="#">CONTACT</a>
    </nav>
  </header>

  
  <section class="hero">
    <h1>Welcome to Our Biography Project</h1>
    <p>Discover inspiring stories and memorable journeys.</p>
    <a href="#" class="btn">Learn More</a>
  </section>

 
  <section class="features container">
    <h2>About Our Project</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="feature-box">
          <h4>Our Story</h4>
          <p>We created this project to share life stories and achievements in a creative way.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-box">
          <h4>Our Mission</h4>
          <p>To preserve memories and provide inspiration through biographies and photos.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-box">
          <h4>Our Vision</h4>
          <p>To connect people through storytelling and bring history to life.</p>
        </div>
      </div>
    </div>
  </section>

  
  <footer>
    <p>2025 Our Biography Project | Designed with Laravel</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></scrip
