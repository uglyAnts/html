<?php

//PHP 支持 9 种原始数据类型。
//
//四种标量类型：
//• boolean（布尔型）
//• integer（整型）
//• float（浮点型，也称作 double)
//• string（字符串）
//
//三种复合类型：
//• array（数组）
//• object（对象）
//• callable（可调用）
//
//最后是两种特殊类型：
//• resource（资源）
//• NULL（无类型）

$a_bool = TRUE;   // 布尔值 boolean
$a_str  = "foo";  // 字符串 string
$a_str2 = 'foo';  // 字符串 string
$an_int = 12;     // 整型 integer

echo gettype($a_bool); // 输出:  boolean
echo gettype($a_str);  // 输出:  string

// 如果是整型，就加上 4
if (is_int($an_int)) {
    $an_int += 4;
}

// 如果 $bool 是字符串，就打印出来
// (啥也没打印出来)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}

//当转换为 boolean 时，以下值被认为是 FALSE：
//• 布尔值 FALSE 本身
//• 整型值 0（零）
//• 浮点型值 0.0（零）
//•  空字符串，以及字符串 "0"
//• 不包括任何元素的数组
//•  特殊类型 NULL（包括尚未赋值的变量）
//•  从空标记生成的 SimpleXML 对象
//
//所有其它值都被认为是 TRUE（包括任何资源 和 NAN）。
//js和php的差别[] NaN  '0'

var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)


//整型值可以使用十进制，十六进制，八进制或二进制表示，前面可以加上可选的符号（- 或者 +）。
//
//二进制表达的 integer 自 PHP 5.4.0 起可用。
//
//要使用八进制表达，数字前必须加上 0（零）。要使用十六进制表达，数字前必须加上 0x。要使用二进制表达，数字前必须加上 0b。
