<div class="border rounded bg-white py-4 shadow-sm me-2" style="width: 220px;" id="sidenav">
    <div class="px-4 justify-content-end border-bottom pb-4" id="sidetoggler-container">
        <button type="button" class="btn bg-light" onclick="toggle_sidenav()">
            <span data-feather="menu"></span>
        </button>
    </div>

    <nav>
        <ul class="p-0">
            <li class="nav-item">
                <a href="page.php" class="ntd color-black hvtext-yellow hvbg-light d-block ps-4 py-3" id="a_dash-link">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="#" class="ntd color-black hvtext-yellow hvbg-light d-block ps-4 py-3" id="a_accounts-link">Accounts</a>
            </li>
            <li class="nav-item">
                <a href="#" class="ntd color-black hvtext-yellow hvbg-light d-block ps-4 py-3" id="a_jobs-link">Manage Job Posts</a>
            </li>
            <li class="nav-item">
                <a href="#" class="ntd color-black hvtext-yellow hvbg-light d-block ps-4 py-3" id="a_seekers-link">Jobs Seekers</a>
            </li>
            <li class="nav-item">
                <a href="#" class="ntd color-black hvtext-yellow hvbg-light d-block ps-4 py-3" id="a_employers-link">Employers</a>
            </li>
            <li class="nav-item">
                <a href="#" class="ntd color-black hvtext-yellow hvbg-light d-block ps-4 py-3" id="a_requests-link">Requests</a>
            </li>
            <li class="nav-item">
                <a href="alumni_record.php" class="ntd color-black hvtext-yellow hvbg-light d-block ps-4 py-3" id="a_alumni-link">Alumni Records</a>
            </li>
        </ul>
    </nav>
</div>
<style>
    #sidetoggler-container {
        display: none;
    }

    @media screen and (max-width: 900px) {
        #sidenav {
            position: absolute;
            left: -220px;
            /* display: none; */
            visibility: hidden;
            opacity: 0;
            transition: .4s ease-in-out !important;
        }

        .col-md-6 {
            margin-bottom: .5rem;
        }

        #sidenav-toggler {
            display: inline-block !important;
        }

        #sidenav.active {
            /* display: block; */
            opacity: 1;
            visibility: visible;
            left: 0;
        }

        #sidetoggler-container {
            display: flex;
        }

    }
</style>

<script>
    function toggle_sidenav() {
        document.getElementById('sidenav').classList.toggle('active')
    }
</script>