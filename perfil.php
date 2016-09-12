<?php include('header.php');
$materias 
?>
<div class="col-md-2">
    <?= include('menulateral.php');?>
</div>
<div class="col-md-10">
    <h1>Envio de Trabalho</h1>
    <div class="cold-md-8">
        <form>
            <div class="form-group row col-md-10">
                <label for="titulo">Título:</label>
                <input id="titulo" type="text" class="form-control" placeholder="Título do Trabalho">
            </div>
            <div class="form-group row col-md-3">
                <label for="arquivo">Arquivo:</label>
                <input id="arquivo" type="file">
                <p class="help-block">Pense bem no formato do arquivo!<br> Para arquivos de texto recomenda-se a extensão .odt</p>
            </div>
            <div class="form-group row col-md-5">
                <label for="materia">Matéria:</label>
                <select id="materia" type="select">
                    <?php foreach($materias as $materia) { ?>
                    <option><?= converteMateria($materia['idmateria']); }?></option>
                </select>
            </div>
            <input class="btn btn-default" type="submit" value="Enviar">
        </form>
    </div>
        
    
</div>