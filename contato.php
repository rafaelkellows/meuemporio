<!DOCTYPE html>
<html lang="pt-br">
  <?php
    $page_title = 'Contato';
    include 'inc/head.php';
  ?> 
  <body>
    <main class="internal">
      <?php
        include 'inc/header.php';
      ?>        
      <div class="breadcrumb">
        <h2 title="Contato">Contato</h2>
        <ul>
          <li><a href="index.html" title="Home"><span>Home</span></a></li>
          <li>›</li>
          <li><span>Contato</span></li>
        </ul>
      </div>
      <section class="form_contact">
        <aside>
          <p>Deixe sua mensagem no formulário ao lado e ficaremos felizes em atênde-lo!</p>
          <p>
            <strong>Meu Empório</strong><br>
            Rua Tenente Gomes Ribeiro, 182 - Conjunto 14<br>
            04038-010 São Paulo - SP<br>
            (11) 5081-3585<br>
            <a href="mailto:contato@meuemporio.com"><span>contato@meuemporio.com</span></a>
          </p>
          <p>Acompanhe nossas novidades pelas redes sociais.</p>
          <ul>
            <li><a class="fa fa-facebook" href="facebook.com" title="Facebook" target="_blank"><span>Facebook</span></a></li>
            <li><a class="fa fa-instagram" href="instagram.com" title="Instagram" target="_blank"><span>Instagram</span></a></li>
          </ul>
        </aside>
        <form class="f_contact" action="/" method="post">
          <fieldset>
            <legend>Contato</legend>
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