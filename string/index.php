<?php

$str = "今天天氣很好";
$str2 = "Today is a good day";
echo $str;
echo "<br>";
echo $str2;
#substr() #回傳一個字元陣例，中文的話要3碼才取的出來
echo "<br>";
echo substr($str, 0, 3);
echo "<br>";
echo substr($str2, 0, 2);

echo "<h3>mb_substr()</he>";
echo "<br>";
echo mb_substr($str, 0, 2);
echo "<br>";
echo mb_substr($str2, 0, 2);

echo "<h3>中英混合取子字串</he>";
$str3 = "Today 真是個 good day";
echo "<br>";
echo "$str3";
echo "<br>";
echo mb_substr($str3, 0, 8);
echo "<br>";

echo "<hr>";
$str = "   今天天氣 很好    ";
$str2 = " 今天天氣 很好 ";
echo $str;
echo "<br>";
echo $str2;

echo "<br>";
echo trim($str);
echo "<br>";
echo trim($str2);
echo "<br>";

echo "<hr>";
$str = "YA";
echo str_repeat($str, 10);
echo "<br>";

echo "<hr>";
$str = " 今天天氣很好 ";
$replace = "很慘";
echo $str;
echo "<br>";
echo str_replace("很好", $replace, $str);
echo "<br>";
echo str_replace("很好", $replace, str_replace("天", "日", $str));
echo str_replace(["天", "很好"], ["日", $replace], $str);
echo "<br>";

echo "<hr>";
$str = "心臟顧好，壽命也能更長！在國外已有73年歷史、備受推崇的《循環》（Circulation）期刊，近來刊登一份跨越14年、超過2萬人健康數據的研究結果，發現只要在飲食、運動、控制體重（BMI數值）、血壓、血糖、膽固醇、吸菸和睡眠上，維持好習慣，即符合美國心臟協會提出的能有效預防心血管疾病的生活習慣標準者，其壽命竟可比得分低者多活8.9年";
$ex = explode("，", $str);
echo $str;
echo"<br>";
echo "<pre>";
print_r($ex);
echo"</pre>";
$file="list.doc";
$sub=explode(".",$file);
echo "<pre>";
print_r($sub);
echo"</pre>";

echo "<hr>";
echo implode(",",$ex);
echo"<br>";
echo"<br>";
echo join(",",$ex);
echo "<br>";

echo "<hr>";
$str = "今天天氣很好";
echo $str;
echo "<br>";
$search = "天氣";
echo $search;
echo "<br>";
echo strpos($str,$search); #中文字算2字元
echo "<br>";
echo mb_strpos($str,$search); #中文字算1字元
echo "<br>";

echo "<hr>";
$str = "今天天氣很好";
$str2 = "Today is a good day";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo strlen($str); #中文算3字元
echo "<br>";
echo strlen($str2);

