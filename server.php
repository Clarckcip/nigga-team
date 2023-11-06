if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // استقبل البيانات كمصفوفة من الـ POST
  $botToken = $_POST['botToken'];
  $chatId = $_POST['chatId'];

  // يمكنك هنا حفظ البيانات في مكان مناسب على السيرفر (مثل قاعدة البيانات)

  echo "بيانات المستخدم تم حفظها بنجاح.";
}
