<?php
include('header.php');
$trabalhos = $DB->fetchAll("SELECT trabalho.titulo, trabalho.usuario, trabalho.dataUpload, trabalho.caminho, trabalho.caminho, materia.nome, alm_users.username FROM trabalho, materia, alm_users where trabalho.materia = materia.idmateria and alm_users.id = trabalho.usuario and (trabalho.titulo LIKE ? or alm_users.username LIKE ?)", array('%'.$_GET['pesquisa'].'%', '%'.$_GET['pesquisa'].'%'));
$usuarios = $DB->fetchAll("SELECT id, username FROM alm_users, trabalho, materia WHERE alm_users.id = trabalho.usuario and trabalho.materia = materia.idmateria");
?>
<div class="col-md-2" id="menuLateral">
    <?php include ('menulateral.php'); ?>
</div>
<div class="col-md-10">
    <h1>Trabalhos Localizados</h1>
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
            <?php foreach ($trabalhos as $trabalho) { ?>
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
</div>
</body>
</html>