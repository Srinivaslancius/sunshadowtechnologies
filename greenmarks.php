<!-- <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="carousel123">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-12 col-sm-2 col-md-2"><a href=""><img src="img/guide_1.jpg"></a></div>
          </div>
          <div class="item">
             <div class="col-xs-12 col-sm-2 col-md-2"><a href=""><img src="img/guide_1.jpg"></a></div>
          </div>
          <div class="item">
          <div class="col-xs-12 col-sm-2 col-md-2"><a href=""><img src="img/guide_1.jpg"></a></div>
          </div>          
          <div class="item">
          <div class="col-xs-12 col-sm-2 col-md-2"><a href=""><img src="img/guide_1.jpg"></a></div>
          </div>
          <div class="item">
         <div class="col-xs-12 col-sm-2 col-md-2"><a href=""><img src="img/guide_1.jpg"></a></div>
          </div>
          <div class="item">
        <div class="col-xs-12 col-sm-2 col-md-2"><a href=""><img src="img/guide_1.jpg"></a></div>
          </div>
         
        </div>
        <a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left" style="margin-left:-90px;color:#f26226"></i></a>
        <a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"style="margin-right:-90px;color:#f26226"></i></a>
      </div>
    </div>
  </div> 
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // https://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<6;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
</script> -->