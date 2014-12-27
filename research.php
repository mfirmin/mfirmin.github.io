<?php include('header.php'); ?>

<h3>Research</h3>
<div class="row marketing">
<div class="col-sm-12">
For my Master's thesis, I'm creating a simple scripting language to help facilitate the creation of controllers for simulated humanoid characters. 
The underlying physics engine is the <a href="http://www.ode.org">Open Dynamics Engine</a> (ODE). 
</div>
</div>
<div class="row marketing">
<div class="col-sm-12" align="justify">
The abstract from my <a href="http://circle.ubc.ca/handle/2429/51128">thesis</a> is reprinted below:
<blockquote style="display: block; font-size: 12px">
<p>
Developing motions for simulated humanoids remains a challenging problem.
While there exists a multitude of approaches, few of these are reimplemented
or reused by others. The predominant focus of papers in the area remains on
algorithmic novelty, due to the difficulty and lack of incentive to more fully
explore what can be accomplished within the scope of existing methodologies. We develop a language, based on common features found across physics
based character animation research, that facilitates the controller authoring
process. By specifying motion primitives over a number of phases, our language has been used to design over 25 controllers for motions ranging from
simple static balanced poses, to highly dynamic stunts.
</p>
<p>
Controller sequencing is supported in two ways. Naive integration of controllers is achieved by using certain highly stable pose controllers (such as a
standing or squatting) as intermediate transitions. More complex controller
connections are automatically learned through an optimization process. The
robustness of our system is demonstrated via random walkthroughs of our
integrated set of controllers.
</p>
</blockquote>
</div>
<div class="col-sm-12" align="left">
<p> The following video demonstrates the language, many of the controllers created in it, and our optimization framework for learning new transitions.</p>
</div>
<div class="col-sm-12" align="center">
<iframe width="560" height="315" src="//www.youtube.com/embed/I_HuTPeSLsY" frameborder="0" allowfullscreen></iframe>

</div>
<div class="col-sm-12" align="left">
<p>
I'm also working on porting the system to javascript/webGL/box2Dweb, so
anyone can play around with it! Check
out my progress on that <a href='http://www.cs.ubc.ca/~mfirmin/webgl/composability/box2dweb/src/html/sim.html'>here</a> and on my <a href="http://mfirmin.blogspot.ca">blog</a>.
Note that I'm just working on this
in my free time, so progress will probably be fairly slow until I actually
have free time... Currently, it's just a (poorly proportioned) ragdoll
character.
</p>
</div>
</div>
<div class="row marketing">
<div class="col-lg-12" align="left">
</div>
</div>

<?php include('footer.php'); ?>
