<?php include_once 'includes/head.php'?>
<body  ng-controller="ProductsCtrl">
    <?php include_once 'includes/navbar.php'?>
    <div class="container padding-container">
        <div class="title">
            <h1>Detalhes da Compra</h1>
            <div class="division"></div>
        </div>

            <!-- Histórico de Produto -->

        <div class="adm-lista" style="padding-top: 30px;">
            <div class="row item-adm-produtos">
                <div class="col-md-4 my-auto">
                    <h1>Lista de Produtos:</h1>
                    <br>
                    <h2>x5 Camiseta</h2>
                    <h2>x2 Tênis</h2>
                    <h2>x3 Bermuda</h2>
                    <h2>x1 Casaco</h2>
                </div>
                <div class="col-md-8 my-auto img-adm-produtos">
                    <img src="img/simbolo.png" style="width: 100px; height: 100px;">
                </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="row item-adm-produtos">
                <div class="col-md-6 my-auto">
                    <h1>Detalhes do Pedido:</h1>
                    <br>
                    <h2>Nome do Comprador: José Ferreira Lima</h2>
                    <h2>Pedido Nº: 456</h2>
                    <h2>Data da Compra: 22/09/2020</h2>
                    <h2>Código de Rastreio: PACSEDEX1234</h2>
                </div>
                <div class="col-md-6 my-auto">
                    <br>
                    <br>
                    <h2>Método de Pagamento: Cartão de Crédito</h2>
                    <h2>Status do Pedido: Aprovado</h2>
                    <h2>Método de Envio: Econômico</h2>
                    <h2>Prazo de Chegada: 15 dias úteis</h2>
                </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="row item-adm-produtos">
                <div class="col-md-6 my-auto">
                    <h1>Endereço de Cobrança:</h1>
                    <br>
                    <h2>Rua: Arnaldo Bento Coelho Nº 123</h2>
                    <h2>Complemento: Ap 23</h2>
                    <h2>Bairro: Zona Leste</h2>
                    <h2>Cidade: São Paulo</h2>
                    <h2>CEP: 12345-678</h2>
                </div>
                <div class="col-md-6 my-auto">
                    <h1>Endereço de Entrega:</h1>
                    <br>
                    <h2>Rua: Arnaldo Bento Coelho Nº 123</h2>
                    <h2>Complemento: Ap 23</h2>
                    <h2>Bairro: Zona Leste</h2>
                    <h2>Cidade: São Paulo</h2>
                    <h2>CEP: 12345-678</h2>
                </div>
            </div>



        </div>
    </div>
    
    <?php include_once 'includes/js.php'?>
</body>
</html>