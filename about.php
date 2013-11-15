<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<div class="contentPage">
 <?php if (have_posts()) : while (have_posts()) : the_post();?>
   <?php the_content(); ?>
 <?php endwhile; endif; ?>
</div>
<div class="timelinewrap">
      <h2>Personal Timeline</h2>
      <div class="timeline">
      <h4 class="timeline-title">Future</h4>
      	<ul>
      		<li>
              <h4>Speaking at Digital Design Innovation Summit</h4>
              <p class="description">I'll be giving a presentation about responsive web design to C-level executives in San Francisco! <a href="https://theinnovationenterprise.com/summits/digital-design-sanfran-2013#speakers">Check it out!</a></p>
              <div class="time">September 19-20th 2013</div>
            </li>
            <li>
              <h4>Speaking at Front End Design Conference</h4>
              <p class="description">In June 2013 <a href="http://www.robert-deluca.com/presenting-at-front-end-design-conference/">I'll be presenting on Thumper</a>. Who should use it, why you should, and why I built it! <a href="http://frontenddesignconference.com/registration-info#day-two">Check it out!</a></p>
              <div class="time">June 22nd 2013</div>
            </li>
      	</ul>
      	  <h4 class="timeline-title">2013</h4>
      	<ul>
      		<li>
              <h4>Started at <a href="http://izea.com">Izea</a></h4>
              <p class="description"></p>
              <div class="time">June 10th 2013</div>
            </li>
      		<li>
              <h4>Left ThreeTwelve Creative</h4>
              <p class="description"></p>
              <div class="time">May 9th 2013</div>
            </li>
      		<li>
              <h4>Launched SRMA</h4>
              <p class="description">Another proud Thumper site I've built. Fully responsive! <a href="http://srma.net">Check it out!</a></p>
              <div class="time">April 26th 2013</div>
            </li>
      		<li>
              <h4>Launched ASPG</h4>
              <p class="description">First site launched on Thumper. Fully responsive enterprise site! <a href="http://aspg.com">Check it out!</a></p>
              <div class="time">April 3rd 2013</div>
            </li>
			<li>
				<h4>Digital Lee Judge</h4>
				<p class="description">Announced that I'm a judge for Lee Countys Digital competiton. <a href="https://www.facebook.com/photo.php?fbid=523863614322437&set=a.523863607655771.1073741825.159992170709585&type=1">Check it!</a></p>
				<div class="time">September 2012</div>
			</li>
	      <li>
              <h4>Built Thumper</h4>
              <p class="description">My own responsive grid built with LESS. <a href="/thumper">Check it out!</a></p>
              <div class="time">January 20th 2013</div>
          </li>
      	</ul>
           <ul>
             <h4 class="timeline-title">2012</h4>
             <li>
              <h4>Built/Lunched COCAD Haiti</h4>
              <p class="description">First live client responsive site. <a href="http://cocad-haiti.org">Check it out!</a></p>
              <div class="time">December 20th 2012</div>
          </li>
          <li>
              <h4>Built First Responsive Site</h4>
              <p class="description"></p>
              <div class="time">September 2012</div>
          </li>
          <li>
              <h4>Built/Launched Vote Stevenson 2012</h4>
              <p class="description">Site has been since taken down. But you can see it on ThreeTwelves Clients page! <a href="http://threetwelvecreative.com/clients">Check it out!</a></p>
              <div class="time">September 2012</div>
          </li>
          <li>
              <h4>Helped Build Mission Of Hope Haiti</h4>
              <p class="description">The first project I worked on with ThreeTwelve Creative. MOH is a fully custom Rails CMS. <a href="http://mohhaiti.org">Go look! :D</a></p>
              <div class="time">August 2012</div>
          </li>
          <li>
              <h4>Started Work At ThreeTwelve Creative</h4>
              <p class="description">I'd like to thank Natalie and David for taking me in and teaching me the ropes out of High School. <br /><a href="http://threetwelvecreative.com">ThreeTwelveCreative.com</a></p>
              <div class="time">July 17th 2012</div>
          </li>
          <li>
              <h4>Won DigitalLee Best Of Show</h4>
              <p class="description">At the end of my senior year in high school I entered a county wide contest and my website won best of show.</p>
              <div class="time">June 2012</div>
          </li>
        
          <li>
              <h4>Interned At ThreeTwelve Creative</h4>
              <p class="description">I did more brain leaching than any human has ever done in their life.</p>
              <div class="time">January 2012</time>
          </li>
        
        </ul>
        
       <ul>
        <h4 class="timeline-title">Earlier</h4>
       	 <li>
              <h4>Built First Hand Coded Website</h4>
              <p class="description">Thank you to Google and NetTuts+ for the resources to do it!</p>
              <div class="time">April 2010</div>
          </li>
          <li>
              <h4>Enrolled in Digital Design</h4>
              <p class="description">My sophomore year I enrolled in Digital Design. This was the best decision I've made.</p>
              <div class="time">August 2009</div>
          </li>
          <li>
              <h4>Started Apple-Rumors.net</h4>
              <p class="description">At this time I was very interested in Apple news and rumors. I created a site to blog about it and in the 2 months I ran it (summer, no school) AR was getting over 20k views a month and ranked #2 for "Apple News."</p>
              <div class="time">Mid/Late 2009</div>
          </li>
          <li>
              <h4>YouTube Videos</h4>
              <p class="description">What really got me into technology was the Mac Vs PC debate on YouTube. I was involved in many debates, and this allowed me to have a pretty good understanding of computers.</p>
              <div class="time">Early 2007</div>
          </li>
          <li>
              <h4>Introduced to Computers</h4>
              <p class="description">Like a natural I took control of the family HP Desktop.</p>
              <div class="time">Sometime in 2003</div>
          </li>
        
          <li>
              <h4>Born</h4>
              <p class="description">Kicking and screaming I was brought into this world to do something noticeable.</p>
              <div class="time">March 1994</time>
          </li>
        
        </ul>
      
      </div>
   </div>
   
   <!-- Thanks to Dave Rupert for the inspiration, guideance, and idea! -->
  <?php get_footer(); ?>