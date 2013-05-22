<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>Linux Toolbox</title>
  <link href="css/linux_toolbox.css" type="text/css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type=
  "text/javascript">
</script>
</head>

<body>
    
    
    <?php include( 'header.php' ); ?>

    <table id="main">
      <tr>
        <td class="side-pane">
        </td>
        <td id="content">
          <div class="snippet">Common Unix Commands</div>
          <!-- /usr/share/icons/Humanity/mimes/48 -->    
          
          <table class="slide-up-boxes">
           <tr>
           	<td>
             	<a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?cat">
			          <h5>cat</h5>
			          <div>cat - concatenate files and print on the standard output</div>				
		          </a>
		        </td>
           	<td>
           	  <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?tac">
			          <h5>tac</h5>
			          <div>tac - concatenate and print files in reverse</div>				
		          </a>
		        </td>
           	<td>
           	  <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?chmod">
			          <h5>chmod</h5>
			          <div>chmod - change file access permissions</div>				
		          </a>
           	</td>
           	<td>
           	  <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?ls">
			          <h5>ls</h5>
			          <div>ls - list directory contents</div>				
		          </a>
	          </td>
           </tr>
           <tr>
           	<td>
           	  <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?echo">
			          <h5>echo</h5>
			          <div>echo - display a line of text</div>				
		          </a>
	          </td>
           	<td>
           	  <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?less">
			          <h5>less</h5>
			          <div>less - opposite of more</div>				
		          </a>
	          </td>
		        <td>
		          <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?head">
			          <h5>head</h5>
			          <div>head - output the first part of files</div>				
		          </a>
	          </td>
           	<td>
           	  <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?tail">
			          <h5>tail</h5>
			          <div>tail - output the last part of files</div>				
		          </a>
	          </td>
           </tr>
           <tr>
           	<td>
           	  <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?cp">
			          <h5>cp</h5>
			          <div>cp - copy files and directories</div>				
		          </a>
	          </td>
		        <td>
		          <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?mv">
			          <h5>mv</h5>
			          <div>mv - move (rename) files</div>				
		          </a>
	          </td>
	          <td>
	            <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?ps">
			          <h5>ps</h5>
			          <div>ps - report a snapshot of the current processes</div>				
		          </a>
	          </td>
	          <td>
	            <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?grep">
			          <h5>grep</h5>
			          <div>grep, egrep, fgrep - print lines matching a pattern</div>				
		          </a>
	          </td>
           </tr>
           <tr>
             <td>
              <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?wc">
			          <h5>wc</h5>
			          <div>wc - print the number of newlines, words, and bytes in files</div>				
		          </a>
	          </td>
           	<td>
           	  <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?split">
			          <h5>split</h5>
			          <div>split - split a file into pieces</div>				
		          </a>
	          </td>
	          <td>
	            <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?file">
			          <h5>file</h5>
			          <div>file - determine file type</div>				
		          </a>
	          </td>
	          <td>
	            <a href="http://unixhelp.ed.ac.uk/CGI/man-cgi?wget">
			          <h5>wget</h5>
			          <div>wget - The non-interactive network downloader</div>				
		          </a>
	          </td>
           </tr>
         </table>
          
          <div class="snippet"><p class="comment">// ssh to abu</p>
          <code>$ ssh 10.1.82.32</code></div>

          <div class="snippet"><p class="comment">// last 10 executed commands</p>
          <code>$ history 10</code></div>

          <div class="snippet"><p class="comment">// list all processes</p>
          <code>$ ps -A</code></div>

          <div class="snippet"><p class="comment">// generate a full listing about every process now running (process status)</p>
          <code>$ ps -ef | grep 'etienne'</code></div>

          <div class="snippet"><p class="comment">// query name servers for information about various hosts and domains or to print a
          list of hosts in a domain</p>
          <code>$ nslookup abu</code></div>

          <div class="snippet"><p class="comment">// summarize disk usage of each FILE, recursively for directories.</p>
          <code>$ du -h</code></div>

          <div class="snippet"><p class="comment">// unzip and extract tar file</p>
          <p class="comment">// z -- unzip</p>
          <p class="comment">// x -- extract the file</p>
          <p class="comment">// v -- verbose</p>
          <p class="comment">// f -- forcefully done</p>
          <code>$ tar -zxvf test123.tar.gz</code></div>

          <div class="snippet"><p class="comment">// find path to a file</p>
          <code>$ find -name 'filter*.php'</code></div>

          <div class="snippet"><p class="comment">// find file in directory ( ~/backend/)</p>
          <code>$ find ~/backend/ -name insert_images.pl</code></div>

          <div class="snippet"><p class="comment">// outputs the range of lines from 104 to 907</p>
          <code>$ sed -n 104,907p GoogleAPI.pm</code></div>

          <div class="snippet"><p class="comment">// outputs lines 1, 141935, and 315953 and prints out the 2nd and 18th column of
          the tab delimited output</p>
          <code>$ sed -n '1p;141935p;315953p' file.txt | awk -F'\t' '{ print $2 "\t" $18 }'</code></div>

          <div class="snippet"><p class="comment">// output a pretty print version of a tab delimited file</p>
          <code>$ column -t -s $'\t' file.txt</code></div>

          <div class="snippet"><p class="comment">// outputs the lines that are in file2.txt but not in file1.txt</p>
          <code>$ comm -13 file1.txt file2.txt</code></div>

          <div class="snippet"><p class="comment">// dedupe a file</p>
          <code>$ sort eti_archived_masterids_consolidated.csv | uniq &gt; uniq_eti_archived_masterids.csv</code></div>

          <div class="snippet"><p class="comment">// write stdout and stderr to a file</p>
          <code>$ perl normalize_feed.pl --retid=4485 &amp;&gt;
          error.log</code></div>

          <div class="snippet"><p class="comment">// print the 13th column in the tab delimited file, then get the lines that do not
          contain at least one digit</p>
          <code>$ less file.txt | awk -F'\t' {'print $13'} | egrep -cv
          "[0-9]+"</code></div>

          <div class="snippet"><p class="comment">// print the 13th column in a csv file that contains commas within double
          quotes</p>
          <code>$ less file.csv | perl -lne '@a = /((?:".*?"|.)*?)(?:,|$)/g; print
          $a[12]' | less</code></div>

          <div class="snippet"><p class="comment">// print the 14th column in a tab delimited file and output only the first 32 characters</p><code>$ zless file.txt.gz | awk -F '\t' '{ print $14}' | cut -c 1-32</code></div>

          <div class="snippet"><p class="comment">// print the 7th column of a tab delimited file, then get number of unique occorences, then sort desc based on first column, and print the top 10 lines</p><code>$ less file.txt | awk -F'\t' '{print $7}' | uniq -c | sort -n -k1,1 | tac | head</code></div>

          <div class="snippet"><p class="comment">// print the 5th column in a tab delimited with ^M delimited files (http://stackoverflow.com/questions/13069905/awk-print-is-adding-a-control-m-character-at-end-of-line)</p><code>$ less file.txt | awk -v RS='\r' -F'\t' '{print $5}' | less</code></div>

          <div class="snippet"><p class="comment">// you can use -B num to set how many lines before the match and -A num for the
          number of lines after the match.<br />
          // show 3 lines before and 2 lines after the match</p>
          <code>$ grep -B 3 -A 2 foo README.txt</code></div>

          <div class="snippet"><p class="comment">// show 3 lines before and after the match</p>
          <code>$ grep -C 3 foo README.txt</code></div>

          <div class="snippet"><p class="comment">// number of occurences of pattern in file</p>
          <code>$ grep -o ', ' ~/Desktop/rehab_query.txt | wc -l</code></div>

          <div class="snippet"><p class="comment">// add highlighting to matches</p>
          <code>$ grep --color=auto -r "r107" output.txt</code></div>

          <div class="snippet"><p class="comment">// find pattern/regex and highlight match</p>
          <code>$ grep -r --color=auto -e 'Retailer Name.*Retailer ID' ~/backend/*</code></div>

          <div class="snippet"><p class="comment">// find unique filenames that contain the expression</p>
          <code>$ egrep -r --color="auto" "Total Sales" * | cut -d":" -f1 | sort -u</code></div>

          <div class="snippet"><p class="comment">// look through the access logs for a click event with ip address '74.90.95.138'</p>
          <code>$ zgrep '74.90.95.138' /net/archive/*.lax7/www/logs/access_log.13639*</code></div>

          <div class="snippet"><p class="comment">// dump files in octal and other formats (Output as ASCII characters or backslash
          escapes)</p>
          <code>$ od -c file.txt</code></div>

          <div class="snippet"><p class="comment">// split large file into smaller files of size 1M</p>
          <code>$ split -bytes=1m /path/to/large/file /path/to/output/file/prefix</code></div>

          <div class="snippet"><p class="comment">// mail output of perl script to the emaillist with the provided subject</p>
          <code>$ perl current_taxonomy_report.pl | mail -s "Current Taxonomy Report"
          johndoe@gmail.com</code></div>

          <div class="snippet"><p class="comment">// determine file type</p><code>$ file /etc/passwd</code></div>

          <div class="snippet"><p class="comment">// file permissions<br />// which user? u user/owner g group o other a all<br />// what to do? + add this permission - remove this permission = set exactly this permission<br />// which permissions? r read w write x execute<br />// add execute permission to all</p><code>$ chmod a+x perl_script.pl</code></div>

          <div class="snippet"><p class="comment">// get first 100 lines of file1.txt and output it to file1_a.txt</p><code>$ head -100 file1.txt &gt; file1_a.txt</code></div>

          <div class="snippet"><p class="comment">// count number of lines</p><code>$ wc -l file.txt</code></div>

          <div class="snippet"><p class="comment">// delete job on the farm</p><code>$ sudo -u master qdel 1190278</code></div>

          <div class="snippet"><p class="comment">// unzip a piped zip file</p><code>$ wget -qO- -O tmp.zip --user-agent "libwww-perl/5.805" http://datafeed.api.exproductserve.com/datafeed/compression/zip/ &amp;&amp; unzip tmp.zip &amp;&amp; rm tmp.zip</code></div>
          
          <div class="snippet"><p class="comment">// check syntax only (runs BEGIN and CHECK blocks)</p> 
          <code>$ perl -c r13678.pl</code></div>
          
          <div class="snippet"><p class="comment">// run program under debugger</p> 
          <code>$ perl -d r13678.pl</code></div>

          <div class="snippet"><p class="comment">//checkout sources for editing</p> 
          <code>$ cvs checkout</code></div>

          <div class="snippet"><p class="comment">// brings work tree in sync with repository</p>
          <code>$ cvs up</code></div>

          <div class="snippet"><p class="comment">// compare different revisions of a file</p> 
          <code>$ cvs diff r13678.pl</code></div>

          <div class="snippet"><p class="comment">// checks files into the repository</p> 
          <code>$ cvs commit -m "Initial commit" r13678.pl</code></div>

          <div class="snippet"><p class="comment">// diff between two versions of same file</p>
          <code>$ cvs diff -r &lt; first version &gt; -r &lt; second version &gt; oldfile</code></div>

          <div class="snippet"><p class="comment">// revert to older version of a file</p>
          <code>$ cvs update -j 1.7 -j 1.5 oldfile </code></div>

          <div class="snippet"><p class="comment">// install Perl module</p><code>$ sudo perl -MCPAN -e 'install JSON::PP'</code></div>
        </td>
        <td class="side-pane">
        </td>
      </tr>
    </table>
    
    <div id="footer"></div>
</body>
</html>

