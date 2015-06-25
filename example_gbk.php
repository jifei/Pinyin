<?php
/**
 * Created by PhpStorm.
 * User: jifei
 * Date: 15/6/25
 */
include_once 'Pinyin.php';
echo Pinyin::getPinyin("早上好",'gb2312');
echo Pinyin::getShortPinyin("早上好",'gb2312');