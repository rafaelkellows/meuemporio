<!DOCTYPE html>
<html lang="pt-br">
  <?php
    $page_title = 'Nossos Clientes';
    include 'inc/head.php';
  ?>    
  <body>
    <main class="internal">
      <?php
        include 'inc/header.php';
      ?>        
      <div class="breadcrumb">
        <h2 title="Acessar Extrato">Acessar Extrato</h2>
        <ul>
          <li><a href="index.html" title="Home"><span>Home</span></a></li>
          <li>›</li>
          <li><span>Acessar Extrato</span></li>
        </ul>
      </div>
      <section class="form_extract">
        <form class="f_extract" action="/" method="post">
          <fieldset>
            <legend>Acessar Extrato</legend>
            <label for="email">E-mail</label>
            <input class="email" id="email" placeholder="E-mail" type="text" name="" />
            <label for="pswd">Senha</label>
            <input class="pswd" id="pswd" placeholder="Senha" type="password" name="" />
            <a class="forgot" href="javascript:void(0);" title="Esqueci minha senha"><span>Esqueci minha senha</span></a>
            <input class="access_extract" type="submit" value="Acessar meu Extrato" />
            <!--a class="access_extract" href="javascript:void(0);" title="Acessar meu extrato"><span>Acessar meu extrato</span></a-->
          </fieldset>
        </form>
      </section>
      <?php
        include 'inc/footer.php';
      ?>        
    </main>
  </body>
</html>