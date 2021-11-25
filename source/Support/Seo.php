<?php


namespace Source\Support;


use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    /** @var Optimizer */
    protected $optimizer;

    public function __construct(string $schema = 'article')
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(
            CONF_SITE_NAME,
            CONF_SITE_LANG,
            $schema
        )->twitterCard(
            CONF_SOCIAL_TWITTER_CREATOR,
            CONF_SOCIAL_TWITTER_PUBLISHER,
            CONF_SITE_DOMAIN
        )->publisher(
            CONF_SOCIAL_FACEBOOK_PAGE,
            CONF_SOCIAL_FACEBOOK_AUTHOR,
        )->facebook(
            CONF_SOCIAL_FACEBOOK_APP
        );
    }

    public function __get($name)
    {
       return $this->optimizer->data()->$name;
    }

    public function render(string $title, string $description, string $url, string $image, bool $follow = true): string
    {
        return $this->optimizer->optimize($title, $description, $url, $image, $follow)->render();
    }

    public function optimizer(): Optimizer
    {
        return $this->optimizer;
    }

    public function data(string $title = null, string $desc = null, string $url = null, string $image = null)
    {
        return $this->optimizer->data($title, $desc, $url, $image);
    }
}