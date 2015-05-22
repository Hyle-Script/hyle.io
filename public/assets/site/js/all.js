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

(function() {
  var initialize;

  initialize = function() {
    return $(".demo pre.closed").on("click", function() {});
  };

  $(initialize);

}).call(this);

(function() {
  var initialize, registerAeScriptsButton, registerHylePanelEvents, registerSubscriptionFieldEvents;

  initialize = function() {
    registerHylePanelEvents();
    registerSubscriptionFieldEvents();
    return registerAeScriptsButton();
  };

  registerAeScriptsButton = function() {
    return $('.event-aescripts').on('click', function() {
      return ga('send', 'event', 'button', 'click', 'aescripts');
    });
  };

  registerSubscriptionFieldEvents = function() {
    var initialValue;
    initialValue = null;
    $(".js-field-subscription").on("focusin", function() {
      if (initialValue === null) {
        initialValue = $(this).attr("value");
      }
      $(this).removeClass("field-error");
      if ($(this).val() === initialValue) {
        return $(this).val("");
      }
    });
    $(".js-field-subscription").on("focusout", function() {
      if ($(this).val() === "") {
        return $(this).val(initialValue);
      }
    });
    return $(".js-form-subscription").on("submit", function(e) {
      $(this).find(".icon-ok").removeClass("icon-ok").addClass("icon-spinner icon-spin");
      sendAjaxRequest($(this).attr("action"), $(this).attr("method"), {
        email: $("[name='email']").val()
      });
      e.preventDefault();
      return false;
    });
  };

  registerHylePanelEvents = function() {
    var codes, i;
    codes = [];
    i = 0;
    $(".js-hyle-panel pre").each(function() {
      return codes.push($(this));
    });
    $(".js-hyle-panel-next").click(function() {
      i++;
      if (i > codes.length - 1) {
        i = 0;
      }
      $(".js-hyle-panel pre").addClass("hidden");
      codes[i].removeClass("hidden");
      return false;
    });
    return $(".js-hyle-panel-prev").click(function() {
      if (i > 0) {
        i--;
        $(".js-hyle-panel pre").addClass("hidden");
        codes[i].removeClass("hidden");
      }
      return false;
    });
  };

  $(initialize);

}).call(this);

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

(function() {
  $("#paster").on("submit", function() {});

}).call(this);
