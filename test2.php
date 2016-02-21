<script type="text/javascript">
//$.get("pop/download-pop.php");

/*$.get(
    "pop/download-pop.php",
    function(data) { load(data); }
);*/

//$.load('pop/download-pop.php');
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","pop/download-pop.php",true);
xmlhttp.send();
</script>