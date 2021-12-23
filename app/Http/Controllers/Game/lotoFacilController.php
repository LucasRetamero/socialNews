<?php

namespace App\Http\Controllers\Game;

use Illuminate\Http\Request;
use App\Model\lotoFacilDAO;
use App\Http\Controllers\Controller;

class lotoFacilController extends Controller
{
    protected $objLoto,
              $points,
              $howMany = array(),
              $formsNumber = array(),
              $numberChooseUser =  array(),
              $numberFourtheenCon = array(),
              $numberFiftheenCon = array();

    //Check the points
    protected $numberEleven=0, $numberTwelve=0, $numberThirteen=0, 
              $numberFortheen=0, $numberFiftheen=0;

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
      $this->addValuesOnArray($request);
       return (count(array_filter($this->numberChooseUser)) >= 15) ? $this->caseFiftheenNumber($request) : $this->caseFiftheenNumberLess();                               
    }

    public function caseFiftheenNumberLess(){
     $this->getHowManyValues();
      arsort($this->howMany);
       return view('lotoJogos',['date'=> $this->objLoto->getAll(), 
                                'howMany' => $this->howMany,
                                'allConcursos' => $this->objLoto->getAllConcursos(),
                                'msgError' => true,
                                'numberByUser' => $this->numberChooseUser]);
    }

    public function caseFiftheenNumber(Request $request){
     $this->checkAllPoints($request);
      $this->getHowManyValues();
       arsort($this->howMany);
         return view('lotoJogos',['date'    => $this->objLoto->getAll(), 
                                  'howMany' => $this->howMany, 
                                  'elevenPoints' => $this->numberEleven,
                                  'twelvePoints' => $this->numberTwelve,
                                  'thirteenPoints' => $this->numberThirteen,
                                  'fortheenPoints' => $this->numberFortheen,
                                  'fiftheenPoints' => $this->numberFiftheen,
                                  'numbersConFourtheen' => $this->numberFourtheenCon,
                                  'numbersConFifhtheen' => $this->numberFiftheenCon, 
                                  'numberByUser' => $this->numberChooseUser,
                                  'allConcursos' => $this->objLoto->getAllConcursos()]);

    }

    public function checkAllPoints(Request $request){
        $games = $this->objLoto->getAll();
  
        foreach($games as $itens){
          $ValuesCounting = array();
          
          $ValuesCounting[0]  = $this->checkAllNumbers($request, $itens->bolaUm);
          $ValuesCounting[1]  = $this->checkAllNumbers($request, $itens->bolaDois);
          $ValuesCounting[2]  = $this->checkAllNumbers($request, $itens->bolaTres);
          $ValuesCounting[3]  = $this->checkAllNumbers($request, $itens->bolaQuatro);
          $ValuesCounting[4]  = $this->checkAllNumbers($request, $itens->bolaCinco);
          $ValuesCounting[5]  = $this->checkAllNumbers($request, $itens->bolaSeis);
          $ValuesCounting[6]  = $this->checkAllNumbers($request, $itens->bolaSete);
          $ValuesCounting[7]  = $this->checkAllNumbers($request, $itens->bolaOito);
          $ValuesCounting[8]  = $this->checkAllNumbers($request, $itens->bolaNove);
          $ValuesCounting[9]  = $this->checkAllNumbers($request, $itens->bolaDez);
          $ValuesCounting[10] = $this->checkAllNumbers($request, $itens->bolaOnze);
          $ValuesCounting[11] = $this->checkAllNumbers($request, $itens->bolaDoze);
          $ValuesCounting[12] = $this->checkAllNumbers($request, $itens->bolaTreze);
          $ValuesCounting[13] = $this->checkAllNumbers($request, $itens->bolaQuatorze);
          $ValuesCounting[14] = $this->checkAllNumbers($request, $itens->bolaQuinze);
        
       $lblSoma = $ValuesCounting[0]+$ValuesCounting[1]+$ValuesCounting[2]+$ValuesCounting[3]+$ValuesCounting[4]+$ValuesCounting[5]+$ValuesCounting[6]+$ValuesCounting[7]+$ValuesCounting[8]+$ValuesCounting[9]+$ValuesCounting[10]+$ValuesCounting[11]+$ValuesCounting[12]+$ValuesCounting[13]+$ValuesCounting[14];
       
       $this->countingInformation($lblSoma, $itens->concurso);
           
    }
     
  }

  public function countingInformation($value, $valueGame){
    switch($value){
      case 11:
       $this->numberEleven+=1;
      break;

      case 12:
       $this->numberTwelve+=1;
      break;
      
      case 13:
       $this->numberThirteen+=1;
      break;

      case 14:
       $this->numberFortheen+=1;
        array_push($this->numberFourtheenCon, $valueGame);
      break;
 
      case 15:
       $this->numberFiftheen+=1;
        array_push($this->numberFiftheenCon, $valueGame);
      break;
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

    public function checkAllNumbers(Request $request, $value){
      $countValue;

       switch($value){
        case intval($request->input('bolaoUm')):
          $countValue = 1;
         break;

        case intval($request->input('bolaoDois')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoTres')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoOuatro')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoCinco')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoSeis')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoSete')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoOito')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoNove')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoDez')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoOnze')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoDoze')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoTreze')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoQuatorze')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoQuinze')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoDezesseis')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoDezessete')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoDezoito')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoDezenove')):
         $countValue = 1;
        break;

        case intval($request->input('bolaoVinte')):
         $countValue = 1;
        break;

        default:
         $countValue = 0;
        break;
      }
      return $countValue;
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
