<?php $render('header'); ?>


<h2 class="titulo2">Adicionar Novo Usuário</h2>

<form action="<?=$base ?>/novo" method="post" class="form">
    <div class="form-group">
        <label>
            Nome:<br>
            <input type="text" name="name" id="name" placeholder="Nome">
        </label><br><br>
    
    <div class="form-group">
        <label>
            E-mail:<br>
            <input type="email" name="email" id="name" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">Por-Favor digite seu email aqui</small>
        </label><br><br>
    </div>
    <input type="submit" value="Adicionar" class="btn btn-outline-success btn-sm">
    
</form>


<?php $render('footer'); ?>