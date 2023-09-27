<?php include_once 'includes/head.php'?>
<body  ng-controller="ProductsCtrl">
    <?php include_once 'includes/navbar.php'?>
    <div class="container padding-container">
        <div class="title">
            <h1>Adicionar produto</h1>
            <div class="division"></div>
        </div>
        <div class="photos-adm-produto">
            <!-- Adicionar uma linha dessa div abaixo para cada imagem, fazer o botão excluir a foto dele -->
            <div class="photo-adm-produto"><img src="https://dummyimage.com/250x250/CDECDE/131313" alt=""><button class="trashed-photo"><i class="fas fa-trash"></i></button></div>
            <br>
            <div class="upload-photo-adm">
                <form action="" method="">
                    <div class="row">
                        <div class="col-md-8 my-auto">
                            <label for="input-file">Escolher imagem</label>
                            <input type="file" id="input-file" style="display: none;">
                            <span id="file-name"></span>
                        </div>
                        <div class="col-md-4 margin-mobile">
                            <button class="btn btn-orange btn-full">Enviar imagem</button>
                        </div>
                    </div>
                </form>
            </div>
            <script>
                var $input    = document.getElementById('input-file'),
                    $fileName = document.getElementById('file-name');

                $input.addEventListener('change', function(){
                $fileName.textContent = this.value;
                });
            </script>
        </div>
        <div class="infos-adm-produto">
                    <form ng-submit="addProduct()">
            <!--form action="" method=""-->
                <div class="row">
                    <div class="item-form col-md-12">
                        <label>Nome</label><br>
                        <input required type="text" ng-model="newProductName"></input>
                    </div>
                    <div class="item-form col-md-6">
                        <label>Valor original (R$)</label><br>
                        <input required type="text" ng-model="newProductValue"></input>
                    </div>
                    <div class="item-form col-md-6">
                        <label>Valor com desconto (R$)</label><br>
                        <input type="text"></input>
                    </div>
                    <div class="item-form col-md-6">
                        <label>Estoque</label><br>
                        <input  type="text"></input>
                    </div>
                    <div class="item-form col-md-6">
                        <label>Código</label><br>
                        <input required type="text" ng-model="newProductCode"></input>
                    </div>
                    <div class="item-form col-md-3">
                        <label>Peso (kg)</label><br>
                        <input  type="text"></input>
                    </div>
                    <div class="item-form col-md-3">
                        <label>Comprimento (cm)</label><br>
                        <input  type="text"></input>
                    </div>
                    <div class="item-form col-md-3">
                        <label>Largura (cm)</label><br>
                        <input  type="text"></input>
                    </div>
                    <div class="item-form col-md-3">
                        <label>Altura (cm)</label><br>
                        <input type="text"></input>
                    </div>
                    <div class="item-form col-md-4">
                        <label>Marca</label><br>
                        <!-- <input type="text"></input> -->
                        <select>
                            <option selected disabled>Selecione...</option>
                            <option value="" ng-repeat="marca in brands">{{marca.NAME}}</option>
        
                        </select>
                    </div>
                    <div class="item-form col-md-4">
                        <label>Categoria</label><br>
                        <!-- <input type="text"></input> -->
                        <select>
                            <option selected disabled>Selecione...</option>
                            <option value="" ng-repeat="categoria in categories">{{categoria.NAME}}</option>
                        </select>
                    </div>
                    <div class="item-form col-md-4 radios-form">
                        <label>Tamanhos</label><br>
                        <div style="margin-left: -15px">
                            <input type="checkbox" name="tam" id="pp-tam"><label for="pp-tam">PP</label>
                            <input type="checkbox" name="tam" id="p-tam"><label for="p-tam">P</label>
                            <input type="checkbox" name="tam" id="m-tam"><label for="m-tam">M</label><br>
                            <input type="checkbox" name="tam" id="g-tam"><label for="g-tam">G</label>
                            <input type="checkbox" name="tam" id="gg-tam"><label for="gg-tam">GG</label>
                        </div>
                    </div>
                    <div class="item-form col-md-12">
                        <label>Descrição</label><br>
                        <textarea name="" id="" cols="30" rows="20"></textarea>
                    </div>
                    <div class="item-form col-md-12">
                        <label>Cores</label><br>
                        <input type="text" placeholder="Ex: azul, laranja, marrom - Deixe em branco caso não tenha variações"></input>
                    </div>
                    <div class="item-form col-md-12">   
                        <button class="btn btn-full btn-orange" type="submit">Criar produto</button>
                    </div>  

                </div>
            </form>
        </div>
    </div>
    
    <?php include_once 'includes/js.php'?>

</body>
</html>