<?php
$nome = $_POST['nome'];
$dataNasc = $_POST['dataNasc'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'] ?? '';
$email = $_POST['email'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
$cep = $_POST['cep'] ?? '';
$perfil = $_POST['perfil'] ?? '';
$empresas = $_POST['empresa'] ?? [];
$cargos = $_POST['cargo'] ?? [];
$periodos = $_POST['periodo'] ?? [];
$formacoes = $_POST['formacao'] ?? [];
$habilidades = $_POST['habilidade'] ?? [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Currículo de <?= htmlspecialchars($nome) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

  <style>
    /* Esconde apenas o botão na impressão/PDF */
    @media print {
      button.btn-success {
        display: none !important;
      }
    }
  </style>
</head>
<body class="p-5">
  <div class="container border p-4">
    <h1><?= htmlspecialchars($nome) ?></h1>
    
    <!-- Dados Pessoais -->
    <?php
    // Converte a data para o formato dd/mm/aaaa
    $dataFormatada = date("d/m/Y", strtotime($dataNasc));
    ?>
    <p><strong>Data de nascimento:</strong> <?= htmlspecialchars($dataFormatada) ?></p>

    <p><strong>Idade:</strong> <?= htmlspecialchars($idade) ?> anos</p>
    <?php if($telefone): ?><p><strong>Telefone:</strong> <?= htmlspecialchars($telefone) ?></p><?php endif; ?>
    <?php if($email): ?><p><strong>E-mail:</strong> <?= htmlspecialchars($email) ?></p><?php endif; ?>
    <?php if($cidade || $estado || $cep): ?>
      <p><strong>Endereço:</strong> <?= htmlspecialchars($cidade) ?> - <?= htmlspecialchars($estado) ?> | CEP: <?= htmlspecialchars($cep) ?></p>
    <?php endif; ?>

    <!-- Perfil Profissional -->
    <?php if($perfil): ?>
      <h3>Perfil Profissional</h3>
      <p><?= nl2br(htmlspecialchars($perfil)) ?></p>
    <?php endif; ?>

    <!-- Experiências Profissionais -->
    <?php if($empresas): ?>
      <h3>Experiências Profissionais</h3>
      <ul>
        <?php foreach ($empresas as $i => $empresa): ?>
          <li><strong><?= htmlspecialchars($empresa) ?></strong> – <?= htmlspecialchars($cargos[$i]) ?> (<?= htmlspecialchars($periodos[$i]) ?>)</li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <!-- Formação Acadêmica -->
    <?php if($formacoes): ?>
      <h3>Formação Acadêmica</h3>
      <ul>
        <?php foreach ($formacoes as $formacao): ?>
          <li><?= htmlspecialchars($formacao) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <!-- Habilidades -->
    <?php if($habilidades): ?>
      <h3>Habilidades</h3>
      <ul>
        <?php foreach ($habilidades as $habilidade): ?>
          <li><?= htmlspecialchars($habilidade) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <!-- Botão para baixar/print, escondido no PDF -->
    <button onclick="window.print()" class="btn btn-success mt-3">Baixar Currículo</button>
  </div>
</body>
</html>
