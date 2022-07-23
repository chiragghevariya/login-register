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
  width: 698px;
  
}

h1 {
    text-align: center;
}
.error {
    color: red;
}

</style>
</head>
<body>

<h1>Register From</h1>

<div class="container nm">

  <form action="{{route('save-register-form')}}" method="POST" id="Register">

@csrf
    <div class="row">
      <div class="col-md-6">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
      </div>
      
      <div class="col-md-6">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Enter your last name">
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <label for="lname">User Name</la bel>
        <input type="text" id="username" name="username" placeholder="Enter your user name">
      </div>
        
      <div class="col-md-6">
        
      </div>
    </div>
    
    <div>
      <label for="lname">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">
    </div>
    

    <div class="row">
      <div class="col-md-6">
       <label for="lname">Password</label>
       <input type="Password" id="password" name="password" placeholder="Enter your Password">
      </div>

      <div class="col-md-6">
        <label for="lname">Confirm Password</label>
        <input type="Password" id="repassword" name="repassword" placeholder="Re-type Password">
      </div>
    </div>

    <div>
      <label for="lname">Date Of Brith</label>
      <input type="date" id="date" name="date" placeholder="Enter your date of birth">
    </div>
    

  <div>
    <input type="checkbox" value="1" name="confirm" class="my_checkbox_event" required="please agree with this condition">I accept terms and conditions
  </div>
    

    <input type="submit" value="Submit">
 
  </form>
</div>

<script>

  $(document).ready(function() {
    $("#Register").validate({
      rules: { 
        firstname:{ required: true},
        lastname:{ required: true},
        username:{ required: true},
        email: {required:true,email:true},
        password:  {required: true},
        repassword:  {required: true},
        date:  {required: true},
        confirm:  {required: true},
       
        },
      messages: {
        firstname: { required: "firstName field is required."},
        lastname: { required: "lastName field is required."},
        username: { required: "lastName field is required."},
        email: { required: "email field is required."},
        password: { required: "password field is required."},
        repassword: { required: "confirm password field is required."},
        date: { required: "date field is required."},
        confirm: { required: "please accept all condition."},
       
      }
    });
  });
</script>

</body>
</html>


