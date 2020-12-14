<?php $render('header'); ?>


<h2 class="titulo2">Editar Usuário</h2>

<form action="<?=$base ?>/usuario/<?=$usuarios['id'];?>/editar" method="post" class="form">
    <div class="form-group">
        <label>
            Nome:<br>
            <input type="text" name="name" value="<?=$usuarios['nome'];?>" id="name" >
        </label><br><br>
    
    <div class="form-group">
        <label>
            E-mail:<br>
            <input type="email" name="email" id="name" value="<?=$usuarios['email'];?>" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">Por-Favor digite seu email aqui</small>
        </label><br><br>
    </div>
    <input type="submit" value="Salvar" class="btn btn-outline-success btn-sm">
    
</form>


<?php $render('footer'); ?>