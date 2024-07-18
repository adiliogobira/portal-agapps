<?php

namespace Source\App\Admin;

use Source\Models\Page;
use Source\Support\Pager;

/**
 * Class Page
 * @package Source\App\Admin
 */
class Pages extends Admin
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param array|null $data
     */
    public function home(?array $data): void
    {
        $paginas = (new Page())->find();

        $pager = new Pager(url("/admin/page/home/"));
        $pager->pager($paginas->count(), 5, (!empty($data["page"]) ? $data["page"] : 1));

        $head = $this->seo->render(
            CONF_SITE_NAME . " | FAQ",
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );

        echo $this->view->render("widgets/pages/home", [
            "app" => "page/home",
            "head" => $head,
            "search" => null,
            "paginas" => $paginas->order("channel")->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "paginator" => $pager->render(),
        ]);
    }


    /**
     * @param array|null $data
     * @throws \Exception
     */
    public function nova(?array $data): void
    {

        $head = $this->seo->render(
            CONF_SITE_NAME . " | FAQ",
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );

        echo $this->view->render("widgets/pages/page", [
            "app" => "page/home",
            "head" => $head,
            "search" => null,
            "pagina" => null,
        ]);
    }
}
