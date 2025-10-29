$(document).ready(function() {
  // Cálculo automático da idade
  $('#dataNasc').on('change', function() {
    const data = new Date($(this).val());
    const hoje = new Date();
    let idade = hoje.getFullYear() - data.getFullYear();
    const m = hoje.getMonth() - data.getMonth();
    if (m < 0 || (m === 0 && hoje.getDate() < data.getDate())) {
      idade--;
    }
    $('#idade').val(idade);
  });

  // Adicionar campos de experiência dinamicamente
  $('#addExperiencia').on('click', function() {
    $('#experiencias').append(`
      <div class="mb-3">
        <label>Empresa:</label>
        <input type="text" name="empresa[]" class="form-control">
        <label>Cargo:</label>
        <input type="text" name="cargo[]" class="form-control">
        <label>Período:</label>
        <input type="text" name="periodo[]" class="form-control mb-2">
      </div>
    `);
  });

  // Adicionar campos de formação acadêmica dinamicamente
  $('#addFormacao').on('click', function() {
    $('#formacoes').append(`
      <div class="mb-3">
        <label>Curso/Instituição:</label>
        <input type="text" name="formacao[]" class="form-control mb-2">
      </div>
    `);
  });

  // Adicionar campos de habilidades dinamicamente
  $('#addHabilidade').on('click', function() {
    $('#habilidades').append(`
      <div class="mb-3">
        <input type="text" name="habilidade[]" class="form-control mb-2" placeholder="Digite uma habilidade">
      </div>
    `);
  });
});
