<?php include 'INCLUDES/header.php'; ?>
    <h1>Lista de Clientes</h1>
    <form action="index.php">
        <input class="input" type="search" name="search" placeholder="Pesquisar">
        <input type="hidden" name="a" value="search">
        <input class="button" type="submit" name="submit" value="Salvar">
    </form>
    <a class="button" href="./index.php?a=goToNew">Novo Cliente</a>
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
</body>
<script>
    function verifyDelete(id)
    {
        let result = confirm('Você tem certeza que deseja deletar o registro com id: '+id);
        console.log(result);
        if(result)
        {
            window.location.replace('./index.php?a=delete&id='+id);
        }
    }
    function reload()
    {
        window.location.replace('index.php');
    }
</script>
</html>