<?php include_once 'includes/head.php' ?>
<body>
    <?php include_once 'includes/navbar.php' ?>
    <div class="produto-detalhes">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12 origin-images">
                            <img src="https://dummyimage.com/500x500/123123/FFFFFF">
                            <img src="https://dummyimage.com/500x500/456456/FFFFFF">
                            <img src="https://dummyimage.com/500x500/ABCABC/131313">
                            <img src="https://dummyimage.com/500x500/CDECDE/131313">
                        </div>
                        <div class="col-12 sub-images">
                            <img src="https://dummyimage.com/250x250/123123/FFFFFF">
                            <img src="https://dummyimage.com/250x250/456456/FFFFFF">
                            <img src="https://dummyimage.com/250x250/ABCABC/131313">
                            <img src="https://dummyimage.com/250x250/CDECDE/131313">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 produtos-valores">
                    <div class="row">
                        <div class="col-12">
                            <h4>Categoria</h4>
                            <h1>Nome do produto</h1>
                        </div>
                        <div class="col-md-6 cod-marc">
                            Código: ABC1234
                        </div>
                        <div class="col-md-6 text-md-right cod-marc">
                            Marca: Nome
                        </div>
                        <div class="col-12">
                            <h5>R$ 999,90</h5>
                            <h2>R$ 99,90</h2>
                            <h3>até <b>10x</b> de <b>R$ 9,90</b> sem juros<br>ou <b>R$ 90,99</b> via Boleto Bancário</h3>
                            <h4 id="methods-pay">Ver todas as formas de pagamento</h4>
                        </div>
                        <div class="col-12">
                            <div class="methods-pay">
                                <div class="top-methods">
                                    <img src="img/cards/elo@2x.png" alt="">
                                    <img src="img/cards/visa@2x.png" alt="">
                                    <img src="img/cards/hipercard@2x.png" alt="">
                                    <img src="img/cards/mastercard@2x.png" alt="">
                                </div>
                                <div class="middle-methods">
                                    <div class="row">
                                        <ul class="col-md-6">
                                            <li><b>1x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>2x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>3x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>4x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>5x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>6x</b> de <b>R$ 189,90</b> sem juros</li>
                                        </ul>
                                        <ul class="col-md-6">
                                            <li><b>7x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>8x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>9x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>10x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>11x</b> de <b>R$ 189,90</b> sem juros</li>
                                            <li><b>12x</b> de <b>R$ 189,90</b> sem juros</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="top-methods">
                                    <img src="img/cards/boleto@2x.png" alt="">
                                </div>
                                <div class="middle-methods">
                                    <div class="row">
                                        <ul class="col-md-6">
                                            <li><b>1x</b> de <b>R$ 189,90</b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="" class="add-cart">
                        <div class="row">
                            <div class="col-md-6">
                                <select name="" class="select-product">
                                    <option value="" selected disabled>Cores</option>
                                    <option value="">Cor 01</option>
                                    <option value="">Cor 02</option>
                                    <option value="">Cor 03</option>
                                    <option value="">Cor 04</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="" class="select-product">
                                    <option value="" selected disabled>Tamanhos</option>
                                    <option value="">Tamanho 01</option>
                                    <option value="">Tamanho 02</option>
                                    <option value="">Tamanho 03</option>
                                    <option value="">Tamanho 04</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <input type="number" min="1" max="99" class="quant-produtos" name="" id="" value="1">
                            </div>
                            <div class="col-md-10">
                                <button class="btn btn-orange btn-full btn-add-cart">Adicionar ao carrinho</button>
                            </div>
                        </div>
                    </form>
                    <div class="row cep-estoque">
                        <div class="col-md-6 my-auto estoque">Estoque: <b>Disponível</b></div>
                        <div class="col-md-6 my-auto">
                            <div class="cep-search">
                                <div class="row">
                                    <input class="col-7 mask-cep" type="text">
                                    <button class="col-5" id="calcular-frete">Calcular</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="cep-results">
                                <div class="item-cep-results row">
                                    <div class="col-8">
                                        Correios - PAC
                                        <br>
                                        Chega entre 20 e 21 dias úteis
                                    </div>
                                    <div class="col-4 text-md-right">
                                        <b>R$29,90</b>
                                    </div>
                                </div>
                                <div class="item-cep-results row">
                                    <div class="col-8">
                                        Correios - PAC
                                        <br>
                                        Chega entre 20 e 21 dias úteis
                                    </div>
                                    <div class="col-4 text-md-right">
                                        <b>R$29,90</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 produto-descricao">
                    <div class="title">
                        <h1>Descrição</h1>
                        <div class="division"></div>
                    </div>
                    <div class="description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis a cras semper auctor neque vitae. Consectetur adipiscing elit ut aliquam. Lorem ipsum dolor sit amet. Senectus et netus et malesuada fames. Sit amet luctus venenatis lectus magna fringilla urna porttitor rhoncus. Neque gravida in fermentum et sollicitudin ac orci. Id venenatis a condimentum vitae sapien pellentesque habitant morbi. Erat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Purus semper eget duis at tellus at urna condimentum mattis.
                        </p>
                        <p>
                            Urna porttitor rhoncus dolor purus non. Ut placerat orci nulla pellentesque dignissim. In mollis nunc sed id semper risus in hendrerit. Dignissim convallis aenean et tortor at risus viverra. Eros donec ac odio tempor orci dapibus. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non. Dignissim sodales ut eu sem integer vitae. Elementum eu facilisis sed odio morbi quis. Donec enim diam vulputate ut pharetra sit amet aliquam. Ac ut consequat semper viverra.
                        </p>
                        <p>
                            <img src="https://dummyimage.com/1280x500/E7A5DE/131313">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-div">
        <div class="container">
            <div class="title">
                <h1>Produtos relacionados</h1>
                <div class="division"></div>
            </div>
            <div class="carousel-multiple row">
                <a class="col-12" href="#">
                    <div class="produto-item" style="width: 100% important">
                        <div class="produto-img" style="background-image: url('https://dummyimage.com/350x200/347EC4/131313')">
                            <div class="promo-off">
                                90% OFF
                            </div>
                        </div>
                        <div class="produto-infos">
                            <h2>Nome do produto</h2>
                            <h1><span class="promo-before">R$ 999,90</span> R$ 99,90</h1>
                            <h4>ou em até <b>10x</b> de<br><b>R$ 9,90</b> sem juros</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12" href="#">
                    <div class="produto-item" style="width: 100% important">
                        <div class="produto-img" style="background-image: url('https://dummyimage.com/350x200/E7A5DE/131313')">
                            <div class="promo-off">
                                90% OFF
                            </div>
                        </div>
                        <div class="produto-infos">
                            <h2>Nome do produto</h2>
                            <h1><span class="promo-before">R$ 999,90</span> R$ 99,90</h1>
                            <h4>ou em até <b>10x</b> de<br><b>R$ 9,90</b> sem juros</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12" href="#">
                    <div class="produto-item" style="width: 100% important">
                        <div class="produto-img" style="background-image: url('https://dummyimage.com/350x200/E45555/131313')">
                            <div class="promo-off">
                                90% OFF
                            </div>
                        </div>
                        <div class="produto-infos">
                            <h2>Nome do produto</h2>
                            <h1><span class="promo-before">R$ 999,90</span> R$ 99,90</h1>
                            <h4>ou em até <b>10x</b> de<br><b>R$ 9,90</b> sem juros</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12" href="#">
                    <div class="produto-item" style="width: 100% important">
                        <div class="produto-img" style="background-image: url('https://dummyimage.com/350x200/347EC4/131313')">
                            <div class="promo-off">
                                90% OFF
                            </div>
                        </div>
                        <div class="produto-infos">
                            <h2>Nome do produto</h2>
                            <h1><span class="promo-before">R$ 999,90</span> R$ 99,90</h1>
                            <h4>ou em até <b>10x</b> de<br><b>R$ 9,90</b> sem juros</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12" href="#">
                    <div class="produto-item" style="width: 100% important">
                        <div class="produto-img" style="background-image: url('https://dummyimage.com/350x200/E7A5DE/131313')">
                            <div class="promo-off">
                                90% OFF
                            </div>
                        </div>
                        <div class="produto-infos">
                            <h2>Nome do produto</h2>
                            <h1><span class="promo-before">R$ 999,90</span> R$ 99,90</h1>
                            <h4>ou em até <b>10x</b> de<br><b>R$ 9,90</b> sem juros</h4>
                        </div>
                    </div>
                </a>
                <a class="col-12" href="#">
                    <div class="produto-item" style="width: 100% important">
                        <div class="produto-img" style="background-image: url('https://dummyimage.com/350x200/E45555/131313')">
                            <div class="promo-off">
                                90% OFF
                            </div>
                        </div>
                        <div class="produto-infos">
                            <h2>Nome do produto</h2>
                            <h1><span class="promo-before">R$ 999,90</span> R$ 99,90</h1>
                            <h4>ou em até <b>10x</b> de<br><b>R$ 9,90</b> sem juros</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php include_once 'includes/footer.php' ?>
    <?php include_once 'includes/js.php' ?>

</body>

</html>