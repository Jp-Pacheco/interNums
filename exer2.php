<?php
$n = $_POST['n'];
echo "<body 
    style=
    'background-color: rgb(255, 0, 0); 
     '>";
echo "<div 
    style=
    'background-color: #c0d860; 
     border:1px solid blue;
     width:500px;
     height:auto;
     margin:50px auto;'>";

for ($i = 1; $i <= $n; $i++) {

    
    if ($i % 2 == 0) {
//css inline
        echo "<p 
           style=
           'color:black;
           background-color: rgb(255, 200, 23); 
            border:1px solid blue;
            width:200px;
            padding:10px;
            text-align:center;
            margin:8px auto;'> $i <br> </p>";
    } else {
        echo "<p 
        style=
        'color:black;
        background-color: #789048; 
         border:1px solid blue;
         width:200px;
         padding:10px;
         text-align:center;
         margin:2px auto;'> $i <br> </p>";
    }
}
echo"<a href='index.php'> Voltar </a>";
echo "</div>";
echo"</body>";