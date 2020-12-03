<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../../css/register.css'>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

<div class="testbox">
  <h1>Registration</h1>

  <form action="../../controllers/usercontroller.php" method="POST">
  <input type="hidden" name="action" value='register'>
    <label id="icon" for="name"><i class="icon-user"></i></label>
    <input type="text" name="name" placeholder="Name" />

    <label id="icon" for="lastname"><i class="icon-user"></i></label>
    <input type="text" name="lastname" placeholder="LastName" />

    <label id="icon" for="email"><i class="icon-envelope "></i></label>
    <input type="text" name="email" placeholder="Email"/>



    <label id="icon" for="password"><i class="icon-shield"></i></label>
    <input type="password" name="password" placeholder="Password" />

    <p><input type="submit" value="Register"></p>
   
  </form>
</div>