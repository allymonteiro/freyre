    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>    
    <div class="navbar-desktop">
        <div class="navbar-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 my-auto">
                        <img src="img/logo.png" alt="Freyre">
                    </div>
                    <div class="col-md-5 my-auto">
                        <div class="search">
                            <form action="">
                                <input type="text" placeholder="Pesquise por um produto">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 my-auto" style="margin-top: -5px;">
                        <div class="row cart-btn">
                            <div class="col-6 my-auto">
                                <div class="row">
                                    <div class="col-8 my-auto"><a href="#">Entre ou se<br>cadastre</a></div>
                                </div>
                            </div>
                            <a class="col-6 my-auto toggle-nav btn-nav" href="#">
                                <div class="row">
                                    <div class="col-4 my-auto"><i class="fas fa-shopping-cart" style="position: relative"><button class="quant-cart" disabled>0</button></i></div>
                                    <div class="col-8 my-auto"><b>Carrinho</b><br>{{cart.total |currency:"R$" }}</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-mobile">
        <div class="navbar-top">
            <div class="col-12">
                <div class="container">
                    <a class="top-item left" href="#">
                    <i class="fas fa-user-circle"></i>
                    </a>
                    <a class="top-item right" href="#">
                        <i class="fas fa-shopping-cart"><button class="quant-cart" disabled>0</button></i>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 my-auto">
                        <center><img src="img/logo.png" alt="Freyre"></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-top-sticky row">
            <div class="col-10 my-auto">
                <div class="search">
                    <form action="">
                        <input type="text" placeholder="Pesquise por um produto">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-2 my-auto">
                <button class="open-menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="navbar-bot" id="navbar-itens">
        <button class="close-menu">
            <i class="fas fa-times"></i>
        </button>
        <ul>
            <li class="actived"><a href="#">Início</a></li>
            <li><a href="#">Roupas</a></li>
            <li><a href="#">Prataria</a></li>
            <li><a href="#">Outros</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Sobre</a></li>
        </ul>   
    </div>
    
    <div class="sidebar-cart">
        <h1 style="margin: 0;">Carrinho</h1>
        <button class="close-sidebar-cart">X</button>
        <hr>
                    <ul class="list-unstyled">
                      <li class="clearfix" ng-repeat="produto in cart.carrinho track by $index" ng-show="produto.PRESENTATION_NAME">
                    <!-- <a href="" class="float-left">
                     <img src="img/foto.jpg" class="img-fluid" alt="" width="60">
                   </a> -->
                   <div class="oHidden">
                    <span class="close" ng-click="cart.removeItem($index)" ng-show='produto.VALUE > 0'><i class="ti-close"></i></span>
                    <span class="close" ng-click="cart.remove_desconto($index,produto.VALUE)" ng-show='produto.VALUE < 0'><i class="fas fa-close"></i></span>
                    <h4><a href="#">{{produto.PRESENTATION_NAME}}</a></h4>
                    <p class="text-white-gray" ng-show='produto.VALUE > 0'><strong>{{produto.VALUE}}</strong></p>
                    <p class="text-white-gray" ng-show='produto.VALUE < 0'><strong>Desconto de {{produto.VALUE*-1}}</strong></p>
                  </div>
                </li>
                <!--/cart item-->
                <span ng-show="online">
                  <hr>
         
                      </span>
                      <li>
                        <div class="center-text">
                          <h5 class="text-white-gray">Fechar compra:</h5>
                          <h3 class="text-white-gray" id="valor_total_carrinho"> Total : {{cart.total |currency:"R$" }}</h3>
                        </div>
                        
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="form-paypal">
                          <!--Tipo do botão-->
                          <input type="hidden" name="cmd" value="_xclick" />
                          <!--Vendedor e URL de retorno, cancelamento e notificação-->
                          <input type="hidden" name="business" value="contasapagar-facilitator@benjaminapadaria.com.br" />
                          <input type="hidden" name="return" value="https://benjamin-a-padaria.herokuapp.com/compra/retorno/{{cart.hash_email_cliente}}" />
                          <input type="hidden" name="cancel" value="https://benjamin-a-padaria.herokuapp.com/compra/cancelamento/{{cart.hash_email_cliente}}" />
                          <input type="hidden" name="notify_url" value="https://benjamin-a-padaria.herokuapp.com/compra/notificacao" />
                          <!--Internacionalização e localização da página de pagamento-->
                          <input type="hidden" name="charset" value="utf-8" />
                          <input type="hidden" name="lc" value="BR" />
                          <input type="hidden" name="country_code" value="BR" />
                          <input type="hidden" name="currency_code" value="BRL" />
                          <input type="hidden" name="tx" value="{{cart.hash_email_cliente}}">
                          <input type="hidden" name="payer_id" value="{{cart.hash_email_cliente}}">
                          <input type="hidden" name="invoice" value="{{cart.hash_email_cliente}}@{{cart.cart_ci}}">
                          <input type="hidden" name="custom" value="{{cart.hash_email_cliente}}">
                          <input type="hidden" name="at" value="{{cart.hash_email_cliente}}">
                          <!--Informações sobre o produto e seu valor-->
                          <input type="hidden" name="amount" value="{{cart.total}}" />
                          <input type="hidden" name="item_name" value="Servico" />
                          <input type="hidden" name="quantity" value="1" />
                          <input type="hidden" name="item_number_1" value="bolinho" />
                          <input type="hidden" name="item_number_2" value="Sonho" />
                          <!--Botão para submissão do formulário-->
                          <!--<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" ng-show="cart.email_cliente"/> -->
                         <input type="submit" value="Pagar Paypal" class="btn btn-primary"  border="0"/ ng-show="online" ng-click="cart.limpaCarrinho()"> <!--
                         <button class="btn btn-primary popup-content menu-btn" href="#popup-bencreditos">Bencréditos</button>-->
                         <!--input type="button" value="Pagar bencreditos" class="btn btn-primary"  border="0"/ ng-click="cart.validar_creditos()" ng-show="cart.email_cliente && online"-->
                       </form>
                     </li>
                   </ul>  
    </div>

