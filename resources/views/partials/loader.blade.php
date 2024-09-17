<style>
    /* Fullscreen loader container */
    #loader-container {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }

    /* Hide the loader and show the content when loaded */
    .loaded #loader-container {
        display: none;
    }

    .loaded #content {
        display: block;
    }
</style>

<div id="loader-container">
    <dotlottie-player src="https://lottie.host/f0f795a5-23f5-467b-b27b-264ba7608fb9/Q69szVm1oa.json"
        background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
    </dotlottie-player>
</div>

<script type="text/javascript">
    window.addEventListener('load', function() {
        // Hide the loader and show the content
        document.body.classList.add('loaded');
    });
</script>

<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
