<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true ) die();
$this->setFrameMode(true);
use \Bitrix\Main\Localization\Loc;

$bItemsTypeElements = $arParams['ITEMS_TYPE'] !== 'SECTIONS';
$arItems = $bItemsTypeElements ? $arResult['ITEMS'] : $arResult['SECTIONS'];
?>
<?if($arItems):?>
	<?
	$bShowTitle = $arParams['TITLE'] && $arParams['SHOW_TITLE'];
	$bShowTitleLink = $arParams['RIGHT_TITLE'] && $arParams['RIGHT_LINK'];
	$bShowLeftBlock = $arParams['HIDE_LEFT_TEXT_BLOCK'] === 'N';

	$bIcons = $arParams['IMAGES'] === 'ICONS';
	$bFonImg = $arParams['IMAGE_POSITION'] === 'BG';
	$bSRLImg = $arParams['IMAGE_POSITION'] === 'SIDE' || $arParams['IMAGE_POSITION'] === 'RIGHT' || $arParams['IMAGE_POSITION'] === 'LEFT';
	$bTRLImg = $arParams['IMAGE_POSITION'] === 'TOP_LEFT' || $arParams['IMAGE_POSITION'] === 'TOP_RIGHT';
	$bImgSticky = $arParams['STICKY_IMAGES'] === 'Y';
	$bNarrow = $arParams['NARROW'] && ($bShowLeftBlock || !$bSRLImg);

	$blockClasses = ($arParams['ITEMS_OFFSET'] ? 'services-list--items-offset' : 'services-list--items-close');
	if($bSRLImg){
		$blockClasses .= ' services-list--img-srl';
	}
	if($bTRLImg){
		$blockClasses .= ' services-list--img-trl';
	}
	if($arParams['IMAGE_POSITION'] === 'SIDE'){
		$blockClasses .= ' services-list--img-side';
	}

	$gridClass = 'grid-list';
	if($arParams['MOBILE_SCROLLED']){
		$gridClass .= ' mobile-scrolled mobile-scrolled--items-2 mobile-offset';
	}
	if(!$arParams['ITEMS_OFFSET']){
		$gridClass .= ' grid-list--no-gap';
	}
	if($bNarrow){
		$gridClass .= ' grid-list--items-'.$arParams['ELEMENTS_ROW'];
	}
	else{
		$gridClass .= ' grid-list--wide grid-list--items-'.$arParams['ELEMENTS_ROW'].'-wide';
	}
	if($bSRLImg){
		$gridClass .= ' grid-list--no-gap-f601';
	}

	$itemWrapperClasses = ' grid-list__item stroke-theme-parent-all colored_theme_hover_bg-block animate-arrow-hover';
	if(!$arParams['ITEMS_OFFSET'] && $arParams['BORDER']){
		$itemWrapperClasses .= ' grid-list-border-outer';
	}
	if(!$bFonImg){
		$itemWrapperClasses .= ' color-theme-parent-all';
	}
	if($bSRLImg){
		if(!$bShowLeftBlock){
			if($arParams['NARROW']){
				$itemWrapperClasses .= ' services-list__wrapper--padding';
			}
			else{
				$itemWrapperClasses .= ' services-list__wrapper--border-bottom';
			}
		}
	}

	$itemClasses = 'height-100 flexbox';
	if($arParams['ROW_VIEW']){
		if(
			$arParams['IMAGE_POSITION'] !== 'LEFT' &&
			$arParams['IMAGE_POSITION'] !== 'TOP_LEFT'
		){
			$itemClasses .= ' flexbox--direction-row-reverse';
		}
		else{
			$itemClasses .= ' flexbox--direction-row';
		}
	}
	if($arParams['COLUMN_REVERSE']){
		$itemClasses .= ' flexbox--direction-column-reverse';
	}
	if($arParams['BORDER']){
		$itemClasses .= ' bordered';
	}
	if($arParams['ROUNDED'] && $arParams['ITEMS_OFFSET']){
		$itemClasses .= ' rounded-4';
	}
	if($arParams['ITEM_HOVER_SHADOW']){
		$itemClasses .= ' shadow-hovered shadow-no-border-hovered';
	}
	if($arParams['DARK_HOVER']){
		$itemClasses .= ' dark-block-hover';
	}
	if($bFonImg){
		$itemClasses .= ' services-list__item--has-additional-text services-list__item--has-bg';
	}
	if(!$bItemsTypeElements){
		$itemClasses .= ' services-list__item--section';
	}
	if(
		$arParams['IMAGE_POSITION'] === 'TOP' ||
		$bTRLImg
	){
		$itemClasses .= ' services-list__item--big-padding';
	}
	if($arParams['ELEMENTS_ROW'] == 1){
		$itemClasses .= ' services-list__item--wide';
		
		if($bShowLeftBlock){
			$itemClasses .= ' services-list__item--with-left-block';
		}
		else{
			if($bSRLImg){
				if($arParams['NARROW']){
					$itemClasses .= ' maxwidth-theme';
				}
			}
		}
	}

	if (!$arParams['MOBILE_SCROLLED']) {
		$itemClasses .= ' services-list__item--no-scrolled';
	}

	$imageWrapperClasses = 'services-list__item-image-wrapper--'.($arParams['IMAGES'] === 'TRANSPARENT_PICTURES' ? 'PICTURE' : $arParams['IMAGES']).' services-list__item-image-wrapper--'.$arParams['IMAGE_POSITION'];
	$imageClasses = $arParams['IMAGES'] === 'ROUND_PICTURES' ? 'rounded' : (($arParams['IMAGES'] === 'PICTURES' || $arParams['IMAGES'] === 'BIG_PICTURES') ? ($bSRLImg && !$arParams['NARROW'] ? '' : ($arParams['ITEMS_OFFSET'] ? 'rounded-4' : '' )) : '');
	if($arParams['IMAGE_POSITION'] === 'TOP'){
		$imageWrapperClasses .= ' no-shrinked';
	}
	if($bSRLImg){
		$imageWrapperClasses .= ' flex-1';
	}
	?>
	<?if(!$arParams['IS_AJAX']):?>
		<div class="services-list <?=$blockClasses?> <?=$templateName?>-template">
			<?=\Aspro\Functions\CAsproAllcorp3::showTitleBlock([
				'PATH' => 'services-list',
				'PARAMS' => $arParams,
				'VISIBLE' => !$bShowLeftBlock
			]);?>

		<?if($arParams['MAXWIDTH_WRAP']):?>
			<?if($bSRLImg && !$bShowLeftBlock):?>
				<div class="maxwidth-theme maxwidth-theme--no-maxwidth-f601">
			<?elseif($bNarrow):?>
				<div class="maxwidth-theme">
			<?elseif($arParams['ITEMS_OFFSET']):?>
				<div class="maxwidth-theme maxwidth-theme--no-maxwidth">
			<?endif;?>
		<?endif;?>

		<?if($bShowLeftBlock):?>
			<?//need for showed left block?>
			<div class="flexbox flexbox--direction-row flexbox--column-t991">
				<?=\Aspro\Functions\CAsproAllcorp3::showTitleInLeftBlock([
					'PATH' => 'services-list',
					'PARAMS' => $arParams,
					'VISIBLE' => $bShowLeftBlock
				]);?>
				<div class="flex-grow-1">
		<?endif;?>

		<div class="custom-grid<?//=$gridClass?>">
	<?endif;?>
			<?
			$bShowImage = 
				$bFonImg ||
				$bIcons ||
				(
					$arParams['IMAGES'] !== 'TRANSPARENT_PICTURES' && 
					in_array('PREVIEW_PICTURE', $arParams['FIELD_CODE'])
				) ||
				(
					$arParams['IMAGES'] === 'TRANSPARENT_PICTURES' && 
					in_array('TRANSPARENT_PICTURE', $arParams['PROPERTY_CODE'])
				);

			$counter = 1;
			foreach($arItems as $i => $arItem):?>
				<?
				// edit/add/delete buttons for edit mode
				if($bItemsTypeElements){
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => Loc::getMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				}
				else{
					// edit/add/delete buttons for edit mode
					$arSectionButtons = CIBlock::GetPanelButtons($arItem['IBLOCK_ID'], 0, $arItem['ID'], array('SESSID' => false, 'CATALOG' => true));
					$this->AddEditAction($arItem['ID'], $arSectionButtons['edit']['edit_section']['ACTION_URL'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'SECTION_EDIT'));
					$this->AddDeleteAction($arItem['ID'], $arSectionButtons['edit']['delete_section']['ACTION_URL'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'SECTION_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				}

				// use detail link?
				$bDetailLink = $arParams['SHOW_DETAIL_LINK'] != 'N' && (!strlen($arItem['DETAIL_TEXT']) ? ($arParams['HIDE_LINK_WHEN_NO_DETAIL'] !== 'Y' && $arParams['HIDE_LINK_WHEN_NO_DETAIL'] != 1) : true);

				// detail url
				$detailUrl = $bItemsTypeElements ? $arItem['DETAIL_PAGE_URL'] : $arItem['SECTION_PAGE_URL'];

				// preview text
				$previewText = $bItemsTypeElements ? $arItem['FIELDS']['PREVIEW_TEXT'] : $arItem['~UF_TOP_SEO'];
				$htmlPreviewText = '';

				// preview image
				if($bShowImage){
					if($bItemsTypeElements){
						if($bIcons){
							$nImageID = $arItem['DISPLAY_PROPERTIES']['ICON']['VALUE'];
						}
						else{
							if($arParams['IMAGES'] === 'TRANSPARENT_PICTURES'){
								$nImageID = $arItem['DISPLAY_PROPERTIES']['TRANSPARENT_PICTURE']['VALUE'];
							}
							else{
								$nImageID = is_array($arItem['FIELDS']['PREVIEW_PICTURE']) ? $arItem['FIELDS']['PREVIEW_PICTURE']['ID'] : $arItem['FIELDS']['PREVIEW_PICTURE'];
							}
						}
					}
					else{
						if($bIcons){
							$nImageID = $arItem['~UF_ICON'];
						}
						else{
							if($arParams['IMAGES'] === 'TRANSPARENT_PICTURES'){
								$nImageID = $arItem['~UF_TRANSPARENT_PICTURE'];
							}
							else{
								$nImageID = is_array($arItem['PICTURE']) ? $arItem['PICTURE']['ID'] : $arItem['~PICTURE'];
							}
						}
					}

					$imageSrc = ($nImageID ? CFile::getPath($nImageID) : SITE_TEMPLATE_PATH.'/images/svg/noimage_product.svg');
				}

				$bShowPrice = $bItemsTypeElements && in_array('PRICE', $arParams['PROPERTY_CODE']) && strlen($arItem['DISPLAY_PROPERTIES']['PRICE']['VALUE']);
				$bShowBottom = ($bItemsTypeElements && $bShowPrice) || ($arParams['IMAGE_POSITION'] === 'RIGHT' || $arParams['IMAGE_POSITION'] === 'SIDE');
				?>
				<div class="services-list-custom__wrapper <?//=$itemWrapperClasses?>">
<!--					<pre>-->
						<?$arFile = CFile::GetFileArray($arItem['UF_ICON']);
//						print_r($arFile['SRC']) ?>
<!--					</pre>-->
					<div class="services-list-custom__item <?//=$itemClasses?> <?=($bDetailLink ? '' : 'services-list__item--cursor-initial')?>" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                        <div class="services-list-custom__item-text-wrapper <?=($bShowBottom ? 'services-list__item-text-wrapper--has-bottom-part'.(($arParams['IMAGE_POSITION'] === 'TOP' || $bTRLImg) ? ' flexbox--justify-beetwen' : '') : '')?>">
                            <a class="services-list-custom__item-title" href="<?=$detailUrl?>">
                                <i class="icon"><img src="<?=$arFile['SRC']?>" alt=""></i>
                                <?if($bDetailLink):?>
                                    <div class="dark_link 111 color-theme-target"><?=$arItem['NAME']?></div>
                                <?else:?>
                                    <div class="color_333"><?=$arItem['NAME']?></div>
                                <?endif;?>

                                <?if($bFonImg):?>
                                    <?if(!$bItemsTypeElements):?>
                                        <?if($bDetailLink):?>
                                            <a class="arrow-all  arrow-all--light-stroke" href="<?=$detailUrl?>">
                                                <?=CAllcorp3::showIconSvg(' arrow-all__item-arrow', SITE_TEMPLATE_PATH.'/images/svg/Arrow_map.svg');?>
                                                <div class="arrow-all__item-line arrow-all--light-bgcolor"></div>
                                            </a>
                                        <?endif;?>
                                    <?endif;?>
                                <?elseif($arParams['IMAGE_POSITION'] === 'TOP_LEFT'):?>
                                    <?if($bDetailLink):?>
                                        <?if($arParams['ELEMENTS_ROW'] == 1):?>
                                            <a class="arrow-all arrow-all--wide stroke-theme-target" href="<?=$detailUrl?>">
                                                <?=CAllcorp3::showIconSvg(' arrow-all__item-arrow', SITE_TEMPLATE_PATH.'/images/svg/Arrow_lg.svg');?>
                                                <div class="arrow-all__item-line colored_theme_hover_bg-el"></div>
                                            </a>
                                        <?else:?>
                                            <a class="arrow-all stroke-theme-target" href="<?=$detailUrl?>">
                                                <?=CAllcorp3::showIconSvg(' arrow-all__item-arrow', SITE_TEMPLATE_PATH.'/images/svg/Arrow_map.svg');?>
                                                <div class="arrow-all__item-line colored_theme_hover_bg-el"></div>
                                            </a>
                                        <?endif;?>
                                    <?endif;?>
                                <?endif;?>
                            </a>


                            <?if($bShowBottom):?>
                                <div class="services-list__item-text-bottom-part <?=($bShowPrice ? 'services-list__item-text-bottom-part--has-price' : '')?>">
                                    <?if($bShowPrice):?>
                                        <div class="services-list__item-price-wrapper">
                                            <div class="services-list__item-price font_17 <?=($bFonImg ? 'color_light' : 'color_333')?>">
                                                <?=\Aspro\Functions\CAsproAllcorp3::showPrice([
                                                    'ITEM' => $arItem,
                                                    'PARAMS' => $arParams,
                                                    'SHOW_SCHEMA' => false,
                                                    'PRICE_BLOCK_CLASS' => ($bFonImg ? 'color_light' : 'color_333')
                                                ]);?>
                                            </div>
                                        </div>
                                    <?endif;?>

                                    <?if($arParams['IMAGE_POSITION'] === 'RIGHT' || $arParams['IMAGE_POSITION'] === 'SIDE'):?>
                                        <?if($bDetailLink):?>
                                            <a class="btn btn-default btn-lg" href="<?=$detailUrl?>"><?=Loc::getMessage('SHOW_MORE')?></a>
                                        <?endif;?>
                                    <?endif;?>
                                </div>
                            <?endif;?>

                            <?if($bSRLImg && !$arParams['NARROW']):?></div><?endif;?>
                    </div>



					</div>
				</div>
			<?
			$counter++;
			endforeach;?>

			<?if($arParams['IS_AJAX']):?>
				<div class="wrap_nav bottom_nav_wrapper">
					<script>InitScrollBar();</script>
			<?endif;?>
				<?$bHasNav = (strpos($arResult["NAV_STRING"], 'more_text_ajax') !== false);?>
				<div class="bottom_nav mobile_slider <?=($bHasNav ? '' : ' hidden-nav');?>" data-parent=".services-list" data-append=".grid-list" <?=($arParams["IS_AJAX"] ? "style='display: none; '" : "");?>>
					<?if($bHasNav):?>
						<?=$arResult["NAV_STRING"]?>
					<?endif;?>
				</div>

			<?if($arParams['IS_AJAX']):?>
				</div>
			<?endif;?>

	<?if(!$arParams['IS_AJAX']):?>
		</div>
	<?endif;?>

		<?// bottom pagination?>
		<?if($arParams['IS_AJAX']):?>
			<div class="wrap_nav bottom_nav_wrapper">
		<?endif;?>

		<div class="bottom_nav_wrapper nav-compact">
			<div class="bottom_nav hide-600" <?=($arParams['IS_AJAX'] ? "style='display: none; '" : "");?> data-parent=".services-list" data-append=".grid-list">
				<?if($arParams['DISPLAY_BOTTOM_PAGER']):?>
					<?=$arResult['NAV_STRING']?>
				<?endif;?>
			</div>
		</div>

		<?if($arParams['IS_AJAX']):?>
			</div>
		<?endif;?>

	<?if(!$arParams['IS_AJAX']):?>
		<?if($bShowLeftBlock):?>
				</div> <?// .flex-grow-1?>
			</div> <?// .flexbox?>
		<?endif;?>

		<?if($arParams['MAXWIDTH_WRAP']):?>
			<?if($bSRLImg):?>
				</div>
			<?elseif($bNarrow):?>
				</div>
			<?elseif($arParams['ITEMS_OFFSET']):?>
				</div>
			<?endif;?>
		<?endif;?>

		</div> <?// .services-list?>
	<?endif;?>
<?endif;?>