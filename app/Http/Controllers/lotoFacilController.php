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
              $numberChooseUser =  array(),
              $concursoValues;

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
     
      $this->getArrayWithComp();
      $this->getCheckPoints($request);
      $this->getHowManyValues();
      $this->addValuesOnArray($request);
      arsort($this->howMany);
      return view('lotoJogos',['date'    => $this->objLoto->getAll(), 
                               'howMany' => $this->howMany, 
                                'points' => $this->points,
                                'numberByUser' => $this->numberChooseUser,
                                'allConcursos' => $this->objLoto->getAllConcursos(),
                                'numberConcurso' => $request->input('concurso'),
                                'valuesConcurso' => $this->objLoto->getOneConcurso($request->input('concurso'))]);
    }
    
    public function addValuesOnArray(Request $request){
     $this->numberChooseUser = [];
      for($o = 0; $o<sizeof($this->formsNumber); $o++){
       array_push($this->numberChooseUser,$request->input($this->formsNumber[$o]));
      }
    return $this->numberChooseUser;
    }

    public function getCheckPoints(Request $request){
        $this->points = 0;
        for($i=0; $i<sizeof($this->formsNumber); $i++){
            if($this->objLoto->getCaseHaveValue($this->formsNumber[$i], $request->input($this->formsNumber[$i]), $request->input('concurso')) > 0){
              $this->points+=1;
             }
        }
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
