<?php include "header.html";?>
<section>
<div class="container">

<p>&nbsp;</p>                                                                                                                                                                      	
		<form>
		<div class="form-group">
			<button class="btn btn-dark btn-lg" for="nome">Nome: </button>
			<input type="text" id="nome" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<button class="btn btn-dark btn-lg" for="email">Email: </button>
			<input type="email" id="email" class="form-control form-control-lg" />
		</div>

		<div class="form-group">
			<button class="btn btn-dark btn-lg" for="sexo">Sexo: </button>
			<select name="sexo" id="sexo" class="form-control form-control-lg">
				<option value="">Masculino</option>
				<option value="">Feminino</option>
			</select>
		</div>

		<div class="form-group">
			<button class="btn btn-dark btn-lg" for="cpf">CPF: </button>
			<input type="tel" id="cpf" class="form-control form-control-lg" />
		</div>
		<div class="form-group">
			<button class="btn btn-dark btn-lg" for="msg">Mensagem</button>
			<textarea id="msg" class="form-control form-control-lg"></textarea>
		</div>
			<button type="submit" class="btn btn-danger btn-lg">Enviar</button>
			
		</form>


</div>
	
</section>


<?php include "footer.html";?>