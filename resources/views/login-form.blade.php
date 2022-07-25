<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="{{asset('plugins/jquery.validate.min.js')}}"></script>     
  <script src="{{asset('plugins/additional-methods.min.js')}}"></script>
 
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

div.nm {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 413px;
    margin-top: 50px;
}

div {
    font-size: 18px;
    padding: 20px;
}

h1 {
    margin-top: 60px;
    text-align: center;
}
.error {
    color: red;
}

</style>
</head>
<body>

<h1>Login From</h1>

<div class="container nm">

  <form action="{{route('login-post')}}" method="POST" id="Register">

@csrf
    
    <div>
      <label for="lname">Enter Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email">
    </div>
    
    <div>
       <label for="lname">Enter Password</label>
       <input type="Password" id="password" name="password" placeholder="Enter your Password">
    </div>

    <input type="submit" value="Submit">
 
  </form>
</div>

<script>

  $(document).ready(function() {
    $("#Register").validate({
      rules: { 
        email: {required:true,email:true},
        password:  {required: true},
      },
      messages: {
        email: { required: "email field is required."},
        password: { required: "password field is required."},
     }
    });
  });
</script>

</body>
</html>


