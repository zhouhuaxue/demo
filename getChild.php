<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-7-29
 * Time: 下午10:53
 */
//模拟从数据库中查询到的数据
$array = array(
    array('id'=>'123','name'=>'cccc'),
    array('id'=>'1213','name'=>'ccc11c'),
    array('id'=>'12113','name'=>'cc222cc'),
);

echo json_encode($array);
