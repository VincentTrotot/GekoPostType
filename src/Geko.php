<?php

namespace VincentTrotot\Geko;

class Geko extends \Timber\Post
{
    public $name;
    public $url;

    public function __construct($pid = null)
    {
        parent::__construct($pid);
        $this->name = $this->meta('name');
        $this->url = $this->meta('url');
    }

    public function getLastGekos($nb = 1)
    {
        return new \Timber\PostQuery([
            'post_type' => 'vt_geko',
            'posts_per_page' => $nb
        ], Geko::class);
    }
}
