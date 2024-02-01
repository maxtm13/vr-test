<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корпоративное право");?><div class="price__mobile-nav">
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
);?>
</div>
<h2><?$APPLICATION->ShowTitle()?></h2>
<div>
</div>
<div class="inner_servise">
	<div>
		 Закажите звонок, чтобы уточнить цены на интересующие вас услуги. Наш специалист свяжется с вами в ближайшее время.
	</div>
	<div class="phones__dropdown-item callback-item btn-service">
		<div class="animate-load btn btn-default btn-wide has-ripple" data-event="jqm" data-param-id="8" data-name="callback">
			 Заказать звонок <br>
		
		</div>
	</div>
</div>
<div>
<div class="footer__top-part " data-ajax-load-block="FOOTER_TOGGLE_SUBSCRIBE" data-ajax-check-visible="">
				
																																	<!--'start_frame_cache_footer-subscribe'-->			<div class="maxwidth-theme">
			<div class="subscribe-block">
				<div class="subscribe-block__part--left">
					<div class="subscribe-block__icon">
						<i class="svg inline  svg-inline-subscribe" aria-hidden="true"><svg width="40" height="34" viewBox="0 0 40 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.35" d="M13.9976 21.3324L1.39108 18.3433C0.924794 18.2327 0.8661 17.5929 1.30449 17.3994L38.2981 1.06579C38.6287 0.919856 39.0001 1.16189 39.0001 1.52319V27.5046C39.0001 27.8307 38.693 28.0695 38.3769 27.9892L24.347 24.4229C24.133 24.3685 23.9088 24.4608 23.7951 24.6501L18.9287 32.7539C18.6677 33.1885 18.0001 33.0035 18.0001 32.4965V23.2072C18.0001 23.0746 18.0528 22.9474 18.1465 22.8537L31.0001 10.0001" stroke="#333333" stroke-width="2" stroke-linecap="round"></path>
</svg>
</i>					</div>
					<div class="subscribe-block__text">
						<div class="font_15 font_bold">
    Подписывайтесь<br>на новости и акции
</div>					</div>
				</div>
				<div class="subscribe-block__part--right">
					<div class="subscribe-edit">
	<form action="/cabinet/subscribe/" method="post" class="subscribe-form" novalidate="novalidate">
	<input type="hidden" name="sessid" id="sessid" value="09b509a50e10e98d132310f82786134c">	<input type="text" name="EMAIL" class="form-control subscribe-input required" placeholder="E-mail" value="" size="30" maxlength="255" aria-required="true">

			<input type="hidden" name="RUB_ID[]" value="1">
	
	<input type="hidden" name="FORMAT" value="html">

	<div class="subscribe-form__save stroke-theme-hover colored_theme_hover_bg-block">
		<input type="submit" name="Save" class="subscribe-btn" value="">
		<i class="svg inline  svg-inline- subscribe-form__right-arrow" aria-hidden="true"><svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1L4 4L1 7" stroke="#CACACA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</i>		<div class="subscribe-form__right-arrow-line colored_theme_hover_bg-el"></div>
	</div>

	<input type="hidden" name="PostAction" value="Add">
	<input type="hidden" name="ID" value="">
</form>
</div>				</div>
			</div>
		</div>
	<!--'end_frame_cache_footer-subscribe'-->																						
				
				
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