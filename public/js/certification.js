var $children = $('.children');
var original = $children.html();

$(document).on('change','.parent',function() {
  var val1 = $(this).val();

  $children.html(original).find('option').each(function() {
    var val2 = $(this).data('val');

    if (val1 != val2) {
      $(this).not(":first-child").remove();
    }
  });

  if ($(this).val() == "") {
    $children.attr('disabled', 'disabled');
  } else {
    $children.removeAttr("disabled");
  }
});
