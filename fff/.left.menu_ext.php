 <? 
 if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 
      global $APPLICATION; 
      $aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"", 
	array(
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => "/fff/",
		"SECTION_PAGE_URL" => "#SECTION_CODE_PATH#",
		"DETAIL_PAGE_URL" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
		"IBLOCK_TYPE" => "aspro_allcorp3_catalog",
		"IBLOCK_ID" => "51",
		"DEPTH_LEVEL" => "3",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000"
	),
	false
); 
 $aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

 ?> 