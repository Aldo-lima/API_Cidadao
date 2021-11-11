<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container" >
     <form action="{{route('salvar')}}" method="POST" >
         @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">nome</label>
          <input type="text" class="form-control" name="nome" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">sobre_nome</label>
          <input type="text" class="form-control" name="sobre_nome">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">cepf</label>
            <input type="text" class="form-control" name="cepf" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">telefone</label>
            <input type="text" class="form-control" name="telefone">
          </div>    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">cep</label>
            <input type="text" class="form-control" name="cep">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">logradouro</label>
            <input type="text" class="form-control" name="logradouro" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">numero</label>
            <input type="number" class="form-control" name="numero">
          </div>    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">bairra</label>
            <input type="text" class="form-control" name="bairro" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="cidade">
          </div>    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">uf</label>
            <input type="text" class="form-control" name="uf" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
