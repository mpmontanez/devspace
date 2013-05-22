<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />

  <title>MySQL</title>
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
          <div class="snippet">MySQL Statements</div>
    
          <div class="snippet"><p class="comment">// set pager to see long query with less command</p><code>$ mysql [abu:pricegrabber]
          02:27:23pm&gt; pager less PAGER set to 'less'</code></div>

          <div class="snippet"><p class="comment">// unset pager to see query printed to stdout</p><code>$ mysql [abu:pricegrabber]
          02:27:37pm&gt; nopager PAGER set to stdout</code></div>

          <div class="snippet"><p class="comment">// change mysql prompt to include timestamp</p><code>$ prompt mysql (\R:\m:\s)&gt;</code></div>

          <div class="snippet"><p class="comment">// use the like syntax (%) are wildcards</p><code>$ select description from prodpg_nonsku
          where description like '%out of stock%' and retid=21086;</code></div>

          <div class="snippet"><p class="comment">// select marketing_text that has 2 or more consecutive capital letters</p><code>$ select
          count(*) from prodpg_nonsku where marketing_text REGEXP binary '[A-Z]{2}' and
          retid=22210;</code></div>

          <div class="snippet"><p class="comment">// select marketing_text that contains a question mark</p><code>$ select marketing_text from
          prodpg_nonsku where retid=21577 and marketing_text REGEXP "[?]";</code></div>

          <div class="snippet"><p class="comment">// find out which table on which database a field exists</p><code>$ select distinct
          table_schema,table_name from information_schema.columns where column_name in
          ('attribute_id');</code></div>

          <div class="snippet"><p class="comment">// show the threads running</p><code>$ show &lt;full&gt; processlist;</code></div>

          <div class="snippet"><p class="comment">// get info about specific query (like state and time running)</p><code>$ select * from
          information_schema.processlist where info like '%cat_pri=99%'\G</code></div>

          <div class="snippet"><p class="comment">// get info about all queries that are currently not locked up</p><code>$ select * from
          information_schema.processlist where state not like '%locked%';</code></div>

          <div class="snippet"><p class="comment">// update or set multiple columns</p><code>$ update sm_strings_submissions set status='pending
          search match',allow_no_match=1 where submission_id=106865 limit 1;</code></div>

          <div class="snippet"><p class="comment">// get scripts that need to be rehabbed</p><code>$ select r.retid from import_schedule
          i,retailers r where i.script_name like 'r%.pl' and i.id_type='retid' and
          i.some_id=r.retid;</code></div>

          <div class="snippet"><p class="comment">// see when last gbs items were processed</p><code>$ mysql [feedmanager-dt1:feeds]
          01:33:11pm&gt; select item_id,processed from retailer_feed_items where retid=20912
          and processed&gt;='2011-07-25 00:00:00' order by processed limit 5;</code></div>

          <div class="snippet"><p class="comment">// copy record from melody to another db<br />//remove first line in file</p><code>$ mysql -h melody -e "select * from prodpg where masterid in (844169395,844169469 , ...)" &gt; ~/public_html/data.txt </code></div>

          <div class="snippet"><p class="comment">// remove first line in file</p><code>$ mysql -h triton -e "select * from prodmaster where distid='35884'" &gt; ~/public_html/data.txt</code></div>

          <div class="snippet"><p class="comment">// insert record into table</p><code>$ load data local infile '/home/etienne/public_html/data.txt' into table prodmaster;</code></div>

          <div class="snippet"><p class="comment">// remove first line in file</p>
          <code>$ mysql -h triton -e "select * from retailers where retid=21617" &gt; ~/public_html/data.txt</code></div>

          <div class="snippet"><p class="comment">// insert record into table</p><code>$ load data local infile '/home/etienne/public_html/data.txt' into table retailers;</code></div>

          <div class="snippet"><p class="comment">// replace record in table</p><code>$ load data local infile '/home/etienne/public_html/data.txt' replace into table retailers;</code></div>

          <div class="snippet"><p class="comment">// shows warnings from load command</p><code>$ show warnings;</code></div>
        </td>
        <td class="side-pane">
        </td>
      </tr>
    </table>
    
    <div id="footer"></div>
</body>
</html>

