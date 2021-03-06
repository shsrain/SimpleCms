<?php

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Member\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 这是一个 member 仓储的外观类。
 *
 * @author shsrain <shsrain@163.com>
 */
class MemberRepository extends Facade
{
    /**
     * 得到的组件的注册名称。
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'memberrepository';
    }
}
