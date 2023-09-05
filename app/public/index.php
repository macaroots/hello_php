<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Hello, PHP!</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include 'cabecalho.php'; ?>
    <main>
        <h1>Cadastre-se</h1>
        <p>Para se cadastrar, uma pessoa deve ser maior de 18 anos ou ser autorizada pelos pais. Faça o cadastro de pessoas, com o nome e o ano de nascimento. Calcule e mostre o nome, o ano de nascimento, a idade, a autorização dos pais (somente para menores de idade) e se a pessoa pode ou não se cadastrar.</p>
        <form action="/cadastrar_pessoa.php" method="post">
            <label>
                <span>Nome</span>
                <input name="nome" />
            </label>
            <label>
                <span>Ano</span>
                <input name="ano" type="number" />
            </label>
            <label>
                <span>Pais autorizam</span>
                <input name="pais_autorizam" type="checkbox" value="sim" />
            </label>
            <button>Enviar</button>
        </form>
    </main>
    <footer>
        <p>Desenvolvido por Renato</p>
    </footer>
</body>
</html>
