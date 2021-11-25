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
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            label{
               font-weight: bold;    
            }
            .col-sm input[type=text]{
             font-weight: bold; 
             width: 30px;
             border-color:red;
            }
            .hidden{
               display: none; 
            }


            
        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
          <div class="content">
                <div class="h1">
                    Valores Gerados
                </div>
    
         <div class="row">

         <div class="col-sm">
          <label>01</label>
          <input type="text" id="txtUm" readonly/>
         </div>

         <div class="col-sm">
          <label>02</label>
          <input type="text" id="txtDois"readonly/>
         </div>

         <div class="col-sm">
          <label>03</label>
          <input type="text" id="txtTres"readonly/>
         </div>

         </div>

        <div class="row">

        <div class="col-sm">
         <label>04</label>
         <input type="text" id="txtQuatro"readonly/>
        </div>

        <div class="col-sm">
         <label>05</label>
         <input type="text" id="txtCinco"readonly/>
        </div>

        <div class="col-sm">
         <label>06</label>
         <input type="text" id="txtSeis"readonly/>
        </div>

        </div>

        <div class="row">

        <div class="col-sm">
         <label>07</label>
         <input type="text" id="txtSete"readonly/>
        </div>
        
        <div class="col-sm">
         <label>08</label>
         <input type="text" id="txtOito"readonly/>
        </div>


        <div class="col-sm">
         <label>09</label>
         <input type="text" id="txtNove"readonly/>
        </div>

        </div>

        <div class="row">

        <div class="col-sm">
         <label>10</label>
         <input type="text" id="txtDez"readonly/>
        </div>

        <div class="col-sm">
         <label>11</label>
         <input type="text" id="txtOnze"readonly/>
        </div>


        <div class="col-sm">
         <label>12</label>
         <input type="text" id="txtDoze"readonly/>
        </div>

        </div>

        <div class="row">

        <div class="col-sm">
         <label>13</label>
         <input type="text" id="txtTreze"readonly/>
        </div>


        <div class="col-sm">
         <label>14</label>
         <input type="text" id="txtQuatorze"readonly/>
        </div>

        <div class="col-sm">
         <label id="lblQuinze">15</label>
         <input type="text" id="txtQuinze"readonly/>
        </div>

        </div>
        
        <div class="row">

        <div class="col-sm">
         <label id="lblDezeseis" class="hidden">16</label>
         <input type="text" id="txtDezeseis" class="hidden" readonly/>
        </div>

        <div class="col-sm">
         <label id="lblDezesete" class="hidden">17</label>
         <input type="text" id="txtDezesete" class="hidden" readonly/>
        </div>

        <div class="col-sm">
         <label id="lblDezoito" class="hidden">18</label>
         <input type="text" id="txtDezoito" class="hidden" readonly/>
        </div>

        </div>
        <br>
    
        <button class="btn btn-primary btn-lg block font-weight-bold" onClick="generateRan(17,1)">Gerar 18 numeros</button>
        <button class="btn btn-primary btn-lg block font-weight-bold" onClick="generateRan(16,1)">Gerar 17 numeros</button> 
        <button class="btn btn-primary btn-lg block font-weight-bold" onClick="generateRan(15,1)">Gerar 16 numeros</button> 
        <button class="btn btn-primary btn-lg block font-weight-bold" onClick="generateRan(14,1)">Gerar 15 numeros</button> 
         

         <br>
        <!-- Valores para editar-->

        <div class="h1">
                   Selecione seu palpite
                </div>
    
         <div class="row">

         <div class="col-sm">
          <input type="text" id="txtUmEditado" value="01" readonly/>
         </div>

         <div class="col-sm">
         <input type="text" id="txtDoisEditado" value="02" readonly/>
         </div>

         <div class="col-sm">
         <input type="text" id="txtTresEditado" value="03" readonly/>
         </div>

         <div class="col-sm">
          <input type="text" id="txtQuatroEditado" value="04" readonly/>
         </div>

         <div class="col-sm">
           <input type="text" id="txtCincoEditado" value="05" readonly/>
         </div>

         </div>

         <br>

        <div class="row">
         <div class="col-sm">
          <input type="text" id="txtSeisEditado" value="06" readonly/>
         </div>

        <div class="col-sm">
        <input type="text" id="txtSeteEditado" value="07" readonly/>
        </div>
        
        <div class="col-sm">
         <input type="text" id="txtOitoEditado" value="08" readonly/>
        </div>

        <div class="col-sm">
         <input type="text" id="txtNoveEditado" value="09" readonly/>
        </div>

        <div class="col-sm">
        <input type="text"  id="txtDezEditado" value="10" readonly/>
        </div>
        </div>

        <br>

        <div class="row">
        
        <div class="col-sm">
         <input type="text" id="txtOnzeEditado" value="11" readonly/>
        </div>

        <div class="col-sm">
         <input type="text" id="txtDozeEditado" value="12" readonly/>
        </div>

        <div class="col-sm">
         <input type="text" id="txtTrezeEditado" value="13" readonly/>
        </div>

       
        <div class="col-sm">
         <input type="text" id="txtQuatorzeEditado" value="14" readonly/>
        </div>

        <div class="col-sm">
         <input type="text" id="txtQuinzeEditado" value="15" readonly/>
        </div>

        </div>
        
        <br>

        <div class="row">

        <div class="col-sm">
         <input type="text" id="txtDezeseisEditado"  value="16" readonly/>
        </div>

        <div class="col-sm">
         <input type="text" id="txtDezeseteEditado"  value="17" readonly/>
        </div>

        <div class="col-sm">
         <input type="text" id="txtDezoitoEditado"  value="18" readonly/>
        </div>

        <div class="col-sm">
         <input type="text" id="txtDezenoveEditado"  value="19" readonly/>
        </div>

        <div class="col-sm">
         <input type="text" id="txtVinteEditado"  value="20" readonly/>
        </div>

        </div>
       
       <br>

        <div class="row">

       <div class="col-sm">
         <input type="text" id="txtDezeseisEditado"  value="16" readonly/>
       </div>

       <div class="col-sm">
        <input type="text" id="txtDezeseteEditado"  value="17" readonly/>
      </div>

      <div class="col-sm">
       <input type="text" id="txtDezoitoEditado"  value="18" readonly/>
      </div>

       <div class="col-sm">
        <input type="text" id="txtDezenoveEditado"  value="19" readonly/>
       </div>

      <div class="col-sm">
       <input type="text" id="txtVinteEditado"  value="20" readonly/>
      </div>

      </div>
      
      <br>

      <div class="row">

<div class="col-sm">
  <input type="text" id="txtVinteUmEditado"  value="21" readonly/>
</div>

<div class="col-sm">
 <input type="text" id="txtVinteDoisEditado"  value="22" readonly/>
</div>

<div class="col-sm">
<input type="text" id="txtVinteTresEditado"  value="23" readonly/>
</div>

<div class="col-sm">
 <input type="text" id="txtVinteQuatroEditado"  value="24" readonly/>
</div>

<div class="col-sm">
<input type="text" id="txtVinteCincoEditado"  value="25" readonly/>
</div>

</div>

       <br>
       <!--<button class="btn btn-primary btn-lg block font-weight-bold" onClick="generateRan(17,2)">Gerar 18 numeros restantes</button>
       <button class="btn btn-primary btn-lg block font-weight-bold" onClick="generateRan(16,2)">Gerar 17 numeros restantes</button> 
       <button class="btn btn-primary btn-lg block font-weight-bold" onClick="generateRan(15,2)">Gerar 16 numeros restantes</button> 
       <button class="btn btn-primary btn-lg block font-weight-bold" onClick="generateRan(14,2)">Gerar 15 numeros restantes</button> 
        --> 
        <!-- Javascript-->
       <script src="{{ asset('js/loto-min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js' )}}"></script>-->
       
    </body>
</html>
