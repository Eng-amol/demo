<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cart2024";
$conn1 = new PDO("mysql:host=$servername;dbname=$dbname",$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn1->exec("SET CHARACTER SET UTF8");

$conn = mysqli_connect("localhost","root","","cart2024");
$id='';
$name='';
$price='';
$description='';
$image='';
$update = false;
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $stm = "DELETE FROM products WHERE id=$id";
    mysqli_query($conn,$stm)or die($mysqli->error());
}

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $image=$_POST['image'];
    $stm = "UPDATE products SET name='$name',price=$price,description='$description',image='$image' WHERE id=$id";
    mysqli_query($conn,$stm)or die($mysqli->error());
}


if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $update = true;
    $stm = "SELECT * FROM products WHERE id=$id";
    $result =  mysqli_query($conn,$stm)or die($mysqli->error());
    if(count($result)==1)
    {
        
        $row = $result->fetch_array();
        $id = $row['id'];
        $name=$row['name'];
        $price = $row['price'];
        $description = $row['description'];
        $image = $row['image'];
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/user.css">
    <title>NBook</title>
</head>

<body>
    <!-- header -->
    <header>
        <div class="title">
            <i class="fa-solid fa-lines-leaning"></i>
            <h1>SunBook</h1>
        </div>
        <div class="category-div">
            <ul>
                <li class="list" state="close">category<i class="fa-solid fa-angle-down"></i></li>
                <li class="list" state="close">pages<i class="fa-solid fa-angle-down"></i></li>
                <li class="list" state="close">authories<i class="fa-solid fa-angle-down"></i></li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="login"><a href="../pages/login.html">log out</a></li>
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
                <h1>change your live by our books</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas tenetur mollitia veritatis
                    corporis qui reprehenderit ullam aliquid, atque illum rem et consectetur excepturi aliquam esse nisi
                    fugiat? Voluptatum, iusto doloribus!
                </p>
                <a href="#books-section" class="explor-button">explor our books<i
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
            <?php
                if(isset($_POST['submit']))
                {
                    
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $image = $_POST['image'];
                   
                    
                    $stm = "INSERT INTO products (name,price,description,image) VALUES ('$name',$price,'$description','$image');";
                    try{
                        mysqli_query($conn,$stm);
                        echo "New record created successfully";
               
                  
                    }catch(Exception $e)
               
                    {
                    echo "error1111";
                    }
                    
                  
               
                }
               
               $sql = 'SELECT * FROM products ';
                    $data = mysqli_query($conn,$sql);
                    if(!$data)
                    {
                        die('');
                    }
                    else
                      {
              ?>
            <table style="width:200%" border = "5" >
                <tr>

                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>


                <?php
                        
                       while( $category = mysqli_fetch_array($data))
                       {
                           ?>
                <tr>
                    <td>
                        <?php echo $category['name']; ?>
                    </td>
                    <td>
                        <?php echo $category['price'];?>
                    </td>
                    <td>
                        <?php echo $category['description'];?>
                    </td>
                    <td>
                        <img src="   <?php echo $category['image'];?>" width="100px" hight="100px">
                    </td>
                    <td>
                        <a href="manager.php?edit=<?php echo $category['id']; ?>">Edit</a>
                        <a href="manager.php?delete=<?php echo $category['id']; ?>">Delete</a>
                    </td>
                </tr>


                <?php
               
                       }?>
            </table>
            <br>
            <br>
            <form action="manager.php" method="POST">

                <label >Name:</label>
               <input type="text" name="name" id="name" value="<?php echo $name; ?>" /><br><br>
               <label >price:</label>
                <input type="text" name="price" id="price" value="<?php echo $price; ?>" /><br><br>
                <label > Desc:</label>
                <input type="text" name="description" id="description"
                    value="<?php echo $description; ?>" /><br><br>
                 <label > Image::</label>
                <input type="text" name="image" id="image" value="<?php echo $image; ?>" /><br><br>
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" /><br><br>
                <?php
               
                                if($update == true):
               
                           ?>
                <input type="submit" name="update" value="update" />
                <?php else: ?>
                <input type="submit" name="submit" value="Add" />
                <?php endif; ?>
            </form>

            <?php
                        
                      }
                    
                    $conn->close();
           
           ?>



        </div>
    </section>
    <script src="../js/user.js"></script>
</body>

</html>