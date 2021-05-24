<div class="bg-light">
    <div class="max-width-container pb-2 margin-top-nav">
        <div class="p-4 background-thicker-light color-black d-flex align-items-center justify-content-between border rounded">
            <p class="mb-0 font-500 fontsize-14">New Posts</p>
            <a href="#" type="button" class="btn btn-primary px-4 fontsize-14 font-500">Post Thread</a>
        </div>
    </div>
    <div class="max-width-container pt-2">
        <div class="d-flex justify-content-start mb-2">
            <nav aria-label="...">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link fontsize-14" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link fontsize-14" href="#">1</a></li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link fontsize-14" href="#">2</a>
                    </li>
                    <li class="page-item fontsize-14"><a class="page-link" href="#">3</a></li>
                    <li class="page-item fontsize-14">
                        <a class="page-link fontsize-14" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="forum-section" class="border rounded border-bottom-0 mb-2">
            <div id="forum-header" class="p-4 background-thicker-light">
            </div>
            <div id="forum-content">
                <div id="thread01" class="border-bottom px-4 py-2 color-black">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="image-container border background-thicker-light rounded-pill" style="height: 40px; width: 40px;">

                            </div>
                        </div>
                        <div class="col-md-8 text-start">
                            <a href="#" id="thread-btn-01" class="fontsize-14 hover-text-underline font-500 text-decoration-none color-black mb-0 hover-text-primary">Thread Name or Title</a>
                            <p class="color-light font-super--small mb-0">Monday at 6:00 PM</p>
                        </div>
                        <div class="col-md-3 text-end">
                            <p class="font-super--small font-500 color-black mb-0">by Jerome Cabrera</p>
                            <p class="color-light font-super--small mb-0">Replied: 000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <nav aria-label="...">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link fontsize-14" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link fontsize-14" href="#">1</a></li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link fontsize-14" href="#">2</a>
                    </li>
                    <li class="page-item fontsize-14"><a class="page-link" href="#">3</a></li>
                    <li class="page-item fontsize-14">
                        <a class="page-link fontsize-14" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<script>
    for (i = 2; i < 21; i++) {
        const Mydiv = document.getElementById("thread01");
        var divclone = Mydiv.cloneNode(true);
        var child = divclone.children;
        var child01 = child[0].children;
        var child02 = child01[1].children;
        child02[0].id = "thread-btn-0" + i;
        var parentcon = document.getElementById("forum-content");
        parentcon.appendChild(divclone);
    }
</script>