<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vending Machine</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <nav class="nav fixed-top d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <!--button class="navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="#navbarSidebar" aria-controls="navbarSidebar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button-->
        <h3 class="my-0 mr-md-auto font-weight-bold mt-2">Vending Machine</h3>
    </nav>
    <div class="container-fluid">
            <div class="row pt-md-5">
                <div class="collapse col-md-2 d-none d-md-block bg-light pt-xl-5" id="navbarSidebar">
                    <div class="sidebar-sticky">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Insert Coin</h4>
                            </div>
                            <div class="card-body">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <input type="button" class="btn btn-primary border" onclick="inputFunction(1)" id="num1" value="1">
                                    <input type="button" class="btn btn-primary border" onclick="inputFunction(2)" id="num2" value="2">
                                    <input type="button" class="btn btn-primary border" onclick="inputFunction(5)" id="num5" value="5">
                                    <input type="button" class="btn btn-primary border" onclick="inputFunction(10)" id="num10" value="10">
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Total Credit</h4>
                            </div>
                            <div class="card-body">
                                <h1 id="credit" class="card-title pricing-card-title text-center"></h1>
                                <button type="button" class="btn btn-sm btn-block btn-outline-primary btn-info text-light" onclick="change()">Refund</button>
                            </div>
                        </div>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Selected</h4>
                            </div>
                            <ul class="list-group list-group-item" id="productList">
                                <!--li class="list-group-item">Pepsi Max: 15</li>
                                <li class="list-group-item">Coke Vanilla : 25</li-->
                            </ul>
                        </div>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Change Coin</h4>
                            </div>
                            <div class="row p-1">
                                <div class="col-12 mt-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">฿1</span>
                                        </div>
                                        <input type="text" disabled="disabled" class="form-control" value="0 Coin" id="coin1">
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">฿2</span>
                                        </div>
                                        <input type="text" disabled="disabled" class="form-control" value="0 Coin" id="coin2">
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">฿5</span>
                                        </div>
                                        <input type="text" disabled="disabled" class="form-control" value="0 Coin" id="coin5">
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">฿10</span>
                                        </div>
                                        <input type="text" disabled="disabled" class="form-control" value="0 Coin" id="coin10">
                                    </div>
                                    <button type="button" class="btn btn-sm btn-block btn-outline-primary mt-2 btn-info text-light" onclick="collectCoin()">Collect Coin</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!--Products-->
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-2 mx-auto text-center">
                    <h5 class="display-4 font-weight-bold pt-5">Please select any product you need</h5>
                </div>
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Pepsi Max : 15 Bath</h4>
                        </div>
                        <div class="card-body">
                            <img class="img-fluid" src="img/pepsi-max.jpg" alt="Pepsi Max">
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary" value="Pepsi Max : 15 Bath" id="product1" onclick="buyFunction(15,'Pepsi Max : 15฿')">Select</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Coke Vanilla : 25 Bath</h4>
                        </div>
                        <div class="card-body">
                            <img class="img-fluid" src="img/Coke-Vanilla-25.jpg" alt="Pepsi Max">
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="buyFunction(25,'Coke Vanilla : 25฿')">Select</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Coke Vanilla : 30 Bath</h4>
                        </div>
                        <div class="card-body">
                            <img class="img-fluid" src="img/Coca-Cola-Vanilla-1.5L-30.jpg" alt="Pepsi Max">
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="buyFunction(30,'Coke Vanilla : 30฿')">Select</button>
                        </div>
                    </div>
                </div>

                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Pepsi Max : 18 Bath</h4>
                        </div>
                        <div class="card-body">
                            <img class="img-fluid" src="img/pepsi-max-18.jpg" alt="Pepsi Max">
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="buyFunction(18,'Pepsi Max : 18฿')">Select</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Pepsi Max : 17 Bath</h4>
                        </div>
                        <div class="card-body">
                            <img class="img-fluid" src="img/pepsi-max-17.jpg" alt="Pepsi Max">
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="buyFunction(17,'Pepsi Max : 17฿')">Select</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Sprite : 20 Bath</h4>
                        </div>
                        <div class="card-body">
                            <img class="img-fluid" src="img/sprite-20.jpg" alt="Pepsi Max">
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="buyFunction(20,'Sprite : 20฿')">Select</button>
                        </div>
                    </div>
                </div>
                    <!-- Footer -->
                    <footer class="footer bg-dark text-light border-bottom shadow-sm p-2">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <strong class="copyright">Mr. Matly Sman - Vending Machine</strong>
                                </div>
                            </div>
                        </div>
                    </footer>
            </main>
        </div>
    </div>

    <script>
        var result =0;
        document.getElementById("credit").innerHTML = result+"฿";
        function inputFunction(inputNum) {
            var numCredit = parseInt(document.getElementById("credit").innerHTML);
            result= inputNum+numCredit;
            document.getElementById("credit").innerHTML = result+"฿";
        }

        function buyFunction(price,product){
            //price =15;
            var numCredit = parseInt(document.getElementById("credit").innerHTML);
            //var price = parseInt(document.getElementById("pepsi15").value);
            if(numCredit>=price){
                result = numCredit - price;
                document.getElementById("credit").innerHTML=result+"฿";

                var node = document.createElement("LI");
                var selectProduct = document.createTextNode(product);
                node.appendChild(selectProduct);
                document.getElementById("productList").appendChild(node);
            }else {
                alert("Sorry your credit is not enough! \nPlease add more coin");
            }
        }

        function change() {
            var numCredit = parseInt(document.getElementById("credit").innerHTML);
            var coin1 = parseInt(document.getElementById("coin1").value);
            var coin2 = parseInt(document.getElementById("coin2").value);
            var coin5 = parseInt(document.getElementById("coin5").value);
            var coin10 = parseInt(document.getElementById("coin10").value);

            if(numCredit>=10){
                result = numCredit-10;
                coin10 = coin10+1;
            }
            else if(numCredit>=5){
                result = numCredit-5;
                coin5 = coin5 +1;
            }
            else if(numCredit>=2){
                result = numCredit-2;
                coin2 = coin2 +1;
            }
            else if(numCredit>=1){
                result = numCredit-1;
                coin1 = coin1 +1;
            }

            document.getElementById("credit").innerHTML=result+"฿";
            document.getElementById("coin10").value= coin10+" Coin";
            document.getElementById("coin5").value= coin5+" Coin";
            document.getElementById("coin2").value= coin2+" Coin";
            document.getElementById("coin1").value= coin1+" Coin";
        }

        function collectCoin() {
            document.getElementById("coin1").value=0+" Coin";
            document.getElementById("coin2").value=0+" Coin";
            document.getElementById("coin5").value=0+" Coin";
            document.getElementById("coin10").value=0+" Coin";
            window.alert("Do you want to collect the coins?");
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>