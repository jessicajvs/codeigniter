
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?= ucfirst($title) ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pessoas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php if($pessoas): ?>
                    <?php foreach($pessoas as $p): ?>
                    <tr>
                       <td><?php echo $p['id']; ?></td>
                       <td><?php echo $p['nome']; ?></td>
                       <td><?php echo $p['telefone']; ?></td>
                       <td><?php echo $p['endereco']; ?></td>
                    </tr>
                   <?php endforeach; ?>
                   <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

