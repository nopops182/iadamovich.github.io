let burger = $('.burger');
let navigation = $('.header-inner-navigation');
let burgerTop = $('.burger:before');



burger.click(function(){
    
    function navOpenRemove(){
        navigation.removeClass('open');
    }

    if (navigation.hasClass('open'), 
        burger.hasClass('open')){
        navigation.animate({
            'height' : 0
        }, 1000);
        burger.removeClass('open');
        setTimeout(navOpenRemove, 1000);
    } else {
        navigation.css('height','100%').addClass('open').hide().slideToggle(1000);
        burger.addClass('open');
    };
});

// SLIDER-START

let sliderCounter = 0;
let sliderEl = $('.banner-slider-background');
let sliderButtonBack = $('.banner-slider-button-area.back');
let sliderButtonForward = $('.banner-slider-button-area.forward');


let sliderArr = $('.banner-slider-image');
let firstSlide = sliderArr.eq(0).clone();
$('.banner-slider-background').append(firstSlide);

let bulletSelected = $('.bullet-selected');

sliderButtonBack.click(function(){

    if (sliderCounter == 0) {
        sliderEl.animate({
            'left' : - 100 * (sliderArr.length) + '%'
        }, 0, function (){
            sliderEl.animate({
                'left' : - 100 * (sliderArr.length - 1) + '%'
            }, 1000);
        });
        sliderCounter = sliderArr.length - 1;
        bulletSelected.animate({
            'left' : 75 + 'px'
        }, 1000);
    } else {
        sliderCounter--;
        sliderEl.animate({
            'left' : - 100 * sliderCounter + '%'
        }, 1000);
        if (sliderCounter == 1) {
            bulletSelected.animate({
                'left' : 111 + 'px'
                }, 1000);
        } else {
            bulletSelected.animate({
            'left' : 93 + 'px'
            }, 1000);
        };
        
    };
    console.log(sliderCounter);
});
sliderButtonForward.click(function(){

    sliderCounter++;
    if (sliderArr.length > sliderCounter) {
        sliderEl.animate({
            'left' : -100 * sliderCounter + '%'
        }, 1000);
        if (sliderCounter == 1) {
            bulletSelected.animate({
                'left' : 111 + 'px'
                }, 1000);
        } else {
            bulletSelected.animate({
            'left' : 75 + 'px'
            }, 1000);
        };
    } else {
        sliderEl.animate({
            'left' : -100 * sliderCounter + '%'
        }, 1000, 
        function(){
            sliderEl.css('left','0')
        }, 0);
        bulletSelected.animate({
            'left' : 93 + 'px'
            }, 1000);
        sliderCounter = 0;
    };
    console.log(sliderCounter);
});
// SLIDER-END
let popupEl = $('.popup');
let popupErrorEl = $('.popup-error');

let formArr = $('input');
console.log(formArr.length);


$('form').submit(function(e){
    e.preventDefault();
    let nameEl = $(this).find("[name='fio']");
    let emailEl = $(this).find("[name='email']");
    let phoneEl = $(this).find("[name='phone']");


    formArr.each(function(index, value){
        if ("input[name='phone']") {
            console.log('Работает');
        }else{
            console.log('Не работает');
        };
    });




    if( (nameEl.val() != '' && emailEl.val() != '' && phoneEl.val() != '')){
        this.submit();
    }else{
        popupErrorEl.css('display', 'flex').hide().fadeIn(2000);
        if(nameEl.val() == ''){
            nameEl.addClass('bad-input');
        }else{
            nameEl.removeClass('bad-input');
        };
        if(emailEl.val() == ''){

            emailEl.addClass('bad-input');
        }else{
            emailEl.removeClass('bad-input');
        };
        if(phoneEl.val() == ''){           
            phoneEl.addClass('bad-input');
        }else{
            phoneEl.removeClass('bad-input');
        };
    };

});

$('input').keyup(function(e){
    if(e.keyCode != 9 && e.keyCode != 37 && e.keyCode != 38 && e.keyCode != 39 && e.keyCode != 40 && e.keyCode != 16 && e.keyCode != 17 && e.keyCode != 18 && e.keyCode !=20 && e.keyCode !=27){
        $(this).removeClass('bad-input');
    }
});

$('.popup-close').click(function(){
    $('.popup').fadeOut(2000);
})

$('.error-close').click(function(){
    $('.popup-error').fadeOut(2000);
})

$(window).keyup(function(e){
    if( e.keyCode == 27 ){
        popupEl.fadeOut(1000);
        popupErrorEl.fadeOut(1000);
    }
});

// ----------------------------

// $('form').submit(function(e){
//     e.preventDefault();
//     let nameEl = $(this).find("[name='fio']");
//     let emailEl = $(this).find("[name='email']");
//     let popupEl = $('.popup');
//     let popupErrorEl = $('.popup-error');
//     if(nameEl.val() != '' && emailEl.val() != ''){
//         popupEl.css('display', 'flex').hide().fadeIn(2000);
//         nameEl.css('border-color', '#ffc155');
//         emailEl.css('border-color', '#ffc155');
//     }else{
//         popupErrorEl.css('display', 'flex').hide().fadeIn(2000);
//         if(nameEl.val() == ''){
//             nameEl.css('border-color', '#ff0000');
//         }else{
//             nameEl.css('border-color', '#ffc155');
//         };
//         if(emailEl.val() == ''){

//             emailEl.css('border-color', '#ff0000');
//         }else{
//             emailEl.css('border-color', '#ffc155');
//         };
//     }
// });

// $('.popup-close').click(function(){
//     $('.popup').fadeOut(2000);
// })

// $('.error-close').click(function(){
//     $('.popup-error').fadeOut(2000);
// })