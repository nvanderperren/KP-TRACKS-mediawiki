<?php
# This file was automatically generated by the MediaWiki 1.35.0-alpha
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
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Include platform/distribution defaults
require_once "$IP/includes/PlatformSettings.php";

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "KP TRACKS"; # title of website

# The name of the meta namespace (also known as the project namespace), 
# used for pages regarding the wiki itself. 
$wgMetaNamespace = "Project";  

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://localhost:8080";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/logo.svg";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@localhost";
$wgPasswordSender = "apache@localhost";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings  -- according to the database type
$wgDBtype = "mysql";
$wgDBserver = "";
$wgDBname = "my_wiki";
$wgDBuser = "";
$wgDBpassword = "";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## User rights https://www.mediawiki.org/wiki/Manual:User_rights
# $wgGroupPermissions can be used to control 
## permissions for creating and editing pages for your different user groups
## In this array, custom permission levels can be created, 
## and permission levels for the different user groups can be set.

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;

$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

## Allowed File types
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'doc',
    'xls', 'mpp', 'pdf', 'ppt', 'tiff', 'bmp', 'docx', 'xlsx',
    'pptx', 'ps', 'odt', 'ods', 'odp', 'odg'
);

## Enable upload by copy of URL
$wgGroupPermissions['autoconfirmed']['upload_by_url'] = true;
$wgAllowCopyUploads = true;
$wgCopyUploadsFromSpecialUpload = true;

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "nl";

$wgSecretKey = "secretkey";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "upgradekey";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-sa/3.0/";
$wgRightsText = ""; # A text explaining the RightsPage
$wgRightsIcon = "$wgScriptPath/resources/assets/licenses/cc-by-sa.png";

## Footer
$wgFooterIcons = [
	"copyright" => [
		"copyright" => [], // placeholder for the built in copyright icon
	],
	"poweredby" => [
		"meemoo" => [
			"src" => "$wgResourceBasePath/resources/assets/meemoologo.png",
			"url" => "https://packed.be",
			"alt" => "Powered by meemoo",
			"width" => "52"
		],
		"mediawiki" => [
			// Defaults to point at
			// "$wgResourceBasePath/resources/assets/poweredby_mediawiki_88x31.png"
			// plus srcset for 1.5x, 2x resolution variants.
			"src" => null,
			"url" => "https://www.mediawiki.org/",
			"alt" => "Powered by MediaWiki",
		]
	],
];

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'Vector' );

## Custom namespaces
define("NS_PILOOTPROJECT", 20);
define("NS_PILOOTPROJECT_TALK", 21);
define("NS_TOPIC", 30);
define("NS_TOPIC_TALK", 31);
define("NS_ORGANISATIE", 40);
define("NS_ORGANISATIE_TALK", 41);

$wgExtraNamespaces[NS_PILOOTPROJECT] = "Pilootproject";
$wgExtraNamespaces[NS_PILOOTPROJECT_TALK] = "Pilootproject_talk";
$wgExtraNamespaces[NS_TOPIC] = "Topic";
$wgExtraNamespaces[NS_TOPIC_TALK] = "Topic_talk";
$wgExtraNamespaces[NS_ORGANISATIE] = "Organisatie";
$wgExtraNamespaces[NS_ORGANISATIE_TALK] = "Organisatie_talk";

# Extensions
## WikiEditor
wfLoadExtension( 'WikiEditor' );
## ParserFunctions
wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;
## Variables
wfLoadExtension( 'Variables' );

## VisualEditor
wfLoadExtension('VisualEditor');
// Enable by default for everybody
$wgDefaultUserOptions['visualeditor-enable'] = 1;
## VisualEditor needs parsoid. In our docker environment, we'll use the one of Wikipedia
## But you MUST install parsoid
$wgVirtualRestConfig['modules']['parsoid'] = array(
  // URL to the Parsoid instance
  // Use port 8142 if you use the Debian package
  'url' => 'https://en.wikipedia.org',
  // Parsoid "domain", see below (optional)
  'domain' => 'en.wikipedia.org',
  // Parsoid "prefix", see below (optional)
  'prefix' => 'localhost'
);
$wgVisualEditorFullRestbaseURL = 'https://en.wikipedia.org/api/rest_';

## Enable VisualEditor for custom namespaces
$wgVisualEditorAvailableNamespaces = [
	"Pilootproject" => true,
	"Topic" => true,
	"Organisatie" => true
];