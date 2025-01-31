<?php
session_start();
?>
<!DOCTYPE html>
<link href="core.css" media="screen" rel="stylesheet" type="text/css">
<link href="show.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://www.auburn.edu/template/styles/sidebar.css" media="screen" type="text/css" />
<!--#include virtual="/template/includes/head.html" -->
</head>
<body>
<div id="pageWrap"> 
  <div id="headerWrap">
    <div id="header">
      <div id="logo">
      <a href="http://www.auburn.edu/"><img src="http://www.auburn.edu/template/styles/images/headerLogo2.png" alt="Auburn University Homepage"></a>
      	
      </div>
      <div id="headerTitle">
        <div class="titleArea">
        	<span class="mainHeading"><!-- TemplateBeginEditable name="unitTitle" -->Spectrum Educational Tool<!-- TemplateEndEditable --></span>
          <span class="subHeading"><!-- TemplateBeginEditable name="unitSubTitle" -->an online resource training for student 
			teachers<!-- TemplateEndEditable --></span>
        </div>
      </div>
    </div>
		<table class="nav">
        <td width="600"></td>
        <td style="font-style:italic;width:150;text-align:right;font-size:14px; color:#FFFFFF">
            <?php
            if (!isset($_SESSION["loginUser"]))
            {
              echo "";
            }
            else
            {
              echo "Welcome back! ".$_SESSION["loginUser"];
            }
            ?>
        </td>
        <td style="font-style:inherit;text-align:middle;font-size:14px;"><a href="../logout.php">Logout</a></td>
    </table>
  </div>
  <article classname="fit-fixed color-scheme--white">
      <div class="grid-row">
        </article>
<br>
<br>
<br>
<br>
<br>


 
     <div class="color-scheme--white padding-top-bottom--3">
         <div class="grid-row" id="recommendation">
           <div class="grid-col-12 grid-col--align-center grid-col--no-padding grid-col--no-margin">

<div class="grid-col-12 grid-row">
<div class="grid-col-12 grid-col--no-spacing grid-row">
     <div class="grid-col-12 grid-col--center grid-col--no-padding grid-col--no-margin margin-top--1">
      <h2>ALL CASES</h2>
    </div>
    <div class="grid-col-8 grid-col--no-margin grid-col--center">
      <div class="progress">
    <div class="progress__indicator">5%</div>

  <div class="progress__bar">
    <div class="progress__bar__complete" style="width:5%"></div>
  </div>
</div>

    </div>
</div>
  <div class="grid-col-3 grid-col--center grid-col--no-margin grid-col--no-padding"><a href="casestudy_1.html" class="button button--large button--fill-space button--secondary " data-confirm="null" id=""> Continue </a></div>





<br>
<br>
<br>




  <div class="grid-row grid-row--no-collapse tabs tabs-color-scheme--darkgrey">
   <div class="grid-col--align-center grid-col-12 grid-col--center grid-col--no-padding grid-col--no-margin">
        <a href="#" class="tab padding--1 margin-left--quarter margin-right--quarter" data-data="null" data-state="active" data-type="in-progress" id="in-progress">In-Progress Cases (1)</a>        
		<a href="#" class="tab padding--1 margin-left--quarter margin-right--quarter" data-data="null" data-state="inactive" data-type="completed" id="completed">Completed Cases (0)</a>    
	</div>
  </div>
   <div class="grid-row color-scheme--darkgrey">
        <div class="in-progress-body tab-body" data-state-body="active">
                  <div class="grid-col-12 grid-col--no-spacing dynamic-container margin-top-bottom--2 grid-row">
                      <div class="grid-col-12 grid-col--no-spacing">
                          <div class="grid-col-12 grid-row color-scheme--white table-row ">
  <div class="grid-col-4 grid-col--no-margin">
    <h5 class="text--ellipsis">Case 1</h5>
  </div>
  <div class="grid-col-5 table-row__progress">
      <div class="progress">
    <div class="progress__indicator">33%</div>

  <div class="progress__bar">
    <div class="progress__bar__complete" style=width:33%></div>
  </div>
</div>
  </div>
  <a href="/en/tracks/ruby" class="link--target "></a></div>

                          <div class="grid-col-12 grid-row color-scheme--white table-row ">

</div>
</div>
</div>

</div>
  <div id="contentArea_bottom"></div>
  <div id="footerWrap">
    <div id="footer">
    </div>  
    <div id="subfooter">
      Auburn University | Auburn, Alabama 36849 | (334) 844-4000  | <script type="text/javascript">emailE='auburn.edu'; emailE=('YourEmailAddress' + '@' + emailE); document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");</script>
      <br />
      <a href="https://fp.auburn.edu/ocm/auweb_survey">Website Feedback</a> | <a href="http://www.auburn.edu/privacy">Privacy</a> | <a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; 
      <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a>
    </div>
  </div>
  <!--#include virtual="/template/includes/gatc.html" --> 
</div>
</body>
</html>