function list_view(itemsArr, current_category) {
  var viewList = itemsArr.filter(function(val) {
    return val.category === current_category;
  });

  viewList.map(function(item) {
    var li = document.createElement("li");
    li.appendChild(document.createTextNode(item.body));
    document.getElementById("items-list-ul").appendChild(li);
  });
}
