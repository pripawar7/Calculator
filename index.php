<!DOCTYPE html>
<html>
    <head>
    <title>Calculator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
input[type="button"]{
    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #blue), color-stop(1, #blue) );
    background:-moz-linear-gradient( center top, #blue 5%, #blue 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#blue', endColorstr='#blue');
    background-color:#blue;
    border:3px solid #blue;
    display:inline-block;
    color:#red;
    font-family:Arial;
    font-size:15px;
    line-height:25px;
    text-decoration:none;
    text-align:center;
    margin-bottom:1px;
    margin-left: 1px;
    margin-right:1px ;
    margin-top:1px ;
    height: 30px; 
}
input[type="button"]{
  width: 75px;
}
#btnC{
        width:75px;
}
#btn0{
        width:75px;
}
#btn0,#btndecimal,#btndivide {
    margin-right: 0.1px;
}
#btn7,#btn4,#btn1,#btn0,#btnequals {
    margin-left: 0.01px;
}        
#btnequals {
    height: 30px;
    width: 75px;
    margin-top: 3px;
}
       input[type="button"]:active {
           position:relative;
            background:#red;
} 
        input:focus {
            outline:0;
        }
   input[type="Text"] {
       padding-left: 10px;
       margin-bottom: 1.5px;
            font-size: 100px;
            background-color: #202020 ;n
            height:90px;
            width: 230px;
            border:none;
       color:white;
        }
        body {
            background-color: #yellow ;
            overflow: hidden;
        }
        #about {
        font-size: 45px;
        }
    </style>
</head>
<body>
    <FORM name="Keypad" action="">
    <input name="ReadOut" id="output" type="Text" size=10 value="" readonly>
    <table>
<tr>
  <td><input id="btn7" type="Button" value="7" onclick="NumPressed(7)"></td>
  <td><input id="btn8" type="Button" value="8" onclick="NumPressed(8)"></td>        
  <td><input id="btn9" type="Button" value="9" onclick="NumPressed(9)"></td>
  
</tr>
<tr>
  <td><input id="btn4" type="Button" value="4" onclick="NumPressed(4)"></td>
  <td><input id="btn5" type="Button" value="5"onclick="NumPressed(5)"></td>        
  <td><input id="btn6" type="Button" value="6" onclick="NumPressed(6)"></td>
</tr>  

<tr>
  <td><input id="btn1" type="Button" value="1" onclick="NumPressed(1)"></td>
  <td><input id="btn2" type="Button" value="2" onclick="NumPressed(2)"></td>        
  <td><input id="btn3" type="Button" value="3" onclick="NumPressed(3)"></td>
</tr>
  
<tr>
  <td><input id="btnmultiply"type="Button" value="*" onclick="Operation('*')"></td>
  <td><input id="btnminus"   type="Button" value="-" onclick="Operation('-')"></td>
  <td><input id="btndivide"  type="Button" value="/" onclick="Operation('/')"></td>
</tr>

<tr>
  <td><input id="btnplusminus" type="Button" value=" +/- " onclick="Neg()"></td>
  <td><input id="btnplus"      type="Button" value="+"     onclick="Operation('+')"></td>
  <td><input id="btnC"         type="Button" value="C"     onclick="Clear()"></td>
</tr>

<tr>
  <td><input id="btn0" type="Button" value="0" onclick="NumPressed(0)"></td>
  <td><input id="btndecimal" type="Button" value="." onclick="Decimal()"></td>      
  <td><input id="btnequals"  type="Button" value="=" onclick="Operation('=')"></td>
</tr>

</table>
 
 </FORM>
<script>

var FKeyPad = document.Keypad;
var Accumulate = 0;
var FlagNewNum = false;
var PendingOp = "";
function NumPressed (Num) {
if (FlagNewNum) {
FKeyPad.ReadOut.value  = Num;
FlagNewNum = false;
   }
else {
if (FKeyPad.ReadOut.value == "0")
FKeyPad.ReadOut.value = Num;
else
FKeyPad.ReadOut.value += Num;
   }
}
function Operation (Op) {
var Readout = FKeyPad.ReadOut.value;
if (FlagNewNum && PendingOp != "=");
else
{
FlagNewNum = true;
if ( '+' == PendingOp )
Accumulate += parseFloat(Readout);
else if ( '-' == PendingOp )
Accumulate -= parseFloat(Readout);
else if ( '/' == PendingOp )
Accumulate /= parseFloat(Readout);
else if ( '*' == PendingOp )
Accumulate *= parseFloat(Readout);
else
Accumulate = parseFloat(Readout);
FKeyPad.ReadOut.value = Accumulate;
PendingOp = Op;
   }
}
function Decimal () {
var curReadOut = FKeyPad.ReadOut.value;
if (FlagNewNum) {
curReadOut = "0.";
FlagNewNum = false;
   }
else
{
if (curReadOut.indexOf(".") == -1)
curReadOut += ".";
   }
FKeyPad.ReadOut.value = curReadOut;
}
function ClearEntry () {
FKeyPad.ReadOut.value = "0";
FlagNewNum = true;
}
function Clear () {
Accumulate = 0;
PendingOp = "";
ClearEntry();
}
function Neg () {
FKeyPad.ReadOut.value = parseFloat(FKeyPad.ReadOut.value) * -1;
}
function Percent () {
FKeyPad.ReadOut.value = (parseFloat(FKeyPad.ReadOut.value) / 100) * parseFloat(Accumulate);
}
</script>
<script>
function myFunction() {
    alert("Priyanka");
}
</script>
</body>
</html>
