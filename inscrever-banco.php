
<?php
//$conexao = mysqli_connect("localhost","root", "root", "inscricao");
$categoria_id = strtolower($_POST['categoria_id']);
$nome = strtolower($_POST['nome']);
$email = strtolower($_POST['email']);
$endereco = strtolower($_POST['endereco']);
$telefone = strtolower($_POST['telefone']);
$cidade = strtolower($_POST['cidade']);


$username = "root";
$password = "root";
$params = array(
                ':categoria_id' => $categoria_id,
                ':nome' => $nome,
                ':email' => $email,
                ':endereco' => $endereco,
                ':telefone'=> $telefone,
                ':cidade' => $cidade
            );
try {
    $pdo = new PDO('mysql:host=localhost;dbname=inscricao', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('INSERT INTO inscritos (categoria_id, nome, email, endereco, telefone, cidade) VALUES(:categoria_id, :nome, :email, :endereco, :telefone, :cidade)');
    $stmt->execute($params);
    print "Cadastro realizado com sucesso!";
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

//header("Location: index.php?inscrito=true");
//die();





