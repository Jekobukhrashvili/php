<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
</body>
</html>

<div class="Registration form">
  <form action="./form.php"
  method = "POST" >
    <div class="container">
      <label for="name">Enter your name</label>
      <input name ='name' type="name" id="name" placeholder="" required/>
    </div>
    <div class="container">
      <label for="Password">Enter password</label>
      <input name='password' type="password" id="Password" placeholder="" required/>
    </div>
    <div class="container">
      <label for="confirm password">Confirm password</label>
      <input name='confirm password' type="password" id="confirm password" placeholder="" required />
    </div>
    <button>Submit</button>
  </form>
</div>
