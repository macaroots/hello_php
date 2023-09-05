<?php
$formacoes = json_decode('[
    {
        "ano": 2007,
        "curso": "Tecnologia em Telemática",
        "instituicao": "IFCE"
    },
    {
        "ano": 2009,
        "curso": "Mestrado em Ciência da Computação",
        "instituicao": "UECE"
    }
]');
?>
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
        <h1>Renato</h1>
        <section>
            <h1>Formação acadêmica</h1>
<?php
foreach ($formacoes as $formacao) {
?>
            <article>
                <h1><?php echo $formacao->curso; ?></h1>
                <span><?php echo $formacao->instituicao; ?></span> - <span><?php echo $formacao->ano; ?></span>
            </article>
<?php
}
?>
        </section>
    </main>
    <footer>
        <p>Desenvolvido por Renato</p>
    </footer>
</body>
</html>
