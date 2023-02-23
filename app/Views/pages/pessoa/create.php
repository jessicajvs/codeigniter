<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= ucfirst($title) ?></h1>
</div>

<?php if(isset($msgErro) && $msgErro != ""): ?>
  <h2 class="h3 mb-0 text-gray-800"><?= ucfirst($msgErro) ?></h2>
<?php endif; ?>

<div class="container mt-5">
  <!--<form method="post" id="add_create" name="add_create" 
  action="">-->
    <div class="form-group">
      <label>Nome *</label>
      <input type="text" id="nome" name="nome" class="form-control">
    </div>
    <div class="form-group">
      <label>Telefone *</label>
      <input type="tel" id="telefone" name="telefone" class="form-control">
    </div>
    <div class="form-group">
      <label>CPF *</label>
      <input type="text" id="endereco" name="endereco" class="form-control">
    </div>
    <div class="form-group">
      <button type="button" onclick="submit()" class="btn btn-primary btn-block">Salvar</button>
      <div id="mensagem"></div>
    </div>
  </form>
</div>

<script>
  //validações sem o uso da biblioteca validate
  //funciona chrome
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
  //if ($("#add_create").length > 0) {
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
        cpf: {
          required: true,
          maxlength: 11,
          minlength: 11,
          digits: true,
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
  //}

    function submit(){
      nome = $("#nome").val();
      telefone = $("#telefone").val();
      endereco = $("#endereco").val();

      $.ajax({
            url: '/pessoa/save',
            data: {
              nome,
              telefone,
              endereco
            },
            beforeSend: function (f) {
              $('#mensagem').html('Salvando...');
            },
            success: function(r) {
                $('#mensagem').html('Salvo com sucesso!');
                //..
            }
        });
    }
</script>
