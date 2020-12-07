<?php 
    $year =  date('Y');
    $month =  date('m');
    $day =  date('d');  
    $date = "$year-$month-01";
    $total_month_day = date('t', strtotime($date));  //월의 일 수
    $lastdate = "$year-$month-$total_month_day"; 
    
    $weekString = array('일','월','화','수','목','금','토',);
    $first_day = $weekString[date('w' , strtotime($date))]; //월 첫 요일 
    $last_day = $weekString[date('w' , strtotime($lastdate))]; //월 마지막 요일 
    
    
?>

<h1>{{ $year }}년</h1>
<h3> {{ $month }}월</h3>
<table>
    <tr>
        <td>월</td>
        <td>화</td>
        <td>수</td>
        <td>목</td>
        <td>금</td>
        <td>토</td>
        <td>일</td>
    </tr>
    <tr> <td>1주 </td></tr>
    <tr> <td>2주 </td></tr>
    <tr> <td>3주 </td></tr>
    <tr> <td>4주 </td></tr>
    <tr> <td>5주 </td></tr>
    <tr> <td>6주 </td></tr>
</table>