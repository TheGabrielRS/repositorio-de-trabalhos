<?php
include('header.php');
$trabalhos = $DB->fetchAll("SELECT trabalho.titulo, trabalho.usuario, trabalho.dataUpload, trabalho.caminho, trabalho.caminho, materia.nome, alm_users.username FROM trabalho, materia, alm_users where trabalho.materia = materia.idmateria and (alm_users.username = ? and trabalho.usuario = alm_users.id)", $_SESSION['username']);

?>
<div class="col-md-2" id="menuLateral" style="height: 88vh">
    <?php include('menulateral.php'); ?>
</div>
<div class="col-md-10">
    <h1>Meus Trabalhos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Matéria</th>
                <th>Data de Upload</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trabalhos as $trabalho) { ?>
            <tr>
                <td><?= $trabalho['titulo'];?></td>
                <td><?= $trabalho['nome']; ?></td>
                <td><?= date("d/m/Y", strtotime($trabalho['dataUpload']));?></td>
                <td><a href="<?= $trabalho['caminho']; ?>"><?= 'Download'; ?></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>