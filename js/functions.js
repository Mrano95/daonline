function langFunc(lang)
{
    // var lang = document.getElementById("lang_sel").value;
    console.log(lang);
    window.location = lang;
}

function applyTitle() {
    var pageTitle = document.getElementsByTagName("title")[0].innerHTML;
    var headerTitle = document.getElementById('page_title');
    console.log(headerTitle);
    headerTitle.innerHTML = pageTitle;
}
