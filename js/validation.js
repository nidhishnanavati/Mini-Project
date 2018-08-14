/*
********************Code By MANDEEP****************
********************Do not edit below code0*********
*/

function validate(form){
  $.each($('.validate'), function(index, value) {
    if($("."+form+" #"+$(value).attr("id")).data('validate') == 'require'){
      if($("."+form+" #"+$(value).attr("id")).val()==''){
        $("."+form+" #"+$(value).attr("id")).addClass('error');
      }
      else {
        $("."+form+" #"+$(value).attr("id")).removeClass('error');
      }
    }
    else if ($("."+form+" #"+$(value).attr("id")).data('validate') == 'Email') {
      var val=$("."+form+" #"+$(value).attr("id")).val();
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(val)){
          $("."+form+" #"+$(value).attr("id")).addClass('error');
        }
        else{
          $("."+form+" #"+$(value).attr("id")).removeClass('error');
        }
      }
      else if($("."+form+" #"+$(value).attr("id")).data('validate') == 'Password'){
        var val=$("."+form+" #"+$(value).attr("id")).val();
        var regex =/.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[@#$%^_&+=]).*$/;
        if(!regex.test(val)){
          $("."+form+" #"+$(value).attr("id")).addClass('error');
        }
        else{
          $("."+form+" #"+$(value).attr("id")).removeClass('error');
        }
      }
      else if($("."+form+" #"+$(value).attr("id")).data('validate') == 'number'){
        var val=$("."+form+" #"+$(value).attr("id")).val();
        var regex =/^[0-9]+$/;
        if(!regex.test(val)){
          $("."+form+" #"+$(value).attr("id")).addClass('error');
        }
        else{
          $("."+form+" #"+$(value).attr("id")).removeClass('error');
        }
      }else if($("."+form+" #"+$(value).attr("id")).data('validate') == 'number'){
        var val=$("."+form+" #"+$(value).attr("id")).val();
        var regex =/^[0-9]+$/;
        if(!regex.test(val)){
          $("."+form+" #"+$(value).attr("id")).addClass('error');
        }
        else{
          $("."+form+" #"+$(value).attr("id")).removeClass('error');
        }
      }
      else if($("."+form+" #"+$(value).attr("id")).data('validate') == 'cpassword'){
        var val=$("."+form+" #"+$(value).attr("id")).val();
        var pass=$("."+form+" #"+$(value).attr("id")).data('password')

        if(val!=pass){
          $("."+form+" #"+$(value).attr("id")).addClass('error');
        }
        else{
          $("."+form+" #"+$(value).attr("id")).removeClass('error');
        }
      }
  });
    var numItems=$('.'+form).find('.error').length;
    //var numItems = $('form.'+form+'>'+'.error').length;
    if(numItems>0){
      return 0;
    }
    else{
      return 1;
    }
}
