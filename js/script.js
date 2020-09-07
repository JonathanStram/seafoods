//1. BURGER-BUTTON FUNCTION
function burger() {
  let header = document.querySelector("header")
  let burgerButton = document.querySelector("#navb-check")
  console.log(burgerButton)

  if (burgerButton.checked === true) {
    header.classList.add("ul-open")
  } else {
    header.classList.remove("ul-open")
  }
}


// 2. Tab slider
var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  slidesPerView: 3,
  loop: false,
  centeredSlides: false,
  freeMode: true,
  // loopedSlides: 3, //looped slides should be the same
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  slidesPerView: 3,
  loop: true,
  centeredSlides: true,
  // loopedSlides: 3, //looped slides should be the same
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },
  thumbs: {
    swiper: galleryThumbs,
  },
});

//3. Modal Popup Log-in/Sign-in


settings = {
  objModalPopupBtn: ".modalButton",
  objModalCloseBtn: ".overlay, .closeBtn",
  objModalDataAttr: "data-popup",
  objModalDataSign: "data-sing",
  objModalSignInBt: ".sign-in"
}

var firstPopup = document.querySelector(".firstPopup");

$(settings.objModalPopupBtn).bind("click", function () {
  if ($(this).attr(settings.objModalDataAttr)) {

    var strDataPopupName = $(this).attr(settings.objModalDataAttr);

    //Fade In Modal Pop Up
    $(".overlay, #" + strDataPopupName).fadeIn();

  }

});

let signIn = $(".sign-in-link");
signIn.on("click", function () {
  $(".firstPopup").addClass("hide")
  $(".secondPopup").addClass("show")
});


//4. Modal Popup Cart
settings1 = {
  objModalPopupBtn1: ".modalButton",
  objModalCloseBtn1: ".overlay, .closeBtn",
  objModalDataAttr1: "data-popup1",
  objModalDataSign1: "data-sing",
  objModalSignInBt1: ".sign-in"
}

var firstPopup = document.querySelector(".firstPopup");

$(settings1.objModalPopupBtn1).bind("click", function () {
  if ($(this).attr(settings1.objModalDataAttr1)) {

    var strDataPopupName1 = $(this).attr(settings1.objModalDataAttr1);

    //Fade In Modal Pop Up
    $(".overlay, #" + strDataPopupName1).fadeIn();

  }
  let modalPopup = document.getElementsByClassName("modalWindow");

  // if (modalPopup.style.display = "block") {
  //   var sp = document.getElementsByClassName("secondPopup").classList.add("active1")
  // }

});


//On clicking the modal background
$(settings.objModalCloseBtn).bind("click", function () {
  $(".modal").fadeOut();
});



// 5. Header changing
window.onscroll = function () { fun2() };
function fun2() {
  let header1 = document.querySelector(".header");

  if ((document.body.scrollTop > 5 || document.documentElement.scrollTop > 5)) {
    header1.classList.add("scrolled1");
  } else {
    header1.classList.remove("scrolled1");
  }
}

//6. requestst

let xhttp = new XMLHttpRequest();



xhttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    signUp(this.responseText)
  }
}


$(document).ready(function () {
  $(".sf-sign_up").on("click", signUp);
  $(".sf-log_in").on("click", logIn);
});


function signUp() {
  $.ajax({
    method: "POST",
    url: "https://sea-products-test.herokuapp.com/signup",
    contentType: 'application/json',
    data: JSON.stringify({
      "password": $(".sf_password").val(),
      "role": "ROLE_USER",
      "phone": "+380956435322",
      "created": "2020-07-26T11:42:14.521+03:00[Europe/Kiev]",
      "name": $(".sf_user-name").val(),
      "email": $(".sf_email").val()
    })

  }).done(function () {
    console.log("It`s signed up!!!!!!!")
  });
}



function logIn() {

  $.ajax({
    method: "POST",
    url: "https://sea-products-test.herokuapp.com/login",
    contentType: 'application/json',
    data: JSON.stringify({
      "password": $(".sf_login_pass").val(),
      "email": $(".sf_login_email").val()
    })
  }).done(function () {
    console.log("Access granded!!!!!!!")
  });
}

let click1 = $(".sf-sign_up");
click1.on("click", function () {
  console.log($(".sf_password").val(), $(".sf_email").val(), $(".sf_user-name").val())
});


//7. Tab filter

$(function () {
  $('.tab-button').click(function () {
    $('.tab-section .active').removeClass('active');// .active削除
    $(this).addClass('active');// クリックしたタブボタンに.active付与
    $(".tab-section .show").removeClass('show');// .showを削除
    const index = $(this).index();// クリックしたタブからインデックス番号を取得
    $(".portfolio-container").eq(index).addClass('show');// クリックしたタブと同じインデックス番号をもつタブアイテムに.show付与
  });
});

//8. Load More button
// function loadNextSeven() {
//   let moveItems = $('#off-items-bucket .portfolio__item').slice(0,4);
//   moveItems.hide().appendTo('#on-items-bucket').fadeIn('medium');
//  }

// function isThisTheEnd() {
//   let numberLeft = $('#off-items-bucket .portfolio__item').length;

//   if(numberLeft == 0) {
//     $('#load-more').hide();
//   }
// }

// $(document).ready(function() {
//     loadNextSeven();
//     isThisTheEnd();
//  });


// $('#load-more').click(function() {
//   loadNextSeven();
//   isThisTheEnd();
// });

//9. Menu Filter

$(document).ready(function () {

  // Variables
  var clickedTab = $(".tabs > .active");
  var tabWrapper = $(".tab__content");
  var activeTab = tabWrapper.find(".active");
  var activeTabHeight = activeTab.outerHeight();

  // Show tab on page load
  activeTab.show();

  // Set height of wrapper on page load
  tabWrapper.height(activeTabHeight);

  $(".tabs > li").on("click", function () {

    // Remove class from active tab
    $(".tabs > li").removeClass("active");

    // Add class active to clicked tab
    $(this).addClass("active");

    // Update clickedTab variable
    clickedTab = $(".tabs .active");

    // fade out active tab
    activeTab.fadeOut(250, function () {

      // Remove active class all tabs
      $(".tab__content > li").removeClass("active");

      // Get index of clicked tab
      var clickedTabIndex = clickedTab.index();

      // Add class active to corresponding tab
      $(".tab__content > li").eq(clickedTabIndex).addClass("active");

      // update new active tab
      activeTab = $(".tab__content > .active");

      // Update variable
      activeTabHeight = activeTab.outerHeight();

      // Animate height of wrapper to new tab height
      tabWrapper.stop().delay(50).animate({
        height: activeTabHeight
      }, 500, function () {

        // Fade in active tab
        activeTab.delay(50).fadeIn(250);

      });
    });
  });

  // Variables
  var colorButton = $(".colors li");

  colorButton.on("click", function () {

    // Remove class from currently active button
    $(".colors > li").removeClass("active-color");

    // Add class active to clicked button
    $(this).addClass("active-color");

    // Get background color of clicked

    // Change color of everything with class .text-color
    $(".text-color").css("color", newColor);
  });
});





//11. req for get the products
$(document).ready(function () {
  var modalBody = "";
  var modalDataSet = $(".modal-data-insert")

  var modalPopupGlobal = $('#sf_modal')
  modalBody += "<div class='modal-frame modal-meat'>" +
    "<div class='modal-body'>" + "<div class='modal-inner'>" +
    "<button id='close' class='close'><i class='fa fa-times'></i></button><div class='modal-img'>" + "<img class='product-modal-img' src='' alt=''>" + "</div><h2 class='modal-data-insert'></h2><h4 class='modal-subtitle'></h4><div class='counter-modal-wrappe1'>"
    + "<div id='decrease'>" + "<div class='line'></div>" + "</div>"
    + "<div class='number'>0</div> <div id='increase'>" +
    "<div class='line_hor'></div> <div class='line_vert'></div>" +
    "</div>" +
    "<div><span class='product-price'>0</span><span> грн</span></div>"
    + "</div>"
    + "<div class='modal-description-wrapper'>"
    + "<div class='products-headings'>"
    + "<div>" + "<h5>grfggfg</h5> <p>nfhgfgh</p>" + "</div>"
    + "<div>" + "<h5>hjghjgj</h5> <p>gfgh</p>" + "</div>"
    + "<div>" + "<h5>jhgjhg</h5> <p>hjgjhghgfgfhgf</p>" + "</div>"
    + "</div><div class='product-description'>"
    + "<p class='description'>mbanmsbdbasjhdbjahsbdhjabsjd</p>"
    + "</div>"
    + "</div>"
    + "<button class='order-btn'>Заказать</button>"
    + "</div>" +
    "</div>" +
    "<div class='modal-overlay'></div>"
    + "</div>"
  $.ajax({
    url: "https://sea-products-test.herokuapp.com/v1/products?type=COMMON&page=0&size=4",
    method: "GET",

    success: function (data) {
      console.log(data);

      if (data.content) {
        var dataArr = data.content;

        var menuItems = "";
        var indexCount = 0;
        var modalProductPopup = ""

        for (let i = 0; i < dataArr.length; i++) {
          menuItems += "<div class='products-menu__items'>" +
            "<img src=" + dataArr[i].picture + " alt=''>" +
            "<h2 class='product-prise'>" + dataArr[i].name + "<span>" + dataArr[i].price + " грн</span> </h2>" +
            "<button id='show-btn' class='order-btn modal-popup sf-product-show-btn' data-index=" + indexCount++ + ">Show</button>" +
            "</div>"
        }

        console.log(dataArr[0].name)
        console.log(dataArr[0].picture)

        //Counter FOR MODAL

        $("#product-result").html(menuItems);
        $('#product-modal').html(modalBody);

        $(".sf-product-show-btn").each(function (index) {
          let _this = $(this);
          _this.on("click", function () {
            let dataIndex = $(this).attr('data-index');
            console.log(dataArr[dataIndex])
            console.log(dataIndex)
            $(".modal-data-insert").html(dataArr[dataIndex].name)
            $("img.product-modal-img").attr("src", dataArr[dataIndex].picture)
            $(".modal-subtitle").html(dataArr[dataIndex].weight * 1000 + " г")
            $("p.description").html(dataArr[dataIndex].description)

            let num = 0;
            const counter = document.querySelector('.number');
            const minus = document.getElementById('decrease');
            const plus = document.getElementById('increase');

            minus.addEventListener('click', function () {
              if (num == "0") {
                console.log()
              } else {
                changeNumber(-1)
              }
            });

            plus.addEventListener('click', function () {
              changeNumber(+1)
            })

            function changeNumber(val) {
              num += val;
              $(".product-price").html((dataArr[dataIndex].price * num).toFixed(2))
              counter.innerHTML = num;
            }

            $('.modal-overlay').click(function () {
              counter.innerHTML = 0
              $(".product-price").html((0).toFixed(2))
            })
          })
        })
      }

      //MODAL POPUP FOR PRODUCTS  
      $modal = $('.modal-frame');
      $modal1 = $('.modal-frame1')
      $modal2 = $('.modal-frame2')

      function enterNewConvo() {
        $('.create-chat-input').focus();
      }

      function closeModal() {
        $modal.removeClass('active');
        $modal.addClass('leave');
      }


      $('.modal-popup').click(function () {
        $modal.toggleClass('active');
        $modal.removeClass('leave');
        enterNewConvo();
      })

      $('.modal-overlay').click(function () {
        closeModal();
      })

      $('#close').click(function () {
        closeModal();
      })

      $(document).keyup(function (e) {
        if (e.which === 27) {
          closeModal();
        }
      })

    },
    error: function (jqXHR, textstatus, errorThrown) {
      console.log("error")
    }
  })
});

