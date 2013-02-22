<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

/**
 +------------------------------------------------------------------------------
 * HashMap实现类
 +------------------------------------------------------------------------------
 * @category   Think
 * @package  Think
 * @subpackage  Util
 * @author    liu21st <liu21st@gmail.com>
 * @version   $Id$
 +------------------------------------------------------------------------------
 */
class HashMap extends Think  implements IteratorAggregate
{//类定义开始

    /**
     +----------------------------------------------------------
     * 元素集数组
     +----------------------------------------------------------
     * @var array
     * @access protected
     +----------------------------------------------------------
     */
    protected $_values = array();

    /**
     +----------------------------------------------------------
     * 架构函数
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param string $values  初始化数组元素
     +----------------------------------------------------------
     */
    public function __construct($values = array())
    {
        if (!empty($values)) {
            $this->_values = $values;
        }
    }

    /**
     +----------------------------------------------------------
     * 获取Iterator因子
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @return Iterate
     +----------------------------------------------------------
     */
    public function getIterator()
    {
        return new ArrayObject($this->_values);
    }

    /**
     +----------------------------------------------------------
     * 清除Map数据
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     */
    public function clear()
    {
        $this->_values = array();
    }

    /**
     +----------------------------------------------------------
     * 检查Map中是否指定key
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param string $key  键名
     +----------------------------------------------------------
     * @return boolen
     +----------------------------------------------------------
     */
    public function containsKey($key)
    {
        return array_key_exists($key, $this->_values);
    }

    /**
     +----------------------------------------------------------
     * Map是否包含指定value
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param string $value  键值
     +----------------------------------------------------------
     * @return boolen
     +----------------------------------------------------------
     */
    public function containsValue($value)
    {
        return in_array($value, $this->_values);
    }

    /**
     +----------------------------------------------------------
     * Map中是否包含指定的key和对应的value
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param string $key  键名
     * @param string $value  键值
     +----------------------------------------------------------
     * @return boolen
     +----------------------------------------------------------
     */
    public function contains($key, $value)
    {
        if ($this->containsKey($key))
        {
            return ($this->get($key) == $value);
        }
        return false;
    }

    /**
     +----------------------------------------------------------
     * 根据Key取得Map中的value
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param string $key  键名
     +----------------------------------------------------------
     * @return mixed
     +----------------------------------------------------------
     */
    public function get($key)
    {
        if ($this->containsKey($key)) {
            return $this->_values[$key];
        } else {
            return null;
        }
    }

    /**
     +----------------------------------------------------------
     * Map是否为空
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @return boolen
     +----------------------------------------------------------
     */
    public function isEmpty()
    {
        return empty($this->_values);
    }

    /**
     +----------------------------------------------------------
     * Map对象转换为数组
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @return array
     +----------------------------------------------------------
     */
    public function toArray()
    {
        return $this->_values;
    }

    /**
     +----------------------------------------------------------
     * 返回Map中的key数组
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @return array
     +----------------------------------------------------------
     */
    public function keySet()
    {
        return array_keys($this->_values);
    }

    /**
     +----------------------------------------------------------
     * 放入指定的Key和value到Map，如果存在同名键名，则覆盖
     * 如果存在的话返回之前的值
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param string $key  键名
     * @param string $value  键值
     +----------------------------------------------------------
     * @return mixed
     +----------------------------------------------------------
     */
    public function put($key, $value)
    {
        $previous = $this->get($key);
        $this->_values[$key] =&$value;
        return $previous;
    }

    public function __get($name) {
        return $this->get($name);
    }

    public function __set($name,$value) {
        return $this->put($name,$value);
    }

    /**
     +----------------------------------------------------------
     * 批量放入values到Map
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param array $values  数组
     +----------------------------------------------------------
     */
    public function putAll($values)
    {
        if (is_array($values)) {
            foreach ($values as $key => $value) {
                $this->put($key, $value);
            }
        }
    }

    /**
     +----------------------------------------------------------
     * 移出Map中指定的键名value
     * 返回移除的值
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param mixed $key 键名
     +----------------------------------------------------------
     * @return string
     +----------------------------------------------------------
     */
    public function remove($key)
    {
        $value = $this->get($key);
        if (!is_null($value)) { unset($this->_values[$key]); }
        return $value;
    }

    /**
     +----------------------------------------------------------
     * 取得Map对象的长度
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @return integer
     +----------------------------------------------------------
     */
    public function size()
    {
        return count($this->_values);
    }

    /**
     +----------------------------------------------------------
     * 返回Map中的value数组
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @return array
     +----------------------------------------------------------
     */
    public function values()
    {
        return array_values($this->_values);
    }

}//类定义结束
?>