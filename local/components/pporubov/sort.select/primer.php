пример работы в catalog.section
<?
$sortFieldMap = [
    'name' => 'NAME',
    'price' => 'CATALOG_PRICE_1',
    'date' => 'DATE_CREATE',
];

$sortKey = $_GET['sort'] ?? 'name';
$sortOrder = $_GET['order'] ?? 'asc';
$sortField = $sortFieldMap[$sortKey] ?? 'NAME';
$sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'asc';
?>

<?
// Компонент сортировки (отображение формы)
$APPLICATION->IncludeComponent(
    "my:sort.selector",
    "",
    [
        "DEFAULT_SORT" => "name",
        "DEFAULT_ORDER" => "asc"
    ],
    false
);
?>

<?php
// Компонент каталога с динамической сортировкой
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "",
    [
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "5",
        "SECTION_ID" => $_REQUEST["SECTION_ID"],
        "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
        "ELEMENT_SORT_FIELD" => $sortField,
        "ELEMENT_SORT_ORDER" => $sortOrder,
        // Остальные параметры ...
        "PAGE_ELEMENT_COUNT" => "20",
    ],
    false
);