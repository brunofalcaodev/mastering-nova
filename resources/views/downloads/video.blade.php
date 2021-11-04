<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<script type="text/javascript">
function testingAPI(){
    var key = "8a1c6a354c884c658ff29a8636fd7c18";
    var url = "https://api.fantasydata.net/nfl/v2/JSON/PlayerSeasonStats/2015";
    console.log(httpGet(url,key));
}


function httpGet(url,key){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", url, false );
    xmlHttp.setRequestHeader("Ocp-Apim-Subscription-Key",key);
    xmlHttp.send(null);
    return xmlHttp.responseText;
}

</script>

</body>
</html>