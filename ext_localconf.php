<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

  ## Extending TypoScript from static template uid=43 to set up userdefined tag:
t3lib_extMgm::addTypoScript($_EXTKEY,'editorcfg','
	tt_content.CSS_editor.ch.tx_mmdamfilelist_pi1 = < plugin.tx_mmdamfilelist_pi1.CSS_editor
',43);

// Lolevel-init can be done with eID_include
$TYPO3_CONF_VARS['FE']['eID_include']['tx_mm_bccmsbase_zip'] = 'EXT:mm_bccmsbase/phphelper/zip.php';


t3lib_extMgm::addPItoST43($_EXTKEY,'pi1/class.tx_mmdamfilelist_pi1.php','_pi1','list_type',1);
?>