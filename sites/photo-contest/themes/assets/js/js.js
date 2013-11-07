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
});