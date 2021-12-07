<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class lotoFacilDAO extends Model
{
    protected $table = 'loto_facil';
    protected $fillable = ['concurso',
                           'bolaUm',
                           'bolaDois',
                           'bolaTres',
                           'bolaQuatro',
                           'bolaCinco',
                           'bolaSeis',
                           'bolaSete',
                           'bolaOito',
                           'bolaNove',
                           'bolaDez',
                           'bolaOnze',
                           'bolaDoze',
                           'bolaTreze',
                           'bolaQuatorze',
                           'bolaQuinze'];
    public $timestamps = false;

  
    
    public function getAll(){
      return  DB::select(DB::raw('select * from loto_facil
      order by concurso+0'));  
    }
    
    public function getHowMany($value){
       return lotoFacilDAO::where('bolaUm', $value)
                           ->orwhere('bolaDois', $value)
                           ->orwhere('bolaTres', $value)
                           ->orwhere('bolaQuatro', $value)
                           ->orwhere('bolaCinco', $value)
                           ->orwhere('bolaSeis', $value)
                           ->orwhere('bolaSete', $value)
                           ->orwhere('bolaOito', $value)
                           ->orwhere('bolaNove', $value)
                           ->orwhere('bolaDez', $value)
                           ->orwhere('bolaOnze', $value)
                           ->orwhere('bolaDoze', $value)
                           ->orwhere('bolaTreze', $value)
                           ->orwhere('bolaQuatorze', $value)
                           ->orwhere('bolaQuinze', $value)
                           ->count();

  }

  public function getHowManyByConcurso($value, $concursoValue){
    return lotoFacilDAO::where('bolaUm', $value)
                        ->orwhere('bolaDois', $value)
                        ->orwhere('bolaTres', $value)
                        ->orwhere('bolaQuatro', $value)
                        ->orwhere('bolaCinco', $value)
                        ->orwhere('bolaSeis', $value)
                        ->orwhere('bolaSete', $value)
                        ->orwhere('bolaOito', $value)
                        ->orwhere('bolaNove', $value)
                        ->orwhere('bolaDez', $value)
                        ->orwhere('bolaOnze', $value)
                        ->orwhere('bolaDoze', $value)
                        ->orwhere('bolaTreze', $value)
                        ->orwhere('bolaQuatorze', $value)
                        ->orwhere('bolaQuinze', $value)
                        ->where('concurso', $concursoValue)
                        ->count();

}

  public function getAllConcursos(){
    return  DB::select(DB::raw('select concurso from loto_facil
      order by concurso+0 desc'));
  }

  public function getOneConcurso($value){
    if($value != "all"){
    return lotoFacilDAO::where('concurso', $value)
                         ->get();
    }
  }

}
