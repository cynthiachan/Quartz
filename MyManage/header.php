<center><?php    // This subpage displays the header for the website.	//http://localhost:81/Quartz-Anorien-2014S/    include 'dbvars.php';?><div style="position: relative; float:left; background: url(<?php print("images/Header.jpg"); ?>);	width: 945px; height: 120px;"><div style ="position: absolute;font-family:Tahoma;font-size: 11px;background-color: #434542;top: 1em;right: 3em;/*width: 120px;*/padding: 4px;">    <?php	    	// print("header.php included from ".$thisfilename); // report who included header.php    	$not_logged_in = !isset($_SESSION['usertype'])    		|| (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 0);        if ($not_logged_in)        {        	// If the user is logged out.        	// print("header.php: not logged in");            echo "<a href=".$q.$rootpath."help.html".$q." target=".$q."_blank".$q.">Help</a> "	  	."| <a href =".$q.$rootpath."index.php".$q.">Login?</a>";        }        else        {        	//If the user is logged in.			/*        	print("header.php: logged in, username: ");        	if ( isset($username) )        	{        		print($username);        	}        	else        	{        		print("<not set>");        	}        				*/	 	  echo "<a href=".$q.$rootpath."help.html".$q.".".$q."_blank".$q.">Help</a> | ";	                if (!isset($username) || !$username) // [HDR.0001]            {            	$userurl = substr($_SESSION['email'],0,strlen($_SESSION['email'])-7)."/index.php";            	echo "<a href =".$q.$rootpath."$userurl".$q.">MySite</a>";            }            else            {            	echo "<a href =".$q.$rootpath."index.php".$q.">MyManage</a>";            }                        echo "| <a href =".$q.$rootpath."changepassword.php".$q.">Change Password</a>";            echo "| <a href =".$q.$rootpath."index.php?logout=1".$q.">Logout</a>";        }    ?></div></div></center>