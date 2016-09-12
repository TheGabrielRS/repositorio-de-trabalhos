<?php include('header.php'); ?>
<div class="col-md-2" id="menuLateral" style="height: 88vh">
    <?php include ('menulateral.php'); ?>
</div>
<div class="col-md-10">
    <h1>Envio de Trabalho</h1>
    <div class="col-md-10">
        <form enctype="multipart/form-data" action="recebetrabalho.php" method="post">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="titulo">Título:</label>
                    <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Título do Trabalho">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="arquivo">Arquivo:</label>
                    <input id="arquivo" name="trabalho" type="file">
                    <p class="help-block">Pense bem no formato do arquivo!<br> Para arquivos de texto recomenda-se a extensão .odt</p>
                </div>
                <div class="form-group col-md-5">
                    <label for="materia">Matéria:</label>
                    <select id="materia" name="materia" type="select">
                        <?php foreach($materias as $materia) { ?>
                        <option value="<?= $materia['idmateria'];?>"><?= $materia['nome']; }?></option>
                    </select>
                </div>
            </div>
            <div class="form-group row col-md-10">
                <input class="btn btn-default row" type="submit" value="Enviar">
            </div>
        </form>
    </div>
        
    
</div>