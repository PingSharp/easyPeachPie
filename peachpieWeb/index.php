<?php 

    

    include_once('Lib/FirstClass.php');

    $firstClassObj = new FirstClass();

    $firstClassObj->var1 = 1;

    $Person = "KePing Zang";
    $short = "Dot Ping";
    $items = array("Home","My HomeTown","My Pics");
    $tools = array("HTML","CSS","JavaScript","C#","PHP");
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>My Blog</title>
    <link href="StyleSheet1.css" rel="stylesheet" type="text/css"/>
    <script src="SIDENAV.js"></script>
    
</head>

<body>

    <!--<nav class="navigition">
        <a href="https://en.wikipedia.org/wiki/Guiyang" target="_blank">My Hometown</a>
        <a href="./HTMLPage3.html" target="_blank">COUNT DOWN</a>
    </nav>-->
    <div id="nav">
        <a  href="#" onclick="navopen()">MENU</a>
    
    </div>
    <div id="sidenav">
        <a class="close" href="#" onclick="navclose()">CLOSE</a>
        <ul>
            <li>
                <a href="#" target="_blank"><?php
                 echo $items[0];
                ?>
                </a>
            </li>
            <li>
                <a href="./HTMLPage1.php" target="_blank"><?php
                    echo $items[1];
                ?>
                </a>
            </li>
            <li> 
            <?php
            echo $items[2];
            ?>
            </li>

        </ul>

    </div>
    <div id="header">
        <?php
        echo "<p id=\"name\">{$Person}</p>";
        ?>
        
    </div>
    <div id="section">
        <h1><span>About Me</span></h1>
        <p>
            Hey!I am <strong>
            <?php
            echo $short;
            ?>
            </strong>.Coding has changed my world.It's not just about apps.
            learning to code gave me <i>problem-solving skills</i> and a way to communicate with others
            on a technical level.I can also develop websites and use my coding skills to get a better
            job.
        </p>
        <h1>
            <span>
                My Skills
            </span>
        </h1>
        <div style="border-top-right-radius:10px;border-bottom-right-radius:10px;border-top-left-radius:10px;border-bottom-left-radius:10px;width:260px;height:20px;background-color:aqua;position:relative;bottom:-20px;left:20px">


        </div>
        <div style="border-top-right-radius:10px;border-bottom-right-radius:10px;border-top-left-radius:10px;border-bottom-left-radius:10px;width:200px;height:20px;background-color:blue;position:absolute;color:red;text-align:center;left:20px">HTML</div>
    </div>
    <div style="border-top-right-radius:10px;border-bottom-right-radius:10px;border-top-left-radius:10px;border-bottom-left-radius:10px;width:300px;height:20px;background-color:aqua;position:relative;bottom:-20px;margin-top: 50px">


        </div>
        <div style="border-top-right-radius:10px;border-bottom-right-radius:10px;border-top-left-radius:10px;border-bottom-left-radius:10px;width:150px;height:20px;background-color:blue;position:relative;margin-top: 0px;color:red;text-align:center">CSS</div>

    <div style="border-top-right-radius:10px;border-bottom-right-radius:10px;border-top-left-radius:10px;border-bottom-left-radius:10px;width:300px;height:20px;background-color:aqua;position:relative;bottom:-20px;margin-top:30px">


        </div>
        <div style="border-top-right-radius:10px;border-bottom-right-radius:10px;border-top-left-radius:10px;border-bottom-left-radius:10px;width:280px;height:20px;background-color:blue;position:relative;margin-top: 0px;color:red;text-align:center">C#</div>
    
        <h1>
            <span>
                My Coding Schedule
            </span>
        </h1>
        <table>
            <tr>
                <th>Day</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
            </tr>
            <tr>
                <td>9-12:00</td>
                <td class="selected" colspan="5">
                    Learn
                </td>
            </tr>
            <tr>
                <td>12:00-13:00</td>
                <td class="selected" colspan="5">
                    Lunch

                </td>
            </tr>
            <tr>
                <td>13:00-15:00</td>
                <td class="selected" colspan="5">Discuss</td>
            </tr>
            <tr>
                <td>15:00-17:00</td>
                <td class="selected" colspan="5"> Code</td>
            </tr>
            <tr>
                <td>17:00-19:00</td>
                <td class="selected " colspan="5"> Dinner</td>
            </tr>
        </table>
        <h1><span>My Media</span></h1>
        <iframe width="854" height="480" src="https://www.youtube.com/embed/bTT4lmzlFuE" frameborder="0" gesture="media" allowfullscreen></iframe>
        <h1><span>Contact Me</span></h1>
        <form>
            <input name="Text1" type="text" /><br />
            <input name="email" type="email" /><br />
            <textarea name="message" cols="20" rows="2"></textarea><br />
            <input name="Submit" class="Submit1" type="submit" value="Send" />
        </form>
    </div>

    

</body>
</html>