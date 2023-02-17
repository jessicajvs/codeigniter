<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= ucfirst($title) ?></h1>
</div>
<div class="container mt-5">
  <form method="post" id="add_create" name="add_create" 
  action="<?= site_url('pessoa/save') ?>">
    <div class="form-group">
      <label>Nome *</label>
      <input type="text" name="nome" class="form-control">
    </div>
    <div class="form-group">
      <label>Telefone *</label>
      <input type="tel" name="telefone" class="form-control">
    </div>
    <div class="form-group">
      <label>Endereço *</label>
      <input type="text" name="endereco" class="form-control">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">Salvar</button>
    </div>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
  if ($("#add_create").length > 0) {
    $("#add_create").validate({
      rules: {
        nome: {
          required: true,
          minlength: 2,
        },
        telefone: {
          required: true,
          maxlength: 15,
          minlength: 8,
        },
        endereco: {
          required: true,
          maxlength: 250,
          minlength: 4,
        },
      },
      messages: {
        nome: {
          required: "É obrigatório preencher o Nome da Pessoa",
          minlength: "Prencha o nome corretamente",
        },
        telefone: {
          required: "É obrigatório preencher o Telefone da Pessoa",
          maxlength: "Prencha o telefone corretamente",
          minlength: "Prencha o telefone corretamente",
        },
        endereco: {
          required: "É obrigatório preencher o Endereço da Pessoa",
          maxlength: "Prencha o endereço corretamente",
          minlength: "Prencha o endereço corretamente",
        },
      },
    })
  }
</script>
