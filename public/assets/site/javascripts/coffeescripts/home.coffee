initialize = () ->
  registerHylePanelEvents()
  registerSubscriptionFieldEvents()
  registerAeScriptsButton()

registerAeScriptsButton = () ->
  $('.event-aescripts').on 'click', () ->
    ga('send', 'event', 'button', 'click', 'aescripts')

registerSubscriptionFieldEvents = () ->
  initialValue = null
  $(".js-field-subscription").on "focusin", ->
    initialValue = $(this).attr "value" if initialValue is null
    $(this).removeClass("field-error")
    $(this).val("") if $(this).val() is initialValue

  $(".js-field-subscription").on "focusout", ->
    $(this).val(initialValue) if $(this).val() is ""

  $(".js-form-subscription").on "submit", (e) ->
    $(this).find(".icon-ok").removeClass("icon-ok").addClass("icon-spinner icon-spin")
    sendAjaxRequest $(this).attr("action"), $(this).attr("method"), { email: $("[name='email']").val() }
    e.preventDefault()
    return false;

registerHylePanelEvents = () ->
  codes = []
  i = 0
  $(".js-hyle-panel pre").each ->
    codes.push $(this)

  $(".js-hyle-panel-next").click ->
    i++
    if i > codes.length-1 then i = 0
    $(".js-hyle-panel pre").addClass("hidden")
    codes[i].removeClass("hidden")
    return false

  $(".js-hyle-panel-prev").click ->
    if i > 0
      i--
      $(".js-hyle-panel pre").addClass("hidden")
      codes[i].removeClass("hidden")
    return false



$(initialize)