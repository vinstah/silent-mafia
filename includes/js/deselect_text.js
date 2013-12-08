var _tripleClickTimer = 0;
document.ondblclick = function DoubleClick(evt) {
    ClearSelection();
    window.clearTimeout(_tripleClickTimer);
    
    //handle triple click selecting whole paragraph
    document.onclick = function() {
        ClearSelection();
    };
    
    _tripleClickTimer = window.setTimeout(function() {
           document.onclick = null; 
    }, 1000);
};

function ClearSelection() {
    if (window.getSelection)
        window.getSelection().removeAllRanges();
    else if (document.selection)
        document.selection.empty();
}