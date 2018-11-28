@extends('layouts.app')

@section('content')

<body>
	<h1>AGENDA ONLINE</h1>
	<div class="content">
      <div style="width: 87%;padding-left: 13%;padding-top: 7%;">
         <div>
            <h2 style="color: black;">Pesquise por Especialidade</h2>
            <div style="padding-bottom: 40px;">
               <form action="" method="post">
                  <select id="especialidadebox" name="especialidade" placeholder="Faça sua busca aqui" class="form-control" minlength="2" onchange="optCheckesp()">
                     @foreach($agendas as $key=> $agenda)
                        <option value="">Faça sua busca aqui</option>

                        <option value="{{$agenda->especialidade}}">
                           {{$agenda->especialidade}}
                        </option>
                     @endforeach
                  </select>
               </form>
               <div id="div_linkesp" style="visibility:hidden;">
                  <b>Clique na especialidade para saber onde encontrá-la</b><br>
                  <a href="https://www.w3schools.com" id="linkesp">Xesque Dele</a>
               </div>

            </div>
         </div>
         <div>
            <h2 style="color: black;">Pesquise por Unidade</h2>
            <div>
               <form action="" method="post">
                  <select id="unidadebox" name="unidade" placeholder="Faça sua busca aqui" class="form-control" minlength="2" onchange="optCheckuni()">
                     @foreach($agendas as $key=> $agenda)
                        <option value="">Faça sua busca aqui</option>
                        <option value="{{$agenda->unidade_saude}}">
                           {{$agenda->unidade_saude}}
                        </option>

                     @endforeach
                  </select>
                  
               </form>
               
               <div id="div_linkuni" style="visibility:hidden;">
                  <b>Clique no nome da unidade saber as especialidades dela</b><br>
                  <a href="https://www.w3schools.com" id="linkuni">Xesque Dele</a>
               </div>

            </div>
         </div>
      </div>
   </div>
</body>
<script>
      $(document).ready(function(){
         $('#especialidadebox').selectize();
      });
</script>
<script>
      $(document).ready(function(){
         $('#unidadebox').selectize();
      });
</script>
<script>
   function optCheckesp(){
      //Diz o nome do selected
      var option = document.getElementById("especialidadebox").value;

      //isso aqui seleciona o nome
      let selecionado = $("#especialidadebox option:selected");

      //essa pega o valor e guarda
      let especialidade = $("#especialidadebox option:selected").attr("selected", "selected").text();

      //essa vou usar para mandar o resultado para url
      let resultado = especialidade;
      console.log(resultado);

      //Pega o resultado e concatena com o caminha para realizar a Query
      let endereco = "procuraresp/" +resultado.trim();
      console.log(endereco);

      //Associa o link ao valor que ta Hidden
      $("#linkesp").attr("href", endereco);
      $("#linkesp").text(especialidade);

      //Tira o Hidden do bagulho
      document.getElementById("div_linkesp").style.visibility = "visible";
   }

   function optCheckuni(){
      //Diz o nome do selected
      var option = document.getElementById("unidadebox").value;

      //isso aqui seleciona o nome
      let selecionado = $("#unidadebox option:selected");

      //essa pega o valor e guarda
      let unidade = $("#unidadebox option:selected").attr("selected", "selected").text();

      //essa vou usar para mandar o resultado para url
      let resultado = unidade;
      console.log(resultado);

      //Pega o resultado e concatena com o caminha para realizar a Query
      let endereco = "procuraruni/" +resultado.trim();
      console.log(endereco);

      //Associa o link ao valor que ta Hidden
      $("#linkuni").attr("href", endereco);
      $("#linkuni").text(unidade);

      //Tira o Hidden do bagulho
      document.getElementById("div_linkuni").style.visibility = "visible";
   }

</script>

@endsection