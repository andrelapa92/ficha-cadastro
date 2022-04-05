<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Ficha Cadastral</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/png" href="cadastro.ico"/>	
</head>
<body>
	<header>
		<h1 class="header-cadastro"><i class="fa-solid fa-address-card"></i> Cadastro</h1>
	</header>
	<section class="dados">
		<div class="row">
			<div class="col">
				<div class="mb-3">
  					<label for="nome" class="form-label">Nome</label>
  					<input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">
				</div>
			</div>
			<div class="col">
				<div class="mb-3">
  					<label for="celular" class="form-label">Celular</label>
  					<input type="text" class="form-control phone_with_ddd" id="celular" placeholder="48999999999">
				</div>
			</div>
			<div class="col">
				<div class="mb-3">
  					<label for="email" class="form-label">E-mail</label>
  					<input type="email" class="form-control" id="email" placeholder="email@exemplo.com">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="mb-3">
					<div class="row">
						<div class="col">
							<label for="range-sexo" class="form-label">Testando range bilateral:</label>
						</div>
						<div class="col mb-0 mt-auto">
							<p class="text-center mb-0"><span id="resultadoTempoReal">0</span> %</p>
						</div>
						<div class="col"></div>
					</div>
					<div class="row">
						<div class="col">
							<div class="d-flex justify-content-end">Esquerda</div>
						</div>
						<div class="col">
							<div class="d-flex justify-content-center">
								<form action="welcome_message.php" method="post">
								<input type="range" class="form-range" min="-100" max="100" step="25" id="range-sexo">  							
								</form>
							</div>
						</div>
						<div class="col">
							<div class="d-flex justify-content-start">Direita</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="mb-3">
  					<label for="exampleFormControlInput1" class="form-label">Novo Campo</label>
  					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite algo">
				</div>
			</div>
			<div class="col">
				<div class="mb-3">
  					<label for="input-cep" class="form-label">CEP</label>
  					<input type="text" onblur="ConsultaCep()" autocomplete="no" class="form-control cep" id="input-cep" placeholder="CEP (somente números)">
					<p id="localidade" style="margin-bottom: 0;"></p>
					<p id="logradouro"></p>
				</div>
			</div>
		</div>
		<div class="d-grid col-6 mx-auto" id="confirm-btn">
    		<button type="submit" class="btn-lg btn-success">Confirmar e enviar dados</button>
  		</div>
	</section>
	<footer>
		<div class="text-center">
			<ul>
				<li>Desenvolvido por André Luiz Lapa</li>
				<li>Acompanhe-me no <a href="https://www.linkedin.com/in/andreluizlapa/" target="_blank">LinkedIn</a></li>
				<li>Veja meus projetos no <a href="https://github.com/andrelapa92" target="_blank">GitHub</a></li>
			</ul>
		</div>
	</footer>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>
