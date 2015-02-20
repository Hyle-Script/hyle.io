(function() {
  var initialize, killEmptyLinks, registerConfirmLinks, sendAjaxRequest;

  initialize = function() {
    killEmptyLinks();
    return registerConfirmLinks();
  };

  registerConfirmLinks = function() {
    return $('a.js-confirm').click(function() {
      return confirm('Are you sure?');
    });
  };

  killEmptyLinks = function() {
    return $("a[href='#']").click(function() {
      return false;
    });
  };

  sendAjaxRequest = function(url, method, data) {
    console.log("sendAjaxRequest (" + url + ", " + method + ", " + data.email + ")");
    return $.ajax({
      url: url,
      type: method,
      data: data,
      dataType: "script"
    });
  };

  $(initialize);

}).call(this);
