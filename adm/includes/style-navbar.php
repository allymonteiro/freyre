<style>
  .navbar-adm i {
      display: inline;
  }

  .navbar-adm {
    padding: 10px 0px 10px 0px;
    background-color: #fff;
    position: sticky;
    top: 0;
    z-index: 99999999999;
  }

  .navbar-adm img {
      width: 75px
  }

  .navbar-adm ul {
    list-style: none;
    margin-bottom: 0;
    text-align: right;
    margin-top: 0px;
  }

  .navbar-adm ul li {
    display: inline;
    margin-bottom: 0;
    margin-left: 20px;
  }

  .navbar-adm ul li a {
    color: black;
    text-decoration: none;
  }

  .navbar-adm ul li a:hover {
    color: var(--color02);
  }

  #open-menu {
    display: none;
    height: 50px;
    width: 50px;
    border: 0;
    background-color: var(--color02);
    color: var(--color01);
    font-size: 26px;
  }

  #close-menu {
    display: none;
    height: 50px;
    width: 50px;
    border: 0;
    background-color: var(--color02);
    color: var(--color01);
    font-size: 26px;
  }


  @media screen and (max-width: 760px) {
    #open-menu {
      display: block;
      position: absolute;
      top: 10px;
      border-radius: 5px;
      right: 20px;
    }
    
    #close-menu {
      display: block;
      position: absolute;
      top: 10px;
      border-radius: 10px;
      right: 10px;
    }
    
    .navbar-mobile-adm {
      width: 100%;
      height: 100vh;
      background-color: #fff;
      position: fixed;
      top: 0;
      left: 0;
    }
    
    .navbar-mobile-adm ul li {
      display: block;
      text-align: left;
      margin-left: 0;
      margin-top: 20px;
      font-size: 24px;
    }
    
    .navbar-mobile-adm ul {
      margin-left: -20px;
    }
    
    .navbar-mobile-adm {
      transform: translateX(-760px);
    }
    
    .open {
      animation: open .5s ease-in;
      -webkit-animation-fill-mode: forwards;
    }
    
    @keyframes open {
      0% {
        transform: translateX(-760px);
        box-shadow: 0px 0px 0px 0px rgba(0,0,0,0);
      }
      
      100% {
        transform: translateX(0px);
        box-shadow: 0px 0px 50px 100px rgba(0,0,0,0.5);
      }
    }
    
    .closed {
      animation: closed .5s ease-in;
      -webkit-animation-fill-mode: forwards;
    }
    
    @keyframes closed {
      0% {
        transform: translateX(0px);
        box-shadow: 0px 0px 50px 100px rgba(0,0,0,0.5);
      }
      
      100% {
        transform: translateX(-760px);
        box-shadow: 0px 0px 0px 0px rgba(0,0,0,0);
      }   
    }
  }
</style>