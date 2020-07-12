<?php
// $Id: xoops_version.php,v 1.2 2007/10/19 11:10:31 ohwada Exp $


// 2007-10-17 K.OHWADA
// change constant name, because the number of characters is exceeded.

//=========================================================
// Google Ajax Search Module
// 2007-06-23 K.OHWADA
//=========================================================

$modversion['version']     = 0.11;
$modversion['name']        = _MI_GASEARCH_NAME;
$modversion['description'] = _MI_GASEARCH_DESC;
$modversion['credits']  = '';
$modversion['author']   = 'K.OHWADA';
$modversion['help']     = '';
$modversion['license']  = 'GPL see LICENSE';
$modversion['official'] = 1;
$modversion['image']    = 'images/gasearch_logo.png';
$modversion['dirname']  = 'gasearch';

//Admin things
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][1]['file'] = 'gasearch_index.html';
$modversion['templates'][1]['description'] = '';

// Config Settings (only for modules that need config settings generated automatically)
$modversion['config'][1]['name']        = 'api_key';
$modversion['config'][1]['title']       = '_MI_GASEARCH_API_KEY';
$modversion['config'][1]['description'] = '_MI_GASEARCH_API_KEY_DSC';
$modversion['config'][1]['formtype']    = 'textarea';
$modversion['config'][1]['valuetype']   = 'text';
$modversion['config'][1]['default']     = '';

$modversion['config'][2]['name']        = 'keyword';
$modversion['config'][2]['title']       = '_MI_GASEARCH_KEYWORD';
$modversion['config'][2]['description'] = '_MI_GASEARCH_KEYWORD_DSC';
$modversion['config'][2]['formtype']    = 'text';
$modversion['config'][2]['valuetype']   = 'text';
$modversion['config'][2]['default']     = 'xoops';

$modversion['config'][3]['name']        = 'use_site_search';
$modversion['config'][3]['title']       = '_MI_GASEARCH_USE_SITE_SEARCH';
$modversion['config'][3]['description'] = '';
$modversion['config'][3]['formtype']    = 'yesno';
$modversion['config'][3]['valuetype']   = 'int';
$modversion['config'][3]['default']     = 1;

$modversion['config'][4]['name']        = 'site_label';
$modversion['config'][4]['title']       = '_MI_GASEARCH_SITE_LABEL';
$modversion['config'][4]['description'] = '_MI_GASEARCH_SITE_LABEL_DSC';
$modversion['config'][4]['formtype']    = 'text';
$modversion['config'][4]['valuetype']   = 'text';
$modversion['config'][4]['default']     = 'This Site';

$modversion['config'][5]['name']        = 'site_suffix';
$modversion['config'][5]['title']       = '_MI_GASEARCH_SITE_SUFFIX';
$modversion['config'][5]['description'] = '_MI_GASEARCH_SITE_SUFFIX_DSC';
$modversion['config'][5]['formtype']    = 'text';
$modversion['config'][5]['valuetype']   = 'text';
$modversion['config'][5]['default']     = 'siteSearch';

$modversion['config'][6]['name']        = 'site_restriction';
$modversion['config'][6]['title']       = '_MI_GASEARCH_RESTRICTION';
$modversion['config'][6]['description'] = '_MI_GASEARCH_RESTRICTION_DSC';
$modversion['config'][6]['formtype']    = 'text';
$modversion['config'][6]['valuetype']   = 'text';
$modversion['config'][6]['default']     = XOOPS_URL;

$modversion['config'][7]['name']        = 'use_web_search';
$modversion['config'][7]['title']       = '_MI_GASEARCH_USE_WEB_SEARCH';
$modversion['config'][7]['description'] = '';
$modversion['config'][7]['formtype']    = 'yesno';
$modversion['config'][7]['valuetype']   = 'int';
$modversion['config'][7]['default']     = 1;

$modversion['config'][8]['name']        = 'use_blog_search';
$modversion['config'][8]['title']       = '_MI_GASEARCH_USE_BLOG_SEARCH';
$modversion['config'][8]['description'] = '';
$modversion['config'][8]['formtype']    = 'yesno';
$modversion['config'][8]['valuetype']   = 'int';
$modversion['config'][8]['default']     = 1;

$modversion['config'][9]['name']        = 'use_news_search';
$modversion['config'][9]['title']       = '_MI_GASEARCH_USE_NEWS_SEARCH';
$modversion['config'][9]['description'] = '';
$modversion['config'][9]['formtype']    = 'yesno';
$modversion['config'][9]['valuetype']   = 'int';
$modversion['config'][9]['default']     = 1;

$modversion['config'][10]['name']        = 'use_book_search';
$modversion['config'][10]['title']       = '_MI_GASEARCH_USE_BOOK_SEARCH';
$modversion['config'][10]['description'] = '';
$modversion['config'][10]['formtype']    = 'yesno';
$modversion['config'][10]['valuetype']   = 'int';
$modversion['config'][10]['default']     = 1;

$modversion['config'][11]['name']        = 'use_video_search';
$modversion['config'][11]['title']       = '_MI_GASEARCH_USE_VIDEO_SEARCH';
$modversion['config'][11]['description'] = '';
$modversion['config'][11]['formtype']    = 'yesno';
$modversion['config'][11]['valuetype']   = 'int';
$modversion['config'][11]['default']     = 1;

$modversion['config'][12]['name']        = 'use_local_search';
$modversion['config'][12]['title']       = '_MI_GASEARCH_USE_LOCAL_SEARCH';
$modversion['config'][12]['description'] = '';
$modversion['config'][12]['formtype']    = 'yesno';
$modversion['config'][12]['valuetype']   = 'int';
$modversion['config'][12]['default']     = 1;

$modversion['config'][13]['name']        = 'local_center_point';
$modversion['config'][13]['title']       = '_MI_GASEARCH_CENTER';
$modversion['config'][13]['description'] = '_MI_GASEARCH_CENTER_DSC';
$modversion['config'][13]['formtype']    = 'text';
$modversion['config'][13]['valuetype']   = 'text';
$modversion['config'][13]['default']     = 'New York, NY';

$modversion['config'][14]['name']        = 'draw_mode';
$modversion['config'][14]['title']       = '_MI_GASEARCH_DRAW_MODE';
$modversion['config'][14]['description'] = '_MI_GASEARCH_DRAW_MODE_DSC';
$modversion['config'][14]['formtype']    = 'select';
$modversion['config'][14]['valuetype']   = 'text';
$modversion['config'][14]['default']     = 'linear';
$modversion['config'][14]['options']     = array(
	'_MI_GASEARCH_DRAW_MODE_LINEAR' => 'linear',
	'_MI_GASEARCH_DRAW_MODE_TABBED' => 'tabbed',
);

?>