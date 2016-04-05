function messageDelete(msg)
{
    if (window.confirm(msg) ) {
        return true;
    }
    else {
        return false;
    }
}
$("div.alert").delay(3000).slideUp();