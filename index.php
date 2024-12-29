<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/home.css">
    <title>ShopNow</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="title">
            <i class="fa-brands fa-shopify"></i>
            <h1>ShopNow</h1>
        </div>
        <div class="category-div">
            <ul>
                <li class="list" state="close">category<i class="fa-solid fa-angle-down"></i></li>
                <a href="pages/admin_our_books.php" class="explor-button">Admin<i class="fa-solid fa-angles-right"></i></a>
                <a href="pages/user.php" class="explor-button" >User<i class="fa-solid fa-angles-right"></i></a>
                
            </ul>
        </div>
        <div>
            <ul>
                <li class="login"><a href="pages/login.html">log in</a></li>
                <li><a href="pages/signup.html">sign up</a></li>
            </ul>
        </div>
    </header>
    <section id="intro-section">
        <div class="store-intro">
            <div>
                <h1>make your live simpler with our product</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas tenetur mollitia veritatis corporis qui reprehenderit ullam aliquid, atque illum rem et consectetur excepturi aliquam esse nisi fugiat? Voluptatum, iusto doloribus!
                </p>
                <a href="#books-section" class="explor-button">explor our product<i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="store-image">
            <img src="src/shop.png" alt="">
        </div>
    </section>
    <section id="books-section">
        <div class="search-box">
            <label for="search" id="searchLabal">
                <i class="fa-brands fa-searchengin"></i>
                <select name="" id="">
                    <option value="history">home tools</option>
                    <option value="computer">cloth</option>
                    <option value="math">electronic</option>
                    <option value="languages">books</option>
                    <option value="managment">woods</option>
                </select>
                <input type="search" placeholder="find what you want" id="search">
            </label>
        </div>
    </section>
    <script src="js/home.js"></script>
</body>
</html>