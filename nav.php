
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Luxury Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
  
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #e0be9f;  
    color: #333333;
}

.navbar {
    background-color: #997959;  
    border: 1px solid #786C3B;  
    color: #FFF599;
    width: 100%;
    z-index: 10; 
    padding: 1px 2%; 
}

.navbar-brand {
    color: #333333; 
    font-size: 2rem; 
    font-weight: bold; 
}

#navbarNav li {
    display: inline;
}

#navbarNav li a {
    color: #333333;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    margin: 0 10px; 
    text-decoration: none;
    position: relative;
    padding: 5px 10px;
}

#navbarNav li a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -5px;
    left: 0;
    background-color: #D9A45A;
    transition: width 0.3s;
}

#navbarNav li a:hover {
    color: black; 
    border-radius: 10px; 
    padding: 5px 10px; 
}

#navbarNav li a:hover::after {
    width: 100%;
}

.button {
    width: 40%;
    max-width: 250px; 
    height: 2em;
    border-radius: 10px;
    background: #D9A45A;
    font-size: 17px;
    font-family: inherit;
    border: none;
    position: relative;
    overflow: hidden;
    z-index: 1;
    color: #333333;
    font-weight: bold;
    margin: 10px;
    text-decoration: none;
    display: flex; 
    justify-content: center; 
    align-items: center;
}

.button::before {
    content: '';
    width: 0;
    height: 2em;
    border-radius: 10px;
    position: absolute;
    top: 0;
    left: 0;
    background-image: linear-gradient(to right, #A3B700 0%, #E2C94C 100%);
    transition: .5s ease;
    display: block;
    z-index: -1;
}


.button:hover::before {
    width: 100%; 
}

.d-flex {
    justify-content: center;
    align-items: center;
    margin: 20px;
}

footer {
    background-color: #997959;  
    border: 1px solid #786C3B; 
    text-align: center;
    padding: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}

footer p {
    margin: 0;
    color: #333333;
}

footer {
    padding: 10px 5%;
}

.icons a {
    color: #333333;
    margin: 0 10px;
    font-size: 1.5rem;
    transition: color 0.3s ease;
}

.icons a:hover {
    color: #333333;
}

        .hero {
            background: url('C:/Users/Gist/Desktop/hotel/recp.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 150px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .header{
            color: #865d36;
        }
        .sub_header{
            color: #865d36  ;
        }



    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" id="nav">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./12465.png" alt="Logo" width="120" id="logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="nav.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servics.php">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Gallery</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="signup.php" class="btn button">Register</a>
                <a href="login.php" class="btn button">Login</a>
            </div>
        </div>
    </div>
</nav>


<!-- Hero Section -->
<section class="hero-section">
    <div class="content">
        <h1>Welcome To Our Hotel</h1>
        <p>Discover our world's #1 Luxury Room For VIP.</p>
        
        
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Luxury Hotel. All rights reserved.</p>
    <div class="icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
    </div>
</footer>
</body>
</html>
