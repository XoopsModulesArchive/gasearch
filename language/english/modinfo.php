<?php
// $Id: modinfo.php,v 1.2 2007/10/19 11:10:31 ohwada Exp $

// 2007-10-17 K.OHWADA
// change constant name, because the number of characters is exceeded.

//=========================================================
// Google Ajax Search Module
// 2007-06-23 K.OHWADA
//=========================================================

// module name
define('_MI_GASEARCH_NAME','Google Ajax Search');
define('_MI_GASEARCH_DESC','Search using Google Ajax API');

// module config
define('_MI_GASEARCH_API_KEY','Google API Key');
define('_MI_GASEARCH_API_KEY_DESC', 'Get the API key on <br/> <a href="http://code.google.com/apis/ajaxsearch/signup.html" target="_blank">Sign up for the Google AJAX Search API</a> <br />when you use Google Ajax Search <br /><br />For the details of the parameter, see the following <br /><a href="http://code.google.com/apis/ajaxsearch/documentation/reference.html" target="_blank">Google AJAX Search API Class Reference</a>');
define('_MI_GASEARCH_USE_SITE_SEARCH',  'Use Restric Site Search');
define('_MI_GASEARCH_USE_WEB_SEARCH',   'Use Web Search');
define('_MI_GASEARCH_USE_BLOG_SEARCH',  'Use Blog Search');
define('_MI_GASEARCH_USE_NEWS_SEARCH',  'Use News Search');
define('_MI_GASEARCH_USE_BOOK_SEARCH',  'Use Book Search');
define('_MI_GASEARCH_USE_VIDEO_SEARCH', 'Use Video Search');
define('_MI_GASEARCH_USE_LOCAL_SEARCH', 'Use Local Search');
define('_MI_GASEARCH_KEYWORD','Search Keyword');
define('_MI_GASEARCH_KEYWORD_DSC','GSearchControl - execute');
define('_MI_GASEARCH_CENTER','[Local Search] Center Point');
define('_MI_GASEARCH_CENTER_DSC','GlocalSearch - setCenterPoint');
define('_MI_GASEARCH_SITE_LABEL', '[Restric Site Search] Label');
define('_MI_GASEARCH_SITE_LABEL_DSC', 'GSearchControl - setUserDefinedLabel');
define('_MI_GASEARCH_SITE_SUFFIX','[Restric Site Search] Class Suffix');
define('_MI_GASEARCH_SITE_SUFFIX_DSC','GSearchControl - setUserDefinedClassSuffix');
define('_MI_GASEARCH_RESTRICTION','[Restric Site Search] Restrict URL');
define('_MI_GASEARCH_RESTRICTION_DSC','GwebSearch - setSiteRestriction');
define('_MI_GASEARCH_DRAW_MODE','Draw Mode');
define('_MI_GASEARCH_DRAW_MODE_DSC','GdrawOptions - setDrawMode');
define('_MI_GASEARCH_DRAW_MODE_LINEAR','Linear');
define('_MI_GASEARCH_DRAW_MODE_TABBED','Tabbed');

?>