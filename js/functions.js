function langFunc()
{
    var lang = document.getElementById("lang_sel").value;
    window.location = lang;
}

function applyTitle() {
    var pageTitle = document.getElementsByTagName("title")[0].innerHTML;
    var headerTitle = document.getElementById('page_title');
    console.log(headerTitle);
    headerTitle.innerHTML = pageTitle;
}
