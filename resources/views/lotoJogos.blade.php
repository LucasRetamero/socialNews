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
            .show{
               display: block;
            }
            .numberComparation{
            font-weight: bold;
            width: 50px;
            background-color: #FFF;
            }
           
           .btnNumber{
               width: 50px;
               height: 50px;
               background-color: #FFF;
               border-color: #6f42c1;
               font-weight:bold;
               border-radius: 1px 1px 1px 1px;
           }

           .btnNumber:hover{
               background-color: #6f42c1 !important;
               color:#FFF !important;
               border-color: #6f42c1 !important;
           }
        </style>
      
    </head>
    <body onLoad="start()">
    <div class="content">
                <div class="h1 text-white" style="background-color:  #6f42c1; ">
                    Números mais sorteados 
                </div>
           </div>

  <center><table class="table w-50">
  @foreach(collect($howMany)->chunk(5) as $chunk)
    <thead class="text-white" style="background-color: #6f42c1;">
    <tr>
     @foreach($chunk as $key => $itens)
       <th scope="col">{{ $key }}</th>
    @endforeach
    </tr>
   </thead>
  <tbody>
  <tr>
     @foreach($chunk as $itens)
       <td style="font-weight: bold;">{{ $itens }} </td>
    @endforeach
    </tr>
    </tbody>
    @endforeach
    </table></center>


    @if(isset($points))
    <!-- inicio -->
    <div class="content">
        <div class="h1 text-white" style="background-color:  #6f42c1;">
         Acertos
        </div>
     </div>

     <table class="table">
  <thead>
    <tr  style="background-color:  #6f42c1;color:#FFF;">
      <th scope="col">15</th>
      <th scope="col">14</th>
      <th scope="col">13</th>
      <th scope="col">12</th>
      <th scope="col">11</th>
      <th scope="col">Concurso</th>
      <th scope="col">Acertos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
     @if($fiftheenPoints != 0)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px"/><br> {{ $fiftheenPoints }}</td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

    @if($fortheenPoints != 0)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px"/><br>{{ $fortheenPoints }}</td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

     @if($thirteenPoints != 0)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px" style="font-weight: bold;"/><br> {{ $thirteenPoints }}</td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

     @if($twelvePoints != 0)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px"/><br> {{ $twelvePoints }}</td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif



    @if($elevenPoints != 0)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px"/><br>{{ $elevenPoints }}</td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif


    @if($numberConcurso == "all")
    <td style="font-weight: bold;"> {{ $concurso }}</td>
    @else
    <td style="font-weight: bold;">{{ $numberConcurso }}</td>
    @endif

    <td style="font-weight: bold;">{{ $points }}</td>
    </tr>
    </tbody>
    </table>
     
     <center> 
      <div class="h1 text-white" style="background-color:  #6f42c1; ">
                    Números escolhidos  
                </div>
     </center>

    <center><table class="table w-50">
  @foreach(collect($numberByUser)->chunk(5) as $chunk)
    <thead class="text-white" style="background-color: #6f42c1;">
    <tr>
     @foreach($chunk as $key => $itens)
       <th scope="col">{{ $key }}</th>
    @endforeach
    </tr>
   </thead>
  <tbody>
  <tr>
     @foreach($chunk as $itens)
       <td style="font-weight: bold;">{{ $itens }} </td>
    @endforeach
    </tr>
    </tbody>
    @endforeach
    </table></center>
    
    <br>
   
    @if($numberConcurso != "all")
    <center>
    <table>
     <tr>
    <button type="button" id="btnShowOrHide" class="btn text-white" style="background-color: #6f42c1;font-weight: bold;" onClick="showAndHideComp()">Mostrar concurso</button>
    </tr>
    </table>
    </center>
 
  <br>

    <div id="resultadoConcurso" class="hidden">
      <center> 
      <div class="h1 text-white" style="background-color:  #6f42c1; ">
                    Números do concurso: {{ $numberConcurso }}   
                </div>
     </center>
     <table class="table">
     <thead>
      <tr style="background-color:  #6f42c1;color: #FFF;">
       <th>01</th>
       <th>02</th>
       <th>03</th>
       <th>04</th>
       <th>05</th>
       <th>06</th>
       <th>07</th>
       <th>08</th>
       <th>09</th>
       <th>10</th>
       <th>11</th>
       <th>12</th>
       <th>13</th>
       <th>14</th>
       <th>15</th>
      </tr>
     </thead>
     <tbody>
      <tr style="font-weight: bold;">
      @foreach($valuesConcurso as $itens)
      <td>{{ $itens->bolaUm }}</td>
      <td>{{ $itens->bolaDois }}</td>
      <td>{{ $itens->bolaTres }}</td>
      <td>{{ $itens->bolaQuatro }}</td>
      <td>{{ $itens->bolaCinco }}</td>
      <td>{{ $itens->bolaSeis }}</td>
      <td>{{ $itens->bolaSete }}</td>
      <td>{{ $itens->bolaOito }}</td>
      <td>{{ $itens->bolaNove }}</td>
      <td>{{ $itens->bolaDez }}</td>
      <td>{{ $itens->bolaOnze }}</td>
      <td>{{ $itens->bolaDoze }}</td>
      <td>{{ $itens->bolaTreze }}</td>
      <td>{{ $itens->bolaQuatorze }}</td>
      <td>{{ $itens->bolaQuinze }}</td>
      @endforeach
      </tr>
     </tbody>
    </table>
     </div>
      @endif
    @endif

    

           
     <div class="content">
                <div class="h1 text-white" style="background-color:  #6f42c1; ">
                    Compare seu jogo   
                </div>
           </div>

<!-- Comparate o jogo -->
<form method="post" action="{{ route('home.loto.checkGame') }}">        
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />    
           <div class="container">
  <div class="row"><!-- row -->

    <div class="col">
    @if(isset($numberByUser))
      <table>
      <!--foreach(numberByUser as $itens)-->
      <tr>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoUm" name="bolaoUm" onClick="selection('id_bolaoUm')" value="{{ $numberByUser[0] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDois"  name="bolaoDois" onClick="selection('id_bolaoDois')" value="{{ $numberByUser[1] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoTres" name="bolaoTres" onClick="selection('id_bolaoTres')" value="{{ $numberByUser[2] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoOuatro" name="bolaoOuatro" onClick="selection('id_bolaoOuatro')" value="{{ $numberByUser[3] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoCinco" name="bolaoCinco" onClick="selection('id_bolaoCinco')" value="{{ $numberByUser[4] }}" readonly/></th>
      </tr>

      <tr>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoSeis" name="bolaoSeis" onClick="selection('id_bolaoSeis')" value="{{ $numberByUser[5] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoSete" name="bolaoSete" onClick="selection('id_bolaoSete')" value="{{ $numberByUser[6] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoOito" name="bolaoOito" onClick="selection('id_bolaoOito')" value="{{ $numberByUser[7] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoNove" name="bolaoNove" onClick="selection('id_bolaoNove')" value="{{ $numberByUser[8] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDez" name="bolaoDez" onClick="selection('id_bolaoDez')"  value="{{ $numberByUser[9] }}" readonly/></th>
      </tr>

      <tr>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoOnze" name="bolaoOnze"  onClick="selection('id_bolaoOnze')" value="{{ $numberByUser[10] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDoze" name="bolaoDoze"  onClick="selection('id_bolaoDoze')" value="{{ $numberByUser[11] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoTreze" name="bolaoTreze" onClick="selection('id_bolaoTreze')" value="{{ $numberByUser[12] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoQuatorze" name="bolaoQuatorze" onClick="selection('id_bolaoQuatorze')" value="{{ $numberByUser[13] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoQuinze"  name="bolaoQuinze" onClick="selection('id_bolaoQuinze')"  value="{{ $numberByUser[14] }}" readonly/></th>
      </tr>

      <tr>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDezesseis" name="bolaoDezesseis"  onClick="selection('id_bolaoDezesseis')" value="{{ $numberByUser[15] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDezessete" name="bolaoDezessete" onClick="selection('id_bolaoDezessete')" value="{{ $numberByUser[16] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDezoito" name="bolaoDezoito" onClick="selection('id_bolaoDezoito')" value="{{ $numberByUser[17] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDezenove" name="bolaoDezenove" onClick="selection('id_bolaoDezenove')" value="{{ $numberByUser[18] }}" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoVinte" name="bolaoVinte" onClick="selection('id_bolaoVinte')" value="{{ $numberByUser[19] }}" readonly/></th>
      </tr>
     <!--endforeach-->
      </table><!--/table -->
    @else
      <table>
      <tr>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoUm" name="bolaoUm" onClick="selection('id_bolaoUm')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDois"  name="bolaoDois" onClick="selection('id_bolaoDois')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoTres" name="bolaoTres" onClick="selection('id_bolaoTres')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoOuatro" name="bolaoOuatro" onClick="selection('id_bolaoOuatro')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoCinco" name="bolaoCinco" onClick="selection('id_bolaoCinco')" readonly/></th>
      </tr>

      <tr>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoSeis" name="bolaoSeis"  onClick="selection('id_bolaoSeis')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoSete" name="bolaoSete"  onClick="selection('id_bolaoSete')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoOito" name="bolaoOito"  onClick="selection('id_bolaoOito')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoNove" name="bolaoNove" onClick="selection('id_bolaoNove')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDez" name="bolaoDez"  onClick="selection('id_bolaoDez')" readonly/></th>
      </tr>

      <tr>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoOnze" name="bolaoOnze"  onClick="selection('id_bolaoOnze')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDoze" name="bolaoDoze"  onClick="selection('id_bolaoDoze')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoTreze" name="bolaoTreze" onClick="selection('id_bolaoTreze')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoQuatorze" name="bolaoQuatorze" onClick="selection('id_bolaoQuatorze')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoQuinze"  name="bolaoQuinze" onClick="selection('id_bolaoQuinze')" readonly/></th>
      </tr>

      <tr>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDezesseis" name="bolaoDezesseis" onClick="selection('id_bolaoDezesseis')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDezessete" name="bolaoDezessete" onClick="selection('id_bolaoDezessete')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDezoito" name="bolaoDezoito"  onClick="selection('id_bolaoDezoito')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoDezenove" name="bolaoDezenove" onClick="selection('id_bolaoDezenove')" readonly/></th>
       <th><input type="text" class="form-control numberComparation" id="id_bolaoVinte" name="bolaoVinte" onClick="selection('id_bolaoVinte')" readonly/></th>
      </tr>

      </table><!--/table -->
      @endif
    </div><!--/col-->

    <div class="col">
      
    <table>  
 <tr>
  <th><button type="button" id="btnUmNumber" class="btnNumber" onClick="addValue('01', 'btnUmNumber')">01</button></th>
  <th><button type="button" id="btnDoisNumber" class="btnNumber" onClick="addValue('02', 'btnDoisNumber')">02</button></th>
  <th><button type="button" id="btnTresNumber" class="btnNumber" onClick="addValue('03', 'btnTresNumber')">03</button></th>
  <th><button type="button" id="btnQuatroNumber"class="btnNumber" onClick="addValue('04', 'btnQuatroNumber')">04</button></th>
  <th><button type="button" id="btnCincoNumber" class="btnNumber" onClick="addValue('05', 'btnCincoNumber')">05</button></th>
 </tr>

  <tr>
  <th><button type="button" id="btnSeisNumber" class="btnNumber" onClick="addValue('06', 'btnSeisNumber')">06</button></th>
  <th><button type="button" id="btnSeteNumber" class="btnNumber" onClick="addValue('07', 'btnSeteNumber')">07</button></th>
  <th><button type="button" id="btnOitoNumber" class="btnNumber" onClick="addValue('08', 'btnOitoNumber')">08</button></th>
  <th><button type="button" id="btnNoveNumber" class="btnNumber" onClick="addValue('09', 'btnNoveNumber')">09</button></th>
  <th><button type="button" id="btnDezNumber"  class="btnNumber" onClick="addValue('10', 'btnDezNumber')">10</button></th>
 </tr>

  <tr>
  <th><button type="button" id="btnOnzeNumber" class="btnNumber" onClick="addValue('11', 'btnOnzeNumber')">11</button></th>
  <th><button type="button" id="btnDozeNumber" class="btnNumber" onClick="addValue('12', 'btnDozeNumber')">12</button></th>
  <th><button type="button" id="btnTrezeNumber"class="btnNumber" onClick="addValue('13', 'btnTrezeNumber')">13</button></th>
  <th><button type="button" id="btnQuatorzeNumber" class="btnNumber" onClick="addValue('14', 'btnQuatorzeNumber')">14</button></th>
  <th><button type="button" id="btnQuinzeNumber" class="btnNumber" onClick="addValue('15', 'btnQuinzeNumber')">15</button></th>
 </tr>  

  <tr>
  <th><button type="button" id="btnDezesseisNumber" class="btnNumber" onClick="addValue('16', 'btnDezesseisNumber')">16</button></th>
  <th><button type="button" id="btnDezesseteNumber" class="btnNumber" onClick="addValue('17', 'btnDezesseteNumber')">17</button></th>
  <th><button type="button" id="btnDezoiotoNumber" class="btnNumber" onClick="addValue('18', 'btnDezoiotoNumber')">18</button></th>
  <th><button type="button" id="btnDezenoveNumber" class="btnNumber" onClick="addValue('19', 'btnDezenoveNumber')">19</button></th>
  <th><button type="button" id="btnVinteNumber"  class="btnNumber" onClick="addValue('20', 'btnVinteNumber')">20</button></th>
 </tr>

 <tr>
  <th><button type="button" id="btnVinteUmNumber" class="btnNumber" onClick="addValue('21', 'btnVinteUmNumber')">21</button></th>
  <th><button type="button" id="btnVinteDoisNumber" class="btnNumber" onClick="addValue('22', 'btnVinteDoisNumber')">22</button></th>
  <th><button type="button" id="btnVinteTresNumber" class="btnNumber" onClick="addValue('23', 'btnVinteTresNumber')">23</button></th>
  <th><button type="button" id="btnVinteQuatroNumber" class="btnNumber" onClick="addValue('24', 'btnVinteQuatroNumber')">24</button></th>
  <th><button type="button" id="btnVinteCincoNumber" class="btnNumber" onClick="addValue('25', 'btnVinteCincoNumber')">25</button></th>
 </tr>
 </table>

    </div><!--/col-->

    <div class="col">
     <table>
     <tr>
      <th><label id="txtChoosingValue" class="ont-weight-bold">Quantidade selecionada:<br>0</label></th>
      </tr>
     </table>
    </div> <!--/col-->
    
  </div><!-- /row -->
</div><!-- /container -->
  <center><input type="submit" class="btn text-white" name="btnAction" value="Verificar Jogo" style="background-color: #6f42c1;"/>
  </center>
</form>
<!-- /Comparate o jogo -->
    <!--<select  id="exampleFormControlSelect1" name="concurso">-->
     


<br>


  <br>

          <div class="content">
                <div class="h1">
                    Todos os jogos
                </div>
           </div>

           <table class="table">
  <thead>
    <tr>
      <th scope="col">Concurso</th>
      <th scope="col">1</th>
      <th scope="col">2</th>
      <th scope="col">3</th>
      <th scope="col">4</th>
      <th scope="col">5</th>
      <th scope="col">6</th>
      <th scope="col">7</th>
      <th scope="col">8</th>
      <th scope="col">9</th>
      <th scope="col">10</th>
      <th scope="col">11</th>
      <th scope="col">12</th>
      <th scope="col">13</th>
      <th scope="col">14</th>
      <th scope="col">15</th>
    </tr>
  </thead>
  <tbody>
  @foreach($date as $item)
    <tr>
      <th scope="row">{{ $item->concurso }}</th>
      <td scope="row">{{ $item->bolaUm }}</td>
      <td scope="row">{{ $item->bolaDois }}</td>
      <td scope="row">{{ $item->bolaTres }}</td>
      <td scope="row">{{ $item->bolaQuatro }}</td> 
      <td scope="row">{{ $item->bolaCinco }}</td>
      <td scope="row">{{ $item->bolaSeis }}</td>
      <td scope="row">{{ $item->bolaSete }}</td>
      <td scope="row">{{ $item->bolaOito }}</td>
      <td scope="row">{{ $item->bolaNove }}</td>
      <td scope="row">{{ $item->bolaDez }}</td>
      <td scope="row">{{ $item->bolaOnze }}</td>
      <td scope="row">{{ $item->bolaDoze }}</td>
      <td scope="row">{{ $item->bolaTreze }}</td>
      <td scope="row">{{ $item->bolaQuatorze }}</td>
      <td scope="row">{{ $item->bolaQuinze }}</td>
    </tr>
 @endforeach
    </tbody>
    </table>

      <script type="text/javascript">

       var components = [ "id_bolaoUm","id_bolaoDois","id_bolaoTres","id_bolaoOuatro","id_bolaoCinco",
                          "id_bolaoSeis", "id_bolaoSete", "id_bolaoOito", "id_bolaoNove", "id_bolaoDez",
                          "id_bolaoOnze", "id_bolaoDoze", "id_bolaoTreze", "id_bolaoQuatorze", "id_bolaoQuinze",
                          "id_bolaoDezesseis", "id_bolaoDezessete", "id_bolaoDezoito", "id_bolaoDezenove", "id_bolaoVinte"];

      var selectedComponent,showHide=false;
      var btnsSelected = [], numberChoosingByUser = [];

    function start(){
     selectedComponent= "id_bolaoUm";
     changeColorComponent();
     casePhpReturn();
     casePhpReturnColorButton();
    }

    function casePhpReturn(){
      numberChoosingByUser = [];
      for(var k=0; k<components.length; k++){
        if(document.getElementById(components[k]).value != ""){
          numberChoosingByUser.push(document.getElementById(components[k]).value); 
        }
      }
    }

   function casePhpReturnColorButton(){
     for(var x=0; x<numberChoosingByUser.length; x++){
       switch(numberChoosingByUser[x]){
         case "01":
           document.getElementById("btnUmNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnUmNumber").style.color = "#FFF";
           btnsSelected.push("btnUmNumber");
          break;

          case "02":
           document.getElementById("btnDoisNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDoisNumber").style.color = "#FFF";
           btnsSelected.push("btnDoisNumber");
          break;

          case "03":
           document.getElementById("btnTresNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnTresNumber").style.color = "#FFF";
           btnsSelected.push("btnTresNumber");
          break;

          case "04":
           document.getElementById("btnQuatroNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnQuatroNumber").style.color = "#FFF";
           btnsSelected.push("btnQuatroNumber");
          break;

          case "05":
           document.getElementById("btnCincoNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnCincoNumber").style.color = "#FFF";
           btnsSelected.push("btnCincoNumber");
          break;

          case "06":
           document.getElementById("btnSeisNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnSeisNumber").style.color = "#FFF";
           btnsSelected.push("btnSeisNumber");
          break;
          
          case "07":
           document.getElementById("btnSeteNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnSeteNumber").style.color = "#FFF";
           btnsSelected.push("btnSeteNumber");
          break;

          case "08":
           document.getElementById("btnOitoNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnOitoNumber").style.color = "#FFF";
           btnsSelected.push("btnOitoNumber");
          break;

          case "09":
           document.getElementById("btnNoveNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnNoveNumber").style.color = "#FFF";
           btnsSelected.push("btnNoveNumber");
          break;

          case "10":
           document.getElementById("btnDezNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezNumber").style.color = "#FFF";
           btnsSelected.push("btnDezNumber");
          break;

          case "11":
           document.getElementById("btnOnzeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnOnzeNumber").style.color = "#FFF";
           btnsSelected.push("btnOnzeNumber");
          break;

          case "12":
           document.getElementById("btnDozeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDozeNumber").style.color = "#FFF";
           btnsSelected.push("btnDozeNumber");
          break;

          case "13":
           document.getElementById("btnTrezeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnTrezeNumber").style.color = "#FFF";
           btnsSelected.push("btnTrezeNumber");
          break;

          case "14":
           document.getElementById("btnQuatorzeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnQuatorzeNumber").style.color = "#FFF";
           btnsSelected.push("btnQuatorzeNumber");
          break;

          case "15":
           document.getElementById("btnQuinzeNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnQuinzeNumber").style.color = "#FFF";
           btnsSelected.push("btnQuinzeNumber");
          break;

          case "16":
           document.getElementById("btnDezesseisNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezesseisNumber").style.color = "#FFF";
           btnsSelected.push("btnDezesseisNumber");
          break;

          case "17":
           document.getElementById("btnDezesseteNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezesseteNumber").style.color = "#FFF";
           btnsSelected.push("btnDezesseteNumber");
          break;

          case "18":
           document.getElementById("btnDezoiotoNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezoiotoNumber").style.color = "#FFF";
           btnsSelected.push("btnDezoiotoNumber");
          break;

          case "19":
           document.getElementById("btnDezenoveNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnDezenoveNumber").style.color = "#FFF";
           btnsSelected.push("btnDezenoveNumber");
           break;
         
          case "20":
           document.getElementById("btnVinteNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteNumber");
          break;

          case "21":
           document.getElementById("btnVinteUmNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteUmNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteUmNumber");
          break;

          case "22":
           document.getElementById("btnVinteDoisNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteDoisNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteDoisNumber");
          break;

          case "23":
           document.getElementById("btnVinteTresNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteTresNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteTresNumber");
         break;

          case "24":
           document.getElementById("btnVinteQuatroNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteQuatroNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteQuatroNumber");
         break;

          case "25":
           document.getElementById("btnVinteCincoNumber").style.backgroundColor = "#6f42c1";
           document.getElementById("btnVinteCincoNumber").style.color = "#FFF";
           btnsSelected.push("btnVinteCincoNumber");
           break;
       }
     }
     countValueFromSelection();
   }
      function selection(component){
        selectedComponent = component;
        changeColorComponent();
        changeDefaultColorOhers();
      }
      
      function changeDefaultColorOhers(){
       for(var p=0; p<components.length; p++){
          if(components[p] != selectedComponent){
           document.getElementById(components[p]).style.backgroundColor = "#FFF";   
           document.getElementById(components[p]).style.color = "#000";   
         }
       }     
      }

      function changeColorComponent(){
       document.getElementById(selectedComponent).style.backgroundColor = "#6f42c1";   
       document.getElementById(selectedComponent).style.color = "white";        
      }

      function addValue(value, component){
        if(numberChoosingByUser.length < 20 || checkIfHaveBtnSelected(component)){
        changeColorFromButtion(value, component);
        countValueFromSelection();
        jumpToNext();
        changeColorComponent();
        changeDefaultColorOhers();
        addValuesOnComponent();
        }
      }

      function jumpToNext(){
           if(numberChoosingByUser.length >= 20){
            selectedComponent = components[19];
           }else{
            selectedComponent = components[numberChoosingByUser.length];
           }
      }

      function clearComponent(){
       for(var p=0; p<components.length; p++){
        document.getElementById(components[p]).value = ""; 
        }  
      }

      function showAndHideComp(){
        if(document.getElementById("resultadoConcurso").classList == "hidden"){
        document.getElementById("resultadoConcurso").classList.remove("hidden");
        document.getElementById("resultadoConcurso").classList.add("show");
        document.getElementById("btnShowOrHide").innerHTML = "Esconder concurso";
        showHide = false;
        }else{
        document.getElementById("resultadoConcurso").classList.remove("show");
        document.getElementById("resultadoConcurso").classList.add("hidden");
        document.getElementById("btnShowOrHide").innerHTML = "Mostrar concurso";
        showHide = true;
        }
      }
      
      function changeColorFromButtion(value, component){
        if(checkIfHaveBtnSelected(component)){
          btnsSelected.splice(getIndexFromBtnSelected(component),1);
          numberChoosingByUser.splice(getIndexFromNumberChoosingByUser(value),1)
          document.getElementById(component).style.backgroundColor = "#FFF";
          document.getElementById(component).style.color = "#000";
        }else{
          numberChoosingByUser.push(value);
          btnsSelected .push(component);
          document.getElementById(component).style.backgroundColor = "#6f42c1";
          document.getElementById(component).style.color = "#FFF";
        }
      }

      //Add values on component
      function addValuesOnComponent(){
        numberChoosingByUser.sort();
        for(var o=0; o<components.length; o++){
          if(numberChoosingByUser[o] != null){
           document.getElementById(components[o]).value = numberChoosingByUser[o];
          }else{
           document.getElementById(components[o]).value = "";
          }
        }          
      }
     
      //Get index from numberChoosingByUser
      function getIndexFromNumberChoosingByUser(value){
        for(var p=0; p<numberChoosingByUser.length; p++){
            if(numberChoosingByUser[p] == value){
              return p;
            }
         } 
       }
       
      //Get index from btnSelected
       function getIndexFromBtnSelected(component){
        for(var p=0; p<btnsSelected.length; p++){
            if(btnsSelected[p] == component){
              return p;
            }
         } 
       }

       //Check if have a item on btnsSelected
       function checkIfHaveBtnSelected(component){
        for(var p=0; p<btnsSelected.length; p++){
            if(btnsSelected[p] == component){
              return true;
            }
         }
         return false; 
       }

      //Change text show the counting
      function countValueFromSelection(){
       document.getElementById("txtChoosingValue").innerHTML = "Quantidade selecionada:<br>"+numberChoosingByUser.length; 
      }
      </script>
        <!-- Javascript-->
       <script src="{{ asset('js/loto-min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js' )}}"></script>-->
       
    </body>
</html>
