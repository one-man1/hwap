<!DOCTYPE html>
<html>
<head>
    <style>
       html {
        background-color: grey;
        }
       header{background: rgba(63,18,2,0.95);
       padding: 1em;
       font-style: normal;
       text-align: left;
           border-bottom: solid;
           border-color: black;
           font-family: "Gujarati Sangam MN";
       }
       header:hover{background: black;
           border-color: darkred}
        h1{color: azure;
        font-style: normal;
            padding: 10px;
          margin-right: auto;


        }
        ul{ list-style: none;
text-align: center;
            align-items:center;
            color: white;
            padding: 1em;
        }
        li{
            background: white;
            padding: 5px;
            border-bottom: solid;
            border-bottom-color: black;
        }
        .footer{ position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
            font-size: larger;
            padding: = 15px;
         font-style: italic;
        background-color: black  ;
        text-align: center;}
        h2{color: maroon;}
        li:hover{background: cornsilk;
            border-bottom-color: darkred;

        }
        h1:hover{color: darkred;}
        h2:hover{color: black;}
div{color: white;}


    </style>
    <title>Animals:-  </title>
    <meta charset="UTF-8">
</head>
<body>
<header >

    <h1>Array of Animals :- </h1>

</header>
<br>


<ul>

   <?php
foreach ($animails as $animail){
    echo "<li><h2><hover> $animail</hover> </h2></li><br>";
}
?>
</ul>
<div class="footer"> @ Copyright Hour with a programmer group</div>
</body>
</html>