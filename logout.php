<?php
ob_start();
?>
<?php
session_start();
session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
<title>
Spectrum Educational Tool Logout
</title>
<link rel="stylesheet" href="http://www.auburn.edu/template/styles/stretchSidebar.css" media="screen" type="text/css" />
<!--#include virtual="/template/includes/head.html" -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>
<body>
<div id="pageWrap">
  <div id="headerWrap">
    <div id="header">
      <div id="logo">
      <a href="http://www.auburn.edu/"><img src="http://www.auburn.edu/template/styles/images/headerLogo2.png" alt="Auburn University Homepage"></a>

      </div>
      <div id="headerTitle">
        <div class="titleArea" style="position: relative;left: 230px;top:40px">
        	<span class="mainHeading"><!-- TemplateBeginEditable name="unitTitle" -->Spectrum Educational Tool<!-- TemplateEndEditable --></span>
          <span class="subHeading"><!-- TemplateBeginEditable name="unitSubTitle" -->an online resource training for student
			teachers<!-- TemplateEndEditable --></span>
        </div>
      </div>
    </div>
  </div>
  <div id="contentArea">
        <div class="sidebar"> <!-- TemplateBeginEditable name="sidebar" -->
        <h4><a href="./home.php" target="_self" title="Home">Home</a></h4>
        <div class="orangeDecorBar" style="width: 200px"></div>
        <a href="./login.php" target="_self" title="My Progrss">Log in</a>
        <a href="./register.php" target="_self" title="My Progrss">Register</a></br></br></br></br></br>
        </div>
    <div class="contentDivision" style="text-align: center;position: relative;top:80px">
      <h3><strong>You've successfully logged out!</strong></h3>
    </div>

  </div>
  <div id="contentArea_bottom"></div>
  <div id="footerWrap">
    <div id="footer"></div>
    <div id="subfooter">
      Auburn University | Auburn, Alabama 36849 | (334) 844-4000  | <script type="text/javascript">emailE='gmail.com'; emailE=('spectrumeduteam' + '@' + emailE); document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");</script><br />
            <a href="https://fp.auburn.edu/ocm/auweb_survey">Website Feedback</a> | <a href="http://www.auburn.edu/privacy">Privacy</a> | <a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy;
            <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a>
    </div>
  </div>
  <!--#include virtual="/template/includes/gatc.html" -->
</div>
</body>
</html>
