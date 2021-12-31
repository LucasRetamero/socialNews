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
            
            label{
                font-weight: bold;
                display: block;
            }
        </style>

    </head>
    <body>
        <form method="post" action="{{ route('testingApiBuyng.crypto') }}">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />    
         <input type="hidden" name="txtVal" id="txtCryp"/>
         <label>Nome do responsavel</label>
         <input type="text" class="form-control-sm" id="txtName"/>
         <label>Número</label>
         <input type="text" class="form-control-sm" id="txtNumber"/>
         <label>Mês de vencimento</label>
         <input type="text" class="form-control-sm" id="txtMonth"/>
         <label>Ano de vencimento</label>
         <input type="text" class="form-control-sm" id="txtYear"/>
         <label>Codigo de segurança</label>
         <input type="text" class="form-control-sm" id="txtSecurityCode"/>
         <button type="button" id="btnBuy" style="display:block;" class="btn bg-success text-white font-weight">Comprar</button>
         <button type="submit" id="btnAction" style="display: none;"></button>
        </form>

       <script src="https://assets.pagseguro.com.br/checkout-sdk-js/rc/dist/browser/pagseguro.min.js"></script>
       <script src="{{ asset('js/bootstrap.min.js' )}}"></script>
       <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    </body>
</html>
