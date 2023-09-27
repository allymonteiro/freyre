<?php include_once 'includes/head.php' ?>
<body  ng-controller="CartController  as cart">
    <?php include_once 'includes/navbar.php' ?>
    <div class="container" style="margin-bottom: 40px; margin-top: 40px;">
        <div class="title">
            <h1>Acessar sua conta</h1>
            <div class="division"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="item-account">
                    <h1>Já tem uma conta?</h1>
                    <form >
                        <div class="item-form">
                            <label for="">e-Mail</label><br>
                            <input type="email" name="" id="" ng-model="cart.email_logar">
                        </div>
                        <div class="item-form">
                            <label for="">Senha</label><br>
                            <input type="password" name="" id="" ng-model="cart.password_logar">
                        </div>
                        <br>
                        <div class="item-form">
                            <span class="btn btn-orange btn-full">Acessar</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="item-account">
                    <h1>Não? Crie uma agora!</h1>
                    <form >
                        <div class="item-form">
                            <label for="">Nome completo</label><br>
                            <input type="text" name="" id="" ng-model="cart.nome">
                        </div>
                        <div class="item-form">
                            <label for="">e-Mail</label><br>
                            <input type="email" name="" id=""  ng-model="cart.email">
                        </div>
                        <div class="item-form">
                            <label for="">Senha</label><br>
                            <input type="password" name="" id=""  ng-model="cart.password">
                        </div>
                        <div class="item-form">
                            <label for="">Confirmar senha</label><br>
                            <input type="password" name="" id="">
                        </div>
                        <div class="item-form">
                            <label for="">CPF ou CNPJ</label><br>
                            <input type="text" name="" id="">
                        </div>
                        <br>
                        <div class="item-form">
                            <span class="btn btn-orange btn-full" ng-click="cart.createUser()">Criar conta</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'includes/footer.php' ?>
    <?php include_once 'includes/js.php' ?>

</body>

</html>