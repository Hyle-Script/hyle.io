initialize = () ->
  # registerDropdowns()
  killEmptyLinks()
  registerConfirmLinks()

registerConfirmLinks = () ->
  $('a.js-confirm').click ->
    confirm 'Are you sure?'

killEmptyLinks = () ->
  $("a[href='#']").click ->
    return false

sendAjaxRequest = (url, method, data) ->
  console.log "sendAjaxRequest (#{url}, #{method}, #{data.email})"
  $.ajax({
    url: url
    type: method
    data: data
    dataType: "script"
  })

# registerDropdowns = () ->
  # $(".dropdown-toggle").dropdown()

$(initialize)