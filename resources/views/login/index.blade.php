<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>King</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>      
body {
background: #6f42c1;
background-size: cover;
font-family: "Roboto";
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
&::before {
z-index: -1;
content: '';
position: fixed;
top: 0;
left: 0;
background: #44c4e7;
/* IE Fallback */
background: rgba(68,196,231, 0.8);
width: 100%;
height: 100%;
}
}

.form {
position: absolute;
top: 50%;
left: 50%;
background: #fff;
width: 285px;
margin: -140px 0 0 -182px;
padding: 40px;
box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
}

h2 {
margin: 0 0 20px;
line-height: 1;
color: #6f42c1;
font-size: 18px;
font-weight: 400;
}

input {
outline: none;
display: block;
width: 100%;
margin: 0 0 20px;
padding: 10px 15px;
border: 1px solid #ccc;
color: #ccc;
font-family: "Roboto";
box-sizing: border-box;
font-size: 14px;
font-weight: 400;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
transition: 0.2s linear;
&input:focus {
  color: #333;
  border: 1px solid #44c4e7;
}
}

button {
cursor: pointer;
background: #6f42c1;
width: 100%;
padding: 10px 15px;
border: 0;
color: #fff;
font-family: "Roboto";
font-size: 14px;
font-weight: 400;
&:hover {
  background: #369cb8;
}
}
.error, .valid{display:none;}

        </style>
      
    </head>
    <body>
      
<!--Correct username: invitado / pass: hgm2015-->

<section class="form animated flipInX">
<h2 style="font-weight:bold;">Realizar Login</h2>
 <p class="valid">Valid. Please wait a moment.</p>
  <p class="error">Error. Please enter correct Username &amp; password.</p>
   <form class="loginbox" autocomplete="off" method="post" action="#">
   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" id="txtEmail" placeholder="email@email.com" required>
  </div>

  <div class="form-group">
    <label>Senha</label>
    <input type="password" class="form-control" id="txtPass">
  </div>
    <button type="submit">Logar</button>
   </form>

   <div id="container" style="margin-top: 10%;margin-left: 20%;">
   <p style="font-weight:bold;"><a href="#">Criar uma conta...</a></p>
  </div>
 </section>




        <!-- Javascript-->
       <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js' )}}"></script>

       
    </body>
</html>
