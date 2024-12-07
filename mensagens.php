<?php
include 'config.php';
//PAINEL DO ADMINISTRADOR

//SENHA PARA O ACESSO
$senhaSecreta = "123";

// Se a requisição for do tipo POST, a próxima linha pega o valor enviado pelo formulário que tem o campo com o nome senha e armazena esse valor na variável $senhaDigitada.
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $senhaDigitada = $_POST['senha'];

    // DIGITOU A SENHA CERTA
    if($senhaDigitada === $senhaSecreta) {
        $sql = "SELECT * FROM formulario";
        $result = $conn->query($sql);
    } else {
        echo "Senha Incorreta!";
    }
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escolinha Chute Inicial - Contato</title>
    <!-- Fontes -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Inter:wght@100..900&family=Montserrat:wght@100..900&family=Nunito:wght@200..1000&family=Poppins:wght@100..900&display=swap');
    </style>
    <!-- Fim das fontes -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm  fixed-top navbar-custom">
        <!-- Logo -->
        <a href="index.html" class="navbar-brand ms-3">
            <img src="fotor-20241024174712.png" alt="Logo Escolinha Chute Inicial">
        </a>
        
        <!-- Hamburguer -->
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="images/menu-hamburguer.svg" alt="menu Hambúrguer" style="height: 40px; width: 40px;">
        </button>
    
        <!-- Navegação - Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item lista-aberta">
                    <a href="index.html" class="nav-link lista-aberta">Home</a>
                </li>
                <li class="nav-item">
                    <a href="contato.html" class="nav-link lista-aberta">Contato</a>
                </li>
                <li class="nav-item">
                    <a href="galeria.html" class="nav-link lista-aberta">Galeria</a>
                </li>
                <li class="nav-item">
                    <a href="sobre-nos.html" class="nav-link lista-aberta">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a href="sobre-nos.html" class="nav-link lista-aberta">Nossos jogos</a>
                </li>
            </ul>
        </div>
    </nav>
     <!-- Fim Navegação - Menu -->
     <div class="container text-center pt-5">
        <div class="card mt-5">
            <div class="card-body">
                <!-- Adicionamos o atributo method="POST" para garantir que o valor da senha seja enviado ao servidor -->
                <form class="footer-form form-contato" method="POST">
                    <h4 class="card-title subtitulo2 mb-3">Painel de controle</h4>
                    <label for="senha">Senha:</label><br>
                    <input type="password" id="senha" name="senha" required class="form-control" placeholder="Digite sua senha"><br>
                    <button class="mt-2 btn-enviar btn" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container text-center pt-1">
        <div class="card mt-3">
            <div class="card-body">
                <form class="footer-form form-contato">
                    <h4 class="card-title subtitulo2 mb-3">Banco de dados</h4>
                </form>
                <ul class="text-start">
                    <?php
                    // Verifica se o resultado contém dados antes de tentar acessá-los, evitando erros de índice nulo.
                    if (isset($result) && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<li><strong>Nome:</strong> " . $row["nome"] . "<br>";
                            echo "<strong>Telefone:</strong> " . $row["telefone"] . "<br>";
                            echo "<strong>Email:</strong> " . $row["email"] . "<br>";
                            echo "<strong>Data e hora:</strong> " . $row["data"] . " às " . $row["hora"] . "<br></li>";
                        }
                    } else {
                        echo "Nenhum dado encontrado.";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

<footer class="bg-dark text-white text-center p-4 mt-5">
    <div class="container">
        <div class="row text-start">
            <!-- Caixa 1 -->
            <div class="col-md-6 mb-3">
                <h5>Redes Sociais & Contato</h5>
                <hr>
                <div class="d-flex align-items-center mb-2"> 
                    <img src="images/instagram.svg" alt="ícone localização" style="width: 24px; height: 24px;" class="me-2">
                    <a href="https://www.instagram.com/escolinhachuteinicial2022/" class="text-white text-decoration-none" target="_blank" rel="noopener noreferrer">@escolinhachuteinicial2022</a>
                </div>
                <div class="d-flex align-items-center mb-2"> 
                    <img src="images/facebook.svg" alt="ícone localização" style="width: 24px; height: 24px;" class="me-2">
                    <a href="#" class="text-white text-decoration-none" target="_blank" rel="noopener noreferrer">Escolinha Chute Inicial 2022</a>
                </div>
                <div class="d-flex align-items-center mb-2"> 
                    <img src="images/email-svgrepo-com (1).svg" alt="ícone localização" style="width: 24px; height: 24px;" class="me-2">
                    <a href="contato.html" class="text-white text-decoration-none" target="_blank" rel="noopener noreferrer">Fale conosco</a>
                </div>
            </div>

            <!-- Caixa 2 -->
            <div class="col-md-6 mb-3">
                <h5>Onde nos encontrar</h5>
                <hr>
                <div class="d-flex align-items-center mb-2"> 
                    <img src="images/localização.svg" alt="ícone localização" style="width: 24px; height: 24px;" class="me-2">
                    <a href="https://maps.app.goo.gl/bvQ2TS1jobMnDAVHA" class="text-white" target="_blank" rel="noopener noreferrer">RS-118, 3040 - Tarumã, Viamão - RS</a>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.0455815084765!2d-51.016607500000006!3d-30.064227899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95199f4a583fed33%3A0xdb381359f4b277b!2sArena%20Bigua!5e0!3m2!1spt-BR!2sbr!4v1728848728319!5m2!1spt-BR!2sbr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-3"></iframe>
            </div>
        </div>
    </div>

    <div class="footer-text small">
        <p class="mb-1">&copy; 2024 Escolinha Chute Inicial.</p>
        <p class="mb-1">Todos os direitos reservados.</p>
        <p class="mb-1">Des
