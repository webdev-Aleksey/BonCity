$("#city").selectmenu({
    position: {
        my: "left top",
        at: "left bottom",
        of: ".city-select"
    }
});

$("#category").selectmenu({
    position: {
        my: "right top",
        at: "right bottom",
        of: ".category-select"
    }
});



$("#datepicker-from").datepicker({
    dayNamesMin: ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"],
    dateFormat: "dd.mm.yy",
    monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
    constrainInput: true


});

$("#datepicker-to").datepicker({
    dayNamesMin: ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"],
    dateFormat: "dd.mm.yy",
    monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
    minDate: 0,
    constrainInput: true


});



$(".clear-date").click(function () {

    $('#datepicker-from, #datepicker-to').val('');
    $(this).addClass('d-none');
});



if($('#datepicker-from').val() != ''){
    // Если поле не пустое удаляем класс-указание
    $('.clear-date').removeClass('d-none');
    } else {
    // Если поле пустое добавляем класс-указание
    $('.clear-date').addClass('d-none');
}
    



$('#datepicker-from').change(function(){
    
    if($('#datepicker-from').val() != ''){
        // Если поле не пустое удаляем класс-указание
      $('.clear-date').removeClass('d-none');
      } else {
        // Если поле пустое добавляем класс-указание
      $('.clear-date').addClass('d-none');
    }
});



$('#datepicker-to').change(function(){
    
    if($('#datepicker-to ').val() != ''){
        // Если поле не пустое удаляем класс-указание
      $('.clear-date').removeClass('d-none');
      } else {
        // Если поле пустое добавляем класс-указание
      $('.clear-date').addClass('d-none');
    }
});


