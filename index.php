<?php 

include "database.php";
$result = mysqli_query($link, "SELECT * FROM `message`");
$result2 = mysqli_query($link, "SELECT * FROM `message`");
$result3 = mysqli_query($link, "SELECT * FROM `message`");
//$goods = mysqli_fetch_assoc($result);
//print_r($goods);
//while ($goods = mysqli_fetch_assoc($result)) {
//    echo $goods['title'];
//    echo "<br>";
//}
//$goods = mysqli_fetch_assoc($result);
//echo $goods['title'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="row_menu">
                    <div class="col-md-12">
                        <div class="menu">
                            <ul class="ul">
                                <li><a href="#">Пользователь 1</a></li>
                                <li><a href="#">Пользователь 2</a></li>
                                <li><a href="#">Пользователь 3</a></li>
                                <li><a href="#">Пользователь 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="row2">
                                <div class="image">
                                    <img src="<?php $good = mysqli_fetch_assoc($result2);
                                    echo $good['image']; ?>" alt="">
                                </div>
                            <div class="col">
                                <div class="title">
                                    <?php $goods = mysqli_fetch_assoc($result);
                                    echo $goods['title']; ?>
                                </div>
                                <div class="text">
                                    <?php $goo = mysqli_fetch_assoc($result3);
                                    echo $goo['text']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                                <div class="image">
                                    <img src="<?php $good = mysqli_fetch_assoc($result2);
                                    echo $good['image']; ?>" alt="">
                            </div>
                            <div class="col">
                                <div class="title">
                                    <?php $goods = mysqli_fetch_assoc($result);
                                    echo $goods['title']; ?>
                                </div>
                                <div class="text">
                                    <?php $goo = mysqli_fetch_assoc($result3);
                                    echo $goo['text']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                                <div class="image">
                                    <img src="<?php $good = mysqli_fetch_assoc($result2);
                                    echo $good['image']; ?>" alt="">
                            </div>
                            <div class="col">
                                <div class="title">
                                    <?php $goods = mysqli_fetch_assoc($result);
                                    echo $goods['title']; ?>
                                </div>
                                <div class="text">
                                    <?php $goo = mysqli_fetch_assoc($result3);
                                    echo $goo['text']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                                <div class="image">
                                    <img src="<?php $good = mysqli_fetch_assoc($result2);
                                    echo $good['image']; ?>" alt="">
                                </div>
                            <div class="col">
                                <div class="title">
                                    <?php $goods = mysqli_fetch_assoc($result);
                                    echo $goods['title']; ?>
                                </div>
                                <div class="text">
                                    <?php $goo = mysqli_fetch_assoc($result3);
                                    echo $goo['text']; ?>
                                </div>
                            </div>
                        </div>
        </div>
    </section>
    <section>
        <div class="div">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nesciunt unde libero itaque adipisci tenetur officia laboriosam corrupti tempore minima. Laboriosam consequuntur reiciendis voluptatum vel perspiciatis deserunt, vero iste officia.
        </div>
    </section>
</body>
</html>