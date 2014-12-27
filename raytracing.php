<?php include('header.php'); ?>

          <h4>Raytracing</h4>
<div class="row marketing">
        <div class="col-sm-6">
          <p>
		My raytracer began as a course project for my Intro to Graphics course, taught by Andrzej Szymczak at the Colorado School of Mines. It was primarily written in C++, and later converted to C for use with openMP and MPI.
	</p>
        </div>
        <div class="col-sm-6" align="center">
<img src="img/mir6.png" style="width: 60%; height: 60%"/>
 </div>
</div>
<div class="row marketing">
	<div class="col-sm-6" align="center">
	<img src="img/raytr_basic.png" style="width: 60%; height: 60%"/>
	</div>
	<div class="col-sm-6">
	<p>
		The initial project was divided into three parts: Simple rendering of spheres and triangles, addition of illumination terms, and addition of shadows.
	</p>
	</div>
</div>
<div class="row marketing">
	<div class="col-sm-6">
	<p>
		I continued this project further to implement photon mapping, providing much more realistic lighting . . .
	</p>
	</div>
	<div class="col-sm-6" align="center">
	<img src="img/rad7.png" style="width: 60%; height: 60%"/>
	</div>
</div>
<div class="row marketing">
	<div class="col-sm-6" align="center">
	<img src="img/mir11.png" style="width: 60%; height: 60%"/>
	</div>
	<div class="col-sm-6">
	<p>
		the ability to include reflective (mirror) surfaces . . .
	</p>
	</div>
</div>
<div class="row marketing">
	<div class="col-sm-6" align="center">
	<p>
		color bleeding, and soft shadows.
	</p>
	</div>
	<div class="col-sm-6" align="center">
	<img src="img/mirmany11.png" style="width: 60%; height: 60%"/>
	</div>
<div class="row marketing">
	<div class="col-lg-12">
	<p>
		In addition, the photon mapping version of the raytracer was converted to C and parallelized in both openMP and MPI
	</p>
	</div>
</div>
	

<?php include('footer.php'); ?>
