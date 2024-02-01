<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отрасли");?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "page",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => ""
    )
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"industry", 
	array(
		"COMPONENT_TEMPLATE" => "industry",
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"IBLOCK_ID" => "50",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ID",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"TEMPLATE_THEME" => "blue",
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"PERIOD_NEW_TAGS" => "",
		"DISPLAY_AS_RATING" => "rating",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"TAGS_CLOUD_WIDTH" => "100%",
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENT_TYPE_VIEW" => "FROM_MODULE",
		"USE_DETAIL_TABS" => "FROM_MODULE",
		"SKU_IBLOCK_ID" => "1",
		"SKU_SORT_ORDER" => "asc",
		"SKU_SORT_FIELD2" => "sort",
		"SKU_SORT_ORDER2" => "asc",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"SHOW_SECTION" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_CHILD_SECTIONS" => "Y",
		"SHOW_CHILD_ELEMENTS" => "N",
		"DETAIL_USE_TAGS" => "N",
		"SHOW_CATEGORY" => "N",
		"PROPERTIES_DISPLAY_TYPE" => "TABLE",
		"T_DESC" => "",
		"T_CHAR" => "",
		"SHOW_BIG_GALLERY" => "Y",
		"TYPE_BIG_GALLERY" => "BIG",
		"T_BIG_GALLERY" => "",
		"BIG_GALLERY_PROP_CODE" => "-",
		"T_VIDEO" => "",
		"T_DOCS" => "",
		"DOCS_PROP_CODE" => "-",
		"T_FAQ" => "",
		"T_REVIEWS" => "",
		"T_VACANCY" => "",
		"T_STAFF" => "",
		"T_SALE" => "",
		"T_NEWS" => "",
		"T_ARTICLES" => "",
		"T_SERVICES" => "",
		"T_PROJECTS" => "",
		"T_PARTNERS" => "",
		"T_GOODS" => "",
		"T_TARIFFS" => "",
		"SHOW_DOPS" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BLOCKS_ORDER" => "order_form,sale,tizers,tabs,big_gallery,services,projects,news,articles,staff,partners,vacancy,goods,comments,tariffs",
		"DETAIL_BLOCKS_TAB_ORDER" => "desc,char,video,docs,faq,reviews,dops",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"FORM_ID_ORDER_SERVISE" => "",
		"SEF_FOLDER" => "/industry/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "/#SECTION_CODE_PATH#/",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>