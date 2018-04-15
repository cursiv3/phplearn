function cate_btn_view(active_btn) {
  var oldActive = document.getElementsByClassName("active-category");
  oldActive[0].classList.remove("active-category");
  active_btn.className += " " + "active-category";
}
