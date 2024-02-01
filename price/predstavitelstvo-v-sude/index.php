<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Представительство в суде");?><div class="price__mobile-nav">
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
<h2><?$APPLICATION->ShowTitle()?></h2>
<div class="inner_servise">
	<div>
		 Закажите звонок, чтобы уточнить цены на интересующие вас услуги. Наш специалист свяжется с вами в ближайшее время.
	</div>
	<div class="phones__dropdown-item callback-item btn-service">
		<div class="animate-load btn btn-default btn-wide has-ripple" data-event="jqm" data-param-id="8" data-name="callback">
			 Заказать звонок
		</div>
	</div>
</div>
<style>


.inner_servise {
    display: flex;
    align-items: center;
    gap: 10px;
}
.btn-service {
margin-top: 0;
}
</style><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>