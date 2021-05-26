<?php
require "../html/head.html";
?>

<body>
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <link rel="stylesheet" href="../Candidate/candidate.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="index.css">
    <?php
    require "../html/script.html";
    require "../Candidate/candidate-navigation.php"
    ?>

    <main>
        <div class="bg-light">
            <div class="max-width-container margin-top-nav">
                <div class="px-4 py-2 border background-thicker-light rounded mb-2">
                    <a href="forum-index.php" class="color-black font-500 fontsize-14 text-decoration-none hover-text-primary">Forum</a>
                    <span data-feather="chevron-right"></span>
                    <a href="#" class="text-primary font-500 fontsize-14">Thread Name or Title</a>
                </div>
                <div class="p-4 mb-2 background-thicker-light color-black d-flex justify-content-between border rounded flex-mobile-column">
                    <div class="text-start">
                        <p class="mb-0 font-500 fontsize-14 text-primary">Thread Name or Title</p>
                        <p class="font-super--small color-light mb-0 font-500">Monday 05-24-2021</p>
                    </div>
                    <a href="#" type="button" class="btn btn-primary px-4 fontsize-14 font-500" id="postThread-btn">
                        <span data-feather="edit" class="color-white" style="margin-bottom: 0.10rem;"></span>
                        Post Thread
                    </a>
                </div>
                <div class="border bg-white rounded mb-4 border-top-2" id="thread-card01">
                    <div class="d-flex thread-flex-wrapper">
                        <div class="fontsize-14 text-center p-4 m-auto border-end thread-master-card">
                            <div class="image-container m-auto hw-100px border rounded-pill background-thicker-light"></div>
                            <div class="tag-wrapper">
                                <a href="#" class="font-500 text-decoration-none text-primary">Jerome Cabrera</a>
                                <p class="bg-primary p-1 mb-1 rounded font-500 font-super--small text-white ts-tag">Student</p>
                                <p class="color-black font-super--small font-500 institution">University of Northern Philippines</p>
                            </div>
                        </div>
                        <div class="color-black p-4 fontsize-14">
                            <div class="d-flex justify-content-between">
                                <p class="font-super--small color-light font-500">Monday 05-24-2021</p>
                                <p class="color-light font-super--small">#1</p>
                            </div>
                            <p class="mb-0 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus fugit eveniet rerum aspernatur magni quis, maxime obcaecati tempora quam hic commodi atque repellat accusamus deleniti reprehenderit possimus amet necessitatibus harum.</p>
                        </div>
                    </div>
                </div>
                <div class="background-thicker-light rounded border py-2 px-4 mb-2">
                    <p class="mb-0 font-500 fontsize-13 color-black"><span data-feather="corner-down-right"></span> Replied (000)</p>
                </div>
                <div id="thread-reply-container">

                </div>
                <div class="d-flex justify-content-end">
                    <nav aria-label="...">
                        <ul class="pagination mb-0">
                            <!-- <li class="page-item disabled">
                                <a class="page-link fontsize-14" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li> -->
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
            for (i = 2; i < 11; i++) {
                const Mydiv = document.getElementById("thread-card01");
                var divclone = Mydiv.cloneNode(true);
                divclone.id = "thread-card0" + i;
                divclone.children[0].children[1].children[0].children[1].innerHTML = "#" + i;
                var parentcon = document.getElementById("thread-reply-container");
                parentcon.appendChild(divclone);
            }
        </script>
        <style>
            @media screen and (max-width: 961px) {
                .thread-flex-wrapper {
                    flex-direction: column;
                }

                .thread-master-card {
                    border-right: none !important;
                    border-bottom: 1px solid #dee2e6 !important;
                    max-width: none !important;
                }

                .flex-mobile-column {
                    flex-direction: column;
                }

                #postThread-btn {
                    margin-top: 0.5rem;
                    max-width: 155.217px;
                }

                #thread-reply-container .image-container {
                    width: 44px !important;
                    height: 44px !important;
                    min-width: 44px !important;
                    margin: 0 !important;
                    margin-right: 0.5rem !important;
                }

                #thread-reply-container .institution {
                    display: none;
                }

                #thread-reply-container .thread-master-card {
                    display: flex;
                    flex-direction: row;
                }

                #thread-reply-container .ts-tag {
                    margin: 0 !important;
                }

            }

            .thread-master-card {
                width: 100%;
                min-width: 176px;
                max-width: 190px;
            }

            .ts-tag {
                max-width: 300px;
                margin: auto;
            }
        </style>
    </main>

    <?php
    require "../html/footer.html";
    ?>
    </div>
    <script src="../javascript/functions.js"></script>
    <script src="../javascript/scroll.js"></script>
    <script src="../javascript/onclick.js"></script>
    <script>
        loadPage();
        feather.replace();
        document.getElementById('forum-link').classList.toggle('active');
    </script>
</body>

</html>