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
            .numberComparation{
            font-weight: bold;
            }
    
        </style>

    </head>
    <body>
       
    <div class="content">
                <div class="h1">
                    Valores mais saem 
                </div>
           </div>

           <table class="table">
  <thead>
    <tr>
    @foreach($howMany as $key => $itens)
      <th scope="col">{{ $key }}</th>
    @endforeach
    </tr>
  </thead>
  <tbody>
    <tr>
     @foreach($howMany as $item)
      <th scope="row">{{ $item }}</th>
      @endforeach
    </tr>
    </tbody>
    </table>

    @if(isset($points))
    <!-- inicio -->
    <div class="content">
        <div class="h1">
         Quantidade de acertos
        </div>
     </div>

     <table class="table">
  <thead>
    <tr>
      <th scope="col">15</th>
      <th scope="col">14</th>
      <th scope="col">13</th>
      <th scope="col">12</th>
      <th scope="col">11</th>
      <th scope="col">Acertos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     @if($points == 15)
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
   
    <td style="font-weight: bold;">{{ $points }}</td>
    </tr>
    </tbody>
    </table>
    @endif

           
     <div class="content">
                <div class="h1">
                    Compare com todos os jogos  
                </div>
           </div>



           <table class="table">
  <tbody>
    <tr>
     <form method="post" action="{{ route('home.loto.checkGame') }}">        
     <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

     <td>
      <label>01</label>
      <input type="text" class="form-control numberComparation" name="bolaoUm" placeholder="01"/>
      </td>
     
      <td>
       <label>02</label>
       <input type="text" class="form-control numberComparation" name="bolaoDois" placeholder="02"/>
      </td>

      <td>
       <label>03</label>
       <input type="text" class="form-control numberComparation" name="bolaoTres" placeholder="03"/>
      </td>

      <td>
       <label>04</label>
       <input type="text" class="form-control numberComparation" name="bolaoOuatro" placeholder="04"/>
      </td>

       <td>
        <label>05</label>
        <input type="text" class="form-control numberComparation" name="bolaoCinco" placeholder="05"/>
       </td>
      </tr>

     <tr>
      <td>
       <label>06</label>
       <input type="text" class="form-control numberComparation" name="bolaoSeis" placeholder="06">
      </td>

      <td>
       <label>07</label>
       <input type="text" class="form-control numberComparation" name="bolaoSete" placeholder="07">
      </td>

      <td>
       <label>08</label>
       <input type="text" class="form-control numberComparation" name="bolaoOito" placeholder="08"/>
     </td>

     <td>
      <label>09</label>
      <input type="text" class="form-control numberComparation" name="bolaoNove" placeholder="09">
     </td>

     <td>
      <label>10</label>
      <input type="text" class="form-control numberComparation" name="bolaoDez" placeholder="10">
     </td>
     </tr>

      <tr>

      <td>
       <label>11</label>
       <input type="text" class="form-control numberComparation" name="bolaoOnze" placeholder="11">
      </td>

      <td>
       <label>12</label>
       <input type="text" class="form-control numberComparation" name="bolaoDoze" placeholder="12">
      </td>

      <td>
       <label>13</label>
       <input type="text" class="form-control numberComparation" name="bolaoTreze" placeholder="13">
      </td>

      <td>
       <label>14</label>
       <input type="text" class="form-control numberComparation" name="bolaoQuatorze" placeholder="14">
      </td>

      <td>
       <label>15</label>
       <input type="text" class="form-control numberComparation" name="bolaoQuinze" placeholder="15">
      </td>

     </tr>

     <tr>
      
      <td>
       <label>16</label>
       <input type="text" class="form-control numberComparation" name="bolaoDezesseis" placeholder="16">
      </td>

      <td>
       <label>17</label>
       <input type="text" class="form-control numberComparation" name="bolaoDezessete" placeholder="17">
      </td>

      <td>
       <label>18</label>
       <input type="text" class="form-control numberComparation" name="bolaoDezoito" placeholder="18">
      </td>

      <td>
       <label>19</label>
       <input type="text" class="form-control numberComparation" name="bolaoDezenove" placeholder="19">
      </td>

      <td>
       <label>20</label>
       <input type="text" class="form-control numberComparation" name="bolaoVinte" placeholder="20">
      </td>

     </tr>

     <tr>
      <td>
       <input type="submit" class="btn btn-primary btn-lg btn-block" name="btnAction" value="Verificar Jogo">
      </td>
     </tr>


   </form>
    </tbody>
    </table>



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

        <!-- Javascript-->
       <script src="{{ asset('js/loto-min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js' )}}"></script>-->
       
    </body>
</html>
