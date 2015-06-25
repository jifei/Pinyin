# Pinyin
简单、准确，支持获取汉字的拼音以及拼音的缩写，能准确匹配6千多个汉字。
单个汉字，一句话，中英文混合都完美支持。

## 例子
```php
include_once 'Pinyin.php';    
echo Pinyin::getPinyin("早上好");//获取拼音  
echo Pinyin::getShortPinyin("早上好");//获取拼音缩写  
```
