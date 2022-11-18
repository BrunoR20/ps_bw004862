<div class="rodape-site py-5 mt-3">
    <div class="container">
        <div class="pgto-social text-center row">
            <div class="col-auto me-auto">
                <strong><i class="fa-regular fa-credit-card"></i> Aceitamos</strong>
                <div class="mt-2 pt-2 border-top border-dark">
                    <i class="fa-brands fs-4 pe-1 fa-cc-visa"></i>
                    <i class="fa-brands fs-4 pe-1 fa-cc-mastercard"></i>
                    <i class="fa-brands fs-4 pe-1 fa-cc-apple-pay"></i>
                    <i class="fa-brands fs-4 pe-1 fa-cc-amex"></i>
                    <i class="fa-brands fs-4 pe-1 fa-pix"></i>
                </div>
            </div>
            <div class="col-auto">
                <strong><i class="fa-solid fa-circle-nodes"></i> Siga nossas redes</strong>
                <div class="mt-2 pt-2 border-top border-dark">
                    <a href="#"><i class="fa-brands fs-4 pe-1 fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fs-4 pe-1 fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fs-4 pe-1 fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fs-4 pe-1 fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fs-4 pe-1 fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="info-matriz mt-4 text-center row">
            <div>Preços e condições exclusivos para o <?= $site??'' ?> (exceto alimentos e bebidas), podendo sofrer alterações sem prévia notificação.</div>
            <div>
                <?= $nomeFantasia??'' ?>  | 
                <?= $site??'' ?> | 
                <?= $rua??'' ?>, <?= $bairro??'' ?>, Nº <?= $numero??'' ?> | 
                <?= $cidade??'' ?>, <?= $estado??'' ?> - CEP: <?= $cep??'' ?> | 
                CNPJ: <?= $cnpj??'' ?> | 
                Telefones: <?= $telefone1??'' ?> - <?= $telefone2??'' ?> |
            </div>
            <div>Observação: Ao utilizar um cupom de desconto, certifique-se que o mesmo esteja no perído de validade</div>
        </div>
    </div>
</div>