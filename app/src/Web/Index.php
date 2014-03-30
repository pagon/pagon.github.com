<?php

namespace Web;

class Index extends Base
{
    public function get()
    {
        $this->render('index.php');
    }
}