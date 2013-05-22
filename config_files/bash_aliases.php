<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>.bash_aliases</title>
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
<span class="comment"># ~/.bash_aliases: Alias definitions.</span>
 
<code>
alias ls='ls --color=auto'
<span class="comment">
# alias dir='dir --color=auto'
# alias vdir='vdir --color=auto'
</span>

alias grep='grep --color=auto'
alias fgrep='fgrep --color=auto'
alias egrep='egrep --color=auto'

<span class="comment"># some more ls aliases</span>

alias ll='ls -alF'
alias la='ls -A'
alias l='ls -CF'

<span class="comment">
# Add an "alert" alias for long running commands.  Use like so:
# sleep 10; alert
</span>

alias alert='notify-send --urgency=low -i "$([ $? = 0 ] && echo terminal || echo error)" "$(history|tail -n1|sed -e '\''s/^\s*[0-9]\+\s*//;s/[;&|]\s*alert$//'\'')"'

<span class="comment"># ssh to abu through tunnel</span>
alias ssh_abu='ssh -p 8023 localhost'
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






















