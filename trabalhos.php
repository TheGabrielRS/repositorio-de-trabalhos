<?php
include('header.php');    
$idmateria = $_GET['id'];
$trabalhos = $DB->fetchAll("SELECT trabalho.titulo, trabalho.usuario, trabalho.dataUpload, trabalho.caminho, materia.nome, alm_users.username FROM trabalho, materia, alm_users where trabalho.materia = ? and materia.idmateria = ? and alm_users.id = trabalho.usuario", array($idmateria, $idmateria));
$usuarios = $DB->fetchAll("SELECT id, username FROM alm_users, trabalho, materia WHERE alm_users.id = trabalho.usuario and trabalho.materia = materia.idmateria and materia.idmateria = ?", $_GET['id']);
?>
<div class="col-md-2">
    <?php include('menulateral.php'); ?>
</div>
<div class="col-md-10">
<?php if(sizeOf($trabalhos) > 0){ ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Título</th>
            <th>Matéria</th>
            <th>Autor</th>
            <th>Data de Upload</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($trabalhos as $trabalho) {    
         ?>
        <tr>
            <td><?= $trabalho['titulo'];?></td>
            <td><?= $trabalho['nome']; ?></td>
            <td><?= $trabalho['username']; ?></td>
            <td><?= date("d/m/Y", strtotime($trabalho['dataUpload']));?></td>
            <td><a href="<?= $trabalho['caminho']; ?>"><?= 'Download'; ?></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php } else echo '<div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Não há trabalhos nessa matéria.</strong></div>'; ?>
</div>