<!doctype html> <!-- la page respecte html 5 -->
<html lang="fr"><!-- Début de la page -->
	<head>
<!--<script type="text/javascript">
    function mousehandler(e) {
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if ((eventbutton == 2) || (eventbutton == 3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
    function disableCtrlKeyCombination(e) {
        var forbiddenKeys = new Array("a", "s", "c", "x","u");
        var key;
        var isCtrl;
        if (window.event) {
            key = window.event.keyCode;
            //IE
            if (window.event.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        else {
            key = e.which;
            //firefox
            if (e.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        if (isCtrl) {
            for (i = 0; i < forbiddenKeys.length; i++) {
                //case-insensitive comparation
                if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
                    return false;
                }
            }
        }
        return true;
    }
</script>-->
        <script type="text/javascript">
document.onkeydown = function (e) {
        return false;
}
</script>
        <script type="text/javascript">
        
        $("body").keydown(false);
        </script>
		<!-- Entête de la page -->
		<!-- Titre de la page -->
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Third Eye</title>
    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <!--<link rel="stylesheet" type="text/css" href="Anakin.css" media="screen">-->
    <link rel="stylesheet" type="text/css" href="Third_Eye.css" media="screen">
    <link rel="stylesheet" type="text/css" href="Third_Eye_Print.css" media="print">
    <!--<link rel="stylesheet" type="text/css" href="Third_Eye_Print.css" media="screen and (max-width: 812px)">-->
    
	</head>
	<body oncontextmenu="return false">
        <?php
        
        header('refresh: 500; url=Third_Eye_Bug.php');
        echo "\x00";
        ?>
        <div class="content">
            <!-- Contenu de la page web -->
            <img src="third_eye.JPG" class="eye">
            <h1> The Third Eye</h1>
        </div>
        <div class="text">
            <img id="texte" src="texteWeb.png" class="text">
        </div>
        <div class="content">

            <p><b>The Third Eye</b> is a gate that leads to inner realms and spaces of higher consciousness.


            <h2>The Project</h2>

            <p> We were working on a project <i><b>" Project Libitina "</b></i>, we were experimenting on a girl many things more horrible each other, the girl screamed and cried but we ignored her the only thing we wanted was the success of the experiment. We stopped the experiment only when we see she will die. When we didn't need her, she was in a room with no light of the surface for have the least chance she escapes. She was lonely and sad because she never met anyone expect us.</p>
                
            <h2>The Worst Day</h2>

            <p class="width">We were close to the purpose, but when I was to the room of the girl something was writen...<span style="color: black;">
            I took a knife and lightly dig into the edge of my palm. I let the drops flow. nearly to the forearm. One by one I collected them into the lid of thermos still warm I diluted them with my tears .... and I painted you</span></p>

            <p>Then before we started the experience, she was like crazy and managed to escape from our hold. That was starting to become dangerous. Then the light were starting went on and off.  I saved the most recent documents <a href="Top_Secret.html">here</a>. So if someone finds out this documents be really carefull.   </p>

            <h2 class="anecdote">HELP!</h2>

            <div class="message">

                 <p class="pInMessage"><b>Message </b>: We are being attaqued by a monster, we need help. She is killing us one by one. I see blood, blood everywhere. She decapite some of us, else are dismembered. We tried the rest of the survivors to escape from her with the nearest gate for the exit but the door won't oppen, is like all the system in the laboratory won't cooperate with us. We are affraid, if someone see her don't approach her,she will kill everything who is alive. </p>

                <p class="pInMessage">She is in front of us, please someone help! I regret what i did to you but please let me live...</p>
            </div>    
        </div>
	</body>
</html>

