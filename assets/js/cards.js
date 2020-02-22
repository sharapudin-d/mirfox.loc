function randint(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
function set_rand_cards() {
  let zi = [0,1,2,3,4,5,6,7,8];
  for(let i=0; i<9; ++i){
    let rand = randint(zi.length), rz = zi[rand];
    delete zi[rand];
    $(".c"+i).css('z-index', ""+rz);
    $(".c"+i).css('transition-delay', rz/10+"s");
  }
}
function play_cards() {
  $(".card_play").attr("onclick", "");
  set_rand_cards();
  for(let i=1; i<=9; ++i){
    $(".c"+i).addClass("c"+i+"_active");
  }
  setTimeout(remove_active_cards, 1300);
}
function remove_active_cards() {
  for(let i=1; i<=9; ++i){
    $(".c"+i).removeClass("c"+i+"_active");
  }
  setTimeout(remove_td, 1000);
}
function remove_td() {
  $(".card").css("transition-delay","0s");
  $(".card").addClass("card_hover");
}
