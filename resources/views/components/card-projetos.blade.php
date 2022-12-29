

        <div class="mt-3 col-lg-6 col-md-6 col-xxl-4">
            <!-- project card -->
            <div class="card d-block">
                <div class="card-body">
                    <div class="dropdown card-widgets">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-fill"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Editar</a>
                            <!-- item-->
                            <a href="" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Deletar</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invitar</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Sair</a>
                        </div>
                    </div>
                    <!-- project title-->
                    <h4 class="mt-0">
                        <a href="{{route('projetos.show', $projeto->id)}}" class="text-title">{{$projeto->nome_projeto}}</a>
                      
                    </h4>
                    <div class="badge bg-success">-Status-</div>

                    <p class="text-muted font-13 my-3">{{$projeto->descricao}}<a href="javascript:void(0);" class="fw-bold text-muted">Ver mais</a>
                    </p>

                    <!-- project detail-->
                    <p class="mb-1">
                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                            <b>21-</b> Tarefas
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                            <b>741</b> Comentários
                        </span>
                    </p>
                    <div id="tooltip-container">
                        
                        </a>
                        <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                            +7 more
                        </a>
                    </div>
                </div> <!-- end card-body-->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <!-- project progress-->
                        <p class="mb-2 fw-bold">Progresso <span class="float-end">50%</span></p>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </li>
                </ul>
            </div> <!-- end card-->
        </div>
