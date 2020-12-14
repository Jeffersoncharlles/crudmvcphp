<?php $render('header'); ?>

<a href="<?=$base?>/novo" class="btn btn-success btn-sm">Novo Usuario</a><br><br>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">NOME</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($usuarios as $usuario): ?>
    <tr>
      <th scope="row"><?=$usuario['id'];?></th>
      <td><?=$usuario['nome'];?></td>
      <td><?=$usuario['email'];?></td>
      <td>
          <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" class="btn btn-warning btn-sm">Editar</a>
          <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" class="btn btn-danger btn-sm">Excluir</a>
      </td>
    </tr>
      <?php endforeach; ?>
  </tbody>
</table>

<?php $render('footer'); ?>