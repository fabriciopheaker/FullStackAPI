<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <title>API CEP</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
      <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" width="70" height="50" class="d-inline-block align-top" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#buscar">Buscar <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>

        </ul>

      </div>
    </nav>
  </header>


  <main class="container-fluid bg-light py-5">
    <div class="mx-3 px-3 row justify-content-cent">
      <div class="col-3"></div>
      <div class="col-6 container my-5 py-5 mx-3 px-3">
        <section class="container my-5 py-5 px-3 mx-3 border border-secondary bg-primary text-light rounded-lg" id="buscar">
          <h1 class="text-center">Buscar</h1>
          <form>
            <label for="ruaBusca1">Rua</label>
            <input type="text" class="form-control disable" id="ruaBusca" placeholder="Endereço">
            <label for="cepBusca">Cep</label>
            <input type="text" class="form-control disable" id="cepBusca" placeholder="CEP">
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-success mt-5 mr-4 ">Confirmar</button>
            </div>
          </form>
        </section>
        <section class="container my-5 py-5 mx-3 px-3">
          <h1 class="text-primary text-center">Resultado</h1>
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Rua</label>
              <input type="text" class="form-control disable" id="exampleFormControlInput1" placeholder="Endereço" readonly>
              <label for="exampleFormControlInput1">Numero</label>
              <input type="text" class="form-control disable" id="exampleFormControlInput1" placeholder="Numero" readonly>
              <label for="exampleFormControlInput1">Bairro</label>
              <input type="text" class="form-control disable" id="exampleFormControlInput1" placeholder="Bairro" readonly>
              <label for="exampleFormControlInput1">Cep</label>
              <input type="text" class="form-control disable" id="exampleFormControlInput1" placeholder="Cep" readonly>
              <label for="exampleFormControlInput1">Cidade</label>
              <input type="text" class="form-control disable" id="exampleFormControlInput1" placeholder="Cidade" readonly>
              <label for="exampleFormControlInput1">Estado</label>
              <input type="text" class="form-control disable" id="exampleFormControlInput1" placeholder="Estado" readonly>
            </div>
          </form>

        </section>


        <section class="">
          <h1 class="text-primary text-center">Cadastrados</h1>
        </section>




      </div>
      <div class="col-3"></div>
    </div>
  </main>



  <footer class="bg-primary">
    <a>.</a>
  </footer>
  <script src="{{asset('js/bootstrap.js')}}"></script>
</body>

</html>