<?

// PHP script to process GET method

?>
<HTML>

<HEAD>
  <TITLE>PHP SCript for GET</TITLE>

<link rel="stylesheet" type="text/css" href="page2.css">

</HEAD>

<H2> Welcome to HTML Basics - Result of PHP script processing GET method</H2>
<BR><BR>

Your first name:  <?php  echo $_POST["firstname"]; ?><br>
Your last name:  <?php  echo $_POST["lastname"]; ?><br>
Your password:  <?php  echo $_POST["password"]; ?><br>


<BR><BR>

<A HREF="page1.html">Link to page 1 - main page</A>  <BR> <BR>
<A HREF="page2.html">Link to page 2 - CSS demo</A> <BR> <BR>
<A HREF="page3.html">Link to page 3 - Form GET demo using PHP</A> <BR> <BR>
<A HREF="page4.html">Link to page 4 - Form POST demo using PHP</A> <BR> <BR>


<BODY>

</BODY>

</HTML>