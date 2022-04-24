<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            background-color: black;

        }
        .button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin-left: 45%;
  position: absolute;
  top: 300px;
  z-index: 1;


}
h2{
    color: white;

}
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;

  padding: 20px;
}
.h{
    background-color: rgba(0, 0, 0, 0.7);
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 0;

}
    </style>
</head>
<body>
<form method="GET" action="{{url("/categories/create")}}">
@csrf
<h3>Create Form</h3>


<h2>Animated Buttons - "Pressed Effect"</h2>
<button class="button">Click Me</button><br>
</form>
<div class="h"></div><div>

  <form method="POST" action="{{url("/categories")}}" >

  @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="Your Email..">
    <label for="lname">Password</label>
    <input type="text" id="lname" name="password" placeholder="Your Password..">
    <label for="lname">Address</label>
    <input type="text" id="lname" name="address" placeholder="Your Address..">

    <label for="lname">Country</label>
    <input type="text" id="lname" name="country" placeholder="Your Country..">

    <input type="submit" value="Submit">
  </form>

</div>

</body>
</html>




</body>
</html>
