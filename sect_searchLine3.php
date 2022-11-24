<?
	//include module
	\Bitrix\Main\Loader::includeModule("dw.deluxe");

	//vars
	$catalogIblockId = null;
	$arPriceCodes = array();

	//get template settings
	$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
	if(!empty($arTemplateSettings)){
		$catalogIblockId = $arTemplateSettings["TEMPLATE_PRODUCT_IBLOCK_ID"];
		$arPriceCodes = explode(", ", $arTemplateSettings["TEMPLATE_PRICE_CODES"]);
	}
?>
<?$APPLICATION->IncludeComponent(
	"dresscode:search.line", 
	"version3", 
	array(
		"COMPONENT_TEMPLATE" => "version3",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => $catalogIblockId,
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"PRICE_CODE" => $arPriceCodes,
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"PROPERTY_CODE" => array(
			0 => "OFFERS",
			1 => "ATT_BRAND",
			2 => "COLOR",
			3 => "ZOOM2",
			4 => "BATTERY_LIFE",
			5 => "SWITCH",
			6 => "GRAF_PROC",
			7 => "LENGTH_OF_CORD",
			8 => "DISPLAY",
			9 => "LOADING_LAUNDRY",
			10 => "FULL_HD_VIDEO_RECORD",
			11 => "INTERFACE",
			12 => "COMPRESSORS",
			13 => "Number_of_Outlets",
			14 => "MAX_RESOLUTION_VIDEO",
			15 => "MAX_BUS_FREQUENCY",
			16 => "MAX_RESOLUTION",
			17 => "FREEZER",
			18 => "POWER_SUB",
			19 => "POWER",
			20 => "HARD_DRIVE_SPACE",
			21 => "MEMORY",
			22 => "OS",
			23 => "ZOOM",
			24 => "PAPER_FEED",
			25 => "SUPPORTED_STANDARTS",
			26 => "VIDEO_FORMAT",
			27 => "SUPPORT_2SIM",
			28 => "MP3",
			29 => "ETHERNET_PORTS",
			30 => "MATRIX",
			31 => "CAMERA",
			32 => "PHOTOSENSITIVITY",
			33 => "DEFROST",
			34 => "SPEED_WIFI",
			35 => "SPIN_SPEED",
			36 => "PRINT_SPEED",
			37 => "SOCKET",
			38 => "IMAGE_STABILIZER",
			39 => "GSM",
			40 => "SIM",
			41 => "TYPE",
			42 => "MEMORY_CARD",
			43 => "TYPE_BODY",
			44 => "TYPE_MOUSE",
			45 => "TYPE_PRINT",
			46 => "CONNECTION",
			47 => "TYPE_OF_CONTROL",
			48 => "TYPE_DISPLAY",
			49 => "TYPE2",
			50 => "REFRESH_RATE",
			51 => "RANGE",
			52 => "AMOUNT_MEMORY",
			53 => "MEMORY_CAPACITY",
			54 => "VIDEO_BRAND",
			55 => "DIAGONAL",
			56 => "RESOLUTION",
			57 => "TOUCH",
			58 => "CORES",
			59 => "LINE_PROC",
			60 => "PROCESSOR",
			61 => "CLOCK_SPEED",
			62 => "TYPE_PROCESSOR",
			63 => "PROCESSOR_SPEED",
			64 => "HARD_DRIVE",
			65 => "HARD_DRIVE_TYPE",
			66 => "Number_of_memory_slots",
			67 => "MAXIMUM_MEMORY_FREQUENCY",
			68 => "TYPE_MEMORY",
			69 => "BLUETOOTH",
			70 => "FM",
			71 => "GPS",
			72 => "HDMI",
			73 => "SMART_TV",
			74 => "USB",
			75 => "WIFI",
			76 => "FLASH",
			77 => "ROTARY_DISPLAY",
			78 => "SUPPORT_3D",
			79 => "SUPPORT_3G",
			80 => "WITH_COOLER",
			81 => "FINGERPRINT",
			82 => "COLLECTION",
			83 => "TOTAL_OUTPUT_POWER",
			84 => "VID_ZASTECHKI",
			85 => "VID_SUMKI",
			86 => "PROFILE",
			87 => "VYSOTA_RUCHEK",
			88 => "GAS_CONTROL",
			89 => "WARRANTY",
			90 => "GRILL",
			91 => "MORE_PROPERTIES",
			92 => "GENRE",
			93 => "OTSEKOV",
			94 => "CONVECTION",
			95 => "INTAKE_POWER",
			96 => "NAZNAZHENIE",
			97 => "BULK",
			98 => "PODKLADKA",
			99 => "SURFACE_COATING",
			100 => "brand_tyres",
			101 => "SEASON",
			102 => "SEASONOST",
			103 => "DUST_COLLECTION",
			104 => "REF",
			105 => "COUNTRY_BRAND",
			106 => "DRYING",
			107 => "REMOVABLE_TOP_COVER",
			108 => "CONTROL",
			109 => "FINE_FILTER",
			110 => "FORM_FAKTOR",
			111 => "SKU_COLOR",
			112 => "CML2_ARTICLE",
			113 => "DELIVERY",
			114 => "PICKUP",
			115 => "USER_ID",
			116 => "BLOG_POST_ID",
			117 => "VIDEO",
			118 => "BLOG_COMMENTS_CNT",
			119 => "VOTE_COUNT",
			120 => "SHOW_MENU",
			121 => "SIMILAR_PRODUCT",
			122 => "RATING",
			123 => "RELATED_PRODUCT",
			124 => "VOTE_SUM",
			125 => "",
		),
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_MEASURES" => "N"
	),
	false
);?>