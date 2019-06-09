<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use think\facade\View;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function initialize()
    {
        parent::initialize();
    }

    public function index()
    {
        return $this->view->fetch();
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

}