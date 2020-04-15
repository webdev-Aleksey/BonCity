(function($){
$(document).ready(function () {
	var koldv = 0;
	var razm = " ";
	var fasad = " ";
    $('#cupboardsType').change(function () {
        if ($(this).val() === "двухдверный") {
            // $("#cupboardsWidth2").css("display", "block");
            // $('#threeDors').css("display", "none");
            // $('.cupboards-selected__type').empty();
            // $('.cupboards-selected__type').html('2-x дверный');
            $("#cupboardsWidth2").css("display", "block");
            $("#tooDors").css("display", "flex");
            $('#threeDors').css("display", "none");
            $('.cupboards-selected__type').empty();
            $('.cupboards-selected__type').html('2-x дверный');
            $("#cupboardsWidth3").css("display", "none");
            $('.cupboards-options__width').removeClass('blocked');
			koldv = 2;

        }
        else {
            // $("#cupboardsWidth2").css("display", "none");
            $('#threeDors').css("display", "flex");
            $('.cupboards-selected__type').html('Количество дверей');
        }

        if ($(this).val() === "трехдверный") {
            // $("#cupboardsWidth3").css("display", "block");
            // $("#tooDors").css("display", "none");
            // $('.cupboards-selected__type').empty();
            // $('.cupboards-selected__type').html('3-x дверный');
            $("#cupboardsWidth2").css("display", "none");
            $("#cupboardsWidth3").css("display", "block");
            $("#tooDors").css("display", "none");
            $('.cupboards-selected__type').empty();
            $('.cupboards-selected__type').html('3-x дверный');
            $('.cupboards-options__width').removeClass('blocked');
			koldv = 3;
        }

        if ($(this).val() === "") {
            $('.cupboards-options__width').addClass('blocked');
        }
        // else {
        //     $("#cupboardsWidth3").css("display", "none");
        //     $("#tooDors").css("display", "flex");
            
        // }


    });
	
	
    $('#cupboardsWidth2').change(function(){

        var wigth = $('.width-value')
        if ($(this).val() == 1160) {
            
            wigth.empty();
            wigth.html('2230x1160x570см');
			razm = "2230x1160x570см";

        }

        if ($(this).val() == 1370) {
            
            wigth.empty();
            wigth.html('2230x1370x570см');
			razm = "2230x1370x570см";

        }

        if ($(this).val() == 1580) {
            
            wigth.empty();
            wigth.html('2230x1580x570см');
			razm = "2230x1580x570см";

        } else if ($(this).val() == ''){
            wigth.empty();
            wigth.html('Размеры');

        }
        
        
    
    })


    $('#cupboardsWidth3').change(function(){

        var wigth = $('.width-value')
        if ($(this).val() == 2040) {
            wigth.empty();
            wigth.html('2230x2040x570см');
			razm = "2230x2040x570см";
        }
        if ($(this).val() == 2350) {
            wigth.empty();
            wigth.html('2230x2350x570см');
			razm = "2230x2350x570см";
        }
        if ($(this).val() == 2710) {
            wigth.empty();
            wigth.html('2230x2710x570см');
			razm = "2230x2710x570см";
        } else if ($(this).val() == ''){
            wigth.empty();
            wigth.html('Размеры');
        }
    });

 
	$('input:radio[name=tp]').change(function(){
        var radioValue = $("input[name='tp']:checked").val();
        var img = $('.cupboards-selected__img img');

        img.hide();
    
        $('.cupboards-selected__img [data-img="'+radioValue+'"]').show();
        
        
    });


    $('.facade-item').click(function(){
        $('.facade-item').removeClass('bacground');
        $("input:radio:checked").prop('checked', false);
        var input = $(this).find('input[name=tp]');
        input.prop('checked', true);
        $(this).addClass('bacground');
        input.change();
        var title = $('.cupboards-selected__title');
        title.empty();
        var inputVal = input.val();



        if(inputVal == 'orhidea2' || inputVal == 'orhidea3'){		 
            title.html('Орхидея');fasad = 'Орхидея';
        }
        if(inputVal == 'gorod2' || inputVal == 'gorod3' ){          
            title.html('Город'); fasad = 'Город';
        }
        if(inputVal == 'london2' || inputVal == 'london3'){           
            title.html('Лондон');fasad = 'Лондон';
        }
        if(inputVal == 'paris2' || inputVal == 'paris3'){            
            title.html('Париж');fasad = 'Париж';
        }
        if(inputVal == 'peskostruj2' || inputVal == 'peskostruj3'){            
            title.html('Пескоструй');fasad = 'Пескоструй';
        }
        if(inputVal == 'mirror2' || inputVal == 'mirror3'){            
            title.html('Зеркала');fasad = 'Зеркала';
        }
        
        if(inputVal == 'mirrorDsp2' || inputVal == 'mirrorDsp3'){            
            title.html('Зеркала/ДСП');fasad = 'Зеркала/ДСП';
        }
        if(inputVal == 'dsp2' || inputVal == 'dsp3'){
            title.html('ДСП/ДСП');fasad = 'ДСП/ДСП';
        } 
    });


    if (koldv==2) {
	
if ((fasad=='Орхидея' || fasad=='Город' || fasad=='Париж' || fasad=='Лондон' || fasad=='Пескоструй') && (razm="2230x1160x570см")) {cena="10100";}
if ((fasad=='Орхидея' || fasad=='Город' || fasad=='Париж' || fasad=='Лондон' || fasad=='Пескоструй') && (razm="2230x1370x570см")) {cena="11000";}
if ((fasad=='Орхидея' || fasad=='Город' || fasad=='Париж' || fasad=='Лондон' || fasad=='Пескоструй') && (razm="2230x1580x570см")) {cena="12100";}
if ((fasad=='Зеркала') && (razm="2230x1160x570см")) {cena="9600";}
if ((fasad=='Зеркала') && (razm="2230x1370x570см")) {cena="10500";}
if ((fasad=='Зеркала') && (razm="2230x1580x570см")) {cena="11600";}
if ((fasad=='Зеркала/ДСП') && (razm="2230x1160x570см")) {cena="9400";}
if ((fasad=='Зеркала/ДСП') && (razm="2230x1370x570см")) {cena="10300";}
if ((fasad=='Зеркала/ДСП') && (razm="2230x1580x570см")) {cena="11400";}
if ((fasad=='ДСП/ДСП') && (razm="2230x1160x570см")) {cena="9200";}
if ((fasad=='ДСП/ДСП') && (razm="2230x1370x570см")) {cena="10100";}
if ((fasad=='ДСП/ДСП') && (razm="2230x1580x570см")) {cena="11200";}
}
    if (koldv==3) {
if ((fasad=='Орхидея' || fasad=='Город' || fasad=='Париж' || fasad=='Лондон' || fasad=='Пескоструй') && (razm="2230x2040x570см")) {cena="14400";}
if ((fasad=='Орхидея' || fasad=='Город' || fasad=='Париж' || fasad=='Лондон' || fasad=='Пескоструй') && (razm="2230x2350х570см")) {cena="16200";}
if ((fasad=='Орхидея' || fasad=='Город' || fasad=='Париж' || fasad=='Лондон' || fasad=='Пескоструй') && (razm="2230x2710x570см")) {cena="19800";}
if ((fasad=='Зеркала') && (razm="2230x2040x570см")) {cena="13900";}
if ((fasad=='Зеркала') && (razm="2230x2350x570см")) {cena="15700";}
if ((fasad=='Зеркала') && (razm="2230x2710x570см")) {cena="18800";}
if ((fasad=='Зеркала/ДСП') && (razm="2230x2040x570см")) {cena="13500";}
if ((fasad=='Зеркала/ДСП') && (razm="2230x2350x570см")) {cena="15300";}
if ((fasad=='Зеркала/ДСП') && (razm="2230x2710x570см")) {cena="18400";}
if ((fasad=='ДСП/ДСП') && (razm="2230x2040x570см")) {cena="13300";}
if ((fasad=='ДСП/ДСП') && (razm="2230x2230x570см")) {cena="15100";}
if ((fasad=='ДСП/ДСП') && (razm="2230x2710x570см"))
 {cena="18000";}
}	


var total, totalst;
totalst = jQuery(this).find('span.cupboards-order__amount').html();
total=parseInt(totalst);

total += 1000;
jQuery(this).find('span.cupboards-order__amount').html(total);

    // let dsp2 = {
    //     name: 'ДСП',
    //     width: [1160, 1370, 1580],

    // }
  
});
})(jQuery);
