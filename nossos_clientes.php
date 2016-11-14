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
        <h2 title="Nossos Clientes">Nossos Clientes</h2>
        <ul>
          <li><a href="index.html" title="Home"><span>Home</span></a></li>
          <li>›</li>
          <li><span>Nossos Clientes</span></li>
        </ul>
      </div>
      <section class="clients_list">
        <h5>CONHEÇA QUEM JÁ POSSUI NOSSAS LOJAS</h5>
        <ul>
          <li><img src="images/clientes/BIP.png" title="BI&P - Banco Indusval&Parterns" /></li>
          <li><img src="images/clientes/brasil.png" title="BRASILPREV" /></li>
          <li><img src="images/clientes/groupon.png" title="GROUPON" /></li>
          <li><img src="images/clientes/hines.png" title="Hines Securities" /></li>
        </ul>
      </section>
      <?php
        include 'inc/footer.php';
      ?>        
    </main>
  </body>
</html>