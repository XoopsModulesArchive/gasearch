<?php
// $Id: index.php,v 1.1.1.1 2007/06/27 02:44:53 ohwada Exp $

//=========================================================
// Google Ajax Search Module
// 2007-06-23 K.OHWADA
//=========================================================

include '../../mainfile.php';

// start
$xoopsOption['template_main'] = 'gasearch_index.html';
include XOOPS_ROOT_PATH.'/header.php';

$xoopsTpl->assign('module_name',     $xoopsModule->getVar('name') );
$xoopsTpl->assign('is_module_admin', $xoopsUserIsAdmin );

$xoopsTpl->assign('ga_api_key',             $xoopsModuleConfig['api_key'] );
$xoopsTpl->assign('ga_use_site_search',     $xoopsModuleConfig['use_site_search'] );
$xoopsTpl->assign('ga_use_web_search',      $xoopsModuleConfig['use_web_search'] );
$xoopsTpl->assign('ga_use_blog_search',     $xoopsModuleConfig['use_blog_search'] );
$xoopsTpl->assign('ga_use_news_search',     $xoopsModuleConfig['use_news_search'] );
$xoopsTpl->assign('ga_use_book_search',     $xoopsModuleConfig['use_book_search'] );
$xoopsTpl->assign('ga_use_video_search',    $xoopsModuleConfig['use_video_search'] );
$xoopsTpl->assign('ga_use_local_search',    $xoopsModuleConfig['use_local_search'] );
$xoopsTpl->assign('ga_draw_mode',           $xoopsModuleConfig['draw_mode'] );
$xoopsTpl->assign('ga_keyword',             $xoopsModuleConfig['keyword']);
$xoopsTpl->assign('ga_local_center_point',  $xoopsModuleConfig['local_center_point']);
$xoopsTpl->assign('ga_site_label',          $xoopsModuleConfig['site_label'] );
$xoopsTpl->assign('ga_site_suffix',         $xoopsModuleConfig['site_suffix'] );
$xoopsTpl->assign('ga_site_restriction',    $xoopsModuleConfig['site_restriction'] );

include XOOPS_ROOT_PATH.'/footer.php';
exit();

?>