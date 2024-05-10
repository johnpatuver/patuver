<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    var popup = document.createElement('div');
                    popup.innerHTML = 'Preencha seu e-mail';
                    popup.style.position = 'fixed';
                    popup.style.top = '50%';
                    popup.style.left = '50%';
                    popup.style.transform = 'translate(-50%, -50%)';
                    popup.style.backgroundColor = 'rgba(255, 0, 0, 0.7)';
                    popup.style.padding = '20px';
                    popup.style.color = 'white';
                    popup.style.borderRadius = '10px';
                    popup.style.zIndex = '9999';
                    document.body.appendChild(popup);
                    setTimeout(function(){
                        popup.remove();
                    }, 5000);
                });
             </script>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    var popup = document.createElement('div');
                    popup.innerHTML = 'Preencha sua senha';
                    popup.style.position = 'fixed';
                    popup.style.top = '50%';
                    popup.style.left = '50%';
                    popup.style.transform = 'translate(-50%, -50%)';
                    popup.style.backgroundColor = 'rgba(255, 0, 0, 0.7)';
                    popup.style.padding = '20px';
                    popup.style.color = 'white';
                    popup.style.borderRadius = '10px';
                    popup.style.zIndex = '9999';
                    document.body.appendChild(popup);
                    setTimeout(function(){
                        popup.remove();
                    }, 5000);
                });
             </script>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var popup = document.createElement('div');
                        popup.innerHTML = 'Falha ao logar! E-mail ou senha incorretos';
                        popup.style.position = 'fixed';
                        popup.style.top = '50%';
                        popup.style.left = '50%';
                        popup.style.transform = 'translate(-50%, -50%)';
                        popup.style.backgroundColor = 'rgba(255, 0, 0, 0.7)';
                        popup.style.padding = '20px';
                        popup.style.color = 'white';
                        popup.style.borderRadius = '10px';
                        popup.style.zIndex = '9999';
                        document.body.appendChild(popup);
                        setTimeout(function(){
                            popup.remove();
                        }, 5000);
                    });
                 </script>";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
        }

        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .login-box {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 15px;
            background-color: #f9f9f9;
            animation: slideUp 0.5s ease;
            position: absolute;
        }

        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(100%);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 60%;
            padding: 7px;
            margin-top: 2px;
            margin-bottom: 3px;
            box-sizing: border-box;
        }
        
        .button-container {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 18px;
            cursor: pointer;
        }

        /* Estilos adicionais para o botão */
        .move-left {
            margin-right: 10px;
        }

        .move-right {
            margin-left: 10px;
        }

        .move-up {
            margin-bottom: 10px;
        }

        .move-down {
            margin-top: 10px;
        }

        img {
            position: absolute;
            top: -22%;
            left: 48%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <img src="Arquivos/Imagens/Favico/Pato andando.gif" alt="Imagem Animada">
            <h1>Acesse sua conta</h1>
            <form action="" method="POST">
                <p>
                    <label>E-mail</label>
                    <input type="text" name="email">
                </p>
                <p>
                    <label>Senha</label>
                    <input type="password" name="senha">
                </p>
                <p>
                    <button type="submit">Entrar</button>
                </p>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var images = [
                'url("Arquivos/Fundo/fundo1.jpg")',
                'url("Arquivos/Fundo/fundo2.jpeg")',
                'url("Arquivos/Fundo/fundo3.jpge")',
                'url("Arquivos/Fundo/fundo4.jpeg")',
                'url("Arquivos/Fundo/fundo5.jpeg")',
                'url("Arquivos/Fundo/fundo6.jpg")',
                'url("Arquivos/Fundo/fundo7.jpg")',
                'url("Arquivos/Fundo/fundo8.jpeg")',
                'url("Arquivos/Fundo/fundo9.jpeg")',
                'url("Arquivos/Fundo/fundo10.jpg")',
                'url("Arquivos/Fundo/fundo11.jpg")',
                // Adicione quantas URLs de imagens você desejar
            ];

            var index = 0;

            function changeBackground() {
                var index = Math.floor(Math.random() * images.length);
                document.body.style.backgroundImage = images[index];
            }

            changeBackground(); // Chamando a função para definir uma imagem aleatória ao carregar a página

            setInterval(changeBackground, 60000); // Troca a cada 1 minuto (60000 milissegundos)

            document.body.addEventListener('click', changeBackground); // Troca de imagem ao clicar em qualquer lugar da página
        });
    </script>
</body>
</html>
