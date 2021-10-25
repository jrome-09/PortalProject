<?php
require_once "../includes/head.php";
?>

<body class="bg-light">
    <div id="spinner-wrapper" class="d-flex justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <?php
    require_once "../html/script.html";
    require "../includes/nav.php";
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <main class="position-relative">
        <div class="max-width-container">
            <div class="d-flex custom-row">
                <div class="custom-col">
                    <?php
                    require_once "sidenav.php";
                    ?>
                </div>
                <div class="custom-col" style="width: 100%;">
                    <div class="border rounded bg-white px-4 py-3 color-black font-500 shadow-sm mb-2">
                        <div class="row">
                            <div class="col-sm-6 color-black font-500">
                                <button class="btn bg-light me-4" id="sidenav-toggler" style="display: none;" onclick="toggle_sidenav()">
                                    <span data-feather="menu" class="color-black me-0"></span>
                                </button>
                                Alumni Records
                            </div>
                            <div class="col-sm-6">
                               
                            </div>
                        </div>
                    </div>
                    <div class="border rounded bg-white px-4 py-3 color-black font-500 shadow-sm mb-2">
                        <div class="card overflow-auto bg-white tb-card" style="min-height: 300px;">
                            <table class="table fontsize_13 table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" class="p-3 font-500">#</th>
                                        <th scope="col" class="px-1 py-3 font-500">Full Name</th>
                                        <th scope="col" class="px-1 py-3 font-500">Contact Number</th>
                                        <th scope="col" class="px-1 py-3 font-500">Email Address</th>
                                        <th scope="col" class="px-1 py-3 font-500">Degree</th>
                                        <th scope="col" class="px-1 py-3 font-500">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $num = 0;
                                    $sql = "SELECT * FROM `alumni` ORDER BY _id DESC";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $num = $num + 1;
                                    ?>
                                        <tr class="tbtr">
                                            <td data-label="#" scope="col" class="p-1 px-3 num"><?php echo $num; ?></td>
                                            <td data-label="Full Name" scope="col" class="p-1"><?php echo $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name']; ?></td>
                                            <td data-label="Contact Number" scope="col" class="p-1"><?php echo $row['contact_number']; ?></td>
                                            <td data-label="Email Address" scope="col" class="p-1"><?php echo $row['email_address']; ?></td>
                                            <td data-label="Degree" scope="col" class="p-1"><?php echo $row['degree_earned']; ?></td>
                                            <td data-label="Actions" scope="col" class="p-1">
                                                <a href="#" class="ntd me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="View" id="<?php echo "view_" . $row['_id'] ?>" onclick="view_detail(this.id, '<?php echo $row['first_name'] . '_' . $row['last_name'] ?>')"><span data-feather="eye"></span></a>
                                                <a href="#" class="ntd me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" id="<?php echo "edit_" . $row['_id'] ?>"><span data-feather="edit-3"></span></a>
                                                <a href="#" class="ntd me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" id="<?php echo "delete_" . $row['_id'] ?>"><span data-feather="trash"></span></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <form action="alumni_details.php" method="get" id="view_form">
        <input type="hidden" name="_id" id="alumni_id">
        <input type="hidden" name="name" id="alumni_name">
    </form>
    <?php
    require_once "../includes/footer.php";
    ?>
    <script>
        document.title = "CCIT Alumni records";
        document.getElementById("a_alumni-link").classList.add('active')

        function view_detail(_id, name) {
            const form = document.getElementById('view_form')
            document.getElementById('alumni_id').value = _id
            document.getElementById('alumni_name').value = name
            form.submit()
        }
    </script>
    <style>
        table td {
            font-size: 12px;
        }
    </style>
</body>

</html>