<html> 
<head>
<title>HTML with PHP</title>
<style>
body {
margin: 0px;
}
table {
    border-collapse: collapse;
    text-align: left;
    line-height: 1.5;
    border-top: 1px solid #ccc;
    border-left: 3px solid #369;
  margin : 20px 10px;
}
table th {
    width: 147px;
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    color: #153d73;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;

}
table td {
    width: 349px;
    padding: 10px;
    vertical-align: top;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
}
</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.js"></script>
<script>
var test;
function loadApi(v1, v2) {
	var param =  { query : $("#query").val()};
   	$.ajax({
		type : 'POST',
		dataType : 'text',

		url : 'http://221.148.247.48/app_nw/query.php', // TB
		data : param,
		success: function (e){
		test = e;
			$('#response').html(e);			
		},
		error : function(data){
			$('#response').html(data);			
		}
	});	
}
</script>
</head>

<body>
<p style="font-weight: bold;font-size: 26px;color: red;">절대 풀로 셀렉트 날리지 마세요. limit 걸어서 날려야함</p>
<label>Query: </label><br />
<form name="form" method="post"> 
<textarea id="query" name="query" rows="5" style="width: 800px;"></textarea><br />
<button type="button" onclick="loadApi('submit');">전송</button>
<form>
<br />
<div id="response" width="800" height="1000"></div>



</body>
</html>
