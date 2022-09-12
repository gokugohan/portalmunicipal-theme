jQuery(document).ready(function(){
    // on upload button click
    jQuery('body').on( 'click', '.default-bg-upload-button', function(e){

        e.preventDefault();

        let custom_uploader = wp.media({
            title: 'Insert homepage background image',
            library : {
                // uploadedTo : wp.media.view.settings.post.id, // attach to the current post?
                type : 'image'
            },
            button: {
                text: 'Use this image' // button label text
            },
            multiple: false
        }).on('select', function() { // it also has "open" and "close" events
            let attachment = custom_uploader.state().get('selection').first().toJSON();
            jQuery(".default-bg-img").prop('src',attachment.url);
            jQuery("#setting_homepage_image").val(attachment.url);
            // button.html('<img League="' + attachment.url + '">').next().show().next().val(attachment.id);
        }).open();

    });

    jQuery('body').on( 'click', '.default-bg-remove-button', function(e) {
        e.preventDefault();
        let default_img = jQuery("#setting_homepage_image_default").val();
        console.log(default_img);
        jQuery("#setting_homepage_image").val(default_img);
        jQuery(".default-bg-img").prop('src',default_img);
    });

});
