<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>BookScore Results</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div id="wrapper">
    <div id="header">

        <div id="logo">
        <p>BookScore.zxq.net</p>
        </div>

            
    <div id="content">
    
     <p>&nbsp</p>
     <p>&nbsp</p>
     
      	<?php
      	
      	if ($_POST['group1']=='buy'){
      	
			print("<h2>Top Results For ".$_POST['search'].":</h2>");
			print("
			
			<p>&nbsp</p>
        
        		<div id=\"results\">
        			<p>&nbsp</p>
        			<h3>book one</h3>
        			<h3>book two</h3>
        			<h3>book three</h3>
        			<p>&nbsp</p>
        		</div>
        
        		<p>&nbsp</p>
        		<p>&nbsp</p>
        
        ");
			
		}
		else {
		
			print("<p>this is where our sell stuff will go<p>");
			print("<h2>Sell Books Related to ".$_POST['search']."</h2>");
		
		}
			
		?>
      
      	

    </div>
    
    <div id="footer">  
    
    	<ul id="navigation">

                <li class="on"><a href="index.html">Home</a></li>

        </ul>
                    
    </div>
    
</div>

</body>
</html>