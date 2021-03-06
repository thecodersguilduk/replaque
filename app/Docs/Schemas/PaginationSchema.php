<?php

declare(strict_types=1);

namespace App\Docs\Schemas;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class PaginationSchema extends Schema
{
    /**
     * @param string|null $objectId
     * @param \GoldSpecDigital\ObjectOrientedOAS\Objects\Schema|null $schema
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Schema
     */
    public static function create(string $objectId = null, Schema $schema = null): Schema
    {
        return parent::create($objectId)
            ->type(static::TYPE_OBJECT)
            ->properties(
                Schema::array('data')->items($schema),
                Schema::object('meta')->properties(
                    Schema::integer('current_page'),
                    Schema::integer('from'),
                    Schema::integer('last_page'),
                    Schema::string('path'),
                    Schema::integer('per_page'),
                    Schema::integer('to'),
                    Schema::integer('total')
                ),
                Schema::object('links')->properties(
                    Schema::string('first'),
                    Schema::string('last'),
                    Schema::string('prev'),
                    Schema::string('next')
                )
            );
    }
}
