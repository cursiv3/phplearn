function filter_list(items, current_category, list_view) {
  var parent = document.getElementById("items-list-ul");
  while (parent.firstChild) {
    parent.removeChild(parent.firstChild);
  }

  list_view(items, current_category);
}
