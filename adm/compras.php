<?php include_once 'includes/head.php'?>
<body  ng-controller="ProductsCtrl">
    <?php include_once 'includes/navbar.php'?>
    <div class="container padding-container">
        <div class="title">
            <h1>Pedidos Efetuados</h1>
            <div class="division"></div>
        </div>
        <div class="adm-lista" style="padding-top: 30px;">
            <form action="">
                <div class="row">
                    <div class="col-md-8">
                        <div class="item-form">
                            <input type="text" placeholder="Nome do produto">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item-form">
                            <button class="btn btn-full btn-black" style="margin: 0;">Pesquisar</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Produto 01 -->
            <div class="row item-adm-produtos" ng-repeat="produto in products">
                <div class="col-md-2 my-auto img-adm-produtos">
                    <img src="https://dummyimage.com/100x100/347EC4/FFFFFF" alt="">
                </div>
                <div class="col-md-4 my-auto">
                    <h1>Produto 1</h1>
                    <h2>Categoria</h2>
                    <h2>Qtd.:</h2>
                </div>
                <div class="col-md-2 my-auto">
                    <h1>R$ 89,90</h1>
                </div>
                <div class="col-md-2 my-auto">
                    <h2>Código: 1337</h2>
                    <h2>Marca: Nome</h2>
                </div>
                <div class="col-md-2 my-auto text-md-right">
                    <h5>Comprador: </h5><h4>Alysson</h4>
                    <h5>Status da Compra: </h5><h4 style="color:green">Aprovada</h4>
                    <h5>Data da Compra: </h5><h4>21/09/2020</h4>
                </div>
            </div>
            <hr>
            <!-- Produto 02 -->
            <div class="row item-adm-produtos">
                <div class="col-md-2 my-auto img-adm-produtos">
                    <img src="https://dummyimage.com/100x100/FFR547/FFFFFF" alt="">
                </div>
                <div class="col-md-4 my-auto">
                    <h1>Produto 2</h1>
                    <h2>Categoria</h2>
                    <h2>Qtd.:</h2>
                </div>
                <div class="col-md-2 my-auto">
                    <h1>R$ 120,99</h1>
                </div>
                <div class="col-md-2 my-auto">
                    <h2>Código: 123123</h2>
                    <h2>Marca: Nome</h2>
                </div>
                <div class="col-md-2 my-auto text-md-right">
                <h5>Comprador: </h5><h4>Alysson</h4>
                <h5>Status da Compra: </h5><h4 style="color:red">Negada</h4>
                <h5>Data da Compra: </h5><h4>21/09/2020</h4>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once 'includes/js.php'?>
</body>
</html>