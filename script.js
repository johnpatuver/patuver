// Função para mostrar a página correspondente ao link clicado
function showPage(pageId, displayMode = 'block') {
    var sections = document.querySelectorAll('section');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });

    var selectedPage = document.getElementById(pageId);
    selectedPage.style.display = displayMode;
}

// Nessa parte do codigo eu defini a troca de imagen ao fundo da caixa de senha
function changeBackground() {
    const backgrounds = ['fundo1.jpg', 'fundo2.jpeg', 'fundo3.jpeg', 'fundo4.jpeg' , 'fundo5.jpeg', 'fundo6.jpg', 'fundo7.jpg', 'fundo8.jpeg', 'fundo9.jpeg', 'fundo10.jpg', 'fundo11.jpg', 'fundo13.jpg', 'fundo14.jpg', 'fundo15.jpg', 'fundo16.jpg', 'fundo17.jpg', 'fundo18.jpg', 'fundo19.jpg', 'fundo20.jpg', 'fundo21.jpg', 'fundo22.jpg', 'fundo23.jpg', ];
    const randomIndex = Math.floor(Math.random() * backgrounds.length); // Escolhe aleatoriamente um índice da lista
    const newBackground = backgrounds[randomIndex]; // Seleciona a imagem de fundo de maneira aleatória HEHE 

    document.getElementById('dialog-overlay').style.backgroundImage = `url('Arquivos/Fundo/${newBackground}')`; // Atualiza a imagem de fundo
}

// Chamada inicial da função para mudar o fundo
changeBackground();

// Configura um intervalo para mudar a imagem de fundo a cada 1 minuto
setInterval(changeBackground, 60000);

// Senha cifrada
const senhaCifrada = "MTU1NA=="; // Senha codificada em Base64


// Aqui verifico a senha
function checkPassword() {
    const passwordInput = document.getElementById("password").value;
    // Decifra a senha antes de comparar
    const senhaDecifrada = atob(senhaCifrada);
    if (passwordInput === senhaDecifrada) {
        // com a senha correta, permitir acesso ao site
        document.getElementById("dialog-overlay").style.display = "none";
        setTimeout(() => {
            document.getElementById("dialog-overlay").style.display = "flex";
            document.getElementById("password").value = ""; // Limpa o campo de senha
            document.getElementById("password").focus(); // Foca no campo de senha
        }, 60000); // Reexibir a caixa de senha após 1 minuto (60000 milissegundos)
    } else {
        // Senha errada e para mostrar mensagem de erro
        alert("Senha incorreta. Tente novamente.");
    }
}

// Aqui e para quando eu digitar o enter clicar no botão Acessar
document.getElementById("password").addEventListener("keyup", function(event) {
    // aqui verifica se clicou no  "Enter" (código 13)
    if (event.keyCode === 13) {
        // aqui verifica a senha digitada
        checkPassword();
    }
});

// Exibir a caixa de senha centralizada ao carregar a página
changeBackground();
document.getElementById("dialog-overlay").style.display = "flex"; // Exibir a caixa de senha centralizada ao carregar a página
document.getElementById("password").focus(); // Focar no campo de senha ao carregar a página
