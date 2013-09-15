<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div class="row rwanda">
  <main class="col-md-9">
    <section class="events">
      <h2>Events we organize</h2>

      <div class="lanyrd-target-schedule">
        <a href="https://lanyrd.com/2013/aht13-rwanda/schedule/" class="lanyrd-schedule" data-lanyrd-locations data-lanyrd-nostyles data-lanyrd nolink>Schedule on Lanyrd</a>
      </div>
      <script type="text/javascript">
        $(function(){window.lanyrd_badge_els=[];window.lanyrdBadgeIframes=[];window.lanyrdBadge={};window.lanyrdBadges={};var N="http://cdn.lanyrd.net/";var C="http://badges.lanyrd.net/badges/embed/";if(location.protocol=="https:"){N="https://s3.amazonaws.com/static.lanyrd.net/";C="https://lanyrd.com/badges/embed/"}var D="lanyrd-",F=document.getElementsByTagName("head")[0];function O(a,c,b){if(a.addEventListener){a.addEventListener(c,b,false)}else{if(a.attachEvent){a.attachEvent("on"+c,b)}}}function L(){if(L._executed){return}L._executed=true;O(window,"message",function(b){var a=b.data.split(":"),c=lanyrdBadgeIframes[a[0]];if(c&&b.origin.indexOf("lanyrd.")!=-1){c.style.height=a[1]+"px"}})}function M(){var a=document.createElement("link");a.href=N+"badges/embed-v1.min.css";a.rel="stylesheet";F.appendChild(a)}function P(a){var b=document.createElement("script");b.src=C+"?"+a;F.appendChild(b)}function I(a){var b=a.slug+"."+a.type,d=a.options;for(var c in d){b+="."+c;if(d[c]!==true){b+="-"+d[c].replace("-","%2D").replace(".","%2E")}}return b}var G=(function(){var f=/^https?:\/\/lanyrd\.com\/(?:\w+)\/([^\/]+)\/?/i,e=/^https?:\/\/lanyrd\.com\/((?:\d{3,4})\/(?:[^\/]+))\//i,b=/^https?:\/\/(?:dev\.)?lanyrd\.(?:com|org)\/((?:\d{3,4})\/(?:[^\/]+))\/(speakers|attendees|trackers)\//i,c=/^https?:\/\/(?:dev\.)?lanyrd\.(?:com|org)\/((?:\d{3,4})\/(?:[^\/]+))\/(s[a-z]+)/i;function a(n,l){var k=n.className.split(/\s+/),h,g=l.options,i;for(var m=0,j=k.length;m<j;m++){h=k[m];if(h.indexOf(D)===0){if(!l.type){l.type=h.slice(D.length)}else{i=h.split("-");g[i[1]]=i[2]||true}}}}function d(h,m){var i=m.options,j=h.attributes,k="data-"+D,l;for(var g=j.length;g--;){l=j[g];if(l.nodeName.indexOf(k)===0){i[l.nodeName.slice(k.length)]=l.nodeValue||true}}}return function(h){var i,g={options:{}};a(h,g);switch(g.type){case"sessiontrackers":i=c.exec(h.href);if(i){g.options.sessionid=i[2]}break;case"schedule":i=e.exec(h.href);break;case"participants":case"speakers":i=b.exec(h.href);if(i){g.options.usertype=i[2]}break;default:i=f.exec(h.href);break}if(!i){g.options.url=h.href;g.slug="d"}else{g.slug=i[1]}d(h,g);return g}})();function H(){var c,a=[];if(document.querySelectorAll){c=document.querySelectorAll('a[class*="'+D+'"]')}else{c=document.getElementsByTagName("a")}for(var b=c.length;b--;){if((" "+c[b].className+" ").indexOf(" "+D)!=-1&&!c[b]._lanyrdEnhanced){c[b]._lanyrdEnhanced=1;a.push(c[b])}}return a}var J=0;lanyrdBadge.jsonpCallbacks={};function E(b,a){var d=document.createElement("script"),c="c"+J;lanyrdBadge.jsonpCallbacks[c]=function(){a.apply(null,arguments);d.parentNode.removeChild(d);d=null;delete lanyrdBadge.jsonpCallbacks[c]};d.src=b+"lanyrdBadge.jsonpCallbacks."+c;document.body.insertBefore(d,document.body.firstChild);J++}function K(){}(function(){function b(c){c.innerHTML="Loading...";E(c.href+"x-json/?callback=",function(d){if(d.ok){c.parentNode.parentNode.innerHTML=d["abstract"]}c=null})}function a(c){c.innerHTML="Loading...";E(c.getAttribute("data-bio-url")+"?callback=",function(d){if(d.ok){c.parentNode.parentNode.innerHTML=d.bio}c=null})}O(document.body,"click",function(e){var c=e.target||e.srcElement,f,d;if(c.nodeName.toLowerCase()=="a"){d=c.getAttribute("data-lanyrd-action");switch(d){case"expand-abstract":b(c);f=true;break;case"expand-bio":a(c);f=true;break}if(f){if(e.preventDefault){e.preventDefault()}return false}}})})();var o=H(),B=0,y,x,z=true,w="";for(var A=o.length;A--;){y=o[A];x=G(o[A]);if(x){z=z&&!x.options.nostyles;lanyrd_badge_els[B]=y;w+="b="+encodeURIComponent(I(x))+"&";B++}}if(z){M()}P(w);L()});
      </script>
    </sction>

    <section class="people">
      <h2>We're looking forward to meeting...</h2>

    <?php
      $args = array('category_name' => 'rwanda', 'post_type' => 'person', 'posts_per_page' => 20 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>    
        <div class="col-md-3">
          <div class="person box">
            <a href="<?php echo get_post_custom_values("url")[0] ?>">
              <?php if ( has_post_thumbnail()) { the_post_thumbnail( 'person_thumbnail', array( 'class' => '' ) );  } ?>        
            </a>
            <strong class="person-name"><a href="<?php echo get_post_custom_values("url")[0] ?>"><?php the_title(); ?></a></strong>
            <?php the_excerpt() ?>
          </div>
        </div>
 
    <?php endwhile; ?>
    </section>


  </main>
  <aside class="country col-md-3 rwanda">
    <h1>Kigali</h1>
    <h3>Oct 09 - Oct 15, 2013</h3>
    <h2 class="flag">Rwanda</h2>
    <section class="country-info">
      <p>
      </p>
    </section>

  </aside>
</div>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<script type="text/javascript">
  $(function() {
    Hackmap.setHeight(200);
    window.setTimeout(function() {
      Hackmap.moveToCity("kigali");
    }, 300);
  });
</script>

<?php get_footer(); ?>