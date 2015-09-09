Rotoworld News
===

Easily grab information from Rotoworld's news site. An example usage of this package would be to populate a database that powers a service for news.

**Usage**

*Using composer*

This package is set up to be required via [Composer](http://getcomposer.org/), for example:

    {
        "require": {
            "mgargano/rotoworld": "~0.2.2"
        }
    }

*Note*
The times for news articles default to America/New_York

*PHP example*

    <?php
    
    require 'vendor/autoload.php';
    $news = new Rotoworld\Rotoworld;
    echo '<PRE>';
    var_dump( $news->get() ); //defaults to MLB
    echo '</PRE>';

This can return:

    array(8) {
      [0]=>
      object(Rotoworld\RotoworldNews)#5350 (8) {
        ["player":protected]=>
        object(Rotoworld\RotoworldPlayer)#5349 (5) {
          ["name":protected]=>
          string(14) "Nick Greenwood"
          ["slug":protected]=>
          string(14) "nick-greenwood"
          ["id":protected]=>
          string(4) "6431"
          ["position":protected]=>
          string(1) "R"
          ["team":protected]=>
          string(9) "Cardinals"
        }
        ["report":protected]=>
        string(55) "Cardinals designated LHP Nick Greenwood for assignment."
        ["impact":protected]=>
        string(116) "Greenwood holds a 5.25 ERA over 20 appearances the last two season with the Cardinals. He's likely to clear waivers."
        ["sourceURL":protected]=>
        NULL
        ["sourceName":protected]=>
        NULL
        ["date":protected]=>
        int(1441815660)
        ["relatedPlayers":protected]=>
        NULL
        ["sport":protected]=>
        string(3) "mlb"
      }
      [1]=>
      object(Rotoworld\RotoworldNews)#5352 (8) {
        ["player":protected]=>
        object(Rotoworld\RotoworldPlayer)#5351 (5) {
          ["name":protected]=>
          string(10) "Matt Adams"
          ["slug":protected]=>
          string(10) "matt-adams"
          ["id":protected]=>
          string(4) "6591"
          ["position":protected]=>
          string(2) "1B"
          ["team":protected]=>
          string(9) "Cardinals"
        }
        ["report":protected]=>
        string(64) "Cardinals activated 1B Matt Adams from the 60-day disabled list."
        ["impact":protected]=>
        string(256) "When Adams might be ready to play the field remains to be seen, but he should be able to serve at least as a pinch-hitter for the Cards immediately. The big first baseman has been out since late May after undergoing surgery to repair a Grade 3 quad strain."
        ["sourceURL":protected]=>
        NULL
        ["sourceName":protected]=>
        NULL
        ["date":protected]=>
        int(1441815540)
        ["relatedPlayers":protected]=>
        NULL
        ["sport":protected]=>
        string(3) "mlb"
      }
      [2]=>
      object(Rotoworld\RotoworldNews)#5356 (8) {
        ["player":protected]=>
        object(Rotoworld\RotoworldPlayer)#5354 (5) {
          ["name":protected]=>
          string(11) "Kolten Wong"
          ["slug":protected]=>
          string(11) "kolten-wong"
          ["id":protected]=>
          string(4) "6738"
          ["position":protected]=>
          string(2) "2B"
          ["team":protected]=>
          string(9) "Cardinals"
        }
        ["report":protected]=>
        string(67) "Kolten Wong (calf) remained out of the Cardinals' lineup Wednesday."
        ["impact":protected]=>
        string(198) "He hasn't started the last three games due to tightness in his left calf, although he was able to pinch-hit Monday. Matt Carpenter is at second base and Mark Reynolds is at third again on Wednesday."
        ["sourceURL":protected]=>
        string(41) "http://www.rotoworld.com/mlb/dailyLineups"
        ["sourceName":protected]=>
        string(23) "Rotoworld Daily Lineups"
        ["date":protected]=>
        int(1441809660)
        ["relatedPlayers":protected]=>
        array(1) {
          [0]=>
          object(Rotoworld\RotoworldPlayer)#5355 (5) {
            ["name":protected]=>
            string(13) "Mark Reynolds"
            ["slug":protected]=>
            string(13) "mark-reynolds"
            ["id":protected]=>
            string(4) "4649"
            ["position":protected]=>
            NULL
            ["team":protected]=>
            NULL
          }
        }
        ["sport":protected]=>
        string(3) "mlb"
      }
      [3]=>
      object(Rotoworld\RotoworldNews)#5357 (8) {
        ["player":protected]=>
        object(Rotoworld\RotoworldPlayer)#5348 (5) {
          ["name":protected]=>
          string(14) "Randal Grichuk"
          ["slug":protected]=>
          string(14) "randal-grichuk"
          ["id":protected]=>
          string(4) "5986"
          ["position":protected]=>
          string(2) "OF"
          ["team":protected]=>
          string(9) "Cardinals"
        }
        ["report":protected]=>
        string(66) "Randal Grichuk (elbow) is back in the Cardinals' lineup Wednesday."
        ["impact":protected]=>
        string(268) "The feeling had been that it would be a while before he could play the field again, but obviously that's not the case. Grichuk hit a pinch-hit homer on Tuesday and his elbow evidently feels well enough that he can handle center field. He's hitting fifth for the Cards."
        ["sourceURL":protected]=>
        string(41) "http://www.rotoworld.com/mlb/dailyLineups"
        ["sourceName":protected]=>
        string(23) "Rotoworld Daily Lineups"
        ["date":protected]=>
        int(1441809540)
        ["relatedPlayers":protected]=>
        NULL
        ["sport":protected]=>
        string(3) "mlb"
      }
      [4]=>
      object(Rotoworld\RotoworldNews)#5359 (8) {
        ["player":protected]=>
        object(Rotoworld\RotoworldPlayer)#5358 (5) {
          ["name":protected]=>
          string(18) "Franklin Gutierrez"
          ["slug":protected]=>
          string(18) "franklin-gutierrez"
          ["id":protected]=>
          string(4) "1229"
          ["position":protected]=>
          string(2) "OF"
          ["team":protected]=>
          string(8) "Mariners"
        }
        ["report":protected]=>
        string(108) "Franklin Gutierrez's groin injury stems from his chronic joint issue that he's battled the last few seasons."
        ["impact":protected]=>
        string(312) "The ailment had previously been described as a strained right groin muscle, but it's actually related to his ankylosing spondylitis condition. He hasn't played since last Friday and remains day-to-day. Gutierrez has been a nice surprise this season with a .313/.364/.641 batting line and 11 homers over 45 games."
        ["sourceURL":protected]=>
        string(78) "http://www.thenewstribune.com/sports/mlb/seattle-mariners/article34419492.html"
        ["sourceName":protected]=>
        string(19) "Tacoma News Tribune"
        ["date":protected]=>
        int(1441808400)
        ["relatedPlayers":protected]=>
        NULL
        ["sport":protected]=>
        string(3) "mlb"
      }
      [5]=>
      object(Rotoworld\RotoworldNews)#5363 (8) {
        ["player":protected]=>
        object(Rotoworld\RotoworldPlayer)#5361 (5) {
          ["name":protected]=>
          string(11) "Kris Bryant"
          ["slug":protected]=>
          string(11) "kris-bryant"
          ["id":protected]=>
          string(4) "7248"
          ["position":protected]=>
          string(2) "3B"
          ["team":protected]=>
          string(4) "Cubs"
        }
        ["report":protected]=>
        string(49) "Kris Bryant is not in the Cubs' lineup Wednesday."
        ["impact":protected]=>
        string(83) "It's a routine day off. The Cubs have Javier Baez at third base while Bryant rests."
        ["sourceURL":protected]=>
        string(41) "http://www.rotoworld.com/mlb/dailyLineups"
        ["sourceName":protected]=>
        string(23) "Rotoworld Daily Lineups"
        ["date":protected]=>
        int(1441808160)
        ["relatedPlayers":protected]=>
        array(1) {
          [0]=>
          object(Rotoworld\RotoworldPlayer)#5362 (5) {
            ["name":protected]=>
            string(11) "Javier Baez"
            ["slug":protected]=>
            string(11) "javier-baez"
            ["id":protected]=>
            string(4) "6741"
            ["position":protected]=>
            NULL
            ["team":protected]=>
            NULL
          }
        }
        ["sport":protected]=>
        string(3) "mlb"
      }
      [6]=>
      object(Rotoworld\RotoworldNews)#5364 (8) {
        ["player":protected]=>
        object(Rotoworld\RotoworldPlayer)#5353 (5) {
          ["name":protected]=>
          string(14) "Kyle Schwarber"
          ["slug":protected]=>
          string(14) "kyle-schwarber"
          ["id":protected]=>
          string(4) "7848"
          ["position":protected]=>
          string(2) "OF"
          ["team":protected]=>
          string(4) "Cubs"
        }
        ["report":protected]=>
        string(60) "Kyle Schwarber (ribs) is back in the Cubs' lineup Wednesday."
        ["impact":protected]=>
        string(197) "It's his first start since he suffered a strain in his right rib cage last week, although Schwarber was able to pinch-hit on Tuesday. The rookie is in left field and batting second for the Cubbies."
        ["sourceURL":protected]=>
        string(41) "http://www.rotoworld.com/mlb/dailyLineups"
        ["sourceName":protected]=>
        string(23) "Rotoworld Daily Lineups"
        ["date":protected]=>
        int(1441808100)
        ["relatedPlayers":protected]=>
        NULL
        ["sport":protected]=>
        string(3) "mlb"
      }
      [7]=>
      object(Rotoworld\RotoworldNews)#5366 (8) {
        ["player":protected]=>
        object(Rotoworld\RotoworldPlayer)#5365 (5) {
          ["name":protected]=>
          string(11) "CC Sabathia"
          ["slug":protected]=>
          string(11) "cc-sabathia"
          ["id":protected]=>
          string(4) "3149"
          ["position":protected]=>
          string(1) "S"
          ["team":protected]=>
          string(7) "Yankees"
        }
        ["report":protected]=>
        string(64) "Yankees activated LHP CC Sabathia from the 15-day disabled list."
        ["impact":protected]=>
        string(271) "Sabathia is slated to start Wednesday's game versus the Orioles. The big left-hander has missed the last couple weeks with an arthritic right knee and will likely have to pitch through some pain for the remainder of the season. He holds a 5.27 ERA over 24 starts in 2015."
        ["sourceURL":protected]=>
        NULL
        ["sourceName":protected]=>
        NULL
        ["date":protected]=>
        int(1441807860)
        ["relatedPlayers":protected]=>
        NULL
        ["sport":protected]=>
        string(3) "mlb"
      }
    }
    
**DISCLAIMER**
The information obtained with this package are the intellectual property of Rotoworld.com and NBCSports. This is to be used for educational purposes and you should consult with Rotoworld.com or NBC Sports if you are going to use this or information obtained with this anyhow and anywhere.

