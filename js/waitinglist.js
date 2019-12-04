$('#submitButton').click(function() {
  var formWrap = $(this).parents('div').parents('form');
  var compname = formWrap.find("input[name=text-841]").val();
  var username = formWrap.find("input[name=text-842]").val();
  var useraddress = formWrap.find("input[name=your-email]").val();
  var userphone = formWrap.find("input[name=tel-809]").val();
  var content = formWrap.find("textarea[name=textarea-132]").val();
  var others = formWrap.find("textarea[name=your-message]").val();
  event.preventDefault();
  $.ajax({
      url: "https://docs.google.com/forms/d/e/1FAIpQLScumjFAXVdeOMJfne_e4KlKB2a9ouNrlVkZXDYI0HQvwOuDpw/formResponse",
      data: {
          "entry.1406038773": compname,
          "entry.1702260461": username,
          "entry.673351791": useraddress,
          "entry.2073640891": userphone,
          "entry.1236562672": content,
          "entry.928046507": others,
      },
      type: "POST",
      dataType: "xml",
      statusCode: {
          0: function () {
            formWrap.submit();
            location = 'https://aoaoi.jp/thankyou/';
          },
          200: function () {
            alert('メッセージ送信に失敗しました。お手数ではございますが、こちらのメールアドレスへお問い合わせください。info@aoaoi.jp');
            window.location = 'https://aoaoi.jp/inquiry/';
          }
      }
  });
});
