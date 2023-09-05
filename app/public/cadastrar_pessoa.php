<?php
$nome = $_POST['nome'];
$ano = (int) $_POST['ano'];
$idade = date('Y') - $ano;
$pais_autorizam = (isset($_POST['pais_autorizam']) && $_POST['pais_autorizam'] == 'sim');
$maior_idade = $idade >= 18;
$pode = ($maior_idade || $pais_autorizam);
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
        <h1>Cadastre-se</h1>
        <p>Para se cadastrar, uma pessoa deve ser maior de 18 anos ou ser autorizada pelos pais. Faça o cadastro de pessoas, com o nome e o ano de nascimento. Calcule e mostre o nome, o ano de nascimento, a idade, a autorização dos pais (somente para menores de idade) e se a pessoa pode ou não se cadastrar.</p>
        <div class="<?php echo $pode ? 'pode' : 'nao-pode'; ?>">
            <p>Olá, <?php echo $nome; ?>! Você nasceu no ano <?php echo $ano; ?> e tem <?php echo $idade; ?> anos.</p>
<?php
if (!$maior_idade) {
?>
            <p>Os pais <?php echo $pais_autorizam ? "" : "não "; ?> autorizam.</p>
<?php
}
?>
            <p><?php echo $pode ? 'Pode' : 'Não pode'; ?> se cadastrar.</p>

        </div>
    </main>
    <footer>
        <p>Desenvolvido por Renato</p>
    </footer>
</body>
</html>