<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sorteio</title>
	<link rel="icon" type="image/gif" href="icone.ico" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="pg.css" media="screen">
	<!--BOOTSTRAP-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>

</head>
<body>


	<script type="text/javascript">
		
		function gerar() {
			let sub = document.getElementById("substituir");
			let local = document.getElementById("local");

			local.innerHTML = "";

			sub.className = "show";

    		<?php

    			$imagem['1'] = "https://images.pexels.com/photos/9667337/pexels-photo-9667337.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";
    			$imagem['2'] = "https://images.pexels.com/photos/5626726/pexels-photo-5626726.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";
    			$imagem['3'] = "https://images.pexels.com/photos/5961216/pexels-photo-5961216.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";
    			$imagem['4'] = "https://images.pexels.com/photos/812264/pexels-photo-812264.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";
    			$imagem['5'] = "https://images.pexels.com/photos/1334598/pexels-photo-1334598.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";
    			$imagem['6'] = "https://images.pexels.com/photos/393047/pexels-photo-393047.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";
    			$imagem['7'] = "https://images.pexels.com/photos/545004/pexels-photo-545004.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";
    			$imagem['8'] = "https://images.pexels.com/photos/4790255/pexels-photo-4790255.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500";
    			$imagem['9'] = "https://images.pexels.com/photos/6993182/pexels-photo-6993182.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500";
    			$imagem['10'] = "https://images.unsplash.com/photo-1593784991095-a205069470b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80";
    			$imagem['11'] = "https://images.unsplash.com/photo-1598550463415-d397fdddc3e0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80";
    			$imagem['12'] = "https://images.unsplash.com/photo-1592375601764-5dd6be536f99?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80";

					$sorteio = rand(1,12);
					$resultado = "";

					if ($sorteio == 1) {
						$resultado = "Um Iphone 13";
					}
					elseif ($sorteio == 2) {
						$resultado = "Um Xbox One";
					}
					elseif ($sorteio == 3) {
						$resultado = "Um PlayStation 5";
					}
					elseif ($sorteio == 4) {
						$resultado = "Um Notebook";
					}
					elseif ($sorteio == 5) {
						$resultado = "Um Tablet";
					}
					elseif ($sorteio == 6) {
						$resultado = "Um Apple Wath";
					}
					elseif ($sorteio == 7) {
						$resultado = "Uma Bicicleta";
					}
					elseif ($sorteio == 8) {
						$resultado = "Uma Alexia";
					}
					elseif ($sorteio == 9) {
						$resultado = "Um Nintendo Swith";
					}
					elseif ($sorteio == 10) {
						$resultado = "Uma Televisão";
					}
					elseif ($sorteio == 11) {
						$resultado = "Um PC Gamer";
					}
					else{
						$resultado = "Um Headset";
					}
			?>
		}
	</script>


	<div class="container-fluid" id="mockup">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-white">Parabéns você ganhou!!  <button onclick="gerar()" class="btn btn-success">Gerar Resultado</button></h1>
				<div id="local"><img id="sorteio" class="img-responsive" src="3.png"></div>
			</div>
		</div>
	</div>


	<div id="substituir" class="hidden container-fluid"><h1 class="text-center">Você Ganhou...</h1><hr>
		        <div class="col-md-4">
		              <div class="card">
		                <img id="premio"src="<?php echo "$imagem[$sorteio]"; ?>" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#"><?php echo "$resultado"?></a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		        </div>
	</div><hr><br>


	<section id="produtos">
		<div id="tt"><h3 class="text-center">Esses são os prêmios que você pode receber</h3></div>

		<div class="container-fluid">
		    <div class="row">
		        <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.pexels.com/photos/9667337/pexels-photo-9667337.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Iphone 13</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.pexels.com/photos/5626726/pexels-photo-5626726.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Xbox One</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.pexels.com/photos/5961216/pexels-photo-5961216.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">PlayStation 5</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		    		</div>
		    	</div>
			</div>
		</div>

		<div class="container-fluid">
		    <div class="row">
		        <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.pexels.com/photos/812264/pexels-photo-812264.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Notebook</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.pexels.com/photos/1334598/pexels-photo-1334598.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Tablet</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.pexels.com/photos/393047/pexels-photo-393047.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Apple Wath</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		    		</div>
		    	</div>
			</div>
		</div>


		<div class="container-fluid">
		    <div class="row">
		        <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.pexels.com/photos/545004/pexels-photo-545004.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Bicicleta</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.pexels.com/photos/4790255/pexels-photo-4790255.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Alexia</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.pexels.com/photos/6993182/pexels-photo-6993182.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Nintendo Swith</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		    		</div>
		    	</div>
			</div>
		</div>
		

		<div class="container-fluid">
		    <div class="row">
		        <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.unsplash.com/photo-1593784991095-a205069470b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Televisão</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.unsplash.com/photo-1598550463415-d397fdddc3e0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">PC Gamer</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-4">
		              <div id="produtos" class="card">
		                <img src="https://images.unsplash.com/photo-1592375601764-5dd6be536f99?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="img-responsive">
		                <div class="card-text">
		                  <h4 class="card-title"><a href="#">Headset</a></h4>
		                   <h4 class="pull-right card-footer">$700.99</h4>
		                  <p></p>
		                </div>
		              </div>
		    		</div>
		    	</div>
			</div>
		</div>
	</section>

</body>
</html>