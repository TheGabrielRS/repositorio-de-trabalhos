<?php
include('header.php');

?>
<div class="col-md-2">
    <?php include('menulateral.php'); ?>
</div>
<div class="col-md-10">
    <h2>Nos envie uma mensagem</h2>
    <?php
    if(isset($_SESSION['contato']))
    {
        if($_SESSION['contato'])
            echo '<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Mensagem enviada com sucesso! Agradecemos o contato. (If form ok!)</strong></div>';
        else
            echo '<div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Ops, houve um erro e a mensagem não pôde ser enviada. Tente novamente!</strong></div>';
        unset($_SESSION['contato']);
    }
    ?>
    
    <form id="contato" action="enviar.php" method="post">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="titulo">Título:</label>
                <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Título do email" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="suporte">Dúvida</option>
                    <option value="agradecimento">Agradecimento</option>
                    <option value="sugestao">Sugestão</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10">
                <label for="mensagem">Mensagem:</label>
                <div class="input-group">
                    <textarea name="mensagem" id="mensagem" class="form-control" cols="100" rows="5" placeholder="Insira sua mensagem" required></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </div>
    </form>
    
</div>