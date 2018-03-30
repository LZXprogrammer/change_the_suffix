var filenames = $('#filenames');
var suffix = $('#suffix');
var form = $('#form');

alert($)
form.submit(function(){

    if (filenames.val() == '') {
        alert('文件名不能为空');
        filenames.focus();
        return false;
    } else if(suffix.val() == '') {
        alert('后缀名不能为空');
        suffix.focus();
        return false;
    }

});
