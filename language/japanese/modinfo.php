<?php
// $Id: modinfo.php,v 1.2 2007/10/19 11:10:31 ohwada Exp $

// 2007-10-17 K.OHWADA
// change constant name, because the number of characters is exceeded.

//=========================================================
// Google Ajax Search Module
// 2007-06-23 K.OHWADA
// EUC-JP 有朋自遠方来
//=========================================================

// module name
define('_MI_GASEARCH_NAME','Google Ajax 検索');
define('_MI_GASEARCH_DESC','Google Ajax API を利用して検索する');

// module config
define('_MI_GASEARCH_API_KEY','Google API Key');
define('_MI_GASEARCH_API_KEY_DESC', 'Google Ajax 検索を利用する場合は <br /> <a href="http://code.google.com/apis/ajaxsearch/signup.html" target="_blank">Sign up for the Google AJAX Search API</a> <br /> にて <br /> API key を取得してください<br /><br />パラメータの詳細は下記をご覧ください<br /><a href="http://code.google.com/apis/ajaxsearch/documentation/reference.html" target="_blank">Google AJAX Search API Class Reference</a>');
define('_MI_GASEARCH_USE_SITE_SEARCH',  '特定のサイトを検索する');
define('_MI_GASEARCH_USE_WEB_SEARCH',   'WEBを検索する');
define('_MI_GASEARCH_USE_BLOG_SEARCH',  'ブログを検索する');
define('_MI_GASEARCH_USE_NEWS_SEARCH',  'ニュースを検索する');
define('_MI_GASEARCH_USE_BOOK_SEARCH',  '書籍を検索する');
define('_MI_GASEARCH_USE_VIDEO_SEARCH', 'ビデオを検索する');
define('_MI_GASEARCH_USE_LOCAL_SEARCH', '地域を検索する');
define('_MI_GASEARCH_KEYWORD','検索キーワード');
define('_MI_GASEARCH_KEYWORD_DSC','GSearchControl - execute');
define('_MI_GASEARCH_CENTER','[地域検索] 中心地');
define('_MI_GASEARCH_CENTER_DSC','GlocalSearch - setCenterPoint');
define('_MI_GASEARCH_SITE_LABEL', '[サイト検索] タイトル');
define('_MI_GASEARCH_SITE_LABEL_DSC', 'GSearchControl - setUserDefinedLabel');
define('_MI_GASEARCH_SITE_SUFFIX','[サイト検索] 接尾語');
define('_MI_GASEARCH_SITE_SUFFIX_DSC','GSearchControl - setUserDefinedClassSuffix');
define('_MI_GASEARCH_RESTRICTION','[サイト検索] URL');
define('_MI_GASEARCH_RESTRICTION_DSC','GwebSearch - setSiteRestriction');
define('_MI_GASEARCH_DRAW_MODE','表示形式');
define('_MI_GASEARCH_DRAW_MODE_DSC','GdrawOptions - setDrawMode');
define('_MI_GASEARCH_DRAW_MODE_LINEAR','縦形式: Linear');
define('_MI_GASEARCH_DRAW_MODE_TABBED','タブ形式: Tabbed');

?>