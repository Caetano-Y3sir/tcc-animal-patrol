$(document).ready(function () {
    $("a[rel=modal]").click(function (ev) {
        ev.preventDefault();
        var id = $(this).attr("href");
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();

        //colocando o fundo preto
        $('#mascara').css({ 'width': larguraTela, 'height': alturaTela });
        $('#mascara').fadeIn(1000);
        $('#mascara').fadeTo("slow", 0.8);

        var left = ($(window).width() / 2) - ($(id).width() / 2);
        var top = ($(window).height() / 2) - ($(id).height() / 2);

        $(id).css({ 'top': top, 'left': left });
        $(id).show();
    });

    $("#mascara").click(function () {
        $(this).hide();
        $(".window").hide();
    });

    $('.fechar').click(function (ev) {
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });
}); 

$(document).ready(function () {
    $("a[rel=login-cad]").click(function (ev) {
        ev.preventDefault();
        var id = $(this).attr("href");
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();

        //colocando o fundo preto
        $('#maskra').css({ 'width': larguraTela, 'height': alturaTela });
        $('#maskra').fadeIn(1000);
        $('#maskra').fadeTo("slow", 0.8);

        var left = ($(window).width() / 2) - ($(id).width() / 2);
        var top = ($(window).height() / 2) - ($(id).height() / 2);

        $(id).show();
    });

    $('#maskra').click(function (ev) {
        ev.preventDefault();
        $("#maskra").hide();
        $(".janjela").hide();
    });
}); 




//CODIGO 1 Q VAI MUDAR QUEM TA SELECIONADO NOS BOTOES
    //PASSO CODI 1:1-verificar qnd o user clicar nos botões
    const botoes = document.querySelectorAll('.botao');

//CODIGO 2 QUE VAI MOSTRAR AS INFORMAÇÕES DO ANIMAL QUANDO CLICA NO BOTAO RESPECTIVO
    //PASSO CODI 2:1-pegar cada animal no java script p/ poder mostrar ou esconder as infos e imagem
    const animais = document.querySelectorAll(".animalzito");


    botoes.forEach((botao, cada_animal) => {
        botao.addEventListener("click", () => { 
            //PASSO CODI 1:3- verificar se ja tem algum botao "selecionado", se tiver, tirar da seleção
            desselecionarBotao();

            //PASSO CODI 1:2- colocar a classe "selecionado" no botao q o user clicou
            botao.classList.add("selecionado");

            //PASSO CODI2:3-verificar se ja tem algum animal "selecionado", se tiver, tirar da seleção
            desselecionarAnimal();

            //PASSO CODI 2:2-colocar a classe "selecionado" no animal q o user selecionou
            animais[cada_animal].classList.add("selecionado");
        });
    });




/*escolher as linhas q vc fez, apertar com o botao direito, 
escolher REFACTOR, e "Extract to function in global scope"

Isso serve pra refatorar o código, transformar algo q vc fez
em uma função/function
*/

function desselecionarAnimal() {
    const animalSelecionado = document.querySelector(".animalzito.selecionado");
    animalSelecionado.classList.remove("selecionado");
}


function desselecionarBotao() {
    const botaoSelecionado = document.querySelector(".botao.selecionado");
    botaoSelecionado.classList.remove("selecionado");
}
