<?php $v->layout("_theme"); ?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg mt-5">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Login</h2>
            <p>Entre e veja como estão os seus acessos!</p>
        </div>

        <div class="row">

            <div class="col-lg-6 offset-md-3">
                <form class="auth_form" action="<?= url("/entrar"); ?>" method="post"
                      enctype="multipart/form-data">
                    <div class="ajax_response"><?= flash(); ?></div>
                    <?= csrf_input(); ?>
                    <div class="row">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" value="<?= ($cookie); ?>"
                                   placeholder="Informe seu e-mail:" required/>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" placeholder="Informe sua senha:" required/>
                    </div>
                    <div class="form-group mt-3">
                        <span><a title="Esqueceu a senha?" href="<?= url("/recuperar"); ?>">Esqueceu a senha?</a></span>
                    </div>
                    <div class="form-group mt-3 my-3">
                        <input type="checkbox" <?= (!empty($cookie) ? "checked" : ""); ?> name="save"/>
                        <span>Lembrar dados?</span>
                    </div>
                    <div class="text-right pb-5">
                        <button type="submit" class="auth_form_btn float-end btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->