<?
$els = CIBlockElement::GetList(array(), array("IBLOCK_ID" => $arParams['DOP_NEWS_IBLOCK'], "ACTIVE_DATE" => "Y"), false, false, array("NAME", "DETAIL_TEXT", "ID", "IBLOCK_ID"));
while($el = $els-> GetNext()){
	$arResult['DOP_NEWS'][] = $el;
}
?>