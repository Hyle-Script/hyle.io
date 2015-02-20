(function() {
  $("#paster").on("submit", function() {
    var _ref;
    if ((_ref = prompt("What is the name of the script? (to see if you’re human)", "")) === "hyle" || _ref === "Hyle") {
      return true;
    } else {
      alert("Nope");
      return false;
    }
  });

}).call(this);
