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
            border-color: red;
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

           .lblsToCompareGame{
            position:auto;
            margin-left:25%;
            color: red;
           } 
           .tbNumberToCompareGame tr{
             background-color: #ffffb3;
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

@if(isset($elevenPoints))
    <!-- inicio -->
    <div class="content">
        <div class="h1 text-white" style="background-color:  #6f42c1;">
         Acertos
        </div>
     </div>

     <table class="table">
  <thead>
    <tr  style="background-color:  #6f42c1;color:#FFF;">
      <th scope="col">15(Qtd de jogos/Concurso)</th>
      <th scope="col">14(Qtd de jogos/Concurso)</th>
      <th scope="col">13(Qtd de jogos)</th>
      <th scope="col">12(Qtd de jogos)</th>
      <th scope="col">11(Qtd de jogos)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
     @if($fiftheenPoints != 0)
    <td style="font-weight:bold;background-color: #ffffb3;color: red;"><input type="text" style="font-weight:bold;border-color: red; background-color: white;color: red;width:80px;text-align: center;" value="{{ $fiftheenPoints }}" readonly/>/
      <select style="font-weight:bold;border-color: red; background-color: white;color: red;">
        @foreach($numbersConFifhtheen as $itens)
        <option>concurso: {{ $itens }}</option>
        @endforeach
       </select>
    </td>
    @else
    <td style="font-weight:bold;background-color: #ffffb3;color: red;" style="font-weight:bold;background-color: #ffffb3;color: red;"><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

    @if($fortheenPoints != 0)
    <td style="font-weight:bold;background-color: #ffffb3;color: red;"><input type="text" style="font-weight:bold;border-color: red; background-color: white;color: red;width:80px;text-align: center;" value="{{ $fortheenPoints }}" readonly/>/
      <select style="font-weight:bold;border-color: red; background-color: white;color: red;">
        @foreach($numbersConFourtheen as $itens)
        <option>concurso: {{ $itens }}</option>
        @endforeach
       </select>
    </td>
    @else
    <td style="font-weight:bold;background-color: #ffffb3;color: red;"><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

     @if($thirteenPoints != 0)
    <td style="font-weight:bold;background-color: #ffffb3;color: red;"><input type="text" style="font-weight:bold;border-color: red; background-color: white;color: red;width:100px;text-align: center;" value="{{ $thirteenPoints }}" readonly/></td>
    @else
    <td style="font-weight:bold;background-color: #ffffb3;color: red;"><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif

     @if($twelvePoints != 0)
    <td style="font-weight:bold;background-color: #ffffb3;color: red;"><input type="text" style="font-weight:bold;border-color: red; background-color: white;color: red;width:100px;text-align: center;" value="{{ $twelvePoints }}" readonly/></td>
    @else
    <td style="font-weight:bold;background-color: #ffffb3;color: red;"><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif



    @if($elevenPoints != 0)
    <td style="font-weight:bold;background-color: #ffffb3;color: red;"><input type="text" style="font-weight:bold;border-color: red; background-color: white;color: red;width:100px;text-align: center;" value="{{ $elevenPoints }}" readonly/></td>
    @else
    <td style="font-weight:bold;background-color: #ffffb3;color: red;"><img src="{{ asset('img/iconNo.png') }}" width="30px" height="30px"/></td>
    @endif
    </tr>
    </tbody>
    </table>
     @endif
  <br>
           
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
    <table class="table tbNumberToCompareGame">
    <tr>
     <h2 style="position:auto;margin-left: 25px;">Números Selecionados </h2>
    </tr>

      <tr>
       <th><label class="lblsToCompareGame">01</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoUm" name="bolaoUm" onClick="selection('id_bolaoUm')"  value="{{ $numberByUser[0] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">02</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDois"  name="bolaoDois" onClick="selection('id_bolaoDois')" value="{{ $numberByUser[1] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">03</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoTres" name="bolaoTres" onClick="selection('id_bolaoTres')" value="{{ $numberByUser[2] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">04</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoOuatro" name="bolaoOuatro" onClick="selection('id_bolaoOuatro')" value="{{ $numberByUser[3] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">05</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoCinco" name="bolaoCinco" onClick="selection('id_bolaoCinco')" value="{{ $numberByUser[4] }}" readonly/></th>
      </tr>

      <tr>
       <th><label class="lblsToCompareGame">06</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoSeis" name="bolaoSeis"  onClick="selection('id_bolaoSeis')" value="{{ $numberByUser[5] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">07</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoSete" name="bolaoSete"  onClick="selection('id_bolaoSete')" value="{{ $numberByUser[6] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">08</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoOito" name="bolaoOito"  onClick="selection('id_bolaoOito')" value="{{ $numberByUser[7] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">09</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoNove" name="bolaoNove" onClick="selection('id_bolaoNove')" value="{{ $numberByUser[8] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">10</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDez" name="bolaoDez"  onClick="selection('id_bolaoDez')" value="{{ $numberByUser[9] }}" readonly/></th>
      </tr>

      <tr>
       <th><label class="lblsToCompareGame">11</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoOnze" name="bolaoOnze"  onClick="selection('id_bolaoOnze')" value="{{ $numberByUser[10] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">12</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDoze" name="bolaoDoze"  onClick="selection('id_bolaoDoze')" value="{{ $numberByUser[11] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">13</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoTreze" name="bolaoTreze" onClick="selection('id_bolaoTreze')" value="{{ $numberByUser[12] }}" readonly/></th>
     
       <th><label class="lblsToCompareGame">14</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoQuatorze" name="bolaoQuatorze" onClick="selection('id_bolaoQuatorze')" value="{{ $numberByUser[13] }}" readonly/></th>
      
       <th><label class="lblsToCompareGame">15</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoQuinze"  name="bolaoQuinze" onClick="selection('id_bolaoQuinze')" value="{{ $numberByUser[14] }}" readonly/></th>
      </tr>

      <tr>
       <th><label class="lblsToCompareGame">16</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDezesseis" name="bolaoDezesseis" onClick="selection('id_bolaoDezesseis')" value="{{ $numberByUser[15] }}" readonly/></th>
      
       <th><label class="lblsToCompareGame">17</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDezessete" name="bolaoDezessete" onClick="selection('id_bolaoDezessete')" value="{{ $numberByUser[16] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">18</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDezoito" name="bolaoDezoito"  onClick="selection('id_bolaoDezoito')" value="{{ $numberByUser[17] }}" readonly/></th>
      
       <th><label class="lblsToCompareGame">19</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDezenove" name="bolaoDezenove" onClick="selection('id_bolaoDezenove')" value="{{ $numberByUser[18] }}" readonly/></th>
       
       <th><label class="lblsToCompareGame">20</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoVinte" name="bolaoVinte" onClick="selection('id_bolaoVinte')"  value="{{ $numberByUser[19] }}" readonly/></th>
      </tr>

      </table><!--/table -->
    @else
      <table class="table tbNumberToCompareGame">

      <tr>
       <h2 style="position:auto;margin-left: 25px;">Números Selecionados </h2>
      </tr>

      <tr>
       <th><label class="lblsToCompareGame">01</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoUm" name="bolaoUm" onClick="selection('id_bolaoUm')" readonly/></th>
       
       <th><label class="lblsToCompareGame">02</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDois"  name="bolaoDois" onClick="selection('id_bolaoDois')" readonly/></th>
       
       <th><label class="lblsToCompareGame">03</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoTres" name="bolaoTres" onClick="selection('id_bolaoTres')" readonly/></th>
       
       <th><label class="lblsToCompareGame">04</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoOuatro" name="bolaoOuatro" onClick="selection('id_bolaoOuatro')" readonly/></th>
       
       <th><label class="lblsToCompareGame">05</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoCinco" name="bolaoCinco" onClick="selection('id_bolaoCinco')"  readonly/></th>
      </tr>

      <tr>
       <th><label class="lblsToCompareGame">06</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoSeis" name="bolaoSeis"  onClick="selection('id_bolaoSeis')"  readonly/></th>
       
       <th><label class="lblsToCompareGame">07</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoSete" name="bolaoSete"  onClick="selection('id_bolaoSete')" readonly/></th>
       
       <th><label class="lblsToCompareGame">08</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoOito" name="bolaoOito"  onClick="selection('id_bolaoOito')" readonly/></th>
       
       <th><label class="lblsToCompareGame">09</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoNove" name="bolaoNove" onClick="selection('id_bolaoNove')" readonly/></th>
       
       <th><label class="lblsToCompareGame">10</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDez" name="bolaoDez"  onClick="selection('id_bolaoDez')" readonly/></th>
      </tr>

      <tr>
       <th><label class="lblsToCompareGame">11</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoOnze" name="bolaoOnze"  onClick="selection('id_bolaoOnze')" readonly/></th>
       
       <th><label class="lblsToCompareGame">12</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDoze" name="bolaoDoze"  onClick="selection('id_bolaoDoze')" readonly/></th>
       
       <th><label class="lblsToCompareGame">13</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoTreze" name="bolaoTreze" onClick="selection('id_bolaoTreze')" readonly/></th>
     
       <th><label class="lblsToCompareGame">14</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoQuatorze" name="bolaoQuatorze" onClick="selection('id_bolaoQuatorze')" readonly/></th>
      
       <th><label class="lblsToCompareGame">15</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoQuinze"  name="bolaoQuinze" onClick="selection('id_bolaoQuinze')" readonly/></th>
      </tr>

      <tr>
       <th><label class="lblsToCompareGame">16</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDezesseis" name="bolaoDezesseis" onClick="selection('id_bolaoDezesseis')"  readonly/></th>
      
       <th><label class="lblsToCompareGame">17</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDezessete" name="bolaoDezessete" onClick="selection('id_bolaoDezessete')" readonly/></th>
       
       <th><label class="lblsToCompareGame">18</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDezoito" name="bolaoDezoito"  onClick="selection('id_bolaoDezoito')" readonly/></th>
      
       <th><label class="lblsToCompareGame">19</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoDezenove" name="bolaoDezenove" onClick="selection('id_bolaoDezenove')" readonly/></th>
       
       <th><label class="lblsToCompareGame">20</label>
       <input type="text" class="form-control numberComparation" id="id_bolaoVinte" name="bolaoVinte" onClick="selection('id_bolaoVinte')" readonly/></th>
      </tr>

      </table><!--/table -->
      @endif
    </div><!--/col-->

    <div class="col">
      
    <table>  
    <tr>
     <h2>Selecionar Números</h2>
    </tr>

 <tr style="background-color: #FFF!important">
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
     <table class="tbNumberToCompareGame">
      <tr>
      <h2>Informações Extra</h2>
      </tr>

      <tr>
       <td><label style="color:red;font-weight: bold;">Selecionados(Min: 15):</label></td>
       <td><input type="text"  id="txtChoosingValue" value="0/20" style="width:100px;background-color:#FFF;text-align: center;" readonly/></td>
      </tr>

      <tr>
       <td><label style="color:red;font-weight: bold;">Impares(Total):</label></td>
       <td><input type="text"  id="txtImparNumber" value="0" style="width:100px;background-color:#FFF;text-align: center;" readonly/></td>
      </tr>

     <tr>
      <td><label style="color:red;font-weight: bold;">Pares(Total):</label></td>
      <td><input type="text"  id="txtParNumber" value="0" style="width:100px;background-color:#FFF;text-align: center;" readonly/></td>
     </tr>

     <tr>
      <td><label style="color:red;font-weight: bold;">Primos(Total):</label></td>
      <td><input type="text"  id="txtPrimosNumber" value="0" style="width:100px;background-color:#FFF;text-align: center;" readonly/></td>
     </tr>

     <tr>
      <td><label style="color:red;font-weight: bold;">Composto(Total):</label></td>
      <td><input type="text"  id="txtCompostoNumber" value="0" style="width:100px;background-color:#FFF;text-align: center;" readonly/></td>
     </tr>

     </table>
    </div> <!--/col-->
    
  </div><!-- /row -->
</div><!-- /container -->
  <input type="submit" class="btn text-white" name="btnAction" value="Verificar Jogo" style="background-color: #6f42c1;position:auto;margin-left: 50%;"/>
</form>
<!-- /Comparate o jogo -->
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

    
        <!-- Javascript-->
       <script src="{{ asset('js/lotoJogos.js')}}"></script>
       <script src="{{ asset('js/loto-min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js' )}}"></script>
       
    </body>
</html>
