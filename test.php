<!DOCTYPE html>
<html>
<body>

<p>Click the button to display a random number between 1 and 10.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = Math.floor((Math.random() * 13) + 15);
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>