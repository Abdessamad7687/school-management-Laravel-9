<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel = "icon" type = "image/png" href = "{{ asset('img/logo.png') }}">
</head>
<body>
<div class="overlay">

<form method="POST">
   @csrf

   <div class="con">

   <header class="head-form">
      <h2>ADMIN</h2>
   </header>

   <br>
   <div class="field-set">
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
         <input class="form-input" value="{{ old('email') }}" name="email" id="txt-input" type="text" placeholder="@Email">
         @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror   
      <br>
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" name="password" type="password" placeholder="Password" id="pwd"  name="password">
      @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
      <br>
      <button class="log-in"> Log In </button>
   </div>

  </div>

</form>
</div>

</body>
</html>
