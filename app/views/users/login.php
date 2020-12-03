<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../../css/login.css'>
    
    <title>login</title>
</head>
<body>
    
</body>
</html>
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" action= "../../controllers/usercontroller.php" method="POST">
    <input type="hidden" name="action" value='login'>
    <label id="icon" for="email"><i class="icon-envelope "></i></label>
    <input type="text" name="email" placeholder="Email"/>



    <label id="icon" for="password"><i class="icon-shield"></i></label>
    <input type="password" name="password" placeholder="Password" />
    <p><input type="submit" value="Log in"></p>
  </form>
</div>