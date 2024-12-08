<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./public/css/bootstrap.css">
</head>
<body>

  <script>
const x = 50 + 18;
const y = 60 - 25 ;
const mult = 25 * 6 ;
const del = 685 / 35 ;
console.log("Result ", x ,y ,mult, Math.floor(del))
let num = null ;
document.write("<br/> Math " + num++ )
num += 25 
document.write("<br/> After  " + ++num )
num **= 2
document.write("<br/> After  " + ++num )
num /= 4

document.write("<br/> Delete %  " + (num % 182.5) )
let result = (25 % 8 > 2) ? "number more ":"Number then"
console.log(result)
let rbit = 0b1100;
document.write("<br/> Thwo " + rbit)
document.write("<br/> ####################################################<br/> ")
console.log(true && false);
console.log(true && true);

const money = 980;
const age = 21 ;
const tred = money < 1000 && age > 22
document.write("<br/> Logica "+tred)
document.write("<br/> ####################################################<br/> ")
let dd = 25;
dd < 25 && console.log("THis age < 25");
dd >= 25 && console.log("Tghis is ok");

  </script>


  <script src="./public/js/bootstrap.js"></script>
</body>
</html>