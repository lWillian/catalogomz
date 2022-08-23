<?php

namespace Classes;

class ClassLayout
{

    public static function setHeadRestrito()
    {
        $session = new \Classes\ClassSessions();
        $session->verifyInsideSession();
    }
    #Setar todas tags html para reaproveitamento de código
    public static function setHead($title, $description, $menu = '', $author = 'Willian Henrique')
    {
        $html = "<!-doctype html>\n";
        $html .= "<html lang='pt-br'>\n";
        $html .= "<head>\n";
        $html .= "<meta name='viewport' content='width=device-width,initial-scale=1'>\n";
        $html .= "<meta name='author' content='$author'>\n";
        $html .= "<meta name='description' content='$description'>\n";
        $html .= "<title>$title</title>";
        #FAVICON
        $html .= "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>\n";
        $html .= " <link rel='stylesheet' href='" . DIRPAGE . "lib/css/bootstrap/compiler/bootstrap.css'>\n";
        $html .= " <link rel='stylesheet' href='" . DIRPAGE . "lib/css/font-awesome/css/font-awesome.css'>\n";
        $html .= "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css' integrity='sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==' crossorigin='anonymous' referrerpolicy='no-referrer'/>\n";
        $html .= "<link rel='stylesheet' href='" . DIRPAGE . "lib/css/style.css'>\n";
        $html .= "</head>\n";
        $html .= "<body>\n";
        echo $html;
        if ($menu != '') {
            ClassLayout::setMenu();
        }
    }

    /*public static function setMenu(){
        $html = "<nav class='navbar navbar-expand-lg navbar-dark bg-gradient-dark'>\n";
        $html .= "<div class='container col-10 m-auto'>\n";

        #$html = "<nav class='navbar col-12 position-fixed navbar-expand-lg navbar-dark bg-dark' >\n";
        # $html .= "<div class='container-fluid col-11 m-auto'>\n";
        #$html .= "<img src='" . DIRPAGE . "img/logop.png' class=''>\n";
        $html .= "<a class='navbar-brand' href='#'>Navbar</a>\n";
        $html .= "<button class='navbar-toggler' type='buton' data-bs-toggle='collapse' data-bs-target-aria-lavel='Toggle navigation'>\n";
        $html .= "<span class='navbar-toggler-icon'></span>\n";
        $html .= "</button>\n";
        $html .= "<div class='collapse navbar-collapse' id='navbarSupportedContent'>\n";
        $html .= "<ul class='navbar-nav me-auto mb-2 mb-lg-0'>\n";
        $html .= "<li class='nav-item'>\n";
        $html .= "<a class='nav-link active' aria-current='page' href='#'>Home</a>";
        $html .= "</li>\n";
        $html .= "<li class='nav-item'> \n";
        $html .= "<a class='nav-link' data-bs-toggle='modal' data-bs-target='#cadModal'>Cadastro</a>\n";
        $html .= "  </li>\n";
        // $html .= "<li class=nav-item dropdown>\n";
        // $html .= "<a class=nav-link dropdown-toggle href=# role=button data-bs-toggle=dropdown aria-expanded=false>\n";
        // $html .= "Dropdown\n";
        // $html .= "</a>\n";
        // $html .= "<ul class='dropdown-menu'>\n";
        // $html .= "<li><a class='dropdown-item' href='#'>Action</a></li>\n";
        // $html .= "<li><a class='dropdown-item' href='#'>Another action</a></li>\n";
        // $html .= "<li>\n";
        // $html .= " <hr class='dropdown-divider'>\n";
        // $html .= " </li>\n";
        // $html .= " <li><a class='dropdown-item' href='#'>Something else here</a></li>\n";
        // $html .= " </ul>\n";
        // $html .= " </li>\n";
        $html .= " <li class='nav-item'>\n";
        $html .= " <a class='nav-link 'href='" . DIRPAGE . "views/login'>Login</a>\n";
        $html .= " </li>\n";
        $html .= " </ul>\n";
        $html .= "</div>\n";
        $html .= "</div>\n";
        $html .= "</nav>\n";
        $html .= "<br>\n";
        echo $html;
    }*/

    public static function setMenu()
    {
        $html = "<nav class='navbar navbar-expand-lg navbar-dark font-weight-bolder bg-gradient-dark'>\n";
        $html .= "<div class='container col-10'>\n";
        #$html.="<img src='".DIRPAGE."img/logop.png' class=''>\n";
        $html .= "<a class='navbar-brand' href='#'>Navbar</a>\n";
        $html .= "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSite'>\n";
        $html .= "<span class='navbar-toggler-icon'></span>\n";
        $html .= "</button>\n";
        $html .= "<div class='collapse navbar-collapse' id='navbarSite'>\n";
        $html .= "<ul class='navbar-nav ml-auto menu-lista'>\n";
        $html .= "<li class='nav-item'>\n";
        $html .= "<a href='" . DIRPAGE . "'" . "class='nav-link'>Inicio</a>\n";
        $html .= "</li>\n";
        $html .= "<li class='nav-item'>\n";
        $html .= "<a class='nav-link' data-bs-toggle='modal' data-bs-target='#cadModal'>Cadastro</a>\n";
        $html .= "</li>\n";
        $html .= "<li class='nav-item'>\n";
        $html .= " <a class='nav-link 'href='" . DIRPAGE . "views/login'>Login</a>\n";
        $html .= "</li>\n";
        $html .= "<li class='nav-item'>\n";
        $html .= "<a href='#' class='nav-link'>Sobre</a>\n";
        $html .= "</li>\n";
        $html .= "</ul>\n";
        $html .= "</div>\n";
        $html .= "</div>\n";
        $html .= "</nav>\n";
        echo $html;
    }

    #Setar as tags do footer
    public static function setFooter()
    {
        $html = "<footer class='footer font-weight-bolder text-light bg-gradient-dark testemenu'>\n";
        $html .= "<div class='footer-copyright text-center py-3'>© 2022 Copyright:\n";
        $html .= "<a href='#'>Willian Henrique</a>\n";
        $html .= "</div>\n";
        $html .= "</footer>\n";

        $html .= "<script src='" . DIRPAGE . "lib/css/bootstrap/dist/js/bootstrap.js'></script>\n";
        $html .= "<script src='" . DIRPAGE . "lib/js/zepto.min.js'></script>\n";
        $html .= "<script src='" . DIRPAGE . "lib/js/javascript.js'></script>\n";
        $html .= "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>\n";
        $html .= "</body>\n";
        $html .= "</html>";
        echo $html;
    }
}
