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
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" class="btn btn-warning btn-sm">
          <img src="<?=$base;?>/assets/images/document.png" alt="" class="documents">
        </a>
        <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn btn-danger btn-sm">
          <img src="<?=$base;?>/assets/images/trash.png" alt="" class="trashs">
        </a>
      </td>
    </tr>
      <?php endforeach; ?>
  </tbody>
</table>

<?php $render('footer'); ?>