<? 
use Bitrix\Main\Application;

class MySortSelectorComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $arParams["SORT_OPTIONS"] = [
            "name" => "По названию",
            "price" => "По цене",
            "date" => "По дате"
        ];
        $arParams["DEFAULT_SORT"] = $arParams["DEFAULT_SORT"] ?: "name";
        $arParams["DEFAULT_ORDER"] = $arParams["DEFAULT_ORDER"] ?: "asc";
        return $arParams;
    }

    public function executeComponent()
    {
        $request = Application::getInstance()->getContext()->getRequest();
        $sort = $request->get("sort");
        $order = $request->get("order");

        if (!isset($this->arParams["SORT_OPTIONS"][ $sort ])) {
            $sort = $this->arParams["DEFAULT_SORT"];
        }

        if (!in_array($order, ["asc", "desc"])) {
            $order = $this->arParams["DEFAULT_ORDER"];
        }

        $this->arResult = [
            "SORT" => $sort,
            "ORDER" => $order,
            "OPTIONS" => $this->arParams["SORT_OPTIONS"]
        ];

        $this->includeComponentTemplate();
    }
}
