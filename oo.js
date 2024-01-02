function Create2DArray(rows,columns) {
    var x = new Array(rows);
    for (var i = 0; i < rows; i++) {
        x[i] = new Array(columns);
    }
    return x;
 }
 var arr = Create2DArray(60,60);
  arr[0][0]="Idli";
  arr[0][1]=30;
  arr[1][0]="Pulav";
  arr[1][1]=40;
  arr[2][0]="Poori";
  arr[2][1]=40;
  arr[3][0]="masala";
  arr[3][1]=50;
  arr[4][0]="gbaje";
  arr[4][1]=40;
  arr[5][0]="Smeals";
  arr[5][1]=70;
  arr[6][0]="Nmeals";
  arr[6][1]=90;
  arr[6][0]="Crice";
  arr[6][1]=50;
  arr[7][0]="Biryani";
  arr[7][1]=90;
  arr[8][0]="Frice";
  arr[8][1]=60;
  arr[9][0]="Noodles";
  arr[9][1]=70;
  arr[10][0]="PPuri";
  arr[10][1]=30;
  arr[11][0]="Samosa";
  arr[11][1]=20;
  arr[12][0]="Sandwich";
  arr[12][1]=40;
  arr[13][0]="Burger";
  arr[13][1]=50;
  arr[14][0]="Pasta";
  arr[14][1]=40;
  arr[15][0]="Fries";
  arr[15][1]=50;
  var total=0;
function buy(i){
    var name = arr[i][0];
    var price = arr[i][1];
    var x = document.getElementById("bill");
    var y = document.getElementById("bil");

    x.value+=name+"-";
    y.value+=price +"+";
    total += price;
}
function Total(){
    var t = document.getElementById("total");
    t.value = total ;
}

var tarr = Create2DArray(60,60);
tarr[0][0]="Smeals";
tarr[0][1]=70;
tarr[1][0]="Nmeals";
tarr[1][1]=100;
tarr[2][0]="Crice";
tarr[2][1]=40;
tarr[3][0]="Biryani";
tarr[3][1]=70;
tarr[4][0]="Frice";
tarr[4][1]=50;
tarr[5][0]="CChicken";
tarr[5][1]=80;
tarr[6][0]="Pcurry";
tarr[6][1]=190;
tarr[7][0]="cbiryani";
tarr[7][1]=90;
tarr[8][0]="Rchicken";
tarr[8][1]=60;
tarr[9][0]="Cmeals";
tarr[9][1]=70;
tarr[10][0]="Jalebi";
tarr[10][1]=30;
tarr[11][0]="Dhoklas";
tarr[11][1]=30;
tarr[12][0]="Rasgulla";
tarr[12][1]=30;
tarr[13][0]="cookies";
tarr[13][1]=40;
tarr[14][0]="cupcake";
tarr[14][1]=50;
tarr[15][0]="Pancake";
tarr[15][1]=90;

var total=0;
function tbuy(i){
  var name = tarr[i][0];
  var price = tarr[i][1];
  var x = document.getElementById("bill");
  var y = document.getElementById("bil");

  x.value+=name+"-";
  y.value+=price +"+";
  total += price;
}
// function buy(i){
//     var name = arr[i][0];
//     var price = arr[i][1];
//     var x = document.getElementById("bill");
//     var p = document.createElement("span");
//     x.append(p);
//     p.innerText = name + " " + price + "$";
//     total += price;
//     var t = document.getElementById("total");
//     t.innerText = total + "$";
//     var t0 = document.getElementById("total0");
//     t0.innerText = total + "$";
// }  
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
