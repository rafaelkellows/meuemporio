<!DOCTYPE html>
<html lang="pt-br">
  <?php
    $page_title = 'Home';
    include 'inc/head.php';
  ?>    
  <body>
    
    <main>
      <?php
        include 'inc/header.php';
      ?>        
      <section class="carrossel">
        <div class="carr_container">
          <dl class="to-right">  
            <dt><a href="javascript:void(0);"><h2>Qualidade de vida <em>no trabalho</em></h2></a></dt>
            <dd><img src="images/banners/Home-1.png" /></dd>
          </dl>
          <dl class="to-center">  
            <dt><a href="javascript:void(0);"><h2>Solução mais <em>eficiente e saudável</em></h2></a></dt>
            <dd><img src="images/banners/bn-fake-03.png" /></dd>
          </dl>
          <dl class="to-left">  
            <dt><a href="javascript:void(0);"><h2>O simples pode ser o <em>maior luxo</em></h2></a></dt>
            <dd><img src="images/banners/bn-fake-02.png" /></dd>
          </dl>
        </div>
      </section>

      <section class="highlights">
        <dl class="hl-01">
          <dt><h3>Segurança</h3></dt>
          <dd><p>É possível realizar suas compras com facilidade e segurança, 24 horas por dia, através de sistema exclusivo.</p></dd>
        </dl>
        <dl class="hl-02">
          <dt><h3>Conveniência</h3></dt>
          <dd><p>Variedade de alimentos pré-preparados e cuidadosamente selecionados para uma refeição rápida e saudável.</p></dd>
        </dl>
        <dl class="hl-03">
          <dt><h3>Praticidade</h3></dt>
          <dd><p>Não precisa de dinheiro! A fatura chega todo mês e é debitada diretamente do seu cartão de crédito.</p></dd>
        </dl>
        <dl class="hl-04">
          <dt><h3>Acessibillidade</h3></dt>
          <dd><p>As lojas são instaladas dentro do seu local de trabalho.Sua utilização é simples e intuitiva.</p></dd>
        </dl>
      </section>
    
      <section class="videoinfo">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/cjdYXVTvj9k" frameborder="0" allowfullscreen=""></iframe>
        <aside>
          <h4>Conheça uma solução mais eficiente e saudável para alimentação dos seus colaboradores</h4>
          <p>Meu empório é diferente de qualquer experiência de compra que você já teve: <strong>você escolhe o produto, passa no leitor de código de barras e pronto.</strong></p>
        </aside>
      </section>
      <?php
        include 'inc/footer.php';
      ?>        
    </main>


  </body>
</html>