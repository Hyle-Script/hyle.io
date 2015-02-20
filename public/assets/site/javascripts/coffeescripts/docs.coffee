initialize = () ->
  formatDocumentation()
  registerToggle()
  makeExternalLinksBlank()
  makeTablesBetter()

formatDocumentation = () ->
  $("#docs").find("h2, h3, h4").each ->

    $(this).attr "id", $(this).text().toLowerCase().replace(/\s/g, "-")
    return @

  $("table").addClass("table")

makeExternalLinksBlank = () ->
  $("#docs #content a[href^='http://']").attr("target","_blank");

registerToggle = () ->

  $(".js-toggle-hider").each ->
    initialButtonContent = $(this).html()
    $(this).on "click", ->
      $(this).find(".js-toggle-hider").toggle()
      $(this).find(".toggle-text").toggle()
      $(this).parent().find(".js-toggle-hidee, .clearfix").toggle()

makeTablesBetter = () ->
  $("#docs.commands-list table").addClass "table-striped table-bordered table-hover"

createPrettyPrint = () ->
  $("pre").each () ->
    output = ""
    $this = $(this)
    lines = $this.text().split('\n')
    $.each lines, () ->
      line = this

      if line.match(/^\w+: \w+/)
        output = output + line.replace(/^(\w+): (\w+)/, "<span class='test'>$1</span>: $2") + "\n"
      else
        output = output + line.toString() + "\n"

    $this.text("<code>#{output}</code>")

$(initialize)