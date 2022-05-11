// toggle

function toggle(div_toggle) {
  $("#"+div_toggle).toggleClass('d-flex');
  $("#"+hidediv).toggleClass('m-none');


}
function togglel(div_toggle) {
  $("#"+div_toggle).addClass('m-p-fixed');

  $("#"+div_toggle).show();


}

// load_hide_modal
function $load_hide_modal(link,loaddiv,hidediv){
  $("#"+loaddiv).load("#"+link);
  $("#"+hidediv).removeClass('m-p-fixed');
  $("#"+hidediv).hide();
  


}







/* global bootstrap: false */

(function () {
  'use strict'

  // Tooltip and popover demos
  document.querySelectorAll('.tooltip-demo')
    .forEach(function (tooltip) {
      new bootstrap.Tooltip(tooltip, {
        selector: '[data-bs-toggle="tooltip"]'
      })
    })

  document.querySelectorAll('[data-bs-toggle="popover"]')
    .forEach(function (popover) {
      new bootstrap.Popover(popover)
    })

  document.querySelectorAll('.toast')
    .forEach(function (toastNode) {
      var toast = new bootstrap.Toast(toastNode, {
        autohide: false
      })

      toast.show()
    })

  // Disable empty links and submit buttons
  document.querySelectorAll('[href="#"], [type="submit"]')
    .forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault()
      })
    })

  function setActiveItem() {
    var hash = window.location.hash

    if (hash === '') {
      return
    }

    var link = document.querySelector('.bd-aside a[href="' + hash + '"]')

    if (!link) {
      return
    }

    var active = document.querySelector('.bd-aside .active')
    var parent = link.parentNode.parentNode.previousElementSibling

    link.classList.add('active')

    if (parent.classList.contains('collapsed')) {
      parent.click()
    }

    if (!active) {
      return
    }

    var expanded = active.parentNode.parentNode.previousElementSibling

    active.classList.remove('active')

    if (expanded && parent !== expanded) {
      expanded.click()
    }
  }

  setActiveItem()
  window.addEventListener('hashchange', setActiveItem)
})()



/* global bootstrap: false */
(function () {
  'use strict'
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()



function hideme(btn,hide1,hide2,show,bt1,bt2) {

  $("#"+btn).css({"border-bottom":"2px solid red"});
  $("#"+bt1).css({"border-bottom":"2px solid transparent"});
  $("#"+bt2).css({"border-bottom":"2px solid transparent"});
  $("#"+hide1).hide();	
  $("#"+hide2).hide();
  $("#"+show).show();
  
  
  
  }




  // Create loader function

function   $space_load(link,frame) {
  
  $("#"+frame).load(link);   

}


// end of Loader function



// triger spacework


function $trigger(location) {
  $("#"+location).focus().trigger('click');
}




// end of trigger



// file geting with js




function $Fgetter(input,Flink) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function (e) {
      $('#'+Flink).attr('src', e.target.result);
     
      }
  
      reader.readAsDataURL(input.files[0]);
  }
  }

  
  // end getting file with js
// fire functions







function $space_nav_loader(link,frame,btnn) {
  
  
  var i = btnn;
  var a = 's-btn1';
  var b = 's-btn2';
  var c = 's-btn3';
  var d = 's-btn4';
  var e = 's-btn5';
  var f = 's-btn6';
  var g = 's-btn7';
  var h = 's-btn8';
  var z = 's-btn9';
  var j = 's-btn10';
  var k = 's-btn11';
  if (i == a) {
   $("#s-btn1").css({'border-bottom':'2px solid purple'});
$("#s-btn2").css({'border-bottom':'0px solid transparent'});
$("#s-btn3").css({'border-bottom':'0px solid transparent'});
$("#s-btn4").css({'border-bottom':'0px solid transparent'});
$("#s-btn5").css({'border-bottom':'0px solid transparent'});
$("#s-btn6").css({'border-bottom':'0px solid transparent'});
$("#s-btn7").css({'border-bottom':'0px solid transparent'});
$("#s-btn8").css({'border-bottom':'0px solid transparent'});
$("#s-btn9").css({'border-bottom':'0px solid transparent'});
$("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});

 }
 else if (i == b) {

    
$("#s-btn2").css({'border-bottom':'2px solid purple'});
$("#s-btn1").css({'border-bottom':'0px solid transparent'});
$("#s-btn3").css({'border-bottom':'0px solid transparent'});
$("#s-btn4").css({'border-bottom':'0px solid transparent'});
$("#s-btn5").css({'border-bottom':'0px solid transparent'});
$("#s-btn6").css({'border-bottom':'0px solid transparent'});
$("#s-btn7").css({'border-bottom':'0px solid transparent'});
$("#s-btn8").css({'border-bottom':'0px solid transparent'});
$("#s-btn9").css({'border-bottom':'0px solid transparent'});
$("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});

 }
 else if (i == c) {
    
      $("#s-btn3").css({'border-bottom':'2px solid purple'});
      $("#s-btn2").css({'border-bottom':'0px solid transparent'});
      $("#s-btn1").css({'border-bottom':'0px solid transparent'});
      $("#s-btn4").css({'border-bottom':'0px solid transparent'});
      $("#s-btn5").css({'border-bottom':'0px solid transparent'});
      $("#s-btn6").css({'border-bottom':'0px solid transparent'});
      $("#s-btn7").css({'border-bottom':'0px solid transparent'});
      $("#s-btn8").css({'border-bottom':'0px solid transparent'});
      $("#s-btn9").css({'border-bottom':'0px solid transparent'});
      $("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});
 }
      else if (i == 's-btn4') {

    
            $("#s-btn4").css({'border-bottom':'2px solid purple'});
            $("#s-btn2").css({'border-bottom':'0px solid transparent'});
            $("#s-btn3").css({'border-bottom':'0px solid transparent'});
            $("#s-btn1").css({'border-bottom':'0px solid transparent'});
            $("#s-btn5").css({'border-bottom':'0px solid transparent'});
            $("#s-btn6").css({'border-bottom':'0px solid transparent'});
            $("#s-btn7").css({'border-bottom':'0px solid transparent'});
            $("#s-btn8").css({'border-bottom':'0px solid transparent'});
            $("#s-btn9").css({'border-bottom':'0px solid transparent'});
            $("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});
            
            
          }
          else if (i == 's-btn5') {
    
                  $("#s-btn5").css({'border-bottom':'2px solid purple'});
                  $("#s-btn2").css({'border-bottom':'0px solid transparent'});
                  $("#s-btn3").css({'border-bottom':'0px solid transparent'});
                  $("#s-btn4").css({'border-bottom':'0px solid transparent'});
                  $("#s-btn1").css({'border-bottom':'0px solid transparent'});
                  $("#s-btn6").css({'border-bottom':'0px solid transparent'});
                  $("#s-btn7").css({'border-bottom':'0px solid transparent'});
                  $("#s-btn8").css({'border-bottom':'0px solid transparent'});
                  $("#s-btn9").css({'border-bottom':'0px solid transparent'});
                  $("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});
                  
                  
                }
                else if (i == 's-btn6') {
    
                        $("#s-btn6").css({'border-bottom':'2px solid purple'});
                        $("#s-btn2").css({'border-bottom':'0px solid transparent'});
                        $("#s-btn3").css({'border-bottom':'0px solid transparent'});
                        $("#s-btn4").css({'border-bottom':'0px solid transparent'});
                        $("#s-btn5").css({'border-bottom':'0px solid transparent'});
                        $("#s-btn1").css({'border-bottom':'0px solid transparent'});
                        $("#s-btn7").css({'border-bottom':'0px solid transparent'});
                        $("#s-btn8").css({'border-bottom':'0px solid transparent'});
                        $("#s-btn9").css({'border-bottom':'0px solid transparent'});
                        $("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});
                        
                        
                      }
                      else if (i == 's-btn7') {
    
                              $("#s-btn7").css({'border-bottom':'2px solid purple'});
                              $("#s-btn2").css({'border-bottom':'0px solid transparent'});
                              $("#s-btn3").css({'border-bottom':'0px solid transparent'});
                              $("#s-btn4").css({'border-bottom':'0px solid transparent'});
                              $("#s-btn5").css({'border-bottom':'0px solid transparent'});
                              $("#s-btn6").css({'border-bottom':'0px solid transparent'});
                              $("#s-btn1").css({'border-bottom':'0px solid transparent'});
                              $("#s-btn8").css({'border-bottom':'0px solid transparent'});
                              $("#s-btn9").css({'border-bottom':'0px solid transparent'});
                              $("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});
                              
                              
                            }
                            else if (i == 's-btn8') {
    
                                    $("#s-btn8").css({'border-bottom':'2px solid purple'});
                                    $("#s-btn2").css({'border-bottom':'0px solid transparent'});
                                    $("#s-btn3").css({'border-bottom':'0px solid transparent'});
                                    $("#s-btn4").css({'border-bottom':'0px solid transparent'});
                                    $("#s-btn5").css({'border-bottom':'0px solid transparent'});
                                    $("#s-btn6").css({'border-bottom':'0px solid transparent'});
                                    $("#s-btn7").css({'border-bottom':'0px solid transparent'});
                                    $("#s-btn1").css({'border-bottom':'0px solid transparent'});
                                    $("#s-btn9").css({'border-bottom':'0px solid transparent'});
                                    $("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});
                                    
                                    
                                  }
                                  else if (i == 's-btn9') {
                                          $("#s-btn9").css({'border-bottom':'2px solid purple'});
                                          $("#s-btn2").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn3").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn4").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn5").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn6").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn7").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn8").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn1").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});
                                          
                                          
                                        }
                                        else if (i == 's-btn10') {
                                          $("#s-btn11").css({'border-bottom':'0px solid transparent'});

$("#s-btn10").css({'border-bottom':'2px solid purple'});
$("#s-btn2").css({'border-bottom':'0px solid transparent'});
$("#s-btn3").css({'border-bottom':'0px solid transparent'});
$("#s-btn4").css({'border-bottom':'0px solid transparent'});
$("#s-btn5").css({'border-bottom':'0px solid transparent'});
$("#s-btn6").css({'border-bottom':'0px solid transparent'});
$("#s-btn7").css({'border-bottom':'0px solid transparent'});
$("#s-btn8").css({'border-bottom':'0px solid transparent'});
$("#s-btn9").css({'border-bottom':'0px solid transparent'});
$("#s-btn1").css({'border-bottom':'0px solid transparent'});

                                        }
 
                                        else if (i == 's-btn11') {
    
                                          $("#s-btn11").css({'border-bottom':'2px solid purple'});
                                          $("#s-btn10").css({'border-bottom':'0px solid transparent'});
                                          $("#s-btn2").css({'border-bottom':'0px solid transparent'});
$("#s-btn3").css({'border-bottom':'0px solid transparent'});
$("#s-btn4").css({'border-bottom':'0px solid transparent'});
$("#s-btn5").css({'border-bottom':'0px solid transparent'});
$("#s-btn6").css({'border-bottom':'0px solid transparent'});
$("#s-btn7").css({'border-bottom':'0px solid transparent'});
$("#s-btn8").css({'border-bottom':'0px solid transparent'});
$("#s-btn9").css({'border-bottom':'0px solid transparent'});
$("#s-btn1").css({'border-bottom':'0px solid transparent'});

                                        }
 

$("#"+frame).load(link);   


}







