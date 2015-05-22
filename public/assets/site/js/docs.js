(function() {
  var createPrettyPrint, formatDocumentation, initialize, makeExternalLinksBlank, makeTablesBetter, registerToggle;

  initialize = function() {
    formatDocumentation();
    registerToggle();
    makeExternalLinksBlank();
    return makeTablesBetter();
  };

  formatDocumentation = function() {
    $("#docs").find("h2, h3, h4").each(function() {
      $(this).attr("id", $(this).text().toLowerCase().replace(/\s/g, "-"));
      return this;
    });
    return $("table").addClass("table");
  };

  makeExternalLinksBlank = function() {
    return $("#docs #content a[href^='http://']").attr("target", "_blank");
  };

  registerToggle = function() {
    return $(".js-toggle-hider").each(function() {
      var initialButtonContent;
      initialButtonContent = $(this).html();
      return $(this).on("click", function() {
        $(this).find(".js-toggle-hider").toggle();
        $(this).find(".toggle-text").toggle();
        return $(this).parent().find(".js-toggle-hidee, .clearfix").toggle();
      });
    });
  };

  makeTablesBetter = function() {
    return $("#docs.commands-list table").addClass("table-striped table-bordered table-hover");
  };

  createPrettyPrint = function() {
    return $("pre").each(function() {
      var $this, lines, output;
      output = "";
      $this = $(this);
      lines = $this.text().split('\n');
      $.each(lines, function() {
        var line;
        line = this;
        if (line.match(/^\w+: \w+/)) {
          return output = output + line.replace(/^(\w+): (\w+)/, "<span class='test'>$1</span>: $2") + "\n";
        } else {
          return output = output + line.toString() + "\n";
        }
      });
      return $this.text("<code>" + output + "</code>");
    });
  };

  $(initialize);

}).call(this);
