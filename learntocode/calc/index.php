<?php

if ($_GET['first_name']) {
  print 'Mr.' . $_GET['last_name'] . " is dumbnuts.";

}



print "<p>";
if ($_GET['enmieslast_name']) {
  print "The jerks firstname is: " . $_GET['enmies_name'] . "<p>";
  print 'Mr.' . $_GET['enmieslast_name'] . " is awesome.";
}


$name = '';
print(" ".$name);

$a = 1;
$b = 2;
$g = 'g';
$e = 'your enmies name';
print "</p>";
print $a+$b; // addition
print "</p>";
print $a*$b; // multiplication
print "</p>";
print $g;
print $b/$a; // division
print "<b>Subtraction</b></p>";
print $b-$a; // subtraction



print 'Your name
  <form action=index.php>
  <input type=textbox name=first_name />
  <input type=textbox name=last_name />

  <input type=submit value=submit>
  </form>
your enmies name
  <form action=index.php>
  <input type=textbox name=enmies_name />
  <input type=textbox name=enmieslast_name />

  <input type=submit value=submit>
  </form>
';

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-23284110-2', 'auto');
ga('send', 'pageview');


$(document).keypress(iframeKeboardEventPress);
function iframeKeboardEventPress(e)
{

if(e.target.id == 'searchbox' || e.target.id == 'go'){
 console.log('cancel');

}else{
 e.preventDefault();
 if (typeof document.getElementById('fullframe').contentWindow.iframeKeboardEventPress=== 'function') {
  if($(':focus').attr('id') === undefined){
   document.getElementById('fullframe').contentWindow.iframeKeboardEventPress(e)
  }
 }
 iframeKeboardEvent(e);
}
}
function iframeKeboardEvent(e)
{
 e.preventDefault();
 if (typeof document.getElementById('fullframe').contentWindow.iframeKeboardEvent=== 'function') {
  if($(':focus').attr('id') === undefined){
   document.getElementById('fullframe').contentWindow.iframeKeboardEvent(e);
  }
 }
}


 ?>
