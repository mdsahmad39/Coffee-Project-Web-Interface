<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    
    <title>The page is under construction.</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    function updatevalues(){
        $(document).ready(function(){
        $.get("http://connecttoapplication.com/G2/cofferead.php", function (data,status){
            console.log(JSON.parse(data));
            var obj=JSON.parse(data);
            document.getElementById("Time").innerHTML=obj.Parameter1;
            document.getElementById("Temperature").innerHTML=obj.Parameter2;
            document.getElementById("Level").innerHTML=obj.Parameter3;
            document.getElementById("Power").innerHTML=obj.Parameter4;
            document.getElementById("Pot").innerHTML=obj.Parameter5;
        });
        });
        
    }
    
    </script>
    
    <script>
    setInterval(updatevalues,1000);
    </script>
    
    <script>
    function VirButtStat(){
        $.ajax({
            url:'http://connecttoapplication.com/G2/changebutton.php',
            method:'get',
            data:'VirButt='+1
        }).done(function(data1){
            console.log(data1);
        });
        
    }
    </script>

</head>
    <h2>Real-Time Values of Your Device</h2>
    <table class="table table-stripped">
        <tr>
            <th><button id="ONOF" onclick="VirButtStat()" class="btn btn-primary">ON/OFF</button></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th>Time : <div id="Time"></div></th>
            <th>Temperature : <div id="Temperature"></div></th>
            <th>Coffee Level : <div id="Level"></div></th>
            <th>Power Consumption : <div id="Power"></div></th>
        </tr>    
    </table>
        
            
</body>
@endsection