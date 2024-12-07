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
let user , t, foo = ()=>{return 258} ;
user = "Toni";
const name = "Gena";
console.log(name)
const arr = ["Boolean","String","BigInt","Undefined",
"Symbol","Null","Number","Object"]

document.write("<ul>");
for(let item of arr){
  document.write("<li class = 'text-primary'>"+item + "</li>");
}
document.write("</ul>");
document.write("<br/>"+Number.MIN_VALUE)
document.write("<br/>"+Number.POSITIVE_INFINITY)
document.write("<br/> type param "+typeof arr)
let ff = `My name ${name}`
document.write("<br/>"+ff);
const text = `Hello
My family
Mother
Fathre
`
document.write(text)
console.log(text)
let data , email = null;
document.write("<br/>"+data + " == "+email)
const User = {};
User.name = "Lena";
User.age = 25;
document.write("<br/> Object typeof "+typeof User)
console.log(User)
document.write("<br/> Object typeof "+Object.entries(User))
let id ;
document.write("<br/>  typeof "+typeof id)
  </script>


  <script src="./public/js/bootstrap.js"></script>
</body>
</html>