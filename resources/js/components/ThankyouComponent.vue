<template>
	<div class="grid-container thankyou-page">
	    <div class="grid-x grid-padding-x">

	    	<loading :active.sync="isLoading" :color="'#359bd4'" :height="80" :width="80" :opacity="0.7"></loading>

	    	<div class="cell text-center">
	    		<h1><strong>Thank you</strong></h1>
	    		<h3 class="subheader">Your help in this research is much appretianted</h3>
				
				<div class="emotions-wrapper" v-if="showEmotionPicker">
					<p>Would you mind letting us know which of these represent better you state of emotion while making this test?</p>

					<div class="grid-x align-center">
						<div class="cell medium-8">
							<div class="emotions grid-x grid-padding-x small-up-2 medium-up-4">
								<div class="cell bored">
									<div class="foundation-radio-button">
										<input class="button large expand" type="radio" v-model="picked" value="bored" id="emotionBored">
										<label for="emotionBored">
											<i class="fas fa-meh"></i>
											Bored
										</label>
									</div>
								</div>
								<div class="cell joy">
									<div class="foundation-radio-button">
										<input class="button large expand" type="radio" v-model="picked" value="joy" id="emotionJoy">
										<label for="emotionJoy">
											<i class="fas fa-grin"></i>
											Joy
										</label>
									</div>
								</div>
								<div class="cell calm">
									<div class="foundation-radio-button">
										<input class="button large expand" type="radio" v-model="picked" value="calm" id="emotionCalm">
										<label for="emotionCalm">
											<i class="fas fa-smile"></i>
											Calm
										</label>
									</div>
								</div>
								<div class="cell sad">
									<div class="foundation-radio-button">
										<input class="button large expand" type="radio" v-model="picked" value="sad" id="emotionSad">
										<label for="emotionSad">
											<i class="fas fa-sad-tear"></i>
											Sad
										</label>
									</div>
								</div>
							</div>

							<div class="callout alert" v-if="showError">
							  <p>Please select an emotion</p>
							</div>

							<a href="#" @click.prevent="submit()" class="button round-icon secondary-color large">Submit</a>
						</div>
					</div>

				</div>


				<div class="thumb-up grid-x align-center" v-if="!showEmotionPicker">
					<div class="cell medium-8">
						<div class="callout">
							<div class="grid-x grid-padding-x">
								<div class="cell medium-8 text-center message">
								  <h3><strong>Your emotion was saved</strong></h3>
								</div>
								<div class="cell medium-4 icon-wrapper text-center">
									<i class="fas fa-thumbs-up"></i>
								</div>
							</div>
						</div>
					</div>
						
				</div>
	    			
	    	</div>
	    </div>
	</div>
</template>

<script>
	import Loading from 'vue-loading-overlay';

	import 'vue-loading-overlay/dist/vue-loading.css';

	export default {
        components: { 
            Loading 
        },

        mounted() {
            if (localStorage.getItem('user')) {
                this.user = JSON.parse(localStorage.getItem('user'));
            }

            this.isLoading = false;

        },
        props: {
          
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                isLoading: true,
                user: [],
                user_fill: [],
                picked: "",
                showError: false,
                showEmotionPicker: true,
            }
        },
        methods: {
            submit() {
            	// First check if a emotion was picked
            	this.showError = false;
            	

            	if (this.picked == "") {
            		this.showError = true;

            	} else {
            		// all good, an emotion was selected
            		this.isLoading = true;

            		const params = {
            			user_email: this.user.email,
		                emotion: this.picked,
		            }

		            var $this = this;
		            axios.post('/users/emotion', params).then(function(response){

		            	if (response.data == "Emotion saved") {
		            		$this.showEmotionPicker = false;
		            		$this.isLoading = false;
		            	}
		            	
		            });
            	}
            }
        },
    }
</script>