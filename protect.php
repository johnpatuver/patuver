<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    echo "
    <!DOCTYPE html>
    <html lang=\"pt-BR\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Notificação de login</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: white; /* Cor de fundo */
            }
            .mensagem {
                width: 300px;
                background-color: white; /* Cor de fundo */
                border: 1px solid #ccc; /* Cor da borda */
                border-radius: 10px; /* Cantos arredondados */
                padding: 20px;
                text-align: center;
                animation: cair 1s ease-in-out;
            }
            .mensagem img {
                width: 100px;
                height: auto;
            }
            .mensagem strong {
                font-weight: 900; /* Ajustando a espessura da fonte */
            }
            .mensagem button {
                margin-top: 19px; /* Espaçamento entre o texto e o botão */
                padding: 10px 20px;
                background-color: #007bff; /* Cor do botão */
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .mensagem button:hover {
                background-color: #0056b3; /* Cor do botão ao passar o mouse */
            }
            @keyframes cair {
                0% {
                    transform: translateY(-50px);
                    opacity: 0;
                }
                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            /* Media queries para diferentes dispositivos */
            @media only screen and (max-width: 767px) {
                /* Estilos para dispositivos móveis */
                body {
                    background-image: url('Arquivos/Fundo/fundo-protect-mobile.jpg');
                    background-attachment: fixed;
                }
            }

            @media only screen and (min-width: 768px) and (max-width: 991px) {
                /* Estilos para tablets */
                body {
                    background-image: url('Arquivos/Fundo/fundo-protect-tablet.jpg');
                    background-attachment: fixed;
                }
            }

            @media only screen and (min-width: 992px) {
                /* Estilos para desktops */
                body {
                    background-image: url('Arquivos/Fundo/fundoprotect.jpg');
                    background-attachment: fixed;
                    background-size: cover;
                }
            }

        </style>
    </head>
    <body>
    <div class=\"mensagem\">
    <img src=\"Arquivos/Imagens/Favico/Pato andando.gif\" alt=\"Mensagem de erro\"><br>
    <strong>Você não pode acessar esta página porque não está logado.</strong><br>
    <button type=\"button\" onclick=\"window.location.href='index.php';\">Entrar</button>
</div>
    </body>
    </html>
    ";
    exit; // Impede que o restante do código seja executado após a exibição da mensagem de erro.
}
?>
