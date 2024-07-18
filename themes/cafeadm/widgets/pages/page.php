<?php $v->layout("_admin"); ?>
<?php $v->insert("widgets/pages/sidebar.php"); ?>
<section class="dash_content_app">
	
	<header class="dash_content_app_header">
		<h2 class="icon-plus-circle">Nova Página</h2>
	</header>
	<div class="dash_content_app_box">
		<form class="app_form" action="<?= url("/admin/users/user"); ?>" method="post">
			<!--ACTION SPOOFING-->
			<input type="hidden" name="action" value="create"/>
			
			<label class="label">
				<span class="legend">Título:</span>
				<input type="text" name="title" placeholder="Título da página" required/>
			</label>
			<label class="label">
				<span class="legend">Subtítulo:</span>
				<input type="text" name="Subtitle" placeholder="Texto de suporte da página" required/>
			</label>
			<label class="label">
				<span class="legend">Capa: (600x600px)</span>
				<input type="file" name="image"/>
			</label>
			<label class="label">
				<span class="legend">*Conteúdo:</span>
				<textarea class="mce" rows="10" name="content"></textarea>
			</label>
			<div class="label_g2">
				
			<label class="label">
				<span class="legend">Status:</span>
				<select name="genre">
					<option value="male">Selecione o status</option>
					<option value="0">Rascunho</option>
					<option value="2">Lixo</option>
					<option value="1">Publicado</option>
				</select>
			</label>
			<div class="label al-right" style="margin-top: 15px">
				<button class="btn btn-green icon-check-square-o float_right">Criar Página</button>
			</div>
			</div>
		</form>
	</div>
	
</section>