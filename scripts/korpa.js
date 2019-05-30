let korpa = document.getElementById("cart-value").innerHTML;
var kolicina = 0;
var theTotal = 0;
var cart = new Array();
function addTItemToCart(id){
    cart.push(id);
    var str = "?";
    kolicina = cart.length;
    if(kolicina > 1){
        for(i = 0; i <= kolicina-1; i++){
            str+="id"+i+"="+cart[i]+"&";
           }
           str += "kolicina="+kolicina;       
    }else if(kolicina == 1){
        var str = "?id1="+cart[0]+"&kolicina=1";       
    }
    document.getElementById('cart').setAttribute("href", "cart.php"+str);
}




function getValue(val){

    
    theTotal = Number(theTotal) + Number(val);
    $('#cart-value').text(theTotal +" RSD");  
    
    

    
}



function plati(){
    var email = document.getElementById("contact-form-email").value;
    
        document.getElementsByClassName('buy').setAttribute("action", "TransactionSucces.php?theTotal="+cena+"&kolicina="+kolicina+"&email="+email);


    
   // var value = document.getElementById('buy-form-submit').value;
    //window.open("TransactionSucces.php?theTotal="+value);
    window.close();

}

    






