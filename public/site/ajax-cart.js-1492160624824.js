var GLOBAL = {

  common : {
    init: function(){
      $('.add_to_cart').bind( 'click', addToCart );
    }
  }
}

var UTIL = {

  fire : function(func,funcname, args){
    var namespace = GLOBAL;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
      namespace[func][funcname](args);
    }
  },

  loadEvents : function(){
    var bodyId = document.body.id;

    // hit up common first.
    UTIL.fire('common');

    // do all the classes too.
    $.each(document.body.className.split(/\s+/),function(i,classnm){
      UTIL.fire(classnm);
      UTIL.fire(classnm,bodyId);
    });
  }

};
$(document).ready(UTIL.loadEvents);

/**
 * Popup notify add-to-cart
 */
function notifyProduct($info){
  var wait = setTimeout(function(){
    $.jGrowl($info,{
      life: 5000
    });	
  });
}
/**
 * Ajaxy add-to-cart
 */
function addToCart(e){

  if (typeof e !== 'undefined') e.preventDefault();

  var $this = $(this);
  
  var form = $this.parents('form');

  $.ajax({
    type: 'POST',
    url: 'add.js'/*tpa=http://bizweb.dktcdn.net/cart/add.js*/,
    async: false,
    data: form.serialize(),
    dataType: 'json',
    error: addToCartFail,
    success: addToCartSuccess,
    cache: false
  });

  
}

function addToCartSuccess (jqXHR, textStatus, errorThrown){

  $.ajax({
    type: 'GET',
    url: 'cart.js'/*tpa=http://bizweb.dktcdn.net/cart.js*/,
    async: false,
    cache: false,
    dataType: 'json',
    success: updateCartDesc
  });
 var $info = '<div class="row"><div class="col-sm-4"><a href="'+ jqXHR['url'] +'"><img src="'+ Bizweb.resizeImage(jqXHR['image'], 'small') +'" alt="'+ jqXHR['name'] +'"/></a></div><div class="col-sm-8"><div class="jGrowl-note">Sản phẩm đã cho <a href="http://bizweb.dktcdn.net/cart">Giỏ hàng</a></div><a class="jGrowl-title" href="'+ jqXHR['url'] +'">'+ jqXHR['name'] +'</a></div></div>';
  notifyProduct($info);

  // Let's get the cart and show what's in it in the cart box.	
  Bizweb.getCart(function(cart) {
    Bizweb.updateCartFromForm(cart, '#jPanelMenu-menu .cart_list');		
  });
}

function addToCartFail(jqXHR, textStatus, errorThrown){
  var response = $.parseJSON(jqXHR.responseText);
  
  var $info = '<div class="error">'+ response.description +'</div>';
  notifyProduct($info);
}