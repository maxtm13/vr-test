<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

//\Bitrix\Main\UI\Extension::load('ui.fonts.opensans');

$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
?>
<!--<pre>-->
<!--    --><?//print_r($arResult['ITEMS'][0]);?>
<!--</pre>-->
<section class="industry">
    <div class="container">
        <div class="items">
        <? foreach ($arResult['ITEMS'] as $item) {?>

            <div class="item  ">
                <a href="<?= $item['DETAIL_PAGE_URL']?>" class="item-link">
                <img src="/images/icon-check-mark1.svg" alt="" class="item-icon">

                <div class="item-name"><?=$item['NAME']?></div>
                </a>
            </div>

            <? }
            ?>
        </div>
    </div>
</section>
