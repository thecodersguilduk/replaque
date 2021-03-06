<?php

namespace App\Docs;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Server as BaseServer;

class Server extends BaseServer
{
    /**
     * @param string|null $objectId
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Server
     */
    public static function create(string $objectId = null): BaseServer
    {
        return parent::create($objectId)
            ->url(url('/v1'));
    }
}
