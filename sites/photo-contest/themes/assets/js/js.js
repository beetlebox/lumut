$(function() {
  $('#slides').slidesjs({
    play: {
      auto: true,
      pauseOnHover: true
    },
    height: 260,
    navigation: false
  });
  
  $('#nav-primary a').smoothScroll({offset: -30});
  
  $.getJSON('scrapper/woobox.php', function(returns) {
    var url = 'http://woobox.com/4mn57p/vote';
    $('#gallery .loading').hide();
    var ul = $('<ul />');
    $.each(returns, function() {
      var li = $('<li />').appendTo(ul);
      var a = $('<a />', { href: url }).appendTo(li);
      var img = $('<div />', { class: 'img-container', style: 'background: url('+this.url+') no-repeat scroll center center / cover  transparent' }).appendTo(a);
      var p = $('<p />', { text: this.caption }).appendTo(a);
      
      ul.appendTo('#gallery');
    })
    
    $('<a />', { href: url, html: 'View more &rarr;', class: 'more'}).appendTo('#gallery');
  })
});