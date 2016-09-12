<?php
include('header.php');
?>
<div class="col-md-2" id="menuLateral" style="height: 88vh">
     <?php include ('menulateral.php'); ?>
</div>
<div class="col-md-10">
    <h1>Meus Dados</h1>
    <?php
    if(isset($_SESSION['senha']))
    {
        if($_SESSION['senha'] === md5(session_id()))
            echo '<h1>Senha alterada com sucesso!</h1>';
        unset($_SESSION['senha']);
    }
    
    ?>
    <form action="senha.php" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="atual">Senha Atual:</label>
                <input id="atual" name="atual" type="password" class="form-control" placeholder="Senha Atual">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nova">Senha Nova:</label>
                <input id="nova" name="nova" type="password" class="form-control" placeholder="Senha Nova">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <input class="btn btn-default" type="submit" value="Trocar Senha">
            </div>
        </div>
    </form>
    
</div>