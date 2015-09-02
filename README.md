Rotoworld News
===

Easily grab information from Rotoworld's news site. An example usage of this package would be to populate a database that powers a service for news.

**Usage**

*Using composer*

This package is set up to be required via [Composer](http://getcomposer.org/), for example:

    {
        "require": {
            "mgargano/rotoworld": "~0.1.3"
        }
    }

*PHP example*

    <?php
    require 'vendor/autoload.php';
    $news = new Rotoworld\Rotoworld;
    echo '<PRE>';
    var_dump( $news->get() );
    echo '</PRE>';

This can return:

    array(8) {
      [0]=>
      object(stdClass)#5354 (11) {
        ["name"]=>
        string(17) "Johnny Giavotella"
        ["position"]=>
        string(2) "2B"
        ["team"]=>
        string(6) "Angels"
        ["id"]=>
        string(4) "5775"
        ["nameDashDelimited"]=>
        string(17) "johnny-giavotella"
        ["report"]=>
        string(171) "Angels manager Mike Scioscia said Tuesday that Johnny Giavotella (illness) has made "very little progress" and he's not sure when the second baseman will return."
        ["impact"]=>
        string(241) "Giavotella has been nursing an undisclosed illness and it appears he's having trouble kicking it. He will rejoin the club on Friday, but as to when he'll be activated is totally up in the air. The Angels are using Grant Green at second base."
        ["related"]=>
        NULL
        ["sourceURL"]=>
        string(61) "https://twitter.com/JeffFletcherOCR/status/638864835766169600"
        ["sourceName"]=>
        string(24) "Jeff Fletcher on Twitter"
        ["date"]=>
        int(1441152780)
      }
      [1]=>
      object(stdClass)#5355 (11) {
        ["name"]=>
        string(12) "Josh Johnson"
        ["position"]=>
        string(1) "S"
        ["team"]=>
        string(6) "Padres"
        ["id"]=>
        string(4) "4293"
        ["nameDashDelimited"]=>
        string(12) "josh-johnson"
        ["report"]=>
        string(75) "Josh Johnson (elbow) thinks he could begin a rehab assignment this weekend."
        ["impact"]=>
        string(269) "Johnson got through a 15-pitch simulated game on Tuesday with no issues and believes he's ready for game action. It sounds like the right-hander could join the Padres at some point later this month, although with him the next setback is usually right around the corner."
        ["related"]=>
        NULL
        ["sourceURL"]=>
        string(56) "https://twitter.com/dennistlin/status/638862639058194433"
        ["sourceName"]=>
        string(21) "Dennis Lin on Twitter"
        ["date"]=>
        int(1441151940)
      }
      [2]=>
      object(stdClass)#5356 (11) {
        ["name"]=>
        string(16) "Brandon Crawford"
        ["position"]=>
        string(2) "SS"
        ["team"]=>
        string(6) "Giants"
        ["id"]=>
        string(4) "5012"
        ["nameDashDelimited"]=>
        string(16) "brandon-crawford"
        ["report"]=>
        string(54) "Brandon Crawford is not in the Giants' lineup Tuesday."
        ["impact"]=>
        string(246) "Crawford was hit by a pitch Monday in his first game back after missing a week with an oblique injury. That's presumably the reason he's not playing Tuesday, although the Giants haven't confirmed that. Ehire Adrianza is at shortstop in his place."
        ["related"]=>
        string(14) "Ehire Adrianza"
        ["sourceURL"]=>
        string(41) "http://www.rotoworld.com/mlb/dailyLineups"
        ["sourceName"]=>
        string(23) "Rotoworld Daily Lineups"
        ["date"]=>
        int(1441151400)
      }
      [3]=>
      object(stdClass)#5357 (11) {
        ["name"]=>
        string(15) "Miguel Gonzalez"
        ["position"]=>
        string(1) "S"
        ["team"]=>
        string(7) "Orioles"
        ["id"]=>
        string(4) "5702"
        ["nameDashDelimited"]=>
        string(15) "miguel-gonzalez"
        ["report"]=>
        string(76) "MRIs on Miguel Gonzalez's right elbow and shoulder showed only inflammation."
        ["impact"]=>
        string(294) "Gonzalez has dealt with shoulder soreness for a little while and thinks he might have caused an elbow injury but compensating for it. However, the good news is that he's not dealing with any structural issues. The right-hander should rejoin the Orioles' rotation at some point later this month."
        ["related"]=>
        NULL
        ["sourceURL"]=>
        string(54) "https://twitter.com/masnRoch/status/638858545514053632"
        ["sourceName"]=>
        string(23) "Roch Kubatko on Twitter"
        ["date"]=>
        int(1441151160)
      }
      [4]=>
      object(stdClass)#5358 (9) {
        ["name"]=>
        string(14) "Patrick Corbin"
        ["position"]=>
        string(1) "S"
        ["team"]=>
        string(12) "Diamondbacks"
        ["id"]=>
        string(4) "6415"
        ["nameDashDelimited"]=>
        string(14) "patrick-corbin"
        ["report"]=>
        string(97) "Patrick Corbin held the Rockies to two runs over 6 1/3 innings en route to a 6-4 victory Tuesday."
        ["impact"]=>
        string(414) "Corbin served up a pair of solo homers among the seven hits he allowed, but he didn't walk anyone and struck out four. It's certainly an outing that you have to be pleased with at Coors Field. The left-hander has pitched well since returning from Tommy John surgery, posting a 3.67 ERA and 56/13 K/BB ratio over 56 1/3 innings. He'll try to keep it going next week in two home starts versus the Giants and Dodgers."
        ["related"]=>
        NULL
        ["date"]=>
        int(1441150380)
      }
      [5]=>
      object(stdClass)#5359 (9) {
        ["name"]=>
        string(13) "Daniel Hudson"
        ["position"]=>
        string(1) "R"
        ["team"]=>
        string(12) "Diamondbacks"
        ["id"]=>
        string(4) "5911"
        ["nameDashDelimited"]=>
        string(13) "daniel-hudson"
        ["report"]=>
        string(136) "With Brad Ziegler unavailable, Daniel Hudson allowed a run but converted his third save of the season Tuesday in a win over the Rockies."
        ["impact"]=>
        string(453) "Nick Hundley led off the ninth with a double and Carlos Gonzalez switched places him with a one-out double of his own, but Hudson then induced a strikeout and popout to preserve the two-run victory. Hudson's ERA this season in relief is just 3.99, but he's struck out a batter per inning and is topping out in the high-90s with his fastball. He has the potential to be a shutdown reliever, but the D'Backs could put him back in the rotation next season."
        ["related"]=>
        NULL
        ["date"]=>
        int(1441150200)
      }
      [6]=>
      object(stdClass)#5360 (9) {
        ["name"]=>
        string(13) "Phil Gosselin"
        ["position"]=>
        string(2) "2B"
        ["team"]=>
        string(12) "Diamondbacks"
        ["id"]=>
        string(4) "7549"
        ["nameDashDelimited"]=>
        string(13) "phil-gosselin"
        ["report"]=>
        string(96) "Phil Gosselin doubled in a run and launched a three-run homer in Tuesday's win over the Rockies."
        ["impact"]=>
        string(341) "Gosselin was hitless in his Diamondbacks debut Monday, but he made up for it and then some with a big showing in his second game with the Snakes. His blast off Miguel Castro in the seventh inning went an estimated 441 feet. It looks like Gosselin could get a decent look at second base this month, making him worth a look in NL-only formats."
        ["related"]=>
        NULL
        ["date"]=>
        int(1441149900)
      }
      [7]=>
      object(stdClass)#5361 (9) {
        ["name"]=>
        string(10) "Josh Ravin"
        ["position"]=>
        string(1) "R"
        ["team"]=>
        string(7) "Dodgers"
        ["id"]=>
        string(4) "7291"
        ["nameDashDelimited"]=>
        string(10) "josh-ravin"
        ["report"]=>
        string(126) "Dodgers recalled RHP Josh Ravin from Triple-A Oklahoma City; placed him on the 60-day disabled list with a left hernia injury."
        ["impact"]=>
        string(136) "The move clears a spot on the 40-man roster for Justin Ruggiano. It's unclear whether Ravin needs surgery, but he's done for the season."
        ["related"]=>
        NULL
        ["date"]=>
        int(1441149600)
      }
    }
    
**DISCLAIMER**
The information obtained with this package are the intellectual property of Rotoworld.com and NBCSports. This is to be used for educational purposes and you should consult with Rotoworld.com or NBC Sports if you are going to use this or information obtained with this anyhow and anywhere.
