<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("MENU", "Y");
$APPLICATION->SetTitle("Цены");
?><div class="price__mobile-nav">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "include_area.php",
		"PATH" => SITE_DIR."include/left_block/menu.left_menu.php"
	)
);?><br>
</div>
&nbsp;<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>