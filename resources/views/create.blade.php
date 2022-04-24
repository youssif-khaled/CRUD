<!DOCTYPE html>
<html>
<head>
   
    <title>Register</title>
<style>
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
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Create Form</h3>

<div>
  <form method="POST" action="{{url("/categories")}}">
  @csrf
    <label for="fname">First Name</label>
    <input class="bg-info"  type="text" id="fname" name="name" placeholder="Your name..">

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



