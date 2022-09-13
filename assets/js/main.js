

$(document).ready(function () {
    $(".filterBox > .categoriesBox").click(function () { 
        $(".filterBox > .categoriesBox > .listed").slideToggle();
    });
    $(".filterBox > .stockBox").click(function () { 
        $(".filterBox > .stockBox > .listed").slideToggle();
    });
    $(".filterBox > .filterBypriceBox").click(function () { 
        $(".filterBox > .filterBypriceBox > .listed").toggle();
    });


    // ======================================================================================
    $(".categoriesBox > .listed > li > a").click(function (e) { 
        e.preventDefault();
        var link = $(this).attr('value');
        $(".categoriesBox .appendtags a").empty()
        $(".categoriesBox .appendtags a").append("<i class='fa-solid fa-xmark'></i>")
        $(".categoriesBox .appendtags a").append(link)
        $(".categoriesBox .appendtags a").css("background","#dee2e6")
        $(".categoriesBox .appendtags a").click( function (e) {
            e.preventDefault();
        })
    });
    $(".categoriesBox .appendtags > a").click(function(){
        $(".categoriesBox .appendtags > a").empty()
        $(".categoriesBox .appendtags a").css("background","transparent")
        console.log("wow")
    });
    $(".stockBox > .listed > li > a").click(function (e) { 
        e.preventDefault();
        var link = $(this).attr('value');
        $(".stockBox .appendtags a").empty()
        $(".stockBox .appendtags a").append("<i class='fa-solid fa-xmark'></i>")
        $(".stockBox .appendtags a").append(link)
        $(".stockBox .appendtags a").css("background","#dee2e6")
        $(".stockBox .appendtags a").click( function (e) {
            e.preventDefault();
        })
    });
    $(".stockBox .appendtags > a").click(function(){
        $(".stockBox .appendtags > a").empty();
        $(".stockBox .appendtags a").css("background","transparent")
    });
    $(".filterBypriceBox > .listed input").click(function (e) { 
        e.preventDefault();
        var link = $(this).attr('value');
        $(".filterBypriceBox .appendtags a").empty()
        $(".filterBypriceBox .appendtags a").append("<i class='fa-solid fa-xmark'></i>")
        $(".filterBypriceBox .appendtags a").append(link)
        $(".filterBypriceBox .appendtags a").css("background","#dee2e6")
        $(".filterBypriceBox .appendtags a").click( function (e) {
            e.preventDefault();
        })
    });
    $(".filterBypriceBox .appendtags > a").click(function(){
        $(".filterBypriceBox .appendtags > a").empty();
        $(".filterBypriceBox .appendtags a").css("background","transparent")
    });


    // =====================================================================================
    $("p").filter(".parah").text(function(index, currentText) {
        return currentText.substr(0, 150)+ '...';
    });



    // ==========================================================================================
    $(".registerBox .resginterBtns").click(function (e) {
        e.preventDefault();
        $(".registerFrom").css("display","block")
        $(".loginBox").addClass('none')
        $('.loginBtn').css("display","block")
        $('.registerBtn').css("display","none")
    })
    $(".registerBox .loginBtn").click(function (e) {
        e.preventDefault();
        $(".registerFrom").css("display","none")
        $(".loginBox").removeClass('none')
        $('.loginBtn').css("display","none")
        $('.registerBtn').css("display","block")
    })


    $("ul.tabsUl > li").children("a").click(function () { 
        console.log("Was clicked there")
        var prodName =  "Product";
        $('.value_selected, .toShow, .numbers').empty();
        var valueble = $(this).text();
        $('.value_selected').append(valueble);
        var number_selected = "";
        if($('.flexTabs .innerCards').hasClass("show")){
                number_selected = $('.flexTabs .show .prodCarrd').length;
                $(".numbers").append(number_selected)
                $(".toShow").append(prodName);
        }
    });

    // =========================================================================================
    // $(".tabsUl li a").on("click", function(event){
    //    let clickUp = event.target.className
    //    console.log(clickUp)
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();

    //         var number_selected = "";
    //         var valable = $(".tabsUl li a").text();
    //         if(number_selected = $('.oneCall').length>0){
    //             number_selected = $('.oneCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    // })
    // $(".tabsUl li .accessories").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();

    //         var number_selected = "";
    //         var valable = $(".tabsUl li .accessories").text();
    //         if(number_selected = $('.oneCall').length>0){
    //             number_selected = $('.oneCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .cardfight").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .cardfight").text();
    //         if(number_selected = $('.twoCall').length>0){
    //             number_selected = $('.twoCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .collectible").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .collectible").text();
    //         if(number_selected = $('.threeCall').length>0){
    //             number_selected = $('.threeCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .dragonBall").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .dragonBall").text();
    //         if(number_selected = $('.fourCall').length>0){
    //             number_selected = $('.fourCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .finalFantasy").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .finalFantasy").text();
    //         if(number_selected = $('.fiveCall').length>0){
    //             number_selected = $('.fiveCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .forceOf").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .forceOf").text();
    //         if(number_selected = $('.sixCall').length>0){
    //             number_selected = $('.sixCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .funkoPop").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .funkoPop").text();
    //         if(number_selected = $('.sevenCall').length>0){
    //             number_selected = $('.sevenCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .heroclix").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .heroclix").text();
    //         if(number_selected = $('.eightCall').length>0){
    //             number_selected = $('.eightCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .magic").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .magic").text();
    //         if(number_selected = $('.nineCall').length>0){
    //             number_selected = $('.nineCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .pokemon").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .pokemon").text();
    //         if(number_selected = $('.tenCall').length>0){
    //             number_selected = $('.tenCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .sneakers").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .sneakers").text();
    //         if(number_selected = $('.elevenCall').length>0){
    //             number_selected = $('.elevenCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .tradingCards").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .tradingCards").text();
    //         if(number_selected = $('.tradingCall').length>0){
    //             number_selected = $('.tradingCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .weissSchwarz").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .weissSchwarz").text();
    //         if(number_selected = $('.weissSchwarzCall').length>0){
    //             number_selected = $('.weissSchwarzCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
    //  $(".tabsUl li .yuuuuu").click(function() {
    //     $('.activeCards .innerCardsFlex').each( function () {
    //         var number_selected = "";
    //         var prodName =  "Product";
    //         $('.value_selected, .toShow, .numbers').empty();
    //         var valable = $(".tabsUl li .yuuuuu").text();
    //         if(number_selected = $('.yuuuuuCall').length>0){
    //             number_selected = $('.yuuuuuCall').length;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }else if(number_selected = $('.innerCardsFlex').length !== 0){
    //             number_selected = 0;
    //             $(".numbers").append(number_selected)
    //             $('.value_selected').append(valable);
    //             $(".toShow").append(prodName);
    //         }
    //     })
    //  });
     


     // ==============================================================================================
    var btn = $('.topToBtn');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });


    // =====================================================================================================
    $('.cardSliderBox').slick({
        infinite: true,
        arrows: false,
        dots: false,
        draggable: false,
        autoplay: true,
        speed: 1000,
        centerPadding: false,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: false,
        fade: false,
    });

    $('.mainSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        autoplay: false,
        fade: true,
        speed: 300,
        asNavFor: '.thumbNav',
    });

    $('.thumbNav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        centerPadding: '0px',
        asNavFor: '.mainSlider',
        dots: false,
        draggable: true,
        autoplay: false,
        focusOnSelect: true,
    });

    $('.topRatedSlider').slick({
        infinite: true,
        arrows: true,
        dots: false,
        autoplay: false,
        speed: 1100,
        centerPadding: false,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        fade: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]

    });

    $(".iconsBar").click(function () {
        $(".headerMenu").addClass("active")
    });
    $(".cross").click(function () {
        $(".headerMenu").removeClass("active")
    });

    $(".flexTabs .leftAreaBar").click( function () { 
        $(".leftAreaBox").toggleClass("active")
     })

     const minus = $('.quantity__minus');
     const plus = $('.quantity__plus');
     const input = $('.quantity__input');
     minus.click(function (e) {
         e.preventDefault();
         var value = input.val();
         if (value > 1) {
             value--;
         }
         input.val(value);
     });
 
     plus.click(function (e) {
         e.preventDefault();
         var value = input.val();
         value++;
         input.val(value);
     })
     
     AOS.init();

});




$(document).ready(function () {
    // JAVASCRIPT 
    const rangeInput = document.querySelectorAll(".wrapper .range-input input"),
    priceInput = document.querySelectorAll(".wrapper .price-input input"),
    range = document.querySelector(".wrapper .slider .progress");
    let priceGap = 1000;

    priceInput.forEach(input =>{
        input.addEventListener("input", e =>{
            let minPrice = parseInt(priceInput[0].value),
            maxPrice = parseInt(priceInput[1].value);
            
            if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
                if(e.target.className === "input-min"){
                    rangeInput[0].value = minPrice;
                    range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                }else{
                    rangeInput[1].value = maxPrice;
                    range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                }
            }
        });
    });

    rangeInput.forEach(input =>{
        input.addEventListener("input", e =>{
            let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

            if((maxVal - minVal) < priceGap){
                if(e.target.className === "range-min"){
                    rangeInput[0].value = maxVal - priceGap
                }else{
                    rangeInput[1].value = minVal + priceGap;
                }
            }else{
                priceInput[0].value = minVal;
                priceInput[1].value = maxVal;
                range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        });
    });
});


// =======================================================================================================
$(document).ready(function () {
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
