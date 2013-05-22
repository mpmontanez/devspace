<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>element_in_set.pl</title>
  <link href="../css/linux_toolbox.css" type="text/css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type=
  "text/javascript">
</script>
</head>

<body>
    <?php include( '../header.php' ); ?>
    
    <table id="main">
      <tr>
        <td class="side-pane">
        </td>
        <td id="content">
          <div class="file">
<span class="comment">#!/usr/bin/perl -w</span>
<code>
use strict;
use warnings;

my($page_id) = 5999;

my(@page_ids) = (5919,5920,5921,5922,5923,5924,5925,5926,5927,5928,5929,5932,5938,5939,5940,5941);

if (my($matched) = grep $_ eq $page_id, @page_ids) {
    print "found it: $matched\n";
}else{
    print "Didn't find it\n";
}
</code>
           
          </div>
        </td>
        <td class="side-pane">
        </td>
      </tr>
    </table>
    
    <div id="footer"></div>
</body>
</html>

