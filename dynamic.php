<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICT</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1));
        }
        ul{
            list-style-type: none;
            padding: 0 10px;
        }
        ul li{
            /* padding: 0.3rem; */
            margin-bottom: 19px;
            width: 360px;
        }
        li{
            background-color: blueviolet;
          text-align: center;
          transition: all 0.2s linear 0.2s;
        }
        li:hover{
            background: #fff;
            color: #000;
            border-radius: 8px;
            transform: translateX(10px);
            width: 350px;
           box-shadow: 7px 8px 5px 8px rgba(0,0,0,0.2);
        }

        .container{
            padding: 10px 10px;
           height: auto;
           display: flex;
           justify-content: center;
           align-items: center;
           background-color: #fff;
           width: 360px;
           margin: 200px auto;
           box-shadow: 7px 8px 5px 8px rgba(0,0,0,0.37);
        }
        li a{
            text-decoration: none;
            text-transform:uppercase;
            letter-spacing: 3px;
            color: #000;
            padding: 10px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .line{
            height: 5px;
            background: linear-gradient(to left, blue,red,blue);
            margin-bottom: 19px;
        }
        .sub-title{
            text-align: center;
            font-size: 20px;
            color:orange;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php
    // create links
    $computer = "<a href=\"computer.php\">"."Computer"."</a>";
    $story = "<a href=\"hadithi.php\">"."Simulizi"."</a>";
    $python = "<a href=\"python.php\">"."Python"."</a>";
    $html = "<a href=\"html5.php\">"."html-5 biginners"."</a>";
    $css = "<a href=\"css.php\">"."css"."</a>";
    $javascript = "<a href=\"javascript.php\">"."Javascript"."</a>";
    $mysql = "<a href=\"mysql.php\">"."mysql"."</a>";
    $php = "<a href=\"leanphp.php\">"."php"."</a>";

    ?>
    <div class="container">
       
        <?php
        //Weka link kwenye array
            $links = array($php,$computer,$story,$python,$html,$css,$javascript,$mysql);
            $idadi = count($links);
            shuffle($links);
            
            echo "<ul>";

            echo "<p class='sub-title'>";
            echo "Mafunzo ya ict";
            echo "<p>";

            echo ' <div class="line"></div>';
            for($i = 0; $i < $idadi; $i++)
            {
              echo "<li>" . "{$links[$i]}" . "<li>";
            }
            echo "</ul>";
        ?>
    </div>
</body>
</html>
