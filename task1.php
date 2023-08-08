<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .head{
        
            text-align:center;
           
            padding-top:5rem
        }
        .bigbox{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            margin-top:2rem
        }
        .reversebox{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:row-reverse;
        }
        .box{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .sm-box{
            width:5vw;
            height:5vw;
            border:1px solid white;
            display:flex;
            align-items:center;
            justify-content:center;
            background-color:black;
        }
        .rotate{
            transform: rotate(180deg);
        }
        .rotate-90{
            transform: rotate(90deg);
        }
        i{
            color:red;
        }
        .message{
            text-align:center;
            margin-top:2rem;

        }
    </style>
</head>
<body>
    <div class="head ">
         <span>Move</span>
         <input id="inp" type="number">
         <span>Steps</span>
         <button id="btn">Walk</button>
    </div>
    <div class="bigbox">
        <div class="box">
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></i></div>
        </div>
        <div class="reversebox">
        <div class="sm-box"></i></div>
        <div class="sm-box"></div>
        <div class="sm-box"></i></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        <div class="sm-box"></div>
        </div>
    </div>
    <div class="message">
        <p id="mess"></p>
    </div>
    <script>
        let foot = '<i class="fa-solid fa-shoe-prints fa-2x"></i>'
        let footRev = '<i class="rotate fa-solid fa-shoe-prints fa-2x"></i>'
        let footRev90 = '<i class="rotate-90 fa-solid fa-shoe-prints fa-2x"></i>'
        let x = document.getElementsByClassName('sm-box');
        // console.log(x);
        steps = x.length;
        // console.log(steps)
        document.getElementById('btn').addEventListener('click', ()=>{
            console.log(getCookie("val"))
            let p = 0
            let i = (getCookie("val")==="")?'0':getCookie("val");
            i = parseInt(i);
            console.log(i);
            // let val = document.getElementById('inp').value;
            let val = (getCookie("val")==="")?parseInt(document.getElementById('inp').value):parseInt(document.getElementById('inp').value) + i;
            
            // document.cookie = `val = ${val}; expires=Thu, 10 Aug 2023 12:00:00 UTC`;
           
            if (val < 0 || val > steps){
                alert("Please enter Valid steps")
            }
          
            else{

                const handleSteps = setInterval(() => {
                    if(i>0){
                        x[i-1].innerHTML = ""
                     }
                     if (i < val && i < 10) {
                        x[i].innerHTML = foot
                        i = i + 1;
                     }
                     else if((i < val && i < 20 )){
                        if (i == 10){
                            x[i].innerHTML = footRev90
                            i = i + 1;
                        }else{
                       x[i].innerHTML = footRev
                        i = i + 1;
                        }
                       
                     }
                     else{
                        if(i < 11){
                            x[i-1].innerHTML = foot;
                            document.getElementById("mess").innerHTML = "Steps moved "+val;
                
                        }
                        else{
                            x[i-1].innerHTML = footRev;
                            document.getElementById("mess").innerHTML = "Steps moved "+val; 
                        }
                        document.cookie = `val=${val};expires=Thu, 10 Aug 2023 12:00:00 UTC`
                        clearInterval(handleSteps);
                     }     
                },1000);
            }
        })
        function getCookie(cname) {
           let name = cname + "=";
           let decodedCookie = decodeURIComponent(document.cookie);
          let ca = decodedCookie.split(';');
          for(let i = 0; i <ca.length; i++) {
          let c = ca[i];
             while (c.charAt(0) == ' ') {
           c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
    </script>
</body>
</html>