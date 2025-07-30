
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    /* Paste the entire CSS I gave you here */
    
    /* Navbar Styles */
    .navbar {
      background-color: #2c3e50; /* Darker blue-gray */
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.8rem;
      color: #e74c3c !important; /* appetizing red */
      letter-spacing: 2px;
    }

    .navbar-nav .nav-link {
      font-weight: 600;
      color: #ecf0f1 !important;
      transition: color 0.3s ease;
      margin-right: 15px;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-item.active .nav-link {
      color: #e74c3c !important;
    }

    /* Food Cards Section */
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(231, 76, 60, 0.4);
    }

    .card-title {
      font-weight: 700;
      color: #2c3e50;
    }

    .card-text {
      color: #34495e;
      font-size: 1rem;
    }

    .btn-primary {
      background-color: #e74c3c;
      border: none;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #c0392b;
      text-decoration: none;
    }

    /* Customer Reviews Section */
    .container > h2 {
      font-family: 'Georgia', serif;
      color: #2c3e50;
      font-weight: 700;
    }

    .card.mb-3 {
      border-left: 6px solid #e74c3c;
      border-radius: 8px;
      background-color: #fff8f7;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      transition: box-shadow 0.3s ease;
    }

    .card.mb-3:hover {
      box-shadow: 0 6px 18px rgba(231, 76, 60, 0.3);
    }

    .card-body .card-title {
      color: #e74c3c;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .card-body .card-text {
      color: #555;
      font-style: italic;
    }

    .card-body small.text-muted {
      color: #999;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
      .navbar-nav {
        text-align: center;
      }

      .navbar-nav .nav-link {
        margin-right: 0;
        padding: 8px 0;
      }

      .card:hover {
        transform: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }
    }
  </style>

</head>
  <body>

  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Delicious Eats</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Food Cards Section -->
    <div class="container mt-5">
      <div class="row">

        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Classic Beef Burger</h5>
              <p class="card-text">
                Juicy grilled beef patty with fresh veggies and special sauce. Served with crispy fries.
              </p>
              <p class="card-text">
                <strong>$8.99</strong>
              </p>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Spaghetti Carbonara</h5>
              <p class="card-text">
                Classic Italian pasta with creamy sauce, pancetta, and Parmesan cheese.
              </p>
              <p class="card-text">
                <strong>$12.50</strong>
              </p>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
          <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Fresh Caesar Salad</h5>
              <p class="card-text">
                Crisp romaine lettuce, creamy Caesar dressing, croutons, and Parmesan cheese.
              </p>
              <p class="card-text">
                <strong>$7.25</strong>
              </p>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
          </div>
        </div>

      </div>
    </div>

<!-- Customer Reviews Section -->
<div class="container mt-5">
  <h2 class="mb-4">What Our Customers Say</h2>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Jane D.</h5>
      <p class="card-text">"Absolutely loved the Classic Beef Burger! The fries were crispy and the sauce was perfect."</p>
      <p class="card-text"><small class="text-muted">Rated: ★★★★★</small></p>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">Michael S.</h5>
      <p class="card-text">"Spaghetti Carbonara was creamy and flavorful. Would definitely order again."</p>
      <p class="card-text"><small class="text-muted">Rated: ★★★★☆</small></p>
    </div>
  </div>
</div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>