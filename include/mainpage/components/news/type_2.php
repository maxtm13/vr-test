<?
$indexPageOptions = $GLOBALS['arTheme']['INDEX_TYPE']['SUB_PARAMS'][ $GLOBALS['arTheme']['INDEX_TYPE']['VALUE'] ];
$blockOptions = $indexPageOptions['NEWS'];
$blockTemplateOptions = $blockOptions['TEMPLATE']['LIST'][ $blockOptions['TEMPLATE']['VALUE'] ];

$bShowMore = $blockTemplateOptions["ADDITIONAL_OPTIONS"]["LINES_COUNT"]["VALUE"] === 'SHOW_MORE';
$linesCount = $bShowMore ? 1 : (intval($blockTemplateOptions["ADDITIONAL_OPTIONS"]["LINES_COUNT"]["VALUE"]) ?: 1);
?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "news-list_for_main", Array(
	"IBLOCK_TYPE" => "aspro_allcorp3_content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "38",	// Код информационного блока
		"NEWS_COUNT" => $linesCount*4-1,	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "arFrontFilter",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "ACTIVE_FROM",
			4 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "PERIOD",
			1 => "REDIRECT",
			2 => "SALE_NUMBER",
			3 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"SHOW_SECTION" => "N",
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "j F Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"PAGER_TEMPLATE" => "ajax",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"TITLE" => "События компании",	// Заголовок блока
		"RIGHT_TITLE" => "Все новости",	// Название ссылки на все элементы
		"RIGHT_LINK" => "news/",	// Ссылка на все элементы
		"COMPONENT_TEMPLATE" => "news-list",
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"SHOW_DETAIL_LINK" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"SHOW_DATE" => "Y",
		"COUNT_IN_LINE" => "4",
		"ELEMENTS_ROW" => "4",
		"BORDER" => true,
		"ITEM_HOVER_SHADOW" => true,
		"ITEM_PADDING" => false,
		"TEXT_PADDING" => true,
		"ROUNDED" => true,
		"ABSOLUTE_IMAGE" => true,
		"DARK_HOVER" => true,
		"SHOW_IMAGE" => true,
		"ROW_VIEW" => false,
		"NO_GRID" => true,
		"WIDE_FIRST" => true,
		"IMAGE_POSITION" => "TOP",
		"IMAGE_POSITION_FIRST" => "BG",
		"SHOW_PREVIEW" => false,
		"SHOW_PREVIEW_TEXT" => "Y",	// Отображать текст под заголовком
		"SHOW_SECTION_NAME" => "N",
		"TEXT_POSITION" => "BOTTOM_RELATIVE",
		"TEXT_POSITION_FIRST" => "BOTTOM",
		"NAME_SIZE" => "18",
		"NARROW" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["WIDE"]["VALUE"]!="Y",
		"COLUMN_REVERSE" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["IMAGE_POSITION"]["VALUE"]=="BOTTOM",
		"SHOW_TITLE" => $blockOptions["INDEX_BLOCK_OPTIONS"]["BOTTOM"]["SHOW_TITLE"]["VALUE"]=="Y",
		"TITLE_POSITION" => $blockOptions["INDEX_BLOCK_OPTIONS"]["BOTTOM"]["TITLE_POSITION"]["VALUE"],
		"ITEMS_OFFSET" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["ITEMS_OFFSET"]["VALUE"]=="Y",
		"CHECK_REQUEST_BLOCK" => CAllcorp3::checkRequestBlock("news"),
		"IS_AJAX" => CAllcorp3::checkAjaxRequest(),
		"SUBTITLE" => "Новости",	// Дополнительный заголовок над основным заголовком блока
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y"
	),
	false
);?>