function messageDelete(msg)
{
    if(window.confirm(msg)){
        return true;
    }
    else{
        return false;
    }
}