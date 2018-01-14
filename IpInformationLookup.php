<?php
#Ip Information Lookup
#Coded By | lucifer
#https://www.github.com/technosier
echo "<!DOCTYPE HTML><html><link rel='icon' href='http://icons.iconarchive.com/icons/hopstarter/bioman/256/Bioman-Avatar-2-Green-icon.png' type='image/x-icon' /><body background='http://img08.deviantart.net/a2ea/i/2008/219/c/d/hex___green_by_turnip_stew.jpg'><head><center><h1><font color='#5dff00'><font face='verdana'><font style='opacity:1'>IP INFORMATION LOOKUP<hr color='#5dff00' size='5' style='opacity:1'></h1></center></head></font></font></font>
</h1></center>";
echo "<title>IP INFORMATION</title>";
echo "<center>";
echo "<form name='ipinfo' action='#' method='POST'><input type='text' name='iplog' placeholder='Enter IP here'>&nbsp;<input type='submit' value='LOOKUP'></form></center><br /><br />";
echo "<style class='placeholder'>
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #5dff00;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #5dff00;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #5dff00;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #5dff00;
}";
echo "input[type='submit'] {
    -webkit-border-radius: 19;
  -moz-border-radius: 19;
  border-radius: 19px;
  font-family: Arial;
  color: #5eff00;
  font-size: 10px;
  background: transparent;
  padding: 2px 19px 2px 19px;
  border: solid #39ff08 2px;
  text-decoration: none;
}
input[type='submit']:hover {
  background: #7a7a7a;
  text-decoration: none;
}
input[type='text'] {
    -webkit-border-radius: 19;
  -moz-border-radius: 19;
  border-radius: 19px;
  font-family: Arial;
  color: #5eff00;
  font-size: 12px;
  background: transparent;
  padding: 2px 19px 2px 19px;
  border: solid #39ff08 2px;
  text-decoration: none;
}</style>";
echo "<style>
table {
    border-collapse: collapse;  
    width: 100%;
    height: 30px;
}
table, td, th {
    border: 3px solid #5dff00;
    font-family: verdana;
    font-size: 12px;
    color: #5dff00;
    text-align: center;

}
</style>";
$ip = $_POST['iplog'];
echo "<table align='center'>";
 $url=file_get_contents("http://whatismyipaddress.com/ip/$ip");
 preg_match_all('/<th>(.*?)<\/th><td>(.*?)<\/td>/s',$url,$output,PREG_SET_ORDER);
 for ($q=0; $q < 25; $q++) {
    if ($output[$q][1]) {
        if (!stripos($output[$q][2],"Blacklist")) {
            echo "<tr><td>".$output[$q][1]."</td><td>".$output[$q][2]."</td></tr>";

        }
    }
}
echo "</table>";
echo "<code><font color='#5dff00'>";
echo "<audio autoplay> <source src='http://www.soundescapestudios.com/SESAudio/SES%20Site%20Sounds/Laser%20Sci%20Fi/Alien-land-02.wav' type='audio/mpeg'></audio>";
echo "<br /><br /><footer id='det' style='position:fixed; left:0px; right:0px; bottom:0px; background:rgb(0,0,0); text-align:center; border-top: 1px solid #5dff00; border-bottom: 1px solid #5dff00;>
<b><center><code><font style='opacity 0.80'><font color='#5dff00'>Coded By | lucifer&nbsp;<a href='https://www.github.com/technosier' id='github' target='_blank'><img src='http://i.imgur.com/xSaKg89.png' height='20' width='20'></font></font></code></center></b>
</footer></body></html>";
?>
