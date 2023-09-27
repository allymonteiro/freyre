<?php include_once 'includes/head.php'?>
<body  ng-controller="ProductsCtrl">
    <?php include_once 'includes/navbar.php'?>
    <div class="container padding-container">
        <div class="title">
            <h1>Produtos</h1>
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
                    <h1>{{produto.PRESENTATION_NAME}}</h1>
                    <h2>Categoria</h2>
                </div>
                <div class="col-md-2 my-auto">
                    <h2 style="text-decoration: line-through">R$ {{produto.VALUE}}</h2>
                    <h1>R$ {{produto.VALUE}}</h1>
                </div>
                <div class="col-md-2 my-auto">
                    <h2>Código: {{produto.CODE}}</h2>
                    <h2>Marca: Nome</h2>
                </div>
                <div class="col-md-2 my-auto text-md-right">
                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                    <i class="fas fa-trash"></i>
                </div>
            </div>
            <!-- Produto 02 -->
            <div class="row item-adm-produtos">
                <div class="col-md-2 my-auto img-adm-produtos">
                    <img src="https://dummyimage.com/100x100/FFR547/FFFFFF" alt="">
                </div>
                <div class="col-md-4 my-auto">
                    <h1>Nome do produto</h1>
                    <h2>Categoria</h2>
                </div>
                <div class="col-md-2 my-auto">
                    <h2 style="text-decoration: line-through">R$ 99,00</h2>
                    <h1>R$ 999,90</h1>
                </div>
                <div class="col-md-2 my-auto">
                    <h2>Código: 123123</h2>
                    <h2>Marca: Nome</h2>
                </div>
                <div class="col-md-2 my-auto text-md-right">
                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                    <i class="fas fa-trash"></i>
                </div>
            </div>
        </div>
        <br>
        <div class="title">
            <h1>Marcas</h1>
            <div class="division"></div>
        </div>
        <div class="adm-lista" style="padding-top: 20px;">
            <form ng-submit="addBrand()">
                <div class="row">
                    <div class="col-md-8">
                        <div class="item-form">
                            <input type="text" placeholder="Nome da marca" ng-model="newBrandName">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item-form">
                            <button class="btn btn-full btn-black" type="submit" style="margin: 0">Adicionar</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Marca 01 -->
            <div class="row item-adm-produtos lista-menor"  ng-repeat="marca in brands">
                <div class="col-md-6 my-auto">
                    <h1>{{marca.NAME}}</h1>
                </div>
                <div class="col-md-6 my-auto text-md-right" ng-click="brands.$remove(marca)">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
            <!-- Marca 02 -->
            <div class="row item-adm-produtos lista-menor">
                <div class="col-md-6 my-auto">
                    <h1>Nome da marca</h1>
                </div>
                <div class="col-md-6 my-auto text-md-right">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
        </div>
        <br>
        <div class="title">
            <h1>Categorias</h1>
            <div class="division"></div>
        </div>
        <div class="adm-lista" style="padding-top: 20px;">
            <form  ng-submit="addCategory()">
                <div class="row">
                    <div class="col-md-8">
                        <div class="item-form">
                            <input type="text" placeholder="Nome da categoria" ng-model="newCategoryName">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item-form">
                            <button class="btn btn-full btn-black" type="submit" style="margin: 0">Adicionar</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Categoria 01 -->
            <div class="row item-adm-produtos lista-menor" ng-repeat="categoria in categories">
                <div class="col-md-6 my-auto">
                    <h1>{{categoria.NAME}}</h1>
                </div>
                <div class="col-md-6 my-auto text-md-right" ng-click="categories.$remove(categoria)">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
            <!-- Categoria 02 -->
            <div class="row item-adm-produtos lista-menor">
                <div class="col-md-6 my-auto">
                    <h1>Nome da categoria</h1>
                </div>
                <div class="col-md-6 my-auto text-md-right">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once 'includes/js.php'?>
</body>
</html>