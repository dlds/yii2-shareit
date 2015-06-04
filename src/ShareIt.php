<?php

namespace dlds\shareit;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use dlds\shareit\ShareLinksAssets;

class ShareLinks extends \yii\base\Widget {

    /**
     * Constants representing each social
     */
    const SOCIAL_TWITTER = 1;
    const SOCIAL_FACEBOOK = 2;
    const SOCIAL_VKONTAKTE = 3;
    const SOCIAL_GPLUS = 4;
    const SOCIAL_LINKEDIN = 5;
    const SOCIAL_KINDLE = 6;

    /**
     * @var string url to share
     */
    public $url;

    /**
     * @var string jQuery selector for sharing links (to bind popup on click there)
     */
    public $linkSelector = '.shareit-link';

    /**
     * Sharing url template for each network
     *
     * @var array
     */
    public $shareItMap = [
        self::SOCIAL_TWITTER => 'https://twitter.com/intent/tweet?url={url}',
        self::SOCIAL_FACEBOOK => 'https://www.facebook.com/sharer/sharer.php?u={url}',
        self::SOCIAL_VKONTAKTE => 'http://vk.com/share.php?url={url}',
        self::SOCIAL_GPLUS => 'https://plus.google.com/share?url={url}',
        self::SOCIAL_LINKEDIN => 'http://www.linkedin.com/shareArticle?url={url}',
        self::SOCIAL_KINDLE => 'http://fivefilters.org/kindle-it/send.php?url={url}'
    ];

    public function init()
    {
        $this->url = (empty($this->url)) ? Yii::$app->getRequest()->getAbsoluteUrl() : $this->url;
        ShareLinksAssets::register($this->view);
    }

    public function run()
    {
        $js = '$("'.$this->linkSelector.'").yiiShareLinks();';
        $this->view->registerJs($js);
        echo $this->render($this->viewName);
    }

    /**
     *
     * @param type $networkId
     * @param type $url
     * @return type
     */
    public function shareLink($network, $options = [], $url = false)
    {
        return str_replace('{url}', urlencode($this->url), ArrayHelper::getValue($this->shareUrlMap, $networkId));
    }
}