<!DOCTYPE html>
<html lang="pt-br">
  <?php
    $page_title = 'Quem Somos';
    include 'inc/head.php';
  ?>    
  <body>
    <main class="internal">
      <?php
        include 'inc/header.php';
      ?>        
      <div class="breadcrumb">
        <h2>Quem Somos</h2>
        <ul>
          <li><a href="index.html" title="Home"><span>Home</span></a></li>
          <li>›</li>
          <li><span>Quem Somos</span></li>
        </ul>
      </div>

      <section class="videoinfo">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/cjdYXVTvj9k" frameborder="0" allowfullscreen=""></iframe>
        <aside>
          <h4>Meu Empório é a Evolução do Varejo.</h4>
          <p>Uma forma das pessoas comprarem sem complicação, com inovação e com acesso a produtos orientados às suas necessidades.</p>
          <p>Estamos ao lado de nossos clientes antecipando seus desejos e necessidades, entendendo o universo das pessoas e seus comportamentos.</p>
          <p>Queremos proporcionar a melhor experiência de compra, reunindo conveniência e segurança de forma amigável e muito simples.</p>
          <p>Isso é conveniência total. O prazer de ter uma experiência de compra memorável.</p>
          <p>Veja o vídeo ao lado para entender como funcionamos.</p>
          <a href="contato.php" title="Quero mais informações"><span>Quero mais informações</span></a>
        </aside>
      </section>

      <section class="highlights whoweare">
        <dl class="hl-01">
          <dt><h3 title="Praticidade e Segurança">Praticidade e Segurança</h3></dt>
          <dd>
            <p>Um local onde é possível realizar suas compras com facilidade e segurança, 24 horas por dia. Você escolhe o produto, pega, passa pelo leitor e consome sem sequer tocar em dinheiro. É tudo muito simples e rápido, sem precisar se deslocar para fora do escritório ou esperar entregadores de fast food.</p>
          </dd>
        </dl>
        <dl class="hl-02">
          <dt><h3 title="Pagamento Simplificado">Pagamento Simplificado</h3></dt>
          <dd>
            <p>Se você está cadastrado na loja <strong>Meu Empório</strong>, não tem preocupações! Durante o mês vai consumindo aquilo que deseja e no dia programado o valor das compras cai na sua fatura do cartão de crédito! Ou seja, além de toda a conveniência que a loja oferece, você também ganha em segurança: não precisa carregar dinheiro e nem sair do local para fazer suas refeições.</p>
          </dd>
        </dl>
        <dl class="hl-03">
          <dt title="Qualidade e Rapidez"><h3>Qualidade e Rapidez</h3></dt>
          <dd>
            <p>Muitas vezes, na correria de um dia mais atribulado, deixamos de comer ou abrimos mão da qualidade para fazer uma refeição rápida.Nas lojas <strong>Meu Empório</strong> você pode aliar a praticidade dos alimentos pré-preparados com uma variedade de produtos selecionados que prezam pela qualidade. Tudo isso a um preço justo!</p>
          </dd>
        </dl>
      </section>
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