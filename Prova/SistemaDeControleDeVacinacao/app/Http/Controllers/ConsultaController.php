<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ConsultaController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {


        $resultAplicacao = DB::select(' select registros.dose, sum(registros.dose) as sum_dose
                                        from  registros
                                        inner join pessoas
                                        on registros.pessoa_id = pessoas.id
                                        inner join vacinas
                                        on registros.vacina_id == vacinas.id
                                        group by registros.dose');


        $total = DB::select('select sum(dose) as sum_dose
                                    FROM registros
                                    ');
     
     
        $fabricanteDoses = DB::select('SELECT FABRICANTE, SUM(DOSE) AS qnt_doses
                            FROM REGISTROS 
                            INNER JOIN vacinas
                            ON REGISTROS.vacina_id = VACINAS.ID
                            GROUP BY VACINAS.FABRICANTE'); 
                            
        return  view('layouts.areaGeral', compact('resultAplicacao','total', 'fabricanteDoses'));
    }
}