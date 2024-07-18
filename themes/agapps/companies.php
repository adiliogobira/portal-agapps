<?php $v->layout("_theme"); ?>
<div class="ajax_response"></div>

<section class="app-companies">
    <article class="wallet radius">
        <span class="wallet_remove wallet_action icon-times-circle icon-notext"></span>
        <h2 class="icon-briefcase al-left icon-notext color">fdsdf</h2>
        <img class="al-left" src="<?=image('images/logo01.jpg',250,250)?>" alt="">
        <p class="wallet_balance">teste</p>
        <p class="wallet_income">Receitas: </p>
        <p class="wallet_expense">Despesas:</p>

        <div class="wallet_overlay radius">
            <div>
                <h3 class="icon-warning">ATENÇÃO:</h3>
                <p>Ao deletar uma carteira todos as contas lançadas nesta serão perdidas. Tem certeza que deseja
                    deletar a carteira?</p>
                <span class="btn radius transition icon-warning">Sim, DELETAR!</span>

                <span class="wallet_overlay_close icon-sign-out transition">fechar</span>
            </div>
        </div>
    </article>
</section>
