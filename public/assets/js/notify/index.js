'use strict';
var notify = $.notify('<span class="notify-loader"><i class="fa fa-bell-o"></i><strong>تحميل</strong> الصفحة لا تغلق هذه الصفحة ...</span>', {
    type: 'theme',
    allow_dismiss: true,
    delay: 2000,
    showProgressbar: true,
    timer: 300
});
setTimeout(function() {
    notify.update('message', '<span class="notify-message"><i class="fa fa-bell-o"></i><strong>تحميل</strong> البيانات الداخلية.');
}, 1000);