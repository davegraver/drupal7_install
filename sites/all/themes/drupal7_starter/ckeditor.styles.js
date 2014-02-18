if(typeof(CKEDITOR) !== 'undefined') {
	CKEDITOR.stylesSet.add('drupal',[
		
		// Image Left
		{ name : 'Image Left', element : 'img', attributes : { 'class' : 'img-left' } },

		// Image Left (No Border)
		{ name : 'Image Left (no border)', element : 'img', attributes : { 'class' : 'img-left no-border' } },
		
		// Image Right
		{ name : 'Image Right', element : 'img', attributes : { 'class' : 'img-right' } },
		
		// Image Right (No Border)
		{ name : 'Image Right (no border)', element : 'img', attributes : { 'class' : 'img-right no-border' } }
	]);
}