<!DOCTYPE html>
<html>
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
<body>

<h3>Create Form</h3>

<div>
  <form method="POST" action="{{url("/categories/$categories->id")}}">
  @csrf
  @method ('PUT')
    <label for="fname">First Name</label>
    <input type="text" value="{{$categories->name}}" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="lname" value="{{$categories->email}}" name="email" placeholder="Your Email..">
    <label for="lname">Password</label>
    <input type="text" id="lname" value="{{$categories->password}}" name="password" placeholder="Your Password..">
    <label for="lname">Address</label>
    <input type="text" id="lname" value="{{$categories->address}}" name="address" placeholder="Your Address..">

    <label for="lname">Country</label>
    <input type="text" id="lname" value="{{$categories->country}}" name="country" placeholder="Your Country..">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>



