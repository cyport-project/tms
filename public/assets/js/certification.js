var $children = $('.children');
var original = $children.html();

$('.parent').change(function() {


  var val1 = $(this).val();

  $children.html(original).find('option').each(function() {
    var val2 = $(this).data('val'); //data-valの値を取得

    if (val1 != val2) {
      $(this).not(':first-child').remove();
    }

  });

  if ($(this).val() == "") {
    $children.attr('disabled', 'disabled');
  } else {
    $children.removeAttr('disabled');
  }

});
