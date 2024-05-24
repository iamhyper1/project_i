$(window).scroll(function () {
    if ($(this).scrollTop() >= 100) {
        $('nav').addClass('nav-fixed');
    } else {
        $('nav').removeClass('nav-fixed');
    }
});


//typingtext
var TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
        delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function () {
        that.tick();
    }, delta);
};

window.onload = function () {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

$(document).ready(function(){
$(".toggle-btn").click(function(){
$(".nav").toggleClass("nav-active");
$(".toggle-btn i").toggleClass("nav-active");
});
});

//countdown

// function getCurrentTime() {
//     var now = new Date();
//     var seconds = now.getSeconds();
//     var minutes = now.getMinutes();
//     var hours = now.getHours();
    
//     return {
//       'hours': hours,
//       'minutes': minutes,
//       'seconds': seconds
//     };
//   }
  
//   function initializeClock(id) {
//     var clock = document.getElementById(id);
//     var hoursSpan = clock.querySelector('.hours');
//     var minutesSpan = clock.querySelector('.minutes');
//     var secondsSpan = clock.querySelector('.seconds');
  
//     function updateClock() {
//       var currentTime = getCurrentTime();
  
//       hoursSpan.innerHTML = ('0' + currentTime.hours).slice(-2);
//       minutesSpan.innerHTML = ('0' + currentTime.minutes).slice(-2);
//       secondsSpan.innerHTML = ('0' + currentTime.seconds).slice(-2);
//     }
  
//     updateClock();
//     setInterval(updateClock, 1000);
//   }
  
//   initializeClock('clockdiv');
  


//filter gallery

$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

//owl carouserl slider

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    
    dots: true,
    autoplay: true,
    autoplayTimeout:2500,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

//top to scroll button

/*scroll to top*/
$(document).ready(function(){
$(window).scroll(function(){
    if($(this).scrollTop() > 100) {
        $("#arrow i").fadeIn();
}
    else {
        $("#arrow i").fadeOut();
}

});
$("#arrow i").on('click',function(){
$("html,body").animate({
    scrollTop: 0
}, 600);
    return false;
});

});
var messengerIcon = document.querySelector('.messenger-icon');
var messengerBox = document.querySelector('.messenger-box');
var messageInput = document.getElementById('message-input');
var sendButton = document.getElementById('send-button');
var messengerBody = document.getElementById('messenger-body');

messengerIcon.addEventListener('click', function() {
  messengerBox.style.display = 'block';
});

sendButton.addEventListener('click', function() {
  var message = messageInput.value.trim();

  if (message !== '') {
    var newMessage = document.createElement('div');
    newMessage.textContent = message;
    messengerBody.appendChild(newMessage);

    messageInput.value = '';
  }
});

