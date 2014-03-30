<?php

namespace Web;

class Html extends Base
{
    protected $docs_dir = '/vendor/pagon/framework/docs';

    public function get()
    {
        $name = $this->params['name'];
        $file = $this->docs[$name];
        $parsedown = new \Parsedown();
        $html = $parsedown->parse(file_get_contents(ROOT_DIR . '/' . $this->docs_dir . '/' . $file));

        $this->renderHtml($html);
    }
}