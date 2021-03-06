
<!DOCTYPE html>
<html>
<head>
<style> 
*, *:after, *:before
        {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        body, html
        {
            font-size: 100%;
            padding: 0;
            margin: 0;
        }
        
        /* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
        .clearfix:before, .clearfix:after
        {
            content: " ";
            display: table;
        }
        .clearfix:after
        {
            clear: both;
        }
        
        body
        {
            font-family: 'Lato' , Calibri, Arial, sans-serif;
            color: #47a3da;
        }
        
        a
        {
            color: #f0f0f0;
            text-decoration: none;
        }
        
        a:hover
        {
            color: #000;
        }
        
        .main, .container > header
        {
            width: 90%;
            max-width: 69em;
            margin: 0 auto;
            padding: 0 1.875em 3.125em 1.875em;
        }
        
        .container > header
        {
            padding: 2.875em 1.875em 1.875em;
        }
        
        .container > header h1
        {
            font-size: 2.125em;
            line-height: 1.3;
            margin: 0 0 0.6em 0;
            float: left;
            font-weight: 400;
        }
        
        .container > header > span
        {
            display: block;
            position: relative;
            z-index: 9999;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5em;
            padding: 0 0 0.6em 0.1em;
        }
        
        .container > header > span span:after
        {
            width: 30px;
            height: 30px;
            left: -12px;
            font-size: 50%;
            top: -8px;
            font-size: 75%;
            position: relative;
        }
        
        .container > header > span span:hover:before
        {
            content: attr(data-content);
            text-transform: none;
            text-indent: 0;
            letter-spacing: 0;
            font-weight: 300;
            font-size: 110%;
            padding: 0.8em 1em;
            line-height: 1.2;
            text-align: left;
            left: auto;
            margin-left: 4px;
            position: absolute;
            color: #fff;
            background: #47a3da;
        }
        
        .container > header nav
        {
            float: right;
            text-align: center;
        }
        
        .container > header nav a
        {
            display: inline-block;
            position: relative;
            text-align: left;
            width: 2.5em;
            height: 2.5em;
            background: #fff;
            border-radius: 50%;
            margin: 0 0.1em;
            border: 4px solid #47a3da;
        }
        
        .container > header nav a > span
        {
            display: none;
        }
        
        .container > header nav a:hover:before
        {
            content: attr(data-info);
            color: #47a3da;
            position: absolute;
            width: 600%;
            top: 120%;
            text-align: right;
            right: 0;
            pointer-events: none;
        }
        
        .container > header nav a:hover
        {
            background: #47a3da;
        }
        
        .bp-icon:after
        {
            font-family: 'bpicons';
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            text-align: center;
            color: #47a3da;
            -webkit-font-smoothing: antialiased;
        }
        
        .container > header nav .bp-icon:after
        {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            line-height: 2;
            text-indent: 0;
        }
        
        .container > header nav a:hover:after
        {
            color: #fff;
        }
        
        .bp-icon-next:after
        {
            content: "\e000";
        }
        .bp-icon-drop:after
        {
            content: "\e001";
        }
        .bp-icon-archive:after
        {
            content: "\e002";
        }
        .bp-icon-about:after
        {
            content: "\e003";
        }
        .bp-icon-prev:after
        {
            content: "\e004";
        }
        
        @media screen and (max-width: 55em)
        {
        
            .container > header h1, .container > header nav
            {
                float: none;
            }
        
            .container > header > span, .container > header h1
            {
                text-align: center;
            }
        
            .container > header nav
            {
                margin: 0 auto;
            }
        
            .container > header > span
            {
                text-indent: 30px;
            }
        }
        
        /* COMPONENT.CSS */
        
        /* Made with http://icomoon.io/ */
        
        .cbp_tmtimeline
        {
            margin: 30px 0 0 0;
            padding: 0;
            list-style: none;
            position: relative;
        }
        
        /* The line */
        .cbp_tmtimeline:before
        {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 10px;
            background: #afdcf8;
            left: 20%;
            margin-left: -10px;
        }
        
        .cbp_tmtimeline > li
        {
            position: relative;
        }
        
        /* The date/time */
        .cbp_tmtimeline > li .cbp_tmtime
        {
            display: block;
            width: 25%;
            padding-right: 100px;
            position: absolute;
        }
        
        .cbp_tmtimeline > li .cbp_tmtime span
        {
            display: block;
            text-align: right;
        }
        
        .cbp_tmtimeline > li .cbp_tmtime span:first-child
        {
            font-size: 0.9em;
            color: #bdd0db;
        }
        
        .cbp_tmtimeline > li .cbp_tmtime span:last-child
        {
            font-size: 2.9em;
            color: #3594cb;
        }
        
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmtime span:last-child
        {
            color: #6cbfee;
        }
        
        /* Right content */
        .cbp_tmtimeline > li .cbp_tmlabel
        {
            margin: 0 0 15px 25%;
            background: #3594cb;
            color: #fff;
            padding: 2em;
            font-size: 1.2em;
            font-weight: 300;
            line-height: 1.4;
            position: relative;
            border-radius: 5px;
        }
        
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel
        {
            background: #6cbfee;
        }
        
        .cbp_tmtimeline > li .cbp_tmlabel h2
        {
            margin-top: 0px;
            padding: 0 0 10px 0;
            border-bottom: 1px solid rgba(255,255,255,0.4);
        }
        
        /* The triangle */
        .cbp_tmtimeline > li .cbp_tmlabel:after
        {
            right: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-right-color: #3594cb;
            border-width: 10px;
            top: 10px;
        }
        
        .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after
        {
            border-right-color: #6cbfee;
        }
        
        /* The icons */
        .cbp_tmtimeline > li .cbp_tmicon
        {
            width: 40px;
            height: 40px;
            font-family: 'ecoico';
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            font-size: 1.4em;
            line-height: 40px;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            color: #fff;
            background: #46a4da;
            border-radius: 50%;
            box-shadow: 0 0 0 8px #afdcf8;
            text-align: center;
            left: 20%;
            top: 0;
            margin: 0 0 0 -25px;
        }
        
        .cbp_tmicon-phone:before
        {
            content: "\e000";
        }
        
        .cbp_tmicon-screen:before
        {
            content: "\e001";
        }
        
        .cbp_tmicon-mail:before
        {
            content: "\e002";
        }
        
        .cbp_tmicon-earth:before
        {
            content: "\e003";
        }
        
        /* Example Media Queries */
        @media screen and (max-width: 65.375em)
        {
        
            .cbp_tmtimeline > li .cbp_tmtime span:last-child
            {
                font-size: 1.5em;
            }
        }
        
        @media screen and (max-width: 47.2em)
        {
            .cbp_tmtimeline:before
            {
                display: none;
            }
        
            .cbp_tmtimeline > li .cbp_tmtime
            {
                width: 100%;
                position: relative;
                padding: 0 0 20px 0;
            }
        
            .cbp_tmtimeline > li .cbp_tmtime span
            {
                text-align: left;
            }
        
            .cbp_tmtimeline > li .cbp_tmlabel
            {
                margin: 0 0 30px 0;
                padding: 1em;
                font-weight: 400;
                font-size: 95%;
            }
        
            .cbp_tmtimeline > li .cbp_tmlabel:after
            {
                right: auto;
                left: 20px;
                border-right-color: transparent;
                border-bottom-color: #3594cb;
                top: -20px;
            }
        
            .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after
            {
                border-right-color: transparent;
                border-bottom-color: #6cbfee;
            }
        
            .cbp_tmtimeline > li .cbp_tmicon
            {
                position: relative;
                float: right;
                left: auto;
                margin: -55px 5px 0 0px;
            }
        }
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
text-align: left;
    style = "font-family:Algerian;font-size:200%;color:#FF7F50;"
}

header {background: #6495ED;color:white;}
footer {background: #6495ED;color:white;}
.nav {background:	#333399;}

.nav ul {
    color: #f2f2f2;
    font-size: 15px;
}
.nav ul a {
    text-decoration: none;
}
@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 0.1 auto;flex:0.1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
</style>
</head>
<body>

<div class="flex-container">
<header>
  <h1><font face = "Castellar">Pittsford Sutherland Programming Club</font></h1>
</header>


<nav class="nav" >
<center><font face = "Baskerville Old Face" size = "4" color = "yellow">Table of Contents</font></center>
<ul>
  <li><a href="../index.php">Main</a></li>
  <li><a href="../current/tutorial.html">Tutorials</a></li>
  <li><a href="../current/warmup.php">Warm-up Problems</a></li>
  <li><a href="../current/project.php">Groups and Projects</a></li>
  <li><a href="../current/pictures.html">Snapshots</a></li>

  <li><a href="../links.html">Useful Links</a></li>
  
  <li><a href="../previous years/16-17/16-17main.html">2016-2017 Meeting Materials</a></li>
  
</ul>
</nav>


  

<article class = "article">

<center><font size = "10" color = "#0404B4"> Submite Your Code Here! </font></center>


<div style="clear:both"></div>
<br>
<br><br><br>
<div align = "center">
<font face="Algerian" color="black">	
</font></div>

<head>
<title>ACE in Action</title>
<style type="text/css" media="screen">
 #editor { 
 position: absolute;
 top: 0;
 right: 0;
 bottom: 0;
 left: 0;
 }
</style>
</head>
<body>
 
function foo(items) {
 var x = "All this is syntax highlighted";
 return x;
}
 
/ace-builds/src-noconflict/ace.js
 
 var editor = ace.edit("editor");
 editor.setTheme("ace/theme/monokai");
 editor.getSession().setMode("ace/mode/javascript");
 
</body>

<?php


$link = mysqli_connect("fdb15.biz.nf", "2268644_oj", "yc083099");

mysqli_select_db($link, "2268644_oj");

$name = $_POST['name'];
$comment = $_POST['comment'];
$submit = $_POST['submit'];

// Create connection
if($submit){
        if($name && $comment){
        $sql = mysqli_query($link, "INSERT INTO comment (name,comment) VALUES ('$name', '$comment')");
        header("location: success.php");}
        else
                echo "not found";

}


?>









<form action="index.php" method="POST">
<table>
<tr><td>Name: </td><td><input type="text" name="name" /></td></tr>
<tr><td colspan = "2">Comment: </td></tr>
<tr><td colspan = "2"><textarea name = "comment"></textarea></td></tr>
<tr><td colspan = "2"><input type="submit" name = "submit" value = "Submit"  /></td></tr>


</table>
</form>



<?php

$sql = "SELECT * FROM comment ORDER BY id DESC";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $comment = $row["comment"];
    $dellink = "<a href= \"delete.php?id= ". $id . "\"> Delete </a>";
        echo " - Name: " . $name. '<br />' . "-Comment: " . $comment. "<br>" . '<br />' . '<br />';
        
    }
} else {
    echo "0 results";
}

?>


 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/simple/skin.css" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24hs4nDOh7He62ZgiXrjH12%2F"+"&opts=17886&num=10&ts=1495917418366");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); </script>


<div align = "center"><footer> <a href="http://sutherland-programming-club.co.nf">Pittsford Sutherland High School Programming Club</a>
<br> Developed by Yiyou Chen, Yizuo Chen
<br> Email: shsgerry@gmail.com</footer>
</div></body>
</html>
