const dados = {
    programas: [
        {
            titulo: "Defender Control v1.9",
            descricao: "Desativa o Windows Defender gratuitamente.",
            imagem: "Arquivos/Imagens/Defender Control v1.9.png",
            link: "Arquivos/Downloads/dControl.zip"
        },
        {
            titulo: "Office 2013",
            descricao: "O Microsoft Office 2013 é um pacote suíte de aplicativos para escritório.",
            imagem: "Arquivos/Imagens/Office2013.jpg",
            link: "Arquivos/Downloads/Office 2013.rar"
        },
        {
            titulo: "Navicat Premium 16",
            descricao: "Navicat Premium é uma ferramenta de desenvolvimento de banco de dados.",
            imagem: "Arquivos/Imagens/Navicat Premium16.png",
            link: "Arquivos/Downloads/AbbasPC.Net_Navicat Premium 16.1.0 - Copia.rar"
        },
        {
            titulo: "Office 2019",
            descricao: "O Microsoft Office 2019 é um pacote suíte de aplicativos para escritório.",
            imagem: "Arquivos/Imagens/Office2019.png",
            link: "Arquivos/Downloads/Professional2019Retail.img"
        },
        {
            titulo: "TeamViewer 15",
            descricao: "Instalador do TeamViewer 15 que permite acessar sem conta.",
            imagem: "Arquivos/Imagens/teamViewer.png",
            link: "Arquivos/Downloads/teamviewer-15-35-7.exe"
        },
        {
            titulo: "AnyDesk 6.0",
            descricao: "Instalador do AnyDesk que permite acessar sem conta.",
            imagem: "Arquivos/Imagens/Anydesk.jpg",
            link: "Arquivos/Downloads/AnyDesk.exe"
        },
        {
            titulo: "Driver Booster Pro 10.3",
            descricao: "Driver Booster Pro é a ferramenta de atualização de driver.",
            imagem: "Arquivos/Imagens/driverbooster.jpg",
            link: "Arquivos/Downloads/AbbasPC.Net_IObit Driver Booster Pro 10.3.0.124.rar"
        },
        {
            titulo: "WinRAR 7.0 64 Bits",
            descricao: "WinRAR é um software compactador e descompactador de dados.",
            imagem: "Arquivos/Imagens/winrar.png",
            link: "Arquivos/Downloads/winrar-x64br.exe"
        },
        {
            titulo: "WinRAR 7.0 32 Bits",
            descricao: "WinRAR é um software compactador e descompactador de dados.",
            imagem: "Arquivos/Imagens/winrar.png",
            link: "Arquivos/Downloads/winrar-x32-700br.exe"
        },


        
    ],
    


    servicos: [
        {
            titulo: "UniTablet_6.0.2024.3_x64",
            descricao: "UniTablet windows 64 bits",
            imagem: "Arquivos/Imagens/tablet.png",
            link: "Arquivos/Downloads/UniTablet_6.0.2024.3_x64.exe"
        }
        
    ],

    ativadores:[
        {
            titulo: "AtivadorOffice 2013",
            descricao: "Ativador do office 2013.",
            imagem: "Arquivos/Imagens/Favico/Ativador office 2013.jpg",
            link: "Arquivos/Downloads/Office 2013 Permanent Activator.rar"
        },
        {
            titulo: "Ativador Windows 10",
            descricao: "Ativa o Windows 10 - Todas as Versões.",
            imagem: "Arquivos/Imagens/Ativador Windows 10.jpg",
            link: "Arquivos/Downloads/Ativador Windows 10.zip"
        },
        {
            titulo: "Windows Loader v2.0.1",
            descricao: "Ativa o Windows 7 - Todas as Versões.",
            imagem: "Arquivos/Imagens/Windows 7 Loader.jpg",
            link: "Arquivos/Downloads/Windows Loader v2.0.1.rar"
        },
        {
            titulo: "KMSpico (Ativador 10/11)",
            descricao: "Permite ativar múltiplas versões do Microsoft Windows e Office.",
            imagem: "Arquivos/Imagens/kmspico.jpg",
            link: "Arquivos/Downloads/kmspico.rar"
        },
        {
            titulo: "Ativador Office 2019",
            descricao: "Ativador do office 2013.",
            imagem: "Arquivos/Imagens/Favico/Ativador office 2013.jpg",
            link: "Arquivos/Downloads/Office 2013 Permanent Activator.rar"
        },
        {
            titulo: "ApowerREC crack",
            descricao: "crack do programa ApowerREC .",
            imagem: "Arquivos/Imagens/ApowerREC-crack.jpg",
            link: "Arquivos/Downloads/Crack ApowerREC.rar"
        }
    ],

    unicheff:[
        {
            titulo: "Atualizador v.6.0.2022.01",
            descricao: "Instalador do Unicheff 6.0.2024.1.",
            imagem: "Arquivos/Imagens/iconCheff.ico",
            link: "Arquivos/Downloads/Atualização - UniCheff - v.6.0.2022.01.exe"
        }
    ],


    
};

const todosDados = [
    ...dados.programas,
    ...dados.servicos,
    ...dados.ativadores,
    ...dados.unicheff,
];

var sections = document.querySelectorAll(".content-section");
var telaPesquisa = document.querySelector("#pesquisa");

// LIGA / DESLIGA nova pesquisa
const ativarNovaPesquisa = false; // true ou false

document.getElementById("searchInput").addEventListener("input", function () {

    var searchTerm = this.value.trim().toLowerCase();

    if (searchTerm.length === 0) {
        return showPage('programs')
    } else {
        if (ativarNovaPesquisa) {
            showPage('pesquisa', 'grid')
        }
    }

    telaPesquisa.innerHTML = "";

    // REMOVER ESSE IF QUANDO TERMINAR DE CADASTRAR
    if (ativarNovaPesquisa) {
        todosDados.forEach(function (item) {
            const tituloTemTermo = item?.titulo?.toLowerCase().includes(searchTerm)
            const descricaoTemTermo = item?.descricao?.toLowerCase().includes(searchTerm)

            if (tituloTemTermo || descricaoTemTermo) {
                const itemContainer = document.createElement("div");
                const itemImg = document.createElement("img");
                const itemContent = document.createElement("div");
                const itemTitle = document.createElement("h3");
                const itemDescription = document.createElement("p");
                const itemButton = document.createElement("a");

                const titulo = item?.titulo;
                const descricao = item?.descricao;
                const imagem = item?.imagem;
                const link = item?.link;

                itemImg.src = imagem;
                itemImg.width = "100";

                itemTitle.innerHTML = titulo;
                itemDescription.innerHTML = descricao;
                itemButton.classList.add('download-button');
                itemButton.href = link;
                itemButton.setAttribute('download', "download")
                itemButton.innerHTML = 'Baixar'

                itemContent.appendChild(itemTitle)
                itemContent.appendChild(itemDescription)
                itemContent.appendChild(itemButton)

                itemContainer.classList.add("download-item")
                itemContainer.appendChild(itemImg)
                itemContainer.appendChild(itemContent)


                telaPesquisa.appendChild(itemContainer)
            }
        })
    } else {
        const sectionsTitle = document.querySelectorAll('.section-title');
        sectionsTitle.forEach((sectionTitle) => {
            if (searchTerm) {
                sectionTitle.classList.add('esconder')
            } else {
                sectionTitle.classList.remove('esconder')
            }
        })

        sections.forEach(function (section) {
            var items = section.querySelectorAll(".download-item");
            var sectionVisible = false;

            items.forEach(function (item) {
                var title = item.querySelector("h3").textContent.toLowerCase();
                var description = item.querySelector("p").textContent.toLowerCase();

                if (title.includes(searchTerm) || description.includes(searchTerm) || searchTerm.length === 0) {
                    item.classList.remove('esconder');
                    sectionVisible = true;
                } else {
                    item.classList.add('esconder');
                }
            });


            if (sectionVisible || searchTerm.length === 0) {
                section.style.display = "block";
            } else {
                section.style.display = "none";
            }
        });
    }
});

// Adiciona um evento para limpar a caixa de pesquisa e voltar para a página inicial
document.getElementById("searchInput").addEventListener("change", function () {
    if (this.value.trim() === "") {
        // Redireciona para a guia home
        window.location.hash = "";
    }
});