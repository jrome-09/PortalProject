

<style>
    #job-details {
        position: fixed;
        top: -100px;
        left: 0;
        right: 0;
        z-index: 10;
        height: 550px;
        overflow: scroll;
        overflow-x: hidden;
        visibility: hidden;
        opacity: 0;
        transition: 0.8s;

    }

    @keyframes desc-visible {
        0% {
            top: -100%;
            opacity: 0;
        }

        60% {
            top: 5.5rem;
        }

        100% {
            visibility: visible;
            top: 5rem;
            opacity: 100%;
        }
    }

    #job-details.visible {
        visibility: visible;
        top: 5rem;
        opacity: 100%;
        animation-name: desc-visible;
        animation-duration: 0.8s;
    }

    #x {
        height: 24px;
        width: 24px;
        transition: 0.4s;
    }
</style>

<div class="max-width-container-sm px-3 py-1 border-top border-bottom" id="job-details">
    <div class=" p-5 bg-white rounded mb-2 border shadow">
        <div class="d-flex justify-content-end">
            <span data-feather="x" class="color-black hover-text-primary" id="x" onclick="ShowDetails()"></span>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="image-container rounded border bg-light mb-2" style="height: 70px; width: 70px;"></div>
                <h5 class="color-black mb-0">Software Developer</h5>
                <p class="color-black fontsize-14">Company Name</p>
                <p class="color-light fontsize-14 m-0">Salary: PHP 30k-50k Monthly</p>
                <p class="color-light fontsize-14 m-0">Address: Vigan City Ilocos Sur</p>
                <p class="color-light fontsize-14">Date Posted: May 1, 2021</p>
            </div>
            <div class="col-lg-3 d-flex flex-column justify-content-center ">
                <div class="btn btn-primary my-2 font-500 py-2 fontsize-14 shadow-sm-hover">Apply now</div>
                <div class="btn btn-light border my-2 px-1 py-2 fontsize-14 color-black shadow-sm-hover hover-text-primary hover-text-feather"><span data-feather="bookmark"></span> Remove to Bookmarks</div>
            </div>
        </div>
    </div>
    <div class=" p-5 bg-white rounded border shadow">
        <p class="fontsize-14 font-400 color-black">Job Highlights</p>
        <ol class="mb-5">
            <li class="bullets fontsize-13 color-black mb-1">Job Highlight 1</li>
            <li class="bullets fontsize-13 color-black mb-1">Job Highlight 2</li>
            <li class="bullets fontsize-13 color-black mb-1">Job Highlight 3</li>
        </ol>
        <p class="font-400 fontsize-14 color-black">Job Details</p>
        <p class="font-500 fontsize-14 color-black">Job Requirements:</p>
        <ol>
            <li class="bullets fontsize-13 color-black mb-1">Fluent in programming language such as C#, ASP.NET.</li>
            <li class="bullets fontsize-13 color-black mb-1">Fluent in scripting HTML, CSS and JavaScript.</li>
            <li class="bullets fontsize-13 color-black mb-1">Fluent in MS SQL database and SQL syntax.</li>
            <li class="bullets fontsize-13 color-black mb-1">Fluent in relevant development software, particularly, Visual Studio, MS SQL.</li>
            <li class="bullets fontsize-13 color-black mb-1">Experience applying theories related to web, database, interactive and mobile application.</li>
            <li class="bullets fontsize-13 color-black mb-1">Understanding of basic designing tools such as Photoshop and Illustrator.</li>
            <li class="bullets fontsize-13 color-black mb-1">Good communication skills.</li>
            <li class="bullets fontsize-13 color-black mb-1">Ability to manage multiple timelines.</li>
            <li class="bullets fontsize-13 color-black mb-1">Highly creative in thinking, concepts and designs.</li>
            <li class="bullets fontsize-13 color-black mb-1">No specific paper qualification is required; anyone with the passion and the above requirement may apply.</li>
        </ol>
        <p class="font-500 fontsize-14 color-black">Job Responsibilities/Duties:</p>
        <ol class="mb-5">
            <li class="bullets fontsize-13 color-black mb-1">Develop web, interactive, mobile and robotics applications.</li>
            <li class="bullets fontsize-13 color-black mb-1">Work collaboratively to create design & development concepts.</li>
            <li class="bullets fontsize-13 color-black mb-1">Collaborate with internal departments to ensure your development are consistent with corporate guidelines.</li>
            <li class="bullets fontsize-13 color-black mb-1">Translate concepts into actual implementation with a focus on usability and speed.</li>
            <li class="bullets fontsize-13 color-black mb-1">Handle all software and web development work.</li>
            <li class="bullets fontsize-13 color-black mb-1">Manage and meet project deadline</li>
        </ol>
        <p class="font-500 fontsize-14">Additional Information</p>
        <p class="fontsize-13 colorblack">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat nesciunt nobis error. Deserunt voluptas commodi ratione. Dolor necessitatibus quo excepturi quasi obcaecati accusantium inventore assumenda omnis, tempora neque quibusdam quis.</p>
        <div class="row">
            <div class="col-md-6">
                <p class="fontsize-14 font-500 color-black m-0">Career Level</p>
                <p class="fontsize-13 color-black">Entry Level</p>
                <p class="fontsize-14 font-500 color-black m-0">Job Type</p>
                <p class="fontsize-13 color-black">Full Time</p>
            </div>
            <div class="col-md-6">
                <p class="fontsize-14 font-500 color-black m-0">Qualification</p>
                <p class="fontsize-13 color-black">Diploma, Advanced/Higher/Graduate Diploma</p>
                <p class="fontsize-14 font-500 color-black m-0">Job Specializations</p>
                <p class="fontsize-13 color-black">Computer/Information Technology, IT-Software</p>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-5">
            <a href="#" type="button" class="btn btn-primary px-4 font-500 fontsize-14">Open in New Tab</a>
        </div>
    </div>
</div>
