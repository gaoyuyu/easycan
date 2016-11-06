/**
 * 公共Ajax函数
 * @param url
 * @param params
 * @returns {*}
 *
 ****************************************************************************************************
 * 使用方式
 * url : 提交的HTML地址,可以用U函数获取
 * data : 提交的数据,{"paixu": paixu, "bmmc": bmmc, "caibian": caibian}
 *
 * 提交后，返回后端提供的JSON数据结果
 *****************************************************************************************************
 *
 */
function commonAjaxSubmit(url, params) {
    var result = 0;
    if (!params || params == '') {
        return "参数不存在";
    }
    if (!url || url == '') {
        var url = document.URL;
    }
    $.ajax({
        url: url,
        type: 'POST',
        data: params,
        async: false,
        dataType: 'json',
        success: function (data) {
            result = data;
        },
        error: function (data) {
            result = data;
        }
    });
    return result;
}

//删除左右两端的空格
function trim(str) {
    return str.replace(/(^\s*)|(\s*$)/g, "");
}
