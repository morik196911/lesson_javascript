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
const people = ["user","Hena"];
const foo = Array(3);
foo[0] = "f0";
foo[1] = "f1";
//foo[2] = "f2";
//foo[3] = "f3";
console.log(foo)
people[5] = "Tom";
console.log(people)
const number = [[1,2,3],[5,6,7]]
 const people2= [
        ["Tom", 25, false],
        ["Bill", 38, true],
        ["Alice", 21, false]
]
console.log(people2[1][0])
let foo1 = 5;
switch (foo1) {
  case 5:
    console.log("5 ok")
    foo1 += 25
    //break;
    case 4:
    console.log("4 ok", foo1)
    break;
    case 3:
    console.log("3 ok")
    //break;

  default:
    console.log("In not number")
    break;
}
for(let i = 0; i < people.length ; i++){
  document.write(people[i]+"<br/>")
}
for(let i = 0; i < 10 ; i +=2){
  console.log(`Result ${i} == `,++i)
}
  </script>


  <script src="./public/js/bootstrap.js"></script>
</body>
</html>