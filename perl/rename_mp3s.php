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
          <div class="file">
<span class="comment">#!/usr/bin/perl -w</span>
<code>
use strict;
use warnings;

die "No files supplied" unless @ARGV;

chdir "/home/etienne/Ubuntu One/mp3s/" or die "cannot chdir to ../mp3s $!";

foreach my $file (glob "*.mp3"){

  my $dir = "/home/etienne/Ubuntu One/mp3s/";
  my $new_file = $file;
  if($new_file =~ /$dir(.*)\.mp3/){
    my $name = $1;
    $name =~ s/([\w']+)/\u\L$1/gi;
    $new_file = "$dir"."$name"."\.mp3";
  }

  print "<$file>  [$new_file]\n";
  if(-e $new_file){
    warn "can't rename $file to $new_file: $new_file exists\n";
  }elsif(rename $file, $new_file){
    <span class="comment">## success, do nothing</span>
  }else{
    warn "rename $file to $new_file failed: $!\n";
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

