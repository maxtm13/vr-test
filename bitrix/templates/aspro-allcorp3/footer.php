					<?if(!$isIndex):?>
						<?CAllcorp3::checkRestartBuffer();?>
					<?endif;?>
					<?IncludeTemplateLangFile(__FILE__);?>
					<?global $arTheme, $isIndex, $is404;?>
					<?if(!$isIndex):?>
							<?if($is404):?>
								</div>
							<?else:?>
									<?CAllcorp3::get_banners_position('CONTENT_BOTTOM');?>
									</div> <?// class=right_block?>
									<?if($APPLICATION->GetProperty("MENU") != "N" && !defined("ERROR_404")):?>
										<?CAllcorp3::ShowPageType('left_block');?>
									<?endif;?>
								</div><?// class=col-md-12 col-sm-12 col-xs-12 content-md?>
							<?endif;?>
	
							</div><?// class="maxwidth-theme?>
							
						</div><?// class=row?>
					<?else:?>
						<?CAllcorp3::ShowPageType('indexblocks');?>
					<?endif;?>
				</div><?// class=container?>
				<?CAllcorp3::get_banners_position('FOOTER');?>
			</div><?// class=main?>
		</div><?// class=body?>
		<?CAllcorp3::ShowPageType('footer');?>
		<?include_once(str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'].'/'.SITE_DIR.'include/footer/bottom_footer.php'));?>
<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b25905132/crm/site_button/loader_2_xfrcz7.js');
</script>
<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript" >-->
<!--   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};-->
<!--   m[i].l=1*new Date();-->
<!--   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}-->
<!--   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})-->
<!--   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");-->
<!---->
<!--   ym(95164445, "init", {-->
<!--        clickmap:true,-->
<!--        trackLinks:true,-->
<!--        accurateTrackBounce:true,-->
<!--        webvisor:true-->
<!--   });-->
<!--</script>-->
<!--<noscript><div><img src="https://mc.yandex.ru/watch/95164445" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
<!-- /Yandex.Metrika counter -->
	</body>
</html>