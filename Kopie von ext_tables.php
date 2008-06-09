<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';
$TCA["tt_content"]["types"]["list"]["subtypes_addlist"][$_EXTKEY."_pi1"]="tx_mmdamfilelist_mm_dam_category;;;;1-1-1";


t3lib_extMgm::addPlugin(Array('LLL:EXT:mm_dam_filelist/locallang_db.php:tt_content.list_type_pi1', $_EXTKEY.'_pi1'),'list_type');


t3lib_extMgm::addStaticFile($_EXTKEY,"pi1/static/","MM DAM FE FileList");

$tempColumns = Array (
	"tx_mmdamfilelist_mm_dam_category" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:mm_dam_filelist/locallang_db.php:tt_content.tx_mmdamfilelist_mm_dam_category",		
		"config" => Array (
			"type" => "select",	
			"foreign_table" => "tx_dam_cat",	
			"foreign_table_where" => "ORDER BY tx_dam_cat.uid",	
			"size" => 5,	
			"minitems" => 0,
			"maxitems" => 99,	
			"wizards" => Array(
				"_PADDING" => 2,
				"_VERTICAL" => 1,
				"add" => Array(
					"type" => "script",
					"title" => "Create new record",
					"icon" => "add.gif",
					"params" => Array(
						"table"=>"tx_dam_cat",
						"pid" => "###CURRENT_PID###",
						"setValue" => "prepend"
					),
					"script" => "wizard_add.php",
				),
				"list" => Array(
					"type" => "script",
					"title" => "List",
					"icon" => "list.gif",
					"params" => Array(
						"table"=>"tx_dam_cat",
						"pid" => "###CURRENT_PID###",
					),
					"script" => "wizard_list.php",
				),
			),
		)
	),
);


t3lib_div::loadTCA("tt_content");
$TCA["tt_content"]["types"]["list"]["subtypes_excludelist"][$_EXTKEY."_pi1"]="layout,select_key";
$TCA["tt_content"]["types"]["list"]["subtypes_addlist"][$_EXTKEY."_pi1"]="tx_mmdamfilelist_mm_dam_category;;;;1-1-1";

//t3lib_extMgm::addTCAcolumns("tt_content",$tempColumns,1);
//t3lib_extMgm::addToAllTCAtypes("tt_content","tx_mmdamfilelist_mm_dam_category;;;;1-1-1");
?>