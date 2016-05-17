<?php
/**
 * @package Installer
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: zcwilt  Sun Dec 20 14:01:38 2015 +0000 New in v1.5.5 $
 */
require(DIR_FS_INSTALL . DIR_WS_INSTALL_TEMPLATE . 'partials/partial_modal_help.php');
?>
<form id="systemCheck" name="systemCheck" method="post" action="index.php?main_page=<?php echo $formAction; ?>">
<input type="hidden" name="lng" value="<?php echo $lng; ?>" >
<?php if ($hasMultipleAdmins) { ?>
    <div class="alert-box alert">
    <?php if ($selectedAdminDir != '') { ?>
    <?php  echo TEXT_ERROR_MULTIPLE_ADMINS_SELECTED; ?>
    <?php } else { ?>
    <?php  echo TEXT_ERROR_MULTIPLE_ADMINS_NONE_SELECTED; ?>
    <?php } ?>
    </div>
    <select name="adminDir"><?php echo zen_get_select_options($adminOptionList, $selectedAdminDir)?></select><br><br>
<?php } else { ?>
<input type="hidden" name="adminDir" value="<?php echo $selectedAdminDir; ?>" >
<?php } ?>
<?php if ($selectedAdminDir != '') { ?>
<?php if ($hasSaneConfigFile && !$isCurrentDb && !$otherConfigErrors && $hasUpdatedConfigFile) { ?>
    <div class="alert-box success">
    <?php  echo TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE; ?>
    </div>
<?php } elseif ($hasSaneConfigFile && !$otherConfigErrors && $hasUpdatedConfigFile) { ?>
    <div class="alert-box success">
    <?php  echo TEXT_ERROR_SUCCESS_EXISTING_CONFIGURE_NO_UPDATE; ?>
    </div>
<?php } ?>
<?php if (!$hasUpdatedConfigFile && $hasSaneConfigFile) { ?>
        <div class="alert-box alert">
            <?php  echo TEXT_ERROR_CONFIGURE_REQUIRES_UPDATE; ?>
        </div>

<?php } ?>
<?php if ($hasFatalErrors) { ?>
<div id="fatalErrors" class="errorList">
  <h2><?php echo TEXT_INDEX_FATAL_ERRORS; ?></h2>
    <?php foreach ($listFatalErrors as $error) { ?>
    <div class="alert-box alert">
      <a href="" <?php echo (isset($error['mainErrorTextHelpId'])) ? 'class="hasHelpText" id="' . $error['mainErrorTextHelpId'] . '"' : 'class="hasNoHelpText"' ?>><?php echo($error['mainErrorText']); ?></a>
      <?php if (isset($error['extraErrors'])) { ?>
      <?php foreach ($error['extraErrors'] as $detailError) { ?>
      <br><?php echo $detailError ?>
      <?php } ?>
      <?php } ?>
    </div>
    <?php } ?>
</div>
<?php } ?>
<?php if ($hasWarnErrors) { ?>
<div id="warnErrors" class="errorList">
  <h2><?php echo TEXT_INDEX_WARN_ERRORS; ?></h2>
    <?php foreach ($listWarnErrors as $error) { ?>
    <div class="alert-box secondary">
      <a href="" <?php echo (isset($error['mainErrorTextHelpId'])) ? 'class="hasHelpText" id="' . $error['mainErrorTextHelpId'] . '"' : 'class="hasNoHelpText"' ?>><?php echo($error['mainErrorText']); ?></a>
      <?php if (isset($error['extraErrors'])) { ?>
      <?php foreach ($error['extraErrors'] as $detailError) { ?>
      <br><?php echo $detailError ?>
      <?php } ?>
      <?php } ?>
      </div>
    <?php } ?>
</div>
<?php } ?>
<?php if (!$hasFatalErrors && !$hasWarnErrors && $hasUpdatedConfigFile) { ?>
    <div class="alert-box success">
    <?php  echo TEXT_ERROR_SUCCESS_NO_ERRORS; ?>
    </div>
<?php } ?>
<?php if (!$hasFatalErrors && !$hasSaneConfigFile) { ?>
  <input type="submit" class="zc-full radius button" id="btnsubmit" name="btnsubmit" value="<?php echo TEXT_CONTINUE; ?>" <?php echo ($hasMultipleAdmins) ? '' : 'autofocus="autofocus"'; ?> tabindex="1">
<?php } ?>
<?php if (!$hasFatalErrors && $hasSaneConfigFile && !$hasUpgradeErrors && !$isCurrentDb && $hasUpdatedConfigFile) { ?>
  <input type="submit" class="zc-upg radius button" id="btnsubmit" name="btnsubmit" value="<?php echo TEXT_UPGRADE; ?>" tabindex="2">
<?php } ?>
<?php if (!$hasFatalErrors && $hasSaneConfigFile && !$hasUpgradeErrors && $hasUpdatedConfigFile) { ?>
  <input type="submit" class="zc-full radius button" id="btnsubmit1" name="btnsubmit" value="<?php echo TEXT_CLEAN_INSTALL; ?>" tabindex="3">
<?php } ?>
<?php if ($hasUpgradeErrors && $hasSaneConfigFile && $hasUpdatedConfigFile) { ?>
  <input type="submit" class="zc-full radius button" id="btnsubmit2" name="btnsubmit" value="<?php echo TEXT_CLEAN_INSTALL; ?>" tabindex="4">
<?php } ?>
<?php } ?>
<?php if (!$hasUpdatedConfigFile && $hasSaneConfigFile) { ?>
    <input type="hidden" name="updateConfigure" value="true" >
    <input type="submit" class="zc-admin radius button" id="btnsubmit2" name="btnsubmit" value="<?php echo TEXT_UPDATE_CONFIGURE; ?>" tabindex="4">
<?php } ?>
<?php if ($hasMultipleAdmins) { ?>
  <input type="submit" class="zc-admin radius button right" id="btnsubmit" name="btnsubmit" value="<?php echo TEXT_REFRESH; ?>" autofocus="autofocus" tabindex="5">
<?php } else { ?>
  <?php if ($hasFatalErrors || $hasWarnErrors) { ?>
    <a href="" class="radius button secondary right" ><?php echo TEXT_REFRESH; ?></a>
  <?php } ?>
<?php }?>
<br style="clear:both">
</form>
<script>
$(function()
{
  $(".zc-full").click(function(e){
    var formUrl = "index.php?main_page=system_setup";
    $('#systemCheck').attr('action', formUrl);
    $('#systemCheck').submit();
  });
  $(".zc-upg").click(function(e){
    var formUrl = "index.php?main_page=database_upgrade";
    $('#systemCheck').attr('action', formUrl);
    $('#systemCheck').submit();
  });
  $(".zc-admin").click(function(e){
    var formUrl = "index.php?main_page=index";
    $('#systemCheck').attr('action', formUrl);
    $('#systemCheck').submit();
  });
  $('.hasNoHelpText').click(function(e)
  {
    e.preventDefault();
  })
  $('.hasHelpText').click(function(e)
  {
    var textId = $(this).attr('id');
    $.ajax({
      type: "POST",
       timeout: 100000,
      dataType: "json",
      data: 'id='+textId,
      url: '<?php echo "ajaxGetHelpText.php"; ?>',
       success: function(data) {
         $('#modal-help-title').html(data.title);
         $('#modal-help-content').html(data.text);
         $('#modal-help').foundation('reveal', 'open');
      }
    });
    e.preventDefault();
  })
});
</script>
