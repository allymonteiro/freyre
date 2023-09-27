    <!-- Scripts -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/popper.js"></script>
    <script type="text/javascript" src="../js/mask.js"></script>
    <script type="text/javascript" src="../js/validate.js"></script>
    <script type="text/javascript" src="../js/slick.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>

    <script>
        $("#open-menu").click(function() {
            $(".navbar-mobile-adm").addClass('open').removeClass('closed');
        });

        $("#close-menu").click(function() {
            $(".navbar-mobile-adm").addClass('closed').removeClass('open');
        });

        $(".navbar-mobile-adm a").click(function() {
            $(".navbar-mobile-adm").addClass('closed').removeClass('open');
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
    <!-- AngularFire -->
    <script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
    <script>
        var config = {
            apiKey: "AIzaSyAS2yJJYfuSmzfAOj9WJvYlyhcwV7QHASA",
            authDomain: "beercalc-d4202.firebaseapp.com",
            databaseURL: "https://beercalc-d4202.firebaseio.com",
            projectId: "beercalc-d4202",
            storageBucket: "beercalc-d4202.appspot.com",
            messagingSenderId: "669831479356",
            appId: "1:669831479356:web:1281497dd4b5ae65ec4339",
            measurementId: "G-DXJ5F5P689"
        };

        firebase.initializeApp(config);

        var app = angular.module("ecommerceApp", ["firebase"]);

        app.controller("ProductsCtrl", function($scope, $firebaseArray , $firebaseAuth) {
            var auth = $firebaseAuth();

            var ref_products = firebase.database().ref().child("products");
            var ref_brands = firebase.database().ref().child("brands");
            var ref_categories = firebase.database().ref().child("categories");

            $scope.products = $firebaseArray(ref_products);
            $scope.brands = $firebaseArray(ref_brands);
            $scope.categories = $firebaseArray(ref_categories);

            $scope.addProduct = function() {
                alert("Produto adicionado com sucesso")
                $scope.products.$add({
                    NAME: $scope.newProductName,
                    VALUE: $scope.newProductValue,
                    PRESENTATION_NAME : $scope.newProductName,
                    CODE : $scope.newProductCode
                });
            };

            $scope.addBrand = function() {
                alert("Marca adicionada com sucesso")
                $scope.brands.$add({
                    NAME: $scope.newBrandName
                });
            };

            $scope.addCategory = function() {
                alert("Categoria adicionada com sucesso")
                $scope.categories.$add({
                    NAME: $scope.newCategoryName
                });
            };

            
        });

    </script>