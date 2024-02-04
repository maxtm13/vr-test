<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<? $this->setFrameMode(true); ?>
<? use \Bitrix\Main\Localization\Loc,
    \Aspro\Functions\CAsproAllcorp3; ?>

<?
$bOrderViewBasket = $arParams['ORDER_VIEW'];
$dataItem = $bOrderViewBasket ? CAllcorp3::getDataItem($arResult) : false;
$bOrderButton = $arResult['PROPERTIES']['FORM_ORDER']['VALUE_XML_ID'] == 'YES';
$bAskButton = $arResult['PROPERTIES']['FORM_QUESTION']['VALUE_XML_ID'] == 'YES';
$bTopImg = $bTopSideImg = false;

$bTopDate = $arResult['DISPLAY_ACTIVE_FROM'] || strlen($arResult['DISPLAY_PROPERTIES']['DATA']['VALUE']);
$topDate = strlen($arResult['DISPLAY_PROPERTIES']['DATA']['VALUE']) ? $arResult['DISPLAY_PROPERTIES']['DATA']['VALUE'] : $arResult['DISPLAY_ACTIVE_FROM'];

// preview image
$bIcon = false;
$nImageID = is_array($arResult['FIELDS']['PREVIEW_PICTURE']) ? $arResult['FIELDS']['PREVIEW_PICTURE']['ID'] : $arResult['FIELDS']['PREVIEW_PICTURE'];
if (!$nImageID) {
    if ($nImageID = $arResult['DISPLAY_PROPERTIES']['ICON']['VALUE']) {
        $bIcon = true;
    }
}
$imageSrc = ($nImageID ? CFile::getPath($nImageID) : SITE_TEMPLATE_PATH . '/images/svg/noimage_content.svg');

/*set array props for component_epilog*/
$templateData = array(
    'ORDER' => $bOrderViewBasket,
    'ORDER_BTN' => ($bOrderButton || $bAskButton),
    'PREVIEW_PICTURE' => $arResult['PREVIEW_PICTURE'],
    'TAGS' => $arResult['TAGS'],
    'SECTIONS' => $arResult['PROPERTIES']['SECTION']['VALUE'],
    'H3_GOODS' => $arResult['PROPERTIES']['H3_GOODS']['VALUE'],
    'FILTER_URL' => $arResult['PROPERTIES']['FILTER_URL']['VALUE'],
    'MAP' => $arResult['PROPERTIES']['MAP']['VALUE'],
    'MAP_DOP_INFO' => $arResult['PROPERTIES']['INFO']['~VALUE'],
    'TIZERS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_TIZERS')),
    'FAQ' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_FAQ')),
    'REVIEWS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_REVIEWS')),
    'VACANCY' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_VACANCY')),
    'PARTNERS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_PARTNERS')),
    'SALE' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_SALE')),
    'NEWS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_NEWS')),
    'STAFF' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_STAFF')),
    'ARTICLES' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_ARTICLES')),
    'PROJECTS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_PROJECTS')),
    'SERVICES' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_SERVICES')),
    'GOODS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_GOODS', 'LINK_GOODS_FILTER')),
    //'TARIFFS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_TARIF')),
);

?>


<? if ($arResult['CATEGORY_ITEM']): ?>
    <meta itemprop="category" content="<?= $arResult['CATEGORY_ITEM']; ?>"/>
<? endif; ?>
<? if ($arResult['DETAIL_PICTURE']): ?>
    <meta itemprop="image" content="<?= $arResult['DETAIL_PICTURE']['SRC']; ?>"/>
<? endif; ?>
    <meta itemprop="name" content="<?= $arResult['NAME']; ?>"/>
    <link itemprop="url" href="<?= $arResult['DETAIL_PAGE_URL']; ?>"/>

<? // top banner?>
<? $templateData['SECTION_BNR_CONTENT'] = isset($arResult['PROPERTIES']['BNR_TOP']) && $arResult['PROPERTIES']['BNR_TOP']['VALUE_XML_ID'] == 'YES'; ?>
<? if ($templateData['SECTION_BNR_CONTENT']): ?>
    <?
    $templateData['SECTION_BNR_UNDER_HEADER'] = $arResult['PROPERTIES']['BNR_TOP_UNDER_HEADER']['VALUE_XML_ID'];
    $templateData['SECTION_BNR_COLOR'] = $arResult['PROPERTIES']['BNR_TOP_COLOR']['VALUE_XML_ID'];
    $atrTitle = $arResult['PROPERTIES']['BNR_TOP_BG']['DESCRIPTION'] ?: $arResult['PROPERTIES']['BNR_TOP_BG']['TITLE'] ?: $arResult['NAME'];
    $atrAlt = $arResult['PROPERTIES']['BNR_TOP_BG']['DESCRIPTION'] ?: $arResult['PROPERTIES']['BNR_TOP_BG']['ALT'] ?: $arResult['NAME'];
    $atrDop1 = $arResult['PROPERTIES']['BUTTON1ATTR']["VALUE"] ? $arResult['PROPERTIES']['BUTTON1ATTR']["VALUE"] : "";
    $atrDop2 = $arResult['PROPERTIES']['BUTTON2ATTR']["VALUE"] ? $arResult['PROPERTIES']['BUTTON2ATTR']["VALUE"] : "";

//buttons
    $bannerButtons = [['TITLE' => $arResult['PROPERTIES']['BUTTON1TEXT']['VALUE'] ?? '',
        'CLASS' => 'btn choise ' . ($arResult['PROPERTIES']['BUTTON1CLASS']['VALUE_XML_ID'] ?? 'btn-default') . ' ' . ($arResult['PROPERTIES']['BUTTON1COLOR']['VALUE_XML_ID'] ?? ''),
        'ATTR' => [($arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID'] === 'scroll' || !$arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID']
            ? 'data-block=".right_block .detail"'
            : 'target="' . $arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID'] . '"'),
            $atrDop1],
        'LINK' => $arResult['PROPERTIES']['BUTTON1LINK']['VALUE'],
        'TYPE' => $arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID'] === 'scroll' || !$arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID']
            ? 'anchor'
            : 'link']];

    if ($arResult['PROPERTIES']['BUTTON2TEXT']['VALUE'] && $arResult['PROPERTIES']['BUTTON2LINK']['VALUE']) {
        $bannerButtons[] = ['TITLE' => $arResult['PROPERTIES']['BUTTON2TEXT']['VALUE'],
            'CLASS' => 'btn choise ' . ($arResult['PROPERTIES']['BUTTON2CLASS']['VALUE_XML_ID'] ?? 'btn-default') . ' ' . ($arResult['PROPERTIES']['BUTTON2COLOR']['VALUE_XML_ID'] ?? ''),
            'ATTR' => [($arResult['PROPERTIES']['BUTTON2TARGET']['VALUE_XML_ID'] ? 'target="' . $arResult['PROPERTIES']['BUTTON2TARGET']['VALUE_XML_ID'] . '"' : ''),
                $atrDop2],
            'LINK' => $arResult['PROPERTIES']['BUTTON2LINK']['VALUE'],
            'TYPE' => 'link',];
    }
    ?>
    <? $this->SetViewTarget('section_bnr_content'); ?>
    <? \Aspro\Functions\CAsproAllcorp3::showBlockHtml(array(
        'FILE' => '/images/detail_banner.php',
        'PARAMS' => array(
            'TITLE' => $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] ?? $arResult['NAME'],
            'COLOR' => $templateData['SECTION_BNR_COLOR'],
            'TEXT' => array(
                'TOP' => $arResult['SECTION'] ? reset($arResult['SECTION']['PATH'])['NAME'] : '',
                'PREVIEW' => array(
                    'TYPE' => $arResult['FIELDS']['PREVIEW_TEXT_TYPE'],
                    'VALUE' => strlen($arResult['PROPERTIES']['ANONS']['VALUE']) ? $arResult['PROPERTIES']['ANONS']['VALUE'] : $arResult['FIELDS']['PREVIEW_TEXT'],
                ),
            ),
            'PICTURES' => array(
                'BG' => CFile::GetFileArray($arResult['PROPERTIES']['BNR_TOP_BG']['VALUE']),
                'IMG' => CFile::GetFileArray($arResult['PROPERTIES']['BNR_TOP_IMG']['VALUE']),
            ),
            'BUTTONS' => $bannerButtons,
            'ATTR' => array(
                'ALT' => $atrAlt,
                'TITLE' => $atrTitle,
            ),
            'TOP_IMG' => $bTopImg
        ),
    )); ?>
    <? $this->EndViewTarget(); ?>
<? elseif ($arResult['FIELDS']['DETAIL_PICTURE']): ?>
    <?
// single detail image
    $templateData['BANNER_TOP_ON_HEAD'] = isset($arResult['PROPERTIES']['PHOTOPOS']) && $arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'] == 'TOP_ON_HEAD';

    $atrTitle = (strlen($arResult['DETAIL_PICTURE']['DESCRIPTION']) ? $arResult['DETAIL_PICTURE']['DESCRIPTION'] : (strlen($arResult['DETAIL_PICTURE']['TITLE']) ? $arResult['DETAIL_PICTURE']['TITLE'] : $arResult['NAME']));
    $atrAlt = (strlen($arResult['DETAIL_PICTURE']['DESCRIPTION']) ? $arResult['DETAIL_PICTURE']['DESCRIPTION'] : (strlen($arResult['DETAIL_PICTURE']['ALT']) ? $arResult['DETAIL_PICTURE']['ALT'] : $arResult['NAME']));

    $bTopImg = (strpos($arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'], 'TOP') !== false);
    $templateData['IMG_TOP_SIDE'] = isset($arResult['PROPERTIES']['PHOTOPOS']) && $arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'] == 'TOP_SIDE';
    ?>

    <? if (!$templateData['IMG_TOP_SIDE']): ?>
        <? if ($bTopImg): ?>
            <? if ($templateData['BANNER_TOP_ON_HEAD']): ?>
                <? $this->SetViewTarget('side-over-title'); ?>
            <? else: ?>
                <? $this->SetViewTarget('top_section_filter_content'); ?>
            <? endif; ?>
        <? endif; ?>

        <? \Aspro\Functions\CAsproAllcorp3::showBlockHtml(['FILE' => '/images/detail_single.php',
            'PARAMS' => ['TYPE' => $arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'],
                'URL' => $arResult['DETAIL_PICTURE']['SRC'],
                'ALT' => $atrAlt,
                'TITLE' => $atrTitle,
                'TOP_IMG' => $bTopImg],]) ?>

        <? if ($bTopImg): ?>
            <? $this->EndViewTarget(); ?>
        <? endif; ?>
    <? endif; ?>

<? endif; ?>

<? ob_start(); ?>
    <div
            class="btn btn-default btn-wide btn-lg <?= ($bOrderButton && $bAskButton) ? 'btn-transparent-border' : ''; ?> animate-load"
            data-event="jqm" data-param-id="<?= CAllcorp3::getFormID("aspro_allcorp3_question"); ?>"
            data-autoload-need_product="<?= CAllcorp3::formatJsName($arResult['NAME']) ?>" data-name="question">
        <span><?= (strlen($arParams['S_ASK_QUESTION']) ? $arParams['S_ASK_QUESTION'] : Loc::getMessage('S_ASK_QUESTION')) ?></span>
    </div>
<? $askButtonHtml = ob_get_clean() ?>

<? ob_start(); ?>
    <div class="btn btn-default btn-wide btn-lg animate-load"
         data-event="jqm"
         data-param-id="<?= CAllcorp3::getFormID($arParams['FORM_ID_ORDER_SERVISE']); ?>"
         data-autoload-need_product="<?= CAllcorp3::formatJsName($arResult['NAME']) ?>"
         data-autoload-service="<?= \CAllcorp3::formatJsName($arResult["NAME"]); ?>"
         data-autoload-project="<?= \CAllcorp3::formatJsName($arResult["NAME"]); ?>"
         data-autoload-news="<?= \CAllcorp3::formatJsName($arResult["NAME"]); ?>"
         data-autoload-sale="<?= \CAllcorp3::formatJsName($arResult["NAME"]); ?>"
         data-name="order_project">
        <span><?= (strlen($arParams['S_ORDER_SERVISE']) ? $arParams['S_ORDER_SERVISE'] : Loc::getMessage('S_ORDER_PROJECT')) ?></span>
    </div>
<? $orderButtonHtml = ob_get_clean() ?>

<? // form question?>
<? if ($bAskButton): ?>
    <? $this->SetViewTarget('under_sidebar_content'); ?>
    <div class="ask-block bordered rounded-4">
        <div class="ask-block__container">
            <div class="ask-block__icon">
                <?= CAllcorp3::showIconSvg('ask colored', SITE_TEMPLATE_PATH . '/images/svg/Question_lg.svg'); ?>
            </div>
            <div class="ask-block__text text-block color_666 font_14">
                <? $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    array(
                        "AREA_FILE_SHOW" => "page",
                        "AREA_FILE_SUFFIX" => "ask",
                        "EDIT_TEMPLATE" => ""
                    )
                ); ?>
            </div>
            <div class="ask-block__button">
                <?= str_replace('btn-wide btn-lg', ' btn-transparent-border ', $askButtonHtml); ?>
            </div>
        </div>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<?
$bShowCategory = ($arResult['CATEGORY_ITEM'] && $arParams['SHOW_CATEGORY'] == 'Y');
$bActiveDate = (
    strlen($arResult['DISPLAY_PROPERTIES']['PERIOD']['VALUE']) ||
    (
        $arResult['DISPLAY_ACTIVE_FROM'] &&
        (
            in_array('DATE_ACTIVE_FROM', $arParams['FIELD_CODE']) ||
            in_array('ACTIVE_FROM', $arParams['FIELD_CODE'])
        )
    )
);
// discount value
$bSaleNumber = strlen($arResult['DISPLAY_PROPERTIES']['SALE_NUMBER']['VALUE']);
// dicount counter
$bDiscountCounter = ($arResult['ACTIVE_TO'] && in_array('ACTIVE_TO', $arParams['FIELD_CODE']));
?>

<? if ($bShowCategory || $bActiveDate || $bSaleNumber || $bDiscountCounter): ?>
    <div class="top-meta">
        <div class="line-block line-block--20 line-block--16-vertical line-block--flex-wrap">
            <? if ($bShowCategory): ?>
                <div class="line-block__item">
                    <div class="top-meta__section bordered rounded-4 font_13 color_333">
                        <?= $arResult['CATEGORY_ITEM']; ?>
                    </div>
                </div>
            <? endif; ?>
            <? if ($bSaleNumber || $bDiscountCounter): ?>
                <div class="line-block__item">
                    <div class="line-block line-block--8 line-block--16-vertical line-block--flex-wrap">
                        <? if ($bSaleNumber): ?>
                            <div class="line-block__item">
                                <div class="top-meta__discount discount-sticker rounded-3">
                                    <?= $arResult['DISPLAY_PROPERTIES']['SALE_NUMBER']['VALUE']; ?>
                                </div>
                            </div>
                        <? endif; ?>
                        <? if ($bDiscountCounter): ?>
                            <? \Aspro\Functions\CAsproAllcorp3::showDiscountCounter(['WRAPPER' => true,
                                'WRAPPER_CLASS' => 'line-block__item',
                                'TYPE' => 'block',
                                'ITEM' => $arResult]); ?>
                        <? endif; ?>
                    </div>
                </div>
            <? endif; ?>
            <? if ($bActiveDate): ?>
                <div class="line-block__item">
                    <div class="top-meta__date font_13 color_333">
                        <? if ($bSaleNumber || $bDiscountCounter): ?>
                            <?= CAllcorp3::showIconSvg("sale", SITE_TEMPLATE_PATH . '/images/svg/Sale_discount.svg', '', '', true, false); ?>
                        <? endif; ?>
                        <?= (strlen($arResult['DISPLAY_PROPERTIES']['PERIOD']['VALUE'])
                            ? $arResult['DISPLAY_PROPERTIES']['PERIOD']['VALUE']
                            : $arResult['DISPLAY_ACTIVE_FROM']
                        ); ?>
                    </div>
                </div>
            <? endif; ?>
        </div>
    </div>
<? endif; ?>

<? $bTopInfo = false; ?>
<? if (
    $arResult['DISPLAY_PROPERTIES']['TASK_PROJECT']['~VALUE']['TEXT'] &&
    ($bOrderButton || $bAskButton || $arResult["CHARACTERISTICS"])
): ?>
    <? $bTopInfo = true; ?>
    <? $templateData['ORDER_BTN'] = false ?>
<? endif; ?>

<? if ($templateData['IMG_TOP_SIDE']): ?>
    <? $this->SetViewTarget('top_section_filter_content'); ?>
    <div class="maxwidth-theme">
        <div class="rounded-4 bordered top-info">
            <div class="flexbox flexbox--direction-row ">
                <div class="top-info__picture flex-1">
                    <div
                            class="owl-carousel owl-carousel--color-dots owl-carousel--nav-hover-visible owl-bg-nav owl-carousel--light owl-carousel--button-wide"
                            data-plugin-options='{"items": "1", "autoplay" : false, "autoplayTimeout" : "3000", "smartSpeed":1000, "dots": true, "dotsContainer": false, "nav": true, "loop": false, "index": true, "margin": 0}'>
                        <? foreach ($arResult['TOP_GALLERY'] as $arPhoto): ?>
                            <div class="top-info__picture-item">
                                <a href="<?= $arPhoto['DETAIL']['SRC'] ?>" class="top-info__link fancy"
                                   data-fancybox="big-gallery" target="_blank" title="<?= $arPhoto['TITLE'] ?>">
                                    <span class="top-info__img"
                                          style="background-image: url(<?= $arPhoto['PREVIEW']['src'] ?>)"></span>
                                </a>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>


                <? if ($bTopInfo): ?>
                    <div class="top-info__text flex-1">
                        <div class="top-info__text-inner">
                            <? if ($arResult['DISPLAY_PROPERTIES']['TASK_PROJECT']['~VALUE']['TEXT']): ?>
                                <div class="top-info__task">
                                    <? if ($bTopDate): ?>
                                        <div class="font_13 color_999">
                                            <?= $topDate ?>
                                        </div>
                                    <? endif; ?>
                                    <div class="font_18 color_333 font_large top-info__task-value">
                                        <?= $arResult['DISPLAY_PROPERTIES']['TASK_PROJECT']['~VALUE']['TEXT'] ?>
                                    </div>
                                </div>
                            <? endif; ?>
                            <? if ($arResult['CHARACTERISTICS'] || ($bOrderButton || $bAskButton)): ?>
                                <div class="line-block line-block--align-normal line-block--40 top-info__bottom">
                                    <? if ($arResult['CHARACTERISTICS']): ?>
                                        <div class="line-block__item flex-1">
                                            <div class="properties list">
                                                <?
                                                $cntChars = count($arResult['CHARACTERISTICS']);
                                                $j = 0;
                                                ?>
                                                <? foreach ($arResult['CHARACTERISTICS'] as $code => $arProp): ?>
                                                    <? if ($j < $arParams['VISIBLE_PROP_COUNT']): ?>
                                                        <div class="properties__item">
                                                            <div class="properties__title font_13 color_999">
                                                                <?= $arProp['NAME'] ?>
                                                                <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y"): ?>
                                                                    <div class="hint hint--down">
                                                                        <span
                                                                                class="hint__icon rounded bg-theme-hover border-theme-hover bordered"><i>?</i></span>
                                                                        <div
                                                                                class="tooltip"><?= $arProp["HINT"] ?></div>
                                                                    </div>
                                                                <? endif; ?>
                                                            </div>
                                                            <div class="properties__value color_333 font_15 font_short">
                                                                <? if (is_array($arProp["DISPLAY_VALUE"]) && count($arProp["DISPLAY_VALUE"]) > 1): ?>
                                                                    <?= implode(', ', $arProp["DISPLAY_VALUE"]); ?>
                                                                <? elseif ($code == 'SITE'): ?>
                                                                    <? $valProp = preg_replace('#(http|https)(://)|((\?.*)|(\/\?.*))#', '', $arProp['VALUE']); ?>
                                                                    <!--noindex-->
                                                                    <a class="dark_link"
                                                                       href="<?= (strpos($arProp['VALUE'], 'http') === false ? 'http://' : '') . $arProp['VALUE']; ?>"
                                                                       rel="nofollow" target="_blank">
                                                                        <?= $valProp ?>
                                                                    </a>
                                                                    <!--/noindex-->
                                                                <? else: ?>
                                                                    <?= $arProp["DISPLAY_VALUE"]; ?>
                                                                <? endif; ?>
                                                            </div>
                                                        </div>
                                                        <? $j++; ?>
                                                    <? endif; ?>
                                                <? endforeach; ?>
                                            </div>
                                            <? if ($cntChars > $arParams['VISIBLE_PROP_COUNT']): ?>
                                                <div class="more-char-link">
                                                    <span class="choise dotted colored pointer"
                                                          data-block="char"><?= Loc::getMessage('MORE_CHAR_BOTTOM'); ?></span>
                                                </div>
                                            <? else: ?>
                                                <? $arResult['CHARACTERISTICS'] = []; ?>
                                            <? endif; ?>
                                        </div>
                                    <? endif; ?>
                                    <? if ($bOrderButton || $bAskButton): ?>
                                        <div class="line-block__item flex-1 buttons-block">
                                            <? if ($bOrderButton): ?>
                                                <div>
                                                    <?= $orderButtonHtml; ?>
                                                </div>
                                            <? endif; ?>
                                            <? if ($bAskButton): ?>
                                                <div>
                                                    <?= $askButtonHtml; ?>
                                                </div>
                                            <? endif; ?>
                                        </div>
                                    <? endif; ?>
                                </div>
                            <? endif; ?>
                        </div>
                    </div>
                <? endif; ?>
            </div>
        </div>
    </div>
    <? $this->EndViewTarget(); ?>
<? elseif ($bTopInfo): ?>
    <? $this->SetViewTarget('top_detail_content'); ?>
    <? $class = 'bordered grey-bg'; ?>
    <div
            class="detail-info-wrapper <?= ($templateData['SECTION_BNR_CONTENT'] || $bTopImg ? 'detail-info-wrapper--with-img' : ''); ?>">
        <? if (
        $arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'] != 'TOP' &&
        $arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'] != 'TOP_ON_HEAD' &&
        !$templateData['SECTION_BNR_CONTENT']
        ): ?>
        <div class="maxwidth-theme">
            <? $class .= ' rounded-4' ?>
            <? endif; ?>

            <div class="<?= $class ?>">
                <? if (
                $templateData['SECTION_BNR_CONTENT'] ||
                (
                    $arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'] != 'TOP_CONTENT' &&
                    $bTopImg
                )
                ): ?>
                <div class="maxwidth-theme">
                    <? endif; ?>

                    <div class="detail-info">
                        <div class="line-block line-block--align-normal line-block--40">
                            <? if ($arResult['DISPLAY_PROPERTIES']['TASK_PROJECT']['~VALUE']['TEXT'] || $arResult["CHARACTERISTICS"]): ?>
                                <div class="line-block__item detail-info__inner flex-grow-1">
                                    <? if ($bTopDate): ?>
                                        <div class="detail-info__date font_13 color_999">
                                            <?= $topDate ?>
                                        </div>
                                    <? endif; ?>
                                    <? if ($arResult['DISPLAY_PROPERTIES']['TASK_PROJECT']['~VALUE']['TEXT']): ?>
                                        <div class="detail-info__text font_18 color_333 font_large">
                                            <?= $arResult['DISPLAY_PROPERTIES']['TASK_PROJECT']['~VALUE']['TEXT'] ?>
                                        </div>
                                    <? endif; ?>
                                    <? if ($arResult['CHARACTERISTICS']): ?>
                                        <div class="detail-info__chars">
                                            <div class="properties list detail-info__chars-inner">
                                                <div class="line-block line-block--align-normal">
                                                    <?
                                                    $cntChars = count($arResult['CHARACTERISTICS']);
                                                    $j = 0;
                                                    ?>
                                                    <? foreach ($arResult['CHARACTERISTICS'] as $code => $arProp): ?>
                                                        <? if ($j < $arParams['VISIBLE_PROP_COUNT']): ?>
                                                            <div
                                                                    class="line-block__item col-lg-3 col-md-4 col-sm-6 detail-info__chars-item">
                                                                <div class="properties__title font_13 color_999">
                                                                    <?= $arProp['NAME'] ?>
                                                                    <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y"): ?>
                                                                        <div class="hint hint--down">
                                                    <span
                                                            class="hint__icon rounded bg-theme-hover border-theme-hover bordered"><i>?</i></span>
                                                                            <div
                                                                                    class="tooltip"><?= $arProp["HINT"] ?></div>
                                                                        </div>
                                                                    <? endif; ?>
                                                                </div>
                                                                <div
                                                                        class="properties__value color_333 font_15 font_short">
                                                                    <? if (is_array($arProp["DISPLAY_VALUE"]) && count($arProp["DISPLAY_VALUE"]) > 1): ?>
                                                                        <?= implode(', ', $arProp["DISPLAY_VALUE"]); ?>
                                                                    <? elseif ($code == 'SITE'): ?>
                                                                        <? $valProp = preg_replace('#(http|https)(://)|((\?.*)|(\/\?.*))#', '', $arProp['VALUE']); ?>
                                                                        <!--noindex-->
                                                                        <a class="dark_link"
                                                                           href="<?= (strpos($arProp['VALUE'], 'http') === false ? 'http://' : '') . $arProp['VALUE']; ?>"
                                                                           rel="nofollow" target="_blank">
                                                                            <?= $valProp ?>
                                                                        </a>
                                                                        <!--/noindex-->
                                                                    <? else: ?>
                                                                        <?= $arProp["DISPLAY_VALUE"]; ?>
                                                                    <? endif; ?>
                                                                </div>
                                                            </div>
                                                            <? $j++; ?>
                                                        <? endif; ?>
                                                    <? endforeach; ?>
                                                </div>
                                            </div>
                                            <? if ($cntChars > $arParams['VISIBLE_PROP_COUNT']): ?>
                                                <div class="more-char-link">
                                                    <span class="choise dotted colored pointer"
                                                          data-block="char"><?= Loc::getMessage('MORE_CHAR_BOTTOM'); ?></span>
                                                </div>
                                            <? else: ?>
                                                <? $arResult['CHARACTERISTICS'] = []; ?>
                                            <? endif; ?>
                                        </div>
                                    <? endif; ?>
                                </div>
                            <? endif; ?>
                            <? if ($bOrderButton || $bAskButton): ?>
                                <div class="line-block__item detail-info__btns buttons-block">
                                    <? if ($bOrderButton): ?>
                                        <div>
                                            <?= $orderButtonHtml; ?>
                                        </div>
                                    <? endif; ?>
                                    <? if ($bAskButton): ?>
                                        <div>
                                            <?= $askButtonHtml; ?>
                                        </div>
                                    <? endif; ?>
                                </div>
                            <? endif; ?>
                        </div>
                    </div>

                    <? if (
                    $templateData['SECTION_BNR_CONTENT'] ||
                    (
                        $arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'] != 'TOP_CONTENT' &&
                        $bTopImg
                    )
                    ): ?>
                </div>
            <? endif; ?>
            </div>

            <? if (
            $arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'] != 'TOP' &&
            $arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'] != 'TOP_ON_HEAD' &&
            !$templateData['SECTION_BNR_CONTENT']
            ): ?>
        </div>
    <? endif; ?>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<? if (($bOrderButton || $bAskButton) && !$bTopInfo): ?>
    <? $this->SetViewTarget('PRODUCT_ORDER_SALE_INFO'); ?>
    <div class="order-info-block" itemprop="offers" itemscope itemtype="http://schema.org/Offer"
         data-id="<?= $arResult['ID'] ?>"<?= ($bOrderViewBasket ? ' data-item="' . $dataItem . '"' : '') ?>>
        <div class="detail-info__image-wrapper rounded hidden">
            <div class="detail-info__image" data-src="<?= $imageSrc ?>">
                <? if ($bIcon): ?>
                    <?= CAllcorp3::showIconSvg(' fill-theme tariffs-list__item-image-icon', $imageSrc); ?>
                <? else: ?>
                    <span class="tariffs-list__item-image" style="background-image: url(<?= $imageSrc ?>);"></span>
                <? endif; ?>
            </div>
        </div>

        <div class="line-block line-block--align-normal line-block--40">
            <div class="line-block__item icon-svg-block">
                <?= CAllcorp3::showIconSvg('review stroke-theme', SITE_TEMPLATE_PATH . '/images/svg/order_large.svg'); ?>
            </div>
            <div class="line-block__item flex-1">
                <div class="text font_18 color_333 font_large">
                    <? $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        array(
                            'AREA_FILE_SHOW' => 'page',
                            'AREA_FILE_SUFFIX' => 'ask_services',
                            'EDIT_TEMPLATE' => ''
                        )
                    ); ?>
                </div>
            </div>
            <?= CAsproAllcorp3::showPrice(['ITEM' => $arResult,
                'PARAMS' => $arParams,
                'SHOW_SCHEMA' => true,
                'BASKET' => $bOrderViewBasket,
                'WRAPPER_CLASS' => "line-block__item no-shrinked",]); ?>
            <div class="line-block__item order-info-btns mybtns">
                <div class="line-block line-block--align-normal line-block--12">
                    <? if ($bOrderButton): ?>
                        <div class="line-block__item">
                            <?= CAsproAllcorp3::showBasketButton(['ITEM' => $arResult,
                                'PARAMS' => $arParams,
                                'BASKET' => (isset($arParams['ORDER_BASKET']) ? $arParams['ORDER_BASKET'] : $bOrderViewBasket),
                                'ORDER_BTN' => $bOrderButton,
                                'BTN_CLASS' => 'btn-lg btn-wide',
                                'BTN_IN_CART_CLASS' => 'btn-lg btn-wide',
                                'BTN_CALLBACK_CLASS' => 'btn-transparent-border',
                                'TO_ORDER_TEXT' => ($arParams['S_ORDER_SERVISE'] ? $arParams['S_ORDER_SERVISE'] : Loc::getMessage('S_ORDER_SERVISE')),
                                'ORDER_FORM_ID' => $arParams["FORM_ID_ORDER_SERVISE"],
                                'SHOW_COUNTER' => false,]); ?>
                        </div>
                        <? if ($bAskButton): ?>
                            <div class="line-block__item">
                                <!--                                <a-->
                                <!--                                        href="javascript:void(0)"-->
                                <!--                                        rel="nofollow"-->
                                <!--                                        class="btn btn-default btn-lg btn-transparent-border animate-load btn-wide"-->
                                <!--                                        data-param-id="-->
                                <? //= \CAllcorp3::getFormID("aspro_allcorp3_question"); ?><!--"-->
                                <!--                                        data-name="question"-->
                                <!--                                        data-event="jqm"-->
                                <!--                                        title="-->
                                <? //= Loc::getMessage('QUESTION_FORM_TITLE') ?><!--"-->
                                <!--                                        data-autoload-need_product="-->
                                <? //= \CAllcorp3::formatJsName($arResult['NAME']) ?><!--"-->
                                <!--                                >-->
                                <!--                                    <span>?</span>-->
                                <!--                                </a>-->
                                <a data-b24-crm-button-widget-blank=""
                                   data-b24-crm-button-widget="openline_wz_whatsapp_c6bb79617919876aecd5b2f8aa53526c2"
                                   class="b24-widget-button-social-item ui-icon ui-icon-service-wz_whatsapp_c6bb79617919876aecd5b2f8aa53526c2 connector-icon-45"
                                   title="" data-b24-widget-sort="400" href="https://wa.me/79160880365" target="_blank">
                                    <i></i>
                                    <span data-b24-crm-button-tooltip="" class="b24-widget-button-social-tooltip">WhatsApp</span>
                                </a>
                            </div>
                        <? endif; ?>
                    <? elseif ($bAskButton): ?>
                        <div class="line-block__item">
                            <?= $askButtonHtml; ?>
                        </div>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<? $templateData['PREVIEW_TEXT'] = boolval(strlen($arResult['FIELDS']['PREVIEW_TEXT']) && !$templateData['SECTION_BNR_CONTENT']); ?>

<? if (boolval(strlen($arResult['FIELDS']['PREVIEW_TEXT'])) && boolval(strlen($arResult['PROPERTIES']['ANONS']['VALUE'])) && $templateData['SECTION_BNR_CONTENT']) {
    $templateData['PREVIEW_TEXT'] = true;
} ?>

<? if (
    $templateData['PREVIEW_TEXT'] &&
    (in_array($arResult['PROPERTIES']['PHOTOPOS']['VALUE_XML_ID'], ['LEFT', 'RIGHT']))
): ?>
    <div class="introtext">
        <? if ($arResult['PREVIEW_TEXT_TYPE'] == 'text'): ?>
            <p><?= $arResult['FIELDS']['PREVIEW_TEXT']; ?></p>
        <? else: ?>
            <?= $arResult['FIELDS']['PREVIEW_TEXT']; ?>
        <? endif; ?>
    </div>
    <? unset($templateData['PREVIEW_TEXT']); ?>
<? endif; ?>

<? // detail description?>
<? $templateData['DETAIL_TEXT'] = boolval(strlen($arResult['DETAIL_TEXT'])); ?>
<? $templateData['TOP_SECTION'] = boolval(strlen($arResult['PROPERTIES']['TOP_SECTION']['VALUE']['TEXT'])); ?>
<? $templateData['BOTTOM_SECTION'] = boolval(strlen($arResult['PROPERTIES']['BOTTOM_SECTION']['VALUE']['TEXT'])); ?>


<? if ($templateData['DETAIL_TEXT'] || $templateData['PREVIEW_TEXT'] || $templateData['BOTTOM_SECTION'] || $templateData['TOP_SECTION']): ?>
    <? $this->SetViewTarget('PRODUCT_DETAIL_TEXT_INFO'); ?>
    <div class="content" itemprop="description">
        <!--Вывод "ситуаций"-->

        <? $arSituationText = $arResult["PROPERTIES"]["SITUATION_TEXT"]["VALUE"]["TEXT"];
        $arSituationTitle = $arResult["PROPERTIES"]["SITUATION_TITLE"]["VALUE"];
        ?>
        <div class="situation">
            <? if ($arSituationText !== ""): ?>
                <div class="situation_description"><?= $arSituationText ?></div> <? endif; ?>
            <? if ($arSituationTitle !== ""): ?>
                <div class="situation_title"><?= $arSituationTitle ?></div> <? endif ?>
            <? $GLOBALS['arrFilter2'] = array('ID' => ($arResult["PROPERTIES"]["SERVICE_SITUATION"]["VALUE"])); ?>
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "situation-list-new", array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "COMPONENT_TEMPLATE" => ".default",
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "arrFilter2",    // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "52",    // Код информационного блока
                "IBLOCK_TYPE" => "-",    // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
            ),
                false
            ); ?>
            <div class="situation-question">
                <div class="situation-question-text">Не нашли вашу ситуацию? Задайте вопрос нашим юристам</div>
                <div class="situation-question-buttons">
                    <div class="btn animate-load btn-default has-ripple" data-event="jqm" data-param-id="5">Заказать
                        бесплатную консультацию
                    </div>
                    <a data-b24-crm-button-widget-blank=""
                       data-b24-crm-button-widget="openline_wz_whatsapp_c6bb79617919876aecd5b2f8aa53526c2"
                       class="b24-widget-button-social-item ui-icon ui-icon-service-wz_whatsapp_c6bb79617919876aecd5b2f8aa53526c2 connector-icon-45"
                       title="" data-b24-widget-sort="400" href="https://wa.me/79160880365" target="_blank">
                        <i></i>
                        <span data-b24-crm-button-tooltip="" class="b24-widget-button-social-tooltip">WhatsApp</span>
                    </a>
                </div>

            </div>
        </div>
        <!--Вывод "ситуаций"_END-->

        <? if ($templateData['PREVIEW_TEXT']): ?>
            <div class="introtext">
                <? if ($arResult['PREVIEW_TEXT_TYPE'] == 'text'): ?>
                    <p><?= $arResult['FIELDS']['PREVIEW_TEXT']; ?></p>
                <? else: ?>
                    <?= $arResult['FIELDS']['PREVIEW_TEXT']; ?>
                <? endif; ?>
            </div>
        <? endif ?>
        <!--        Вывод свойства _Первая часть страницы_-->
        <? if ($templateData['TOP_SECTION']) : ?>
            <?=$arResult['PROPERTIES']['TOP_SECTION']['~VALUE']['TEXT'];?>
            <? elseif ($templateData['DETAIL_TEXT']): ?>
                <?= $arResult['DETAIL_TEXT']; ?>
        <? endif; ?>


    </div>
    <!--   maxtm1  -->
    <div class="block-tariffsInPage">
        <?//show services block?>
        <!--    --><?//if($templateData['SERVICES']['VALUE'] && $templateData['SERVICES']['IBLOCK_ID']):?>
        <!--        --><?//if(!isset($html_services)):?>
        <?
//        $GLOBALS['arrServicesFilter'] = array('ID' => $templateData['SERVICES']['VALUE']);
//        $GLOBALS['arrServicesFilter'] = array_merge($GLOBALS['arrServicesFilter'], (array)$GLOBALS['arRegionLink']);
        ?>



<?
        $GLOBALS['arrTariffsFilter'] = array('ID' => $arResult['PROPERTIES']['LINK_TARIF']['VALUE']);
        $GLOBALS['arrTariffsFilter'] = array_merge($GLOBALS['arrTariffsFilter'], (array)$GLOBALS['arRegionLink']);
?>

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "tariffs-list-forServicePage",
            array(
                "IBLOCK_TYPE" => "aspro_allcorp3_catalog",
                "IBLOCK_ID" => "35",
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ID",
                "SORT_ORDER2" => "DESC",
                "FILTER_NAME" => "arrTariffsFilter",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "PREVIEW_TEXT",
                    2 => "PREVIEW_PICTURE",
                    3 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "FORM_ORDER",
                    2 => "HIT",
                    3 => "ONLY_ONE_PRICE",
                    4 => "PRICE_CURRENCY",
                    5 => "TARIF_PRICE_1",
                    6 => "TARIF_PRICE_2",
                    7 => "TARIF_PRICE_2_DISC",
                    8 => "TARIF_PRICE_3",
                    9 => "TARIF_PRICE_3_DISC",
                    10 => "TARIF_PRICE_DEFAULT",
                    11 => "TARIF_PRICE_DEFAULT_DISC",
                    12 => "MULTI_PROP_BOTTOM_PROPS",
                    13 => "MULTI_PROP",
                    14 => "SUPPLIED",
                    15 => "USERS",
                    16 => "EXTENSION",
                    17 => "DURATION",
                    18 => "GROUPS_USERS",
                    19 => "TASK",
                    20 => "ADMIN",
                    21 => "VOLUME",
                    22 => "ONLINE",
                    23 => "FILE_STORAGE",
                    24 => "MESSAGE",
                    25 => "MEMORY",
                    26 => "CPU",
                    27 => "IP",
                    28 => "HOSTING_SITES",
                    29 => "KOLLICHESTVO_BAZ_DANNIX",
                    30 => "UPDATES",
                    31 => "LANGUAGES",
                    32 => "TARIF_PRICE_1_DISC",
                    33 => "TARIF_PRICE_4",
                    34 => "ICON",
                    35 => "VISA",
                    36 => "NUM_DEVICES",
                    37 => "APPLE",
                    38 => "ELPURSE",
                    39 => "API_INTEGRATION",
                    40 => "SIEM_SYSTEM",
                    41 => "COLLECT_INFO",
                    42 => "RULES_SIGNAT",
                    43 => "SCANNER",
                    44 => "ANTIVIRUS",
                    45 => "PROTECT_PAYMENT",
                    46 => "PROTECT_CAMERA",
                    47 => "ANTIVOR",
                    48 => "CONTROL",
                    49 => "SUPPORT_FREE",
                    50 => "GUARANTEE",
                    51 => "BLOCKING_SITES",
                    52 => "BLOCKING_TRAFFIC",
                    53 => "SECURITY",
                    54 => "PROTECT_CHILDREN",
                    55 => "SUM_FINANCING",
                    56 => "TERM_LEASING",
                    57 => "INSURANCE",
                    58 => "CURRENCY",
                    59 => "ADVANCE_PAY",
                    60 => "RATE",
                    61 => "PERCENTAGE",
                    62 => "PAYMENTS",
                    63 => "SUPPORT",
                    64 => "NOTIFICATION",
                    65 => "TURN",
                    66 => "TARIF_ITEM",
                    67 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600000",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "j F Y",
                "SET_TITLE" => "N",
                "SET_STATUS_404" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "PAGER_TEMPLATE" => "ajax",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
                "PAGER_SHOW_ALL" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "COMPONENT_TEMPLATE" => "tariffs-list",
                "SET_LAST_MODIFIED" => "N",
                "STRICT_SECTION_CHECK" => "Y",
                "SHOW_DETAIL_LINK" => "Y",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "SHOW_DATE" => "N",
                "COUNT_IN_LINE" => "3",
                "USE_DETAIL" => $bTariffsUseDetail?"Y":"N",
                "VISIBLE_PROP_COUNT" => "1",
                "ROW_VIEW" => $tariffsDetailLinked=="type_3",
                "BORDER" => true,
                "ITEM_HOVER_SHADOW" => true,
                "DARK_HOVER" => false,
                "ROUNDED" => true,
                "ROUNDED_IMAGE" => $tariffsDetailLinked=="type_2"&&$itemsImages=="ROUND_IMAGES",
                "ELEMENTS_ROW" => $tariffsDetailLinked=="type_3"?"1":"3",
                "MAXWIDTH_WRAP" => false,
                "MOBILE_SCROLLED" => false,
                "HIDE_PAGINATION" => "N",
                "SLIDER" => $tariffsDetailLinked!=="type_3",
                "GRID_GAP" => $bItemsOffset?"0":"32",
                "DOTS_0" => "Y",
                "ITEM_0" => "1",
                "DOTS_380" => "Y",
                "ITEM_380" => "1",
                "DOTS_768" => "N",
                "ITEM_768" => "2",
                "DOTS_1200" => "N",
                "ITEM_1200" => "3",
                "VIEW_TYPE" => $tariffsDetailLinked,
                "ORDER_VIEW" => $bOrderViewBasket,
                "NARROW" => true,
                "ITEMS_OFFSET" => $bItemsOffset,
                "IMAGES" => $itemsImages,
                "HIDE_LEFT_TEXT_BLOCK" => "Y",
                "TABS" => "INSIDE",
                "DEFAULT_PRICE_KEY" => "",
                "SHOW_TITLE" => false,
                "TITLE_POSITION" => "",
                "TITLE" => "",
                "RIGHT_TITLE" => "",
                "RIGHT_LINK" => "",
                "CHECK_REQUEST_BLOCK" => CAllcorp3::checkRequestBlock("tariffs"),
                "IS_AJAX" => CAllcorp3::checkAjaxRequest(),
                "NAME_SIZE" => "18",
                "SUBTITLE" => "",
                "SHOW_PREVIEW_TEXT" => "Y",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO"
            ),
            false,
            array(
                "HIDE_ICONS" => "N"
            )
        );?>
    </div>
    <div class="include_feedback">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/free_consulting.php"
            )
        );?>
    </div>
    <div class="bottom_section">
        <pre>
            <?print_r($arResult['PROPERTIES']['BOTTOM_SECTION']['~VALUE']['TEXT'])?>
        </pre>
    </div>
    <!--   maxtm1_END_  -->
    <? $this->EndViewTarget(); ?>
<? endif; ?>



<? // props content?>
<? $templateData['CHARACTERISTICS'] = boolval($arResult['CHARACTERISTICS']); ?>
<? if ($arResult['CHARACTERISTICS']): ?>
    <? $this->SetViewTarget('PRODUCT_PROPS_INFO'); ?>
    <? $strGrupperType = $arParams["GRUPPER_PROPS"]; ?>
    <? if ($strGrupperType == "GRUPPER"): ?>
        <div class="props_block bordered rounded-4">
            <div class="props_block__wrapper">
                <? $APPLICATION->IncludeComponent(
                    "redsign:grupper.list",
                    "",
                    array(
                        "CACHE_TIME" => "3600000",
                        "CACHE_TYPE" => "A",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                        "DISPLAY_PROPERTIES" => $arResult["CHARACTERISTICS"]
                    ),
                    $component, array('HIDE_ICONS' => 'Y')
                ); ?>
            </div>
        </div>
    <? elseif ($strGrupperType == "WEBDEBUG"): ?>
        <div class="props_block bordered rounded-4">
            <div class="props_block__wrapper">
                <? $APPLICATION->IncludeComponent(
                    "webdebug:propsorter",
                    "linear",
                    array(
                        "IBLOCK_TYPE" => $arResult['IBLOCK_TYPE'],
                        "IBLOCK_ID" => $arResult['IBLOCK_ID'],
                        "PROPERTIES" => $arResult['CHARACTERISTICS'],
                        "EXCLUDE_PROPERTIES" => array(),
                        "WARNING_IF_EMPTY" => "N",
                        "WARNING_IF_EMPTY_TEXT" => "",
                        "NOGROUP_SHOW" => "Y",
                        "NOGROUP_NAME" => "",
                        "MULTIPLE_SEPARATOR" => ", "
                    ),
                    $component, array('HIDE_ICONS' => 'Y')
                ); ?>
            </div>
        </div>
    <? elseif ($strGrupperType == "YENISITE_GRUPPER"): ?>
        <div class="props_block bordered rounded-4">
            <div class="props_block__wrapper">
                <? $APPLICATION->IncludeComponent(
                    'yenisite:ipep.props_groups',
                    '',
                    array(
                        'DISPLAY_PROPERTIES' => $arResult['CHARACTERISTICS'],
                        'IBLOCK_ID' => $arParams['IBLOCK_ID']
                    ),
                    $component, array('HIDE_ICONS' => 'Y')
                ) ?>
            </div>
        </div>
    <? else: ?>
        <? /*if($arParams["PROPERTIES_DISPLAY_TYPE"] != "TABLE"):?>
				<div class="props_block">
					<div class="props_block__wrapper flexbox row">
						<?foreach($arResult["CHARACTERISTICS"] as $propCode => $arProp):?>
							<div class="char col-lg-3 col-md-4 col-xs-6 bordered" itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
								<div class="char_name font_15 color_666">
									<div class="props_item <?if($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y"){?>whint<?}?>">
										<span itemprop="name"><?=$arProp["NAME"]?></span>
									</div>
									<?if($arProp["HINT"] && $arParams["SHOW_HINTS"]=="Y"):?><div class="hint hint--down"><span class="hint__icon rounded bg-theme-hover border-theme-hover bordered"><i>?</i></span><div class="tooltip"><?=$arProp["HINT"]?></div></div><?endif;?>
								</div>
								<div class="char_value font_15 color_333" itemprop="value">
									<?if(count($arProp["DISPLAY_VALUE"]) > 1):?>
										<?=implode(', ', $arProp["DISPLAY_VALUE"]);?>
									<?else:?>
										<?=$arProp["DISPLAY_VALUE"];?>
									<?endif;?>
								</div>
							</div>
						<?endforeach;?>
					</div>
				</div>
			<?else:*/ ?>
        <!--    <pre>-->
        <!--       --><? // print_r($arResult["CHARACTERISTICS"]);?>
        <!--    </pre>-->

        <div id="CHARACTERISTICS" class="props_block props_block--table props_block--nbg bordered rounded-4">

            <h3 class="service_h">
                <?= $arResult["CHARACTERISTICS"]["TITLE_PROC"]["VALUE"] ?>
            </h3>
            <p class="">
                <?= $arResult["CHARACTERISTICS"]["TEXT_PROC"]["VALUE"] ?>
            </p>
            <? $arPropValue = $arResult["CHARACTERISTICS"]["_OUR_PROC"]["VALUE"]; ?>
            <!--            <pre>-->
            <!--                --><? //if (!isset($arPropValue)){ echo "Yes" ;}
            //                else {echo ("No");}
            //                ?>
            <!--            </pre>-->
            <? if (isset($arPropValue)) { ?>
                <div class="grid_items  grid_items-desktop">

                    <div class="left_content">
                        <? for ($i = 0;
                                $i < count($arPropValue);
                                $i += 2) {
                            ?>
                            <div class="item">
                                <div class="left_text"><?= $arPropValue[$i] ?></div>
                                <div class="left_line"></div>
                            </div>
                        <? } ?>
                    </div>

                    <div class="center_line"></div>

                    <div class="right_content">
                        <? for ($i = 0;
                                $i < count($arPropValue);
                                $i += 2) { ?>
                            <div class="item">
                                <? if (!$arPropValue[$i + 1]) break ?>
                                <div class="right_line"></div>
                                <div class="right_text"><?= $arPropValue[$i + 1] ?> </div>
                            </div>
                        <? } ?>
                    </div>

                </div>
            <? } ?>
            <div class="grid_items  grid_items-mobile">
                <div class="center_line"></div>
                <div class="grid_items-content">
                    <? foreach ($arPropValue as $item) { ?>
                        <div class="item">
                            <div class="right_text"><?= $item ?></div>

                        </div>
                    <? } ?>
                </div>

            </div>
        </div>
        <? /*endif;*/ ?>
    <? endif; ?>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<? // files?>
<? $templateData['DOCUMENTS'] = boolval($arResult['DOCUMENTS']); ?>
<? if ($templateData['DOCUMENTS']): ?>
    <? $this->SetViewTarget('PRODUCT_FILES_INFO'); ?>
    <!--<div class="doc-list-inner__list  grid-list  grid-list--items-1 grid-list--no-gap ">-->
    <div class="files__items_wrapper-grid">
        <? foreach ($arResult['DOCUMENTS'] as $arItem): ?>
            <?
            //        echo '<pre>';
            //        print_r($arItem);
            //        echo '</pre>';
            $arDocFile = CAllcorp3::GetFileInfo($arItem);
            $docFileDescr = $arDocFile['DESCRIPTION'];
            $docFileSize = $arDocFile['FILE_SIZE_FORMAT'];
            $docFileType = $arDocFile['TYPE'];
            $docFileName = $arDocFile['FILENAME'];

            $bDocImage = false;
            if ($docFileType == 'jpg' || $docFileType == 'jpeg' || $docFileType == 'bmp' || $docFileType == 'gif' || $docFileType == 'png') {
                $bDocImage = true;
            }
            ?>

            <div class="files__item_cell">

                <a href="<?= $arDocFile['SRC'] ?>" class="files__item-link" target="_blank">
                    <div
                            class="files__item-icon"> <?= CAllcorp3::showIconSvg('image-preview fill-theme-target', SITE_TEMPLATE_PATH . '/images/files-type-icon.svg'); ?></div>
                    <div class="files__item-name">
                        <div class="files__item-name-name"><?= $arDocFile['FILENAME'] ?></div>
                        <div class="files__item-name-title"><?= $docFileDescr ?></div>
                        <div class="files__item-name-size"><?= $docFileSize ?></div>
                    </div>
                </a>
            </div>


        <? endforeach; ?>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<? // big gallery?>
<? $templateData['BIG_GALLERY'] = boolval($arResult['BIG_GALLERY']); ?>
<? if ($arResult['BIG_GALLERY']): ?>
    <? $bShowSmallGallery = $arParams['TYPE_BIG_GALLERY'] === 'SMALL'; ?>
    <? $this->SetViewTarget('PRODUCT_BIG_GALLERY_INFO'); ?>
    <? // gallery view swith?>
    <div class="gallery-view_switch">
        <div class="flexbox flexbox--direction-row flexbox--align-center">
            <div class="gallery-view_switch__count color_666 font_13">
                <div
                        class="gallery-view_switch__count-wrapper gallery-view_switch__count-wrapper--small" <?= ($bShowSmallGallery ? "" : "style='display:none;'"); ?>>
                    <span class="gallery-view_switch__count-value"><?= count($arResult['BIG_GALLERY']); ?></span>
                    <?= Loc::getMessage('PHOTO'); ?>
                    <span class="gallery-view_switch__count-separate">&mdash;</span>
                </div>
                <div
                        class="gallery-view_switch__count-wrapper gallery-view_switch__count-wrapper--big" <?= ($bShowSmallGallery ? "style='display:none;'" : ""); ?>>
                    <span class="gallery-view_switch__count-value">1/<?= count($arResult['BIG_GALLERY']); ?></span>
                    <span class="gallery-view_switch__count-separate">&mdash;</span>
                </div>
            </div>
            <div class="gallery-view_switch__icons-wrapper">
                <span
                        class="gallery-view_switch__icons<?= (!$bShowSmallGallery ? ' active' : '') ?> gallery-view_switch__icons--big"
                        title="<?= Loc::getMessage("BIG_GALLERY"); ?>"><?= CAllcorp3::showIconSvg("gallery", SITE_TEMPLATE_PATH . "/images/svg/gallery_alone.svg", "", "colored_theme_hover_bg-el-svg", true, false); ?></span>
                <span
                        class="gallery-view_switch__icons<?= ($bShowSmallGallery ? ' active' : '') ?> gallery-view_switch__icons--small"
                        title="<?= Loc::getMessage("SMALL_GALLERY"); ?>"><?= CAllcorp3::showIconSvg("gallery", SITE_TEMPLATE_PATH . "/images/svg/gallery_list.svg", "", "colored_theme_hover_bg-el-svg", true, false); ?></span>
            </div>
        </div>
    </div>

    <? // gallery big?>
    <div class="gallery-big"<?= ($bShowSmallGallery ? ' style="display:none;"' : ''); ?> >
        <div
                class="owl-carousel owl-carousel--outer-dots owl-carousel--nav-hover-visible owl-bg-nav owl-carousel--light owl-carousel--button-wide owl-carousel--button-offset-half"
                data-plugin-options='{"items": "1", "autoplay" : false, "autoplayTimeout" : "3000", "smartSpeed":1000, "dots": true, "dotsContainer": false, "nav": true, "loop": false, "index": true, "margin": 0}'>
            <? foreach ($arResult['BIG_GALLERY'] as $arPhoto): ?>
                <div class="item">
                    <a href="<?= $arPhoto['DETAIL']['SRC'] ?>" class="fancy" data-fancybox="big-gallery" target="_blank"
                       title="<?= $arPhoto['TITLE'] ?>">
                        <img data-src="<?= $arPhoto['PREVIEW']['src'] ?>" src="<?= $arPhoto['PREVIEW']['src'] ?>"
                             class="img-responsive inline lazy rounded-4" title="<?= $arPhoto['TITLE'] ?>"
                             alt="<?= $arPhoto['ALT'] ?>"/>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>

    <? // gallery small?>
    <div class="gallery-small"<?= ($bShowSmallGallery ? '' : ' style="display:none;"'); ?>>
        <div class="grid-list grid-list--gap-20">
            <? foreach ($arResult['BIG_GALLERY'] as $arPhoto): ?>
                <div class="gallery-item-wrapper">
                    <div class="item rounded-4">
                        <a href="<?= $arPhoto['DETAIL']['SRC'] ?>" class="fancy" data-fancybox="small-gallery"
                           target="_blank" title="<?= $arPhoto['TITLE'] ?>">
                            <img data-src="<?= $arPhoto['PREVIEW']['src'] ?>" src="<?= $arPhoto['PREVIEW']['src'] ?>"
                                 class="lazy img-responsive inline rounded-4" title="<?= $arPhoto['TITLE'] ?>"
                                 alt="<?= $arPhoto['ALT'] ?>"/>
                        </a>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<? // video?>
<? $templateData['VIDEO'] = boolval($arResult['VIDEO']);
$bOneVideo = count($arResult['VIDEO']) == 1;
?>


<? if ($arResult['VIDEO']): ?>


    <? $this->SetViewTarget('PRODUCT_VIDEO_INFO'); ?>
    <div class="hidden_print">
        <div class="video_block">
            <div class="grid-list grid-list--gap-20 <?= ($bOneVideo ? 'grid-list--items-1' : 'grid-list--items-2'); ?>">
                <? foreach ($arResult['VIDEO'] as $v => $value): ?>
                    <div class="grid-list__item item rounded-4">
                        <? if (strpos($value, 'iframe')): ?>
                            <? if ($bOneVideo): ?>
                                <?= $value ?>
                            <? else: ?>
                                <div class="video_body">
                                    <?= str_replace('src=', 'width="660" height="457" src=', str_replace(array('width', 'height'), array('data-width', 'data-height'), $value)); ?>
                                </div>
                            <? endif; ?>
                        <? else: ?>
                            <?
                            $videoMimeType = mime_content_type($_SERVER['DOCUMENT_ROOT'] . $value['path']);
                            ?>
                            <div class="video_body video_from_file">
                                <video id="js-video_<?= $v; ?>"
                                       width="<?= $bOneVideo ? $value['width'] : '540'; ?>"
                                       height="<?= $bOneVideo ? $value['height'] : '357'; ?>"
                                       class="video-js"
                                       controls="controls"
                                       preload="metadata"
                                       data-setup="{}"
                                >
                                    <source src="<?= $value['path']; ?>" type="<?= $videoMimeType; ?>"/>
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a web
                                        browser that supports HTML5 video
                                    </p>
                                </video>
                            </div>
                            <div class="title"><?= (strlen($value["title"]) ? $value["title"] : '') ?></div>
                        <? endif; ?>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>