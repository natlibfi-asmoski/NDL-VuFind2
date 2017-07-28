<?php
return [
    'extends' => 'bootstrap3',
    'helpers' => [
        'factories' => [
            'authorizationNote' => 'Finna\View\Helper\Root\Factory::getAuthorizationNote',
            'autocomplete' => 'Finna\View\Helper\Root\Factory::getAutocomplete',
            'browse' => 'Finna\View\Helper\Root\Factory::getBrowse',
            'callnumber' => 'Finna\View\Helper\Root\Factory::getCallnumber',
            'citation' => 'Finna\View\Helper\Root\Factory::getCitation',
            'checkboxFacetCounts' => 'Finna\View\Helper\Root\Factory::getCheckboxFacetCounts',
            'combined' => 'Finna\View\Helper\Root\Factory::getCombined',
            'content' => 'Finna\View\Helper\Root\Factory::getContent',
            'dynamicForm' => 'Finna\View\Helper\Root\Factory::getDynamicForm',
            'eds' => 'Finna\View\Helper\Root\Factory::getEDS',
            'feed' => 'Finna\View\Helper\Root\Factory::getFeed',
            'fileSrc' => 'Finna\View\Helper\Root\Factory::getFileSrc',
            'finnaSurvey' => 'Finna\View\Helper\Root\Factory::getFinnaSurvey',
            'header' => 'Finna\View\Helper\Root\Factory::getHeader',
            'headLink' => 'FinnaTheme\View\Helper\Factory::getHeadLink',
            'headScript' => 'FinnaTheme\View\Helper\Factory::getHeadScript',
            'headTitle' => 'Finna\View\Helper\Root\Factory::getHeadTitle',
            'holdingsSettings' => 'Finna\View\Helper\Root\Factory::getHoldingsSettings',
            'imageSrc' => 'Finna\View\Helper\Root\Factory::getImageSrc',
            'indexedTotal' => 'Finna\View\Helper\Root\Factory::getTotalIndexed',
            'layoutclass' => 'Finna\View\Helper\Root\Factory::getLayoutClass',
            'metalib' => 'Finna\View\Helper\Root\Factory::getMetaLib',
            'navibar' => 'Finna\View\Helper\Root\Factory::getNavibar',
            'onlinePayment' => 'Finna\View\Helper\Root\Factory::getOnlinePayment',
            'openUrl' => 'Finna\View\Helper\Root\Factory::getOpenUrl',
            'organisationInfo' => 'Finna\View\Helper\Root\Factory::getOrganisationInfo',
            'organisationsList'
                => 'Finna\View\Helper\Root\Factory::getOrganisationsList',
            'piwik' => 'Finna\View\Helper\Root\Factory::getPiwik',
            'primo' => 'Finna\View\Helper\Root\Factory::getPrimo',
            'recaptcha' => 'Finna\View\Helper\Root\Factory::getRecaptcha',
            'record' => 'Finna\View\Helper\Root\Factory::getRecord',
            'recordDataFormatter' => 'Finna\View\Helper\Root\RecordDataFormatterFactory',
            'recordImage' => 'Finna\View\Helper\Root\Factory::getRecordImage',
            'scriptSrc' => 'Finna\View\Helper\Root\Factory::getScriptSrc',
            'searchbox' => 'Finna\View\Helper\Root\Factory::getSearchBox',
            'searchmemory' => 'Finna\View\Helper\Root\Factory::getSearchMemory',
            'searchTabs' => 'Finna\View\Helper\Root\Factory::getSearchTabs',
            'searchTabsRecommendations' => 'Finna\View\Helper\Root\Factory::getSearchTabsRecommendations',
            'summon' => 'Finna\View\Helper\Root\Factory::getSummon',
            'systemMessages' => 'Finna\View\Helper\Root\Factory::getSystemMessages',
            'translation' => 'Finna\View\Helper\Root\Factory::getTranslation',
            'proxyurl' => 'Finna\View\Helper\Root\Factory::getProxyUrl',
            'recordlink' =>  'Finna\View\Helper\Root\Factory::getRecordLink',
        ],
        'invokables' => [
            'markdown' => 'Finna\View\Helper\Root\Markdown',
            'personaAuth' => 'Finna\View\Helper\Root\PersonaAuth',
            'resultfeed' => 'Finna\View\Helper\Root\ResultFeed',
            'organisationDisplayName' => 'Finna\View\Helper\Root\OrganisationDisplayName',
            'search' => 'Finna\View\Helper\Root\Search',
            'streetSearch' => 'Finna\View\Helper\Root\StreetSearch',
            'translationEmpty' => 'Finna\View\Helper\Root\TranslationEmpty',
            'truncateUrl' => 'Finna\View\Helper\Root\TruncateUrl',
            'userPublicName' => 'Finna\View\Helper\Root\UserPublicName',
        ]
    ],
    'css' => [
        'vendor/dataTables.bootstrap.min.css',
        'vendor/magnific-popup.min.css',
        'dataTables.bootstrap.custom.css',
        'vendor/slick.css',
        'vendor/slick-theme.css',
        'vendor/bootstrap-multiselect.min.css',
        'vendor/bootstrap-datepicker3.min.css',
        'vendor/video-js.min.css',
        'finna.css'
    ],
    'js' => [
        'vendor/event-stub.js:lt IE 9',
        'finna.js',
        'finna-autocomplete.js',
        'finna-combined-results.js',
        'image-popup.js',
        'finna-adv-search.js',
        'finna-daterange-vis.js',
        'finna-feed.js',
        'finna-layout.js',
        'finna-openurl.js',
        'finna-common.js',
        'vendor/jquery.dataTables.min.js',
        'vendor/dataTables.bootstrap.min.js',
        'vendor/jquery.inview.min.js',
        'vendor/jquery.magnific-popup.min.js',
        'vendor/jquery.cookie-1.4.1.min.js',
        'vendor/slick.min.js',
        'vendor/video.min.js',
        'vendor/dash.all.min.js',
        'vendor/videojs-dash.min.js',
        'vendor/videojs-contrib-hls.min.js',
        'vendor/videojs.hotkeys.min.js',
        'vendor/jquery.touchSwipe.min.js',
        'vendor/bootstrap-multiselect.min.js',
        'vendor/gauge.min.js'
    ],
    'less' => [
        'active' => false
    ],
    'favicon' => 'favicon.ico',
];
