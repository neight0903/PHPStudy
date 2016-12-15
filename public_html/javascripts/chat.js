$(function() {
  'use strict';

  $('#new_comment_form').on('submit', function() {
    // titleを取得
    var comment = $('#new_comment').val();
    var user_id = $('#user_id').val();
    // ajax処理
    $.post('_ajax.php', {
      comment: comment,
      user_id: user_id,
      token: $('#token').val()
    });

    return false;
  });

});