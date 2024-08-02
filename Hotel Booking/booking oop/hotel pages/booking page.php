<?php
 require "../classes/Hotel.php";

 session_start();

 $_SESSION ['hotels'] = [
    new Hotel(
        1,
        "Grand Peak Hotel",
        750,
        10,
        false,
        "(HN) offers you a privileged experience combining comfort and conviviality. Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations. More than just a hotel, (HN) offers you a place to live and meet people.",
        "https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGhvdGVsc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60",

    ),
    new Hotel(
        2, 
        "OceanSide Hotel.", 
        900, 
        15, 
        false, 
        "They provide the luxury of living in the heart of the city without compromising on the views, services, calmness and tranquillity that you look for in an ideal hotel. Their hotels feature luxury spa treatments, restaurants and bars, fitness centres and range of well-designed rooms and suites",
        "https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aG90ZWxzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"  ),

    new Hotel(
        3, 
        "LakeSide Hotel.", 
        1500, 
        20, 
        false, 
        "(HN) offers you a privileged experience combining comfort and conviviality. Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations. More than just a hotel, (HN) offers you a place to live and meet people.",
        "https://images.unsplash.com/photo-1596436889106-be35e843f974?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGhvdGVsc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60",
    ),
 ];

 if (isset($_POST['submit'])) {

    $name = $_POST['Firstname'];
    $email = $_POST['Email'];
    $inDate = $_POST['Checkin'];
    $outDate = $_POST['Checkout'];

    $userNumDays = Hotel::calculateNumDays($inDate, $outDate);

    // saving user data to SESSION superglobal
    $_SESSION['customer'] = [
        'name' => $name,
        'email' => $email,
        'inDate' => $inDate,
        'outDate' => $outDate,
        'userNumDays' => $userNumDays,
    ];

    var_dump($_SESSION['customer']);

    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Booking</title>
</head>
<body>
    <?php
    foreach ($_SESSION['hotels'] as $hotel) {
        echo "
     <section>
     <span>".$hotel->getId()."</span>
    <h3>". $hotel->getName() ."</h3>
    <h2>R". $hotel->getCostPerNight() ."</h2>
    <img src=".$hotel->getImg().">
    <p>".$hotel->getdescription()." </p>
    <p>Total:R". $hotel->calculateCostOfStay($userNumDays) ."</p>
    <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
    <form  method='get' action='confirm.php'>
    <button type='submit' name='book'>Book</button>
    </form>
    </section> 
  
  ";
  
    }
    ?>
</body>
</html>