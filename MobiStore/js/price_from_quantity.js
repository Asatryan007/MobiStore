var elem = document.getElementById('form-control');
var quantity = parseInt(elem.getAttribute("value"));
var price_elem = document.getElementById("price") ;
var price = parseInt(price_elem.getAttribute("value"));
var plus = document.getElementById('plus');
var minus = document.getElementById('minus');


plus.addEventListener('click' ,function(){
    quantity = parseInt(elem.getAttribute("value"));
    product = price * quantity;
    price_elem.innerHTML = product
  })

  minus.addEventListener('click',function(){
    quantity = parseInt(elem.getAttribute("value"));
    product = price * quantity;
     price_elem.innerHTML = product
  })