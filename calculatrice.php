<!DOCTYPE html>
    <html>
<head>
<title>calculatrice</title>
<script language="javascript">
function selon()
{
var saisie1 = parseFloat(document.forms["formulaire"].elements["saisie1"].value);
var saisie2 = parseFloat(document.forms["formulaire"].elements["saisie2"].value);
var choix = document.forms["formulaire"].elements["choix"];

if(choix[0].checked) {
        var r=saisie1 + saisie2;
        alert(r);}
if(choix[1].checked) {
        var r=saisie1 - saisie2;
        alert(r);
}if(choix[2].checked) {
        var r=saisie1 * saisie2;
        alert(r);
}
if(choix[3].checked) {
        var r=saisie1 / saisie2;
        alert(r);
}
}
</script>
</head>
<body>
<form name="formulaire">
<p>variable1:<input name="saisie1" type="text" ></p>
<p>variable2:<input name="saisie2"<p>variable2:<input name="saisie2" type="text" ></p>
<center>
<input type="button" value="calculer" onclick="selon();return(false)">
<input type="reset" value="effacer"><br>
</center>
<input name="choix" type="radio" value="0">addition<br>
<input name="choix" type="radio" value="1">soustraction<br>
<input name="choix" type="radio" value="2">multiplication<br>
<input name="choix" type="radio" value="3">division<br>
</form>
</body>

</html>
