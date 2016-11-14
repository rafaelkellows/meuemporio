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
        <!--iframe src="http://www.meuemporio.com/extrato/usuario/novo" width="100%" height="1400" frameborder="0"></iframe-->
        <form class="f_signin" action="/" method="post" style="display: bloxk;">
          <fieldset>
            <legend>Ficha Cadastral do Cliente</legend>
            <!-- Dados Pessoais -->
            <h3>Dados Pessoais</h3>            
            <div>
              <label for="email_corp">E-mail Comercial *</label>
              <input class="email_corp" id="email_corp" type="text" name="" />
            </div>
            <div>
              <label for="email">E-mail Particular *</label>
              <input class="email" id="email" type="text" name="" />
              <em>* Este email será utilizado para o login</em>
            </div>
            <div>
              <label for="cpf">CPF *</label>
              <input class="cpf" id="cpf" type="text" name="" />
            </div>
            <div>
              <label for="rg">RG *</label>
              <input class="rg" id="rg" type="text" name="" />
            </div>
            <div>
              <label for="name">Nome *</label>
              <input class="name" id="name" type="text" name="" />
            </div>
            <div>
              <label for="gender">Sexo *</label>
              <input type="radio" name="gender" value="Masculino" /> Masculino
              <input type="radio" name="gender" value="Feminino" /> Feminino
            </div>
            <div>
              <label for="birthdate">Nascimento *</label>
              <input class="birthdate" id="birthdate" type="text" name="" />
            </div>
            <div>
              <label for="phone">Tel. Residencial</label>
              <input class="phone" id="phone" type="text" name="" />
            </div>
            <div>
              <label for="cellphone">Tel. Celular *</label>
              <input class="cellphone" id="cellphone" type="text" name="" />
            </div>
            <div>
              <label for="operator">Operadora *</label>
              <select name="operator">
                <option value="" selected="">-- Selecione ---</option>
                <option value="Tim">Tim</option>
                <option value="OI">OI</option>
                <option value="Claro">Claro</option>
              </select>
            </div>
            <div>
              <label for="pswd">Senha *</label>
              <input id="pswd" type="password" name="" />
            </div>
            <div>
              <label for="confirm_pswd">Confirma Senha *</label>
              <input id="confirm_pswd" type="password" name="" />
            </div>

            <!-- Dados Residenciais -->
            <h3>Dados Residenciais</h3>
            <div class="break">
              <label for="cep">CEP *</label>
              <input class="cep" id="cep" type="text" name="" />
            </div>
            <div>
              <label for="addrress">Endereço *</label>
              <input class="addrress" id="addrress" type="text" name="" />
            </div>
            <div>
              <label for="a_type">Tipo *</label>
              <input class="a_type" id="a_type" type="text" name="" />
            </div>
            <div>
              <label for="a_number">Número *</label>
              <input class="a_number" id="a_number" type="text" name="" />
            </div>
            <div>
              <label for="complement">Complemento</label>
              <input class="complement" id="complement" type="text" name="" />
            </div>
            <div>
              <label for="suburd">Bairro *</label>
              <input class="suburd" id="suburd" type="text" name="" />
            </div>
            <div>
              <label for="city">Cidade *</label>
              <input class="city" id="city" type="text" name="" />
            </div>
            <div class="break">
              <label for="state">Estado *</label>
              <input class="state" id="state" type="text" name="" />
            </div>

            <!-- Dados Comerciais -->
            <h3>Dados Residenciais</h3>
            <div>
              <label for="comercial_phone">Tel. Comercial *</label>
              <input class="comercial_phone" id="comercial_phone" type="text" name="" />
            </div>
            <div>
              <label for="phone_code">Ramal </label>
              <input class="phone_code" id="phone_code" type="text" name="" />
            </div>
            <div>
              <label for="company_name">Company *</label>
              <select name="company_name">
                <option value="" selected="">-- Selecione ---</option>
                <option value="Tim">Tim</option>
                <option value="OI">OI</option>
                <option value="Claro">Claro</option>
              </select>
            </div>
            <div class="break btns">
              <input class="btn-clear" type="reset" value="Limpar" />
              <input class="btn-send" type="submit" value="Enviar" />
            </div>
          </fieldset>
        </form>
      </section>
      <?php
        include 'inc/footer.php';
      ?>        
    </main>
  </body>
</html>