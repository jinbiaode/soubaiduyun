<HTML><HEAD><TITLE></TITLE>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
<!--
BODY {
	MARGIN: 0px
}
TD {
	FONT-SIZE: 9pt; FONT-FAMILY: SimSun
}

.style2 {color: #000000}
a:active    {COLOR: #000000; text-decoration:underline}
a:link       {COLOR: #000000; text-decoration:underline}
a:visited       {COLOR: #000000; text-decoration:underline}
a:hover       {COLOR: #000000; text-decoration:underline}
-->
</style>

<script type="text/javascript" src="js/jquery1.4.2.js"></script>
<script type="text/javascript"> 
$(function(){
	$("#pan").click(function(){
		$("#fo").attr("action","ss.php");
	})
})


</script>
</HEAD>
<BODY>


 <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 background=images/bg_toolbar.jpg>
        <TR>
          <TD colspan="2" vAlign=top style="PADDING-LEFT: 10px; COLOR: #335997" height="2"></TD>
        </TR>
        <TR>
          <TD vAlign=top style="PADDING-LEFT: 10px; COLOR: #335997"><a href="http://www.sousuoa.com" target=_parent><img src="images/aa.png" border="0" align="baseline"></a></TD>
          <TD vAlign=top style="PADDING-LEFT: 10px; COLOR: #335997" nowrap><SPAN 
            style="FONT-WEIGHT: bold; COLOR: #000000">
            <form action="s.php" id="fo" method="get" name="f" target=_parent>
<p style="margin: 0px; padding: 0px;">  
	<!--<a href="http://www.sousuoa.com" target="_top"><span class="style2">返回首页</span></a>&nbsp;--!>
<!--
<a href="http://www.google.com.hk/search?hl=zh_CN&q=&start=0" target="_blank"><span class="style2">展开Google</span></a>&nbsp;
<a href="http://www.baidu.com/s?ie=gb2312&word=&pn=0" target="_blank"><span class="style2">展开百度</span></a>&nbsp;&nbsp;--!>
		<input size="60" name="q" type="text" value="<?php echo $_GET["q"]; ?>">
	<!--<select name="num">
    	<option value="10" selected="selected">每页显示10条</option>
    	<option value="20">每页显示20条</option>
    	<option value="50">每页显示50条</option>
    	<option value="100">每页100条</option></select>&nbsp;--!>

	<input  id="pan" name="pan" value="网盘搜索" type="submit">
	<input value="网页搜索" type="submit" style="color:red">
		
	
	<!--&nbsp;	&nbsp;	&nbsp;	&nbsp;<a href="suggestions.htm" target="_blank">联系我们</a>--!>
    	</center>
    	</form>
        </TD></TR></TABLE> 
