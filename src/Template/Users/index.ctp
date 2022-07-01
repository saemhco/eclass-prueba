<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Usuarios</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th title="clic para ordenar"><?= $this->Paginator->sort('id') ?></th>
                        <th title="clic para ordenar"><?= $this->Paginator->sort('first_name', ['Nombre']) ?></th>
                        <th title="clic para ordenar"><?= $this->Paginator->sort('last_name', ['Apellidos']) ?></th>
                        <th title="clic para ordenar"><?= $this->Paginator->sort('email', ['Correo electrónico']) ?></th>
                        <th title="clic para ordenar"><?= $this->Paginator->sort('role', ['Rol']) ?></th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->first_name) ?></td>
                            <td><?= h($user->last_name) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->role) ?></td>
                            <td>
                                <?= $this->Html->link('Ver perfil', ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                                <?= $this->Html->link('Editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary']) ?>
                                <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $user->id], ['confirm' => 'Eliminar usuario ?', 'class' => 'btn btn-sm btn-danger']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>