# dynamicLink
Apply PHP to eradicate default HTML static anchor tags/buttons
we use php function called shuffle()
This shuffle() receive array within 'array(...)'/'[...]'

eg: $items = ['name1','name2','name3','name4'];
-------------------------------
Watch this in reality:-
-------------------------------
    <?php
     // create links
    $computer = "<a href=\"computer.php\">"."Computer"."</a>";
    $story = "<a href=\"story.php\">"."Stories"."</a>";
    $python = "<a href=\"python.php\">"."Python"."</a>";
    $html = "<a href=\"html5.php\">"."html-5 biginners"."</a>";
    $css = "<a href=\"css.php\">"."css"."</a>";
    $javascript = "<a href=\"javascript.php\">"."Javascript"."</a>";
    $mysql = "<a href=\"mysql.php\">"."mysql"."</a>";
    $php = "<a href=\"leanphp.php\">"."php"."</a>";

        //Apply links in array
            $links = array($php,$computer,$story,$python,$html,$css,$javascript,$mysql);
            $count = count($links);
            //Apply shuffle() to make links or buttons to become dynamic
            shuffle($links);
            
            echo "<ul>";

            echo "<p class='sub-title'>";
            echo "Your title over here";
            echo "<p>";

            echo ' <div class="line"></div>';
            for($i = 0; $i < $count; $i++)
            {
              echo "<li>" . "{$links[$i]}" . "<li>";
            }
            echo "</ul>";
        ?>
