<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$this->addExternalCss("/local/component-templates/news/component-styles.css");
$this->addExternalJS("/local/component-templates/news/scripts.js");

?>
<div class="bx-newslist">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<div class="news-list">
<?
foreach($arResult['ITEMS'] as $k => $v){
	$date = explode(' ', $v['TIMESTAMP_X']);
	?>
	    <div class="news-item-good" id="<?=$v['ID'];?>">
        <div class="news-date"><?=$date[0];?></div>
        <div class="news-title"><?=$v['NAME'];?></div>
        <div class="news-detail"><?=$v['DETAIL_TEXT'];?> </div>
    </div>
	<?
}
?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
<br />
<b>Дополнительные новости</b><br />
<?
foreach($arResult['DOP_NEWS'] as $k => $v){
	$date = explode(' ', $v['TIMESTAMP_X']);
	?>
	    <div class="news-item-good" id="<?=$v['ID'];?>">
        <div class="news-date"><?=$date[0];?></div>
        <div class="news-title"><?=$v['NAME'];?></div>
        <div class="news-detail"><?=$v['DETAIL_TEXT'];?> </div>
    </div>
	<?
}
?>

