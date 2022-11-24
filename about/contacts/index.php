<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задайте вопрос");
?><h1>Контактная информация</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"personal",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"COMPONENT_TEMPLATE" => "personal",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "about",
		"USE_EXT" => "N"
	)
);?>

	<ul class="contactList">
		<li>
		<table>
		<tbody>
		<tr>
			<td>
 <img alt="cont1.png" src="<?=SITE_TEMPLATE_PATH?>/images/cont1.png" title="cont1.png">
			</td>
			<td>
				 +7 (800) 302 39 76
			</td>
		</tr>
		</tbody>
		</table>
 </li>
		<li>
		<table>
		<tbody>
		<tr>
			<td>
 <img alt="cont2.png" src="<?=SITE_TEMPLATE_PATH?>/images/cont2.png" title="cont2.png">
			</td>
			<td>
 <a href="mailto:kompressory@ruteh.ru">zakaz@prom-kompressor.ru</a><br>
			</td>
		</tr>
		</tbody>
		</table>
 </li>
		<li>
		<table>
		<tbody>
		<tr>
			<td>
 <img alt="cont3.png" src="<?=SITE_TEMPLATE_PATH?>/images/cont3.png" title="cont3.png">
			</td>
			<td>
				 г. Барнаул<br>
				 улица Попова, д.181/3     
			</td>
		</tr>
		</tbody>
		</table>
 </li>
		<li>
		<table>
		<tbody>
		<tr>
			<td>
 <img alt="cont4.png" src="<?=SITE_TEMPLATE_PATH?>/images/cont4.png" title="cont4.png">
			</td>
			<td>
				 Пн-Пт : с 9:00 до 18:00<br>
				 Сб, Вс : выходной<br>
			</td>
		</tr>
		</tbody>
		</table>
 </li>
	</ul>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(
			0 => "TYPECONTROL",
			1 => "SCALELINE",
			2 => "SEARCH",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:53.323120118514716;s:10:\"yandex_lon\";d:83.6433177530664;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:83.6433177530664;s:3:\"LAT\";d:53.32312011851719;s:4:\"TEXT\";s:13:\"ООО ЦПО\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_DRAGGING",
		),
		"API_KEY" => ""
	),
	false
);?><br>
<br><br>
		<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "twoColumns", array(
	"CACHE_TIME" => "360000",
		"CACHE_TYPE" => "Y",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"WEB_FORM_ID" => "11",
		"COMPONENT_TEMPLATE" => "twoColumns",
		"VARIABLE_ALIASES" => array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID",
		)
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>