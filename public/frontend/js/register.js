$(document).ready(function(){
//Adding-Validations-On-Sign-Up-Form
$('#registerForm').validate({
onfocusout: function (valueToBeTested) {
  $(valueToBeTested).valid();
},

highlight: function(element) {
  $('element').removeClass("error");
},

rules: {
  
  "first_name": {
      required: true,
      character_with_space: true,
      maxlength: 50, 
  },
   "last_name": {
      required: true,
      character_with_space: true,
      maxlength: 50, 
  },
  'email': {
      required: true,
      customemail: true,
  },
  'password': {
      required: true,
      minlength: 6,
      maxlength: 12,
  },
  'password_confirmation': {
      equalTo: "#password",
      minlength: 6,
      maxlength: 12,
  },

  valueToBeTested: {
      required: true,
  }

},
});

$('#loginForm').validate({
onfocusout: function (valueToBeTested) {
  $(valueToBeTested).valid();
},

highlight: function(element) {
  $('element').removeClass("error");
},

rules: {
  

  'email': {
      required: true,
      customemail: true,
  },
  'password': {
      required: true,
      minlength: 6,
      maxlength: 12,
  },

  valueToBeTested: {
      required: true,
  }

},
});   

//Submisson-Form
$('#registerForm').on('submit',function(e){
   e.preventDefault();

  if($('#registerForm').valid()){
     register($(this));
  }

});





//Submisson-Form
$('#loginForm').on('submit',function(e){
   e.preventDefault();

  if($('#loginForm').valid()){
     login($(this));
  }

});



/// register function

function login($this) {
  

            $.ajax({
               url : $this.attr('action'),
               data : $this.serialize(),
               type: 'POST',  // http method
               dataTYPE:'JSON',
               headers: {
                 'X-CSRF-TOKEN': $('input[name=_token]').val()
               },
                beforeSend: function() {
                    $this.find('.loading').show();
                    $this.find('button.cstm-btn').attr('disabled','true');
                },

               success: function (data) {
                      if(parseInt(data.status) == 1){
                           $this[0].reset();

                           $this.find('.messages').html(ErrorMsg('success',data.message));

                            setTimeout(function () {
                              window.location.href = data.redirectLink;
                              return true;
                             },3000);

                      }else if(parseInt(data.status) == 2){

                        $this.find('.loading').hide();
                        $this.find('button.cstm-btn').removeAttr('disabled');
                        $this.find('.messages').html(ErrorMsg('success',data.message));

                        setTimeout(function () {
                                 $this.find('.messages').html('');
                        },8000);
                         
                      }else{

                        $this.find('.loading').hide();
                        $this.find('button.cstm-btn').removeAttr('disabled');
                        $this.find('.messages').html(erorrMessage(data.errors));

                        setTimeout(function () {
                                 $this.find('.messages').html('');
                        },8000);
                         
                      }
                    
               },
               complete: function() {
                        $this.find('.loading').hide();
                        $this.find('button.cstm-btn').removeAttr('disabled');
               },
               error: function (jqXhr, textStatus, errorMessage) {
                     alert('error');
               }

        });

           return false;
}


/// register function

function register($this) {
  

            $.ajax({
               url : $this.attr('action'),
               data : $this.serialize(),
               type: 'POST',  // http method
               dataTYPE:'JSON',
               headers: {
                 'X-CSRF-TOKEN': $('input[name=_token]').val()
               },
                beforeSend: function() {
                    $this.find('.loading').show();
                    $this.find('button.cstm-btn').attr('disabled','true');
                },

               success: function (data) {
                      if(parseInt(data.status) == 1){
                           $this[0].reset();

                           $this.find('.messages').html(ErrorMsg('success',data.message));

                            setTimeout(function () {
                                 $this.find('.messages').html('');
                            },8000);

                      }else{

                        $this.find('.loading').hide();
                        $this.find('button.cstm-btn').removeAttr('disabled');
                        $this.find('.messages').html(erorrMessage(data.errors));

                        setTimeout(function () {
                                 $this.find('.messages').html('');
                        },8000);
                         
                      }
                    
               },
               complete: function() {
                        $this.find('.loading').hide();
                        $this.find('button.cstm-btn').removeAttr('disabled');
               },
               error: function (jqXhr, textStatus, errorMessage) {
                     alert('error');
               }

        });

           return false;
}



   function ErrorMsg(type,message){

      var txt='';
          txt +='<div class="alert alert-'+type+'" role="alert">';
      txt +=message;
      txt +='</div>';
    return txt;
  }



function erorrMessage(errors) {
 


      var txt ="";
      $.each(errors, function( index, value ) {
        txt += ErrorMsg('warning',value);
          //  txt +='<li>'+ value +'</li>';
      });
     /// txt +='</ul>';

      return txt;
}


// Validators Rules

//Only-Character-Add-Method
  $.validator.addMethod("character_with_space", function (value, element) {
  return this.optional(element) || /^[a-zA-Z .]+$/i.test(value);
  }, "Only letters are allowed.");

  //Email-Add-Method
  $.validator.addMethod("customemail", function (value, element) {
    return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
  }, "Please enter a valid email address.");  

  //Email-Add-Method
  $.validator.addMethod("customURL", function (value, element) {
    return this.optional(element) || /(^|\s)((https?:\/\/)?[\w-]+(\.[\w-]+)+\.?(:\d+)?(\/\S*)?)/.test(value);
  }, "Please enter a valid URL or delete the http:// above to continue.");  

  //Alphanumeric-Add-Method
  $.validator.addMethod("alphanumeric", function (value, element) {
    return this.optional(element) || /^[a-z\d\-_\s]+$/i.test(value);
  }, "Please enter alpha-numeric characters only.");   

  //Alphanumeric-Special-Character-Add-Method
  $.validator.addMethod("alphanumeric_special_character", function (value, element) {
    return this.optional(element) || /^[a-zA-Z0-9?=.*!@#$%^',&*_\-\s]+$/i.test(value);
  }, "Please enter alpha-numeric or special characters only.");  


  $.validator.addMethod("phoneUS", function (value, element) {
  return this.optional(element) || value == value.match(/^(?=.*[0-9])[- +()0-9]+$/);
}, "Please specify a valid phone number.");    




});
