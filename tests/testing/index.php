<html>
    <head>
        <meta charset="utf-8">
        
        <title>Page Title</title>

        <style>

        body{
            background: #fcf;
        }

        #quest{
            font-size: 24px;
            font-style: bold;
        }

        .ans_button{
            background-color: #cf0;
            font-size: 16px;
            border: 2px solid #FFFF00;
            cursor: pointer;
        }

        </style>
        
        <script>

            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
                    vars[key] = value;
                });
                return vars;
            }

            function getQuestionByNum(numb){
                var ans = 'Вопрос №' + numb;
                return ans;
            }
            
            function onloadfunc(){
                if(getUrlVars()['finish'] != undefined){
                    var ok = Number(getUrlVars()['ok']);
                    var bad = Number(getUrlVars()['bad']);
                    if((ok * 100) / (ok + bad) >= 80){
                        alert("Вы успешно прошли тест и ответили правильно на " + ok + "/" + (ok + bad) + " вопросов");
                    }else
                        alert("Попробуйте еще раз");
                    window.location = "index.php?cur=1&ok=0&bad=0";
                }
                
                document.getElementById('quest').innerHTML = getQuestionByNum(getUrlVars()['cur']);
            }

            function first(){
                window.location = "index.php?cur=" + getUrlVars()['cur'] + "&ans=1&ok=" + getUrlVars()['ok'] + "&bad=" + getUrlVars()['bad'];
            }

            function second(){
                window.location = "index.php?cur=" + getUrlVars()['cur'] + "&ans=2&ok=" + getUrlVars()['ok'] + "&bad=" + getUrlVars()['bad'];
            }

            function third(){
                window.location = "index.php?cur=" + getUrlVars()['cur'] + "&ans=3&ok=" + getUrlVars()['ok'] + "&bad=" + getUrlVars()['bad'];
            }

            function fourth(){
                window.location = "index.php?cur=" + getUrlVars()['cur'] + "&ans=4&ok=" + getUrlVars()['ok'] + "&bad=" + getUrlVars()['bad'];
            }

        </script>

    </head>

    <body align = 'center' onload = 'onloadfunc()'>
        
        <p id = 'quest'> Вопрос </p>

        <div id = 'answers'>
            <button class = "ans_button" id = 'a' onclick = 'first()'> Вариант 1 </button>
            <button class = "ans_button" id = 'b' onclick = 'second()'> Вариант 2 </button>
            <button class = "ans_button" id = 'c' onclick = 'third()'> Вариант 3 </button>
            <button class = "ans_button" id = 'd' onclick = 'fourth()'> Вариант 4 </button>  
        </div>

    </body>

</html>

<?php
    if(isset($_GET['ans'])){
        $cur = $_GET['cur'];
        $ok = $_GET['ok'];
        $bad = $_GET['bad'];
        $ok += isCorrect($_GET['ans'], $cur);
        $bad += 1 - isCorrect($_GET['ans'], $cur);
        $cur++;

        if($cur > 10){
            echo "<script> window.location = 'index.php?finish=true&ok=$ok&bad=$bad' </script>";
        }

        //Bad code:
        echo "<script> window.location = 'index.php?cur=$cur&ok=$ok&bad=$bad' </script>";
    }

    function isCorrect($ans, $number){
        return true;
    }
?>