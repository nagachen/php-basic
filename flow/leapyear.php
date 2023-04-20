<h1>閏年判斷</h1>
<ul>
    <li>公元年分除以4不可整除，為平年。</li>
    <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ul>
<p>轉換描述為:</p>
<ul>
    <li><span style='color:red'>公元年分除以4可整除，為閏年。</span></li>
    <li>公元年分除以4可整除但除以100不可整除，為閏年。
        <div>1.公元年分除以4可整除</div>
        <div>2.除以100不可整除。</div>
        <div>兩個條件要同時成立,使用AND&&</div>
    </li>
    <li><span style='color:red'>公元年分除以400可整除但除以100不可整除，為閏年。</span></li>
    <div>1.公元年分除以4可整除為閏年。</div>
    <div>2.公元年分除以100不可整除為閏年。</div>
    <div>3.公元年分除以400可整除為閏年。</div>
    <div>以上1,2用and,1的話用OR</div>

</ul>
<br>
<?php
$year=1900;
if($year % 4 == 0 ){
    
    echo $year . "是閏年";
}else{
    echo $year . "不是閏年";
}
echo '<hr>';

if(($year % 4 == 0) && ($year % 100 != 0) ){
    
    echo $year . "是閏年";
}else{
    echo $year . "不是閏年";
}
echo '<hr>';

        #A                  #B                      #C   的放法，#C放前面要跑399次的FALSE
if(($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)){
    
    echo $year . "是閏年";
}else{
    echo $year . "不是閏年";
}
echo '<hr>';




?>