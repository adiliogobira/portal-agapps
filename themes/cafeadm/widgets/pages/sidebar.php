<div class="dash_content_sidebar">
  <h3 class="icon-asterisk">dashboard/paginas</h3>
  <p class="dash_content_sidebar_desc">Gerencie, monitore e acompanhe as páginas do seu site aqui...</p>

  <nav>
    <?php
    $nav = function ($icon, $href, $title) use ($app) {
      $active = ($app == $href ? "active" : null);
      $url = url("/admin/{$href}");
      return "<a class=\"icon-{$icon} radius {$active}\" href=\"{$url}\">{$title}</a>";
    };

    echo $nav("bookmark", "page/home", "Páginas");
    echo $nav("plus-circle", "page/nova", "Nova página");
    ?>

  </nav>
</div>