<?php
/**
 * Created by PhpStorm.
 * User: 简美
 * Date: 2020/4/14
 * Time: 14:49
 */
declare(strict_types = 1);

namespace Ym\PermissionHyperf\Contracts;


interface RoleContracts
{
    public static function create(array $attributes = []);

    public static function hasRole(): bool;
}