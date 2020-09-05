<?php

namespace AmoCRMTech\Yii2\Models;

use AmoCRMTech\Yii2\Models\Query\UserGroupQuery;
use AmoCRMTech\Yii2\Models\Traits\ConnectionTrait;
use yii\db\ActiveRecord;

/**
 * @property int          $user_id    [bigint]
 * @property int          $account_id [bigint]
 * @property int          $group_id   [bigint]
 *
 * @property-read User    $user
 * @property-read Account $account
 * @property-read Group   $group
 */
class UserGroup extends ActiveRecord
{
    use ConnectionTrait {
        getDbAmo as getDb;
    }

    public static function tableName(): string
    {
        return '{{%user_group}}';
    }

    public static function primaryKey(): array
    {
        return ['user_id', 'account_id'];
    }

    public static function find(): UserGroupQuery
    {
        return new UserGroupQuery(static::class);
    }

    public function rules()
    {
        return [
            ['user_id', 'exist', 'targetRelation' => 'user'],
            ['account_id', 'exist', 'targetRelation' => 'account'],
        ];
    }

    public function getAccount()
    {
        return $this->hasOne(Account::class, ['id' => 'account_id'])->inverseOf('userAccounts');
    }

    public function getGroup()
    {
        return $this->hasOne(Group::class, ['id' => 'group_id'])->inverseOf('userGroups');
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id'])->inverseOf('userGroups');
    }
}