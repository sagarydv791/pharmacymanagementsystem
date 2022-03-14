<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    text-align:center;
    color: #111;
}

form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
  width: 250px;
  padding: 8px 5px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button.login {
  background-color: #04AA6D;
  color: white;
  padding: 8px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 200px;
  font-size: 16px;
  text-align: center;
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 150px;
  border-radius: 50%;
}

.container {
  padding: 8px;
}

span.psw {
  text-align:center;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
</style>
</head>
<body>

<h2 style="font-size: 18px;">Login Form</h2>

<form action="{{ route('admin.login.submit') }}" method="POST">
@csrf
  <div class="imgcontainer">
    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <input type="text" placeholder="Enter Email" name="email" required>
<br>
    <input type="password" placeholder="Enter Password" name="password" required>
        <br>
    <button type="submit" class="login">Login</button>
  </div>
</form>

</body>
</html>

