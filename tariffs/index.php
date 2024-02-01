<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тарифы");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"tariffs",
	Array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BIG_GALLERY_PROP_CODE" => "-",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMMENTS_COUNT" => "5",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_BLOCKS_ALL_ORDER" => "desc,char,docs,reviews,sale,services,partners,projects,news,articles,faq,goods,buy,payment,dops,comments",
		"DETAIL_BLOCKS_ORDER" => "tabs,sale,services,partners,projects,news,articles,goods,comments",
		"DETAIL_BLOCKS_TAB_ORDER" => "desc,char,docs,faq,reviews,buy,payment,dops",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_BLOG_TITLE" => "Комментарии",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"DETAIL_BLOG_USE" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FB_APP_ID" => "APP_ID",
		"DETAIL_FB_TITLE" => "Facebook",
		"DETAIL_FB_USE" => "Y",
		"DETAIL_FIELD_CODE" => array("PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_TEXT","DETAIL_PICTURE",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PROPERTY_CODE" => array("FORM_QUESTION","FORM_ORDER","HIT","PRICE_CURRENCY","FILTER_PRICE_1","TARIF_PRICE_1","FILTER_PRICE_2","TARIF_PRICE_2","TARIF_PRICE_2_DISC","TARIF_PRICE_2_ECONOMY","TARIF_PRICE_2_ONE","FILTER_PRICE_3","TARIF_PRICE_3","TARIF_PRICE_3_DISC","TARIF_PRICE_3_ECONOMY","TARIF_PRICE_3_ONE","FILTER_PRICE_DEFAULT","TARIF_PRICE_DEFAULT","TARIF_PRICE_DEFAULT_DISC","TARIF_PRICE_DEFAULT_ECONOMY","TARIF_PRICE_DEFAULT_ONE","TARIF_ITEM","MULTI_PROP","PHOTOPOS","LINK_FAQ","LINK_NEWS","LINK_ARTICLES","LINK_SERVICES","LINK_GOODS_FILTER","LINK_GOODS","LINK_PROJECTS","LINK_REVIEWS","LINK_SALE","SUPPLIED","USERS","EXTENSION","DURATION","GROUPS_USERS","ADMIN","VOLUME","FILE_STORAGE","MEMORY","CPU","IP","HOSTING_SITES","KOLLICHESTVO_BAZ_DANNIX","ZADACHI","NAGRUZKA","ONLY_ONE_PRICE","PRICE","PRICEOLD","ECONOMY","LINK_STAFF","LINK_VACANCY","VIDEO_IFRAME","VIDEO","LINK_PARTNERS","LINK_TIZERS","AUTHOR_CONTROL","PROP2","DISEGHNER_AT_PLACE","FOR_SHOW_1","FOR_SHOW_5","MATERIAL_PICK","FOR_SHOW_2","FOR_SHOW_3","FOR_SHOW_4","FOR_SHOW_6","TYPE_OF_BUILD","LINK_STUDY","FOR_SHOW_7","FOR_SHOW_8","DOCUMENTS","PHOTOS","STATUS","ARTICLE","DATE_COUNTER","MULTI_PROP_BOTTOM_PROPS","TASK","ONLINE","MESSAGE","UPDATES","LANGUAGES","TARIF_PRICE_1_DISC","TARIF_PRICE_4","ICON","VISA","NUM_DEVICES","APPLE","ELPURSE","API_INTEGRATION","SIEM_SYSTEM","COLLECT_INFO","RULES_SIGNAT","SCANNER","ANTIVIRUS","PROTECT_PAYMENT","PROTECT_CAMERA","ANTIVOR","CONTROL","SUPPORT_FREE","GUARANTEE","BLOCKING_SITES","BLOCKING_TRAFFIC","SECURITY","PROTECT_CHILDREN","SUM_FINANCING","TERM_LEASING","INSURANCE","CURRENCY","ADVANCE_PAY","RATE","PERCENTAGE","PAYMENTS","SUPPORT","NOTIFICATION","TURN",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_USE_TAGS" => "N",
		"DETAIL_VISIBLE_PROP_COUNT" => "6",
		"DETAIL_VK_API_ID" => "API_ID",
		"DETAIL_VK_TITLE" => "ВКонтакте",
		"DETAIL_VK_USE" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DOCS_PROP_CODE" => "-",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"FILE_404" => "",
		"FORM_ID_ORDER_SERVISE" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "35",
		"IBLOCK_TYPE" => "aspro_allcorp3_catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "A",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("ID","NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_PICTURE",""),
		"LIST_PROPERTY_CODE" => array("FORM_ORDER","HIT","PRICE_CURRENCY","TARIF_PRICE_1","TARIF_PRICE_2","TARIF_PRICE_2_DISC","TARIF_PRICE_3","TARIF_PRICE_3_DISC","TARIF_PRICE_DEFAULT","TARIF_PRICE_DEFAULT_DISC","TARIF_ITEM","MULTI_PROP","SUPPLIED","USERS","EXTENSION","DURATION","GROUPS_USERS","ADMIN","VOLUME","FILE_STORAGE","MEMORY","CPU","IP","HOSTING_SITES","KOLLICHESTVO_BAZ_DANNIX","ZADACHI","NAGRUZKA","ONLY_ONE_PRICE","MULTI_PROP_BOTTOM_PROPS","TASK","ONLINE","MESSAGE","UPDATES","LANGUAGES","TARIF_PRICE_1_DISC","TARIF_PRICE_4","ICON","VISA","NUM_DEVICES","APPLE","ELPURSE","API_INTEGRATION","SIEM_SYSTEM","COLLECT_INFO","RULES_SIGNAT","SCANNER","ANTIVIRUS","PROTECT_PAYMENT","PROTECT_CAMERA","ANTIVOR","CONTROL","SUPPORT_FREE","GUARANTEE","BLOCKING_SITES","BLOCKING_TRAFFIC","SECURITY","PROTECT_CHILDREN","SUM_FINANCING","TERM_LEASING","INSURANCE","CURRENCY","ADVANCE_PAY","RATE","PERCENTAGE","PAYMENTS","SUPPORT","NOTIFICATION","TURN",""),
		"LIST_VISIBLE_PROP_COUNT" => "5",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTIES_DISPLAY_TYPE" => "TABLE",
		"SECTIONS_ELEMENTS_COUNT" => "2",
		"SECTIONS_ITEMS_OFFSET" => "Y",
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_ELEMENTS_COUNT" => "2",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_IMAGE_POSITION" => "RIGHT",
		"SECTION_ITEMS_OFFSET" => "Y",
		"SECTION_TYPE_VIEW" => "FROM_MODULE",
		"SEF_FOLDER" => "/tariffs/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#SECTION_CODE_PATH#/#ELEMENT_CODE#/","news"=>"","section"=>"#SECTION_CODE_PATH#/"),
		"SET_LAST_MODIFIED" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SHOW_BIG_GALLERY" => "Y",
		"SHOW_BUY" => "N",
		"SHOW_CATEGORY" => "N",
		"SHOW_CHILD_ELEMENTS" => "Y",
		"SHOW_CHILD_SECTIONS" => "Y",
		"SHOW_DELIVERY" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_DOPS" => "Y",
		"SHOW_ELEMENTS_IN_LAST_SECTION" => "Y",
		"SHOW_PAYMENT" => "N",
		"SHOW_SECTION" => "Y",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"TYPE_BIG_GALLERY" => "SMALL",
		"T_ARTICLES" => "",
		"T_BIG_GALLERY" => "",
		"T_CHAR" => "",
		"T_COMMENTS" => "comm",
		"T_DESC" => "",
		"T_DOCS" => "",
		"T_DOPS" => "",
		"T_FAQ" => "",
		"T_GOODS" => "Вам может понравиться",
		"T_NEWS" => "",
		"T_PARTNERS" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_SALE" => "",
		"T_SERVICES" => "",
		"T_STAFF" => "",
		"T_VACANCY" => "",
		"T_VIDEO" => "",
		"USE_CATEGORIES" => "N",
		"USE_DETAIL_TABS" => "FROM_MODULE",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>