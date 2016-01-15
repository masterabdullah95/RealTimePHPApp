<!DOCTYPE html>
<html>
<title>Real Time PHP App</title>
<body>

<p>this is new p</p>
<div id="result"></div>

<script>
if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("server-push.php");
    //console.log(source);
    source.onmessage = function(event) {
        //document.getElementById("result").innerHTML += event.data + "<br>";
        document.getElementById("result").innerHTML = event.data + "<br>";
    };
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>

</body>
</html>
