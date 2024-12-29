<?php include("header.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/user.css">
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
            </ul>
        </div>
        <div>
            <ul>
                <li class="login"><a href   ="../pages/login.html">log out</a></li>
                <li>
                    <i class="fa-solid fa-cart-flatbed cart"></i>
                </li>
            </ul>
        </div>
    </header>
    <!-- user cart  -->
    <div class="cart_div" state="close">
        <h2>your cart</h2>
        <br>
        <?php
    $count=0;
        if(isset($_SESSION['cart']))
        {
        $count=count($_SESSION['cart']);
        }
    ?>
        <a href="mycart.php" class="btn btn-outline-success">My Cart (<?php  echo $count; ?>)</a>
    </div>
    </div>
    </div>
    <!-- end user cart  -->
    <section id="intro-section">
        <div class="store-intro">
            <div>
                <h1>make your live simpler with our product</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas tenetur mollitia veritatis
                    corporis qui reprehenderit ullam aliquid, atque illum rem et consectetur excepturi aliquam esse nisi
                    fugiat? Voluptatum, iusto doloribus!
                </p>
                <a href="#books-section" class="explor-button">explor our products<i
                        class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="store-image">
            <img src="../src/man book.svg" alt="">
        </div>
    </section>
    <section id="books-section">
        <div class="search-box">
            <label for="search" id="searchLabal">
                <i class="fa-brands fa-searchengin"></i>
                <select name="" id="">
                    <option value="history">history</option>
                    <option value="computer">computer</option>
                    <option value="math">math</option>
                    <option value="languages">languages</option>
                    <option value="managment">managment</option>
                </select>
                <input type="search" placeholder="find what you whant" id="search">
            </label>
        </div>
        <!-- books shower -->
        <div class="books-div">
        <table class="table">
         <thead class="text-center">
    <table  style="width:200%" border="1">
    <tr >
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">description</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
            <?php 
    $total=0;
    if(isset($_SESSION['cart']))
    {
    foreach ($_SESSION['cart'] as $key => $value)
    {
        $total = $total+$value['price'];
        echo"
        <tr>
        <td>1</td>
        <td>$value[name]</td>
        <td>$value[price]</td>
        <td>$value[description]</td>
        <td><input type='number' class='text-center' value='$value[Quantity]' min='1' max='10'></td>
        <form action='manage_cart.php' method='POST'>
        <td><button name='Remove' class='btn btn-sm btn-outline-danger'>REMOVE</button> </td>
        <input type='hidden' name='name' value='$value[name]'>
        </form>
        </tr>
        
        ";
    }
}
    ?>
   
   
  </tbody>
</table>
        </div>

        <div class="col-lg-4">
          <div class="border bg-light rounded p-4">

          <h3>Total:</h3>
            <h5><?php echo $total; ?></h5>
            <br>
            <form action="">
                <button class="btn btn-primary btn-block">Make Purchase</button>
            </form>
          </div>
               


        </div>
    </section>
    <script src="../js/user.js"></script>
</body>

</html>









 