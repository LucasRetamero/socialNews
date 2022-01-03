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
            html, body {
                background-color: #6f42c1;
            }

            .titleRegister{
              color: #6f42c1;
              padding-left: 30%;
              font-weight: bold;
              }

              .imgIcon{
                 width: 40px;
                 height: 40px; 
                 margin-bottom: 10px;
                 margin-left: 25%;
              }

              .stepper-wrapper {
  margin-top: auto;
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}
.stepper-item {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  flex: 1;

  @media (max-width: 768px) {
    font-size: 12px;
  }
}

.stepper-item::before {
  position: absolute;
  content: "";
  border-bottom: 2px solid #ccc;
  width: 100%;
  top: 20px;
  left: -50%;
  z-index: 2;
}

.stepper-item::after {
  position: absolute;
  content: "";
  border-bottom: 2px solid #ccc;
  width: 100%;
  top: 20px;
  left: 50%;
  z-index: 2;
}

.stepper-item .step-counter {
  position: relative;
  z-index: 5;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #ccc;
  margin-bottom: 6px;
}

.stepper-item.active {
  font-weight: bold;
}

.stepper-item.completed .step-counter {
  background-color: #6f42c1;
}

.stepper-item.completed::after {
  position: absolute;
  content: "";
  border-bottom: 2px solid #6f42c1;
  width: 100%;
  top: 20px;
  left: 50%;
  z-index: 3;
}

.stepper-item:first-child::before {
  content: none;
}
.stepper-item:last-child::after {
  content: none;
}

* {
    margin: 0;
    padding: 0
}
  
html {
    height: 100%
}
  
h2{
    color: #6f42c1;
}
#form {
    text-align: center;
    position: relative;
    margin-top: 20px
}
  
#form fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}
  
.finish {
    text-align: center
}
  
#form fieldset:not(:first-of-type) {
    display: none
}
  
#form .previous-step, .next-step {
    width: 100px;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}
  
.form, .previous-step {
    background: #6f42c1;
}
  
.form, .next-step {
    background: #6f42c1;
}
  
#form .previous-step:hover,
#form .previous-step:focus {
    background-color: #bf80ff
}
  
#form .next-step:hover,
#form .next-step:focus {
    background-color: #bf80ff 
}
  
.text {
    color: #2F8D46;
    font-weight: normal
}
  
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}
  
#progressbar .active {
    color: #FFF
}
  
#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}
  
#progressbar #step1:before {
    content: "1"
}
  
#progressbar #step2:before {
    content: "2"
}
  
#progressbar #step3:before {
    content: "3"
}
  
#progressbar #step4:before {
    content: "4"
}
  
#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}
  
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}
  
#progressbar li.active:before,
#progressbar li.active:after {
    background: #bf80ff
}
  
.progress {
    height: 20px
}
  
.progress-bar {
    background-color: #bf80ff
}

.emailValidated{
  color: green;	
  content: "Email valido !";
 
}

.emailUnValidated{
  color: red;	
  content: "Email invalido !";
}
        </style>

    </head>
    <body onLoad="clearAllComp()">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 
                col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                    <form id="form">
                        <ul id="progressbar">
                            <li class="active" id="step1">
                                <strong>Conta</strong>
                            </li>
                            <li id="step2"><strong>Pagamento</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div> <br>
                        <fieldset>
                            <h3>Cadastrar conta premium</h3>
							  <label for="txtEmail">Email</label>
                              <input type="email" class="form-control" id="txtEmail" placeholder="Email@email.com" required autofocus>
                              <small id="emailHelp" class="form-text font-weight-bold">Os dados estão seguro, não compartilhamos com ninguem !</small>                           
						      <label for="txtPass">Senha</label>
                              <input type="password" id="txtPass" class="form-control" id="txtPass" required autofocus>
							  <input type="checkbox" id="txtCheck" onclick="showOrHidePass()"> <b>Mostrar senha</b></br>
                              <label for="txtPass">Nivel de segurança</label>
							  <div class="alert alert-danger" id="infoTip" role="alert">
                               Recomendamos:
							   <ul>
							     <li>Letras maiuscula e minuscula{Ex: AbcD}</li>
								 <li>Caractere especial(Ex: @/><&)</li>
								 <li>Numeros(Ex: 4687)</li>
								 <li>Minimo de 8 caracteres</li>
							   </ul>
                              </div>
							  <div class="progress-bar bg-danger text-white" role="progressbar" id="passParameter" style="font-size: large;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
						   <input type="button" id="btnSecondStep" name="next-step" 
                                class="next-step" value="Proximo" style="display: none;"/>
                        </fieldset>
                        <fieldset>
                            <h3>Obter premium</h3>
                            <input type="button" name="next-step" 
                                class="next-step" value="Concluir" />
                            <input type="button" name="previous-step" 
                                class="previous-step" 
                                value="Voltar" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
       <script src="https://assets.pagseguro.com.br/checkout-sdk-js/rc/dist/browser/pagseguro.min.js"></script>
       <script src="{{ asset('js/bootstrap.min.js' )}}"></script>
       <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

       <script type="text/javascript">
        $(document).ready(function () {
    var currentGfgStep, nextGfgStep, previousGfgStep;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
  
    setProgressBar(current);
  
    $(".next-step").click(function () {
  
        currentGfgStep = $(this).parent();
        nextGfgStep = $(this).parent().next();
  
        $("#progressbar li").eq($("fieldset")
            .index(nextGfgStep)).addClass("active");
  
        nextGfgStep.show();
        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;
  
                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                nextGfgStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });
  
    $(".previous-step").click(function () {
  
        currentGfgStep = $(this).parent();
        previousGfgStep = $(this).parent().prev();
  
        $("#progressbar li").eq($("fieldset")
            .index(currentGfgStep)).removeClass("active");
  
        previousGfgStep.show();
  
        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;
  
                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previousGfgStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });
  
    function setProgressBar(currentStep) {
        var percent = parseFloat(100 / steps) * current;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }
  
    $(".submit").click(function () {
        return false;
    })
});

 $("#txtEmail").on("input", function(){
	 (validateEmail($("#txtEmail").val())) ? replaceTextAboutEmail('green', 'Email valido !') : replaceTextAboutEmail('red', 'Email invalido !');
    openButton(); 
 });
 
 function replaceTextAboutEmail(color, text){
    $("#emailHelp").css({'color': color});
    $("#emailHelp").text(text);
 }
 
function showOrHidePass() {
  var x = document.getElementById("txtPass");
  (x.type == "password") ? x.type = "text" : x.type = "password";
}

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

var removeBackground = [
     'bg-primary',
	 'bg-secondary',
	 'bg-success',
	 'bg-danger',
	 'bg-warning',
	 'bg-info',
	 'bg-light',
	 'bg-dark',
	 'bg-white',
	 'bg-transparent'
     ];
var strengthbar = document.getElementById("passParameter");
var passResul;
	 
$("#txtPass").on("input", function() {
	checkpassword($("#txtPass").val());
	openButton();
});
   
function checkpassword(password) {
  var strength = 0;
  if (password.match(/[a-z]+/)) {
    strength += 1;
  }
  if (password.match(/[A-Z]+/)) {
    strength += 1;
  }
  if (password.match(/[0-9]+/)) {
    strength += 1;
  }
  if (password.match(/[$@#&!*]+/)) {
    strength += 1;

  }
  
  switch (strength) {
    case 0:
	 changeProgessBar(0, "3%", "0%");
      break;

    case 1:
	 changeProgessBar(25, "25%", "25%");
      break;

    case 2:
	   changeProgessBar(50, "50%", "50%");
      break;

    case 3:
	   changeProgessBar(75, "75%", "75%");
      break;

    case 4:
	 passResul=4;
	 ($("#txtPass").val().length >= 8) ? changeProgessBar(100, "100%", "100%") : changeProgessBar(75, "75%", "75%");
      break;
  }
  
  changeProgresBarColor();
  
} 
   
function removeBackgroundAddOther(bgAdd){
   	for(var x = 0; x < removeBackground.length; x++ ){
	strengthbar.classList.remove(removeBackground[x]);
	}
	strengthbar.classList.add(bgAdd);
}

function changeProgresBarColor(){
	switch(strengthbar.value){
	  case 0:
	   removeBackgroundAddOther("bg-danger");
	   break;
	  case 50:
	   removeBackgroundAddOther("bg-warning");	
	   break;
	  case 75:
	   removeBackgroundAddOther("bg-success");
	   break;
	  default:
	   //Do something
	   break;
	}	
}

function changeProgessBar(valueProgress, widthProgress, innerHtmlProgress){
	  strengthbar.value = valueProgress;
	  strengthbar.style.width = widthProgress;
	  strengthbar.innerHTML = innerHtmlProgress;
} 

function clearAllComp(){
	document.getElementById("txtPass").value = "";
	document.getElementById("txtCheck").checked = false;
	document.getElementById("txtEmail").value = "";
	
}  
 
 function openButton(){
	   var points=0;
	   if($("#txtEmail").val() != "" && validateEmail($("#txtEmail").val())){ points++; }
	   if(passResul == 4 && $("#txtPass").val().length >= 8){ points++; }
	   
	   return (points == 2) ? $("#btnSecondStep").css({ 'display': 'block'}) : $("#btnSecondStep").css({ 'display': 'none'});
       }
       </script>
    </body>
</html>
