<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = [
    "PARAMETERS" => [
        "DEFAULT_SORT" => [
            "PARENT" => "BASE",
            "NAME" => "Сортировка по умолчанию",
            "TYPE" => "LIST",
            "VALUES" => [
                "name" => "По названию",
                "price" => "По цене",
                "date" => "По дате"
            ],
            "DEFAULT" => "name"
        ],
        "DEFAULT_ORDER" => [
            "PARENT" => "BASE",
            "NAME" => "Направление по умолчанию",
            "TYPE" => "LIST",
            "VALUES" => [
                "asc" => "По возрастанию",
                "desc" => "По убыванию"
            ],
            "DEFAULT" => "asc"
        ]
    ]
];