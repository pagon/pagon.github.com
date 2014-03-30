<?php

namespace Web;

use Pagon\Route\Rest;
use Pagon\View;

class Base extends Rest
{
    protected $docs = array(
        'guide'    => '01_Quick_Guide.md',
        'document' => '02_Document.md',
        'api'      => '03_API.md'
    );

    protected $locals = array();

    public function before()
    {
        $this->locals['docs'] = $this->docs;
        $this->locals['params'] = $this->params;
    }

    public function render($tpl, $data = array())
    {
        $content = View::make($tpl, $data);
        $this->app->render('layout.php', $this->locals + array('content' => $content));
    }

    public function renderHtml($html)
    {
        $this->app->render('layout.php', $this->locals + array('content' => $html));
    }
}