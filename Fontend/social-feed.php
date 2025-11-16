<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omacha Shop | Social Feed</title>
    <link rel="stylesheet" href="social-feed.css">
    <!-- Add your existing website fonts and icons -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="images/Omacha-Shop_3000x3000/OmachaShop-Logo2.png" />
</head>
<body class="bs-dark bg-dark text-white">
    <!-- Header Navigation -->
    <header style="background: linear-gradient(145deg, #1a1a1a, #2d2d2d); border-bottom: 1px solid #333;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.php" style="font-family: 'Baloo 2', sans-serif;">
                        <img src="images/Omacha-Shop_3000x3000/OmachaShop-Logo2.png" alt="Omacha Shop" height="40" class="d-inline-block align-text-top me-2">
                        Omacha Shop
                    </a>
                    
                    <!-- Navigation Links -->
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                        <a class="nav-link" href="product.php">
                            <i class="fas fa-shopping-bag me-1"></i>Shop
                        </a>
                        <a class="nav-link" href="shopping-cart.php">
                            <i class="fas fa-shopping-cart me-1"></i>Cart
                        </a>
                        <a class="nav-link active" href="social-feed.php">
                            <i class="fab fa-tiktok me-1"></i>Social Feed
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container container-fluid py-4">
        <!-- Page Header -->
        <div class="header">
            <div class="text-center mb-4">
                <img src="images/Omacha-Shop_3000x3000/OmachaShop-Logo2.png" alt="Omacha Shop" height="80" class="mb-3">
                <h1>Omacha Shop Social Stream</h1>
                <p class="lead">Discover the latest trends and stay connected with our community</p>
            </div>
            
            <div class="status">
                <div class="status-dot"></div>
                Live TikTok feeds updating in real-time
            </div>
        </div>

        <!-- Two Column Layout for TikTok Feeds -->
        <div class="two-column-layout">
            <div class="column">
                <div class="feed-wrapper">
                    <div class="feed-title">
                        <i class="fab fa-tiktok" style="color: #EE1D52;"></i>
                        #OnlineShopping Trends
                    </div>
                    <div class="powr-container">
                        <div class='sk-ww-tiktok-hashtag-feed' data-embed-id='25619777'></div>
                    </div>
                </div>
            </div>
            
            <div class="column">
                <div class="feed-wrapper">
                    <div class="feed-title">
                        <i class="fab fa-tiktok" style="color: #EE1D52;"></i>
                        #Ecommerce Business
                    </div>
                    <div class="powr-container">
                        <div class='sk-ww-tiktok-hashtag-feed' data-embed-id='25619773'></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="instructions">
            <h3>About This Social Hub</h3>
            <ul>
                <li>Real-time TikTok feeds curated for online shopping enthusiasts</li>
                <li>Discover trending products and ecommerce insights</li>
                <li>Stay updated with the latest in digital retail</li>
                <li>Perfect theme for comfortable extended browsing</li>
            </ul>
        </div>

        <!-- Back to Shopping CTA -->
        <div class="text-center mt-5">
            <a href="product.php" class="btn btn-primary btn-lg" style="background: linear-gradient(45deg, #EE1D52, #69C9D0); border: none; padding: 12px 30px;">
                <i class="fas fa-arrow-left me-2"></i>Back to Shopping
            </a>
        </div>

        <div class="footer">
            <p>Omacha Shop Social Hub | Powered by SociableKit | Feeds update automatically</p>
        </div>
    </div>

    <script src='https://widgets.sociablekit.com/tiktok-hashtag-feed/widget.js' defer></script>
</body>
</html>