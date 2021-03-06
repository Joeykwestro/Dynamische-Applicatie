<?php  
    require('../functions/connection.php');

    $value = false;

    include('../index.php')

    $query = 'SELECT name, health, attack, defense, avatar, bio FROM characters ORDER BY name';
    $sth = $dbh->prepare($query);
    $sth->execute();
    $result = $sth->fetchAll();

    $count = 0;
    $check = false;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $result[$count]['name']; ?></h1>
    <a class="backbutton" href="../index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="../images/bowser.jpg">
            <div class="stats" style="background-color: yellowgreen">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> 10000</li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> 400</li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> 100</li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: Fire Breath</li>
                    <li><b>Armor</b>: Giant Shell</li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                Bowser or King Koopa, is a fictional character and the main antagonist of Nintendo's Mario franchise. In
                Japan, the character bears the title of Great Demon King. In the U.S., the character was first referred
                to as "Bowser, King of the Koopas" and "the sorcerer king" in the instruction manual.<br/>
                <br/>
                Bowser is the leader of the turtle-like Koopa race, and has been the archenemy of Mario since his first
                appearance, in the 1985 video game Super Mario Bros.<br/>
                <br/>
                His ultimate goals are to kidnap Princess Peach, defeat Mario, and conquer the Mushroom Kingdom. Since
                his debut, he has appeared in almost every Mario franchise game, usually serving as the main antagonist.
                Bowser is voiced by Kenny James.
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Joey Kwestro 2020</footer>
</body>
</html>

<?php } ?>