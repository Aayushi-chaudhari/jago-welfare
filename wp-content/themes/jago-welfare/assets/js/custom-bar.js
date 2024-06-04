jQuery(document).ready(function($) {
    function animateProgress(target) {
        let current = 0;
        const progressBar = jQuery('#progress-bar');
        const interval = setInterval(() => {
            current++;
            progressBar.css('width', `${(current / target) * 100}%`);

            if (current === target) {
                clearInterval(interval);
            }
        }, 50);
    }

    // Usage example
    animateProgress(progressTarget.target);
});
