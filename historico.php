<?php include_once 'includes/head.php'?>
<body  ng-controller="ProductsCtrl">
    <?php include_once 'includes/navbar.php'?>
    <div class="container padding-container">
        <div class="title">
            <h1>Histórico de Compras</h1>
            <div class="division"></div>
        </div>
        <div class="adm-lista" style="padding-top: 30px;">
            <!-- Histórico de Produto -->
            <div class="row item-adm-produtos">
                <div class="col-md-2 my-auto img-adm-produtos">
                    <img src="https://dummyimage.com/100x100/FFR547/FFFFFF" alt="">
                </div>
                <div class="col-md-3 my-auto">
                    <h1>Produto 1</h1>
                    <h2>Categoria</h2>
                    <h2>Qtd.: 01</h2>
                </div>
                <div class="col-md-3 my-auto">
                    <h1>R$ 10,99</h1>
                    <h2>Código: 123123</h2>
                    <h2>Marca: Nome</h2>
                </div>
                <div class="col-md-2 my-auto">
                    <h5>Status da Compra: </h5><h4 style="color:blue">Aguardando Pagamento</h4>
                    <h5>Data da Compra: </h5><h4>21/09/2020</h4>
                </div>
                <div class="col-md-2 my-auto text-md-right">
                    <h5>Método de Pagamento: </h5><h4>Boleto</h4>
                    <h5>Status de Envio: </h5><h4>Em trânsito</h4>
                </div>
            </div>

            <hr>

            <div class="row item-adm-produtos">
                <div class="col-md-2 my-auto img-adm-produtos">
                    <img src="https://dummyimage.com/100x100/FFR547/FFFFFF" alt="">
                </div>
                <div class="col-md-3 my-auto">
                    <h1>Produto 1</h1>
                    <h2>Categoria</h2>
                    <h2>Qtd.: 05</h2>
                </div>
                <div class="col-md-3 my-auto">
                    <h1>R$ 79,99</h1>
                    <h2>Código: 123123</h2>
                    <h2>Marca: Nome</h2>
                </div>
                <div class="col-md-2 my-auto">
                    <h5>Status da Compra: </h5><h4 style="color: #009c58">Aprovado</h4>
                    <h5>Data da Compra: </h5><h4>21/09/2020</h4>
                </div>
                <div class="col-md-2 my-auto text-md-right">
                    <h5>Método de Pagamento: </h5><h4>Cartão de Crédito</h4>
                    <h5>Status de Envio: </h5><h4>Entregue</h4>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once 'includes/js.php'?>
</body>
</html>