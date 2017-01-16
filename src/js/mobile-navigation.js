var mobileNavigation = (function(){

    "use strict";

    var $hamburgerMenu,
        $this,
        $overlay,
        $menuItem,
        $body;

        $hamburgerMenu = $('[data-hamburger-menu]');
        $body = $('body');

        function HamburgerMenuActive(el){
            $this = $(this);
            $this.toggleClass('is-active');
            $body.toggleClass('js_active');
            return false;

        }

        $hamburgerMenu.on('click', HamburgerMenuActive);

}());
