

<nav class="navbar navbar-expand-lg navbar-light " style="background: rgba(74, 90, 122, 0.514)">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PlannerDO</a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('projetos.index')}}">Projetos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sprints.index')}}">Sprints</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('tarefas.index')}}">
              Tarefas</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>