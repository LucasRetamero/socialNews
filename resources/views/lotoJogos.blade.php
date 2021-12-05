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
               width: 50px;
               height: 50px;
               background-color: #6f42c1;
               font-weight:bold;
               color:#FFF;
               border-color: #6f42c1;
               border-radius: 1px 1px 1px 1px;
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
     @if($points >= 15)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px"/></td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

    @if($points == 14)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px"/></td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

    @if($points == 13)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px"/></td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

   @if($points == 12)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px"/></td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

    @if($points == 11)
    <td><img src="{{ asset('img/iconRigth.png') }}" width="30px" height="30px"/></td>
    @else
    <td><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

    @if($numberConcurso == "all")
    <td style="font-weight: bold;">Todos</td>
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
       <th>16</th>
       <th>17</th>
       <th>18</th>
       <th>19</th>
       <th>20</th>
      </tr>
     </thead>
     <tbody>
      <tr style="font-weight: bold;">
      @foreach($numberByUser as $itens)
      <td>{{ $itens }}</td>
      @endforeach
      </tr>
     </tbody>
    </table>

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
      <td>{{ $itens->bolaoUm }}</td>
      <td>{{ $itens->bolaoDois }}</td>
      <td>{{ $itens->bolaoTres }}</td>
      <td>{{ $itens->bolaoOuatro }}</td>
      <td>{{ $itens->bolaoCinco }}</td>
      <td>{{ $itens->bolaoSeis }}</td>
      <td>{{ $itens->bolaoSete }}</td>
      <td>{{ $itens->bolaoOito }}</td>
      <td>{{ $itens->bolaoNove }}</td>
      <td>{{ $itens->bolaoDez }}</td>
      <td>{{ $itens->bolaoOnze }}</td>
      <td>{{ $itens->bolaoDoze }}</td>
      <td>{{ $itens->bolaoTreze }}</td>
      <td>{{ $itens->bolaoQuatorze }}</td>
      <td>{{ $itens->bolaoQuinze }}</td>
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
    <form method="post" action="{{ route('home.loto.checkGame') }}">        
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />    

           <center><div class="form-group">
    <label class="h4" style="font-weight: bold;">Selecione o concurso:</label>
    <select  id="exampleFormControlSelect1" name="concurso">
      <option value="all">Todos os concursos</option>
      @foreach($allConcursos as $itens)
      <option value="{{ $itens->concurso }}">Concurso: {{ $itens->concurso }}</option>
      @endforeach
    </select>
  </div></center>

<center><table>
<tr>
<th><input type="text" class="form-control numberComparation" id="id_bolaoUm" name="bolaoUm" placeholder="01" onClick="selection('id_bolaoUm')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoDois"  name="bolaoDois" placeholder="02"  onClick="selection('id_bolaoDois')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoTres" name="bolaoTres" placeholder="03" onClick="selection('id_bolaoTres')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoOuatro" name="bolaoOuatro" placeholder="04" onClick="selection('id_bolaoOuatro')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoCinco" name="bolaoCinco" placeholder="05" onClick="selection('id_bolaoCinco')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoSeis" name="bolaoSeis" placeholder="06" onClick="selection('id_bolaoSeis')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoSete" name="bolaoSete" placeholder="07" onClick="selection('id_bolaoSete')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoOito" name="bolaoOito" placeholder="08" onClick="selection('id_bolaoOito')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoNove" name="bolaoNove" placeholder="09" onClick="selection('id_bolaoNove')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoDez" name="bolaoDez" placeholder="10"  onClick="selection('id_bolaoDez')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoOnze" name="bolaoOnze" placeholder="11" onClick="selection('id_bolaoOnze')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoDoze" name="bolaoDoze" placeholder="12" onClick="selection('id_bolaoDoze')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoTreze" name="bolaoTreze" placeholder="13" onClick="selection('id_bolaoTreze')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoQuatorze" name="bolaoQuatorze" placeholder="14" onClick="selection('id_bolaoQuatorze')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoQuinze"  name="bolaoQuinze" placeholder="15" onClick="selection('id_bolaoQuinze')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoDezesseis" name="bolaoDezesseis" placeholder="16" onClick="selection('id_bolaoDezesseis')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoDezessete" name="bolaoDezessete" placeholder="17" onClick="selection('id_bolaoDezessete')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoDezoito" name="bolaoDezoito" placeholder="18" onClick="selection('id_bolaoDezoito')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoDezenove" name="bolaoDezenove" placeholder="19" onClick="selection('id_bolaoDezenove')" readonly/></th>
<th><input type="text" class="form-control numberComparation" id="id_bolaoVinte" name="bolaoVinte" placeholder="20" onClick="selection('id_bolaoVinte')" readonly/></th>
</tr>
</table></center>

<br>

 <center><table>  
 <tr>
  <th><button type="button" class="btnNumber" onClick="addValue('1')">01</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('2')">02</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('3')">03</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('4')">04</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('5')">05</button></th>
 </tr>

  <tr>
  <th><button type="button" class="btnNumber" onClick="addValue('6')">06</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('7')">07</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('8')">08</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('9')">09</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('10')">10</button></th>
 </tr>

  <tr>
  <th><button type="button" class="btnNumber" onClick="addValue('11')">11</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('12')">12</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('13')">13</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('14')">14</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('15')">15</button></th>
 </tr>  

  <tr>
  <th><button type="button" class="btnNumber" onClick="addValue('16')">16</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('17')">17</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('18')">18</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('19')">19</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('20')">20</button></th>
 </tr>

 <tr>
  <th><button type="button" class="btnNumber" onClick="addValue('21')">21</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('22')">22</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('23')">23</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('24')">24</button></th>
  <th><button type="button" class="btnNumber" onClick="addValue('25')">25</button></th>
 </tr>
 </table></center>

  <br>

  <center><table>
  <tr>
  <input type="submit" class="btn text-white" name="btnAction" value="Verificar Jogo" style="background-color: #6f42c1;"/>
  </tr>
</form>
</table></center>

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
      <td scope="row">{{ $item->bolaoUm }}</td>
      <td scope="row">{{ $item->bolaoDois }}</td>
      <td scope="row">{{ $item->bolaoTres }}</td>
      <td scope="row">{{ $item->bolaoOuatro }}</td> 
      <td scope="row">{{ $item->bolaoCinco }}</td>
      <td scope="row">{{ $item->bolaoSeis }}</td>
      <td scope="row">{{ $item->bolaoSete }}</td>
      <td scope="row">{{ $item->bolaoOito }}</td>
      <td scope="row">{{ $item->bolaoNove }}</td>
      <td scope="row">{{ $item->bolaoDez }}</td>
      <td scope="row">{{ $item->bolaoOnze }}</td>
      <td scope="row">{{ $item->bolaoDoze }}</td>
      <td scope="row">{{ $item->bolaoTreze }}</td>
      <td scope="row">{{ $item->bolaoQuatorze }}</td>
      <td scope="row">{{ $item->bolaoQuinze }}</td>
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
 
    function start(){
    selectedComponent= "id_bolaoUm";
    changeColorComponent();
    clearComponent();
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

      function addValue(value){
        document.getElementById(selectedComponent).value = value;
        jumpToNext();
        changeColorComponent();
        changeDefaultColorOhers();
      }

      function jumpToNext(){
       for(var p=0; p<components.length; p++){
          if(components[p] == selectedComponent && selectedComponent != "id_bolaoVinte"){
            selectedComponent = components[p+=1];
          } 
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

      </script>
        <!-- Javascript-->
       <script src="{{ asset('js/loto-min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js' )}}"></script>-->
       
    </body>
</html>
