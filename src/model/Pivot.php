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

namespace syx6\model;

use syx6\Model;

/**
 * 多对多中间表模型类
 */
class Pivot extends Model
{

    /**
     * 父模型
     * @var Model
     */
    public $parent;

    /**
     * 是否时间自动写入
     * @var bool
     */
    protected $autoWriteTimestamp = false;

    /**
     * 架构函数
     * @access public
     * @param  array  $data 数据
     * @param  Model  $parent 上级模型
     * @param  string $table 中间数据表名
     */
    public function __construct(array $data = [], Model $parent = null, string $table = '')
    {
        $this->parent = $parent;

        if (is_null($this->name)) {
            $this->name = $table;
        }

        parent::__construct($data);
    }

}
