<!-- Styles -->
<style>
    html, body {
        background: url('tent.jpg');
        font-family: Snell Roundhand, cursive;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        color: white;
    }

    .full-height {
        height: 80vh;
    }

    .full-height-dropzone {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        height: 25vh;
        font-size: 84px;
    }

    .title > a {
        color: white;
        font-size: 84px;
        text-decoration: none;
    }

    .links > a {
        color: white;
        padding: 0 25px;
        font-size: 36px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    form {
        font-size: 24px;
        color: black;
    }

    .column {
        float: left;
        width: 25%;
    }
    
    /* Responsive layout - when the screen is less than 600px wide, make the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
        }
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .pagination {
        font-size: 24px;
    }

    .page-link {
        /* position: relative; */
        /* display: block; */
        padding: .5rem .75rem !important;
        /* margin-left: -1px; */
        line-height: 1.25 !important;
        color: white !important;
        background-color: transparent;
        border-color: transparent;
    }

    .page-item.active .page-link {
        z-index: 1 !important;
        color: #fff !important;
        background-color: transparent;
        border-color: transparent;
    }

    .page-item.disabled .page-link {
        color: #fff;
        pointer-events: none;
        cursor: auto;
        background-color: transparent;
        border-color: transparent;
    }

    .gallery {
        margin: 0 10%;
        margin-bottom: 20px;
    }

</style>