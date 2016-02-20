<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Hello World - Google  Web Search API Sample</title>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/themes/ui-lightness/jquery-ui.css" type="text/css" media="all" />
    <script src="https://www.google.com/jsapi" type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
    //<![CDATA[
    google.load('search', '1');
    google.load("jquery", "1.5.2");
    google.load("jqueryui", "1.8.12");

    function OnLoad() {

        var searchComplete = function(searchControl, searcher){
            $('#searchResults').dialog({modal: true, width: 700, height: 400, position: [50, 50]});
            for (result in searcher.results) {
                var content = searcher.results[result].content;
                var title = searcher.results[result].title;
                var url = searcher.results[result].url;
                $('#searchResults ul')
                    .append($('<li></li>')
                        .append($('<a/>').attr('href', url).text(title))
                        .append($('<p/>').text(content)));
            }
        };

        // called on form submit
        newSearch = function(form) {
          if (form.input.value) {
            // Create a search control
            var searchControl = new google.search.SearchControl();

            // Add in a set of searchers
            searchControl.addSearcher(new google.search.WebSearch());
            searchControl.addSearcher(new google.search.VideoSearch());

            // tell the searchControl to draw itself (without this, the searchComplete won't get called - I'm not sure why)
            searchControl.draw();

            searchControl.setLinkTarget(google.search.Search.LINK_TARGET_SELF);           
            searchControl.setSearchCompleteCallback(this, searchComplete);
            searchControl.execute(form.input.value);
          }
          return false;
        }

        // create a search form without a clear button
        // bind form submission to my custom code
        var container = document.getElementById("searchFormContainer");
        this.searchForm = new google.search.SearchForm(false, container);
        this.searchForm.setOnSubmitCallback(this, newSearch);
    }
    google.setOnLoadCallback(OnLoad);

    //]]>
    </script>
  </head>
  <body>
    <div id="searchFormContainer">Loading</div>
    <div id="searchResults" title="Search Results">
        <ul></ul>
    </div>
	<br /><br /><br />
	
	<form id="cse-search-box" action="http://google.com/cse">
  <input type="hidden" name="cx" value="012047784866087510305:sm63m7qjsoq" />
  <input type="hidden" name="ie" value="UTF-8" />
  <input type="text" name="q" size="31" />
  <input type="submit" name="sa" value="Search" />
</form>
<img src="http://www.google.com/cse/images/google_custom_search_smwide.gif">

	<br /><br /><br />
	
	<form method="get" action="http://www.google.com/search" target="_blank">
	<input type="text" name="q" size="31" maxlength="255" value="" /> 
	<input type="submit" value="Google Search" /> 
	<input type="hidden" name="sitesearch" value="www.pmt-fl.com"/> <br /> </form>

  </body>
</html>