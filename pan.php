
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>test</title>	

<script type="text/javascript" src="js/jquery1.4.2.js"></script>

<link type="text/css" href="css/styles2.css" rel="stylesheet" />
<link href="css/base.css" rel="stylesheet" type="text/css" />
</head>
<div id="search-result">
  <div id="search-header">
    <div id="search_outer">
      <div id="search_inner">
       <!-- 
    <form action="#" id="cse-search-box" onSubmit="" method="get">
    -->
    <input type="submit" id="sa" value="网盘搜索" onclick="javascript:load()"/>
    <input type="text" Sug="1" name="wd" id="q"  maxlength="100" class="s_ipt" autocomplete="off" value="<?php echo $_GET["q"]; ?>" class="search_input" tabindex="1" maxlength="100" autocomplete="off" id="keywords"  />
   
 </div>
 </div>
</div>
</div>

<div id="search_result">
         <div id="cse2"><div id="loading" style="text-align:left; font-size:15px; width:-120px; height:60px; width:100%;">正在加载数据，请稍后....请不要离开...</div>
</div>
<script type="text/javascript"> 
var data = new Array("", "partner-pub-8791361889136207:2976854086", "page");
$(document).ready(function() {
  console.log("q >> "+$("#q").val()+($("#q").val()!=""))
  if($("#q").val()!=""){
    load();
  }else{
    $("#search_result").hide();
  }
}); 

function load(){
    $("#search_result").show();
    $.getScript("js/jsapi.js",function() {
      loadSearch();
      $(function() {
          data[2] = $("#wp").val();
          switch(data[2]){
              case 'page' :
              data[1] = "partner-pub-8791361889136207:2976854086";
              break;
             default :
             data[1] = "partner-pub-8791361889136207:2976854086";
          } 
          data[0] = $("#q").val();
          if (data[0] == "") {
          return false;
          } else {
          loadSearch();
          $("#cse").hide();
          }
      });
  });
}
function loadSearch() {
google.load("search", "1", {
"callback": dataLoaded,
"nocss": true,
language: 'zh-CN'
});
} 
function dataLoaded() {
  var searchControl = new google.search.SearchControl();
  var searcher = new google.search.WebSearch();  //设置搜索类型为网页
  searcher.setSiteRestriction(data[1]);
  var options = new google.search.SearcherOptions();  
  options.setExpandMode(google.search.SearchControl.EXPAND_MODE_OPEN);
  searchControl.addSearcher(searcher, options);
  searchControl.setSearchCompleteCallback(true,
  function() {
  $("#cse").show();
});
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('V w$=["\\k\\7\\4\\l\\7\\4\\d\\8\\k\\n\\l\\i\\9\\8\\A","\\k\\7\\4\\12","\\j",""];V a=1N p.o.1t();a.1u(R.Q(w$[0]));a.1s(p.o.P.1p);x.1q(R.Q(w$[1]),a);x.1r(p.o.B.1w);T.S(p.o.B.1B,p.o.B.1C);T.S(p.o.B.1D,{ "\\i\\6\\g\\5\\4\\8":w$[2]});x.1A(p.o.P.1x);x.1y(w$[3]);x.1z(1v[1P]);',62,117,'||||x65|x74|x69|x73|x72|x6f||x20|x6e|x61|x3a|x70|x6c|x3c|x66|x30|x63|x2d|x3e|x68|search|google|x77|x3b|x2f|x67|x78|x64|_|searchControl|x2e|x31|x6d|Search|x76|x34|x79|x3d|x5e|x5f|u8bf7|x2a|u8bd5|x7a|x62|u5173|x75|SearchControl|getElementById|document|setRestriction|searcher|x33|var|x2c|x43|x29|u952e|x23|x42|x32|x35|u3002|x28|x25|u5b57|x44|u5427|u5230|u627e|u6709|u76f8|uff01|u6e90|u8d44|u6ca1|u8d77|u4e0d|u5bf9|uff0c|u6362|u5176|u4ed6|DRAW_MODE_TABBED|draw|setResultSetSize|setDrawMode|DrawOptions|setSearchFormRoot|data|FILTERED_CSE_RESULTSET|TIMEOUT_SHORT|setNoResultsString|execute|setTimeoutInterval|RESTRICT_SAFESEARCH|SAFESEARCH_OFF|RESTRICT_EXTENDED_ARGS|u300f|u641c|u4e00|u552f|u4f4f|u8bb0|u76d8|u300e|u7f51|new|x48|0x0|uff1a|x41|u5740'.split('|'),0,{ }))

}
</script>


    </div>
    <div id="result_bottom">
	</div>
</div>
</div>
<div class="clear"></div>
</div>
</body>
</html>
