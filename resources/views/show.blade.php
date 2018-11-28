<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		<title>AgendaOnline</title>
			
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="{{ url('selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/meucss.css') }}">
		
		<script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>
		
		<script type="text/javascript" src='{{ url("selectize/js/standalone/selectize.min.js") }}'></script>
	</head>
	<body>
		<nav class="navbar navbar-absolute">
			<div class="container-fluid">
				<img src="/img/logo.png" height="65" style="padding-top: 6px;" />
					<a>
						<img id="img360" class="logo360 retira_padding_verticais" src="http://consultaprevia.mesquita.rj.gov.br/img/loading.gif">
					</a>        
			</div>
		</nav>

		<div class="content">
			<div class="table-responsive">
				<table class="table">
						<thead>
							<tr>
								<th scope="col">Medico</th>
								<th scope="col">Especialidade</th>
								<th scope="col">Unidade de Atendimento</th>
								<th scope="col">Dia da semana</th>
							</tr>
						</thead>
						<tbody>
							@foreach($dados as $key => $dado)
							<tr>
								<td>{{$dado->profissional}}</td>
								<td>{{$dado->especialidade}}</td>
								<td>{{$dado->unidade_saude}}</td>
								<td>
								@if($dado->dsm_id == '2')
									<?=str_replace('2','Segunda-Feira',$dado->dsm_id)?>
								@elseif($dado->dsm_id == '3')
									<?=str_replace('3','Terça-Feira',$dado->dsm_id)?>
								@elseif($dado->dsm_id == '4')
									<?=str_replace('4','Quarta-Feira',$dado->dsm_id)?>
								@elseif($dado->dsm_id == '5')
									<?=str_replace('5','Quinta-Feira',$dado->dsm_id)?>
								@elseif($dado->dsm_id == '6')
									<?=str_replace('6','Sexta-Feira',$dado->dsm_id)?>
								@elseif($dado->dsm_id == '7')
									<?=str_replace('7','Sabado',$dado->dsm_id)?>
							@endif
						</td>
							</tr>			
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<footer class="footer">
			<div class="container-fluid">
				<div class="rodape">
						<p style="color:indigo">Prefeitura Municipal de Mesquita - RJ - Rua Arthur Oliveira Vecchi, 120 Centro - Mesquita - RJ CEP: 26553-080</p>
						<p style="color:indigo">2017 @Subsecretaria da Tecnologia da Informação</p>
				</div>
			</div>
		</footer>

	</body>
</html>
