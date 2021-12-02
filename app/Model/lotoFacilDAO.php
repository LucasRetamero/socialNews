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

  public function getCaseHaveValue($componente, $value){
    switch($componente){
    case 'bolaoUm':
    return lotoFacilDAO::where('bolaoUm', $value)
                        ->count();
    break;

    case 'bolaoDois':
    return lotoFacilDAO::where('bolaoDois', $value)
                       ->count();
    break;
    
    case 'bolaoTres':
    return lotoFacilDAO::where('bolaoTres', $value)
                        ->count();
    break;

    case 'bolaoOuatro':
    return lotoFacilDAO::where('bolaoOuatro', $value)
                        ->count();
    break;

    case 'bolaoCinco':
    return lotoFacilDAO::where('bolaoCinco', $value)
                        ->count();
    break;

    case 'bolaoSeis':
    return lotoFacilDAO::where('bolaoSeis', $value)
                        ->count();
    break;

    case 'bolaoSete':
    return lotoFacilDAO::where('bolaoSete', $value)
                        ->count();
    break;

    case 'bolaoOito':
    return lotoFacilDAO::where('bolaoOito', $value)
                        ->count();
    break;

    case 'bolaoNove':
    return lotoFacilDAO::where('bolaoNove', $value)
                        ->count();
    break;

    case 'bolaoDez':
    return lotoFacilDAO::where('bolaoDez', $value)
                        ->count();
    break;

    case 'bolaoOnze':
    return lotoFacilDAO::where('bolaoOnze', $value)
                        ->count();
    break;

    case 'bolaoDoze':
    return lotoFacilDAO::where('bolaoDoze', $value)
                        ->count();
    break;

    case 'bolaoTreze':
    return lotoFacilDAO::where('bolaoTreze', $value)
                        ->count();
    break;

    case 'bolaoQuatorze':
    return lotoFacilDAO::where('bolaoQuatorze', $value)
                        ->count();
    break;

    case 'bolaoQuinze':
    return lotoFacilDAO::where('bolaoQuinze', $value)
                        ->count();
    break;

    case 'bolaoDezesseis':
    return $this->getHowMany($value);
    break;

    case 'bolaoDezessete':
    return $this->getHowMany($value);
    break;

    case 'bolaoDezoito':
    return $this->getHowMany($value);
    break;

    case 'bolaoDezenove':
    return $this->getHowMany($value);
    break;

    case 'bolaoVinte':
    return $this->getHowMany($value);
    break;
   }
  }

}
