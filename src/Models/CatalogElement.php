<?php
namespace AmoCRMTech\Yii2\Models;

use AmoCRMTech\Yii2\Models\Query\CatalogElementQuery;
use AmoCRMTech\Yii2\Models\Traits\ConnectionTrait;
use yii\db\ActiveRecord;

class CatalogElement extends ActiveRecord
{
    use ConnectionTrait {
        getDbAmo as getDb;
    }

    public static function find(): CatalogElementQuery
    {
        return new CatalogElementQuery(static::class);
    }
}