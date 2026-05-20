<?php
return array (
  'gallery9' => 
  array (
    'base' => 'https://artmedia-gallery.ddev.site',
    'errorHandling' => 
    array (
      0 => 
      array (
        'errorCode' => 404,
        'errorHandler' => 'Page',
        'errorContentSource' => 't3://page?uid=98',
      ),
    ),
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'English',
        'enabled' => true,
        'languageId' => 0,
        'base' => '/',
        'typo3Language' => 'default',
        'locale' => 'en_US.UTF-8',
        'iso-639-1' => 'en',
        'navigationTitle' => 'English',
        'hreflang' => 'en-US',
        'direction' => 'ltr',
        'flag' => 'us',
      ),
    ),
    'rootPageId' => 18,
    'routeEnhancers' => 
    array (
      'NewsList' => 
      array (
        'type' => 'Extbase',
        'limitToPages' => 
        array (
          0 => 12,
          1 => 13,
          2 => 14,
          3 => 15,
        ),
        'extension' => 'News',
        'plugin' => 'Pi1',
        'routes' => 
        array (
          0 => 
          array (
            'routePath' => '/page/{page}',
            '_controller' => 'News::list',
            '_arguments' => 
            array (
              'page' => '@widget_0/currentPage',
            ),
          ),
        ),
        'defaultController' => 'News::list',
        'defaults' => 
        array (
          'page' => '0',
        ),
        'requirements' => 
        array (
          'page' => '\\d+',
        ),
        'aspects' => 
        array (
          'page' => 
          array (
            'type' => 'StaticRangeMapper',
            'start' => '1',
            'end' => '100',
          ),
        ),
      ),
      'NewsDetail' => 
      array (
        'type' => 'Extbase',
        'limitToPages' => 
        array (
          0 => 22,
          1 => 23,
          2 => 24,
          3 => 25,
          4 => 27,
          5 => 28,
          6 => 30,
          7 => 33,
        ),
        'extension' => 'News',
        'plugin' => 'Pi1',
        'routes' => 
        array (
          0 => 
          array (
            'routePath' => '/{news_title}',
            '_controller' => 'News::detail',
            '_arguments' => 
            array (
              'news_title' => 'news',
            ),
          ),
        ),
        'defaultController' => 'News::detail',
        'requirements' => 
        array (
          'news_title' => '^[a-zA-Z0-9].*$',
        ),
        'aspects' => 
        array (
          'news_title' => 
          array (
            'type' => 'PersistedAliasMapper',
            'tableName' => 'tx_news_domain_model_news',
            'routeFieldName' => 'path_segment',
          ),
        ),
      ),
    ),
    'routes' => 
    array (
      0 => 
      array (
        'route' => 'sitemap.xml',
        'type' => 'uri',
        'source' => 'https://artmedia.gallery/?type=1533906435',
      ),
      1 => 
      array (
        'route' => 'robots.txt',
        'type' => 'staticText',
        'content' => 'User-agent:*
Disallow:/typo3/
',
      ),
      2 => 
      array (
        'route' => 'sitemap.xml',
        'type' => 'uri',
        'source' => 'https://www.artmedia.gallery/?type=1533906435',
      ),
    ),
    'websiteTitle' => 'Artmedia Gallery',
    'webmanifest' => 
    array (
      'full_name' => 'artmedia.gallery',
      'short_name' => 'artmedia.gallery',
      'theme_color' => '#ffffff',
      'favicon_path' => 'EXT:artmediagallery12/Resources/Public/Icons/',
      'favicon_192' => 'android-chrome-192x192.png',
      'favicon_512' => 'android-chrome-512x512.png',
    ),
  ),
);
#