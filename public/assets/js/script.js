// ADICIONA COMPORTAMENTO DE CURTIR AO BOTÃO DE CURTIR / FAVORITAR
document.querySelectorAll('.curtir-produto').forEach(linkCurtir => {
    linkCurtir.addEventListener('click', e => {
        e.preventDefault();
        let dadosPost = new FormData();
        dadosPost.append('acao', 'curtir');
        dadosPost.append('idproduto', linkCurtir.dataset.idproduto);
        ajax('/ajax', dadosPost, function(resposta) {
            if (resposta.status != 'success') {
                Swal.fire({
                    icon: resposta.status,
                    title: 'Opsss...',
                    text: resposta.mensagem
                });
                return;
            }
            // Se deu tudo certo, executa o código abaixo
            if (resposta.dados.curtiu) {
                linkCurtir.querySelector('i').classList.remove('bi-heart');
                linkCurtir.querySelector('i').classList.add('bi-heart-fill');
            } else {
                linkCurtir.querySelector('i').classList.remove('bi-heart-fill');
                linkCurtir.querySelector('i').classList.add('bi-heart');
            }
        });
    });
});

// ADICIONA COMPORTAMENTO PARA O BOTÃO COMPRAR
document.querySelectorAll('.comprar-produto').forEach(linkComprar => {
    linkComprar.addEventListener('click', e => {
        e.preventDefault();
        let dadosPost = new FormData();
        dadosPost.append('acao', 'carrinho');
        dadosPost.append('idproduto', linkComprar.dataset.idproduto);
        dadosPost.append('quantidade', linkComprar.dataset.quantidade);
        ajax('/ajax', dadosPost, function(resposta) {
            if (resposta.status != 'success') {
                Swal.fire({
                    icon: resposta.status,
                    title: 'Opsss...',
                    text: resposta.mensagem
                });
                return;
            }
            window.location.href = '/carrinho';
        });
    });
});

// ADICIONA COMPORTAMENTO PARA ALTERAR QUANTIDADE DE PRODUTOS
document.querySelectorAll('.altera-qtd-produto').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();

        let input = document.querySelector('#produto-' + link.dataset.idproduto);
        let totalFinal = parseInt(input.value) + parseInt(link.dataset.incremento);
        input.value = totalFinal;

        let dadosPost = new FormData();
        dadosPost.append('acao', 'carrinho');
        dadosPost.append('idproduto', link.dataset.idproduto);
        dadosPost.append('quantidade', totalFinal);
        ajax('/ajax', dadosPost, function(resposta) {
            if (resposta.status != 'success') {
                Swal.fire({
                    icon: resposta.status,
                    title: 'Opsss...',
                    text: resposta.mensagem
                });
                return;
            }

            let objTotal = document.querySelector('.valor-total');
            let total = resposta.dados.valortotal;

            objTotal.textContent = 'R$' + (new Intl.NumberFormat().format(total));

            if (totalFinal == 0) {
                window.location.href = '/carrinho';
            }
        });
    });
});

function ajax(url, dados, callBack) {
    if (!url, !dados, !callBack) {
        throw 'Todos os parâmetros devem ser preenchidos';
    }

    let dadosCallBack = {};
    let xhr = new XMLHttpRequest();
    xhr.open('POST', url);
    xhr.onload = function() {
        if (xhr.readyState == 4) {
            if (xhr.status != 200) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'warning',
                    title: 'Falha na comunicação',
                    text: 'Ocorreu um erro de conexão, por favor, tente novamente. Se o erro persistir, contate o suporte',
                    showConfirmButton: false,
                    timer: 3000
                });
                return;
            }
            try {
                dadosCallBack = JSON.parse( xhr.responseText );
            } catch(e) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'warning',
                    title: 'Falha de processamento',
                    text: 'A resposta não pôde ser processada, tente novamente ou entre em contato com o suporte',
                    showConfirmButton: false,
                    timer: 3000
                });
                return;
            }

            callBack(dadosCallBack);
        }
    };

    xhr.onerror = function() {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Falha na comunicação',
            text: 'Ocorreu um erro de conexão, por favor, tente novamente',
            showConfirmButton: false,
            timer: 3000
        });
    };

    xhr.send(dados);
}