<style>
    .obrazek img {
        width: 100%;
        height: 100%;
        aspect-ratio: 1 / 1;
        transition: opacity 0.5s ease-in-out;
    }

    .obrazek .nowy-obrazek {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .obrazek:hover .nowy-obrazek {
        opacity: 1;
    }
</style>

<script>
    $(document).ready(function() {
        $('.obrazek').hover(
            function() {
                $(this).find('.nowy-obrazek').stop().fadeTo(500, 1);
            },
            function() {
                $(this).find('.nowy-obrazek').stop().fadeTo(500, 0);
            }
        );
    });
</script>