# Pinyin
最简单、最准确的PHP中文转拼音的类
支持获取拼音以及拼音的缩写即首字母
支持utf-8、gbk等编码
能准确匹配6千多个常用汉字
单个汉字，一句话，中英文混合都完美支持

## 例子utf-8版
```php
include_once 'Pinyin.php';    
echo Pinyin::getPinyin("早上好");//获取拼音  
echo Pinyin::getShortPinyin("早上好");//获取拼音缩写  
```

## 例子gbk版
```php
include_once 'Pinyin.php';
echo Pinyin::getPinyin("早上好",'gb2312');
echo Pinyin::getShortPinyin("早上好",'gb2312');
```
