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
        <form class="f_extract" name="frmAcessar" action="http://www.meuemporio.com/extrato/login" method="post">
          <fieldset>
            <legend>Acessar Extrato</legend>
            <label for="txtEmail">E-mail</label>
            <input class="email" name="EMAIL" id="txtEmail" placeholder="Email" type="text" />
            <label for="txtSenha">Senha</label>
            <input class="pswd" name="SENHA" id="txtSenha" placeholder="Senha" type="password" />
            <a class="forgot" href="http://www.meuemporio.com/extrato/login/esqueci-minha-senha" title="Esqueci minha senha" target="_blank"><span>Esqueci minha senha</span></a>
            <input class="access_extract" name="acessar" type="submit" value="Acessar meu Extrato" />
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