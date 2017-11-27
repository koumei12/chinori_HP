$(function(){
  $('#top-btn').click(function(){
      // animateメソッドを用いて、
      // アニメーション付きでスクロールするようにしてください。
      $('html, body').animate({

      "scrollTop":0

      },500);

  $("body").quietflow({
  theme : "floatingBoxes",
  specificColors : [
    "rgba(46, 204, 113, .5)",
    "rgba(52, 152, 219, .5)",
    "rgba(231, 76, 60, .5)",
    "rgba(155, 89, 182, .5)",
    "rgba(241, 196, 15, .5)"
  ],
  boxCount : 500,
  backgroundCol : "#34495E"
})
})
