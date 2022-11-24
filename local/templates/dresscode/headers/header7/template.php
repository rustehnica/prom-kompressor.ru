<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/headers/header7/css/style.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/headers/header7/css/types/".$TEMPLATE_HEADER_TYPE.".css");?>
<div id="headerLine4"<?if($TEMPLATE_HEADER_COLOR != "default"):?> class="color_<?=$TEMPLATE_HEADER_COLOR?>"<?endif;?>>
	<div class="limiter">
		<div class="subTable">
			<div class="subTableColumn">
				<div class="headerLineMenu2">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "topMenu6", Array(
						"ROOT_MENU_TYPE" => "top",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_TIME" => "3600000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => "",
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "top",
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"CACHE_SELECTED_ITEMS" => "N"
						),
						false
					);?>
				</div>
			</div>
			<div class="subTableColumn">
				<div id="topAuth">
					<ul>
						<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "top", Array(
							"REGISTER_URL" => "",
								"FORGOT_PASSWORD_URL" => "",
								"PROFILE_URL" => "",
								"SHOW_ERRORS" => "N",
							),
							false
						);?>
					</ul>
				</div>
				<div id="geoPosition"<?if(!empty($TEMPLATE_SUBHEADER_COLOR)):?> class="color_<?=$TEMPLATE_SUBHEADER_COLOR?>"<?endif;?>>
					<?/* ul>
						<?$APPLICATION->IncludeComponent(
							"dresscode:sale.geo.positiion", 
							".default", 
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"GEO_IP_PARAMS" => "SUPEXGEO",
								"DISABLE_CONFIRMATION_WINDOW" => "Y",
								"GEO_SYPEX_KEY" => "",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "1285912"
							),
							false,
							array(
								"ACTIVE_COMPONENT" => "Y"
							)
						);?>
					</ul */?>
				</div>
				<div id="topSocial">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "social",
							"AREA_FILE_RECURSIVE" => "Y",
							"EDIT_TEMPLATE" => ""
						),
						false
					);?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="headerLine4Phone">
	<div class="limiter">
		<div class="subTable">
			<div class="subTableColumn phoneheader">
				<div>Барнаул: <a href="tel:83852544905">8 3852 54-49-05</a></div>
				<div>Новосибирск: <a href="tel:83832427020">8 3832 42-70-20</a></div>
				<div>Кемерово: <a href="tel:83842215428">8 3842 21-54-28</a></div>
				<div>Омск: <a href="tel:83812207539">8 3812 20-75-39</a></div>
				<div>Томск: <a href="tel:83822286534">8 3822 28-65-34</a></div>
			</div>
			<?/* div class="subTableColumn phoneheader">
				<div class="attention">*В связи с нестабильностью курса рубля относительно основных валют и переоценкой стоимости товаров,<br>конечную стоимость продукции уточняйте у наших менеджером любым удобным способом. </div>
			</div */?>
		</div>
	</div>
</div>
<div id="subHeader7"<?if($TEMPLATE_SUBHEADER_COLOR != "default"):?> class="color_<?=$TEMPLATE_SUBHEADER_COLOR?>"<?endif;?>>
	<div class="limiter">
		<div class="subTable">
			<div class="subTableRow">
				<div class="subTableColumn">
					<div class="verticalBlock">
						<div id="logo">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
									"AREA_FILE_SHOW" => "sect",
									"AREA_FILE_SUFFIX" => "logo",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => ""
								),
								false
							);?>
						</div>
					</div>
				</div>
				<div class="subTableColumn">
					<div id="topSearchLine">
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							array(
								"AREA_FILE_SHOW" => "sect",
								"AREA_FILE_SUFFIX" => "searchLine4",
								"AREA_FILE_RECURSIVE" => "Y",
								"EDIT_TEMPLATE" => ""
							),
							false
						);?>
					</div>
				</div>
				<div class="subTableColumn">
					<div class="phonesContainer">
						<div class="firstPhones">
							<div class="phonesTb">
								<div class="phonesTc">
									<a href="<?=SITE_DIR?>callback/" class="callBackIcon"></a>
								</div>
								<div class="phonesTc">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										".default",
										array(
											"AREA_FILE_SHOW" => "sect",
											"AREA_FILE_SUFFIX" => "phone",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => ""
										),
										false
									);?>
								</div>
							</div>
						</div>
						<div class="secondPhones">
							<div class="phonesTb">
								<div class="phonesTc">
									<a href="<?=SITE_DIR?>callback/" class="scheduleIcon"></a>
								</div>
								<div class="phonesTc">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										".default",
										array(
											"AREA_FILE_SHOW" => "sect",
											"AREA_FILE_SUFFIX" => "phone3",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => ""
										),
										false
									);?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="subTableColumn">
					<div class="toolsContainer">
						<div class="topCompare">
							<div id="flushTopCompare">
								<?$APPLICATION->IncludeComponent("dresscode:compare.line", "version4", Array(),	false);?>
							</div>
						</div>
						<div class="topWishlist">
							<div id="flushTopwishlist">
								<?$APPLICATION->IncludeComponent("dresscode:favorite.line", "version4", Array(), false);?>
							</div>
						</div>
						<div class="cart">
							<div id="flushTopCart">
								<?$APPLICATION->IncludeComponent(
									"bitrix:sale.basket.basket.line", 
									"topCart4", 
									array(
										"HIDE_ON_BASKET_PAGES" => "N",
										"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
										"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
										"PATH_TO_PERSONAL" => SITE_DIR."personal/",
										"PATH_TO_PROFILE" => SITE_DIR."personal/",
										"PATH_TO_REGISTER" => SITE_DIR."login/",
										"POSITION_FIXED" => "N",
										"SHOW_AUTHOR" => "N",
										"SHOW_EMPTY_VALUES" => "Y",
										"SHOW_NUM_PRODUCTS" => "Y",
										"SHOW_PERSONAL_LINK" => "N",
										"SHOW_PRODUCTS" => "Y",
										"SHOW_TOTAL_PRICE" => "Y",
										"COMPONENT_TEMPLATE" => "topCart4",
										"SHOW_DELAY" => "N",
										"SHOW_NOTAVAIL" => "N",
										"SHOW_SUBSCRIBE" => "N",
										"SHOW_IMAGE" => "Y",
										"SHOW_PRICE" => "Y",
										"SHOW_SUMMARY" => "Y",
										"PATH_TO_AUTHORIZE" => "",
										"SHOW_REGISTRATION" => "Y",
										"MAX_IMAGE_SIZE" => "70"
									),
									false
								);?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>