<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        #popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 9999;
        }
    </style>
</head>
<body>

<h2>Cadastro de Usuário</h2>
<form id="cadastroForm" action="cadastro.php" method="post">
    <span>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
    </span>
    <span>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </span>
    <span>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
    </span>
    <input type="submit" value="Cadastrar">
</form>

<div id="popup">Cadastro realizado com sucesso!</div>

<h2>Usuários Cadastrados</h2>
<ul id="listaUsuarios">
    <!-- Os usuários cadastrados serão exibidos aqui -->
</ul>

<script>
    // Função para exibir o pop-up
    function showPopup() {
        var popup = document.getElementById('popup');
        popup.style.display = 'block';
        setTimeout(function() {
            popup.style.display = 'none';
        }, 5000); // Oculta o pop-up após 5 segundos
    }

    // Função para carregar os usuários cadastrados
    function carregarUsuarios() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var usuarios = JSON.parse(xhr.responseText);
                    var listaUsuarios = document.getElementById('listaUsuarios');
                    listaUsuarios.innerHTML = '';
                    usuarios.forEach(function(usuario) {
                        var li = document.createElement('li');
                        li.textContent = usuario.nome + ' - ' + usuario.email;
                        listaUsuarios.appendChild(li);
                    });
                } else {
                    console.error('Erro ao carregar os usuários:', xhr.status);
                }
            }
        };
        xhr.open('GET', 'usuarios.php', true);
        xhr.send();
    }

    // Adiciona um ouvinte de evento para o envio do formulário
    document.getElementById('cadastroForm').addEventListener('submit', function(event) {
        // Previne o envio padrão do formulário
        event.preventDefault();
        
        // Envia o formulário usando AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Se o cadastro for bem-sucedido, exibe o pop-up e recarrega os usuários
                    showPopup();
                    carregarUsuarios();
                } else {
                    // Se houver um erro, você pode lidar com isso aqui
                    console.error('Erro durante o cadastro:', xhr.status);
                }
            }
        };
        xhr.open('POST', this.action, true);
        xhr.send(formData);
    });

    // Carrega os usuários ao carregar a página
    carregarUsuarios();
</script>

</body>
</html>
