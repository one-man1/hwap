<?php
echo "<h1> PHP Data Types</h1> ";
echo "<br>";
echo "<h2> Example :- </h2>";

//============================================================
/*
(PHP Data Types)    انواع البيانات
- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL
- Resource
 */

//=============================================================

/*
1- (string)
- A string is a sequence of characters
عبارة عن سلسلة من الحروف والارقام والرموز

- A string can be any text inside quotes. You can use single or double quotes.
كما يعرف على انه اي نص بين علامة تنصيص مفردة او مزدوجة
 */


// Example
echo "<ul><li><h4>String Result</h4></li></ul>";
$x = "Hour with a programmer";
$y = 'Hour with a programmer ';

echo $x;
echo "<br>";
echo $y;
echo "<br>";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
echo "==========================================================";
echo "<br>";

//==============================================================
/*
 2- (Integer )
- An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
    (-2,147,483,648 and 2,147,483,647) هو نوع لتعريف الارقام الغير عشرية بين قيمتين محدودة وهي
- Rules for integers:     القواعد او الشروط للتعامل مع

An integer must have at least one digit
   لابد ان يحتوي علي خانة واحدة على الاقل
An integer must not have a decimal point
   يجب ان لا يحتوي على رقم عشري مثل 1.73
An integer can be either positive or negative
  يقبل قيمتين سالبة وموجبة
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
يمكنه ان يكون في ثلاث اشكال وهي :
 * decimal (10-based)
 * hexadecimal (16-based - prefixed with 0x)
 * octal (8-based - prefixed with 0)

 */

// Example

#The PHP var_dump() function returns the data type and value لجلب نوع القيمة التي قمنا باستخدامها var_dump()   سنستخدم دالة
echo "<ul><li>Integer Result</li></ul>";
$varInt= 12345;
var_dump($varInt);
echo "<br>";
echo "==========================================================";
echo "<br>";
//=============================================================

/*
 3-  Float (floating point numbers - also called double)
- A float (floating point number) is a number with a decimal point or a number in exponential form.
  يستخدم مع الارقام العشرية التي تحوي فاصلة

 */
// Example
echo "<ul><li>float Result</li></ul>";
$varFloat =123.765;
var_dump($varFloat);
echo "<br>";
echo "==========================================================";
echo "<br>";
//==============================================================
/*
 4- Boolean
- A Boolean represents two possible states: TRUE or FALSE
  تمثل قيمتين منطقيتين وهما :صح او خطأ

 */// Example
echo "<ul><li>Boolean Result</li></ul>";
$varBoolean = true;
var_dump($varBoolean);
echo "<br>";
echo "==========================================================";
echo "<br>";
//==============================================================
/*
 5- Array المصفوفات
- An array stores multiple values in one single variable.
تعرف على انها تخزين لمجموعة من القيم في متغير واحد
 */
// Example
echo "<ul><li>Array Result</li></ul>";
$varArray = array("val 1","val 2","val 3 ");
var_dump($varArray);
echo "<br>";
echo "==========================================================";
echo "<br>";
//==============================================================
/*
 6- Object كائن
An object is a data type which stores data and information on how to process that data.
يستخدم هدا النوع في البرمجة OOP
 */

// Example
echo "<ul><li>Object Result</li></ul>";
class Car {
    function Car() {
        $this->model = "Toyota";
    }
}

// create an object
$avalon = new Car();

// show object properties
echo $avalon->model;
echo "<br>";
echo "==========================================================";
echo "<br>";
//==============================================================
/*
 7- NULL
- Null is a special data type which can have only one value: NULL.
هو نوع يستخدم لاعطاء قيمة فارغة

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL
ملاحظة: اي متغير لا يعطى قيمة يعطى بشكل تلقائي null

 */
// Example
echo "<ul><li>Null Result</li></ul>";
$var1 = "Hour with a programmer ";
$var1 = null;
var_dump($var1);
echo "<br>";
echo "==========================================================";
echo "<br>";
//==============================================================

/*
 8- Resource
- The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

A common example of using the resource data type is a database call.

 */



