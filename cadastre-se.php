<!DOCTYPE html>
<html lang="pt-br">
  <?php
    $page_title = 'Cadastre-se';
    include 'inc/head.php';
  ?> 
  <body>
    <main class="internal">
      <?php
        include 'inc/header.php';
      ?>        
      <div class="breadcrumb">
        <h2 title="Cadastre-se">Cadastre-se</h2>
        <ul>
          <li><a href="index.html" title="Home"><span>Home</span></a></li>
          <li>›</li>
          <li><span>Cadastre-se</span></li>
        </ul>
      </div>
      <section class="form_signin">
        <form class="f_signin" action="/" method="post">
          <fieldset>
            <legend>Ficha Cadastral do Cliente</legend>
            <label for="name">Nome</label>
            <input class="name" id="name" placeholder="Nome" type="text" name="" />
            <label for="email">E-mail</label>
            <input class="email" id="email" placeholder="E-mail" type="text" name="" />
            <textarea placeholder="Mensagem"></textarea>
            <input class="btn-clear" type="reset" value="Limpar" />
            <input class="btn-send" type="submit" value="Enviar" />
          </fieldset>
        </form>
      </section>
      <?php
        include 'inc/footer.php';
      ?>        
    </main>
  </body>
</html>