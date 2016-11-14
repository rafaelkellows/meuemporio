<!DOCTYPE html>
<html lang="pt-br">
  <?php
    $page_title = 'Sua Empresa';
    include 'inc/head.php';
  ?>    
  <body>
    <main class="internal">
      <?php
        include 'inc/header.php';
      ?>        
      <div class="breadcrumb">
        <h2>Sua Empresa</h2>
        <ul>
          <li><a href="index.html" title="Home"><span>Home</span></a></li>
          <li>›</li>
          <li><a href="javascript:void(0);" title="Quem Somos"><span>Quem Somos</span></a></li>
          <li>›</li>
          <li><span>Sua Empresa</span></li>
        </ul>
      </div>

      <section class="videoinfo">
        <iframe width="100%" height="315" src="https://youtu.be/cjdYXVTvj9k" frameborder="0" allowfullscreen=""></iframe>
        <aside>
          <h4>Já pensou no tempo que seus funcionários perdem para fazer lanches e comprar refeições?</h4>
          <p>E no problema de lidar com entregadores de fast food entrando na sua empresa, seja no horário do almoço ou quando a equipe faz hora extra?</p>
          <p>É possível minizar estes incovenientes e ainda agregar um novo benefício a seus colaboradores. Dar eles opção de refeições saudáveis, com muita segurança, comodidade e uma experiência de compra memorável! Tudo isso sem que sua empresa invista dinheiro algum!</p>
          <p>Veja abaixo como é fácil fazer parte do <strong>Meu Empório</strong>.</p>
          <a href="javascript:void(0);" title="Quero mais informação"><span>Quero mais informação</span></a>
        </aside>
      </section>

      <section class="highlights company">
        <dl class="hl-01">
          <dt><h3 title="O que você precisa">O que você precisa</h3></dt>
          <dd>
            <p><i class="fa fa-check"></i> Espaço físico para instalação da loja</p>
            <p><i class="fa fa-check"></i> Pontos de energia e internet</p>
            <p><i class="fa fa-check"></i> Documentação</p>
          </dd>
        </dl>
        <dl class="hl-02">
          <dt><h3 title="Como instalar">Como instalar</h3></dt>
          <dd>
            <p><i class="fa fa-check"></i> A equipe <strong>Meu Empório</strong> vai até sua empresa e avalia o local disponível  </p>
            <p><i class="fa fa-check"></i> É criada uma loja que se encaixa no espaço que a empresa tem  </p>
            <p><i class="fa fa-check"></i> Sua empresa não gasta nada para instalar a loja </p>
          </dd>
        </dl>
        <dl class="hl-03">
          <dt title="Benefícios"><h3>Benefícios</h3></dt>
          <dd>
            <p><i class="fa fa-check"></i> Atendimento 24 horas por dia, sem necessidade de atendente</p>
            <p><i class="fa fa-check"></i> O consumidor acessa o produto e faz o checkout sozinho</p>
            <p><i class="fa fa-check"></i> Não é preciso sair da empresa para consumir alimentos saudáveis e saborosos</p>
          </dd>
        </dl>
      </section>
      <?php
        include 'inc/footer.php';
      ?>        
    </main>
  </body>
</html>