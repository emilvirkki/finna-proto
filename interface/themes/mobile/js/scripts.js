var hathiOptions= new Array();
var googleOptions = new Array();
var olOptions = new Array();

function toggleMenu(elemId)
{
    var o = document.getElementById(elemId);
    o.style.display = o.style.display == 'block' ? 'none' : 'block';
}

function getElem(id)
{
    if (document.getElementById) {
        return document.getElementById(id);
    } else if (document.all) {
        return document.all[id];
    }
}

function filterAll(element)
{
    // Go through all elements
    var e = getElem('searchForm').elements;
    var len = e.length;
    for (var i = 0; i < len; i++) {
        //  Look for filters (specifically checkbox filters)
        if (e[i].name == 'filter[]' && e[i].checked != undefined) {
            e[i].checked = element.checked;
        }
    }
}

function jsEntityEncode(str)
{
    var new_str = str.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#039;');
    return new_str;
}

// Taken from http://stackoverflow.com/questions/1933602/how-to-getelementbyclass-instead-of-getelementbyid-with-javscript and http://www.dustindiaz.com/top-ten-javascript/
function getElementsByClassName(node,classname) {
  if (node.getElementsByClassName) { // use native implementation if available
    return node.getElementsByClassName(classname);
  } else {
    return (function getElementsByClass(searchClass,node) {
        if ( node == null ) {
          node = document;
        }
        var classElements = [],
            els = node.getElementsByTagName("*"),
            elsLen = els.length,
            pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)"), i, j;

        for (i = 0, j = 0; i < elsLen; i++) {
          if ( pattern.test(els[i].className) ) {
              classElements[j] = els[i];
              j++;
          }
        }
        return classElements;
    })(classname, node);
  }
}

// these are setter methods called from list.tpl to set preview options
function setHathiOptions(rightsString){
    hathiOptions = rightsString.split(',');
}
function setGoogleOptions(rightsString){
    googleOptions = rightsString.split(',');
}
function setOlOptions(rightsString){
    olOptions = rightsString.split(',');
}

// Process Google Book Search json response & update the DOM.
function ProcessGBSBookInfo(booksInfo) {
    ProcessBookInfo(booksInfo, 'gbs');
}

// Process Open Library json response & update the DOM.
function ProcessOLBookInfo(booksInfo) {
    ProcessBookInfo(booksInfo, 'ol');
}

// Function shared between GBS and Open Library
// takes json response, checks view options and displays link
function ProcessBookInfo(booksInfo, provider) {
    var expandedProvider = "";
    // take the label and the options for the relevant provider
    if (provider == "gbs") {
        expandedProvider = "Google Book Search";
        viewOptions = googleOptions;
    } else {
        expandedProvider = "the Open Library";
        viewOptions = olOptions;
    }
    for (isbn in booksInfo) {
        var bookInfo = booksInfo[isbn];
        if (bookInfo) {
            // if viewOptions contains preview type then show it
            if (viewOptions.indexOf(bookInfo.preview) >= 0){
                var classNameConcat = provider + isbn;
                var elements = getElementsByClassName(document, classNameConcat), n = elements.length;
                for (var i = 0; i < n; i++) {
                    var e = elements[i];
                    if (e.style.display == 'none') {
                        // set the link
                        e.href = bookInfo.preview_url;

                        // Set a tool-tip indicating the preview level
                        if (bookInfo.preview == "full") {
                            e.setAttribute('title', 'View online: Full view Book Preview from ' + expandedProvider);
                        } else if (bookInfo.preview == "partial") {
                            e.setAttribute('title', 'View online: Limited preview from ' + expandedProvider );
                        } else {
                            e.setAttribute('title','View online: Further information from ' + expandedProvider);
                        }

                        //show the element
                        e.style.display = '';
                    }
                }
            }
        }
    }
}

//Function to process Hathi Trust json response & update the DOM.
function ProcessHTBookInfo(booksInfo) {
    for (a in booksInfo) {
        var bookInfo = booksInfo[a];
        var itemsArray = bookInfo.items;
        var e = document.getElementById(a);
        if (e != null && e != undefined) {
            for (var i = 0; i < itemsArray.length; i++) {
                if (e.style.display == 'none') {
                    // if the rights code matches our view options
                    if (hathiOptions.indexOf(bookInfo.items[i].rightsCode)>= 0) {
                        e.href = bookInfo.items[i].itemURL;
                        e.style.display = '';
                    }
                }
            }
        }
    }
}
