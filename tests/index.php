<meta charset="utf-8">

<html>
    <head>
    
        <title> Site with some tests </title>

        <script>
            function on_load_func(){
                /* */
            }

            function go_next(){
                window.location = "testing/index.php?cur=1&ok=0&bad=0";
            }
        </script>

        <style>
            #info{
                width: 200px; 
                background: #fc0; 
                padding: 10x;
                border: solid 1px black;
                text-align: center; 
                margin: auto;
            }

            #btn{
                width: 300px;
                height: 50px;
                background-color: #cf0;
                font-size: 16px;
                border: 2px solid #FFFF00;
                cursor: pointer;
                margin: 100px auto;
            }
        </style>

    </head>

    <body bgcolor="#FF00FF" onload = "on_load_func()">
        <div id = "info">
            <p> Прочитайте предложенный текст и пройдите тест </p>
            <a href = 'download.php?file=info.txt'> Скачать текст </a>
        </div>

        <div align = "center" >
            <button id = "btn" onclick = 'go_next()'> Перейти к тесту </button>
        </div>

    </body>
</html>

<?php
      
?>