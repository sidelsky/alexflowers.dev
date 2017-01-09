var Thumbnail = function Thumbnail($elem) {

    // Set variables
    var $this;

    this.$elem = $elem;

    //console.log(this.$elem);
    this.$portfolioItem = $('[data-portfolio-item]', this.$elem);
    this.video = $('[data-video]', this.$elem);

    this._attachHandlers();
};


/*  Attach handler event
 -----------------------------------*/
Thumbnail.prototype._attachHandlers = function($elem) {

    // Pause all thumbnail videos
    this.video.each( function() {
        $thisVideo = $(this);
        $thisVideo.get(0).pause();
    });

    this.video.hover( function(){
        $thisVideo = $(this);
        $thisVideo.get(0).play();
    }, function(){
        $thisVideo.get(0).pause();
    });


};

/*  Returns a constructor
 -----------------------------------*/
module.exports = Thumbnail;


// (function(){
//
//     var $video = $('.c-portfolio__video');
//
//     console.log($video);
//
//     $($video).each(function(){
//         $(this).get(0).pause();
//     });
//
//
//     $($video).click(function() {
//         this.paused ? this.play() : this.pause();
//     });
//
//
// }());
