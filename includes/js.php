    <!-- Scripts -->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/mask.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>

<!-- AngularFire -->
<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
<script type="text/javascript">
  // Initialize Firebase
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
</script>
  <script src="js/crypto.js"></script>
  <script type="text/javascript">
   var nome_importado = "Benjamin";
   var endereco_site = "https://ezcommerce.herokuapp.com/";
 </script>
 <script type="text/javascript">

 	var cores = new Array();
   	cores = {
	    0:"green",
	    1:"blue",
	    2:"black",
	    2:"red"
	  };

   var produtos = new Array();
   produtos[0] = {
    "CODE":0,
    "VALUE":1000.00,
    "NAME" : "GUITAR",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Guitarra eletrica"   
  };
  produtos[1] = {
    "CODE":1,
    "VALUE":190.00,
    "NAME" : "GUITARRA VINTAGE",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Guitarra vintage"   
  };
  produtos[2] = {
    "CODE":2,
    "VALUE":1114.00,
    "NAME" : "Guitarra vintage",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Guitarra Vermelha"   
  };
  produtos[3] = {
    "CODE":3,
    "VALUE":17.00,
    "NAME" : "Bateria",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Bateria"   
  };
  produtos[4] = {
    "CODE":4,
    "VALUE":6.49,
    "NAME" : "Bateria 360",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Bateria 360"   
  };
  
  produtos[5] = {
    "CODE":5,
    "VALUE":14.90,
    "NAME" : "Bateria Iniciante",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Bateria Iniciante"   
  };
  produtos[6] = {
    "CODE":6,
    "VALUE":2.99,
    "NAME" : "Baixo Eletrico",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Baixo Eletrico"   
  };
  
  produtos[7] = {
    "CODE":7,
    "VALUE":11.00,
    "NAME" : "Baixo digital",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Baixo digital"   
  };
  
  produtos[8] = {
    "CODE":8,
    "VALUE":14.00,
    "NAME" : "Baixo",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Baixo"   
  };
  
  produtos[9] = {
    "CODE":9,
    "VALUE":14.90,
    "NAME" : "SANDUI COM QUEI e PRES e TOM",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Sanduiche natural com queijo , presunto e tomate"   
  };
  
  produtos[10] = {
    "CODE":10,
    "VALUE":14.90,
    "NAME" : "SANDUI COM QUEI e PRES e TOM e ALF",
    "QTD" : 1,
    "PRESENTATION_NAME" : "Sanduiche natural com queijo , presunto , tomate e tomate"   
  };

  produtos[11] = {
    "CODE":111,
    "VALUE":30.0,
    "NAME" : "COMB 10 PAO Q",
    "QTD" : 10,
    "PRESENTATION_NAME" : "Combo 10 paẽs de queijo $30,00"   
  };

  produtos[12] = {
    "CODE":112,
    "VALUE":60.00,
    "NAME" : "COMB 30 CAFE",
    "QTD" : 30,
    "PRESENTATION_NAME" : "Combo 30 café $60,00"   
  };

  produtos[13] = {
    "CODE":1020,
    "VALUE":-1,
    "NAME" : "1 BENCREDITOS",
    "QTD" : 1,
    "PRESENTATION_NAME" : "1 Bencrédito"   
  };

  produtos[14] = {
    "CODE":1021,
    "VALUE":-10,
    "NAME" : "10 BENCREDITOS",
    "QTD" : 1,
    "PRESENTATION_NAME" : "10 Bencréditos"   
  };
  
  
  var catalogo = new Array();
  catalogo[0] = [1,2,3];
  catalogo[1] = [1,2];
  
  var campanhas = []
  campanhas[0] = {
    "CODE":0,
    "NAME" : "Guitarras",
    "DESCRIPTION" : "nossos Croissants" ,
    "PRODUCTS" : [0,1,2]
    
  };
  campanhas[1] = {
    "CODE":1,
    "NAME" : "Baterias",
    "DESCRIPTION" : "nossos Baterias" ,
    "PRODUCTS" : [3,4,5]
    
  };
  
  campanhas[2] = {
    "CODE":2,
    "NAME" : "Baixos",
    "DESCRIPTION" : "nossos Baixos" ,
    "PRODUCTS" : [6,7,8]
    
  };

  var toastr = {
  	success : function(msg){
  		alert(msg);
  	}
  }
  
  var campanhas_lojas = [];
  campanhas_lojas[0] = [0,1,2];
  campanhas_lojas[2] = [1];
  campanhas_lojas[3] = [2];
  
  function getLocalData(name){
    return localStorage.getItem(name)
  }
  
  function setLocalData(name,value){
    if (value!=null)
      localStorage.setItem(name,value);
    else
      localStorage.removeItem(name);
  }
  
  
    var cartObj = null; // global pointer to cart
    var cartCI = -1;
    var str_botoes = '';
    
    
    function cart_initCart() {
      cartObj = new Array();
      cartCI = 0;
          // Check in browser memory if there are a saved cart
          if (getLocalData("BENJAMIN_USERCART")!=null){
          // if previoys cart is present load it
          cartCI = getLocalData("BENJAMIN_USERCART_CI");
          cartObj = JSON.parse(getLocalData("BENJAMIN_USERCART"));
          user_vault = JSON.parse(getLocalData("BENJAMIN_USER_VAULT"));
          console.log(cartObj);
        }else{
          console.log("\t[CART-BENJAMIN] Carrinho esta vazio!");
        }
      }
      
      
      
      function cart_removeCartRow_v2(rowid){
        cartObj = JSON.parse(getLocalData("BENJAMIN_USERCART"));
          cartObj[rowid]=null; // sign row as invalid
          cartObj = cartObj.filter(function(x) { return x !== null }); 
          setLocalData("BENJAMIN_USERCART",JSON.stringify(cartObj));
        }
        
        
        
        angular.module('app',["firebase"])
        .service('ngCopy', ['$window', function ($window) {
          var body = angular.element($window.document.body);
          var textarea = angular.element('<textarea/>');
          textarea.css({
            position: 'fixed',
            opacity: '0'
          });
          
          return function (toCopy) {
            textarea.val(toCopy);
            body.append(textarea);
            textarea[0].select();
            
            try {
              var successful = document.execCommand('copy');
              if (!successful) throw successful;
            } catch (err) {
              window.prompt("Copy to clipboard: Ctrl+C, Enter", toCopy);
            }
            
            textarea.remove();
          }
        }])
        .directive('ngClickCopy', ['ngCopy', function (ngCopy) {
          return {
            restrict: 'A',
            link: function (scope, element, attrs) {
              element.bind('click', function (e) {
                ngCopy(attrs.ngClickCopy);
              });
            }
          }
        }])
        .filter('trustAsHTML', ['$sce', function($sce){
          return function(text) {
            return $sce.trustAsHtml(text);
          };
        }])
        .run(function($window, $rootScope) {
         $rootScope.online = navigator.onLine;
         $window.addEventListener("offline", function () {
           $rootScope.$apply(function() {
             $rootScope.online = false;
           });
         }, false);
         $window.addEventListener("online", function () {
           $rootScope.$apply(function() {
             $rootScope.online = true;
           });
         }, false);
       })
        .controller('CartController', function($sce,$http,$firebaseAuth) {
        	//alert("foi");

          var auth = $firebaseAuth();
          var cart = this;
          cart.cores = cores;
          cart.produtos = produtos;
          cart.catalogo = catalogo;
          cart.campanhas = campanhas;
          cart.campanhas_lojas = campanhas_lojas;
          cart.carrinho = JSON.parse(getLocalData("BENJAMIN_USERCART"));
          cart.cart_ci = JSON.parse(getLocalData("BENJAMIN_USERCART_CI"));
          cart.user_vault = JSON.parse(getLocalData("BENJAMIN_USER_VAULT"));
          cart.email_cliente = getLocalData("BENJAMIN_USERCART_EMAIL");
          cart.logged_user_friends = JSON.parse(getLocalData("BENJAMIN_USERCART_LOGGED_USER_FRIENDS"));
          cart.logged_user = JSON.parse(getLocalData("BENJAMIN_USERCART_LOGGED_USER"));
          cart.total_descontos = getLocalData('total_descontos')?parseFloat(getLocalData('total_descontos')):0;
              //if(cart.logged_user.wallet)
              cart.creditos_disponiveis = cart.logged_user?cart.logged_user.wallet:0;
              
              
              function getQueryParams(qs) {
                //alert(qs);
                if (qs != "") {
                  qs = qs.replace("?","");
                  qs = qs.split('=');
                  console.log(qs);
                  if(qs[0]=="usuario"){
                    if(cart.logged_user){
                   //  if(cart.email_cliente)
                   var hash_email_cliente = Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"));
                   $http.get('/conectar/'+qs[1]+'/'+hash_email_cliente).then(function(data){
                    cart.nome_indicado = data.data.name;
                  });
                   jQuery('#modal-conectar').modal('show');
                 }else{
                  cart.hash_indicado = qs[1];
                  jQuery('#modal-registrar-indicado').modal('show');
                }
              }else if(qs[0]=="registrado"){
                jQuery('#modal-logar-registrado').modal('show');
              }
              return qs;
            }else
            return "";
            
          }

        // query = getQueryParams(document.location.search);
        //alert(query);

        getQueryParams(document.location.search);

        

        if(cart.email_cliente)
          cart.hash_email_cliente = Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"));
        
        function addItemInCart(code){
          var newRow = new Object();
          newRow["CODE"] = code;
          newRow["PRESENTATION_NAME"] = produtos[code].PRESENTATION_NAME;
          newRow["VALUE"] = produtos[code].VALUE;
          newRow["QTD"] = produtos[code].QTD;
          
          console.log(newRow);
          
          if (cartObj==null){
            cartObj = [];
          }
          
          console.log(cartObj);
          cartObj[cartCI++] = newRow;
          console.log(cartObj);
          
          setLocalData("BENJAMIN_USERCART",JSON.stringify(cartObj));
          setLocalData("BENJAMIN_USERCART_CI",cartCI);

          
        }


        
        function carrinho_local() {
          cartObj = JSON.parse(getLocalData("BENJAMIN_USERCART"));
          console.log(cartObj);
          
          var carrinho = new Array();
          var grand_total = 0;
          for (var xr in cartObj){
            if (cartObj[xr]==null) continue;
            
            grand_total+=parseFloat(cartObj[xr].VALUE);
          }
          
          return grand_total;
        }

        cart.logoff = function(){
	      localStorage.setItem("logado",false);
	      localStorage.setItem("usuario" ,{});
	      localStorage.setItem("foto", "");
	      localStorage.clear();
	      cart.logado = false;
	      cart.foto_logado = '';
	      cart.nome_logado = "visitante";
	      var auth = $firebaseAuth();
	      auth.$signOut();
	      window.location.replace('/');
	      document.location.href = '/';
		}
				

		  // login with Facebook
		  cart.login_facebook = function(){
		      var auth = $firebaseAuth();
		      var provider = new firebase.auth.FacebookAuthProvider();
		      provider.addScope("public_profile");
		      //provider.addScope("age_range");
		      provider.addScope("user_location");
		      provider.addScope('user_photos');
		      provider.addScope('user_friends');
		      provider.addScope('user_posts');
		   //   provider.addScope('publish_actions');
		      auth.$signInWithPopup(provider).then(function(firebaseUser) {
		        cart.usuario_logado = firebaseUser.user;
		        console.log("Logado como :", firebaseUser.user.displayName);
		        console.log(firebaseUser);
		        localStorage.setItem("usuario" , JSON.stringify(firebaseUser.user));
		        localStorage.setItem("foto" , firebaseUser.user.photoURL);
		        localStorage.setItem("access_token" , firebaseUser.credential.accessToken);
		        cart.foto_logado = firebaseUser.user.photoURL;
		        cart.nome_logado = firebaseUser.user.displayName;
		        localStorage.setItem("logado" , true);
		        cart.logado = true;
		        console.log(cart.usuario_logado);
		        //var meu_profile = firebase.database().ref().child("profile/"+cart.usuario_logado.providerData[0].uid);
		        var profile = $firebaseArray(meu_profile);

		              cart.profile = profile;

		            /*  cart.profile.$loaded(function() {
		                if(cart.profile.length == 0){
		                    cart.profile.$add({
		                      nome : firebaseUser.user.displayName,
		                      firebase_uid:firebaseUser.user.uid,
		                      fb_uid:cart.usuario_logado.providerData[0].uid,
		                      equipe:{},
		                      manager:0,
		                      criado : new Date().getTime()
		                    });
		                }else{
		                  alert("Bem vindo de Volta !");
		                  $state.go("/home");
		                }
		              });
		              window.location = '#!/home';
		              $state.go("/home");*/
		              alert("logado com o facebook");

		      }).catch(function(error) {
		        console.log("Authentication failed:", error);
		      });

		    }
        
        cart.change_vouchers = function() {
          console.log(cart.total_vouchers);
          setLocalData("BENJAMIN_TOTAL_VOUCHERS",cart.total_vouchers);
        };
        
        cart.add_origin = function(id){
          addItemInCart(id);
          cart.total = carrinho_local();
          cart.carrinho = JSON.parse(getLocalData("BENJAMIN_USERCART")); 
          navigator.vibrate([1000]);

        }

        cart.adicionar = function(id) {
          cart.add_origin(id);
          toastr.success('Seu Produto Esta no Seu Carrinho!', 'Produto Adicionado!');
        };

        cart.adicionar_desconto = function(id,valor) {
          cart.total_descontos = parseFloat(cart.total_descontos)+parseFloat(valor);
          cart.creditos_disponiveis = cart.creditos_disponiveis-valor;
          setLocalData('total_descontos',cart.total_descontos);
          cart.add_origin(id);
          toastr.warning('Você Descontou do Seu Carrinho!', 'Desconto Adicionado!');
        };
        

        cart.removeItem = function(id){
          cart_removeCartRow_v2(id);
          cart.total = carrinho_local();
          cart.carrinho = JSON.parse(getLocalData("BENJAMIN_USERCART"));
        }

        cart.limpaCarrinho = function(){
          cart_initCart();
        }
        
        cart.remove_desconto = function(id,valor){
          cart.total_descontos = parseFloat(cart.total_descontos)+parseFloat(valor);
          cart.creditos_disponiveis = cart.creditos_disponiveis-valor;
          setLocalData('total_descontos',cart.total_descontos);
          cart_removeCartRow_v2(id);
          cart.total = carrinho_local();
          cart.carrinho = JSON.parse(getLocalData("BENJAMIN_USERCART"));
        }

        cart.validar_creditos = function(){

          if(!cart.hash_email_cliente){
            alert("voce nao esta logado");
            return false;
          }


          $http.post('/voucher/confirma', {"user_token":cart.hash_email_cliente,
            "total_descontos":cart.total_descontos}).then(function (response) {
              var resposta = response.data;

              
              console.log(resposta);
              navigator.vibrate([1000]);
              if(resposta.response == 1){
                if(cart.total <= 0){
                  alert("seu carrinho ta pago!");
                  window.location.replace("/compra/retorno/"+cart.hash_email_cliente);
                }else{
                  $("#form-paypal").submit();

                }

              }else{
                console.log(resposta);
                toastr.error('Nao conseguimos descontar seus creditos!', resposta.msg);
              }
              
            }, function (response) {
             console.log(response);
                     // body...
                   });
          }

          cart.pega_email_registrado = function(){
               // alert("teste");
               // alert(jQuery("#email_registrado").val());
               jQuery("#email").val(jQuery("#email_registrado").val());
               cart.pega_email();
             }
             
             cart.pega_email = function(){
              //var email = prompt("Qual é o seu email?");
              var email = jQuery("#email_registrado").val();
              
              //if (email.toLowerCase() == "escorpião") {
                //var hash = Crypto.MD5(email);
                
                jQuery.post('/carregar_dados', {'email':email}).
                done(function(data){
                 var dados = JSON.parse(data);
                 if (!dados.response) {
                  alert('Você não logou!', 'Falha no login!');
                  //toastr.error('Você não logou!', 'Falha no login!');
                  return false;
                }
                var usuario = JSON.parse(dados.usuario);
                if(dados.amigos)
                  usuario['amigos'] = dados.amigos;
                console.log(usuario);
                cart.logged_user = usuario;
                if(usuario.name){
                     //console.log(dados.name);
                     setLocalData("BENJAMIN_USERCART_LOGGED_USER",dados.usuario);
                     if(dados.amigos)
                      setLocalData("BENJAMIN_USERCART_LOGGED_USER_FRIENDS",JSON.stringify(dados.amigos));
                    
                    //toastr.success('Seus dados foram alterados!', 'Dados foram salvos!');
                   // alert('Seus dados foram alterados!', 'Dados foram salvos!');
                    setLocalData("BENJAMIN_USERCART_EMAIL",email);
                    var hash_email_cliente = Crypto.MD5(email);
                    var hash_email_cliente = usuario.user_token;
                  //  jQuery('#qrcode-profile').qrcode({width: 100,height: 100,text:endereco_site+"pocket.html?usuario="+hash_email_cliente });

                    cart.email_cliente = email;
                    if(dados.amigos)
                      cart.logged_user_friends = dados.amigos;

                    cart.hash_email_cliente = hash_email_cliente;
                    //jQuery('#popup-login').modal('hide');
                   // alert("logado com sucesso");
                    window.location.reload();
                    
                    // jQuery('#popup-login').hide();
                  }else{
                   //toastr.error('Seus dados nao foram alterados!', 'Dados nao foram salvos!');
                  alert('Seus dados nao foram alterados!', 'Dados nao foram salvos!');
                   
                 }
                 
               })
                //alert(email);
                //alert(hash);
              //  }
              
              //alert("vai validar "+email+hash);
              
            }
            
            cart.modal_search = function(){
             console.log(cart.filtro);
             if(cart.filtro){
               $('#modal-search').modal('show');
             }else{
               $('#modal-search').modal('hide');
             }
             
           }
           
           cart.mostra_registrar = function () {
                  // body...
                  jQuery("#form-login").slideUp();
                  jQuery("#form-register").slideDown();
                }

                cart.logoff = function () {
					setLocalData("BENJAMIN_USERCART_LOGGED_USER",null);
					setLocalData("BENJAMIN_USERCART_LOGGED_USER_FRIENDS",null);
					setLocalData("BENJAMIN_USERCART_EMAIL",null);
					window.location.reload();
                }

                cart.modal_transferir = function(amigo){
                  console.log(amigo);
                  $('#modal_transferir').modal('show');
                }
                
                cart.getFormData = function ($form){
                 var unindexed_array = $form.serializeArray();
                 var indexed_array = {};
                 
                 $.map(unindexed_array, function(n, i){
                   indexed_array[n['name']] = n['value'];
                 });
                 
                 return indexed_array;
               }
               
               
               
               
               cart.registrar_usuario = function(){
               	
                 //var usuario = jQuery("#formulario-registro").serializeArray();
                 var $form = jQuery("#form_data");
                 var usuario ={"name":jQuery("#name").val(),"parent":jQuery("#hash_indicado").val(), "email":jQuery("#email_registro").val(), "password":jQuery("#password").val()};
                 $http.post("/registrar_usuario",{"usuario":usuario}).then(function (response) {
                  var resposta = response.data;

                  if(resposta.status == 1){
                    var date = new Date();  
                    var btn_logar ='<a href="/pocket.html?registrado='+ date.getTimezoneOffset()+'" class="btn btn-primary">Logar<a>';
                   // toastr.success('Usuario registrado', resposta.mensagem);
                   // jQuery('#popup-login').modal('hide');
                  //  jQuery(".popup-login-form").html('<span id="resposta_registro">'+resposta.mensagem+"</span><br>"+btn_logar);
                 //   jQuery("#form-login").slideUp();
                    window.location.reload();
                  }else{
                    alert('Usuario não foi registrado', resposta.mensagem);
                   // toastr.error('Usuario não foi registrado', resposta.mensagem);
                  }
                     // body...
                     console.log(response);
                   }, function (response) {
                     console.log(response);
                     // body...
                   });
               }
               
               cart.total = carrinho_local();
               cart_initCart (); 

                cart.createUser = function() {
                    cart.message = null;
                    cart.error = null;
                    // Create a new user
                    auth.$createUserWithEmailAndPassword(cart.email, cart.password)
                    .then(function(firebaseUser) {
                        firebaseUser.updateProfile({
                              displayName: cart.nome
                            }).then(function() {
                              // Update successful.
                              console.log("Atualizado");
                            }, function(error) {
                              // An error happened.
                              console.log("nao atualizado");
                          });
                            console.log("Signed in as:", firebaseUser);
                        cart.message = "User created with uid: " + firebaseUser.uid;
                    }).catch(function(error) {
                        cart.error = error;
                    });
                };


                cart.logar = function() {
                    cart.firebaseUser = null;
                    cart.error = null;

                    auth.$signInWithEmailAndPassword(cart.email_logar, cart.password_logar).then(function(firebaseUser) {
                        console.log("Signed in as:", firebaseUser.displayName);
                        cart.firebaseUser = firebaseUser;
                    }).catch(function(error) {
                        cart.error = error;
                    });
                };
               
             });



          /*if ('serviceWorker' in navigator) {
             navigator.serviceWorker.register('offline-service-worker.js');
           }*/
         </script>