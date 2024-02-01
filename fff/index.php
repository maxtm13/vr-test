<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("MENU_ONLY_LEFT", "N");
$APPLICATION->SetPageProperty("MENU_SHOW_SECTIONS", "N");
$APPLICATION->SetPageProperty("MENU_SHOW_ELEMENTS", "N");
$APPLICATION->SetPageProperty("MENU", "N");
$APPLICATION->SetTitle("fff");?>

<?//$APPLICATION->IncludeComponent(
//	"bitrix:news",
//	".default",
//	array(
//		"ADD_ELEMENT_CHAIN" => "N",
//		"ADD_SECTIONS_CHAIN" => "N",
//		"AJAX_MODE" => "Y",
//		"AJAX_OPTION_ADDITIONAL" => "",
//		"AJAX_OPTION_HISTORY" => "N",
//		"AJAX_OPTION_JUMP" => "N",
//		"AJAX_OPTION_STYLE" => "Y",
//		"BROWSER_TITLE" => "-",
//		"CACHE_FILTER" => "N",
//		"CACHE_GROUPS" => "N",
//		"CACHE_TIME" => "100000",
//		"CACHE_TYPE" => "A",
//		"CHECK_DATES" => "Y",
//		"COMPONENT_TEMPLATE" => ".default",
//		"COUNT_IN_LINE" => "3",
//		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
//		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
//		"DETAIL_DISPLAY_TOP_PAGER" => "N",
//		"DETAIL_FIELD_CODE" => array(
//			0 => "",
//			1 => "",
//		),
//		"DETAIL_PAGER_SHOW_ALL" => "Y",
//		"DETAIL_PAGER_TEMPLATE" => "",
//		"DETAIL_PAGER_TITLE" => "Страница",
//		"DETAIL_PROPERTY_CODE" => array(
//			0 => "",
//			1 => "TITLE_BUTTON",
//			2 => "LINK_BUTTON",
//			3 => "",
//		),
//		"DETAIL_SET_CANONICAL_URL" => "N",
//		"DISPLAY_BOTTOM_PAGER" => "Y",
//		"DISPLAY_NAME" => "Y",
//		"DISPLAY_TOP_PAGER" => "N",
//		"FILTER_FIELD_CODE" => array(
//			0 => "",
//			1 => "",
//		),
//		"FILTER_NAME" => "",
//		"FILTER_PROPERTY_CODE" => array(
//			0 => "",
//			1 => "",
//		),
//		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
//		"IBLOCK_ID" => "51",
//		"IBLOCK_TYPE" => "aspro_allcorp3_catalog",
//		"IMAGE_POSITION" => "left",
//		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
//		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
//		"LIST_FIELD_CODE" => array(
//			0 => "NAME",
//			1 => "",
//		),
//		"LIST_PROPERTY_CODE" => array(
//			0 => "",
//			1 => "TITLE_BUTTON",
//			2 => "LINK_BUTTON",
//			3 => "",
//		),
//		"MESSAGE_404" => "",
//		"META_DESCRIPTION" => "-",
//		"META_KEYWORDS" => "-",
//		"NEWS_COUNT" => "20",
//		"PAGER_BASE_LINK_ENABLE" => "N",
//		"PAGER_DESC_NUMBERING" => "N",
//		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//		"PAGER_SHOW_ALL" => "N",
//		"PAGER_SHOW_ALWAYS" => "N",
//		"PAGER_TEMPLATE" => ".default",
//		"PAGER_TITLE" => "Новости",
//		"PREVIEW_TRUNCATE_LEN" => "",
//		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
//		"SEF_FOLDER" => "/fff/",
//		"SEF_MODE" => "Y",
//		"SET_LAST_MODIFIED" => "N",
//		"SET_STATUS_404" => "N",
//		"SET_TITLE" => "Y",
//		"SHOW_404" => "N",
//		"SHOW_ASK_QUESTION_BLOCK" => "Y",
//		"SHOW_DETAIL_LINK" => "Y",
//		"SHOW_SECTION_NAME" => "N",
//		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
//		"SHOW_TABS" => "Y",
//		"SORT_BY1" => "SORT",
//		"SORT_BY2" => "ID",
//		"SORT_ORDER1" => "ASC",
//		"SORT_ORDER2" => "DESC",
//		"STRICT_SECTION_CHECK" => "N",
//		"S_ASK_QUESTION" => "",
//		"USE_CATEGORIES" => "N",
//		"USE_FILTER" => "N",
//		"USE_PERMISSIONS" => "N",
//		"USE_RATING" => "N",
//		"USE_REVIEW" => "N",
//		"USE_RSS" => "N",
//		"USE_SEARCH" => "N",
//		"USE_SHARE" => "N",
//		"VIEW_TYPE" => "accordion",
//		"DISPLAY_DATE" => "N",
//		"DISPLAY_PICTURE" => "N",
//		"DISPLAY_PREVIEW_TEXT" => "N",
//		"TEMPLATE_THEME" => "blue",
//		"MEDIA_PROPERTY" => "",
//		"SLIDER_PROPERTY" => "",
//		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",
//		"SECTION_TYPE_VIEW" => "FROM_MODULE",
//		"ELEMENT_TYPE_VIEW" => "FROM_MODULE",
//		"USE_DETAIL_TABS" => "FROM_MODULE",
//		"SKU_IBLOCK_ID" => "1",
//		"SKU_SORT_ORDER" => "asc",
//		"SKU_SORT_FIELD2" => "sort",
//		"SKU_SORT_ORDER2" => "asc",
//		"CHANGE_TEXT_AND_CARDS" => "N",
//		"SHOW_SECTION_DESCRIPTION" => "Y",
//		"SHOW_SECTION" => "Y",
//		"INCLUDE_SUBSECTIONS" => "Y",
//		"SHOW_CHILD_SECTIONS" => "Y",
//		"SHOW_CHILD_ELEMENTS" => "N",
//		"ELEMENTS_ITEMS_OFFSET" => "Y",
//		"ELEMENTS_COUNT" => "2",
//		"DETAIL_USE_TAGS" => "N",
//		"SHOW_CATEGORY" => "N",
//		"PROPERTIES_DISPLAY_TYPE" => "TABLE",
//		"T_DESC" => "",
//		"T_CHAR" => "",
//		"SHOW_BIG_GALLERY" => "Y",
//		"TYPE_BIG_GALLERY" => "BIG",
//		"T_BIG_GALLERY" => "",
//		"BIG_GALLERY_PROP_CODE" => "-",
//		"T_VIDEO" => "",
//		"T_DOCS" => "",
//		"DOCS_PROP_CODE" => "-",
//		"T_FAQ" => "",
//		"T_REVIEWS" => "",
//		"T_VACANCY" => "",
//		"T_STAFF" => "",
//		"T_SALE" => "",
//		"T_NEWS" => "",
//		"T_ARTICLES" => "",
//		"T_SERVICES" => "",
//		"T_PROJECTS" => "",
//		"T_PARTNERS" => "",
//		"T_GOODS" => "",
//		"T_TARIFFS" => "",
//		"SHOW_DOPS" => "N",
//		"DETAIL_USE_COMMENTS" => "N",
//		"DETAIL_BLOCKS_ORDER" => "order_form,sale,tizers,tabs,big_gallery,services,projects,news,articles,staff,partners,vacancy,goods,comments,tariffs",
//		"DETAIL_BLOCKS_TAB_ORDER" => "desc,char,video,docs,faq,reviews,dops",
//		"S_ORDER_SERVISE" => "",
//		"FORM_ID_ORDER_SERVISE" => "",
//		"SEF_URL_TEMPLATES" => array(
//			"news" => "",
//			"section" => "",
//			"detail" => "#ELEMENT_ID#/",
//		)
//	),
//	false
//);?>
    <div class="row row__flex">
        <div class="col-md-4 left__menu">
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left_vertical", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "podrazdel_faq",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "left_vertical"
	),
	false
);?>
        </div>
        <div class="col-md-8">
            <?$APPLICATION->IncludeComponent("bitrix:news", "price-new1", Array(
	"ADD_ELEMENT_CHAIN" => "Y",	// Включать название элемента в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "Y",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"CACHE_TIME" => "100000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"COMPONENT_TEMPLATE" => "services-new",
		"COUNT_IN_LINE" => "3",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DETAIL_FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
		"DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "TITLE_BUTTON",
			2 => "LINK_BUTTON",
			3 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FILTER_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "51",	// Инфоблок
		"IBLOCK_TYPE" => "aspro_allcorp3_catalog",	// Тип инфоблока
		"IMAGE_POSITION" => "left",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"LIST_FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "TITLE_BUTTON",
			2 => "LINK_BUTTON",
			3 => "",
		),
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",	// Шаблон страницы блока списка элементов
		"SEF_FOLDER" => "/fff/",	// Каталог ЧПУ (относительно корня сайта)
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SHOW_ASK_QUESTION_BLOCK" => "Y",
		"SHOW_DETAIL_LINK" => "Y",	// Отображать ссылку на детальную страницу
		"SHOW_SECTION_NAME" => "N",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",	// Показывать описание разделов
		"SHOW_TABS" => "Y",
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "ID",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
		"S_ASK_QUESTION" => "",	// Текст кнопки "Задать вопрос"
		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
		"USE_FILTER" => "N",	// Показывать фильтр
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"USE_RATING" => "N",	// Разрешить голосование
		"USE_REVIEW" => "N",	// Разрешить отзывы
		"USE_RSS" => "N",	// Разрешить RSS
		"USE_SEARCH" => "N",	// Разрешить поиск
		"USE_SHARE" => "N",	// Показывать ссылки на соцсети
		"VIEW_TYPE" => "accordion",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",	// Шаблон страницы блока списка разделов
		"SECTION_TYPE_VIEW" => "FROM_MODULE",	// Шаблон страницы блока списка подразделов
		"ELEMENT_TYPE_VIEW" => "FROM_MODULE",	// Шаблон страницы блока детальной страницы
		"USE_DETAIL_TABS" => "FROM_MODULE",	// Вид описания на детальной странице
		"SKU_IBLOCK_ID" => "1",	// Инфоблок торговых предложений
		"SKU_SORT_ORDER" => "asc",	// Порядок для первой сортировки торговых предложений
		"SKU_SORT_FIELD2" => "sort",	// Поле для второй сортировки торговых предложений
		"SKU_SORT_ORDER2" => "asc",	// Порядок для второй сортировки торговых предложений
		"CHANGE_TEXT_AND_CARDS" => "N",	// Поменять местами карточки с элеменетами и описание раздела
		"SHOW_SECTION_DESCRIPTION" => "Y",	// Показывать описание текущего раздела в списке элементов
		"SHOW_SECTION" => "Y",	// Отображать раздел у элементов в списке
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"SHOW_CHILD_SECTIONS" => "Y",	// Показывать вложенные подразделы
		"SHOW_CHILD_ELEMENTS" => "N",	// Показывать вложенные элементы
		"ELEMENTS_ITEMS_OFFSET" => "Y",	// Выводить элементы с отступами в блоке списка элементов
		"ELEMENTS_COUNT" => "2",	// Количество элементов в строке в блоке списка элементов
		"DETAIL_USE_TAGS" => "N",	// Показывать теги на детальной странице
		"SHOW_CATEGORY" => "N",	// Показывать раздел
		"PROPERTIES_DISPLAY_TYPE" => "TABLE",	// Показывать свойства
		"T_DESC" => "",	// Альтернативный заголовок "Описание"
		"T_CHAR" => "",	// Альтернативный заголовок "Характеристики"
		"SHOW_BIG_GALLERY" => "Y",	// Отображать фотогалерею
		"TYPE_BIG_GALLERY" => "BIG",	// Тип фотогалереи
		"T_BIG_GALLERY" => "",	// Альтернативный заголовок "Фотогалерея"
		"BIG_GALLERY_PROP_CODE" => "-",	// Свойство "Фотогалерея"
		"T_VIDEO" => "",	// Альтернативный заголовок "Видео"
		"T_DOCS" => "",	// Альтернативный заголовок "Документы"
		"DOCS_PROP_CODE" => "-",	// Свойство "Документы"
		"T_FAQ" => "",	// Альтернативный заголовок "Вопрос-ответ"
		"T_REVIEWS" => "",	// Альтернативный заголовок "Отзывы"
		"T_VACANCY" => "",	// Альтернативный заголовок "Вакансии"
		"T_STAFF" => "",	// Альтернативный заголовок "Сотрудники"
		"T_SALE" => "",	// Альтернативный заголовок "Акции"
		"T_NEWS" => "",	// Альтернативный заголовок "Новости"
		"T_ARTICLES" => "",	// Альтернативный заголовок "Статьи"
		"T_SERVICES" => "",	// Альтернативный заголовок "Услуги"
		"T_PROJECTS" => "",	// Альтернативный заголовок "Проекты"
		"T_PARTNERS" => "",	// Альтернативный заголовок "Партнеры"
		"T_GOODS" => "",	// Альтернативный заголовок "Товары"
		"T_TARIFFS" => "",	// Альтернативный заголовок "Тарифы"
		"SHOW_DOPS" => "N",	// Отображать таб "Дополнительно"
		"DETAIL_USE_COMMENTS" => "N",	// Включить отзывы
		"DETAIL_BLOCKS_ORDER" => "order_form,sale,tizers,tabs,big_gallery,services,projects,news,articles,staff,partners,vacancy,goods,comments,tariffs",	// Порядок отображения блоков
		"DETAIL_BLOCKS_TAB_ORDER" => "desc,char,video,docs,faq,reviews,dops",	// Порядок отображения табов
		"S_ORDER_SERVISE" => "",	// Текст кнопки "Заказть услугу"
		"FORM_ID_ORDER_SERVISE" => "",	// ИД формы для заказа услуги
		"TAGS_CLOUD_ELEMENTS" => "150",
		"PERIOD_NEW_TAGS" => "",
		"DISPLAY_AS_RATING" => "rating",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"TAGS_CLOUD_WIDTH" => "100%",
		"SEF_URL_TEMPLATES" => array(
			"news" => "/fff/",
			"section" => "#SECTION_CODE_PATH#",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
		)
	),
	false
);?>
<!--            --><?//$APPLICATION->IncludeComponent("bitrix:news.list", "price-template1", Array(
//	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
//		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
//		"AJAX_MODE" => "N",	// Включить режим AJAX
//		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
//		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
//		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
//		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
//		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
//		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
//		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
//		"CACHE_TYPE" => "A",	// Тип кеширования
//		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
//		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
//		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
//		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
//		"DISPLAY_NAME" => "Y",	// Выводить название элемента
//		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
//		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
//		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
//		"FIELD_CODE" => array(	// Поля
//			0 => "",
//			1 => "",
//		),
//		"FILTER_NAME" => "",	// Фильтр
//		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
//		"IBLOCK_ID" => "51",	// Код информационного блока
//		"IBLOCK_TYPE" => "aspro_allcorp3_catalog",	// Тип информационного блока (используется только для проверки)
//		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
//		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
//		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
//		"NEWS_COUNT" => "20",	// Количество новостей на странице
//		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
//		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
//		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
//		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
//		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
//		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
//		"PAGER_TITLE" => "Новости",	// Название категорий
//		"PARENT_SECTION" => "",	// ID раздела
//		"PARENT_SECTION_CODE" => "",	// Код раздела
//		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
//		"PROPERTY_CODE" => array(	// Свойства
//			0 => "",
//			1 => "",
//		),
//		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
//		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
//		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
//		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
//		"SET_STATUS_404" => "N",	// Устанавливать статус 404
//		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
//		"SHOW_404" => "N",	// Показ специальной страницы
//		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
//		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
//		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
//		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
//		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
//	),
//	false
//);?>
        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>