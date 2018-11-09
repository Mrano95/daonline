function applyTitle() {
    var pageTitle = document.getElementsByTagName("title")[0].innerHTML;
    var headerTitle = document.getElementById('page_title');
    headerTitle.innerHTML = pageTitle;
}
