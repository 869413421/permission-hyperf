<?php
/**
 * Created by PhpStorm.
 * User: 简美
 * Date: 2020/4/14
 * Time: 14:41
 */

declare(strict_types = 1);
namespace Ym\PermissionHyperf\Models;


use Hyperf\Database\Model\Model;
use Ym\PermissionHyperf\Contracts\RoleContracts;

class Role extends Model implements RoleContracts
{

    public static function create(array $attributes = [])
    {
        // TODO: Implement create() method.
    }

    public static function hasRole(): bool
    {
        // TODO: Implement hasRole() method.
    }
}