<h1>Lista de Alunos </h1>
<hr>
<div id="search-container" class="col-md-12"> 
  <h1>Busque</h1>
  <form action="">
    <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
  </form>
</div>  
<div id="events-container" class="col-md-12">
    <h2>Proximos eventos</h2>
    <p>Veja os eventos nos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($alunos as $aluno)
        <div class="card-col-md-3">
            <img src="/public/filmes.png" alt="{{$aluno->nome}}">
            <div class="card-body">
                <p class="card-date">1234</p>
                <h5 class="card-title">{{$aluno->nome}}</h5>
                <p class="card-participantes">X participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>

</div>