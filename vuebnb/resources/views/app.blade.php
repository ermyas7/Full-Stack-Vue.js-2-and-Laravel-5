<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Vuebnb</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>
<body>
<!--header logo -->	
<div id="toolbar">
  <img class="icon" src="{{asset('images/logo.png')}}">
  <h1>vuebnb</h1>
</div>
<!--vue is mounted here -->    
<div id="app">
 <!-- header image, set modelOpen on click to show header img -->
  <div class="header">
 	<div class="header-img" 
 	v-bind:style="headerImageStyle"
 	v-on:click="modalOpen = true">
 		<button class="view-photos">View photos</button>
 	</div>  	
  </div>
  
  <!-- page main content start-->
  <div class="container">
  	
  	<div class="heading">
  		<h1>@{{title}}</h1>
  		<p>	@{{address}}	</p>
  	</div>

  	<hr>

  	<div class="about">
  		<h3> About this listing </h3>
  		<p v-bind:class="{contracted:contracted}"> @{{about}} </p>
  		<button v-if="contracted" class="more" v-on:click="contracted = false">+ More</button>
  	</div>

  	<div class="listing">

  		<hr>
  		<div class="amenities list">
  			<div class="title"> <strong>Amenities</strong> </div>
  			<div class="content">
  				<div class="list-item" v-for="amenity in amenities">
  					<i class="fa fa-lg" v-bind:class="amenity.icon"></i>
  					<span> @{{ amenity.title }}</span>
  				</div>
  			</div>
  		</div>

  		<hr>

  		<div class="prices list">
  			<div class="title"> <strong> Prices</strong> </div>
  			<div class="content">
  				<div class="list-item" v-for="price in prices">
  					@{{price.title}} :<strong> @{{price.value}} </strong>	
  				</div>
  			</div>
  		</div>

  	</div>	

  </div>
  <!--main content ends -->

  <!-- window image model which is active when clicked -->
  <div id="modal" v-bind:class="{ show:modalOpen }">
  	<div class="modal-content">
  		<button v-on:click="modalOpen = false" class="model-close" >
  			&times;
  		</button>
  		<img src="{{asset('images/header.jpg')}}">
  	</div>
  </div>

</div>
<!--vue domination ends -->

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
