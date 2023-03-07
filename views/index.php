<?php include 'INCLUDES/header.php'; ?>
<?php include 'INCLUDES/FORMS/fr.a.search.cliente.php'; ?>


<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($resultData as $data): ?>
                <tr>
                    <td> <?= $data["id"]; ?> </td>
                    <td> <?= $data["name"]; ?> </td>
                    <td> <?= $data["email"]; ?> </td>
                    <td> <?= $data["phone"]; ?> </td>
                    <td>
                        <a class="button btn-edit" href="./index.php?a=search&v=editCreate&search=<?= $data['id'] ?>">Editar</a>
                        <button class="button btn-delete" onclick="verifyDelete(<?= $data['id'] ?>)">Excluir</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include 'INCLUDES/footer.php'; ?>
