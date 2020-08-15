


<script>
  window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));
</script>


				<div style="z-index: 999; position: fixed; top: 30%; right: 0;">

          <div>
            <a href="" id="share_fb" target="_blank"><img class="image-x-"  src="../assets/images/social/facebook.png" alt="Facebook" /></a>
          </div>

          <div>
            <a href="" id="share_twitter" target="_blank"><img class="image-x-" src="../assets/images/social/twitter.png" alt="Twitter" /></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>

          <div>
            <a href=""  id="twit_me" data-show-count="false"><img class="image-x-" src="../assets/images/social/twitter2.png" alt="Twitter" /></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>

          <div>
            <a href="" id="share_linkedin" target="_blank"><img class="image-x-" src="../assets/images/social/linkedin.png" alt="LinkedIn" /></a>
          </div>

          <div>
            <a href="http://reddit.com/submit?url=https://calmensnaturals.co.ke&amp;title=Simple Share Buttons" id="share_reddit" target="_blank"><img class="image-x-" src="../assets/images/social/reddit.png" alt="Reddit" /></a>
          </div>

<script>
    window.onload = function() {

        var thistitle = document.title;
        var heshtegi = "calmens";
        var t_user = "dmuthuyia";
        //var x = document.getElementsByTagName("title")[0];
        //alert(x.innerHTML)
        share_fb.href ='http://www.facebook.com/share.php?u=' + encodeURIComponent(location.href);
        share_twitter.href ='https://twitter.com/share?url=' + encodeURIComponent(location.href) + '&amp;text=' + thistitle + '&amp;hashtags=' + heshtegi + '';
        twit_me.href ='https://twitter.com/intent/tweet?screen_name=' + t_user;
        share_linkedin.href ='http://www.linkedin.com/shareArticle?mini=true&amp;url=' + encodeURIComponent(location.href);
        share_reddit.href ='http://reddit.com/submit?url=' + encodeURIComponent(location.href) + '&amp;title=' + thistitle;
    }
</script>

        </div>
