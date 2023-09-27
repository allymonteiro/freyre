<?php include_once 'includes/head.php'?>
<body  ng-controller="CartController as cart">
    <?php include_once 'includes/navbar.php'?>

    <div class="slider">
        <div class="carousel">
            <a class="item-carousel" href="#" style="background-image: url('https://dummyimage.com/1920x450/347EC4/131313')"></a>
            <a class="item-carousel" href="#" style="background-image: url('https://dummyimage.com/1920x450/E7A5DE/131313')"></a>
            <a class="item-carousel" href="#" style="background-image: url('https://dummyimage.com/1920x450/E45555/131313')"></a>
        </div>
    </div>
    <div class="categorias">
        <div class="container">
            <div class="row">
                <a class="col-md-4" href="#">
                    <div class="item-categoria" style="background-image: url('https://dummyimage.com/350x250/347EC4/131313')"></div>
                </a>
                <a class="col-md-4" href="#">
                    <div class="item-categoria" style="background-image: url('https://dummyimage.com/350x250/E7A5DE/131313')"></div>
                </a>
                <a class="col-md-4" href="#">
                    <div class="item-categoria" style="background-image: url('https://dummyimage.com/350x250/E45555/131313')"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="product-div">
        <div class="container">
            <div class="title">
                <h1>Mais vendidos</h1>
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
                            <h3>aqui </h3>
                            <span ng-click="cart.adicionar(1)">adicionar</span>
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
    <div class="product-div">
        <div class="container">
            <div class="title">
                <h1>Super ofertas</h1>
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
    <div class="categorias" style="margin-bottom: 40px;">
        <div class="container">
            <div class="row">
                <a class="col-md-6" href="#">
                    <div class="item-categoria" style="background-image: url('https://dummyimage.com/600x250/347EC4/131313')"></div>
                </a>
                <a class="col-md-6" href="#">
                    <div class="item-categoria" style="background-image: url('https://dummyimage.com/600x250/E7A5DE/131313')"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="product-div">
        <div class="container">
            <div class="title">
                <h1>Destaques</h1>
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
    <div class="instagram">
        <a class="title" href="#">
            <h1><b><i class="fab fa-instagram"></i></b><br>Siga nosso <b>Instagram</b></h1>
            <div class="division"></div>
        </a>
    </div>
    <div class="about">
        <div class="container">
            <div class="title">
                <h1>Quer conhecer nossa empresa?</h1>
                <div class="division"></div>
            </div>
            <p>Uma história inspiradora para os amantes da moda te espera, temos o que poucos conseguem, amor pelo que fazemos! Fazendo com excelência para clientes satisfeitos e na moda!</p>
            <br>
            <button class="btn btn-orange">
                Descubra
            </button>
        </div>
    </div>
    <?php include_once 'includes/footer.php'?>
    
    <?php include_once 'includes/js.php'?>
</body>
</html>