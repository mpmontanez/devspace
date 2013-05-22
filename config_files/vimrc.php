<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>.vimrc</title>
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
<code>
<span class="comment">" .vimrc
" Enable syntax highlighting
" syntax enable
</span>

set background=dark
set mouse=a
    
<span class="comment">" Use spaces instead of tabs</span>
set expandtab

<span class="comment">" 1 tab == 4 spaces</span>

set shiftwidth=4
set tabstop=4

<span class="comment">"Auto indent</span>
set ai
<span class="comment">"Smart indent</span> 
set si

<span class="comment">" Always show the status line</span>
set laststatus=2

<span class="comment">" Highlight search results</span>
set hlsearch

<span class="comment">" Show matching brackets when text indicator is over them</span>
set showmatch

<span class="comment">" How many tenths of a second to blink when matching brackets</span>
set mat=2
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

