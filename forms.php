<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">

<div class="divFormulario">

	<div class="formulario">
		<form action="?page=salvar-cad" method="post">
				
			<div><h2>Queremos saber mais sobre nossos jogadores!</h2></div>

			<!-- =-=-=-=-=-= EMAIL =-=-=-=-=-= -->
			<div class="formCampos">
				<label><p>Digite seu email:</p></label>
				<input tabindex="1" type="email" name="cad_email" required autofocus> 
			</div><!--formCampos-->

			<!-- =-=-=-=-=-= NICK =-=-=-=-=-= -->
			<div class="formCampos">
				<label>Qual seu nickname padrão?</label>
				<input tabindex="2" type="text" name="cad_nome" required> 
			</div><!--formCampos-->

			<!-- =-=-=-=-=-= GAMES =-=-=-=-=-= -->
			<div class="formCampos">
				<label>Da lista, qual seu jogo favorito?</label>
				<select tabindex="3" name="games" required>
					<option value="" selected disabled></option>
					<option type="text">CS:GO</option>
					<option type="text">League of Legends</option>
					<option type="text">Minecraft</option>
					<option type="text">FIFA</option>
					<option type="text">God of War</option>
					<option type="text">Phasmofobia</option>
					<option type="text">Forza</option>
					<option type="text">Outros</option>
				</select>
			</div><!--formCampos-->

			<!-- =-=-=-=-=-= ESTILO =-=-=-=-=-= -->
			<div class="formCampos">
				<label>Estilo predileto</label>
				<select tabindex="4" name="estilo_g" required>
					<option value="" selected disabled></option>
					<option type="text">FPS(Tiro)</option>
					<option type="text">MOBA RPG</option>
					<option type="text">SandBox</option>
					<option type="text">Terror</option>
					<option type="text">Esportes</option>
					<option type="text">Corrida</option>
					<option type="text">RPG de Aventura</option>
					<option type="text">Corrida</option>
					<option type="text">Outro</option>
				</select>
			</div><!--formCampos-->

			<!-- =-=-=-=-=-= CONSOLE =-=-=-=-=-= -->
			<div class="formCampos">
				<label>Console de sua preferência:</label>
				<select tabindex="5" name="console_g" required>
					<option value="" selected disabled></option>
					<option type="text">PlayStation</option>
					<option type="text">XBOX</option>
					<option type="text">Mobile</option>
					<option type="text">Computador</option>
					<option type="text">Nintendo</option>
					<option type="text">Outro</option>
				</select>
			</div><!--formCampos-->

			<!-- =-=-=-=-=-= CRONOGRAMA =-=-=-=-=-= -->
			<div class="formCampos">
				<label style="height: 48px;">Qual plataforma você costuma comprar seus jogos?</label>
				<select tabindex="6" name="plataforma_g" required>
					<option value="" selected disabled></option>
					<option type="text">Steam</option>
					<option type="text">EpicGames</option>
					<option type="text">PlayStore/AppStore</option>
					<option type="text">Outra</option>
				</select>
			</div><!--formCampos-->

			<!-- =-=-=-=-=-= BOTÃO =-=-=-=-=-= -->
			<div class="formCamposBotoes">
				<button tabindex="8" type="submit" class="botaoForm">Salvar dados</button>
			</div><!--formCampos-->

		</form>
	</div><!--formulario-->

		<!-- =-=-=-=-=-= LOGO E CRÉDITOS =-=-=-=-=-= -->
	<div class="creditos">	
		<img src="media/logoAss.png">
		<div class="sombraCredito"></div>
	</div><!--creditos-->
</div><!--divFormulario-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>