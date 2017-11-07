<?php
    $items = array("Home","My HomeTown","My Pics");
    $city = "GuiYang";
    $Attractions =array("Qingyan Ancient Town","Qianling Mountain","Huangguoshu-Wasserfall","Jiaxiu Tower","Red Maple Lake Scenic Area (Hongfeng Lake)");
    $Snacks = array("Si Wa Wa (Sliced Vegetable Baby)","Chang Wang Mian (Chang Wang Noodle)","LianAi Doufu Guo (The Bean Curd in Love)","Beef Rice Noodles");
    ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>My Hometown</title>
    <link href="StyleSheet1.css" rel="stylesheet" type="text/css"/>
    <script src="SIDENAV.js"></script>
    
</head>
<body>
    <div id="nav">
        <a  href="#" onclick="navopen()">MENU</a>
    
    </div>
    <div id="sidenav">
        <a class="close" href="#" onclick="navclose()">CLOSE</a>
        <ul>
            <li>
                <a href="./index.php" target="_blank"><?php
                 echo $items[0];
                ?>
                </a>
            </li>
            <li>
                <a href="#" target="_blank"><?php
                    echo $items[1];
                ?></a>
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
        echo "<p id=\"name\">{$city}</p>";
        ?>
        
    </div>
    <div id="section">
        <h1><span>About My City</span></h1>
        <p>
           <strong> Guiyang</strong> is the <i>capital</i> of <strong>Guizhou</strong> province of Southwest China.
            It is located in the center of the province, situated on the east of the Yunnan–Guizhou Plateau,
            and on the north bank of the Nanming River, a branch of the Wu River. 
            The city has an elevation of about 1,100 meters (3,600 ft). It has an area of 8,034 square kilometers 
            (3,102 sq mi). During the 2010 census, its population was 4,324,561, out of whom 3,037,159 lived in the 7 urban districts.
            <a href="https://en.wikipedia.org/wiki/Guiyang">read more</a>
        </p>
        <h1>
            <span>
                Attractions
            </span>
        </h1>
        <table border="0" style="border-style:none">

               <tr>
                   <td style="background-image:url(http://www.chinadaily.com.cn/m/guizhou/images/attachement/jpg/site1/20130708/001ec94dfbee1344e1040e.jpg);width:500px;height:300px;border-style:double;border-color:aqua;margin-top: 100px;" >
                   
                   </td>
                   <td style="text-align:left;font-size:x-large;color:black;border-style:none">
                        QingYan Ancient Town: Qingyan Ancient Town,
                       one of the most famous historical and cultural towns in Guizhou Province,
                       lies in the southern suburb of Guiyang. As an ancient town,
                       covering an area of 741 acres, Qingyan Town was originally built in 1378. Nowadays, 
                       because of its long history and strong cultural atmosphere,
                       the town has become an attractive destination for numerous domestic and foreign tourists.
                   </td>
               </tr>
                <tr>
                    <td style="background-image:url(https://us.123rf.com/450wm/sepavo/sepavo1503/sepavo150300055/37659867-hongfu-temple-on-qianling-hill-in-guiyang-china.jpg?ver=6);width:500px;height:300px;background-size:cover;border-style:double;border-color:aqua;margin-top: 100px;">

                    </td>
                    <td style="text-align:left;font-size:x-large;color:black;border-style:none">
                        Qianling Hill Park:
                       Situated on Qianling Hill 1.5 kilometers (0.9 miles) from the center of Guiyang City,
                        Qianling Hill Park covers an area of 426 hectares (1052.7 acres). First built in 1957,
                        it is a uniquely large park in the city proper and a 4A National Tourist Attraction. 
                        The name was derived from the Qianling Mountain that lies in the park, 
                        which is the most famous mountain in southern Guizhou. As one of the noted gardens on the Guizhou plateau,
                        it boasts clear waters, green mountains, tranquil forests and old temples. 
                        There are eight predominant scenic locations: Sanlingwan, Macaque Garden, Hongfu Temple, 
                        Kylin Cave, the Zoo, Qianling Lake, Two-Dam Wind-Rain Bridge, and the Winding Mountain Path.
                    </td>
                </tr>
                <tr>
                    <td style="background-image:url(https://www.china-reisen.de/fileadmin/images/reisekonfigurator/bilder_reisebausteine_636_x_416/china_636x416/guizhou/Anshun_-_Huangguoshu_Wasserfall.jpg);width:500px;height:300px;background-size:cover;border-style:double;border-color:aqua;margin-top: 100px;">

                    </td>
                    <td style="text-align:left;font-size:x-large;color:black;border-style:none">
                        Huangguoshu Waterfall :
                        Huangguoshu Waterfall, a milky way in miniature,
                        is the largest waterfall in Asia. Seventy-four meters (243 feet) high 
                        and eighty-one meters (266 feet) wide, it is a scenic marvel in Anshun. 
                        Do not miss it if you are in Guizhou Province.


                    </td>
                </tr>
               <tr>
                   <td style="background-image:url(http://www.asiaculturaltravel.co.uk/wp-content/uploads/2015/07/Jiaxiu-Lou.jpg);width:500px;height:300px;background-size:cover;border-style:double;border-color:aqua;margin-top: 100px;">

                   </td>
                   <td style="text-align:left;font-size:x-large;color: black;border-style:none">
                        Jiaxiu Tower:
                       situated in downtown Guiyang in Guizhou Province, 
                       is a grand wooden tower built on a huge turtle-shaped rock on Nanming River. 
                       Initially built in the Ming Dynasty (1368 - 1644), the tower has been renovated for six times.
                       It used to be one of Eight Great Sights in Guiyang. Now regarded as a landmark and a cultural symbol of Guiyang,
                       it should certainly be included in your plan.
                   </td>
               </tr>
                <tr>
                    <td style="background-image:url(http://www.chinauniquetour.com/seradmin/htmledit/uploadfile/20110212/20110212165037226.jpg);width:500px;height:300px;background-size:cover;border-style:double;border-color:aqua;margin-top: 100px;">

                    </td> 
                    <td style="text-align:left;font-size:x-large;color: black;border-style:none">
                        Red Maple Lake Scenic Area (Hongfeng Lake)
                     Located about 32 kilometers (20 miles) west of Guiyang is the Red Maple Lake (Hongfeng Lake).
                        It is considered to be the pearl of the Guizhou Plateau, 
                        and is the most fascinating among the three lakes in this part of Guizhou.
                        The other two are Baihua Lake and Dongfeng (East Wind) Lake.
                    </td>
                </tr>
            
        </table>    
       
        <h1>
            <span>
                 Snacks in my hometown
            </span>
        </h1>
        <table style="border-style:none">

               <tr>
                   <td style="background-image:url(http://e6tc.com/wp-content/uploads/2016/02/sww.jpg);width:500px;height:300px;border-style:double;border-color:aqua;margin-top: 100px;" >
                   
                   </td>
                   <td style="text-align:left;font-size:x-large;color:black;border-style:none">
                        Si Wa Wa (Sliced Vegetable Baby):
                       could well be the cheapest local snack. 
                       It literarily means the Baby because it takes the shape of a baby in swaddling clothes.
                       Actually it is a thin cake made of flour and stuffed with various sliced cooked vegetables 
                       such as the carrot, radish, celerie and other vegetables. Sour and spicy juices are necessities 
                       when tasting the Si Wa Wa.
                   </td>
               </tr>
                <tr>
                    <td style="background-image:url(http://www.gywb.com.cn/zhuanti/attachement/jpg/site2/20140618/005056c00001150b3f9b13.jpg);width:500px;height:300px;background-size:cover;border-style:double;border-color:aqua;margin-top: 100px;">

                    </td>
                    <td style="text-align:left;font-size:x-large;color:black;border-style:none">
                        Chang Wang Mian (Chang Wang Noodle) :
                        could be the most popular snack in the city.
                        The name of Chang Wang implies auspiciousness. With a long history of more than 100 years,
                        Chang Wang Noodle has been highly-praised by the local people.
                    </td>
                </tr>
                <tr>
                    <td style="background-image:url(http://www.kedo.gov.cn/upload/resources/image/2015/04/03/69799.jpg);width:500px;height:300px;background-size:cover;border-style:double;border-color:aqua;margin-top: 100px;">

                    </td>
                    <td style="text-align:left;font-size:x-large;color:black;border-style: none">
                       Lian'ai Doufu Guo (The Bean Curd in Love):
                        is another famous Guiyang snack. It has an interesting name 
                        and also an interesting method of preparation that is to cut a piece of bean curd horizontally,
                        fill it with vegetables and sliced meat,
                        then to toast the bean curd until it turns golden and then sprinkle with sesame oil and other condiments.
                        The finished bean curd tastes excellent! As for its interesting name,
                        it is told that lovers often share the bean curd with each other, which add romance to the food; hence the name.
                        Locals have this snack together with the soy sauce, vinegar, pepper and shallot.

                    </td>
                </tr>
               <tr>
                   <td style="background-image:url(http://img03.cct88588.com/upload/images/news/14/03/10/139443435504456052.jpg);width:500px;height:300px;background-size:cover;border-style:double;border-color:aqua;margin-top: 100px;">

                   </td>
                   <td style="text-align:left;font-size:x-large;color: black;border-style:none">
                        The Huaxi Beef Rice Noodles are named after the area of Huaxi where it originated. 
                       The dish is very unique and quite complicated to create.
                       The dish is basically rice noodles in a broth, but it is much more than just that. It is spicy,
                       and sour in taste. It is made from diced beef, handmade rice noodles, coriander, Chinese prickly ash, 
                       hot peppers, pickled cabbage and ginger. The pickled cabbage adds the sour taste to the dish and many 
                       locals like to add sesame oil or spicy oil to the broth before eating it.
                   </td>
               </tr>
               
            
        </table>    
        <h1><span>My Media</span></h1>
        
        <iframe width="854" height="480" src="https://www.youtube.com/embed/qgpwMogcuKY" frameborder="0" gesture="media" allowfullscreen></iframe>
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