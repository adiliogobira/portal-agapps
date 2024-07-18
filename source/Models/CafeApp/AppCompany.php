<?php

namespace Source\Models\CafeApp;

use Source\Core\Model;
class AppCompany extends Model
{
    public function __construct()
    {
        parent::__construct(
            "app_companies",
            ["id"],
            [
                "name",
                "telephone",
                "smartphone",
                "is_whatsapp",
                "content",
                "street",
                "number",
                "complement",
                "district",
                "city",
                "state",
                "logo",
                "cover"
        ]);
    }
}