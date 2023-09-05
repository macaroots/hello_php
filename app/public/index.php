<?php
if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
}
else {
    $nome = 'PHP';
}
?>
<h1>Hello, <?php echo $nome; ?>!</h1>