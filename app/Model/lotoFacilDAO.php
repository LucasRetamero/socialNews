<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class lotoFacilDAO extends Model
{
    protected $table = 'loto_facil';
    protected $fillable = ['concurso',
                           'bolaoUm',
                           'bolaoDois',
                           'bolaoTres',
                           'bolaoOuatro',
                           'bolaoCinco',
                           'bolaoSeis',
                           'bolaoSete',
                           'bolaoOito',
                           'bolaoNove',
                           'bolaoDez',
                           'bolaoOnze',
                           'bolaoDoze',
                           'bolaoTreze',
                           'bolaoQuatorze',
                           'bolaoQuinze'];
    public $timestamps = false;
    
    public function getAll(){
      return lotoFacilDAO::orderBy('concurso')->get();  
    }
    
    public function getHowMany($value){
       return lotoFacilDAO::where('bolaoUm', $value)
                           ->orwhere('bolaoDois', $value)
                           ->orwhere('bolaoTres', $value)
                           ->orwhere('bolaoOuatro', $value)
                           ->orwhere('bolaoCinco', $value)
                           ->orwhere('bolaoSeis', $value)
                           ->orwhere('bolaoSete', $value)
                           ->orwhere('bolaoOito', $value)
                           ->orwhere('bolaoNove', $value)
                           ->orwhere('bolaoDez', $value)
                           ->orwhere('bolaoOnze', $value)
                           ->orwhere('bolaoDoze', $value)
                           ->orwhere('bolaoTreze', $value)
                           ->orwhere('bolaoQuatorze', $value)
                           ->orwhere('bolaoQuinze', $value)
                           ->count();

  }

  public function getHowManyByConcurso($value, $concursoValue){
    return lotoFacilDAO::where('bolaoUm', $value)
                        ->orwhere('bolaoDois', $value)
                        ->orwhere('bolaoTres', $value)
                        ->orwhere('bolaoOuatro', $value)
                        ->orwhere('bolaoCinco', $value)
                        ->orwhere('bolaoSeis', $value)
                        ->orwhere('bolaoSete', $value)
                        ->orwhere('bolaoOito', $value)
                        ->orwhere('bolaoNove', $value)
                        ->orwhere('bolaoDez', $value)
                        ->orwhere('bolaoOnze', $value)
                        ->orwhere('bolaoDoze', $value)
                        ->orwhere('bolaoTreze', $value)
                        ->orwhere('bolaoQuatorze', $value)
                        ->orwhere('bolaoQuinze', $value)
                        ->where('concurso', $concursoValue)
                        ->count();

}

  public function getAllConcursos(){
    return lotoFacilDAO::orderBy('concurso',  'desc')
                         ->get();
  }

  public function getOneConcurso($value){
    if($value != "all"){
    return lotoFacilDAO::where('concurso', $value)
                         ->get();
    }
  }

  public function getCaseHaveValue($componente, $value, $concurso){
    switch($componente){
    case 'bolaoUm':

     if($concurso == "all"){
      return lotoFacilDAO::where('bolaoUm', $value)
                        ->count();
     }else{
      return lotoFacilDAO::where('bolaoUm', $value)
                        ->where('concurso', $concurso)
                        ->count();
     } 

    break;

    case 'bolaoDois':

      if($concurso == "all"){
       return lotoFacilDAO::where('bolaoDois', $value)
                       ->count();
      }else{
        return lotoFacilDAO::where('bolaoDois', $value)
                        ->where('concurso', $concurso)
                        ->count();
        }

    break;
    
    case 'bolaoTres':

     if($concurso == "all"){
        return lotoFacilDAO::where('bolaoTres', $value)
                        ->count();
       }else{
        return lotoFacilDAO::where('bolaoTres', $value)
                              ->where('concurso', $concurso)
                              ->count();
       }

    break;

    case 'bolaoOuatro':

     if($concurso == "all"){
      return lotoFacilDAO::where('bolaoOuatro', $value)
                        ->count();
     }else{
       return lotoFacilDAO::where('bolaoOuatro', $value)
                            ->where('concurso', $concurso)
                            ->count();
      }

    break;

    case 'bolaoCinco':

     if($concurso == "all"){
      return lotoFacilDAO::where('bolaoCinco', $value)
                        ->count();
        }else{
          return lotoFacilDAO::where('bolaoCinco', $value)
                                ->where('concurso', $concurso)
                                ->count();
        }
    break;

    case 'bolaoSeis':

    if($concurso == "all"){
     return lotoFacilDAO::where('bolaoSeis', $value)
                        ->count();
      }else{
       return lotoFacilDAO::where('bolaoSeis', $value)
                            ->where('concurso', $concurso)
                             ->count();
       }
    break;

    case 'bolaoSete':
    
    if($concurso == "all"){
     return lotoFacilDAO::where('bolaoSete', $value)
                        ->count();
        }else{
          return lotoFacilDAO::where('bolaoSete', $value)
                                 ->where('concurso', $concurso)
                                 ->count();
         }
    break;

    case 'bolaoOito':

    if($concurso == "all"){
      return lotoFacilDAO::where('bolaoOito', $value)
                        ->count();
        }else{
      return lotoFacilDAO::where('bolaoOito', $value)
                           ->where('concurso', $concurso)
                           ->count();
        }
                        
    break;

    case 'bolaoNove':

    if($concurso == "all"){
     return lotoFacilDAO::where('bolaoNove', $value)
                        ->count();
       }else{
         return lotoFacilDAO::where('bolaoNove', $value)
                               ->where('concurso', $concurso)
                                ->count();
        }
    break;

    case 'bolaoDez':

    if($concurso == "all"){
     return lotoFacilDAO::where('bolaoDez', $value)
                        ->count();
       }else{
      return lotoFacilDAO::where('bolaoDez', $value)
                              ->where('concurso', $concurso)
                              ->count();
         }
    break;

    case 'bolaoOnze':

    if($concurso == "all"){
     return lotoFacilDAO::where('bolaoOnze', $value)
                        ->count();
       }else{
        return lotoFacilDAO::where('bolaoOnze', $value)
                            ->where('concurso', $concurso)
                            ->count();
        }
    break;

    case 'bolaoDoze':

    if($concurso == "all"){
     return lotoFacilDAO::where('bolaoDoze', $value)
                        ->count();
        }else{
         return lotoFacilDAO::where('bolaoDoze', $value)
                                ->where('concurso', $concurso)
                                 ->count();
          }
    break;

    case 'bolaoTreze':
   
    if($concurso == "all"){
     return lotoFacilDAO::where('bolaoTreze', $value)
                        ->count();
       }else{
     return lotoFacilDAO::where('bolaoTreze', $value)
                           ->where('concurso', $concurso)
                           ->count();
       }
    break;

    case 'bolaoQuatorze':
   
    if($concurso == "all"){
     return lotoFacilDAO::where('bolaoQuatorze', $value)
                        ->count();
      }else{
       return lotoFacilDAO::where('bolaoQuatorze', $value)
                           ->where('concurso', $concurso)
                           ->count();
        }
    break;

    case 'bolaoQuinze':
    
    if($concurso == "all"){
     return lotoFacilDAO::where('bolaoQuinze', $value)
                        ->count();
      }else{
     return lotoFacilDAO::where('bolaoQuinze', $value)
                           ->where('concurso', $concurso)
                           ->count();
       }
    break;

    case 'bolaoDezesseis':
    case 'bolaoDezessete':
    case 'bolaoDezoito':
    case 'bolaoDezenove':
    case 'bolaoVinte':
     if($concurso == "all"){
      return $this->getHowMany($value);
      }else{
      return $this->getHowManyByConcurso($value, $concurso);
      }
    break;
   }
  }


}
