/*


       444444444  DDDDDDDDDDDDD       lllllll                             lllllll
      4::::::::4  D::::::::::::DDD    l:::::l                             l:::::l
     4:::::::::4  D:::::::::::::::DD  l:::::l                             l:::::l
    4::::44::::4  DDD:::::DDDDD:::::D l:::::l                             l:::::l
   4::::4 4::::4    D:::::D    D:::::D l::::l         ppppp   ppppppppp    l::::l
  4::::4  4::::4    D:::::D     D:::::Dl::::l         p::::ppp:::::::::p   l::::l
 4::::4   4::::4    D:::::D     D:::::Dl::::l         p:::::::::::::::::p  l::::l
4::::444444::::444  D:::::D     D:::::Dl::::l         pp::::::ppppp::::::p l::::l
4::::::::::::::::4  D:::::D     D:::::Dl::::l          p:::::p     p:::::p l::::l
4444444444:::::444  D:::::D     D:::::Dl::::l          p:::::p     p:::::p l::::l
          4::::4    D:::::D     D:::::Dl::::l          p:::::p     p:::::p l::::l
          4::::4    D:::::D    D:::::D l::::l          p:::::p    p::::::p l::::l
          4::::4  DDD:::::DDDDD:::::D l::::::l         p:::::ppppp:::::::pl::::::l
        44::::::44D:::::::::::::::DD  l::::::l ......  p::::::::::::::::p l::::::l
        4::::::::4D::::::::::::DDD    l::::::l .::::.  p::::::::::::::pp  l::::::l
        4444444444DDDDDDDDDDDDD       llllllll ......  p::::::pppppppp    llllllll
                                                       p:::::p
                                                       p:::::p
                                                      p:::::::p
                                                      p:::::::p
                                                      p:::::::p
                                                      ppppppppp

	http://www.4dl.pl/
*/

const uri = window.location.toString();
if (uri.indexOf("#") > 0) {
    const clean_uri = uri.substring(0, uri.indexOf("#"));
    window.history.replaceState({},
    document.title, clean_uri);
}

$(document).ready(function () {

});
