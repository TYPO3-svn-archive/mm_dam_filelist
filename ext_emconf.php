<?php

########################################################################
# Extension Manager/Repository config file for ext: "mm_dam_filelist"
#
# Auto generated 19-06-2008 16:38
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'MM DAM - FEFileList',
	'description' => 'Dowload files from DAM,Gallery from DAM, Templatebased layouts,FLEX settings, ZIP files online, statistic about dowloaded files',
	'category' => 'plugin',
	'shy' => 0,
	'dependencies' => 'cms,dam,dam_catedit,mm_bccmsbase',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => 0,
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'tx_dam',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author' => 'Mike Mitterer',
	'author_email' => 'office@bitcon.at',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '1.0.6',
	'_md5_values_when_last_written' => 'a:357:{s:9:"ChangeLog";s:4:"de78";s:24:"Kopie von ext_tables.php";s:4:"8a0d";s:10:"README.txt";s:4:"ee2d";s:18:"README_install.txt";s:4:"d41d";s:21:"ext_conf_template.txt";s:4:"151b";s:12:"ext_icon.gif";s:4:"9adb";s:17:"ext_localconf.php";s:4:"6c0d";s:14:"ext_tables.php";s:4:"a35a";s:14:"ext_tables.sql";s:4:"34c2";s:19:"flexform_ds_pi1.xml";s:4:"64a4";s:20:"locallang_db.php.old";s:4:"a36e";s:16:"locallang_db.xml";s:4:"53f4";s:28:"doc/history_dam_filelist.txt";s:4:"cf97";s:14:"doc/manual.sxw";s:4:"b892";s:22:"doc/realurl_sample.txt";s:4:"dfe7";s:19:"doc/wizard_form.dat";s:4:"dc41";s:20:"doc/wizard_form.html";s:4:"f326";s:19:"pi1/ajax_server.php";s:4:"0b35";s:34:"pi1/class.tx_mmdamfilelist_pi1.php";s:4:"7aa4";s:38:"pi1/class.tx_mmdamfilelist_realurl.php";s:4:"fe02";s:21:"pi1/locallang.php.off";s:4:"85f2";s:17:"pi1/locallang.xml";s:4:"f08b";s:15:"pi1/newfile.php";s:4:"e40e";s:24:"pi1/static/editorcfg.txt";s:4:"aed8";s:20:"pi1/static/setup.txt";s:4:"010c";s:35:"pi1/static/layout/default/setup.txt";s:4:"faf9";s:35:"pi1/static/layout/rohloff/setup.txt";s:4:"df1c";s:35:"pi1/static/layout/address/setup.txt";s:4:"a802";s:35:"pi1/static/layout/gallery/setup.txt";s:4:"2565";s:40:"pi1/res/available_fields_from_tx_dam.txt";s:4:"d3ba";s:26:"pi1/res/cat_tree_view.html";s:4:"fde9";s:27:"pi1/res/list_tree_view.html";s:4:"7229";s:30:"pi1/res/list_view-address.html";s:4:"b712";s:30:"pi1/res/list_view-gallery.html";s:4:"132a";s:30:"pi1/res/list_view-rohloff.html";s:4:"b6d9";s:22:"pi1/res/list_view.html";s:4:"29dc";s:35:"pi1/res/list_view_singel_image.html";s:4:"d5ef";s:28:"pi1/res/list_view_table.html";s:4:"e90a";s:32:"pi1/res/single_view-address.html";s:4:"4155";s:32:"pi1/res/single_view-gallery.html";s:4:"2ae1";s:32:"pi1/res/single_view-rohloff.html";s:4:"1353";s:24:"pi1/res/single_view.html";s:4:"112c";s:40:"pi1/res/single_view_with_all_fields.tmpl";s:4:"9c20";s:23:"pi1/res/css/address.css";s:4:"9c1d";s:20:"pi1/res/css/base.css";s:4:"a305";s:23:"pi1/res/css/buttons.css";s:4:"4f5a";s:27:"pi1/res/css/dam_gallery.css";s:4:"d082";s:23:"pi1/res/css/rohloff.css";s:4:"0ef6";s:26:"pi1/res/javascript/menu.js";s:4:"c7dd";s:32:"pi1/res/javascript/mmdam_ajax.js";s:4:"672d";s:28:"pi1/res/javascript/toggle.js";s:4:"af53";s:24:"pi1/res/images/Thumbs.db";s:4:"12ad";s:26:"pi1/res/images/details.jpg";s:4:"ae2d";s:34:"pi1/res/images/download_normal.jpg";s:4:"9e63";s:31:"pi1/res/images/download_zip.jpg";s:4:"d1aa";s:23:"pi1/res/images/file.psd";s:4:"2240";s:31:"pi1/res/images/file_default.png";s:4:"f3c7";s:27:"pi1/res/images/file_doc.png";s:4:"0070";s:28:"pi1/res/images/file_html.png";s:4:"fe27";s:28:"pi1/res/images/file_jpeg.png";s:4:"4432";s:27:"pi1/res/images/file_jpg.png";s:4:"4432";s:27:"pi1/res/images/file_pdf.png";s:4:"5c95";s:27:"pi1/res/images/file_txt.png";s:4:"e20e";s:27:"pi1/res/images/file_xls.png";s:4:"549f";s:27:"pi1/res/images/file_zip.png";s:4:"7f74";s:25:"pi1/res/images/folder.png";s:4:"44eb";s:34:"pi1/res/images/gallery_details.jpg";s:4:"ec97";s:42:"pi1/res/images/gallery_download_normal.jpg";s:4:"76cd";s:39:"pi1/res/images/gallery_download_zip.jpg";s:4:"e992";s:21:"pi1/res/images/up.png";s:4:"f32d";s:30:"pi1/res/images/up_disabled.png";s:4:"59a2";s:39:"pi1/res/images/default/22x22_as_gif.zip";s:4:"a9aa";s:39:"pi1/res/images/default/22x22_as_png.zip";s:4:"8e06";s:71:"pi1/res/images/default/22x22/navigation/date_mod-orderselector-down.jpg";s:4:"40af";s:69:"pi1/res/images/default/22x22/navigation/date_mod-orderselector-up.jpg";s:4:"ae29";s:48:"pi1/res/images/default/22x22/navigation/down.jpg";s:4:"57ce";s:72:"pi1/res/images/default/22x22/navigation/file_name-orderselector-down.jpg";s:4:"40af";s:70:"pi1/res/images/default/22x22/navigation/file_name-orderselector-up.jpg";s:4:"9571";s:72:"pi1/res/images/default/22x22/navigation/file_size-orderselector-down.jpg";s:4:"40af";s:70:"pi1/res/images/default/22x22/navigation/file_size-orderselector-up.jpg";s:4:"3435";s:67:"pi1/res/images/default/22x22/navigation/kategorie2-modeselector.jpg";s:4:"0ce0";s:61:"pi1/res/images/default/22x22/navigation/list-viewselector.jpg";s:4:"3d7d";s:61:"pi1/res/images/default/22x22/navigation/logo-modeselector.jpg";s:4:"de10";s:68:"pi1/res/images/default/22x22/navigation/title-orderselector-down.jpg";s:4:"40af";s:66:"pi1/res/images/default/22x22/navigation/title-orderselector-up.jpg";s:4:"9571";s:64:"pi1/res/images/default/22x22/navigation/toplist-viewselector.jpg";s:4:"fa22";s:61:"pi1/res/images/default/22x22/navigation/tree-viewselector.jpg";s:4:"cf55";s:75:"pi1/res/images/default/22x22/navigation/tx_dam.title-orderselector-down.jpg";s:4:"40af";s:73:"pi1/res/images/default/22x22/navigation/tx_dam.title-orderselector-up.jpg";s:4:"9571";s:46:"pi1/res/images/default/22x22/navigation/up.jpg";s:4:"5afb";s:46:"pi1/res/images/default/22x22/mimetypes/ac3.gif";s:4:"516d";s:47:"pi1/res/images/default/22x22/mimetypes/aiff.gif";s:4:"3467";s:49:"pi1/res/images/default/22x22/mimetypes/applix.gif";s:4:"4747";s:46:"pi1/res/images/default/22x22/mimetypes/arj.gif";s:4:"396f";s:48:"pi1/res/images/default/22x22/mimetypes/ascii.gif";s:4:"46c4";s:48:"pi1/res/images/default/22x22/mimetypes/audio.gif";s:4:"0698";s:49:"pi1/res/images/default/22x22/mimetypes/binary.gif";s:4:"ea84";s:46:"pi1/res/images/default/22x22/mimetypes/bmp.gif";s:4:"fc91";s:46:"pi1/res/images/default/22x22/mimetypes/bz2.gif";s:4:"705a";s:46:"pi1/res/images/default/22x22/mimetypes/cbz.gif";s:4:"3af2";s:52:"pi1/res/images/default/22x22/mimetypes/cdbo_list.gif";s:4:"92c0";s:50:"pi1/res/images/default/22x22/mimetypes/cdimage.gif";s:4:"22c7";s:46:"pi1/res/images/default/22x22/mimetypes/cdr.gif";s:4:"b95d";s:50:"pi1/res/images/default/22x22/mimetypes/cdtrack.gif";s:4:"92c0";s:51:"pi1/res/images/default/22x22/mimetypes/colorscm.gif";s:4:"0794";s:46:"pi1/res/images/default/22x22/mimetypes/deb.gif";s:4:"4db1";s:46:"pi1/res/images/default/22x22/mimetypes/dia.gif";s:4:"aee3";s:52:"pi1/res/images/default/22x22/mimetypes/documents.gif";s:4:"821f";s:53:"pi1/res/images/default/22x22/mimetypes/documents2.gif";s:4:"7fb4";s:48:"pi1/res/images/default/22x22/mimetypes/empty.gif";s:4:"9788";s:52:"pi1/res/images/default/22x22/mimetypes/encrypted.gif";s:4:"adb1";s:52:"pi1/res/images/default/22x22/mimetypes/exec_wine.gif";s:4:"8687";s:53:"pi1/res/images/default/22x22/mimetypes/exec_wine1.gif";s:4:"cfc7";s:54:"pi1/res/images/default/22x22/mimetypes/file_locked.gif";s:4:"adb1";s:57:"pi1/res/images/default/22x22/mimetypes/file_temporary.gif";s:4:"86a4";s:47:"pi1/res/images/default/22x22/mimetypes/font.gif";s:4:"cb62";s:56:"pi1/res/images/default/22x22/mimetypes/font_truetype.gif";s:4:"cb62";s:46:"pi1/res/images/default/22x22/mimetypes/gif.gif";s:4:"a81d";s:45:"pi1/res/images/default/22x22/mimetypes/gz.gif";s:4:"a5d7";s:47:"pi1/res/images/default/22x22/mimetypes/html.gif";s:4:"1d33";s:46:"pi1/res/images/default/22x22/mimetypes/ief.gif";s:4:"4060";s:48:"pi1/res/images/default/22x22/mimetypes/image.gif";s:4:"b16a";s:49:"pi1/res/images/default/22x22/mimetypes/image2.gif";s:4:"7e37";s:47:"pi1/res/images/default/22x22/mimetypes/info.gif";s:4:"ebae";s:47:"pi1/res/images/default/22x22/mimetypes/jpeg.gif";s:4:"b576";s:46:"pi1/res/images/default/22x22/mimetypes/jpg.gif";s:4:"c8b2";s:46:"pi1/res/images/default/22x22/mimetypes/lha.gif";s:4:"278c";s:46:"pi1/res/images/default/22x22/mimetypes/lhz.gif";s:4:"e75a";s:50:"pi1/res/images/default/22x22/mimetypes/message.gif";s:4:"9c07";s:47:"pi1/res/images/default/22x22/mimetypes/midi.gif";s:4:"3b53";s:56:"pi1/res/images/default/22x22/mimetypes/mime-colorset.gif";s:4:"0794";s:53:"pi1/res/images/default/22x22/mimetypes/mime-empty.gif";s:4:"9788";s:52:"pi1/res/images/default/22x22/mimetypes/mime-help.gif";s:4:"07fb";s:58:"pi1/res/images/default/22x22/mimetypes/mime-postscript.gif";s:4:"25c8";s:53:"pi1/res/images/default/22x22/mimetypes/mime_ascii.gif";s:4:"46c4";s:51:"pi1/res/images/default/22x22/mimetypes/mime_cdr.gif";s:4:"b95d";s:56:"pi1/res/images/default/22x22/mimetypes/mime_colorset.gif";s:4:"0794";s:53:"pi1/res/images/default/22x22/mimetypes/mime_empty.gif";s:4:"9788";s:55:"pi1/res/images/default/22x22/mimetypes/mime_koffice.gif";s:4:"3f9b";s:47:"pi1/res/images/default/22x22/mimetypes/misc.gif";s:4:"9788";s:46:"pi1/res/images/default/22x22/mimetypes/mod.gif";s:4:"4290";s:46:"pi1/res/images/default/22x22/mimetypes/mp3.gif";s:4:"8d86";s:51:"pi1/res/images/default/22x22/mimetypes/msaccess.gif";s:4:"5ef2";s:50:"pi1/res/images/default/22x22/mimetypes/msexcel.gif";s:4:"1085";s:53:"pi1/res/images/default/22x22/mimetypes/mspowerpnt.gif";s:4:"5703";s:49:"pi1/res/images/default/22x22/mimetypes/msword.gif";s:4:"eb26";s:46:"pi1/res/images/default/22x22/mimetypes/par.gif";s:4:"e8c0";s:46:"pi1/res/images/default/22x22/mimetypes/pdf.gif";s:4:"4af1";s:46:"pi1/res/images/default/22x22/mimetypes/php.gif";s:4:"abc6";s:46:"pi1/res/images/default/22x22/mimetypes/pix.gif";s:4:"1448";s:46:"pi1/res/images/default/22x22/mimetypes/png.gif";s:4:"601c";s:45:"pi1/res/images/default/22x22/mimetypes/ps.gif";s:4:"25c8";s:46:"pi1/res/images/default/22x22/mimetypes/psd.gif";s:4:"ad43";s:52:"pi1/res/images/default/22x22/mimetypes/quicktime.gif";s:4:"17ad";s:46:"pi1/res/images/default/22x22/mimetypes/rar.gif";s:4:"784a";s:51:"pi1/res/images/default/22x22/mimetypes/recycled.gif";s:4:"a88d";s:46:"pi1/res/images/default/22x22/mimetypes/rgb.gif";s:4:"0a89";s:46:"pi1/res/images/default/22x22/mimetypes/rpm.gif";s:4:"ba26";s:46:"pi1/res/images/default/22x22/mimetypes/s3m.gif";s:4:"a05f";s:51:"pi1/res/images/default/22x22/mimetypes/schedule.gif";s:4:"e773";s:54:"pi1/res/images/default/22x22/mimetypes/shellscript.gif";s:4:"d604";s:48:"pi1/res/images/default/22x22/mimetypes/sound.gif";s:4:"06f1";s:51:"pi1/res/images/default/22x22/mimetypes/source_c.gif";s:4:"b041";s:53:"pi1/res/images/default/22x22/mimetypes/source_cpp.gif";s:4:"3545";s:51:"pi1/res/images/default/22x22/mimetypes/source_h.gif";s:4:"a2b4";s:54:"pi1/res/images/default/22x22/mimetypes/source_java.gif";s:4:"6293";s:53:"pi1/res/images/default/22x22/mimetypes/source_php.gif";s:4:"abc6";s:52:"pi1/res/images/default/22x22/mimetypes/source_py.gif";s:4:"1354";s:53:"pi1/res/images/default/22x22/mimetypes/source_pyc.gif";s:4:"9802";s:54:"pi1/res/images/default/22x22/mimetypes/spreadsheet.gif";s:4:"8a67";s:46:"pi1/res/images/default/22x22/mimetypes/stm.gif";s:4:"72f0";s:46:"pi1/res/images/default/22x22/mimetypes/svg.gif";s:4:"15bf";s:46:"pi1/res/images/default/22x22/mimetypes/tar.gif";s:4:"6664";s:58:"pi1/res/images/default/22x22/mimetypes/template_source.gif";s:4:"62ab";s:46:"pi1/res/images/default/22x22/mimetypes/tex.gif";s:4:"fa98";s:47:"pi1/res/images/default/22x22/mimetypes/text.gif";s:4:"cdd4";s:46:"pi1/res/images/default/22x22/mimetypes/tga.gif";s:4:"46f5";s:46:"pi1/res/images/default/22x22/mimetypes/tgz.gif";s:4:"4ff4";s:47:"pi1/res/images/default/22x22/mimetypes/tiff.gif";s:4:"ada4";s:46:"pi1/res/images/default/22x22/mimetypes/txt.gif";s:4:"d608";s:47:"pi1/res/images/default/22x22/mimetypes/ulaw.gif";s:4:"7c6d";s:50:"pi1/res/images/default/22x22/mimetypes/unknown.gif";s:4:"9788";s:52:"pi1/res/images/default/22x22/mimetypes/vcalendar.gif";s:4:"6b15";s:48:"pi1/res/images/default/22x22/mimetypes/video.gif";s:4:"17ad";s:50:"pi1/res/images/default/22x22/mimetypes/vmlinuz.gif";s:4:"0692";s:46:"pi1/res/images/default/22x22/mimetypes/voc.gif";s:4:"4c35";s:46:"pi1/res/images/default/22x22/mimetypes/wav.gif";s:4:"33a6";s:46:"pi1/res/images/default/22x22/mimetypes/xcf.gif";s:4:"709a";s:47:"pi1/res/images/default/22x22/mimetypes/xfig.gif";s:4:"536b";s:45:"pi1/res/images/default/22x22/mimetypes/xi.gif";s:4:"ea55";s:45:"pi1/res/images/default/22x22/mimetypes/xm.gif";s:4:"b473";s:46:"pi1/res/images/default/22x22/mimetypes/zip.gif";s:4:"e74b";s:50:"pi1/res/images/default/22x22/filesystem/folder.gif";s:4:"9afe";s:46:"pi1/res/images/default/22x22/filesystem/up.gif";s:4:"4da1";s:55:"pi1/res/images/default/22x22/filesystem/up_disabled.gif";s:4:"8fa4";s:40:"pi1/res/images/default/toggle/closed.gif";s:4:"c598";s:38:"pi1/res/images/default/toggle/open.gif";s:4:"9570";s:74:"pi1/res/images/redonwhite/22x22/navigation/date_mod-orderselector-down.jpg";s:4:"d5d6";s:72:"pi1/res/images/redonwhite/22x22/navigation/date_mod-orderselector-up.jpg";s:4:"c0d3";s:51:"pi1/res/images/redonwhite/22x22/navigation/down.jpg";s:4:"d5d6";s:75:"pi1/res/images/redonwhite/22x22/navigation/file_name-orderselector-down.jpg";s:4:"d5d6";s:73:"pi1/res/images/redonwhite/22x22/navigation/file_name-orderselector-up.jpg";s:4:"1e20";s:75:"pi1/res/images/redonwhite/22x22/navigation/file_size-orderselector-down.jpg";s:4:"d5d6";s:73:"pi1/res/images/redonwhite/22x22/navigation/file_size-orderselector-up.jpg";s:4:"1de7";s:70:"pi1/res/images/redonwhite/22x22/navigation/kategorie2-modeselector.jpg";s:4:"0ce0";s:64:"pi1/res/images/redonwhite/22x22/navigation/list-viewselector.jpg";s:4:"3ef6";s:64:"pi1/res/images/redonwhite/22x22/navigation/logo-modeselector.jpg";s:4:"de10";s:71:"pi1/res/images/redonwhite/22x22/navigation/title-orderselector-down.jpg";s:4:"d5d6";s:69:"pi1/res/images/redonwhite/22x22/navigation/title-orderselector-up.jpg";s:4:"1e20";s:67:"pi1/res/images/redonwhite/22x22/navigation/toplist-viewselector.jpg";s:4:"8c90";s:64:"pi1/res/images/redonwhite/22x22/navigation/tree-viewselector.jpg";s:4:"16d2";s:78:"pi1/res/images/redonwhite/22x22/navigation/tx_dam.title-orderselector-down.jpg";s:4:"d5d6";s:76:"pi1/res/images/redonwhite/22x22/navigation/tx_dam.title-orderselector-up.jpg";s:4:"1e20";s:49:"pi1/res/images/redonwhite/22x22/navigation/up.jpg";s:4:"7ffc";s:29:"pi1/res/images/misc/Thumbs.db";s:4:"27e2";s:35:"pi1/res/images/misc/progressbar.gif";s:4:"677c";s:39:"pi1/res/images/blackbg/22x22_as_gif.zip";s:4:"a9aa";s:39:"pi1/res/images/blackbg/22x22_as_png.zip";s:4:"8e06";s:38:"pi1/res/images/blackbg/22x22/Thumbs.db";s:4:"ef4d";s:71:"pi1/res/images/blackbg/22x22/navigation/date_mod-orderselector-down.jpg";s:4:"5095";s:69:"pi1/res/images/blackbg/22x22/navigation/date_mod-orderselector-up.jpg";s:4:"0ea8";s:48:"pi1/res/images/blackbg/22x22/navigation/down.jpg";s:4:"57ce";s:72:"pi1/res/images/blackbg/22x22/navigation/file_name-orderselector-down.jpg";s:4:"5095";s:70:"pi1/res/images/blackbg/22x22/navigation/file_name-orderselector-up.jpg";s:4:"92b6";s:72:"pi1/res/images/blackbg/22x22/navigation/file_size-orderselector-down.jpg";s:4:"5095";s:70:"pi1/res/images/blackbg/22x22/navigation/file_size-orderselector-up.jpg";s:4:"9032";s:67:"pi1/res/images/blackbg/22x22/navigation/kategorie2-modeselector.jpg";s:4:"0ce0";s:61:"pi1/res/images/blackbg/22x22/navigation/list-viewselector.jpg";s:4:"f0f0";s:61:"pi1/res/images/blackbg/22x22/navigation/logo-modeselector.jpg";s:4:"de10";s:68:"pi1/res/images/blackbg/22x22/navigation/title-orderselector-down.jpg";s:4:"5095";s:66:"pi1/res/images/blackbg/22x22/navigation/title-orderselector-up.jpg";s:4:"92b6";s:64:"pi1/res/images/blackbg/22x22/navigation/toplist-viewselector.jpg";s:4:"d4ba";s:61:"pi1/res/images/blackbg/22x22/navigation/tree-viewselector.jpg";s:4:"1d9b";s:75:"pi1/res/images/blackbg/22x22/navigation/tx_dam.title-orderselector-down.jpg";s:4:"5095";s:73:"pi1/res/images/blackbg/22x22/navigation/tx_dam.title-orderselector-up.jpg";s:4:"92b6";s:46:"pi1/res/images/blackbg/22x22/navigation/up.jpg";s:4:"8d1a";s:46:"pi1/res/images/blackbg/22x22/mimetypes/ac3.gif";s:4:"516d";s:47:"pi1/res/images/blackbg/22x22/mimetypes/aiff.gif";s:4:"3467";s:49:"pi1/res/images/blackbg/22x22/mimetypes/applix.gif";s:4:"4747";s:46:"pi1/res/images/blackbg/22x22/mimetypes/arj.gif";s:4:"396f";s:48:"pi1/res/images/blackbg/22x22/mimetypes/ascii.gif";s:4:"46c4";s:48:"pi1/res/images/blackbg/22x22/mimetypes/audio.gif";s:4:"0698";s:49:"pi1/res/images/blackbg/22x22/mimetypes/binary.gif";s:4:"ea84";s:46:"pi1/res/images/blackbg/22x22/mimetypes/bmp.gif";s:4:"fc91";s:46:"pi1/res/images/blackbg/22x22/mimetypes/bz2.gif";s:4:"705a";s:46:"pi1/res/images/blackbg/22x22/mimetypes/cbz.gif";s:4:"3af2";s:52:"pi1/res/images/blackbg/22x22/mimetypes/cdbo_list.gif";s:4:"92c0";s:50:"pi1/res/images/blackbg/22x22/mimetypes/cdimage.gif";s:4:"22c7";s:46:"pi1/res/images/blackbg/22x22/mimetypes/cdr.gif";s:4:"b95d";s:50:"pi1/res/images/blackbg/22x22/mimetypes/cdtrack.gif";s:4:"92c0";s:51:"pi1/res/images/blackbg/22x22/mimetypes/colorscm.gif";s:4:"0794";s:46:"pi1/res/images/blackbg/22x22/mimetypes/deb.gif";s:4:"4db1";s:46:"pi1/res/images/blackbg/22x22/mimetypes/dia.gif";s:4:"aee3";s:52:"pi1/res/images/blackbg/22x22/mimetypes/documents.gif";s:4:"821f";s:53:"pi1/res/images/blackbg/22x22/mimetypes/documents2.gif";s:4:"7fb4";s:48:"pi1/res/images/blackbg/22x22/mimetypes/empty.gif";s:4:"9788";s:52:"pi1/res/images/blackbg/22x22/mimetypes/encrypted.gif";s:4:"adb1";s:52:"pi1/res/images/blackbg/22x22/mimetypes/exec_wine.gif";s:4:"8687";s:53:"pi1/res/images/blackbg/22x22/mimetypes/exec_wine1.gif";s:4:"cfc7";s:54:"pi1/res/images/blackbg/22x22/mimetypes/file_locked.gif";s:4:"adb1";s:57:"pi1/res/images/blackbg/22x22/mimetypes/file_temporary.gif";s:4:"86a4";s:47:"pi1/res/images/blackbg/22x22/mimetypes/font.gif";s:4:"cb62";s:56:"pi1/res/images/blackbg/22x22/mimetypes/font_truetype.gif";s:4:"cb62";s:46:"pi1/res/images/blackbg/22x22/mimetypes/gif.gif";s:4:"a81d";s:45:"pi1/res/images/blackbg/22x22/mimetypes/gz.gif";s:4:"a5d7";s:47:"pi1/res/images/blackbg/22x22/mimetypes/html.gif";s:4:"1d33";s:46:"pi1/res/images/blackbg/22x22/mimetypes/ief.gif";s:4:"4060";s:48:"pi1/res/images/blackbg/22x22/mimetypes/image.gif";s:4:"b16a";s:49:"pi1/res/images/blackbg/22x22/mimetypes/image2.gif";s:4:"7e37";s:47:"pi1/res/images/blackbg/22x22/mimetypes/info.gif";s:4:"ebae";s:47:"pi1/res/images/blackbg/22x22/mimetypes/jpeg.gif";s:4:"b576";s:46:"pi1/res/images/blackbg/22x22/mimetypes/jpg.gif";s:4:"c8b2";s:46:"pi1/res/images/blackbg/22x22/mimetypes/lha.gif";s:4:"278c";s:46:"pi1/res/images/blackbg/22x22/mimetypes/lhz.gif";s:4:"e75a";s:50:"pi1/res/images/blackbg/22x22/mimetypes/message.gif";s:4:"9c07";s:47:"pi1/res/images/blackbg/22x22/mimetypes/midi.gif";s:4:"3b53";s:56:"pi1/res/images/blackbg/22x22/mimetypes/mime-colorset.gif";s:4:"0794";s:53:"pi1/res/images/blackbg/22x22/mimetypes/mime-empty.gif";s:4:"9788";s:52:"pi1/res/images/blackbg/22x22/mimetypes/mime-help.gif";s:4:"07fb";s:58:"pi1/res/images/blackbg/22x22/mimetypes/mime-postscript.gif";s:4:"25c8";s:53:"pi1/res/images/blackbg/22x22/mimetypes/mime_ascii.gif";s:4:"46c4";s:51:"pi1/res/images/blackbg/22x22/mimetypes/mime_cdr.gif";s:4:"b95d";s:56:"pi1/res/images/blackbg/22x22/mimetypes/mime_colorset.gif";s:4:"0794";s:53:"pi1/res/images/blackbg/22x22/mimetypes/mime_empty.gif";s:4:"9788";s:55:"pi1/res/images/blackbg/22x22/mimetypes/mime_koffice.gif";s:4:"3f9b";s:47:"pi1/res/images/blackbg/22x22/mimetypes/misc.gif";s:4:"9788";s:46:"pi1/res/images/blackbg/22x22/mimetypes/mod.gif";s:4:"4290";s:46:"pi1/res/images/blackbg/22x22/mimetypes/mp3.gif";s:4:"8d86";s:51:"pi1/res/images/blackbg/22x22/mimetypes/msaccess.gif";s:4:"5ef2";s:50:"pi1/res/images/blackbg/22x22/mimetypes/msexcel.gif";s:4:"1085";s:53:"pi1/res/images/blackbg/22x22/mimetypes/mspowerpnt.gif";s:4:"5703";s:49:"pi1/res/images/blackbg/22x22/mimetypes/msword.gif";s:4:"eb26";s:46:"pi1/res/images/blackbg/22x22/mimetypes/par.gif";s:4:"e8c0";s:46:"pi1/res/images/blackbg/22x22/mimetypes/pdf.gif";s:4:"4af1";s:46:"pi1/res/images/blackbg/22x22/mimetypes/php.gif";s:4:"abc6";s:46:"pi1/res/images/blackbg/22x22/mimetypes/pix.gif";s:4:"1448";s:46:"pi1/res/images/blackbg/22x22/mimetypes/png.gif";s:4:"601c";s:45:"pi1/res/images/blackbg/22x22/mimetypes/ps.gif";s:4:"25c8";s:46:"pi1/res/images/blackbg/22x22/mimetypes/psd.gif";s:4:"ad43";s:52:"pi1/res/images/blackbg/22x22/mimetypes/quicktime.gif";s:4:"17ad";s:46:"pi1/res/images/blackbg/22x22/mimetypes/rar.gif";s:4:"784a";s:51:"pi1/res/images/blackbg/22x22/mimetypes/recycled.gif";s:4:"a88d";s:46:"pi1/res/images/blackbg/22x22/mimetypes/rgb.gif";s:4:"0a89";s:46:"pi1/res/images/blackbg/22x22/mimetypes/rpm.gif";s:4:"ba26";s:46:"pi1/res/images/blackbg/22x22/mimetypes/s3m.gif";s:4:"a05f";s:51:"pi1/res/images/blackbg/22x22/mimetypes/schedule.gif";s:4:"e773";s:54:"pi1/res/images/blackbg/22x22/mimetypes/shellscript.gif";s:4:"d604";s:48:"pi1/res/images/blackbg/22x22/mimetypes/sound.gif";s:4:"06f1";s:51:"pi1/res/images/blackbg/22x22/mimetypes/source_c.gif";s:4:"b041";s:53:"pi1/res/images/blackbg/22x22/mimetypes/source_cpp.gif";s:4:"3545";s:51:"pi1/res/images/blackbg/22x22/mimetypes/source_h.gif";s:4:"a2b4";s:54:"pi1/res/images/blackbg/22x22/mimetypes/source_java.gif";s:4:"6293";s:53:"pi1/res/images/blackbg/22x22/mimetypes/source_php.gif";s:4:"abc6";s:52:"pi1/res/images/blackbg/22x22/mimetypes/source_py.gif";s:4:"1354";s:53:"pi1/res/images/blackbg/22x22/mimetypes/source_pyc.gif";s:4:"9802";s:54:"pi1/res/images/blackbg/22x22/mimetypes/spreadsheet.gif";s:4:"8a67";s:46:"pi1/res/images/blackbg/22x22/mimetypes/stm.gif";s:4:"72f0";s:46:"pi1/res/images/blackbg/22x22/mimetypes/svg.gif";s:4:"15bf";s:46:"pi1/res/images/blackbg/22x22/mimetypes/tar.gif";s:4:"6664";s:58:"pi1/res/images/blackbg/22x22/mimetypes/template_source.gif";s:4:"62ab";s:46:"pi1/res/images/blackbg/22x22/mimetypes/tex.gif";s:4:"fa98";s:47:"pi1/res/images/blackbg/22x22/mimetypes/text.gif";s:4:"cdd4";s:46:"pi1/res/images/blackbg/22x22/mimetypes/tga.gif";s:4:"46f5";s:46:"pi1/res/images/blackbg/22x22/mimetypes/tgz.gif";s:4:"4ff4";s:47:"pi1/res/images/blackbg/22x22/mimetypes/tiff.gif";s:4:"ada4";s:46:"pi1/res/images/blackbg/22x22/mimetypes/txt.gif";s:4:"d608";s:47:"pi1/res/images/blackbg/22x22/mimetypes/ulaw.gif";s:4:"7c6d";s:50:"pi1/res/images/blackbg/22x22/mimetypes/unknown.gif";s:4:"9788";s:52:"pi1/res/images/blackbg/22x22/mimetypes/vcalendar.gif";s:4:"6b15";s:48:"pi1/res/images/blackbg/22x22/mimetypes/video.gif";s:4:"17ad";s:50:"pi1/res/images/blackbg/22x22/mimetypes/vmlinuz.gif";s:4:"0692";s:46:"pi1/res/images/blackbg/22x22/mimetypes/voc.gif";s:4:"4c35";s:46:"pi1/res/images/blackbg/22x22/mimetypes/wav.gif";s:4:"33a6";s:46:"pi1/res/images/blackbg/22x22/mimetypes/xcf.gif";s:4:"709a";s:47:"pi1/res/images/blackbg/22x22/mimetypes/xfig.gif";s:4:"536b";s:45:"pi1/res/images/blackbg/22x22/mimetypes/xi.gif";s:4:"ea55";s:45:"pi1/res/images/blackbg/22x22/mimetypes/xm.gif";s:4:"b473";s:46:"pi1/res/images/blackbg/22x22/mimetypes/zip.gif";s:4:"e74b";s:50:"pi1/res/images/blackbg/22x22/filesystem/folder.gif";s:4:"9afe";s:46:"pi1/res/images/blackbg/22x22/filesystem/up.gif";s:4:"4da1";s:55:"pi1/res/images/blackbg/22x22/filesystem/up_disabled.gif";s:4:"8fa4";s:42:"ExtData/AddToYourTemplate/res/menu-hor.css";s:4:"9c19";s:43:"ExtData/AddToYourTemplate/res/menu-vert.css";s:4:"7c83";s:44:"ExtData/AddToYourTemplate/javascript/menu.js";s:4:"4ea6";s:46:"ExtData/AddToYourTemplate/javascript/toggle.js";s:4:"d1b1";s:33:"ExtData/PShop/buttons_gallery.psd";s:4:"f63b";s:26:"ExtData/PShop/calendar.psd";s:4:"a798";s:45:"ExtData/PShop/date_mod-orderselector-down.jpg";s:4:"5501";s:43:"ExtData/PShop/date_mod-orderselector-up.jpg";s:4:"ec73";s:26:"ExtData/PShop/download.psd";s:4:"19bf";s:46:"ExtData/PShop/file_name-orderselector-down.jpg";s:4:"5501";s:44:"ExtData/PShop/file_name-orderselector-up.jpg";s:4:"9ba5";s:46:"ExtData/PShop/file_size-orderselector-down.jpg";s:4:"5501";s:44:"ExtData/PShop/file_size-orderselector-up.jpg";s:4:"9251";s:25:"ExtData/PShop/up_down.psd";s:4:"b1fa";s:35:"ExtData/PShop/up_down_with_icon.psd";s:4:"59b8";s:30:"ExtData/PShop/viewselector.psd";s:4:"2406";}',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'dam' => '',
			'dam_catedit' => '',
			'mm_bccmsbase' => '',
			'php' => '3.0.0-0.0.0',
			'typo3' => '3.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
);

?>