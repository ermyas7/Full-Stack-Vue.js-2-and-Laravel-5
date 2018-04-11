import "core-js/fn/object/assign";
import Vue from 'vue';
import { populateAmenitiesAndPrices } from './helpers';
let model = JSON.parse(vuebnb_listing_model); 
model = populateAmenitiesAndPrices(model);
var app = new Vue({
	el: '#app',
	data: Object.assign(model, {
			headerImageStyle: {
				'background-image': `url(${model.images[0]})`
			},
			contracted: true,
			modalOpen: false
		}),
	//watcher if window image is active and freeze the window
	watch: {
		modalOpen: function(){
			var className = "modal-open";
			if(this.modalOpen){
				document.body.classList.add(className);
			}else{
				document.body.classList.remove(className);
			}
		}
	},
	//a method to listen if esc key is clicked to close the window image
	methods: {
			escapeKeyListener : function(e){
					if (e.keyCode === 27 && this.modalOpen) {
					this.modalOpen = false;
		                 }
}
	},

	created: function(){
		document.addEventListener('keyup', this.escapeKeyListener);
	},
	destroyed: function(){
		document.addEventListener('keyup', this.escapeKeyListener);
	}

});
