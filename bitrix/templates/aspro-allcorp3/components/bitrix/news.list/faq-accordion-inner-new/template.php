<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$this->setFrameMode(true);

use \Bitrix\Main\Localization\Loc;

$bHasNav = (strpos($arResult["NAV_STRING"], 'more_text_ajax') !== false);

$listClasses = 'grid-list--items-1';
if ($arParams['ITEMS_OFFSET'] == 'Y') {
  $listClasses .= ' grid-list--gap-32';
} else {
  $listClasses .= ' grid-list--no-gap';
}
?>
<?php if ($arResult['SECTIONS']) : ?>
  <div class="tabs arrow_scroll swipeignore desktop">
    <ul class="nav nav-tabs font_14 font_weight--600">
      <? $i = 0 ?>
      <? foreach ($arResult['SECTIONS'] as $arSection) : ?>
        <li class="my_tabs <?= $i == 0 ? 'active' : '' ?>">
          <a href="#faq-section-<?= $arSection['ID'] ?>" data-toggle="tab"><?= $arSection['NAME'] ?></a>
        </li>
        <? $i++ ?>
      <? endforeach; ?>
    </ul>
  </div>

  <div class="tab-content desktop">
    <? $i = 0 ?>
    <? foreach ($arResult['SECTIONS'] as $arSection) : ?>
      <div class="tab-pane <?= $i == 0 ? 'active' : '' ?>" id="faq-section-<?= $arSection['ID'] ?>">
        <div class="faq-accordion__list  accordion-type-1 grid-list <?= $listClasses ?>">
          <? if ($arParams['IS_AJAX']) : ?>
            <? $APPLICATION->RestartBuffer(); ?>
          <? endif; ?>

          <? foreach ($arSection['ITEMS'] as $i => $arItem) : ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => Loc::getMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            $areaElementId = $this->GetEditAreaId($arItem['ID']);
            $hasAnswerText = isset($arItem['FIELDS']['PREVIEW_TEXT']) && $arItem['FIELDS']['PREVIEW_TEXT'];
            ?>
            <div class="grid-list__item item-accordion-wrapper <?= $hasAnswerText ? 'shadow-hovered shadow-no-border-hovered' : '' ?>  faq-accordion__wrapper">
              <div id="<?= $areaElementId ?>" class="faq-accordion__item">
                <div class="accordion-head accordion-close stroke-theme-hover"  href="#accordion-<?= $areaElementId ?>">
<!--    Удалил для кастомизвции аккордкона из class="accordion-head                --><?//=  $hasAnswerText ? 'data-toggle="collapse"' : '' ?><!-- data-parent="#accordion---><?//= $areaElementId ?><!--"-->
                  <div class="faq-accordion__head">
                    <span class="faq-accordion__name switcher-title"><?= $arItem['NAME'] ?></span>
                  </div>

                  <? if ($hasAnswerText) : ?>
                    <i class="svg inline  svg-inline-right-arrow" aria-hidden="true">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 1V15M1 8H15" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                  <? endif ?>
                </div>
                <div id="accordion-<?= $areaElementId ?>" class="panel-collapse collapse">
                  <div class="accordion-body color_666">
                    <div class="faq-accordion__preview-text  accordion-preview">
                      <? if ($hasAnswerText) : ?>
                        <div class="faq-accordion__detail-text">
                          <? if ($arItem['PREVIEW_TEXT_TYPE'] == 'text') : ?>
                            <p><?= $arItem['FIELDS']['PREVIEW_TEXT'] ?></p>
                          <? else : ?>
                            <?= $arItem['FIELDS']['PREVIEW_TEXT'] ?>
                          <? endif; ?>

                        </div>
                        <? if ($arItem['DISPLAY_PROPERTIES']['LINK_BUTTON']) : ?>
                          <div class="faq-accordion__btn-wrapper">
                            <a href="<?= $arItem['DISPLAY_PROPERTIES']['LINK_BUTTON']['VALUE'] ?>" class="btn btn-default btn-lg has-ripple">
                              <span><?= $arItem['DISPLAY_PROPERTIES']['TITLE_BUTTON']['VALUE'] ?: Loc::getMessage('FAI__BTN__LINK') ?></span>
                            </a>
                          </div>
                        <? endif ?>
                      <? endif; ?>
                    </div>
                  </div>
                  <div class="bg-more-theme accordion-line"></div>
                </div>
              </div>
            </div>
          <? endforeach ?>
        </div>
      </div>
      <? $i++ ?>
    <? endforeach ?>
  </div>
<?php endif //if($arResult['SECTIONS']) 
?>


<? // For mobile
?>


<?php if ($arResult['SECTIONS']) : ?>
  <div class="tabs-mobile  mobile">
    <ul class="tabs-mobile-nav-tabs font_14 font_weight--600">
      <? $i = 0 ?>
      <? foreach ($arResult['SECTIONS'] as $arSection) : ?>
        <li class="my_tabs-mobile font_weight--600 font_14  <?= $i == '' ? 'active' : '' ?>">
          <div class="my_tabs-mobile-title"><i class="my_tabs-mobile-list-item"><img src="/images/icon-check-mark1.svg" alt=""></i><a href="#faq-section2-<?= $arSection['ID'] ?>" data-toggle="tab2"><?= $arSection['NAME'] ?></a>
          </div>
          <div class="tab-content-mobile">


            <div class="tab-pane-mobile <?= $i == 0 ? 'active' : '' ?>" id="tab-pane-mobile-faq-section-mobile-<?= $arSection['ID'] ?>">
              <div class="tab-pane-mobile-faq-accordion__list  <?= $listClasses ?>">
                <? if ($arParams['IS_AJAX']) : ?>
                  <? $APPLICATION->RestartBuffer(); ?>
                <? endif; ?>

                <? foreach ($arSection['ITEMS'] as $i => $arItem) : ?>
                  <?
                  $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
                  $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => Loc::getMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                  $areaElementId = $this->GetEditAreaId($arItem['ID']);
                  $hasAnswerText = isset($arItem['FIELDS']['PREVIEW_TEXT']) && $arItem['FIELDS']['PREVIEW_TEXT'];
                  ?>
                  <div class="grid-list__item-accordion-wrapper <?= $hasAnswerText ? 'shadow-hovered-mobile' : '' ?>  faq-accordion__wrapper-mobile">
                    <div id="<?= $areaElementId ?>" class="faq-accordion__item-mobile">
                      <div class="accordion-head-mobile" <?= $hasAnswerText ? 'data-toggle="collapse-mobile"' : '' ?> data-parent="#accordion-mobile-<?= $areaElementId ?>" href="#accordion-<?= $areaElementId ?>">
                        <div class="faq-accordion__head-mobile">
                          <span class="faq-accordion__name-mobile"><?= $arItem['NAME'] ?></span>
                        </div>

                        <? if ($hasAnswerText) : ?>
                          <i class="svg inline  svg-inline-right-arrow" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8 1V15M1 8H15" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </i>
                        <? endif ?>
                      </div>
                      <div id="accordion-mobile-<?= $areaElementId ?>" class="panel-collapse-mobile">
                        <div class="accordion-body-mobile color_666">
                          <div class="faq-accordion__preview-text-mobile">
                            <? if ($hasAnswerText) : ?>
                              <div class="faq-accordion__detail-text-mobile">
                                <? if ($arItem['PREVIEW_TEXT_TYPE'] == 'text') : ?>
                                  <p><?= $arItem['FIELDS']['PREVIEW_TEXT'] ?></p>
                                <? else : ?>
                                  <?= $arItem['FIELDS']['PREVIEW_TEXT'] ?>
                                <? endif; ?>

                              </div>
                              <? if ($arItem['DISPLAY_PROPERTIES']['LINK_BUTTON']) : ?>
                                <div class="faq-accordion__btn-wrapper-mobile">
                                  <a href="<?= $arItem['DISPLAY_PROPERTIES']['LINK_BUTTON']['VALUE'] ?>" class="btn-mobile btn btn-default has-ripple">
                                    <span><?= $arItem['DISPLAY_PROPERTIES']['TITLE_BUTTON']['VALUE'] ?: Loc::getMessage('FAI__BTN__LINK') ?></span>
                                  </a>
                                </div>
                              <? endif ?>
                            <? endif; ?>
                          </div>
                        </div>
                        <div class="accordion-line-mobile"></div>
                      </div>
                    </div>
                  </div>
                <? endforeach ?>
              </div>
            </div>

          </div>





        </li>
        <? $i++ ?>
      <? endforeach; ?>
    </ul>
  </div>
<? endif; ?>