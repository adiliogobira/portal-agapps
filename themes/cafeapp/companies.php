<?php $v->layout("_theme"); ?>

<div class="app_formbox app_widget">
	<form class="app_form" action="" method="post">
		<input type="hidden" name="update" value="true"/>

		<div class="label_group">
			<label>
				<span class="field icon-leanpub">Nome da Empresa:</span>
				<input class="radius" type="text" name="description" required/>
			</label>
			<label>
				<span class="field icon-leanpub">Nome Fantasia:</span>
				<input class="radius" type="text" name="description" required/>
			</label>
		</div>

		<div class="label_group">
		<label>
			<span class="field icon-leanpub">CNPJ:</span>
			<input class="radius" type="text" name="description" required/>
		</label>
		<label>
			<span class="field icon-leanpub">E-mail:</span>
			<input class="radius" type="text" name="description" required/>
		</label>
		</div>
		<label>
			<span class="field icon-leanpub">Logo:</span>
			<input class="radius" type="file" name="description" required/>
		</label>
		<label>
			<span class="field icon-leanpub">Telefone Fixo:</span>
			<input class="radius" type="text" name="description" required/>
		</label>
		<label>
		</label>

		<div class="label_group">
			<label>
				<span class="field icon-leanpub">Celular/Whatsapp:</span>
				<input class="radius" type="text" name="description" required/>
			</label>

			<label>
				<span class="field icon-filter">Este número é whatsapp?:</span>
				<select name="status">
					<option value="0">&ofcir; Não</option>
					<option value="1">&ofcir; Sim</option>
				</select>
			</label>
		</div>

		<label>
			<span class="field icon-leanpub">Qual mensagem você quer colocar no whatsapp:</span>
			<input class="radius" type="text" name="description" required/>
		</label>
		<label>
			<span class="field icon-leanpub">Fale um pouco sobre a empresa:</span>
			<textarea name="descricao" id="" cols="30" rows="10"></textarea>
		</label>

		<div class="al-center">
			<div class="app_formbox_actions">
				<span class="btn_remove transition icon-error">Excluir</span>
				<button class="btn btn_inline radius transition icon-pencil-square-o">Atualizar</button>
				<a class="btn_back transition radius icon-sign-in" href="<?= url_back(); ?>" title="Voltar">Voltar</a>
			</div>
		</div>
	</form>
</div>