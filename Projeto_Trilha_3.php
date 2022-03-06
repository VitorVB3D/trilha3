<!DOCTYPE html>

<html lang="pt-br">

<head>
  <title>Formulário de Contato</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <style>
    .hide-element {
      border: 0;
      clip: rect(1px 1px 1px 1px);
      clip: rect(1px, 1px, 1px, 1px);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }

    .alignn {
      display: block;

      margin-top: auto;
      margin-bottom: auto;
    }
  </style>


</head>

<body>

  <section class="container mx-auto bg-light mt-1 w-90" aria-labelledby="barra_acessibilidade">
    <header class="row">
      <!-- oculte a barra de acessibilidade -->
      <nav class="hide-element col-12 " id="barra_acessibilidade">
        <ul id="atalhos">
          <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
          <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
        </ul>
      </nav>

      <!-- faça com que as duas divs a seguir sejam exibidas lado a lado quando o viewport for maior 
            ou igual a 576px sendo que a primeira deve ocupar 3/12 e a segunda 9/12 consulte: https://getbootstrap.com.br/docs/4.1/layout/grid/ -->
      <div class="col-sm- col-sm-3">
        <img src="imageslogo.png" alt="Logotipo da empresa com dois triângulos sobrepostos." width="120">
      </div>

      <div class="alignn col-sm-9">
        <h1>Empresa XPTO</h1>
      </div>
    </header>

    <section class="row col-12">

      <!-- oculte o header abaixo 
          consulte https://getbootstrap.com.br/docs/4.1/utilities/display/ -->
      <header class="d-none">
        <h2 id="menu">Menu</h2>
      </header>

      <!-- torne o menu responsivo, conforme o exemplo
          consulte https://getbootstrap.com.br/docs/4.1/components/navbar/ -->

      <aside class="col-sm">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-expand-sm ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0  ">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>


            </ul>

          </div>

        </nav>


      </aside>

      <article class="col-12">
        <header>
          <h3 id="formulario">Formulário de Contato</h3>
        </header>

        <!-- torne o formulário responsivo, conforme o exemplo consulte https://getbootstrap.com.br/docs/4.1/components/forms/ -->

        <form action="#" method="post" class="needs-validation" novalidate>

          <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
          <input type="text" class="form-control form-control-sm" id="nome" placeholder="Digite seu nome" required>
          
          <div class="invalid-feedback">
            Campo de nome obrigatório.
          </div>
          <label for="email" class="col-sm-2 col-form-label col-form-label-sm">E-mail</label>
          <input type="email" class="form-control form-control-sm" id="email" placeholder="Digite seu email" required>
          
          <div class="invalid-feedback">
            Campo de e-mail obrigatório.
          </div>
          <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem </label>
          <textarea class="form-control form-control-sm" id="mensagem" placeholder="Digite sua mensagem" required></textarea>
          <div class="invalid-feedback">
            Campo de e-mail obrigatório.
          </div>
          <button type="submit" class="btn btn-primary my-1" id="button1">Enviar</button>

        </form>
      </article>
    </section>

    <footer class="row">
      <div class="col-12">
        <p>Copyright © 2021</p>
      </div>
    </footer>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <noscript>Atualize seu navegador</noscript>

  <script>
    // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName('needs-validation');
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();

  </script>

</body>

</html>