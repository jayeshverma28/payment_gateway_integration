<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bdy">
    <div class="div1">
    <form action="pay.php" method="post">
        <h2 class="header">Payment Form</h2>
        Price: <input type="text" name="price" placeholder="Enter Price" class="input"> <br>
        Name: <input type="text" name="customername" placeholder="Enter Name" class="input"><br>
        Email: <input type="email" name="email" placeholder="Enter Email" class="input"><br>
        Contact: <input type="number" name="contactno" placeholder="Contact No" class="input"><br>
        <input type="submit" name="submit" value="Proceed To Pay" class="button">
    </form>
    </div>
</body>
</html>