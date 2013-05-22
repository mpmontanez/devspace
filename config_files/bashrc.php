<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>.bashrc</title>
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
<span class="comment"># ~/.bashrc: executed by bash(1) for non-login shells.
# see /usr/share/doc/bash/examples/startup-files (in the package bash-doc)
# for examples</span>

<span class="comment">
# If not running interactively, don't do anything
# [ -z "$PS1" ] && return</span>

<span class="comment">
# don't put duplicate lines in the history. See bash(1) for more options
# ... or force ignoredups and ignorespace</span>
export HISTCONTROL=ignoredups:ignorespace

<span class="comment"># append to the history file, don't overwrite it</span>
shopt -s histappend

<span class="comment">
# for setting history length see HISTSIZE and HISTFILESIZE in bash(1)
# Save the commands to a file /home/etienne/todays_history
# export HISTFILE=/home/etienne/todays_history
# Save last 10000 commands in the history of current session</span>
export HISTSIZE=10000
<span class="comment"># Save last 1000000 history commands</span>
export HISTFILESIZE=1000000
<span class="comment"># Ignore and don't save duplicate entries</span>
export HISTIGNORE="&"

export MYSQL_HISTSIZE=10000
export MYSQL_HISTFILESIZE=1000000
export MYSQL_HISTIGNORE="&"

<span class="comment">
# check the window size after each command and, if necessary,
# update the values of LINES and COLUMNS.</span>
shopt -s checkwinsize

<span class="comment"># make less more friendly for non-text input files, see lesspipe(1)</span>
[ -x /usr/bin/lesspipe ] && eval "$(SHELL=/bin/sh lesspipe)"

<span class="comment">
# set variable identifying the chroot you work in (used in the prompt below)
# if [ -z "$debian_chroot" ] && [ -r /etc/debian_chroot ]; then
#    debian_chroot=$(cat /etc/debian_chroot)
# fi</span>

<span class="comment">
# uncomment for a colored prompt, if the terminal has the capability; turned
# off by default to not distract the user: the focus in a terminal window
# should be on the output of commands, not on the prompt</span>
force_color_prompt=yes

if [ -n "$force_color_prompt" ]; then
    if [ -x /usr/bin/tput ] && tput setaf 1 >&/dev/null; then
    <span class="comment">
        # We have color support; assume it's compliant with Ecma-48
        # (ISO/IEC-6429). (Lack of such support is extremely rare, and such
        # a case would tend to support setf rather than setaf.)</span>
    color_prompt=yes
    else
    color_prompt=
    fi
fi

if [ "$color_prompt" = yes ]; then
    PS1='${debian_chroot:+($debian_chroot)}\[\033[01;32m\]\t \u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]\$ '
else
    PS1='${debian_chroot:+($debian_chroot)}\t \u@\h:\w\$ '
fi
unset color_prompt force_color_prompt

<span class="comment"># enable color support of ls</span>

if [ -x /usr/bin/dircolors ]; then
    test -r ~/.dircolors && eval "$(dircolors -b ~/.dircolors)" || eval "$(dircolors -b)"
fi

<span class="comment">
# Alias definitions.
# You may want to put all your additions into a separate file like
# ~/.bash_aliases, instead of adding them here directly.
# See /usr/share/doc/bash-doc/examples in the bash-doc package.</span>
if [ -f ~/.bash_aliases ]; then
    . ~/.bash_aliases
fi

<span class="comment">
# uncomment for a colored prompt, if the terminal has the capability; turned
# off by default to not distract the user: the focus in a terminal window
# should be on the output of commands, not on the prompt</span>
force_color_prompt=yes

if [ -n "$force_color_prompt" ]; then
    if [ -x /usr/bin/tput ] && tput setaf 1 >&/dev/null; then
        <span class="comment">
            # We have color support; assume it's compliant with Ecma-48
            # (ISO/IEC-6429). (Lack of such support is extremely rare, and such
            # a case would tend to support setf rather than setaf.)</span>
        color_prompt=yes
    else
        color_prompt=
    fi
fi

<span class="comment"># set bash title to include date</span>

if [ "$color_prompt" = yes ]; then
PS1='${debian_chroot:+($debian_chroot)}\[\033[01;32m\]\t \u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]\$ '
else
PS1='${debian_chroot:+($debian_chroot)}\t \u@\h:\w\$ '
fi
unset color_prompt force_color_prompt

export GREP_COLOR='1;30;43'
export TMOUT=86400

<span class="comment"># mysql prompt</span>
export MYSQL_PS1='mysql [\h:\d] \r:\m:\s\P> '

<span class="comment">
# enable programmable completion features (you don't need to enable
# this, if it's already enabled in /etc/bash.bashrc and /etc/profile
# sources /etc/bash.bashrc).</span>
if [ -f /etc/bash_completion ] && ! shopt -oq posix; then
    . /etc/bash_completion
fi

<span class="comment">#export TERM=xterm</span>

<span class="comment"># If this is an xterm set the title to user@host:dir</span>
case "$TERM" in xterm*|rxvt*)
    PS1="\[\e]0;${debian_chroot:+($debian_chroot)}\u@\h: \w\a\]$PS1"
    ;;
    *)
    ;;
esac

<span class="comment">
# set a fancy prompt (non-color, unless we know we "want" color)
# case "$TERM" in
# xterm-color) color_prompt=yes;;
# esac</span>

<span class="comment"># If this is an xterm set the title to user@host:dir</span>

case "$TERM" in
xterm*|rxvt*)
    PS1="\[\e]0;${debian_chroot:+($debian_chroot)}\u@\h: \w\a\]$PS1"
    ;;
*)
    ;;
esac

<span class="comment"># set a fancy prompt (non-color, unless we know we "want" color)</span>
case "$TERM" in
    xterm-color) color_prompt=yes;;
esac
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

