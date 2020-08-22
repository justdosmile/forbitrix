<div class="category-items">
<?
	$total = count($arResult["SECTIONS"]);
	$counter = 0;
	foreach($arResult["SECTIONS"] as $key => $arSection)
	{
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
		$counter++;
	?>


<?if($arSection["DEPTH_LEVEL"]==2):
?>
<div class="item">

<?
	$ds = $arSection['DESCRIPTION'];
?>
<div class="icon"><?=$ds?></div>
<div class="text"><?=$arSection["NAME"]?></div>

<?if($arResult["SECTIONS"][$key+1]['DEPTH_LEVEL']==3 || $counter == $total):?>
<ul class="subcategories">
<?else:?>
</div>
<?endif;?>

<?endif;?>

<?if($arSection["DEPTH_LEVEL"]==3):
?>
<li>
<a href="<?=$arSection["~SECTION_PAGE_URL"]?>"><?=$arSection['NAME']?></a>
</li>

<?if($arResult["SECTIONS"][$key+1]['DEPTH_LEVEL']==2 || $counter == $total):?>
</ul>
<div class="arrow"><img src="<?=SITE_TEMPLATE_PATH;?>/images/category-arrow.png" alt=""></div>
</div>
<?endif;?>

<?endif;?>

	
	<?
	}
	?>
</div>
