<!-- Google Suggest -->
<!-- <script type="text/javascript">
  document.write(unescape("%3Cscript src='" + (("https:" == document.location.protocol) ? "https://" : "http://") + "www.google.com/jsapi' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  google.load('search', '1');
  google.setOnLoadCallback(function() {
    google.search.CustomSearchControl.attachAutoCompletion(
      '001779225245372747843:mdsmtl_vi1a', // Step 7: Update this value with your search engine unique ID. Submit a request to the OTech Service Desk if you don't already know your unique search engine ID.
      document.getElementById('search_local_textfield'),
      'local_form');
  });
</script>
 -->

<form id="local_form" action="http://www.google.com/cse"> <!-- the form action will be changed using javascript -->
    <div class="textfield-container">
        <label for="search_local_textfield" accesskey="s" class="hidden">Search this site: </label>
        <input type="text" name="q" id="search_local_textfield" class="search-textfield" size="35" autocomplete="off" value="Search Services, Agencies, and More..." onfocus="if(this.value=='Search Services, Agencies, and More...')this.value=''" onblur="if(this.value=='')this.value='Search Services, Agencies, and More...'" />

        <input type="hidden" name="cx" value="001779225245372747843:mdsmtl_vi1a" /> <!-- Step 7: Update this value with your search engine unique ID. Submit a request to the OTech Service Desk if you don't already know your unique search engine ID. -->
        <input type="hidden" name="cof" value="" /> <!-- this value will be set using javascript -->
        <input type="hidden" name="ie" value="UTF-8" />
        <input type="hidden" name="nojs" value="1" />

    </div>
    <div class="submit-container">
        <button type="submit"><span class="ca-gov-icon-search"><span class="sr-only">Search</span></span></button>
    </div>
    <!-- <div class="search-locator"><span class="ca-gov-icon-compass"></span><small class="located-city-name">Sacramento</small></div> -->
    <button type="button" class="close close-search" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</form>
