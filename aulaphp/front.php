<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <main>
        <h1>Cadastro Unicar</h1>
        <form action="#" method="post">
            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div>
                <label for="telefone">Número de telefone</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div>
                <label for="modelo">Modelo do carro</label>
                <input type="text" id="modelo" name="modelo" required>
            </div>
            <div>
                <label for="renavam">Renavam</label>
                <input type="text" id="renavam" name="renavam" required>
            </div>
            <div>
                <label for="nascimento">Data de nascimento</label>
                <input type="date" id="nascimento" name="nascimento" required>
            </div>
            <div>
                <button type="submit" name="acao" value="incluir">Incluir</button>
                <button type="submit" name="acao" value="alterar">Alterar</button>
                <button type="submit" name="acao" value="excluir">Excluir</button>
            </div>
        </form>
        <p>Já tem conta? <a href="index.html">Faça login</a></p>
    </main>
</body>
</html>