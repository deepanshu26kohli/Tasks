<?php
session_start();




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            /* background-color:red; */
            display : flex;
            align-items:center;
            justify-content: space-around;
            width: 50vw;
            margin:auto;
        }
        span{
            font-size: 2rem;
        }
        #box-img{
            /* border: 1px solid blue; */
           height:300px;
           width:300px;
           margin: 5rem auto;
        }
        .imgs{
            cursor:pointer;
        }
        
    </style>
</head>
<body>
    <div class="box"> <span><</span>
    <?php 
    if(isset($_SESSION["filename"])){
    foreach($_SESSION["filename"] as $file ){
    ?>
    <img class="imgs" src="<?php echo "Upload/" . $file;   ?>" alt="" width="100" height="100">
<?php 
}
} ?>
<span>></span>
    </div> 
<div id="box-img">

</div>

<script>
    let x = document.getElementsByTagName('img');
    for (let i = 0; i < x.length; i++) {
    x[i].addEventListener("click", () => {
        for(let p=0; p < x.length; p++) {
        x[p].style.border = "";
    }
        x[i].style.border = "5px solid red";
        let imgsrc = x[i].getAttribute("src");
        document.getElementById("box-img").innerHTML = `<img src=${imgsrc} width=300 height=300>`
}
    );
}
</script>
</body>
</html>