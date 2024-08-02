<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./form css/style.css">
    <title>Booking</title>
</head>
<body>
 <form action="./hotel pages/booking page.php" method="post"> 
<div class="form">
      <div class="title">Book Hotel</div>
      <div class="subtitle"></div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" name="Firstname" placeholder=" First Name" required/>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" name="Email" placeholder="Email Address" required/>
      </div>
      <h2 class="check">Check In Date</h2>
        <div class="input-container ic3">
          <input type="date"  name="Checkin" class="input">
        </div>
        <h2 class="check2">Check Out Date</h2>
        <div class="input-container ic4">
        <input type="date" name="Checkout" class="input">
        </div>
   <button type="text" name="submit" class="submit">Compare Price</button>
    </div>
    </form>
</body>
</html>
