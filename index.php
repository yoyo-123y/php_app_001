
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Challange</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .mainCont {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(144, 124, 235, 1);
        }

        h1 {
            color: rgba(229, 255, 0, 1);
            font-size: 30px;
            
        }

        .subCont {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            height: 100%;
            flex-direction: column;
        
        }

        .countPlace {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
            flex-direction: row;
            flex-wrap: wrap;
            width: 50%;
        }
        .textPlace {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
            flex-direction: column;
            flex-wrap: wrap;
            width: 50%;
        }
        p {
            color: rgba(229, 255, 0, 1);
            font-size: 25px;
        }
        .mainSub{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 17, 255, 1);
            width: 90%;
            height: 90%;
            border-radius: 10px;
            position: relative;

        }
        .button{
            color: rgba(229, 255, 0, 1);
            font-size: 60px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .hidden{
            display: none;
        }
        .optionListBox{
            position: absolute;
            right: 20px;
            top: 20px;
            width: 50px;
            height: 50px;
            border-radius: 5px;
            z-index: 10;
            background-color: rgba(144, 124, 235, 1);
            cursor: pointer;
            color: rgba(229, 255, 0, 1);
            font-size: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="mainCont">
        <div class="mainSub">
            <div class="optionListBox fa fa-bars"></div>
            <div class="button fa fa-caret-left" onclick="button(1)"></div>
            <div class="subCont" id="cont1">
                <h1>Count from 1 to 100</h1>
                <div class="countPlace">
                    <?php
                    for ($i = 1; $i <= 100; $i++) {
                        echo "<p>$i</p>";
                    }
                    ?>
                </div>
            </div>
            <div class="subCont" id="cont2">
                <h1>Count from 100 to 1</h1>
                <div class="countPlace">
                    <?php
                    for ($i = 100; $i >= 1; $i--) {
                        echo "<p>$i</p>";
                    }
                    ?>
                </div>
            </div>
            <div class="subCont" id="cont3">
                <h1>Count from 1 to 100 only even</h1>
                <div class="countPlace">
                    <?php
                    for ($i = 2; $i <= 100; $i+=2) {
                        echo "<p>$i</p>";
                    }
                    ?>
                </div>
            </div>
            <div class="subCont" id="cont4">
                <h1>Count from 1 to 100 only odd</h1>
                <div class="countPlace">
                    <?php
                    for ($i = 1; $i <= 100; $i+=2) {
                        echo "<p>$i</p>";
                    }
                    ?>
                </div>
            </div>
            <div class="subCont" id="cont5">
                <h1>sum of numbers from 1 to 100</h1>
                <div class="countPlace">
                    <?php
                    $sum = 0;
                    for ($i = 1; $i <= 100; $i++) {
                        $sum += $i;
                    }
                    echo "<p>The sum is $sum</p>";
                    ?>
                </div>
            </div>
            <div class="subCont" id="cont6">
                <h1>The product of numbers from 1 to 100</h1>
                <div class="countPlace">
                    <?php
                    $pro = 1;
                    for ($i = 1; $i <= 100; $i++) {
                        $pro *= $i;
                    }
                    echo "<p>The product of them is $pro</p>";
                    ?>
                </div>
            </div>
            <div class="subCont" id="cont7">
                <h1>Print the username uppercase</h1>
                <div class="textPlace">
                    <?php
                    $userName="hello world";
                    echo "<p>The original username is $userName</p>";
                    $u_userName=strtoupper(trim($userName));
                    echo "<p>The uppercased username is $u_userName</p>";
                    ?>
                </div>
            </div>
            <div class="subCont" id="cont8">
                <h1>Print the first 3 digits of a username</h1>
                <div class="textPlace">
                    <?php
                    echo "<p>The original username is $userName</p>";
                    $s_userName=substr(trim($userName),0,3);
                    echo "<p>The substred username is $s_userName</p>";
                    ?>
                </div>
            </div>
            <div class="subCont" id="cont9">
                <h1>Find the letter a in the <?=$userName;?></h1>
                <div class="textPlace">
                    <?php
                    $l_userName=strtolower(trim($userName));
                    $r_9=strpos($l_userName,"a");
                    if($r_9===false) {
                        echo "<p>The letter is not found</p>";
                    }else{
                        echo "<p>The letter is found at index $r_9</p>";
                    }
                    ?>
                </div>
            </div>
            <div class="subCont" id="cont10">
                <h1>Replace every space with -</h1>
                <div class="textPlace">
                    <?php
                    $r_userName=str_replace(" ","-",trim($userName));
                    echo "<p>The original username is $userName</p>";
                    echo "<p>The replaced username is $r_userName</p>";
                    ?>
                </div>
            </div>
            <div class="button fa fa-caret-right" onclick="button(2)"></div>
        </div>
    </div>
    <script>
        let numOfSlides=10
        let choosenOne=1
        function button(dir){
            if(dir===1){
               if ((choosenOne-1)<1) {
                    choosenOne=numOfSlides
               }else{
                    choosenOne--
               }
            }else{
                if ((choosenOne+1)>numOfSlides) {
                    choosenOne=1
               } else{
                choosenOne++
               }
            }
            selectChoosen(choosenOne)
        }
        function selectChoosen(id){
            for(let i=1;i<=numOfSlides;i++){
                let item=document.getElementById("cont"+i)
                if(i===id){
                    item.classList.remove("hidden")
                }else{
                    item.classList.add("hidden")
                }
            }
        }
        selectChoosen(1)
    </script>
</body>

</html>