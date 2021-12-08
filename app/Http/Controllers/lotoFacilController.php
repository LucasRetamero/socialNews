<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\lotoFacilDAO;

class lotoFacilController extends Controller
{
    protected $objLoto,
              $points,
              $howMany = array(),
              $formsNumber = array(),
              $numberChooseUser =  array();

    //Check the points
    protected $numberEleven=0, $numberTwelve=0, $numberThirteen=0, 
              $numberFortheen=0, $numberFiftheen=0,$concursoValue,
              $maxValue=0;

    public function __construct(lotoFacilDAO $objLotoDAO){
    $this->objLoto = $objLotoDAO;
    }
    
    public function home(){
    $this->getHowManyValues();
    arsort($this->howMany);
     return view('lotoJogos',['date'=> $this->objLoto->getAll(), 
                              'howMany' => $this->howMany,
                              'allConcursos' => $this->objLoto->getAllConcursos()]);
    }

    public function lotoPage(Request $request){
      $this->checkAllPoints($request);
      $this->getHowManyValues();
      $this->addValuesOnArray($request);
      arsort($this->howMany);
      return view('lotoJogos',['date'    => $this->objLoto->getAll(), 
                               'howMany' => $this->howMany, 
                                'points' => $this->maxValue,
                                'concurso' => $this->concursoValue,
                                'elevenPoints' => $this->numberEleven,
                                'twelvePoints' => $this->numberTwelve,
                                'thirteenPoints' => $this->numberThirteen,
                                'fortheenPoints' => $this->numberFortheen,
                                'fiftheenPoints' => $this->numberFiftheen,
                                'numberByUser' => $this->numberChooseUser,
                                'allConcursos' => $this->objLoto->getAllConcursos(),
                                'numberConcurso' => $request->input('concurso'),
                                'valuesConcurso' => $this->objLoto->getOneConcurso($request->input('concurso'))]);
    }

    public function checkAllPoints(Request $request){
        $games = $this->objLoto->getAll();
        $this->numberEleven= 0;
  
        foreach($games as $itens){
          $lblUm= 0;
          $lblDois= 0;
          $lblTres= 0;
          $lblQuatro= 0;
          $lblCinco= 0;
          $lblSeis= 0;
          $lblSete= 0;
          $lblOito= 0;
          $lblNove= 0;
          $lblDez= 0;
          $lblOnze= 0;
          $lblDoze= 0;
          $lblTreze= 0;
          $lblQuatorze= 0;
          $lblQuinze= 0;
          $lblSoma= 0;
          
          //1
          switch($itens->bolaUm){
            case intval($request->input('bolaoUm')):
             $lblUm = 1;
             break;

            case intval($request->input('bolaoDois')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoTres')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoOuatro')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoCinco')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoSeis')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoSete')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoOito')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoNove')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoDez')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoOnze')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoDoze')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoTreze')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoQuatorze')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoQuinze')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblUm = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblUm = 1;
            break;

            default:
            $lblUm = 0;
            break;
          }

           //2
           switch($itens->bolaDois){
            case intval($request->input('bolaoUm')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoDois')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoTres')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoOuatro')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoCinco')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoSeis')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoSete')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoOito')):
            $lblDois = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoDez')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoOnze')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoDoze')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoTreze')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoQuatorze')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoQuinze')):
            $lblDois = 1;
            break;
 
            case intval($request->input('bolaoDezesseis')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblDois = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblDois = 1;
            break;

            default:
            $lblDois = 0;
            break;
          }

           //3
           switch($itens->bolaTres){
            case intval($request->input('bolaoUm')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoDois')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoTres')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoOuatro')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoCinco')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoSeis')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoSete')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoOito')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoNove')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoDez')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoOnze')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoDoze')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoTreze')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoQuatorze')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoQuinze')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblTres = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblTres = 1;
            break;

            default:
            $lblTres = 0;
            break;
          }

          //4
          switch($itens->bolaQuatro){
            case intval($request->input('bolaoUm')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoDois')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoTres')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoOuatro')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoCinco')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoSeis')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoSete')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoOito')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoNove')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoDez')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoOnze')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoDoze')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoTreze')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoQuatorze')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoQuinze')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblQuatro = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblQuatro = 1;
            break;

            default:
            $lblQuatro = 0;
            break;
          }


          //5
          switch($itens->bolaCinco){
            case intval($request->input('bolaoUm')):
            $lblCinco = 1;
            break;

            case intval($request->input('bolaoDois')):
            $lblCinco = 1;
            break;

            case intval($request->input('bolaoTres')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblCinco = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblCinco = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblCinco = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblCinco = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblCinco = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblCinco = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblCinco = 1;
            break;
            
            default:
            $lblCinco = 0;
            break;
            
          }

          //6
          switch($itens->bolaSeis){
            case intval($request->input('bolaoUm')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblSeis = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblSeis = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblSeis = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblSeis = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblSeis = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblSeis = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblSeis = 1;
            break;
            
            default:
            $lblSeis = 0;
            break;
            
          }

           //7
           switch($itens->bolaSete){
            case intval($request->input('bolaoUm')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblSete = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblSete = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblSete = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblSete = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblSete = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblSete = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblSete = 1;
            break;
            
            default:
            $lblSete = 0;
            break;
            
          }

          //8
          switch($itens->bolaOito){
            case intval($request->input('bolaoUm')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblOito = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblOito = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblOito = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblOito = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblOito = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblOito = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblOito = 1;
            break;
            
            default:
            $lblOito = 0;
            break;
            
          }

          //9
          switch($itens->bolaNove){
            case intval($request->input('bolaoUm')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblNove = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblNove = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblNove = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblNove = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblNove = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblNove = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblNove = 1;
            break;
            
            default:
            $lblNove = 0;
            break;
            
          }

           //10
           switch($itens->bolaDez){
            case intval($request->input('bolaoUm')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblDez = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblDez = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblDez = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblDez = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblDez = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblDez = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblDez = 1;
            break;
            
            default:
            $lblDez = 0;
            break;
            
          }
           
          //11
          switch($itens->bolaOnze){
            case intval($request->input('bolaoUm')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblOnze = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblOnze = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblOnze = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblOnze = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblOnze = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblOnze = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblOnze = 1;
            break;
            
            default:
            $lblOnze = 0;
            break;
            
          }

          //12
          switch($itens->bolaDoze){
            case intval($request->input('bolaoUm')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblDoze = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblDoze = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblDoze = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblDoze = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblDoze = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblDoze = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblDoze = 1;
            break;
            
            default:
            $lblDoze = 0;
            break;
            
          }

           //13
           switch($itens->bolaTreze){
            case intval($request->input('bolaoUm')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblTreze = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblTreze = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblTreze = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblTreze = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblTreze = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblTreze = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblTreze = 1;
            break;
            
            default:
            $lblTreze = 0;
            break;
            
          }

           //14
           switch($itens->bolaQuatorze){
            case intval($request->input('bolaoUm')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblQuatorze = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblQuatorze = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblQuatorze = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblQuatorze = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblQuatorze = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblQuatorze = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblQuatorze = 1;
            break;
            
            default:
            $lblQuatorze = 0;
            break;
            
          }

          
           //15
           switch($itens->bolaQuinze){
            case intval($request->input('bolaoUm')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoDois')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoTres')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoOuatro')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoCinco')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoSeis')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoSete')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoOito')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoNove')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoDez')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoOnze')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoDoze')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoTreze')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoQuatorze')):
            $lblQuinze = 1;
            break;
            
            case intval($request->input('bolaoQuinze')):
            $lblQuinze = 1;
            break;

            case intval($request->input('bolaoDezesseis')):
            $lblQuinze = 1;
            break;

            case intval($request->input('bolaoDezessete')):
            $lblQuinze = 1;
            break;

            case intval($request->input('bolaoDezoito')):
            $lblQuinze = 1;
            break;

            case intval($request->input('bolaoDezenove')):
            $lblQuinze = 1;
            break;

            case intval($request->input('bolaoVinte')):
            $lblQuinze = 1;
            break;
            
            default:
            $lblQuinze = 0;
            break;
            
          }

       $lblSoma = $lblUm+$lblDois+$lblTres+$lblQuatro+$lblCinco+$lblSeis+$lblSete+$lblOito+$lblNove+$lblDez+$lblOnze+$lblDoze+$lblTreze+$lblQuatorze+$lblQuinze;
       
       if($lblSoma == 11){
        $this->numberEleven+=1;
       }

       if($lblSoma == 12){
        $this->numberTwelve+=1;
       }

       if($lblSoma == 13){
        $this->numberThirteen+=1;
       }   
        
       if($lblSoma == 14){
        $this->numberFortheen = $itens->concurso;
       }

       if($lblSoma == 15){
        $this->numberFiftheen = $itens->concurso;
       }
           
    }
   
     
  }

 
    public function addValuesOnArray(Request $request){
     $this->numberChooseUser = [$request->input("bolaoUm"), $request->input("bolaoDois"), $request->input("bolaoTres"), $request->input("bolaoOuatro"), $request->input("bolaoCinco"),
                                $request->input("bolaoSeis"), $request->input("bolaoSete"), $request->input("bolaoOito"), $request->input("bolaoNove"), $request->input("bolaoDez"),
                                $request->input("bolaoOnze"), $request->input("bolaoDoze"), $request->input("bolaoTreze"), $request->input("bolaoQuatorze"), $request->input("bolaoQuinze"),
                                $request->input("bolaoDezesseis"), $request->input("bolaoDezessete"), $request->input("bolaoDezoito"), $request->input("bolaoDezenove"), $request->input("bolaoVinte")];
    return $this->numberChooseUser;
    }

    

    public function getArrayWithComp(){
    return $this->formsNumber = ['bolaoUm','bolaoDois','bolaoTres','bolaoOuatro','bolaoCinco',
                                 'bolaoSeis','bolaoSete','bolaoOito','bolaoNove','bolaoDez',
                                 'bolaoOnze','bolaoDoze','bolaoTreze','bolaoQuatorze','bolaoQuinze',
                                 'bolaoDezesseis','bolaoDezessete','bolaoDezoito','bolaoDezenove','bolaoVinte',
                                 ]; 
    }

    public function getHowManyValues(){
    return $this->howMany = [
    1 => $this->objLoto->getHowMany(1),
    2 => $this->objLoto->getHowMany(2),
    3 => $this->objLoto->getHowMany(3),
    4 => $this->objLoto->getHowMany(4),
    5 => $this->objLoto->getHowMany(5),
    6 => $this->objLoto->getHowMany(6),
    7 => $this->objLoto->getHowMany(7),
    8 => $this->objLoto->getHowMany(8),
    9 => $this->objLoto->getHowMany(9),
    10 => $this->objLoto->getHowMany(10),
    11 => $this->objLoto->getHowMany(11),
    12 => $this->objLoto->getHowMany(12),
    13 => $this->objLoto->getHowMany(13),
    14 => $this->objLoto->getHowMany(14),
    15 => $this->objLoto->getHowMany(15),
    16 => $this->objLoto->getHowMany(16),
    17 => $this->objLoto->getHowMany(17),
    18 => $this->objLoto->getHowMany(18),
    19 => $this->objLoto->getHowMany(19),
    20 => $this->objLoto->getHowMany(20),
    21 => $this->objLoto->getHowMany(21),
    22 => $this->objLoto->getHowMany(22),
    23 => $this->objLoto->getHowMany(23),
    24 => $this->objLoto->getHowMany(24),
    25 => $this->objLoto->getHowMany(25)
    ];
    }

}
