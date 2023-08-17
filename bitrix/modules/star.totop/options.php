<?php
	if($USER->IsAdmin()) {
		IncludeModuleLangFile(__FILE__);

		$module_id = 'star.totop';

		$arSites = array();
		$db_res = CSite::GetList($by="sort", $order="desc", array("ACTIVE"=>"Y"));
		while($res = $db_res->Fetch()) {
			$arSites[] = $res;
		}

		if ($REQUEST_METHOD == "POST" && check_bitrix_sessid()) {
			if (isset($_REQUEST["SITE"]) && is_array($_REQUEST["SITE"])) {

				foreach ($arSites as $arSite) {
					COption::SetOptionString($module_id, "ENABLED", (isset($_REQUEST["SITE"][$arSite["ID"]]["ENABLED"])) ? "Y" : "N", FALSE, $arSite["ID"]);

					if (isset($_FILES["IMAGE_".$arSite["ID"]]) && $_FILES["IMAGE_".$arSite["ID"]]["size"] > 0) {
						$arFile = $_FILES["IMAGE_".$arSite["ID"]];
						$arFile["MODULE_ID"] = $module_id;
						$arFile["del"] = "IMAGE_".$arSite["ID"]."_del";
						$res = CFile::SaveFile($arFile, $module_id, TRUE);
						if ($res) COption::SetOptionString($module_id, "IMAGE", $res, FALSE, $arSite["ID"]);
					}
				}

				foreach($_REQUEST["SITE"] as $siteId => $siteOption) {
					foreach($siteOption as $name => $value) {
						switch ($name) {
							case "TYPE":
							case "TEXT":
							case "TEXT_COLOR":
							case "BACKGROUND_COLOR":
							case "POSITION":
							case "OFFSET_X":
							case "OFFSET_Y":
							case "DISTANCE":
							case "OPACITY":
							case "SPEED":
							case "FONT_SIZE":
							case "DEVICE":
								COption::SetOptionString($module_id, $name, $value, FALSE, $siteId);
								break;
							default:
								break;
						}
					}
				}
			}
		}

		foreach($arSites as $arSite) {
			$arTabs[] = array(
				"DIV" => "tab".$arSite["ID"],
				"TAB" => $arSite["NAME"]." (".$arSite["ID"].")",
				"SITE_ID" => $arSite["ID"],
				"TITLE" => $arSite["NAME"]." (".$arSite["ID"].")",
			);
		}

		$tabControl = new CAdminTabControl("tabControl", $arTabs);

		CJSCore::Init(array("jquery", "color_picker"));
		$tabControl->Begin();

		?>

		<form method="POST" enctype="multipart/form-data" action="<?echo $APPLICATION->GetCurPage()?>?mid=<?=htmlspecialcharsbx($mid)?>&lang=<?=LANGUAGE_ID?>" name="totop">
			<?=bitrix_sessid_post();?>
			<?
			foreach($arTabs as $key => $arTab) {
				$tabControl->BeginNextTab();
			?>
				<tr>
					<td width="50%" class="adm-detail-content-cell-l">
						<label for="ENABLED"><?=GetMessage("STAR_TOTOP_ENABLED")?></label>
					</td>
					<td width="50%" class="adm-detail-content-cell-r">
						<input type="checkbox" id="ENABLED_<?=$arTab["SITE_ID"]?>" name="SITE[<?=$arTab["SITE_ID"]?>][ENABLED]" value="Y" <?if (COption::GetOptionString($module_id, "ENABLED", FALSE, $arTab["SITE_ID"]) == "Y"):?>checked=""<?endif;?> class="adm-designed-checkbox">
						<label class="adm-designed-checkbox-label" for="ENABLED_<?=$arTab["SITE_ID"]?>" title=""></label>
					</td>
				</tr>

				<tr class="heading"><td colspan="2"><?=GetMessage("STAR_TOTOP_SETTINGS")?></td></tr>

				<tr>
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_DEVICE")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<? $curDevice = COption::GetOptionString($module_id, "DEVICE", FALSE, $arTab["SITE_ID"]); ?>
						<select name="SITE[<?=$arTab["SITE_ID"]?>][DEVICE]">
							<option value="all" <?if($curDevice == "all"):?>selected=""<?endif;?>><?=GetMessage("STAR_TOTOP_ALL")?></option>
							<option value="desktop" <?if($curDevice == "desktop"):?>selected=""<?endif;?>><?=GetMessage("STAR_TOTOP_DESKTOP")?></option>
							<option value="mobile" <?if($curDevice == "mobile"):?>selected=""<?endif;?>><?=GetMessage("STAR_TOTOP_MOBILE")?></option>
						</select>
					</td>
				</tr>

				<tr>
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_TYPE")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<? $curType = COption::GetOptionString($module_id, "TYPE", FALSE, $arTab["SITE_ID"]); ?>
						<select name="SITE[<?=$arTab["SITE_ID"]?>][TYPE]" class="type-selector" data-sid="<?=$arTab["SITE_ID"]?>" onchange="changeType(this.value, this.dataset.sid);">
							<option value="text" <?if($curType == "text"):?>selected=""<?endif;?>><?=GetMessage("STAR_TOTOP_TEXT")?></option>
							<option value="image" <?if($curType == "image"):?>selected=""<?endif;?>><?=GetMessage("STAR_TOTOP_IMAGE")?></option>
						</select>
					</td>
				</tr>

				<tr id="IMAGE_<?=$arTab["SITE_ID"]?>">
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_IMAGE")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<?=CFile::ShowImage(COption::GetOptionString($module_id, "IMAGE", FALSE, $arTab["SITE_ID"]), 0, 0, "style='max-width: 300px; height: auto;'");?>
						<br/>
						<input type="file" name="IMAGE_<?=$arTab["SITE_ID"]?>" accept="image/*"/>
					</td>
				</tr>

				<tr id="FONT_SIZE_<?=$arTab["SITE_ID"]?>">
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_FONT_SIZE")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<input name="SITE[<?=$arTab["SITE_ID"]?>][FONT_SIZE]" value="<?=COption::GetOptionString($module_id, "FONT_SIZE", FALSE, $arTab["SITE_ID"])?>"/>
					</td>
				</tr>
				<tr id="TEXT_<?=$arTab["SITE_ID"]?>">
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_TEXT")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<input name="SITE[<?=$arTab["SITE_ID"]?>][TEXT]" value="<?=COption::GetOptionString($module_id, "TEXT", FALSE, $arTab["SITE_ID"])?>"/>
					</td>
				</tr>

				<tr id="TEXT_COLOR_<?=$arTab["SITE_ID"]?>">
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_TEXT_COLOR_TITLE")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<?
							$textColor = COption::GetOptionString($module_id, "TEXT_COLOR", FALSE, $arTab["SITE_ID"]);
						?>
						<input name="SITE[<?=$arTab["SITE_ID"]?>][TEXT_COLOR]" value="<?=$textColor?>" style="vertical-align: middle;"/>
						<span class="colorpick_in" style="display: inline-block; width: 17px; height: 17px; vertical-align: middle; cursor: pointer; border: 1px solid #000; background: <?=$textColor?>"></span>
					</td>
				</tr>
				<tr id="COLOR_NOTE_<?=$arTab["SITE_ID"]?>">
					<td colspan="2" align="center">
						<div class="adm-info-message-wrap" align="center">
							<div class="adm-info-message"><?=GetMessage("STAR_TOTOP_TEXT_COLOR_NOTE")?></div>
						</div>
					</td>
				</tr>

				<tr id="BACKGROUND_COLOR_<?=$arTab["SITE_ID"]?>">
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_BACKGROUND_COLOR_TITLE")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<?
							$backColor = COption::GetOptionString($module_id, "BACKGROUND_COLOR", FALSE, $arTab["SITE_ID"]);
						?>
						<input name="SITE[<?=$arTab["SITE_ID"]?>][BACKGROUND_COLOR]" value="<?=$backColor?>"/>
						<span class="colorpick_in" style="display: inline-block; width: 17px; height: 17px; vertical-align: middle; cursor: pointer; border: 1px solid #000; background: <?=$backColor?>"></span>
					</td>
				</tr>
				<tr id="BACKGROUND_COLOR_NOTE_<?=$arTab["SITE_ID"]?>">
					<td colspan="2" align="center">
						<div class="adm-info-message-wrap" align="center">
							<div class="adm-info-message"><?=GetMessage("STAR_TOTOP_BACKGROUND_COLOR_NOTE")?></div>
						</div>
					</td>
				</tr>

				<tr>
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_POSITION")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<? $curType = COption::GetOptionString($module_id, "POSITION", FALSE, $arTab["SITE_ID"]); ?>
						<select name="SITE[<?=$arTab["SITE_ID"]?>][POSITION]">
							<option value="left" <?if($curType == "left"):?>selected=""<?endif;?>><?=GetMessage("STAR_TOTOP_POSITION_LEFT")?></option>
							<option value="right" <?if($curType == "right"):?>selected=""<?endif;?>><?=GetMessage("STAR_TOTOP_POSITION_RIGHT")?></option>
						</select>
					</td>
				</tr>

				<tr>
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_OFFSET_X")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<input name="SITE[<?=$arTab["SITE_ID"]?>][OFFSET_X]" value="<?=COption::GetOptionString($module_id, "OFFSET_X", FALSE, $arTab["SITE_ID"])?>"/>
					</td>
				</tr>

				<tr>
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_OFFSET_Y")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<input name="SITE[<?=$arTab["SITE_ID"]?>][OFFSET_Y]" value="<?=COption::GetOptionString($module_id, "OFFSET_Y", FALSE, $arTab["SITE_ID"])?>"/>
					</td>
				</tr>

				<tr>
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_DISTANCE")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<input name="SITE[<?=$arTab["SITE_ID"]?>][DISTANCE]" value="<?=COption::GetOptionString($module_id, "DISTANCE", FALSE, $arTab["SITE_ID"])?>"/>
					</td>
				</tr>

				<tr>
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_OPACITY")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<input name="SITE[<?=$arTab["SITE_ID"]?>][OPACITY]" value="<?=COption::GetOptionString($module_id, "OPACITY", FALSE, $arTab["SITE_ID"])?>"/>
					</td>
				</tr>

				<tr>
					<td width="50%" class="adm-detail-content-cell-l"><?=GetMessage("STAR_TOTOP_SPEED")?></td>
					<td width="50%" class="adm-detail-content-cell-r">
						<input name="SITE[<?=$arTab["SITE_ID"]?>][SPEED]" value="<?=COption::GetOptionString($module_id, "SPEED", FALSE, $arTab["SITE_ID"])?>"/>
					</td>
				</tr>

			<?
				$tabControl->EndTab();
			}
			$tabControl->End();
			$tabControl->Buttons();
			?>
			<input type="submit" name="save" value="<?echo GetMessage("STAR_TOTOP_SAVE")?>"/>
		</form>

		<script type="text/javascript">
			function changeType(type, site_id) {
				document.getElementById('IMAGE_'+site_id).style.display = (type == 'image') ? 'table-row' : 'none';

				document.getElementById('FONT_SIZE_'+site_id).style.display = (type == 'text') ? 'table-row' : 'none';
				document.getElementById('TEXT_'+site_id).style.display = (type == 'text') ? 'table-row' : 'none';
				document.getElementById('TEXT_COLOR_'+site_id).style.display = (type == 'text') ? 'table-row' : 'none';
				document.getElementById('COLOR_NOTE_'+site_id).style.display = (type == 'text') ? 'table-row' : 'none';
				document.getElementById('BACKGROUND_COLOR_'+site_id).style.display = (type == 'text') ? 'table-row' : 'none';
				document.getElementById('BACKGROUND_COLOR_NOTE_'+site_id).style.display = (type == 'text') ? 'table-row' : 'none';
			}

			document.addEventListener('DOMContentLoaded', function () {
				document.querySelectorAll('.type-selector').forEach((select) => changeType(select.value, select.dataset.sid));
			});

			let colorPickerDisplayed = false;
			$(document).ready(function() {
				$('.colorpick_in').click(function() {
					if (!colorPickerDisplayed) {
						colorPickerDisplayed = true;

						let element = $(this);

						new BX.ColorPicker({
							bindElement: $(this)[0],
							allowCustomColor: true,
							onColorSelected: function (color) {
								element.closest('td').find('input').val(color);
								element.css('background', color);
							},
							popupOptions: {
								autoHide: true,
								closeByEsc: true,
								events: {
									onPopupClose: function () {
										colorPickerDisplayed = false;
									}
								}
							}
						}).open();
					}
				});

			});
		</script>
<? } ?>
