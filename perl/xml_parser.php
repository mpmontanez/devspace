<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>xml_parser.pl</title>
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

use XML::Parser;
 
<span class="comment"># the file to parse</span>
my $xmlfile = shift @ARGV; 
 
<span class="comment"># initialize parser object and parse the string</span>
my $parser = XML::Parser->new( ErrorContext => 2 );
eval { $parser->parsefile( $xmlfile ); };
 
<span class="comment"># report any error that stopped parsing, or announce success</span>
if( $@ ) {
<span class="comment">    # remove module line number</span>
    $@ =~ s/at \/.*?$//s;               
    print STDERR "\nERROR in '$xmlfile':\n$@\n";
} else {
    print STDERR "'$xmlfile' is well-formed\n";
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

