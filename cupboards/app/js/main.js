$(document).ready(function () {
    $('#cupboardsType').change(function () {
        if ($(this).val() === "двухдверный") {
            $("#cupboardsWidth2").css("display", "block");
            $("#tooDors").css("display", "flex");
            $('#threeDors').css("display", "none");
            $('.cupboards-selected__type').empty();
            $('.cupboards-selected__type').html('2-x дверный');
            $("#cupboardsWidth3").css("display", "none");
            $('.cupboards-options__width').removeClass('blocked');
            

        }
        else {
            // $("#cupboardsWidth2").css("display", "none");
            $('#threeDors').css("display", "flex");
            $('.cupboards-selected__type').html('Количество дверей');
        }

        if ($(this).val() === "трехдверный") {
            $("#cupboardsWidth2").css("display", "none");
            $("#cupboardsWidth3").css("display", "block");
            $("#tooDors").css("display", "none");
            $('.cupboards-selected__type').empty();
            $('.cupboards-selected__type').html('3-x дверный');
            $('.cupboards-options__width').removeClass('blocked');
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
        }
        if ($(this).val() == 1370) {
            wigth.empty();
            wigth.html('2230x1370x570см');
        }
        if ($(this).val() == 1580) {
            wigth.empty();
            wigth.html('2230x1580x570см');
        } else if ($(this).val() == ''){
            wigth.empty();
            wigth.html('Размеры');
        }
    });


    $('#cupboardsWidth3').change(function(){
        var wigth = $('.width-value')
        if ($(this).val() == 2040) { 
            wigth.empty();
            wigth.html('2230x2040x570см');
        }
        if ($(this).val() == 2350) {
            wigth.empty();
            wigth.html('2230x2350x570см');
        }
        if ($(this).val() == 2710) {
            wigth.empty();
            wigth.html('2230x2710x570см');
        }
        else if ($(this).val() == ''){
            wigth.empty();
            wigth.html('Размеры');
        }
    });



    $('input:radio[name=type]').on('change', function change () {
        var inputVal = $("input[name='type']:checked").val();
        var img = $('.cupboards-selected__img img');
        img.hide();
        $('.cupboards-selected__img [data-img="'+inputVal+'"]').show();
    });


    $('.facade-item').click(function(){
        $('.facade-item').removeClass('bacground');
        $("input:radio:checked").prop('checked', false);
        var input = $(this).find('input[type=radio]');
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
});
