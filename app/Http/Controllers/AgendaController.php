<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controller
{
	public function index()
	{
   $agendas = DB::table('view_agenda_consultas')->get();
        //dd($agenda);
   return view('welcome',compact('agendas'));
	}

	public function procuraresp($resultado)
	{
		//dd($resultado);

//Query Mysql caso de bosta
//select * from view_agenda_consultas where curdate() between curdate() and eag_data_fim_escala
//ou
//select * from view_agenda_consultas where eag_data_fim_escala >= curdate()

		$dados = DB::table('view_agenda_consultas')
			->where('especialidade','=', $resultado)
			->where('eag_data_fim_escala','>=',DB::raw('curdate()'))->get();
			//dd($dados);
		return view('show', compact('dados'));
	}

	public function procuraruni($resultado)
	{
		$dados = DB::table('view_agenda_consultas')
			->where('unidade_saude','=', $resultado)
			->where('eag_data_fim_escala','>=',DB::raw('curdate()'))->get();
			//dd($dados);
		return view('showuni', compact('dados'));
	}

	
}
