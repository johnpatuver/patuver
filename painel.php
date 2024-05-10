<?php

include('protect.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <script src="search.js" defer></script>
<link rel="shortcut icon" href="Arquivos/Imagens/Favico/Pato andando.gif" type="image/x-icon">
</head>

<body>

    <div id="dialog-overlay" style="display: none;">
        <div id="dialog-box">
            <h1>Insira a Senha <img src="Arquivos/Imagens/Favico/Pato andando.gif" alt="GIF" width="50" height="50">
            </h1>
            <input type="password" id="password">
            <button onclick="checkPassword()">Acessar</button>

        </div>
    </div>

    <header>
        <div class="logo-wrapper">
            <h1 class="logo">Patuvêr Downloads</h1>
            <img src="Arquivos/Imagens/Favico/Pato andando.gif" alt="GIF" width="50" height="50">
        </div>

        <nav>
            <a href="#" onclick="showPage('painel')">Painel</a> <!-- Nova guia -->
            <a href="#" onclick="showPage('contact')">Unicheff</a>
            <a href="#" onclick="showPage('programs')">Programas</a>
            <a href="#" onclick="showPage('services')">Serviços</a>
            <a href="#" onclick="showPage('Ativadores')">Ativadores</a>
            <a href="#" onclick="showPage('links')">Links</a>
            <input type="text" id="searchInput" placeholder="Pesquisar...">
           
            <a href="logout.php" class="botao">Sair</a>
    

        </nav>


    </header>

    <!-- Painel -->

    <section id="painel" class="content-section" style="display: none;">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'usuario')">Usuário</button>
            <button class="tablinks" onclick="openTab(event, 'upload')">Upload</button>
        </div>
    
        <div id="usuario" class="tabcontent" style="display: block;">
            <!-- Conteúdo da aba Usuário -->
            <div class="box">
                <h2>Usuários Cadastrados</h2>
                <p>teste de User HEHE 🥸👌.</p>

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
            padding: 28px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 9999;
        }

        .box {
        border-top: 1px solid black; /* Adiciona uma borda superior à div */
        padding: 20px; /* Apenas para espaçamento visual */
    }

    </style>
</head>
<body>


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



                
            </div>
        </div>
    
        <div id="upload" class="tabcontent">
            <!-- Conteúdo da aba Upload -->
            <div class="box">  
                
                <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        /* Estilos para o pop-up */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            z-index: 9999;
        }

        #fileList li {
    background-color: #cdecefc9;
    padding: 10px;
    margin-bottom: 5px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
}

#fileList li:hover {
    background-color: #e0e0e0;
}

#fileList li a {
    color: #007bff;
    text-decoration: none;
    margin-left: 10px;
}

#fileList li a:hover {
    text-decoration: underline;
}

#fileList li strong {
    font-weight: bold;
}


        
        
        /* Estilos para a barra de progresso */
        #progressBar {
            margin-top: 20px;
            width: 100%;
            background-color: #ddd;
            border-radius: 5px;
        }
        
        #progressBarFill {
            height: 20px;
            background-color: #007bff;
            border-radius: 5px;
            text-align: center;
            line-height: 20px;
            color: #fff;
        }
    </style>
</head>
<body>

<div id="fileUploadContainer">
    <h2>Upload de Arquivos</h2>
    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="text" name="fileDescription" id="fileDescription" placeholder="Descrição">
        <input type="submit" value="Upload Arquivo" name="submit">
    </form>
    <div id="progressBar" style="display: none;">
        <div id="progressBarFill"></div>
    </div>

    <div id="uploadedFiles">
        <h3>Arquivos upados.✌️😎:</h3>
        <ul id="fileList">
            <!-- Aqui será exibida a lista de arquivos -->
        </ul>
    </div>

    <div id="popup" class="popup"></div>
</div>

<script>
    $(document).ready(function(){
        // Função para carregar a lista de arquivos quando a página é carregada
        function carregarListaArquivos() {
            $.ajax({
                url: 'listar_arquivos.php',
                type: 'GET',
                success: function(data){
                    $('#fileList').html(data); // Atualiza a lista de arquivos
                }
            });
        }

        // Chama a função para carregar a lista de arquivos quando a página é carregada
        carregarListaArquivos();

        $('#uploadForm').submit(function(e){
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            $('#progressBar').show();
            $.ajax({
                url: 'upload.php',
                type: 'POST',
                data: formData,
                xhr: function(){
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function(evt){
                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            $('#progressBarFill').css('width', percentComplete * 100 + '%');
                            // Atualiza o texto da barra de progresso com a porcentagem
                            $('#progressBarFill').text((percentComplete * 100).toFixed(2) + '%');
                        }
                    }, false);
                    return xhr;
                },
                success: function(data){
                    $('#progressBar').hide();
                    var description = $('#fileDescription').val();
                    $('#fileList').append('<li data-id="' + data + '">' + data + ' - ' + description + ' <a href="download.php?file=' + data + '">Download</a> | <a href="#" class="deleteFile" data-id="' + data + '" data-file="' + data + '">Excluir</a></li>');
                    $('#popup').text('Arquivo enviado com sucesso: ' + data).fadeIn().delay(5000).fadeOut();
                    carregarListaArquivos(); // Atualiza a lista de arquivos após o envio de um novo arquivo
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

        $(document).on('click', '.deleteFile', function(e){
            e.preventDefault();
            var fileId = $(this).data('id');
            var fileToDelete = $(this).data('file');
            $.ajax({
                url: 'delete.php',
                type: 'POST',
                data: { fileId: fileId, fileToDelete: fileToDelete },
                success: function(data){
                    $('li[data-id="' + fileId + '"]').remove();
                }
            });
        });
    });
</script>

</body>
</html>



            </div>
        </div>
    </section>

    <!-- Versões Unicheff -->
    <section id="contact" class="content-section" style="display: none;">
        <h2> Versões Unicheff Sistemas</h2>

        <div class="download-item">
            <img src="Arquivos/Imagens/Primeira.jpg" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Primeira Instalação</h3>
                <p>Instalador Unicheff. <br> <span style="color: red; font-weight: bold;">Instalador</span></p>
                <a class="download-button"
                    href="Arquivos/Downloads/Instalação UniChef (Para primeira instalacao) 2016.71.exe"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Atualizador 6.0.2024.40</h3>
                <p>Instalador do Unicheff 6.0.2024.40 <br> <span
                        style="color: red; font-weight: bold;">Instalador</span></p>
                <a class="download-button" href="Arquivos/Downloads/Atualização - Unitech - v.6.0.2024.40.rar"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.49 - Todas Versões</h3>
                <p>Unicheff 6.0.2024.49 Todas Versões<br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.49 - Todas Versões.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.47 - Todas Versões</h3>
                <p>Unicheff 6.0.2024.47 Todas Versões<br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.47 - Todas Versões.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.46 - Todas Versões</h3>
                <p>Unicheff 6.0.2024.46 Todas Versões<br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.46 - Todas Versões.zip"
                    download>Baixar</a>
            </div>
        </div>



        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Atualizador 6.0.2024.1</h3>
                <p>Instalador do Unicheff 6.0.2024.1 <br> <span style="color: red; font-weight: bold;">Instalador</span>
                </p>
                <a class="download-button" href="Arquivos/Downloads/Atualizador v.6.0.2024.1.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.30</h3>
                <p>Versão Unicheff 6.0.2024.30 - Win10+<br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.30 - Win10+.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Versão UniCheff 6.0.2024.30 - Win7</h3>
                <p><span style="color: rgb(136, 62, 179); font-weight: bold;">Versão Apenas pra - Win7</span><br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/UniCheff 6.0.2024.30 - Win7.zip" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.24</h3>
                <p>Versão Unicheff 6.0.2024.24 - Win10+ <br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.24 - Win10+.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.23</h3>
                <p>Versão Unicheff 6.0.2024.23 - Win10+ <br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.23 - Win10+.zip"
                    download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.22</h3>
                <p>Versão Unicheff 6.0.2024.22 - Win10+ <br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.22 - Win10+.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.21</h3>
                <p>Versão do Unicheff 6.0.2024.21 - Win10+ <br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.21 - Win10+.rar"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.20</h3>
                <p>Versão do Unicheff 6.0.2024.20 <br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;">Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.20 - Win10+.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.09</h3>
                <p>Versão do Unicheff 6.0.2024.09 <br> <span style="color: rgb(0, 81, 255); font-weight: bold;">
                        Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.09.zip" download>Baixar</a>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Unicheff 6.0.2024.02</h3>
                <p>Versão do Unicheff 6.0.2024.02 - Win10+.zip <br> <span
                        style="color: rgb(0, 81, 255); font-weight: bold;"> Atualização</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2024.02 - Win10+.zip"
                    download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Atualizador 6.0.2023.200</h3>
                <p>Instalador do Unicheff 6.0.2023.200 <br> <span
                        style="color: red; font-weight: bold;">Instalador</span></p>
                <a class="download-button" href="Arquivos/Downloads/Atualizador v.6.0.2023.200.exe" download>Baixar</a>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 2" width="100">
            <div>
                <h3>Unicheff 6.0.2023.346</h3>
                <p>Versão 6.0.2023.346 - Win10+.zip. <br> <span style="color: rgb(0, 81, 255); font-weight: bold;">
                        Atualização</span>.</p>
                </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2023.346 - Win10+.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 2" width="100">
            <div>
                <h3>Unicheff 6.0.2023.345</h3>
                <p>Versão 6.0.2023.345 - Win10+.zip. <br> <span style="color: rgb(0, 81, 255); font-weight: bold;">
                        Atualização</span>.</p>
                </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2023.345 - Win10+.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 2" width="100">
            <div>
                <h3>Unicheff 6.0.2023.344 - Win7+.zip</h3>
                <p><span style="color: rgb(136, 62, 179); font-weight: bold;">Versão apenas para Win7+.zip.</span><br>
                    <br> <span style="color: rgb(0, 81, 255); font-weight: bold;"> Atualização</span>.</p>
                </p>
                <a class="download-button" href="Arquivos/Downloads/Unicheff 6.0.2023.344 - Win7+.zip"
                    download>Baixar</a>
            </div>
        </div>

        <!-- Instaladores de versões anteriores -->


        <h2><span style="color: rgb(6, 8, 138); font-weight: bold;"> Instaladores de versões anteriores </span></h2>
        <!-- Titulo da guia interna HEHEH-->


        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Atualizador v.6.0.2023.200</h3>
                <p>Instalador do 03 - Atualizador 6.0.2023.200 <br> <span
                        style="color: red; font-weight: bold;">Instalador</span></p>
                <a class="download-button" href="Arquivos/Downloads/Atualizador v.6.0.2023.200.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Atualizador v.6.0.2022.20</h3>
                <p>Instalador do Atualização - UniCheff - v.6.0.2022.20 <br> <span
                        style="color: red; font-weight: bold;">Instalador</span></p>
                <a class="download-button" href="Arquivos/Downloads/Atualização - UniCheff - v.6.0.2022.20.exe"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Atualizador v.6.0.2022.01</h3>
                <p>Instalador do Unicheff 6.0.2024.1 <br> <span style="color: red; font-weight: bold;">Instalador</span>
                </p>
                <a class="download-button" href="Arquivos/Downloads/Atualização - UniCheff - v.6.0.2022.01.exe"
                    download>Baixar</a>
            </div>
        </div>

        </form>


    </section>

    <!-- programs  -->
    <section id="programs" class="content-section">
        <h2 class="section-title">Programas</h2>
        

        <div class="download-item">
            <img src="Arquivos/Imagens/Defender Control v1.9.png" alt="Imagem do Download 1" width="100">
            <div>
                <h3>Defender Control v1.9</h3>
                <p>Desativa o Windows Defender gratuitamente.</p>
                <a class="download-button" href="Arquivos/Downloads/dControl.zip" download>Baixar</a>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/Office2013.jpg" alt="Imagem do Download 3" width="100">
            <div>
                <h3> Office 2013 </h3>
                <p>O Microsoft Office 2013 é um pacote suíte de aplicativos para escritório.</p>
                <a class="download-button" href="Arquivos/Downloads/Office 2013.rar" download>Baixar</a>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/Navicat Premium16.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Navicat Premium 16 </h3>
                <p>Navicat Premium é uma ferramenta de desenvolvimento de banco de dados.</p>
                <a class="download-button" href="Arquivos/Downloads/AbbasPC.Net_Navicat Premium 16.1.0 - Copia.rar"
                    download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/Office2019.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Office 2019</h3>
                <p> O Microsoft Office 2019 é um pacote suíte de aplicativos para escritório.</p>
                <a class="download-button" href="Arquivos/Downloads/Professional2019Retail.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/teamViewer.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>TeamViewer 15</h3>
                <p>Instalador do TeamViewer 15 que permite acessar sem conta.</p>
                <a class="download-button" href="Arquivos/Downloads/teamviewer-15-35-7.exe" download>Baixar</a>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/Anydesk.jpg" alt="Imagem do Download 3" width="100">
            <div>
                <h3>AnyDesk 6.0</h3>
                <p>Instalador do AnyDesk que permite acessar sem conta.</p>
                <a class="download-button" href="Arquivos/Downloads/AnyDesk.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/imp.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Erros de impressora</h3>
                <p> Erros de compatilhar impressora W10 </p>
                <a class="download-button" href="Arquivos/Downloads/Erros de impressora.rar"
                    download>Baixar</a>
            </div>
        </div>

        

        <div class="download-item">
            <img src="Arquivos/Imagens/winrar.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>WinRAR 7.0 64 Bits</h3>
                <p>WinRAR é um software compactador e descompactador de dados.</p>
                <a class="download-button" href="Arquivos/Downloads/winrar-x64br.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/winrar.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>WinRAR 7.0 32 Bits</h3>
                <p>WinRAR é um software compactador e descompactador de dados.</p>
                <a class="download-button" href="Arquivos/Downloads/winrar-x32-700br.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/driverbooster.jpg" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Driver Booster Pro 10.3</h3>
                <p> Driver Booster Pro é a ferramenta de atualização de driver.</p>
                <a class="download-button" href="Arquivos/Downloads/AbbasPC.Net_IObit Driver Booster Pro 10.3.0.124.rar"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Daruma.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Daruma Dr 800 Termica</h3>
                <p>A impressora térmica Daruma DR 800 emissão de recibos, cupons e tickets, com precisão de impressão.
                </p>
                <a class="download-button" href="Arquivos/Downloads/Daruman dr800.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/i8.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Elgin i8</h3>
                <p>Elgin i8, a impressora térmica com 3 interfaces de comunicação (USB, Ethernet e Serial).</p>
                <a class="download-button" href="Arquivos/Downloads/driver-elgin-i8-windows.zip" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/i7.i9.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Elgin i7 / i9 </h3>
                <p>Elgin i7 e i9, impressora térmica com 3 interfaces de comunicação (USB, Ethernet e Serial).</p>
                <a class="download-button" href="Arquivos/Downloads/driver-elgin-i7-i8-e-i9-windows-e-linux.zip"
                    download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/MP-4200.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Bematech MP-4200 TH, ADV e HS</h3>
                <p>Driver para os modelos de impressora MP4200 HS - TH e ADV .</p>
                <a class="download-button" href="Arquivos/Downloads/driver-bematech-mp-4200.zip" download>Baixar</a>
            </div>
        </div>
        
        <div class="download-item">
            <img src="Arquivos/Imagens/EpsonTM-T20X.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Epson TM-T20X</h3>
                <p>Driver Epson TM-T20X.</p>
                <br>
                <a class="download-button" href="Arquivos/Downloads/driver-epson-tm-t20x.zip" download>Baixar</a>
            </div>
        </div>
       
        <div class="download-item">
            <img src="Arquivos/Imagens/Print iD Touch.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Print iD Touch</h3>
                <p>Driver impressora Print iD Touch.</p>
                <br>
                <a class="download-button" href="Arquivos/Downloads/DriverPrintiD_Windows.zip" download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/Elginl42.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Driver Elgin L42PRO</h3>
                <p>Elgin L42PRO FULL e uma impressora para a impressão de etiquetas.</p>
                <a class="download-button" href="Arquivos/Downloads/L42PRO Impressora.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/brave.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Brave</h3>
                <p>Brave é um navegador web livre e de código aberto.</p>
                <a class="download-button" href="Arquivos/Downloads/BraveBrowserSetup-BRV011.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/chrome.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Google Chrome</h3>
                <p>O Google Chrome é um navegador de internet desenvolvido pela Google. </p>
                <a class="download-button" href="Arquivos/Downloads/ChromeSetup.exe" download>Baixar</a>
            </div>
        </div>

        
        <div class="download-item">
            <img src="Arquivos/Imagens/Mysql ARM.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Mysql 5.6.10.1</h3>
                <p>Mysql para processadores de arquitetura ARM. <span
                        style="color: rgb(230, 39, 39); font-weight: bold;"> ( Hyorrana )</span></p>
                <a class="download-button" href="Arquivos/Downloads/mysql-installer-community-5.6.10.1.rar"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Marcola.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Software Marcola</h3>
                <p>Remove todos os serviços da unitech instalados. <br> <span
                        style="color: rgb(230, 39, 39); font-weight: bold;"> ( Feito por Marcola )</span></p>
                <a class="download-button" href="Arquivos/Downloads/Software Marcola.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/MiniTool Partition Wizard.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>MiniTool Partition Wizard 12.8</h3>
                <p>Programa de gerenciamento de partição de disco rígido.</p>
                <a class="download-button" href="Arquivos/Downloads/MiniTool Partition Wizard 12.8.rar"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Lazesoft.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Lazesoft Recovery Suite 4.5</h3>
                <p>Remove senha do Windows, clona discos, recupera arquivos do HD/SSD.</p>
                <a class="download-button" href="Arquivos/Downloads/lsrshsetup.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/RevoUninstallerPro.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Revo Uninstaller Pro</h3>
                <p>Revo Uninstaller é um desinstalador ele remove quaisquer arquivos e entradas de registro do Windows.
                </p>
                <a class="download-button" href="Arquivos/Downloads/RevoUninstaller.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Printer.bmp" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Printer Test para Elgin i8</h3>
                <p>Software Printer Test para Elgin i8.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/Elgin i8 Printer Test V3.2.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/imagemresizer.jpg" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Image Resizer </h3>
                <p>Redimensionador de imagem.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/Image Resizer.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/ApowerREC.jpg" alt="Imagem do Download 3" width="100">
            <div>
                <h3>ApowerREC</h3>
                <p>ApowerREC é um programa de grava de tela</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/ApowerREC.1.4.12.6.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/lightshot.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Lightshot </h3>
                <p>A forma mais rápida de fazer uma captura de tela personalizável.</p>
                <a class="download-button" href="Arquivos/Downloads/setup-lightshot.rar" download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/Recoverit.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Wondershare Recoverit 11.0.0.13</h3>
                <p>O Wondershare Recoverit é um software de recuperação de dados.</p>
                <a class="download-button" href="Arquivos/Downloads/Wondershare Recoverit 11.0.0.13 Full Version.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/audacity.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Audacity 3.4.2</h3>
                <p>Audacity é um software livre de edição digital de áudio.</p>
                <a class="download-button" href="Arquivos/Downloads/audacity-win-3.4.2-64bit.exe" download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/AOMEI Partition Assistant 10.0.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>AOMEI Partition Assistant 10.0</h3>
                <p>AOMEI Partition e um Gerenciador de partições.</p>
                <a class="download-button" href="Arquivos/Downloads/AOMEI Partition Assistant 10.0.rar"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/ImageUSB.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>ImageUSB v 1.5.1003</h3>
                <p>Ele foi projetado para fazer cópias de arquivos USB com eficiência no nível de bits exato.</p>
                <a class="download-button" href="Arquivos/Downloads/imageusb-1-5-1006.zip" download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/Macrium.jpg" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Macrium Reflect</h3>
                <p>Macrium Reflect é um utilitário de backup para Microsoft Windows</p>
                <a class="download-button" href="Arquivos/Downloads/v7.2.4228_reflect_setup_free_x64.rar"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/EaseUS backup.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>EASEUS Todo Backup 16.1</h3>
                <p>Software para criar backups individuais de discos rígidos completos e diretórios e arquivos.</p>
                <a class="download-button" href="Arquivos/Downloads/EaseUS Todo Backup 16.1 Multilingual.rar"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/diskgenios.jpg" alt="Imagem do Download 3" width="100">
            <div>
                <h3>DiskGenius V5.5.1.1508</h3>
                <p>DiskGenius é um software para gerenciamento de partições.</p>
                <a class="download-button" href="Arquivos/Downloads/DiskGenius.rar" download>Baixar</a>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/WinSetupFromUSB.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>WinSetupFromUSB 1.10</h3>
                <p>E um software que permite no mesmo pendrive criar um disco MBR ou GPT.</p>
                <a class="download-button" href="Arquivos/Downloads/WinSetupFromUSB-1-10.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/dism.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Dism++10.1.1002</h3>
                <p>Dism ++ é um poderoso utilitário usado para manutenção de sistemas Windows e manipulação de imagem de
                    instalação.</p>
                <a class="download-button" href="Arquivos/Downloads/Dism++10.1.1002.1B.zip" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/PhotoScape.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>PhotoScape 3.7</h3>
                <p>Uma suite completa para edição e gerenciamento de imagens..</p>
                <a class="download-button" href="Arquivos/Downloads/PhotoScapeSetup_V3.7.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/TreeSize.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>TreeSizer Free V4.6.2</h3>
                <p> TreeSize mostra de maneira detalhada o que está ocupando espaço no HD ou SSD.</p>
                <a class="download-button" href="Arquivos/Downloads/TreeSizeFreeSetup.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/IPscanner.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>IP Scanner v2.5.1</h3>
                <p>Mostra todos os dispositivos de rede, lhe dá acesso às pastas compartilhadas, e pode até mesmo
                    desligar computadores remotamente</p>
                <a class="download-button" href="Arquivos/Downloads/Advanced_IP_Scanner_2.5.4594.1.exe"
                    download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/HeiDoc.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>HeiDoc 8.46</h3>
                <p>Esta ferramenta permite uma maneira fácil e confortável de baixar imagens de disco (ISO) windows
                    Office .</p>
                <a class="download-button" href="Arquivos/Downloads/Windows-ISO-Downloader.exe" download>Baixar</a>
            </div>
        </div>



        <div class="download-item">
            <img src="Arquivos/Imagens/driverbooster11.jpg.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Driver Booster Pro v11.2.0.46 PT-BR</h3>
                <p>aplicativo de software abrangente projetado para atualizar drivers antigos ou desatualizados no
                    Windows.</p>
                <a class="download-button" href="Arquivos/Downloads/Driver Booster Pro 11.2.0.46.rar"
                    download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/rufus.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Rufus 4.4</h3>
                <p>Rufus é uma ferramenta que ajuda a formatar e criar drives USB inicializáveis.</p>
                <a class="download-button" href="Arquivos/Downloads/rufus-4.4.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/winreduce.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>WinReducer EX-Series</h3>
                <p>você pode configurar, personalizar, modificar e atualizar todas as edições dos sistemas operacionais
                    Windows a partir de uma ISO.</p>
                <a class="download-button" href="Arquivos/Downloads/WinReducer_EX_Series_x64.zip" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/navicat.png" alt="Imagem do Download 3" width="100">
            <div>
                <h3>Navicat  9.0.12</h3>
                <p>Navicat e uma ferramenta de administração de banco de dados.</p>
                <a class="download-button" href="Arquivos/Downloads/navicat 9.0.12 completo.zip" download>Baixar</a>
            </div>
        </div>

    </section>

    <!-- audios  -->

    <section id="audios" class="content-section" style="display: none;">
        <h2 class="section-title">Áudios</h2>

        <div class="download-item">
            <img src="Arquivos/Imagens/Pix.png" alt="Imagem do Áudio 1" width="100">
            <div>
                <h3>Eu paguei via pix! pelo amor de Deus.</h3>
                <p>Pix.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Eu paguei via pix!  pelo amor de Deus..mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/bucha.png" alt="Imagem do Áudio 1" width="100">
            <div>
                <h3>Ai e bucha</h3>
                <p>Bucha.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Ai e bucha.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/bentivi.jpg" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Bem-te-vi</h3>
                <p>canto Bem-te-vi.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Benti-vi.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/Bug.jpg" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Cheio de bug</h3>
                <p>Bug.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Cheio de bug.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/lixo.jpg" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Não ta prestando nem para jogar no lixo.</h3>
                <p>Lixo .</p>
                <audio controls>
                    <source src="Arquivos/Audios/Não ta prestando nem pra jogar no lixo.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/fatura.png" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Eu paguei a Fatura.</h3>
                <p>Fatura.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Eu paguei a Fatura.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/john.jpg" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Ei John</h3>
                <p>John.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Ei John.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/Pedro não responde.jpg" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Mas o pedro eu falo falo ele não responde.</h3>
                <p>Pedro não responde.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Mas o pedro eu falo falo ele não responde..mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/pix 2.png" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Eu paguei via pix!</h3>
                <p>Pix.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Eu paguei via pix! .mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Buchas.jpg" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Esse marcola e bucha.</h3>
                <p>marcola e bucha.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Esse Marcola ai e bucha.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        

        <div class="download-item">
            <img src="Arquivos/Imagens/sistema.png" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>O programa não esta abrindo.</h3>
                <p>Eu paguei.</p>
                <audio controls>
                    <source src="Arquivos/Audios/O programa não esta abrindo .mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/John me mata.jpg" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Não John me mata.</h3>
                <p>Não John me mata.</p>
                <audio controls>
                    <source src="Arquivos/Audios/não john me mata..mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="download-item">
            <img src="Arquivos/Imagens/Melhorsinho.jpg" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Alex o melhozinho.</h3>
                <p>Esse Alex ainda e o melhozinho.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Esse Alex ainda e o melhosinho.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/pelo amor.png" alt="Imagem do Áudio 2" width="100">
            <div>
                <h3>Pelo amor de Deus.</h3>
                <p>Regulariza o meu programa.</p>
                <audio controls>
                    <source src="Arquivos/Audios/Pelo amor de Deus.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>


    </section>
    <!-- Ativadores  -->
    <section id="Ativadores" class="content-section" style="display: none;">
        <h2 class="section-title">Ativadores</h2>
        <div class="download-item">
            <img src="Arquivos/Imagens/Favico/Ativador office 2013.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>AtivadorOffice 2013</h3>
                <p>Ativador do office 2013.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/Office 2013 Permanent Activator.rar"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Ativador Windows 10.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Ativador Windows 10</h3>
                <p>Ativa o Windows 10 - Todas as Versões.</p>
                <a class="download-button" href="Arquivos/Downloads/Ativador Windows 10.zip" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Windows 7 Loader.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Windows Loader v2.0.1</h3>
                <p>Ativa o Windows 7 - Todas as Versões.</p>
                <a class="download-button" href="Arquivos/Downloads/Windows Loader v2.0.1.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/kmspico.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>KMSpico (Ativador 10/11)</h3>
                <p>Permite ativar múltiplas versões do Microsoft Windows e Office.</p>
                <a class="download-button" href="Arquivos/Downloads/kmspico.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Ativador office2019.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Ativador Office 2019</h3>
                <p>Permite ativar Office 2019.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/Ativador Office 2019.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/ApowerREC-crack.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3> ApowerREC crack</h3>
                <p>crack do programa ApowerREC .</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/Crack ApowerREC.rar" download>Baixar</a>
            </div>
        </div>


    </section>


    <!-- Links  -->

    <section id="links" class="content-section" style="display: none;">
        <h2 class="section-title">Links</h2>
        <ul class="link-list">
            <li><a href="https://app.unichatbot.com.br/" target="_blank">Unichatbot 🤖</a></li>
            <li><a href="https://gestor.unitechsistemas.com/financeiro" target="_blank">Gestor 🧑‍💻</a></li>
            <li><a href="https://appunidesk.unitechsistemas.com.br/dashboard" target="_blank">Gestor Para celular 📲</a>
            </li>
            <li><a href="https://drive.google.com/drive/folders/1ZD4xogO-_DHWIvXlruXXaesXDzqvgyV9"
                    target="_blank">Google Driver📥</a></li>
            <li><a href="https://menucheff.unitechsistemas.com.br/" target="_blank">Menucheff 2 Gestor ⚙️</a></li>
            <li><a href="https://app.menucheff.unitechsistemas.com.br/2673" target="_blank">Menucheff 2 Cliente 🖥️</a>
            </li>
            <li><a href="https://cardapiodigital.menucheff.com/1m2673" target="_blank">Cardapio 📑</a></li>
            <li><a href="https://unidesk.unitechsistemas.com.br/inicio" target="_blank">Unidesk 📊</a></li>
            <li><a href="https://sintegra.sefaz.to.gov.br/sintegra/servlet/wpsico01" target="_blank">Sintegra</a></li>
            <li><a href="https://appdelivery.menucheff.com/gestor" target="_blank">Menucheff 1 Gestor ⚙️</a></li>
            <li><a href="https://appdelivery.menucheff.com/2673" target="_blank">Menucheff 1 Cliente 🖥️</a></li>
            <li><a href="https://testeportas.com.br/" target="_blank">Teste de porta 🌎</a></li>
            <li><a href="https://www.fsist.com.br/" target="_blank">Baixar NFe 😎</a></li>
            <li><a href="/index.php" target="_blank">Pagina PHP</a></li>
            <li><a href="/phpmyadmin/" target="_blank">Phpmyadmin Login 😎</a></li>


            <br>

        </ul>
    </section>

    <!-- Serviços -->
    <section id="services" class="content-section" style="display: none;">

        <!-- UniTablet -->
        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> UniTablet</span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/tablet.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniTablet_6.0.2024.3_x64</h3>
                <p>UniTablet windows 64 bits</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniTablet_6.0.2024.3_x64.exe" download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/tablet.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniTablet_6.0.2024.3_x86</h3>
                <p>UniTablet windows 32 bits.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniTablet_6.0.2024.3_x86.exe" download>Baixar</a>
            </div>
        </div>


        <div class="download-item">
            <img src="Arquivos/Imagens/tablet.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniTablet 6.0.2024.2 64 bits</h3>
                <p>UniTablet.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniTablet_6.0.2024.2_x64.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/tablet.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniTablet - 13.7 32 Bits</h3>
                <p>UniTablet.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniTablet - 13.7 32 Bits.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/tablet.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniTablet - 13.6 32 Bits</h3>
                <p>UniTablet.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniTablet - 13.6 32 Bits.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/tablet.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniTablet - 13.5 32 Bits</h3>
                <p>UniTablet.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniTablet - 13.5 32 Bits.rar" download>Baixar</a>
            </div>
        </div>

        <!-- Servidor Impressão -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Servidor de Impressão </span>
        </h2> <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/impressão.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Uni Servidor Impressão 2.53 </h3>
                <p>Servidor Impressão.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniServidor Impressão 2.53.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/impressão.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Uni Servidor Impressão 2.52 </h3>
                <p>Servidor Impressão.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniServidorImpressao 2.52.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/impressão.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Uni Servidor Impressão 2.49 </h3>
                <p>Servidor Impressão.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniServidorImpressao 2.49.exe" download>Baixar</a>
            </div>
        </div>

        <!-- Whatsapp robô -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Whatsapp robô</span></h2>
        <!-- Titulo da guia interna HEHEH-->


        <div class="download-item">
            <img src="Arquivos/Imagens/whatsapp.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniWhatsApp - v.2.19 </h3>
                <p>Instalador do UniWhatsApp - v.2.19. <br><span style="color: rgb(230, 39, 39); font-weight: bold;">(
                        Instalador )</span></p>
                <a class="download-button" href="Arquivos/Downloads/Atualização - UniWhatsApp - v.2.19.exe"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/whatsapp.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniWhatsApp - v 4.0 </h3>
                <p>Atualização UniWhatsApp - v 4.0. <br><span style="color: rgb(17, 21, 247); font-weight: bold;">(
                        atualizador )</span></p>
                <a class="download-button" href="Arquivos/Downloads/UniWhatsApp_MenuCheff v 4.0.zip" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/whatsapp.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Pasta Dados</h3>
                <p><span style="color: rgb(182, 17, 247); font-weight: bold;">( Pasta com as informações do cliente.
                        )</span> </p>
                <a class="download-button" href="Arquivos/Downloads/Dados.zip" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/whatsapp.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniWhatsApp - v.3.0 (correção) </h3>
                <p>correção do UniWhatsApp - v.3.0 <br><span style="color: rgb(230, 39, 39); font-weight: bold;">(
                        Instalador )</span></p>
                <a class="download-button" href="Arquivos/Downloads/UniRobo MenuCheff 1 - correção.zip"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/whatsapp.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniWhatsApp - v.10 </h3>
                <p><span style="color: rgb(247, 17, 75); font-weight: bold;">( Versão temporaria do
                        Robô)</span><br><span style="color: rgb(230, 39, 39); font-weight: bold;">( Extrair dentro da
                        instalação )</span></p>
                <a class="download-button" href="Arquivos/Downloads/UniRobo MenuCheff 1 - Versao de Teste 07.zip"
                    download>Baixar</a>
            </div>
        </div>

        <!-- AutoAtendimento -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> AutoAtendimento </span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/Atendimento.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>AutoAtendimento 1.17 </h3>
                <p>Instalador do AutoAtendimento.</p>
                <br>
                <a class="download-button" href="Arquivos/Downloads/UniAutoAtendimento1.17.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Atendimento.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>AutoAtendimento 1.16 </h3>
                <p>Instalador do AutoAtendimento.</p>
                <br>
                <a class="download-button" href="Arquivos/Downloads/UniAutoAtendimento1.16.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/Atendimento.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>AutoAtendimento 1.15 </h3>
                <p>Instalador do AutoAtendimento.</p>
                <br>
                <a class="download-button" href="Arquivos/Downloads/UniAutoAtendimento1.15.rar" download>Baixar</a>
            </div>
        </div>


        <!-- Cardápio digital -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Menucheff Cardápio</span>
        </h2> <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/cardapio.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Menucheff Cardápio 3.6</h3>
                <p>Instalador Menucheff Cardápio 32 bits.</p>
                <a class="download-button" href="Arquivos/Downloads/MenuCheff_Cardapio 3.6 32 bits.exe"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/cardapio.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Menucheff Cardápio 3.5</h3>
                <p>Instalador Menucheff Cardápio 32 bits.</p>
                <a class="download-button" href="Arquivos/Downloads/MenuCheff_Cardapio 3.5 32 bits.exe"
                    download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/cardapio.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Menucheff Cardápio 3.4</h3>
                <p>Instalador Menucheff Cardápio 64 bits.</p>
                <a class="download-button" href="Arquivos/Downloads/MenuCheff_Cardapio 3.4 64 bits.exe"
                    download>Baixar</a>
            </div>
        </div>

        <!-- Configuradores -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Configuradores </span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/criacaobancodados.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Criar banco de dados</h3>
                <p>Criador de banco de dados.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/CriacaoBancoDados.exe" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/criacaobancodados.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniConfigurador</h3>
                <p>UniConfigurador.</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/UniConfigurador.exe" download>Baixar</a>
            </div>
        </div>

        <!-- Mysql -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Mysql </span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/mysqlserviço..jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Instalador MySQL</h3>
                <p>Instalador do serviço Mysql</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/install_mysql_service.rar" download>Baixar</a>
            </div>
        </div>

        <div class="download-item">
            <img src="Arquivos/Imagens/mysqlserviço..jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Desinstalador MySQL</h3>
                <p>Desinstalador do serviço Mysql</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/uninstall_mysql_service.rar" download>Baixar</a>
            </div>
        </div>


        <!-- Cadastrar Uniemp  -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Multiempresa</span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/iconCheff.ico" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Uniemp</h3>
                <p>Executável do Multiempresa para acessar varios bancos.</p>
                <a class="download-button" href="Arquivos/Downloads/UniEmp.exe" download>Baixar</a>
            </div>
        </div>




        <!-- Cadastrar impressoras  -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Cadastrar Impressorass</span>
        </h2> <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/cadastrarimpressoras.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Cadastrar Impressoras</h3>
                <p>Programa para adicionar impressoras nos produtos.</p>
                <a class="download-button" href="Arquivos/Downloads/Cadastrar Impressoras.rar" download>Baixar</a>
            </div>
        </div>


        <!-- Banco para Implantação  -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Banco de Dados</span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/Bancodedados.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Banco para Implantação</h3>
                <p>Banco de dados com todas as configurações prontas plano de contas, gestor web, regra tributaria, Pix
                    manual etc. .</p>
                <a class="download-button" href="Arquivos/Downloads/Banco para Implantação.rar" download>Baixar</a>
            </div>
        </div>




        <!-- Menucheff 2  -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Menucheff 2 </span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/menuchef2.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>MenuCheff 2 v1.1.79</h3>
                <p>Instalador do MenuCheff Setup -1.1.79 .</p>
                <a class="download-button" href="Arquivos/Downloads/MenuCheff-Desktop-Setup-1.1.79.exe"
                    download>Baixar</a>
            </div>
        </div>

        <!-- Gestor Integrador -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Gestor Web Integrado </span>
        </h2> <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/gestor.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Gestor Integrador 1.12</h3>
                <p>Instalador do Gestor Integrador web 1.12.</p>
                <a class="download-button" href="Arquivos/Downloads/Gestor Integrador Install 1.12.rar"
                    download>Baixar</a>
            </div>
        </div>

        <!-- ApiDelivery -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> ApiDelivery </span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/Uniapidelivery.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Uni Api Delivery Web - v.3.7</h3>
                <p>UniApiDeliveryWeb - v.3.7</p>
                <a class="download-button" href="Arquivos/Downloads/UniApiDeliveryWeb - v.3.7 03-06-22--11-43 .zip"
                    download>Baixar</a>
            </div>
        </div>

        <!-- UniTouch -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> UniTouch </span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/UniTouch.png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>UniTouch 6.0.2024.1</h3>
                <p>UniTouch 6.0.2024.1 (Criptografia)</p>
                <a class="download-button" href="Arquivos/Downloads/UniTouch 6.0.2024.1.zip" download>Baixar</a>
            </div>
        </div>

        <!-- Etiquetas -->

        <h2 class="section-title"><span style="color: rgb(6, 8, 138); font-weight: bold;"> Etiquetas </span></h2>
        <!-- Titulo da guia interna HEHEH-->

        <div class="download-item">
            <img src="Arquivos/Imagens/etiquetas..png" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Etiquetas</h3>
                <p>Etiquetas de Varios tamanhos</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/Etiquetas.rar" download>Baixar</a>
            </div>
        </div>

        
        <!-- Nessa seletion eu posso adicionar mais guias  HEHEHE  -->


        <div class="download-item">
            <img src="Arquivos/Fundo/fundoprotect.jpg" alt="Imagem do Cracker" width="100">
            <div>
                <h3>Etiquetas</h3>
                <p>Etiquetas de Varios tamanhos</p>
                <br> <!-- forma que eu encontrei para o botão ficar abaixo da imagem HEHEHEH-->
                <a class="download-button" href="Arquivos/Downloads/Etiquetas.rar" download>Baixar</a>
            </div>
        </div>




    </section>

    <section id="pesquisa" class="content-section" style="display: none;">
    </section>

    <script>
        function openTab(evt, tabName) {
    // Oculta todos os elementos com a classe "tabcontent"
    var tabcontents = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabcontents.length; i++) {
        tabcontents[i].style.display = "none";
    }

    // Remove a classe "active" de todos os elementos com a classe "tablinks"
    var tablinks = document.getElementsByClassName("tablinks");
    for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Exibe o conteúdo da aba selecionada e marca a aba como ativa
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.addEventListener("DOMContentLoaded", function() {
    // Mostra automaticamente a aba de Usuário ao carregar a página
    openTab(event, 'usuario');
});

       
    </script>






    <footer>
        <p style="margin: 0;">© 2024 Patuvêr Downloads. 🦆</p>
    </footer>

</body>

</html>