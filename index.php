<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <label >NAME</label>
        <input type="text" id="name">
        <label >CITY</label>
        <input type="text" id="city">
        <button class="click">SAVEDATA</button>
    </form>
    <script>
    var fclick=document.querySelector(".click")
    fclick.addEventListener('click',()=>{
        if(window.XMLHttpRequest){
        a=new XMLHttpRequest();
        }
        else{
        a=new ActiveXObject("Microsoft.XMLHTTP");
        }
        a.onload=function(){
            if(a.status==200){
                alert(a.responseText)
            }

        }
        var name=document.querySelector("#name").value
        var city=document.querySelector("#city").value
        var url="save.php"
        var val="name="+name+"&city="+city;
        a.open("POST",url,true)
        a.setRequestHeader("content-type","application/x-www-form-urlencoded");
        a.setRequestHeader("content-lenght",val.length);
        a.setRequestHeader("connection","close");
        a.send(val);

    })
    </script>
</body>
</html>