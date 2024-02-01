<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("MENU", "Y");
$APPLICATION->SetTitle("test");?>

<?$GLOBALS['arrFilter']=array("SECTION_ID" => 664);?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.filter",
	".default",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"FIELD_CODE" => array(0=>"",1=>"ID",2=>"CODE",3=>"XML_ID",4=>"NAME",5=>"TAGS",6=>"SORT",7=>"PREVIEW_TEXT",8=>"PREVIEW_PICTURE",9=>"DETAIL_TEXT",10=>"DETAIL_PICTURE",11=>"DATE_ACTIVE_FROM",12=>"ACTIVE_FROM",13=>"DATE_ACTIVE_TO",14=>"ACTIVE_TO",15=>"SHOW_COUNTER",16=>"SHOW_COUNTER_START",17=>"IBLOCK_TYPE_ID",18=>"IBLOCK_ID",19=>"IBLOCK_CODE",20=>"IBLOCK_NAME",21=>"IBLOCK_EXTERNAL_ID",22=>"DATE_CREATE",23=>"CREATED_BY",24=>"CREATED_USER_NAME",25=>"TIMESTAMP_X",26=>"MODIFIED_BY",27=>"USER_NAME",28=>"SECTION_ID",29=>"",),
		"FILTER_NAME" => "arrFilter333",
		"IBLOCK_ID" => "52",
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"LIST_HEIGHT" => "5",
		"NUMBER_WIDTH" => "5",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PREFILTER_NAME" => "preFilter",
		"PRICE_CODE" => array(),
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SAVE_IN_SESSION" => "N",
		"TEXT_WIDTH" => "20"
	)
);?><pre><?
			print_r($arrFilter333);
			echo('====');
			$arrFilter2['ID'] = array(0=>'663');
			print_r($arrFilter2);?>
</pre> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	".default",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "arrFilter2",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "52",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>