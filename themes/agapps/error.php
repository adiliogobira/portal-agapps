<?php $v->layout("_theme");?>

    <!-- ======= About Section ======= -->
    <section id="about" class="col-md-6 offset-md-3">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?=$error->title;?></h2>
          <p class="error">&bull;<?=$error->code;?>&bull;</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p><?=$error->message;?></p>
            <?php if ($error->link): ?>
        <a class="not_found_btn btn gradient gradient-green gradient-hover transition radius"
           title="<?=$error->linkTitle;?>" href="<?=$error->link;?>"><?=$error->linkTitle;?></a>
      <?php endif;?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->