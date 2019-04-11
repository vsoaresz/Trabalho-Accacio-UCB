<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <h6 class="sidebar-heading justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
                <i class="fa fa-user fa-md"></i>
                <span>Professor</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="{{route('professors.index')}}">
                    <i class="far fa-circle fa-sm"></i>
                    Visualizar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('professors.create')}}">
                    <i class="far fa-circle fa-sm"></i>
                    Cadastro
                </a>
            </li>
            <h6 class="sidebar-heading justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
                    <i class="fa fa-address-book fa-md"></i>
                    <span>Turma</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="far fa-circle fa-sm"></i>
                    Cadastro
                </a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="{{route('turma.det')}}">
                    <i class="far fa-circle fa-sm"></i>
                    Detalhes
                </a>
            </li>  
        </ul>
    </div>

</nav>
