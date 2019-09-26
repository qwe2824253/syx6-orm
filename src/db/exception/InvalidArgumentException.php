<?php
// +----------------------------------------------------------------------
// | syx6PHP [ WE CAN DO IT JUST syx6 IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2019 http://syx6php.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare (strict_types = 1);
namespace syx6\db\exception;

use Psr\SimpleCache\InvalidArgumentException as SimpleCacheInvalidArgumentInterface;

/**
 * 非法数据异常
 */
class InvalidArgumentException extends \InvalidArgumentException implements SimpleCacheInvalidArgumentInterface
{
}
