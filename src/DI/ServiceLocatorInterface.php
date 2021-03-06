<?php
/** @noinspection PhpMissingParamTypeInspection */

namespace AmoCRMTech\Yii2\DI;

use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;
use yii\di\ServiceLocator;

/**
 * @api
 * @mixin ServiceLocator
 */
interface ServiceLocatorInterface
{
    /**
     * @param string   $context
     * @param callable $function
     *
     * @return mixed
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function with(string $context, callable $function);

    /**
     * @param string  $id
     * @param bool    $throwException
     * @param ?string $context
     *
     * @return object|null
     * @throws InvalidConfigException
     */
    public function get($id, $throwException = true, string $context = null);
}