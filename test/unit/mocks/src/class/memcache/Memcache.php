<?php

namespace BFW\Memcache\test\unit\mocks;

class Memcache extends \BFW\Memcache\Memcache
{
    use \BFW\test\helpers\Application;
    
    public function callGetServerInfos(&$infos)
    {
        return parent::getServerInfos($infos);
    }
}
