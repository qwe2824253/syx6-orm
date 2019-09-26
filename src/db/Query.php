<?php
// +----------------------------------------------------------------------
// | syx6PHP [ WE CAN DO IT JUST syx6 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2019 http://syx6php.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare (strict_types = 1);

namespace syx6\db;

/**
 * PDO数据查询类
 */
class Query extends BaseQuery
{
    use concern\PDOQuery;
}
