<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("test.xml");

//print $xmlDoc->saveXML();
$x = $xmlDoc->documentElement;
foreach ($x->childNodes as $item)
{
	print $item->nodeName." = ".$item->nodeValue."<br/>";
}

/*
//test result
#text = 
to = George
#text = 
from = John
#text = 
heading = Reminder
#text = 
body = Don't forget the meeting!
#text = 
*/
?>