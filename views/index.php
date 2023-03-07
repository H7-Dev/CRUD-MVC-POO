<!DOCTYPE html>
<html lang="pt-Br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <!-- <meta http-equiv="Content-Security-Policy" content="img-src 'self' data:; default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'" /> -->
    <meta http-equiv="Content-Security-Policy" content="img-src 'self' data:; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'" />
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="views/css/index.css">
    <title>Clients</title>
</head>
<body>
    <?php if(!empty($returnMessage)): ?>
        <div class="box-message">
            <p><?= $returnMessage ?></p>
            <button class="btn-close-message" onclick="reload()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </button>
        </div>
    <?php endif; ?>
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