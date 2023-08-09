<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
           text-align : center;
        }
        .colorForm{
            /* border:2px solid black; */
            text-align : center;
            display:flex;
            flex-direction : column;
            align-items : center;
            width:15vw;
            margin: 5rem auto;
        }
        .colorForm input{
            margin: .4rem
        }
        .colorForm select{
            width:11vw;
            margin: .4rem
        }
    </style>
</head>
<body>
    <div class="box">
    <span>How many colors you want to send? </span>
    <input type="number" id="numberOfColors" >
    <button id="btn">Submit</button>
    </div>
    <form action="/LearnPHP/ColorTaskView.php" method="post" class="colorForm" id="colorInputForm">

    </form>
<script>
    document.getElementById("btn").addEventListener("click", ()=>{
        let numberOfColors = document.getElementById("numberOfColors").value
        if(numberOfColors > 0){
          for(let i = 0; i < numberOfColors; i++){
            let colInpBox = document.createElement("input")
            colInpBox.type = 'text';
            colInpBox.placeholder = `Color ${i+1}`
            colInpBox.name = `color${i+1}`
            colorInputForm.appendChild(colInpBox);
          }
          let gender = document.createElement("select")
          var genderOption = document.createElement("option");
          genderOption.value = "";
          genderOption.text = "Select Gender";
          var maleOption = document.createElement("option");
          maleOption.value = "male";
          maleOption.text = "Male";
          var femaleOption = document.createElement("option");
          femaleOption.value = "female";
          femaleOption.text = "Female";
          gender.append(genderOption);
          gender.appendChild(maleOption);
          gender.appendChild(femaleOption);
          let name = document.createElement("input")
          let submit = document.createElement("input")
          name.type = "text";
          name.placeholder = "Name";
          name.name = "name";
          gender.name = "name";
          submit.type = "submit";
          colorInputForm.appendChild(gender);
          colorInputForm.appendChild(name);
          colorInputForm.appendChild(submit);
        }
        else{
            alert("Please fill valid number of colors")
        }
    })
</script>
</body>
</html>