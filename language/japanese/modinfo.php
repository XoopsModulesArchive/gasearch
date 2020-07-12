<?php
// $Id: modinfo.php,v 1.2 2007/10/19 11:10:31 ohwada Exp $

// 2007-10-17 K.OHWADA
// change constant name, because the number of characters is exceeded.

//=========================================================
// Google Ajax Search Module
// 2007-06-23 K.OHWADA
// EUC-JP ͭ����������
//=========================================================

// module name
define('_MI_GASEARCH_NAME','Google Ajax ����');
define('_MI_GASEARCH_DESC','Google Ajax API �����Ѥ��Ƹ�������');

// module config
define('_MI_GASEARCH_API_KEY','Google API Key');
define('_MI_GASEARCH_API_KEY_DESC', 'Google Ajax ���������Ѥ������ <br /> <a href="http://code.google.com/apis/ajaxsearch/signup.html" target="_blank">Sign up for the Google AJAX Search API</a> <br /> �ˤ� <br /> API key ��������Ƥ�������<br /><br />�ѥ�᡼���ξܺ٤ϲ���������������<br /><a href="http://code.google.com/apis/ajaxsearch/documentation/reference.html" target="_blank">Google AJAX Search API Class Reference</a>');
define('_MI_GASEARCH_USE_SITE_SEARCH',  '����Υ����Ȥ򸡺�����');
define('_MI_GASEARCH_USE_WEB_SEARCH',   'WEB�򸡺�����');
define('_MI_GASEARCH_USE_BLOG_SEARCH',  '�֥��򸡺�����');
define('_MI_GASEARCH_USE_NEWS_SEARCH',  '�˥塼���򸡺�����');
define('_MI_GASEARCH_USE_BOOK_SEARCH',  '���Ҥ򸡺�����');
define('_MI_GASEARCH_USE_VIDEO_SEARCH', '�ӥǥ��򸡺�����');
define('_MI_GASEARCH_USE_LOCAL_SEARCH', '�ϰ�򸡺�����');
define('_MI_GASEARCH_KEYWORD','�����������');
define('_MI_GASEARCH_KEYWORD_DSC','GSearchControl - execute');
define('_MI_GASEARCH_CENTER','[�ϰ踡��] �濴��');
define('_MI_GASEARCH_CENTER_DSC','GlocalSearch - setCenterPoint');
define('_MI_GASEARCH_SITE_LABEL', '[�����ȸ���] �����ȥ�');
define('_MI_GASEARCH_SITE_LABEL_DSC', 'GSearchControl - setUserDefinedLabel');
define('_MI_GASEARCH_SITE_SUFFIX','[�����ȸ���] ������');
define('_MI_GASEARCH_SITE_SUFFIX_DSC','GSearchControl - setUserDefinedClassSuffix');
define('_MI_GASEARCH_RESTRICTION','[�����ȸ���] URL');
define('_MI_GASEARCH_RESTRICTION_DSC','GwebSearch - setSiteRestriction');
define('_MI_GASEARCH_DRAW_MODE','ɽ������');
define('_MI_GASEARCH_DRAW_MODE_DSC','GdrawOptions - setDrawMode');
define('_MI_GASEARCH_DRAW_MODE_LINEAR','�ķ���: Linear');
define('_MI_GASEARCH_DRAW_MODE_TABBED','���ַ���: Tabbed');

?>