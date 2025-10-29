<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Gerador de Currículo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/script.js"></script>
</head>
<body class="p-4">
  <div class="container">
    <h1 class="text-center mb-4">Gerador de Currículo</h1>
    <form action="gerar_curriculo.php" method="POST">
      
      <!-- Dados Pessoais -->
      <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Data de nascimento:</label>
        <input type="date" id="dataNasc" name="dataNasc" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Idade:</label>
        <input type="text" id="idade" name="idade" class="form-control" readonly>
      </div>

      <div class="mb-3">
        <label>Telefone:</label>
        <input type="text" name="telefone" class="form-control" placeholder="(XX) XXXXX-XXXX">
      </div>

      <div class="mb-3">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control" placeholder="seuemail@exemplo.com">
      </div>

      <div class="mb-3">
        <label>Cidade:</label>
        <input type="text" name="cidade" class="form-control">
      </div>

      <div class="mb-3">
        <label>Estado:</label>
        <input type="text" name="estado" class="form-control">
      </div>

      <div class="mb-3">
        <label>CEP:</label>
        <input type="text" name="cep" class="form-control" placeholder="XXXXX-XXX">
      </div>

      <!-- Perfil Profissional -->
      <div class="mb-3">
        <label>Perfil Profissional:</label>
        <textarea name="perfil" class="form-control" rows="3" placeholder="Escreva um breve perfil profissional"></textarea>
      </div>

      <!-- Experiências Profissionais -->
      <h4>Experiências Profissionais</h4>
      <div id="experiencias"></div>
      <button type="button" id="addExperiencia" class="btn btn-secondary mb-3">+ Adicionar experiência</button>

      <!-- Formação Acadêmica -->
      <h4>Formação Acadêmica</h4>
      <div id="formacoes"></div>
      <button type="button" id="addFormacao" class="btn btn-secondary mb-3">+ Adicionar formação</button>

      <!-- Habilidades -->
      <h4>Habilidades</h4>
      <div id="habilidades"></div>
      <button type="button" id="addHabilidade" class="btn btn-secondary mb-3">+ Adicionar habilidade</button>

      <!-- Botão de enviar -->
      <button type="submit" class="btn btn-primary w-100">Gerar Currículo</button>
    </form>
  </div>
</body>
</html>
