<?php
# This file was automatically generated by the MediaWiki 1.27.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if (!defined('MEDIAWIKI')) {
    exit;
}

require_once "/opt/femiwiki/LocalSettingsSecure.php";

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "페미위키";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgArticlePath = "/w/$1";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "PROTOCOL://HOST";
$wgCanonicalServer = "PROTOCOL://HOST";
$wgEnableCanonicalServerLink = true;

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

$wgStyleVersion = '20170805_0';
$wgResourceLoaderMaxage = array(
    'versioned' => array(
        // Squid/Varnish but also any other public proxy cache between the client and MediaWiki
        'server' => 90 * 24 * 60 * 60, // 90 days
        // On the client side (e.g. in the browser cache).
        'client' => 90 * 24 * 60 * 60, // 90 days
    ),
    'unversioned' => array(
        'server' => 3 * 60, // 3 mins
        'client' => 3 * 60, // 3 mins
    ),
);

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/skins/Femiwiki/images/logo-1200-630.png";

## UPO means: this is also a user preference option
$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "admin@femiwiki.com";
$wgPasswordSender = "admin@femiwiki.com";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

# Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "femiwiki";
$wgDBuser = "root";
$wgDBpassword = "root";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED; # optional
$wgMessageCacheType = CACHE_MEMCACHED; # optional
$wgMemCachedServers = array( "127.0.0.1:11211" );
$wgSessionsInObjectCache = true; # optional
$wgSessionCacheType = CACHE_MEMCACHED; # optional

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgCacheDirectory = "/opt/femiwiki/cache";
$wgUseFileCache = true;

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "ko";
$wgLocaltimezone = "Asia/Seoul";
date_default_timezone_set($wgLocaltimezone);
$wgDefaultUserOptions['timecorrection'] = 9;

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "femiwiki";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin('Vector');
wfLoadSkin('Femiwiki');

# End of automatically generated settings.
# Add more configuration options below.

# Namespace settings
## BBS
define("NS_BBS", 3906);
define("NS_BBS_TALK", 3907);
$wgExtraNamespaces[NS_BBS] = "게시판";
$wgExtraNamespaces[NS_BBS_TALK] = "게시판토론";

## BBS (Legacy)
define("NS_BBSFREE", 3902);
define("NS_BBSFREE_TALK", 3903);
$wgExtraNamespaces[NS_BBSFREE] = "자유게시판";
$wgExtraNamespaces[NS_BBSFREE_TALK] = "자유게시판토론";
define("NS_BBSINTRO", 3904);
define("NS_BBSINTRO_TALK", 3905);
$wgExtraNamespaces[NS_BBSINTRO] = "가입인사게시판";
$wgExtraNamespaces[NS_BBSINTRO_TALK] = "가입인사게시판토론";

## Misc. ns settings
$wgNamespacesWithSubpages[NS_TEMPLATE] = true;

# Permission
$wgGroupPermissions['*']['createaccount'] = true;
$wgGroupPermissions['bureaucrat']['usermerge'] = true;
$wgGroupPermissions['bureaucrat']['renameuser'] = true;
$wgGroupPermissions['sysop']['deletelogentry'] = true;
$wgGroupPermissions['sysop']['deleterevision'] = true;

## Prevent anonymous users from edit pages
$wgGroupPermissions['*']['edit'] = false;

## Allow registered users to edit pages
$wgGroupPermissions['user']['edit'] = true;
$wgGroupPermissions['seeder']['edit'] = true;
$wgGroupPermissions['bureaucrat']['edit'] = true;

## Add `restricted-sysop` group
$wgGroupPermissions['restricted-sysop'] = $wgGroupPermissions['sysop'];
$wgGroupPermissions['restricted-sysop']['apihighlimits'] = false;
$wgGroupPermissions['restricted-sysop']['deletelogentry'] = false;
$wgGroupPermissions['restricted-sysop']['deleterevision'] = false;
$wgGroupPermissions['restricted-sysop']['editinterface'] = false;
$wgGroupPermissions['restricted-sysop']['editusercss'] = false;
$wgGroupPermissions['restricted-sysop']['edituserjs'] = false;
$wgGroupPermissions['restricted-sysop']['managechangetags'] = false;
$wgGroupPermissions['restricted-sysop']['move-rootuserpages'] = false;
$wgGroupPermissions['restricted-sysop']['unblockself'] = false;

## But only seeders can edit major namespaces
//$wgNamespaceProtection[NS_MAIN] = array('edit-main');
//$wgNamespaceProtection[NS_CATEGORY] = array('edit-main');
//$wgNamespaceProtection[NS_HELP] = array('edit-main');
//$wgNamespaceProtection[NS_PROJECT] = array('edit-main');
//$wgNamespaceProtection[NS_TEMPLATE] = array('edit-main');
//$wgNamespaceProtection[NS_BBSFREE] = array('edit-main');
//$wgGroupPermissions['seeder']['edit-main'] = true;
//$wgGroupPermissions['bot']['edit-main'] = true;
//$wgGroupPermissions['bureaucrat']['edit-main'] = true;
//$wgGroupPermissions['sysop']['edit-main'] = true;

# Show numbers on headings
$wgDefaultUserOptions['numberheadings'] = 1;

# Allow display titles not only to titles that normalize to the same canonical DB key as the real page title.
$wgRestrictDisplayTitle = false;

# Open external links in new tab
# $wgExternalLinkTarget = '_blank';
# Implemented using JS in order to open links starts with https://femiwiki.com on the current window.

# Copyright
$wgRightsPage = "페미위키:저작권";
$wgRightsUrl = "https://creativecommons.org/licenses/by-sa/4.0/deed.ko";
$wgRightsText = "크리에이티브 커먼즈 저작자표시-동일조건변경허락 4.0 국제 라이선스";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-sa.png";

# User CSS and JS
$wgAllowUserCss = true;
$wgAllowUserJs = true;

# Allow external image link
$wgAllowExternalImages = true;
$wgAllowImageTag = true;

# Plugins
## ParserFunction
wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

## VisualEditor
require_once "$IP/extensions/VisualEditor/VisualEditor.php";
$wgVisualEditorAvailableNamespaces = array(
    NS_SPECIAL => true,
    NS_MAIN => true,
    NS_TALK => true,
    NS_USER => true,
    NS_USER_TALK => true,
    NS_PROJECT => true,
    NS_PROJECT_TALK => true,
    NS_HELP => true,
    NS_HELP_TALK => true,
    "_merge_strategy" => "array_plus",
);

require_once "$IP/extensions/TemplateData/TemplateData.php";

$wgDefaultUserOptions['visualeditor-enable'] = 1;
$wgHiddenPrefs[] = 'visualeditor-enable';
$wgHiddenPrefs[] = 'gender';
$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;
$wgVirtualRestConfig['modules']['parsoid'] = array(
    'url' => 'http://PARSOID:8142',
    'domain' => 'HOST',
    'prefix' => 'HOST'
);
$wgSessionsInObjectCache = true;
$wgVirtualRestConfig['modules']['parsoid']['forwardCookies'] = true;
$wgVisualEditorSupportedSkins[] = 'femiwiki';

$wgNamespaceAliases = array(
        '도' => NS_HELP,
        '페' => NS_PROJECT
    );

## Echo
require_once "$IP/extensions/Echo/Echo.php";

## Thanks
wfLoadExtension('Thanks');

## Scribunto
require_once "$IP/extensions/Scribunto/Scribunto.php";
$wgScribuntoDefaultEngine = 'luastandalone';

## Realnams
require_once("$IP/extensions/Realnames/Realnames.php");
$wgRealnamesLinkStyle = "femiwiki";

## Flow
require_once "$IP/extensions/Flow/Flow.php";
$wgFlowEditorList = array( 'visualeditor', 'none' );
$wgFlowContentFormat = 'html';
$wgNamespaceContentModels[NS_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_USER_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_PROJECT_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_FILE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_MEDIAWIKI_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_TEMPLATE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_HELP_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_CATEGORY_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_MODULE_TALK] = 'flow-board';
$wgNamespaceContentModels[NS_BBS] = 'flow-board';
$wgNamespaceContentModels[NS_BBS_TALK] = 'flow-board';

## CategoryTree
require_once "$IP/extensions/CategoryTree/CategoryTree.php";

## Cite
wfLoadExtension('Cite');

## CodeEditor
wfLoadExtension('CodeEditor');

## WikiEditor
wfLoadExtension('WikiEditor');
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;
$wgDefaultUserOptions['wikieditor-publish'] = 1;

## AbuseFilter
wfLoadExtension( 'AbuseFilter' );
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['*']['abusefilter-log-detail'] = true;
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;

## UserMerge
wfLoadExtension('UserMerge');

## Renameuser
wfLoadExtension( 'Renameuser' );

## EmbedVideo
wfLoadExtension('EmbedVideo');

## Description2
require_once "$IP/extensions/Description2/Description2.php";

## OpenGraphMeta
require_once( "$IP/extensions/OpenGraphMeta/OpenGraphMeta.php" );

## FacetedCategory
wfLoadExtension( 'FacetedCategory' );

## ExtendedSpecialPagesForFemiwiki --it needs the CategoryTree
wfLoadExtension( 'ExtendedSpecialPagesForFemiwiki' );
$wgSpecialPages['Uncategorizedcategories'] = [SpecialUncategorizedCategoryTree::class];
$wgSpecialPages['Whatlinkshere'] = [SpecialOrderedWhatlinkshere::class];

## IntersectionSearch
wfLoadExtension( 'CategoryIntersectionSearch' );

## Prevent Search for some namespaces
$wgNamespaceRobotPolicies = array(
    NS_TALK => 'noindex,nofollow',
    NS_USER_TALK => 'noindex,nofollow',
    NS_PROJECT_TALK => 'noindex,nofollow',
);

## SimpleMathJax
require_once "$IP/extensions/SimpleMathJax/SimpleMathJax.php";

## HTMLTags
require_once "$IP/extensions/HTMLTags/HTMLTags.php";
$wgHTMLTagsAttributes['a'] = array( 'href', 'class', 'itemprop' );
$wgHTMLTagsAttributes['link'] = array('href', 'itemprop');
$wgHTMLTagsAttributes['meta'] = array('content', 'itemprop');
$wgHTMLTagsAttributes['iframe'] = array('src', 'class', 'style');

# Misc.
$wgShowExceptionDetails = ('HOST' != 'femiwiki.com');
$wgDebugToolbar = ('HOST' != 'femiwiki.com');

