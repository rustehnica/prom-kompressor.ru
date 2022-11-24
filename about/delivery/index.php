<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");
?><h1>Доставка</h1>
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
<div class="global-content-block">
	<div class="detail-text-wrap">
		 ООО "Центр Промышленного Оборудования" осуществляет бесплатную доставку в Кемеровскую, Томскую и Омскую области, по Алтайскому краю и Республике Алтай, до терминала транспортной компании в ближайшем городе при общей сумме покупки от 10 тысяч рублей. Любой транспортной компанией по согласованию с Вами (для уточнения стоимости и сроков доставки в другие регионы обращайтесь к менеджерам).
		<p>
 <b>САМОВЫВОЗ</b>
		</p>
		 Самовывоз производится со склада ООО "Центр Промышленного Оборудования" по адресу г. Барнаул, ул. Попова 179Б <br>
 <br>
		<div style="font-weight: bold;">
			 ! Мы выбираем наиболее надежную упаковку вашего заказа, что гарантирует сохранность вашей покупки в процессе транспортировки. <br>
 <br>
		</div>
		 При возникновении сложностей с расчетом доставки, обратитесь к нашим менеджерам по телефону<b> </b><span style="color: #19689d; font-weight: bold;"><b>8 (800) 302 39 76</b></span><br>
	</div>
 <br>
</div>
<div class="global-information-block">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "information_block",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	)
);?>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>