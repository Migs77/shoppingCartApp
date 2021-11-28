// CMPS4191-AdvWebDev - Shopping App
// Name: Miguel Tzub
// ID: 2012110159
// Date: 20-Oct-2021


$(document).ready(function(){
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("modal-footer")[0];
    
    //show card picture
    $("#cvc").click(function(){    
      $(".cvc-preview-container").toggle();
    });

    //launches the modal
    $("#mainLoginBtn").click(function(){
    	$(modal).show();        
    });
    
    //Register link on modal form
    $("#registerLink").click(function(){   	
        $("#registerLink").addClass(' active');
        $("#loginLink").removeClass('active');
        $("#navbarLogin-login").removeClass('active');
        $("#navbarLogin-signup").addClass(' active show');        
    });    
    
    //LOGIN link on modal form
    $("#loginLink").click(function(){   	
        $("#loginLink").addClass(' active');
        $("#registerLink").removeClass('active');
        $("#navbarLogin-login").addClass(' active');
        $("#navbarLogin-signup").removeClass('active');
        //if ( $('.modal').hasClass('hide') ) {
        //$('.modal').removeClass('hide');
        //$('.modal').addClass(' show');
      //} else {
      //  $('.modal').addClass(' hide');
      //} 
      //$("#myModal").toggle();
    });

    // When the user clicks outside the modal, modal closes
    $(window).click(function(event){   	
        if (event.target == modal) {
            $(modal).hide();
          //modal.style.display = "none";
        }       
    });    
    
    // When the user clicks on CLOSE, close the modal
    $(span).click(function(){   	
        $(modal).hide();              
    });
   
    
});