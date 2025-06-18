<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$currentSort = $arResult["SORT"];
$currentOrder = $arResult["ORDER"];
$options = $arResult["OPTIONS"];

?>

<div class="select-sort">
    <form method="get">
        <label for="sort">Сортировать по:</label>
        <select name="sort" id="sort">
            <?php foreach ($options as $key => $label): ?>
                <option value="<?= htmlspecialchars($key) ?>" <?= $currentSort === $key ? 'selected' : '' ?>>
                    <?= htmlspecialchars($label) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <select name="order" id="order">
            <option value="asc " . <?= $currentOrder === "asc" ? 'selected' : '' ?>>По возрастанию</option>
            <option value="desc " . <?= $currentOrder === "desc" ? 'selected' : '' ?>>По убыванию</option>
        </select>
        <button type="submit">Применить</button>
    </form>

    <div class="current-sort">
        Отсортировано по: <span><?= htmlspecialchars($options[$currentSort]) ?></span> 
        (<?= $currentOrder === "asc" ? "возрастанию" : "убыванию" ?>)
    </div>
</div>
