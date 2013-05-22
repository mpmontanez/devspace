<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>rename_mp3s.pl</title>
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
          <div class="file"><code>
<span class="comment">#!/usr/bin/perl -w</span>

use strict;
use warnings;

<span class="comment"># Regex Test</span>
while(<>){ # take one input line at a time
    chomp;
    if(/YOUR_PATTERN_GOES_HERE/){
        print "Matched: |$`<$&>$'|\n"; # the special match vars
    }else{
        print "No match: |$_|\n";
    }
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

