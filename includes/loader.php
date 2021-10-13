<div id="loader" class="d-flex justify-content-center align-items-center">
    <button class="btn btn-primary" type="button" disabled>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        Please wait...
    </button>
</div>
<style>
    #loader {
        height: 100vh;
        width: 100%;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        z-index: 99;
        opacity: 100%;
        transition: 0.4s;
        visibility: visible;
        background-color: #fff;
        padding: 50px;
    }

    #loader.active {
        opacity: 0;
        visibility: hidden;
    }
</style>

<script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector("#loader").classList.remove("active");
        } else {
            document.querySelector("#loader").classList.add("active");
        }
    }
</script>