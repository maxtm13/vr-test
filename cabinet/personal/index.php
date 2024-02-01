<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личные данные");?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"new",
	Array(
		"CHECK_RIGHTS" => "N",
		"COMPONENT_TEMPLATE" => "new",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(0=>"UF_PASSPORT_NUMBER",1=>"UF_PASS_VYDAN",2=>"UF_PASS_DEP_CODE",3=>"UF_PASS_REG_ADDRESS",4=>"UF_INN",5=>"UF_SNILS",6=>"UF_BANK_NAME",7=>"UF_BANK_ACCOUNT",8=>"UF_CORRESPONDENT",9=>"UF_BIC",),
		"USER_PROPERTY_NAME" => ""
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.field.edit",
	"url",
	Array(
		"arUserField" => $arUserField,
		"bVarsFromForm" => $arResult["bVarsFromForm"]
	),
null,
Array(
	'HIDE_ICONS' => 'Y'
)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>