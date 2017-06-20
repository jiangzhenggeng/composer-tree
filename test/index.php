<?php

include_once __DIR__.'/../vendor/autoload.php';

$testAyy = [
    [
        'id'=>1,
        'parentid'=>0,
        'name'=>'第1个'
    ],
    [
        'id'=>2,
        'parentid'=>1,
        'name'=>'第2个'
    ],
    [
        'id'=>3,
        'parentid'=>2,
        'name'=>'第3个'
    ],
    [
        'id'=>4,
        'parentid'=>1,
        'name'=>'第4个'
    ],
    [
        'id'=>5,
        'parentid'=>0,
        'name'=>'第5个'
    ],
    [
        'id'=>6,
        'parentid'=>5,
        'name'=>'第6个'
    ],
    [
        'id'=>7,
        'parentid'=>6,
        'name'=>'第7个'
    ],
    [
        'id'=>8,
        'parentid'=>5,
        'name'=>'第8个'
    ],
    [
        'id'=>9,
        'parentid'=>8,
        'name'=>'第9个'
    ],
    [
        'id'=>10,
        'parentid'=>9,
        'name'=>'第10个'
    ],
];

$tree = new \JiangZG\Tree\Tree();

$result = $tree->createTree($testAyy);

print_r($result);










