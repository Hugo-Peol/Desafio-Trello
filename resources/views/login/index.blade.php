<!doctype html>
<html lang="en">

<head>
  <title>PlannerDO</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
   
  </header>


  <main>

    <style>
    .gradient-custom {
    /* fallback for old browsers */
    background: #6a11cb;
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
    
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
  </style>
    
  <section class="vh-100 gradient-custom">
    <form method="post" action="">
      @csrf
      <div class="container py-5 h-100">
        <div class="container col-12 col-md-8 col-lg-6 col-xl-5">
          <h1 class="col-12 d-flex justify-content-center align-items-center"> PlannerDO</h1>
        </div>
        <div class="row d-flex justify-content-center align-items-center mt-5">
          {{-- centralizar o de baixo --}}
          <h2 class="text-center">O sistema para coisas que você não precisa e problemas que você não tem!</h2> 
          <div class="col-12 col-md-8 col-lg-6 col-xl-5 mt-4  ">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <form action="post" action="{{route('projetos.store')}}">
                  @csrf
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Entrar</h2>
                    <p class="text-white-50 mb-5">Entre com seu Email e senha por favor!</p>
      
                    <div class="form-outline form-white mb-4">
                      <label class="form-label" for="typeEmailX">Email:</label>
                      <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                      
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <label class="form-label" for="typePasswordX">Senha:</label>
                      <input type="password" name="password" id="password" class="form-control form-control-lg" />
                      
                    </div>
      
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Esqueceu sua senha?</a></p>
      
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Entrar</button>
                  
                    {{-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white">aaaaaaa<i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white">aaaaaaaaa<i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white">aaaaaaaaaaa<i class="fab fa-google fa-lg"></i></a>
                    </div> --}}
      
                  </div>
                  <div>
                    <p class="mb-0">Não tem uma conta? <a href="{{route('user.create')}}" class="text-white-50 fw-bold">Cadastre-se</a>
                    </p>
                  </div>
                </form>
                
    
              </div>
            </div>
          </div>
        </div>
      </div>
    
  |</section>