<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Biography'); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5dc; 
            font-family: Arial, sans-serif;
            color: #2c2c2c;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
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

        
        footer {
            background: #5a4634; 
            color: #f5f5dc; 
            text-align: center;
            padding: 15px;
            margin-top: auto;
            font-size: 14px;
        }

        
        .profile-card {
            width: 500px;
            margin: 50px auto;
            border-radius: 15px;
            overflow: hidden;
            background: #fffaf0; 
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .banner {
            height: 160px;
            position: relative;
            background-image: url('<?php echo e(asset('pictures/cat.jpg')); ?>');
            background-size: cover;
            background-position: center;
        }

        .avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 4px solid #fffaf0;
            position: absolute;
            bottom: -55px;
            left: 30px;
            background-size: cover;
            background-position: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .content {
            padding: 70px 25px 25px;
        }

        .content h2 {
            font-weight: bold;
            color: #5a4634; 
        }

        .content h4, .content h5 {
            color: #8b6f47; 
        }

        .content p, .content ul {
            color: #3a2e2e;
        }

        hr {
            border: 0;
            border-top: 2px solid #d2b48c; 
            margin: 15px 0;
        }

        
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            padding: 30px;
        }

        .card {
            background: #fffaf0; 
            border: 1px solid #d2b48c; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.2rem;
            color: #4a3c2a; 
            font-weight: bold;
        }

        .card-text {
            font-size: 0.95rem;
            color: #6e5b43; 
            margin-bottom: 15px;
        }

        .btn-custom {
            background: #c3a373; 
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
            font-weight: 500;
            transition: background 0.3s, transform 0.2s;
        }

        .btn-custom:hover {
            background: #8b7355; 
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <img src="<?php echo e(asset('pictures/ispsc.jpg')); ?>" alt="Logo">
            
        </div>
        <nav>
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="#">Gallery</a>
            <a href="#">Contacts</a>
            
        </nav>
    </header>

    <div class="main-content">
        <?php echo e($slot); ?>

    </div>

    <footer>
        <p>2025 Our Biography Project | Designed in Laravel</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\myapp\resources\views/components/layout.blade.php ENDPATH**/ ?>