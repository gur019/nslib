document.addEventListener('DOMContentLoaded', function(){

    // if (navigator.userAgent.search(/YaBrowser/) > 0) {
    //     alert('YaBrowser');
    //     document.body.setAttribute('style', 'background-color: rgb(34, 46, 58) !important');
    // };

        if (navigator.userAgent.search(/Firefox/) > 0) {
            var Firefox = document.getElementsByClassName('FirefoxHesderP');
            for (let i = 0; i < Firefox.length; i++) {
                Firefox[i].style.width = "90%"; 
            }

        };

        if (navigator.userAgent.indexOf("Edge") > -1) {
            // alert('Edge');
            var Edge = document.getElementsByClassName('cardEgde');
            for (let i = 0; i < Edge.length; i++) {
                Edge[i].style.height = "auto"; 
            }
        };

// -----------------------------------------------------------IE11-----------------------------
        if(getInternetExplorerVersion()!==-1){
            window.location.href="/oldBrowser/oldBrowser.php";
        }
})

function getInternetExplorerVersion()
{
    var rv = -1;
    if (navigator.appName == 'Microsoft Internet Explorer')
    {
        var ua = navigator.userAgent;
        var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
        if (re.exec(ua) != null)
            rv = parseFloat( RegExp.$1 );
    }
    else if (navigator.appName == 'Netscape')
    {
        var ua = navigator.userAgent;
        var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
        if (re.exec(ua) != null)
            rv = parseFloat( RegExp.$1 );
    }
    return rv;
}


