<?php $v->layout("_admin");?>
<?php $v->insert("widgets/pages/sidebar.php");?>
<section class="dash_content_app">
	<header class="dash_content_app_header">
		<h2 class="icon-link">Páginas</h2>
		<form action="<?=url("/admin/users/home");?>" class="app_search_form">
			<input type="text" name="s" value="<?=$search;?>" placeholder="Pesquisar Páginas:">
			<button class="icon-search icon-notext"></button>
		</form>
	</header>
	<div class="dash_content_app_box">
		<section>
			<div class="app_users_home">
				<?php
		if (!$paginas) {
				echo "Não há paginas cadastradas";
		} else {
			foreach ($paginas as $pagina):
				$paginaPhoto = ($pagina->photo() ? image($pagina->photo, 300, 300) :
						theme("/assets/images/avatar.jpg", CONF_VIEW_ADMIN));
				?>
					<article class="user radius">
						<div class="cover" style="background-image: url(<?=$paginaPhoto;?>)"></div>
						<?php if ($pagina->level >= 5): ?>
						<p class="level icon-life-ring">ADMIN</p>
						<?php else: ?>
					<p class="level icon-user">USUÁRIO</p>
					<?php endif;?>
					<h4><?=$pagina->fullName();?></h4>
					<div class="info">
						<p><?=$pagina->email;?></p>
						<p>Desde <?=date_fmt($pagina->created_at, "d/m/y \à\s H\hi");?></p>
					</div>
					<div class="actions">
						<a class="icon-cog btn btn-blue" href="<?=url("/admin/users/user/{$pagina->id}");?>"
						title="">Gerenciar</a>
					</div>
				</article>
				<?php
			endforeach;
			}?>
			</div>
			<?=$paginator;?>
		</section>
	</div>
</section>