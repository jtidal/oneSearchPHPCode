<html>
<body>
<div>
	

<form action="oneSearch.php" enctype="application/x-www-form-urlencoded; charset=utf-8" method="post" name="searchForm" role="search" class="form-inline">

<select name="selectStyle" style="margin: 0px 5px 5px 0px"  class="form-control" aria-label="Search by Type">
<option label="Print and eBooks" selected="selected">Books (Print + eBooks)</option>
<option label="Everything">Everything</option>
<option label="Articles">Articles</option>
<option label="Print Books">Books (Print)</option>
<option label="eBooks">eBooks</option>
<option label="Video, Audio and More">Media</option>
</select> 
</div>

<div class="col-md-6">
<input name="institution" type="hidden" value="NY" /> 
<input name="vid" type="hidden" value="ny" /> 
<input name="group" type="hidden" value="GUEST" /> 
<input name="onCampus" type="hidden" value="true" /> 
<input name="search_scope" type="hidden" value="IZ_CI_AW" /> 
<input id="primoQuery" name="query" type="hidden" /> 
<input label= "search query" id="primoQueryTemp" class="focus form-control" name="queryTemp" size="30" type="text" placeholder="Find books, media, and more" aria-label="Input search query here"/>

</div>

<div class="col-md-2">
<input alt="Search" class="btn btn-info" id="submit" title="Search books, articles &amp; more" type="submit" value="Search" />
</div>

<div class="msg"></div>

</div>

<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<div style="padding-top:10px;">
    <label class="radio-inline">
        <input type="radio" name="radioSelection" checked="checked" value="any" >Keyword</label>
    </label>
    <label class="radio-inline" style="margin-left:15px">
      <input type="radio" name="radioSelection" value="title">Title</label>
    </label>
    <label class="radio-inline">
      <input type="radio" name="radioSelection" value="creator">Author</label>
    </label>
        <label class="radio-inline">
      <input type="radio" name="radioSelection" value="sub">Subject</label>
    </label>
</div>
</div>

</div>
</div>

<div class="row">
<div class="col-md-12">
<p style="padding: 10px; float: left;"><a href="https://cuny-ny.primo.exlibrisgroup.com/discovery/search?vid=01CUNY_NY:CUNY_NY&mode=advanced" style="color:#045099;; text-decoration: none;">Advanced Search</a><p>
</div>
</div><!--row-->
</form>

<div class="msg"></div>
</div>

<div style="text-align: center;">
<p>Didn't find what you were looking for? <a href="help/ask/index.php"  style="color:#045099;; text-decoration: underline;">Ask A Librarian</a> or check out our <a href="https://library.citytech.cuny.edu/help/tutorials/index.php" style="color:#045099;; text-decoration: underline;">tutorials</a>.</p>
</div>

	
</html>
</body>
