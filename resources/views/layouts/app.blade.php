<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Wood Stone</title>

    <!-- Optional theme -->

    <link rel="stylesheet" href="assets/js/jquery-modal/jquery.modal.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="assets/css/portBox.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Latest compiled and minified JavaScript -->

    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-modal/jquery.modal.min.js"></script>
    <script src="assets/js/jquery.payment.js"></script>

    <script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="assets/js/portBox.slimscroll.min.js"></script>

    <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/util.validate.js"></script>
    <script type="text/javascript" src="assets/js/jquery.maskedinput.min.js"></script>


</head>
<body>

<div class="container">

    <div class="main">

        <section class="container-edit nopadding" >

            <header>
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo float-left">
                            <a>
                                <img src="data:image/svg+xml;base64, PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNjUwLjAxcHgiIGhlaWdodD0iMTI2LjQ0M3B4IiB2aWV3Qm94PSIwIDAgNjUwLjAxIDEyNi40NDMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDY1MC4wMSAxMjYuNDQzIg0KCSB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIGZpbGw9IiNGRjQ2MDAiIGQ9Ik0yMzYuOTEyLDk3LjQ3NWMtMTguNDE0LDAtMzIuMzM3LTEzLjAyNS0zMi4zMzctMzMuNjg1YzAtMjAuNjYsMTQuMzcyLTM0LjEzNCwzMi41NjItMzQuMTM0DQoJCWMxOC40MTQsMCwzMi4zMzYsMTMuMjQ5LDMyLjMzNiwzMy42ODRDMjY5LjQ3Myw4NC4wMDEsMjU1LjMyNiw5Ny40NzUsMjM2LjkxMiw5Ny40NzUgTTM5My42NTYsNTIuMzM4DQoJCWMtNi45NjIsMi4yNDYtMTAuNTU1LDQuOTQtMTAuNTU1LDEwLjc3OWMwLDcuNjM1LDUuMTY1LDkuNjU2LDEyLjgwMSwxMS4wMDNjNi4yODcsMS4xMjMsMTYuMTY4LDIuOTIsMTYuMTY4LDEyLjgNCgkJYzAsOC4wODYtNy42MzUsMTEuMDA1LTE1LjI3MSwxMS4wMDVoLTQwLjQyMWMtMi4wMjEsMC0zLjM2OC0xLjM0OC0zLjM2OC0zLjM2OVYzMi41NzZjMC0yLjAyMSwxLjM0OC0zLjM2OCwzLjM2OC0zLjM2OGgzMy42ODUNCgkJYzguNTMzLDAsMTUuNDk1LDIuNjk1LDE1LjQ5NSwxMS4wMDRDNDA1LjU1OCw0Ny42MjIsMzk5LjQ5NCw1MC41NDEsMzkzLjY1Niw1Mi4zMzggTTMyMC44OTgsMTcuNTMxdjkyLjA3DQoJCWMwLDEwLjc3OSw2LjA2MywxNi44NDIsMTYuODQyLDE2Ljg0Mmg1OC44MzVjMjkuODY3LDAsNDYuOTM0LTEzLjI0OSw0Ni45MzQtMzUuOTNjMC0xMy45MjItNS44MzktMjMuODAzLTE4Ljg2My0zMC4wOTENCgkJYzguMzA5LTYuMjg4LDEyLjM1MS0xNS4wNDYsMTIuMzUxLTI1LjZjMC0yMS4zMzMtMTUuMjctMzQuMTMzLTQ0LjIzNy0zNC4xMzNIMzM3Ljc0QzMyNi45NiwwLjY4OSwzMjAuODk4LDYuNzUyLDMyMC44OTgsMTcuNTMxDQoJCSBNMTYuMzkzLDEyNy41NjZjOS42NTYsMCwxNi4zOTMtNi43MzcsMTYuMzkzLTE2LjYxOFY0My4zNTVsMzUuNDgsMjEuMTA5YzEuNTcyLDAuODk4LDQuMjY3LDIuNDcsOC4zMDksMi40Nw0KCQljMy41OTMsMCw2LjczNy0xLjc5Niw3Ljg2LTIuNDdsMzUuOTMtMjEuNTU5djY3LjM2OWMwLDEyLjEyNiw4LjA4NCwxNy4yOTEsMTYuMzkzLDE3LjI5MWM5LjY1NiwwLDE2LjM5My02Ljk2MSwxNi4zOTMtMTYuNjE4DQoJCVYxNi4xODNjMC0xMC43NzgtNi45NjItMTUuNzE5LTE1LjcyLTE1LjcxOWMtMi45MTksMC01LjYxNCwwLjY3NC04LjMwOCwyLjI0Nkw3OC44MjEsMzEuOTAzYy0xLjEyMywwLjY3My0xLjc5NywwLjY3My0yLjkyLDANCgkJbC01MS4yLTI4Ljk2OWMtMi42OTQtMS41NzEtNS4zODktMi40Ny04LjUzMy0yLjQ3QzcuNDEsMC40NjQsMCw1LjQwNSwwLDE2LjYzM3Y5My42NDJDMCwxMjEuMjc4LDYuOTYxLDEyNy41NjYsMTYuMzkzLDEyNy41NjYNCgkJIE02NDYuMjg3LDI2LjA2NGMyLjQ3Mi0zLjgxNywzLjU5NS03LjQxLDMuNTk1LTExLjAwM2MwLTQuNzE2LTIuMjQ2LTguNzU4LTYuMDY0LTExLjQ1M2MtMy4xNDUtMi4yNDUtNi41MTItMy4zNjgtOS42NTYtMy4zNjgNCgkJYy00LjkzOSwwLTkuNjU2LDIuNDctMTMuNDczLDcuNDFsLTM3LjA1Myw0OC43M2MtNi43MzcsOC45ODMtMTEuNDUzLDE2LjYxOC0xMS40NTMsMjguNzQ0djI1LjE1MQ0KCQljMCwxMi4xMjYsOC4wODQsMTcuMjkxLDE2LjM5MywxNy4yOTFjOS42NTYsMCwxNi42MTgtNi45NjEsMTYuNjE4LTE2LjYxOFY4Mi44NzhjMC0xLjc5NywwLjQ0OS0zLjE0NSwxLjU3Mi00LjcxN0w2NDYuMjg3LDI2LjA2NHoNCgkJIE01NTkuMzgxLDcuNjVsMTcuNTE3LDIyLjkwNWMzLjE0NCw0LjA0Myw0LjI2Nyw3Ljg2LDQuMjY3LDExLjIyOWMwLDQuNDkxLTIuNDcxLDguNTMzLTYuMjg4LDExLjQ1Mg0KCQljLTIuOTE5LDIuMjQ2LTYuMjg4LDMuNTkzLTkuMjA3LDMuNTkzYy00LjcxNiwwLTkuMjA3LTIuNjk1LTEzLjI0OS03LjYzNWwtMTguNDE0LTIyLjQ1NmMtMi45Mi0zLjU5My00LjI2Ny03LjE4Ni00LjI2Ny0xMC43NzkNCgkJYzAtNC40OTEsMi40Ny04Ljk4Miw2LjA2My0xMS45MDJjMi45Mi0yLjQ3LDYuNTEzLTMuODE3LDkuODgxLTMuODE3QzU1MC42MjQsMC4yNCw1NTUuNTY1LDIuNzEsNTU5LjM4MSw3LjY1IE01NDAuNTE5LDk1LjIyOQ0KCQloLTQ1LjgxMWMtMi4wMjEsMC0zLjM2OC0xLjM0Ny0zLjM2OC0zLjM2OFYxNy4zMDZjMC0xMi4xMjYtOC4wODQtMTcuMjkxLTE2LjM5NC0xNy4yOTFjLTkuNjU2LDAtMTYuNjE3LDYuOTYyLTE2LjYxNywxNi42MTgNCgkJdjkyLjk2OGMwLDEwLjc3OSw2LjA2MywxNi44NDIsMTYuODQyLDE2Ljg0Mmg2NC42NzRjMTIuMTI3LDAsMTcuMjkyLTcuMTg2LDE3LjI5Mi0xNS40OTUNCgkJQzU1Ny4xMzcsMTAxLjI5Miw1NTAuMTc0LDk1LjIyOSw1NDAuNTE5LDk1LjIyOSBNMjM2LjkxMiwxMjcuNTY2YzM3LjI3NywwLDY2LjI0Ni0yNy44NDYsNjYuMjQ2LTY0LjIyNQ0KCQljMC0zNi42MDMtMjguMjk1LTYzLjc3NS02NS43OTctNjMuNzc1Yy0zNy4yNzcsMC02Ni40NywyNy44NDYtNjYuNDcsNjQuNDQ5QzE3MC44OTEsMTAwLjYxOSwxOTkuNDEsMTI3LjU2NiwyMzYuOTEyLDEyNy41NjYiLz4NCjwvZz4NCjwvc3ZnPg0K" width="120" alt="Mobly | Sua loja de móveis e artigos de decoração">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="btn-card float-right">
                            <div class="col-md-8 search float-right nopadding">
                                <input type="text" placeholder="Busca" >
                                <span class="glyphicon glyphicon-search white pull-right hover" aria-hidden="true" ></span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <article>
                <div class="row col-md-12 nopadding" >
                    <div class=" col-md-2 menu-lateral nopadding">
                        <div class="menu-tipo menus">
                            <ul>
                                <li> <img src="assets/img/circle.png" width="17"> <b class="car-red">TODOS</b></li>
                                <li> <img src="assets/img/circle3.png" width="17"> <b class="car-grey"> VITAMINAS</b></li>
                                <li> <img src="assets/img/circle3.png" width="17"> <b class="car-grey">ESTIMULANTES SEXUAIS</b></li>
                                <li> <img src="assets/img/circle3.png" width="17"> <b class="car-grey">EMAGRECIMENTO</b></li>
                            </ul>
                        </div>

                        <div class="menu-tipo carrinho">
                            <ul>
                                <li><img src="assets/img/circle2.png" width="17"> <b class="car-orange" style="font-size: 12px">CARRINHO DE COMPRAS</b></li>
                                <li>

                                    <ul class="prod vazio">
                                        <b class="car-red ">O Carrinho esta vazio</b>
                                    </ul>

                                    <ul>
                                        <li>
                                            <div class="row car-content">


                                            </div>

                                            <ul class="prod">

                                                <li class="car-desc total hidden">
                                                    <p class="nopadding car-grey margin-top-10"><small>Sub-total</small></p>
                                                    <p class="nopadding margin-top-5 car-orange font-size-15"><small>R$</small><small id="sub-total">0</small></p>

                                                    <p class="nopadding car-grey margin-top-10"><small>Frete (Sedex)</small></p>
                                                    <p class="nopadding car-green margin-top-5 font-size-15"><small>R$28.00</small></p>

                                                    <p class="nopadding car-grey margin-top-10"><small>Total Geral</small></p>
                                                    <p class="nopadding car-red margin-top-5 font-size-20"><small>R$</small><small id="total-geral">0</small></p>
                                                </li>
                                            </ul>

                                            <div class="btn btn-large btn-warning finalizar finalizar-compra hidden" >
                                                <b>FINALIZAR COMPRA</b><br>
                                                <small>rápido e fácil</small>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <!-- //////////// -->

                    <div class="col-md-9 content nopadding">

                        <div class="conteudo-prod produto-conteudo ">
                            <div class="row">
                                <div id="prod-1" class="col-md-4">
                                    <img src="assets/img/produtos/vitatop.jpg">

                                    <span class="hidden">Vitatop</span>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <p class="car-grey car-nome">Vitatop 60 cápsulas</p>
                                            <p class="car-grey car-peso">12g 400mg</p>
                                        </div>

                                        <div class="col-lg-4 car-red ">
                                            <p class="car-preco">R$76.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="prod-2" class="col-md-4 ">
                                    <img src="assets/img/produtos/gojiplus.jpg" >

                                    <span class="hidden">GojiPlus</span>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <p class="car-grey car-nome">GojiPlus 30 cápsulas</p>
                                            <p class="car-grey car-peso">30g 400mg</p>
                                        </div>

                                        <div class="col-lg-4 car-red ">
                                            <p class="car-preco">R$50.50</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="prod-3" class="col-md-4">
                                    <img src="assets/img/produtos/libmax.jpg" >

                                    <span class="hidden">Libmax</span>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <p class="car-grey car-nome">Libmax 30 cápsulas</p>
                                            <p class="car-grey car-peso">30g 500mg</p>
                                        </div>

                                        <div class="col-lg-4 car-red ">
                                            <p class="car-preco">R$98.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div id="prod-4" class="col-md-4">
                                    <img src="assets/img/produtos/zmax.jpg" >

                                    <span class="hidden">Z-Max</span>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="car-grey car-nome">Z-Max 30 cápsulas</p>
                                            <p class="car-grey car-peso">30g 400mg</p>
                                        </div>

                                        <div class="col-md-4 2 car-red ">
                                            <p class="car-preco">R$88.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="prod-5" class=" col-md-4">
                                    <img src="assets/img/produtos/polimax.jpg" >

                                    <span class="hidden">Polimais</span>

                                    <div class="row">
                                        <div class="col-lg-8">
                                            <p class="car-grey car-nome">Polimais 30 cápsulas</p>
                                            <p class="car-grey car-peso">30g 500mg</p>
                                        </div>

                                        <div class="col-lg-3 2 car-red ">
                                            <p class="car-preco">R$112.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="prod-6" class="col-md-4">
                                    <img src="assets/img/produtos/tmax.jpg" 187">

                                    <span class="hidden">Tmax</span>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="car-grey car-nome">Tmax 30 cápsulas</p>
                                            <p class="car-grey car-peso">30g 500mg</p>
                                        </div>

                                        <div class="col-md-4 2 car-red ">
                                            <p class="car-preco">R$44.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" finalizar-compra-conteudo nopadding hidden">

                            <div class="row ">

                                <div class="col-md-10 nopadding" style=" position: relative; left: 13%">
                                    <form id="form-comprar">

                                        <div class="col-md-5 nopadding" >

                                            <div class="col-md-12 nopadding">
                                                <img src="assets/img/circle.png" style="margin-top: -2px"> <b class="car-red" style="font-size: 12px">PREENCHA O PAGAMENTO</b>
                                            </div>

                                            <div class="col-md-12">


                                                <div class="form-group nopadding">
                                                    <label for="cartao_credito">Cartão de Crédito</label>

                                                    <div class="row ">
                                                        <div class="col-md-7 cartao-img nopadding">
                                                            <div class="col-md-4">
                                                                <img src="assets/img/american.png" width="50" >
                                                            </div>
                                                            <div class="col-md-4">
                                                                <img src="assets/img/visa.png" width="50" >
                                                            </div>
                                                            <div class="col-md-4">
                                                                <img src="assets/img/master.png" width="50" >
                                                            </div>
                                                            <div class="col-md-4">
                                                                <img src="assets/img/elo.png" width="50" >
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="card-number" class="form-group">
                                                    <label for="cc-number" class="control-label">N&#176; do Cartão </label>
                                                    <input id="cc-number" name="cartao" type="tel" class="form-control cc-number" autocomplete placeholder="**** **** **** ****" required>
                                                </div>

                                                <div class="form-group " style="margin-bottom: 85px">
                                                    <div class="col-md-12 nopadding">
                                                        <div class="col-md-6 nopadding">
                                                            <label for="cartao_credito">Válidade</label>
                                                            <select class="form-control">
                                                                <option>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                                <option>05</option>
                                                                <option>06</option>
                                                                <option>07</option>
                                                                <option>08</option>
                                                                <option>09</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6" style="padding-right: 0">
                                                            <label for="cartao_credito">&nbsp;</label>
                                                            <select class="form-control">
                                                                <option>15</option>
                                                                <option>14</option>
                                                                <option>13</option>
                                                                <option>12</option>
                                                                <option>11</option>
                                                                <option>10</option>
                                                                <option>09</option>
                                                                <option>08</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group" style="margin-bottom: 155px">
                                                    <div class="col-md-12 nopadding">
                                                        <div class="col-md-6 nopadding">
                                                            <label for="cc-cvc">Cod. Segurança</label>
                                                            <input id="cc-cvc" type="tel" class="form-control cc-cvc" autocomplete="off" placeholder="***" required>
                                                        </div>

                                                        <div class="col-md-6" style="padding-right: 0;padding-top: 30px">

                                                            <a href="#">O que é isso?</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cartao_credito">CPF</label>
                                                    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="***.***.***-**" required="true">
                                                </div>


                                            </div>

                                        </div>

                                        <div class="col-md-5 nopadding" >

                                            <div class="col-md-12">

                                                <div class="form-group" style="margin-top: 20px">
                                                    <label for="cartao_credito">Selecione a qntd de parcelas:</label>

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>
                                                            1x de R$<b id="radio1"></b>
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="2">
                                                            2x de R$<b id="radio2"></b>
                                                        </label>
                                                    </div>
                                                    <div class="radio ">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="3" >
                                                            3x de R$<b id="radio3"></b>
                                                        </label>
                                                    </div>

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="4" >
                                                            4x de R$<b id="radio4"></b>
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="5">
                                                            5x de R$<b id="radio5"></b>
                                                        </label>
                                                    </div>
                                                    <div class="radio ">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="6" >
                                                            6x de R$<b id="radio6"></b>
                                                        </label>
                                                    </div>

                                                </div>
                                                <button id="btn-finalizar" type="submit" class="btn btn-large btn-warning finalizar " style="padding-top: 12px">
                                                    <b style="font-size: 11px">FINALIZAR COMPRA</b><br>
                                                </button>

                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                    <!-- //////////// -->
            </article>
        </section>
    </div>
</div>


<div id="div" data-display="produto" data-animation="fade" data-animationspeed="200" data-closeBGclick="true" class="button"></div>
<div id="produto" class="portBox"  style="width: 40%">

    <div class="row">

        <div class="col-md-12 " >

           <div class="row">
               <div class="col-md-1">
                   <img  src="assets/img/circle.png" width="17" >
               </div>

               <div class="col-md-11 title-modal nopadding">
                   <b class="nome-produto">TODOS</b>
               </div>
           </div>
        </div>

        <div class="col-md-12 prod-modal-content nopadding" >

            <div class="row">
                <div class="col-md-6 ">

                    <img class="comprar-img"  src="">

                </div>

                <div class="col-md-6 nopadding">

                <span style="font-size: 12px;line-height: 15px">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                </span>

                    <div class="row nopadding">
                        <div class="menu-tipo nopadding" style="font-size: 11px;">
                            <ul>
                                <li> <img src="assets/img/circle.png" width="17"> <b>Lorem ipsum dolor sit amet</b></li>
                                <li> <img src="assets/img/circle.png" width="17"> <b> Lorem ipsum dolor sit amet</b></li>
                                <li> <img src="assets/img/circle.png" width="17"> <b>Lorem ipsum dolor sit amet</b></li>
                            </ul>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <label for="addQtd">SELECIONE A QUANTIDADE</label>
                            <select class="form-control" id="addQtd" >
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                            </select>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div id="1" class="btn btn-large btn-success finalizar addProd">
                                ADICIONAR E CONTINUAR <br>COMPRANDO
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="2" class="btn btn-large btn-warning finalizar pull-right">
                                ADICIONAR E FINALIZAR <br>COMPRA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="remover" data-display="modal-remover" data-animation="fade" data-animationspeed="200" data-closeBGclick="true" class="button"></div>
<div id="modal-remover" class="portBox"  style="width: 27%">
    <div class="row">

        <div class="col-md-12 " >

            <div class="col-md-1" style="width: 40px; padding: 0">
                <img  src="assets/img/circle.png" width="17" >
            </div>

            <div class="col-md-11 title-modal nopadding">

                <b class="nome-excluir" >EXCLUIR PRODUTO</b>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="prod-modal-content">
                <b style="font-size: 11px">
                    Tem certeza que deseja remover o <span class="nome-prod-excluir"></span> de seu carrinho de compras?
                </b>
            </div>
        </div>
    </div>

    <div class="row pull-right">
        <div class="col-md-12" style="margin-right: 25px;margin-top: 10px">
            <div class=" btn btn-large btn-grey close-modal" style="width: 120px">
                <b style="">NÃO</b>
            </div>

            <div class="btn btn-large btn-custom-darken remove-sim" data-sim="" style="width: 120px">
                <b style="">SIM</b>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar-->
<div id="editar" data-display="modal-editar" data-animation="fade" data-animationspeed="200" data-closeBGclick="true" class="button"></div>
<div id="modal-editar" class="portBox"  style="width: 27%">
    <div class="row">

        <div class="col-md-12 " >

            <div class="col-md-1" style="width: 40px; padding: 0">
                <img  src="assets/img/circle.png" width="17" >
            </div>

            <div class="col-md-11 title-modal nopadding">

                <b class="nome-excluir" >ALTERAR A QUANTIDADE</b>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="prod-modal-content">
                <b style="font-size: 11px">
                    Selecione a quantidade para este produto.
                </b>
            </div>
        </div>
    </div>

    <div class="row pull-right" >
        <div class="col-md-12 " style=";margin-top: 10px">
            <div class="col-md-5 ">
                <select id="editQtd" class="form-control" style="width: 120px">
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                </select>
            </div>

            <div class="col-md-5">
                <div id="editSim" class="btn btn-large btn-success" data-nome="" style="width: 120px">
                    <b style="">SIM</b>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Pagamento reprovado -->
<div id="reprovado" data-display="modal-reprovado" data-animation="fade" data-animationspeed="200" data-closeBGclick="true" class="button"></div>
<div id="modal-reprovado" class="portBox"  style="width: 27%">
    <div class="row">

        <div class="col-md-12 " >

            <div class="col-md-1" style="width: 40px; padding: 0">
                <img  src="assets/img/circle.png" width="17" >
            </div>

            <div class="col-md-11 title-modal nopadding">

                <b class="nome-excluir" >PAGAMENTO REPROVADO</b>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="prod-modal-content">
                <b style="font-size: 11px">
                    Seu banco broqueou o pagamento, revise os dados de pagamento.
                </b>
            </div>
        </div>
    </div>

    <div class="row pull-right">
        <div class="col-md-12" style="margin-right: 25px;margin-top: 10px">

            <div class="btn btn-large btn-custom-darken remove-sim" data-sim="" style="width: 120px">
                <b style="">OK</b>
            </div>
        </div>
    </div>
</div>


<div class="footer nopadding">
    <div class="conteudo">

    </div>
</div>

</body>
</html>

<script>
    $(function(){

        $("#cpf").mask("999.999.999-99");
        $("#cc-number").mask("9999 9999 9999 9999");


        $(".conteudo-prod div[id^=prod]").click(function(){

            var id = $(this).attr("id");
            var nome = $("#"+id+" span").text();
            var img = $("#"+id+" img").attr("src");

            $(".comprar-img").attr("src", img);
            $(".nome-produto").text(nome)
            $(".finalizar").attr("id", id)
            $(".addProd").attr('id', id)
            $("#div").click()

        });

        $(".addProd").click(function(){

            var id = $(this).attr("id");
            var img = $(".comprar-img").attr('src');
            var qtdSelect = parseInt($("#addQtd").val());

            var prod_nome = $("#"+id+" .car-nome").text();
            var prod_peso = $("#"+id+" .car-peso").text();
            var prod_preco = $("#"+id+" .car-preco").text();
            prod_preco = prod_preco.substr(2);

            var prod =
                '<ul id="ulCar-'+id+'" class="prod" data-nome="'+id+'">' +
                '<li>'+
                '<img src="'+img+'" width="26" > '+
                ' </li> ' +
                '<li class="car-desc">  ' +
                '<p class="nopadding car-grey"> <small class=".car-nome-'+id+'">'+prod_nome+'</small></p> ' +
                '<p class="nopadding car-grey"> <small class=".car-peso-'+id+'">'+prod_peso+'</small></p>' +
                '<p class="nopadding car-red margin-top-5"> <small>R$<span class="menu-car-preco">'+prod_preco+'</span> un. | Qntd. <span class="qtd-'+id+'">'+qtdSelect+'</span></small></p>' +
                '<p class="nopadding margin-top-10"><small><a href="javascript:void(0)" id="remove-'+id+'" class="car-pink remover">Remover</a> &nbsp;&nbsp; <a href="javascript:void(0)" id="edit-'+id+'" class="car-orange editar">Alterar Qntd</a></small></p>' +
                '</li>'+
                '</ul>';

            var qtd = 0;
            var data_nome = "";

            $(".car-content ul").each(function(){

                data_nome = $(this).attr("data-nome");

                if(data_nome == id){

                    qtd += $(this).length;
                }
            });

            var qtdId = $(".qtd-"+id).text();

            if(qtd == 0){
                $(prod).appendTo(".car-content");
            }else{

                var textQtd = $(".qtd-"+id+"").text();

                qtdId = parseInt(qtdId) + qtdSelect;

                $(".qtd-"+id).text(qtdId)

            }

            var subtotal = 0;

            $(".car-content .car-desc").each(function(){

                preco = parseFloat($(this).find(".menu-car-preco").text());
                qtd = parseFloat($(this).find("span[class*=qtd-]").text());
                subtotal += preco * qtd;

            });

            var totalgeral = parseFloat(subtotal) + 28;

            $("#sub-total").text(number_format(subtotal, 2));
            $("#total-geral").text(number_format(totalgeral, 2));

            $(".prod li").removeClass("hidden");
            $(".finalizar-compra").removeClass("hidden");
            $('.total').closest('.prod').removeClass('hidden');
            $(".vazio").remove();

            $(".close-portBox").click();
        });


        $(document).on('click', ".remover", function(e) {

            var id = $(this).closest(".prod").attr("data-nome");
            $(".remove-sim").attr('data-sim', id);
            $("#remover").click();


            $(".nome-prod-excluir").text($(".nome-produto").text())
        });

        $(".remove-sim").click(function(){

            var data_sim = $(this).attr('data-sim');
            $("#ulCar-"+data_sim).remove();
            $(".close-portBox").click();



            //------
            var qtdSelect = parseInt($("#addQtd").val());
            var qtd = 0;
            var data_nome = "";

            $(".car-content ul").each(function(){

                data_nome = $(this).attr("data-nome");

                if(data_nome == data_sim){

                    qtd += $(this).length;
                }
            });

            var qtdId = $(".qtd-"+data_sim).text();

            if(qtd == 0){

            }else{

                var textQtd = $(".qtd-"+data_sim+"").text();

                qtdId = parseInt(qtdId) + qtdSelect;

                $(".qtd-"+id).text(qtdId)

            }

            var subtotal = 0;

            $(".car-content .car-desc").each(function(){

                preco = parseFloat($(this).find(".menu-car-preco").text());
                qtd = parseFloat($(this).find("span[class*=qtd-]").text());
                subtotal += preco * qtd;

            });
            var totalgeral = parseFloat(subtotal) + 28;

            $("#sub-total").text(number_format(subtotal, 2));
            $("#total-geral").text(number_format(totalgeral, 2));

            if(qtd == 0){
                $('.total').closest('.prod').addClass('hidden')
                $('.finalizar-compra').addClass('hidden');

                var vazio =
                    '<ul class="prod vazio">' +
                    '<b class="car-red ">O Carrinho esta vazio</b>' +
                    '</ul>';
                $(vazio).appendTo('.car-content')
            }

        });

        $(document).on('click', ".editar", function(e) {

            $("#editar").click();

            var id = $(this).closest('.prod').attr("data-nome");

            $("#editSim").attr('data-nome', id)


        });

        $("#editSim").click(function(){

            var id = $(this).attr('data-nome');
            var editQtd = $("#editQtd").val();

            $(".qtd-"+id+"").text(editQtd + 'oi');

            $(".close-portBox").click();

            //EDIT

            var qtd = 0;
            var data_nome = "";
            var qtdSelect = parseInt($("#addQtd").val());

            $(".car-content ul").each(function(){

                data_nome = $(this).attr("data-nome");

                if(data_nome == id){

                    qtd += $(this).length;
                }
            });

            var qtdId = $(".qtd-"+id).text();

            if(qtd == 0){
                //$(prod).appendTo(".car-content");
            }else{

                var textQtd = $(".qtd-"+id+"").text();

                qtdId = parseInt(qtdId) ;

                $(".qtd-"+id).text(qtdId)

            }

            var subtotal = 0;

            $(".car-content .car-desc").each(function(){

                preco = parseFloat($(this).find(".menu-car-preco").text());
                qtd = parseFloat($(this).find("span[class*=qtd-]").text());
                subtotal += preco * qtd;

            });

            var totalgeral = parseFloat(subtotal) + 28;

            $("#sub-total").text(number_format(subtotal, 2));
            $("#total-geral").text(number_format(totalgeral, 2));

            $(".prod li").removeClass("hidden");
            $(".finalizar-compra").removeClass("hidden");
            $('.total').closest('.prod').removeClass('hidden');
            $(".vazio").remove();

        });

        $(".close-modal").click(function(){
            $(".close-portBox").click()
        });

        $(".finalizar-compra").click(function(){

            var total  = number_format($("#total-geral").text(), 2);
            var total2 = $("#total-geral").text() / 2;
            var total3 = $("#total-geral").text() / 3;
            var total4 = $("#total-geral").text() / 4;
            var total5 = $("#total-geral").text() / 5;
            var total6 = $("#total-geral").text() / 6;

            $("#radio1").text(total);
            $("#radio2").text(number_format(total2, 2));
            $("#radio3").text(number_format(total3, 2));
            $("#radio4").text(number_format(total4, 2));
            $("#radio5").text(number_format(total5, 2));
            $("#radio6").text(number_format(total6, 2));

            $('.produto-conteudo').addClass('hidden');
            $('.finalizar-compra-conteudo').removeClass('hidden');
            $(".search").addClass('hidden');
            $(".menus").addClass('hidden');
            $(this).addClass('hidden');

        });

        $("#form-comprar").submit(function( e ){
            e.preventDefault();


            //Verificar se class has-error existe
            var cc_number = $("#cc-number").val();

            if(cc_number == ""){

            }else{
                if($("#card-number").hasClass("has-error") || $("#cpf").hasClass("error")){

                }else{
                    $("#reprovado").click();
                }
            }
        });

        $(".logo").click(function(){
            $('.finalizar-compra-conteudo').addClass('hidden');
            $('.produto-conteudo').removeClass('hidden');

            $(".search").removeClass('hidden');
            $(".menus").removeClass('hidden');
            $(".finalizar-compra").removeClass('hidden');
        });


        jQuery(function($) {
            $('[data-numeric]').payment('restrictNumeric');
            $('.cc-number').payment('formatCardNumber');
            $('.cc-exp').payment('formatCardExpiry');
            $('.cc-cvc').payment('formatCardCVC');

            $.fn.toggleInputError = function(erred) {
                this.parent('.form-group').toggleClass('has-error', erred);
                return this;
            };

            $('form').submit(function(e) {
                e.preventDefault();

                var cardType = $.payment.cardType($('.cc-number').val());
                $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
                $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
                $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
                $('.cc-brand').text(cardType);

                $('.validation').removeClass('text-danger text-success');
                $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
            });

        });
    });

    $(function() {
        $("#form-comprar").validate({
            debug:true, //retira essa linha, para o form voltar a funcionar
            rules: {
                "cpf" : {
                    cpf: 'both' //valida tanto Formatação como os Digitos
                    //caso não queira validar a formatação use => cpf: 'valid'
                    //caso só queira validar a formatação use => cpf: 'format'
                }
            }
        });
    });

    function number_format( number, decimals, dec_point, thousands_sep ) {
        // %        nota 1: Para 1000.55 retorna com precisão 1 no FF/Opera é 1,000.5, mas no IE é 1,000.6
        // *     exemplo 1: number_format(1234.56);
        // *     retorno 1: '1,235'
        // *     exemplo 2: number_format(1234.56, 2, ',', ' ');
        // *     retorno 2: '1 234,56'
        // *     exemplo 3: number_format(1234.5678, 2, '.', '');
        // *     retorno 3: '1234.57'
        // *     exemplo 4: number_format(67, 2, ',', '.');
        // *     retorno 4: '67,00'
        // *     exemplo 5: number_format(1000);
        // *     retorno 5: '1,000'
        // *     exemplo 6: number_format(67.311, 2);
        // *     retorno 6: '67.31'

        var n = number, prec = decimals;
        n = !isFinite(+n) ? 0 : +n;
        prec = !isFinite(+prec) ? 0 : Math.abs(prec);
        var sep = (typeof thousands_sep == "undefined") ? ',' : thousands_sep;
        var dec = (typeof dec_point == "undefined") ? '.' : dec_point;

        var s = (prec > 0) ? n.toFixed(prec) : Math.round(n).toFixed(prec); //fix for IE parseFloat(0.55).toFixed(0) = 0;

        var abs = Math.abs(n).toFixed(prec);
        var _, i;

        if (abs >= 1000) {
            _ = abs.split(/\D/);
            i = _[0].length % 3 || 3;

            _[0] = s.slice(0,i + (n < 0)) +
                _[0].slice(i).replace(/(\d{3})/g, sep+'$1');

            s = _.join(dec);
        } else {
            s = s.replace('.', dec);
        }

        return s;
    }


</script>




