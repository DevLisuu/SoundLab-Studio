<style>
    .divider:after,.divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }


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