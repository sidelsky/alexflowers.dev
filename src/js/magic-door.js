/*------------------------------------*\
	Portfolio
\*------------------------------------*/

var cssClasses = require('./config').cssClasses;


$(window).resize(function(){

});

var Portfolio = function Portfolio($elem) {

    // Set variables
    var postId,
        activeClass,
        _this,
        dontGet,
        $spinloader,
        $closeButton,
        $item,
        $hero,
        $heroVideo,
        $fullVideo;

    this.$elem = $elem;

    //console.log(this.$elem);
    this.$portfolioItem = $('[data-portfolio-item]', this.$elem);
    this.$videoThumb = $('[data-video]', this.$elem);
    this.$jacket = $('[data-jacket]', this.$elem);

    this.$doorFrame = $('[data-door-frame]');
    this.$magicDoor = $('[data-magic-door]');
    this.url = $(this.$magicDoor).attr('data-url');
    this.$doc = $('html, body');

    this.speed = 500;
    this.dontGet = false;

    this._attachHandlers();
    //this._removeVideo();
};


/*  Attach handler event
 -----------------------------------*/
Portfolio.prototype._attachHandlers = function($elem) {

	_this = this;

    _this.$portfolioItem.hover( function(){
        //$(this).find(_this.$jacket).hide();
    });

    // Pause all thumbnail $videoThumbs
    // _this.$videoThumb.each( function() {
    //     $thisVideo = $(this);
    //     $thisVideo.get(0).pause();
    // });


    // Video thumbnail hover states
    _this.$videoThumb.hover( function() {
        $thisVideo = $(this);
        $thisVideo.get(0).play();
    }, function(){
        $thisVideo.get(0).pause();
    });


    activeClass = cssClasses.isActive;

     _this.$portfolioItem.on('click', function(e){
          e.preventDefault();

        if(!$(this).hasClass(activeClass)) {

            // Pause hero video
            _this._pauseHero();

            $item = $(this);

            _this.$portfolioItem.removeClass(activeClass);

            $(this).addClass(activeClass);
            postId = $(this).attr('id').split('portfolio-')[1];

            _this._getPortfolio(postId, $item);

        }

     });

};

// Remove video for mobile
// Portfolio.prototype._removeVideo = function($elem) {
//
//     var windowWidth = $(window).width();
//
//     console.log(windowWidth);
//
//     if(windowWidth > 1024){
//         $('[data-video]').remove();
//         $('[data-hero-video]').remove();
//     }
//
// };

// Pause hero
Portfolio.prototype._pauseHero = function($elem) {
    $hero = $('#hero');
    $heroVideo = $('#hero-video');

    // $hero.slideUp( this.speed, _this._easeInOutQuart(), function(){
    //     $heroVideo.get(0).pause();
    // } );

};

// Pause hero
Portfolio.prototype._playHero = function($elem) {
    $hero = $('#hero');
    $heroVideo = $('#hero-video');

    // $hero.slideDown( this.speed, _this._easeInOutQuart(), function(){
    //     $heroVideo.get(0).play();
    // } );

};

/*  Get portfolio
 -----------------------------------*/
Portfolio.prototype._getPortfolio = function($elem, $item) {

    //_this = this;

    if(!_this.dontGet) {
        _this.dontGet = false;
    }

    if(_this.dontGet === false) {

        // Spinloader
        $spinloader = $('[data-spin-loader]', $item);
        //$spinloader.fadeIn(200);
        $spinloader.addClass(cssClasses.isVisible);

        console.log($spinloader);

        setTimeout(function(){

            _this._closeDoor();

            // Ajax this
            _this.$magicDoor.load(_this.url, {
                id: postId
            }, _this._loadCallBack);
        }, _this.speed );

    }

};

/*  After .load this gets called
 -----------------------------------*/
Portfolio.prototype._loadCallBack = function($elem) {

    // scrollTop
    _this.$doc.animate({
        scrollTop: 0
    }, _this.speed, _this._easeInOutQuart(), function() {

        // Portfolio init
        _this._portfolioInit();
        // Update post slug
        //_this._updatePostSlug();
        //Spinloader.fadeOut(300);
        $spinloader.removeClass(cssClasses.isVisible);

        setTimeout(function() {
            // Open the door
            _this._openDoor();
        }, _this.speed);

    });

};

/*  Easing
 -----------------------------------*/
Portfolio.prototype._easeInOutQuart = function(x, t, b, c, d) {
  if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
  return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
};

// Close door
Portfolio.prototype._closeDoor = function($elem) {

    _this = this;

    if(_this.$doorFrame.height() !== 0 ) {

        _this.$doorFrame.stop(true).animate({
            height: 0
        }, _this.speed, _this._easeInOutQuart(), function() {
            // Add class to parent
            _this.$elem.removeClass(cssClasses.isOpen);
        });

    }

};

/*  Open door
 -----------------------------------*/
Portfolio.prototype._openDoor = function($elem) {

    _this = this;

    _this.$doorFrame.stop(true).animate({
        height: _this.$magicDoor.outerHeight()
    }, _this.speed, _this._easeInOutQuart(), function() {

        // Add class to parent
        _this.$elem.addClass(cssClasses.isOpen);

        _this.$doorFrame.css({
            height: 'auto'
        });

    });

};

/*  Get post slug
 -----------------------------------*/
Portfolio.prototype._updatePostSlug = function() {

    if(history.replaceState) {
        //history.replaceState(null, null, '#' + post_slug);
        history.replaceState(null, null, '' + post_slug);
    } else {
        location.hash = '#' + post_slug;
    }

};

/*  Portfolio Init
 -----------------------------------*/
Portfolio.prototype._portfolioInit = function() {

    _this = this;

    _this.$closeButton = $('[data-close]');
    _this.$closeButton.on('click', function() {

        // Add class to parent
        _this.$elem.removeClass(cssClasses.isOpen);
        // Remove active classs from all items
        _this.$portfolioItem.removeClass(activeClass);

        //console.log(postId);
        _this._closeDoor();

        // Play hero video
        _this._playHero();

        // Pause the main video
        $fullVideo = $('#fullVideo');
        $fullVideo.get(0).pause();


        $portfolioItems = $('[data-portfolio]');
        //speed = 700;

        setTimeout(function(){
            $('html, body').animate({
                scrollTop: $portfolioItems.offset().top
            }, _this.speed, 'easeInOutQuart');
        }, 250);

    });


};

/*  Returns a constructor
 -----------------------------------*/
module.exports = Portfolio;
