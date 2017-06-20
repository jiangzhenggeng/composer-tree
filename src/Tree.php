<?php

namespace JiangZG\Tree;

class Tree{

    //主键值名称
    public $tree_id	 		 = 'id';
    //依附主键值名称
    public $tree_parentid	 = 'parentid';
    public $child_name		 = 'children';

    /**
     * 生成树形结构
     * @param unknown $array
     * @param number $pid
     * @return multitype:unknown
     */
    public function createTree(&$array,$pid=0) {

        $_temp_array = array();
        foreach ($array as $val ){
            $_temp_array[$val[$this->tree_id]] = $val;
        }
        $array = array();
        foreach ($_temp_array as $key => $val ){
            !isset($_temp_array[$val[$this->tree_parentid]]) ? $array[] = &$_temp_array[$key]:$_temp_array[$val[$this->tree_parentid]][$this->child_name][] = &$_temp_array[$key];
        }
        return $array;
    }
}