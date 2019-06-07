<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- SCRIPTS -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript"></script>




    <title>PAPW2 - PM Project</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="...public/artpage.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <style>
    html,
    body {
        color: #ffff;
        font-family: 'Bembo Std', sans-serif;
        font-weight: 200;
        height: 100%;
        margin: 0;
    }

    .full-height {
        height: fixed;
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
        right: 0;
        top: 0;
    }

    .content {
        text-align: center;
    }
    </style>

    <!-- NAVBAR -->

    <nav>

        <div class="top-grad">
            <div class="nav-wrapper">
                <a class="left hide-on-med-and-down"><img src="assets/logo2.jpg" height="250" width="520"></a>

            </div>
        </div>
        <div class="nav_options">
            <ul class="center hide-on-med-and-down">
                <li><a href="#about_modal">ABOUT</a></li>
                <li><a href="#admission_modal">ADMISSIONS</a></li>
                <li><a href="#alumni_modal">ALUMNI</a></li>
                <li><a href="#academics_modal">ACADEMICS</a></li>
                @if(Session::has('id'))
                <li><a href="{{url('userOUT')}}">LOG OUT</a></li>
                @endif
            </ul>
        </div>

        <div class="nav-wrapper right" style="display: flex;">
            @if(Session::has('id'))
            <img src="assets/prof_pic.jpg" style="margin-top: 15px; max-width:50%; max-height:50%;" alt="Avatar"
                class="circle">
            <a href="{{url('PROF?id=' . Session::get('id'))}}">{{ Session::get('name')}}</a>
            @else
            <a href="{{url('REG')}}">REGISTER |</a>
            <a href="{{url('/')}}">| LOG IN</a>
            @endif
            <form>
                <div class="input-field">
                    <input id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>

</head>

<!-- BODY -->

<body>

    @if(Session::has('id'))
    <a class="btn-floating btn-large waves-effect waves-light blue" href="#dopost_modal"
        style="position: fixed; z-index: 3000;"><i class="material-icons" style="padding-top: 10%;">add</i></a>
    @endif


    <!-- DASHBOARD BANNER -->

    <div id="banner" class="SECT_dash_banner" style="background: url(https://theshopsatyale.com/cms/wp-content/uploads/2017/07/19477564_10155430243077829_4072551916953098858_o.jpg) no-repeat center center;
            background-size: cover;">

    </div>

    <!-- NEWS SECTION -->

    <div id="AdminNews" class="SECT_dash_news">
        <h1>News</h1>
        <h5>"Everyone has inside of him a piece of good news. The good news is that you don't know how great you can be!
            How much you can love! What you can accomplish! And what your potential is!" -Anne Frank</h5>

        <!-- NEWS CONTAINER -->

        <div id="news" class="row">

            <div class="col s12 m3 l3">
                <div class="card horizontal small">
                    <div class="card-image">
                        <img class="responsive-img" src="assets/4.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m3 l3">
                <div class="card horizontal small">
                    <div class="card-image">
                        <img class="responsive-img" src="assets/2.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m3 l3">
                <div class="card horizontal small">
                    <div class="card-image">
                        <img class="responsive-img" src="assets/3.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 m3 l3">
                <div class="card horizontal small">
                    <div class="card-image">
                        <img class="responsive-img" src="assets/1.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- STUDENT ART SECTION -->

    <div id="ArtGallery" class="SECT_dash_artelly">
        <h1>Art Gallery</h1>
        <h5>“We don’t make mistakes, just happy little accidents” -Bob Ross</h5>

        <!-- ART POST CONTAINER -->

        <div id="art_post" class="row">
<!--test-->
                                <div class='col s12 m7 l3'>
                                <div class='card small'>
                                <div class='card-image'>
                                <img class='responsive-img img-cover' src="assets/2.jpg">
                                </div>
                                <div class='card-action modal-trigger'>
                                <a id='modal-triggeo' href='#post_modal'>wea
                                </a>
                                </div>
                                </div>
                                </div>
  
        
<!--test-->
        </div>



    </div>

    <!-- MODALS -->
    <div class="modal" id="post_modal" style="height: 80%; max-height: 700px;">

                <div class="row">
                             <!--columna 1 donde estara el POST-->
                             <div class="column s12 m7 l3">
                                 <div class="card medium">
                                     <div class="card-image ">
                                         <p id="post-id-modal" hidden></p>
                                        
                                         <img id="modal-img" class="materialboxed" src="">
                                        
                                     </div>
                                 </div>
                             </div>

                             <!--columna 2 donde estaran los COMMENT-->
                             <div class="column s6 m6 l6">
                                 <form>
                                     <textarea id="messagebox" name='message'></textarea>
                                     <input id="btn_comment" type="button">

                                 </form>
                                 <div id="seccionComments"></div>

                             </div>
                </div>
    </div>

    <div class="modal modal-fixed-footer" id="dopost_modal">
        <form id="form_newpost" enctype='multipart/form-data'>
            @crsf
           <!-- <input id="myFile" class="black-text" placeholder="Select Files" type="file" name="myFile" multiple><br><br>
            <input id="post_title" class="black-text" placeholder="Title" type="text" name="title">
            <br>
            <input id="post_description" class="black-text" placeholder="Descripcion" type="text" name="descripcion">
            <br><br>
            <button class="btn-small waves-effect waves-light right" type="submit">SEND</button>


             <input id="myFile" class="black-text" type="file" name="myFile" multiple>
            -->

            <div class="modal-content center">
                <h3 class="black-text">Make Yourself Notice</h3>

                <div class="file-field input-field">
                  <div class="btn">
                        <span>File</span>
                        <input id="myFile" type="file" name="myFile" multiple>
                  </div>

                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                    </div>
                </div>
    
            

            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="post_title" class="black-text" placeholder="Title" type="text" name="title" data-length="22">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="post_description" class="black-text materialize-textarea" placeholder="Descripcion" type="text" name="descripcion" data-length="250"></textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer" style="margin-left: -3em;">
                <a href="#!" id="btn_cancel" name='btn_cancel'
                    class="modal-close waves-effect waves-blue btn-flat bottom"
                    style="font-size: 20px;">CANCEL</a>
                    <button class="modal-close waves-effect waves-blue btn bottom" style="font-size: 20px;" type="submit">POST</button>
            </div>
        </form>
    </div>

    </div>
    </div>

    <div class="modal modal-fixed-footer" id="about_modal">
        <div class="modal-content">
            <h2 class="black-text">About Our School</h2>

            <iframe class="right" width="560" height="315" src="https://www.youtube.com/embed/Huxgc-nvk48"></iframe>

            <p class="black-text">The study of the visual arts at Yale had its beginning with the opening, in 1832, of
                the Trumbull Gallery, one of the first (and long the only one) connected with a college in this country.
                It was founded by patriot-artist Colonel John Trumbull, one-time aide-de-camp to General Washington,
                with the help of Professor Benjamin Silliman, the celebrated scientist. A singularly successful art
                exhibition held in 1858 under the direction of the College Librarian, Daniel Coit Gilman, led to the
                establishment of an art school in 1864, through the generosity of Augustus Russell Street, a native of
                New Haven and graduate of Yale’s Class of 1812. This new educational program was placed in the hands of
                an art council, one of whose members was the painter-inventor Samuel F. B. Morse, a graduate of Yale
                College. When the Yale School of the Fine Arts opened in 1869, it was the first art school connected
                with an institution of higher learning in the country, and classes in drawing, painting, sculpture, and
                art history were inaugurated. The art collections in the old Trumbull Gallery were moved into a building
                endowed by Augustus Street and so named Street Hall, and were greatly augmented by the acquisition of
                the Jarves Collection of early Italian paintings in 1871.</p>
            <p class="black-text">Architectural instruction was begun in 1908 and was established as a department in
                1916 with Everett Victor Meeks at its head. Drama, under the direction of George Pierce Baker and with
                its own separate building, was added in 1925 and continued to function as a department of the School
                until it became an independent school in 1955. In 1928 a new art gallery was opened, built by Egerton
                Swartwout and funded through the generosity of Edward S. Harkness. It was connected to Street Hall by a
                bridge above High Street, and Street Hall was used for instruction in art. The program in architecture
                was moved to Weir Hall, designed by George Douglas Miller. A large addition to the Art Gallery, designed
                by Louis I. Kahn in collaboration with Douglas Orr, and funded by the family of James Alexander Campbell
                and other friends of the arts at Yale, was opened in 1953. Several ﬂoors were used by the School until
                the rapidly expanding Gallery collections required their use. In 1959 the School of Art and Architecture
                was made a fully graduate professional school. In 1963 the Art and Architecture Building, designed by
                Paul Rudolph, was opened, funded by many friends of the arts at Yale under the chairmanship of Ward
                Cheney. In 1969 the School was constituted as two faculties, each with its own dean; and in 1972 two
                separate schools were established by the President and Fellows, the School of Art and the School of
                Architecture, which until 2000 shared the Rudolph building (now Rudolph Hall) for most of their
                activities. Sculpture was housed at 14 Mansfield Street in Hammond Hall (a large building formerly used
                for mechanical engineering), graphic design was located at 212 York Street (an old Yale fraternity
                building), and at 215 Park Street there were classrooms and additional graduate painting studios. Street
                Hall was assigned to the University Department of the History of Art. The arts at Yale—architecture,
                art, the Art Gallery, the Center for British Art, the history of art, the School of Drama, and the
                Repertory Theatre—thus occupied a group of buildings stretching along and near Chapel Street for almost
                three blocks.</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-blue btn-flat" style="font-size: 20px;">AGREE</a>
        </div>
    </div>



    <div class="modal modal-fixed-footer" id="admission_modal">
        <div class="modal-content">
            <h2 class="black-text">WELCOME CURIOUS MIND</h2>
            <h4 class="black-text">FALL 2019 ADMISSION DEADLINES + NOTICES</h4>
            <p class="black-text">Online applications for programs beginning in the 2019–2020 academic year must be
                submitted no later than 11:59:59 PM – EST on Friday, January 4, 2019.</p>
            <p class="black-text">Please note that Yale School or Art practices need-blind admission, and does not waive
                admission application fees under any circumstances. The non-refundable fee to apply is $100.</p>
            <p class="black-text">References and supporting documents: While references and TOEFL scores (if applicable)
                may continue to be received after the January 4th deadline, review of applications begins soon
                thereafter. Applicants are thus urged to impress upon those writing reference letters, or submitting
                items on their behalf, that the timely submission of such documents is critical to guarantee inclusion
                in the admission committee’s review.</p>
            <p class="black-text">Please also note that upon entering an individual as a reference in the application
                system, a reference request and URL to upload the recommendation letter is automatically sent to the
                recipient’s email. Applicants who decide to remove a specific reference from their application must
                notify that individual directly as the link will become inactive.</p>
            <p class="black-text">Application Status: Due to the high volume of incoming applications and processing
                currently underway, our office is unable to provide application status checks or confirm the receipt of
                items by phone or by email. Applicants should familiarize themselves with their Yale admission status
                page (accessed by logging into the application system) which will indicate outstanding items.</p>
            <p class="black-text">Receipt of items submitted by digital upload is updated in real time on the
                application status page checklist. Please allow one week for credentials received by postal mail to be
                reflected in the status page.</p>
            <p class="black-text">Admission Decision Notification: First-round admission decisions, which include
                interview invitations as well as denials, will be sent at the close of business on Friday, February 1,
                2019.</p>
            <p class="black-text">For more information, send email to admission on the section 'Contact Us' in the
                footer of the web page.</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-blue btn-flat" style="font-size: 20px;">AGREE</a>
        </div>
    </div>




    <div class="modal modal-fixed-footer" id="alumni_modal">
        <div class="modal-content">
            <h3 class="black-text">BEST WISHES TO ALL OUR ALUMNI!</h3>
            <h5 class="black-text">CON-GRAD-ULATIONS TO THE CLASS OF 2018!</h5>
            <p class="black-text">After almost 40 years at Yale and in her role as Director of Academic Affairs,
                Patricia DeChiara retired from the School of Art on July 31, 2017. Pat has worked with five Deans from
                Andrew Forge in the early 1980s through the past year of the School’s first woman Dean Marta Kuzma. Over
                the years, she has treasured her relationships with so many incredible faculty among them all the named
                classrooms in Green Hall from Paul Rand (with whom she recalls many wonderful lunches at his favorite
                deli in Westport with her close friend the designer Philip Burton), Gabor Peterdi (who always sat in her
                office before his first morning class recounting endless fascinating stories of his early years as a
                printmaker in Paris), and of course Robert Reed who she considered a dear friend and whose classroom
                dedication she helped organize just last month. Over the years, Pat has admitted and shepherded over
                2200 students through the MFA program and has stayed in touch with many cheering their accomplishments.
                Although she is looking forward to having the freedom to travel more extensively with her husband Jim
                Goodridge and daughter Anna who just graduated from Johns Hopkins University, spending more time
                visiting family and friends and increasing her volunteer activities (she is currently a Grants Committee
                member of the Guilford Fund for Education and is Co-Advisor of the Youth Advisory Group of the Guilford
                Foundation), she will deeply miss working with the wonderful students, faculty and staff who have made
                her career so very rewarding.</p>
            <div class="center">
                <iframe width="660" height="415" src="https://www.youtube.com/embed/rGrgNCvpgW0" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-blue btn-flat" style="font-size: 20px;">AGREE</a>
        </div>
    </div>



    <div class="modal modal-fixed-footer" id="academics_modal">
        <div class="modal-content">
            <h2 class="black-text">Our Program</h2>
            <h5 class="black-text">The School of Art offers professional instruction in four interrelated areas of
                study: graphic design, painting/printmaking, photography, and sculpture.</h5>
            <p class="black-text">Artists and designers of unusual promise and strong motivation are provided an
                educational context in which they can explore the potential of their own talents in the midst of an
                intense critical dialogue. This dialogue is generated by their peers, by distinguished visitors, and by
                a faculty comprised of professional artists of acknowledged accomplishment.</p>
            <p class="black-text">The graduate student’s primary educational experience at Yale is centered on the
                student’s own studio activity. Supporting this enterprise are the experience, knowledge, and skills
                gained from rigorous, structured courses such as drawing, filmmaking, the relativity of color, and the
                rich academic offerings found throughout Yale. Each student is routinely exposed to many aesthetic
                positions through encounters with faculty members and visitors. The School is devoted not only to the
                refinement of visual skills, but also to the cultivation of the mind. Students must bring creative force
                and imagination to their own development, for these qualities cannot be taught—they can only be
                stimulated and appreciated.</p>
            <p class="black-text">The School of Art offers an undergraduate art major for students in Yale College (see
                the bulletin Yale College Programs of Study). In addition, the School’s courses are open to students in
                the Graduate School of Arts and Sciences and other professional schools of the University, and School of
                Art students may enroll in elective courses in the Graduate School and other professional schools as
                well as in the College with permission.</p>
            <h5 class="black-text">Master of Fine Arts Degree</h5>
            <p class="black-text">The degree of Master of Fine Arts is the only degree offered by the School of Art. It
                is conferred by the University upon recommendation of the faculty after successful completion of all
                course work in residence and after a thesis presentation that has been approved by the faculty. It
                implies distinctive achievement on the part of students in studies in the professional area of their
                choice and demonstrated capacity for independent work. The minimum residence requirement is two years.
                All candidates’ work is reviewed by faculty at the end of each term. If the work is not considered
                satisfactory, the student may not be invited back to complete the program (see section on Review and
                Awards under Academic Regulations in the chapter General Information). All degree candidates are
                expected to be present at the Commencement exercises in May unless excused by the dean</p>
            <p class="black-text">Course work for the Master of Fine Arts degree carries a minimum of sixty credits. The
                disposition of these credits varies according to the area of study and is agreed upon at the time of
                registration between the student and the student’s faculty adviser.</p>
            <h5 class="black-text">Lecture Program</h5>
            <p class="black-text">Each department has its own visitors program in which professionals from outside the
                School are invited to lecture or take part in critiques. There is also an all-school lecture program in
                which ideas of general and cross-disciplinary importance are explored by visiting artists and members of
                the faculty.</p>
            <h5 class="black-text">Exhibitions</h5>
            <p class="black-text">The School of Art’s galleries in Green Hall and EIK at 32 Edgewood Avenue provide a
                year-round forum for the exhibition of work by students, faculty, and special guests in the four
                graduate departments of the School and the undergraduate program. Green Gallery is open to the public
                daily from 12 noon to 6 p.m. when exhibitions are scheduled. EIK is open during limited hours for
                specific exhibitions and events.</p>

            <div class="center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VcR9ZF2t1rE" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-blue btn-flat" style="font-size: 20px;">AGREE</a>
        </div>
    </div>





    <div class="modal" id="ops_modal">
        <div class="modal-content center">
            <h3 class="black-text">WE ARE SORRY~ I'M UNDER MAINTANACE AT THE MOMENT</h3>
            <h4 class="black-text">We apologize for the hidrance that we are causing you, but we hope to fix it soon!
            </h4>
            <h3 class="black-text">COME BACK LATER!</h3>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-blue btn-flat bottom" style="font-size: 20px;">Ok</a>
        </div>
    </div>

    <!-- SLIDER -->

    <div class="slider">
        <ul class="slides">

            <li>
                <img
                    src="https://132q6j40a81047nmwg1az6v8-wpengine.netdna-ssl.com/wp-content/uploads/2018/10/75-infographic-design-examples-1400x600.png">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>GRAPHIC DESIGN (MFA)</h3>
                    <h5 class="light grey-text text-lighten-3">The graphic design program focuses on the development of
                        a cohesive, investigative body of work, also known as the student’s thesis.</h5>
                </div>
            </li>

            <li>
                <img
                    src="https://static1.squarespace.com/static/577e85abc534a5d5bcf943d2/t/57b9fcb846c3c47fea27870e/1471806651820/Evening+Excursion+4.jpg?format=1500w">
                <!-- random image -->
                <div class="caption left-align">
                    <h3>PAINTING AND PRINTMAKING (MFA)</h3>
                    <h5 class="light grey-text text-lighten-3">The program is rooted in the investigation of painting as
                        a unique genre with its own complex syntax and history. Within this setting, the program
                        encourages diversity of practice and interpretation, innovation, and experimentation.</h5>
                </div>
            </li>

            <li>
                <img src="https://s23527.pcdn.co/wp-content/uploads/2018/07/L1005886.jpg.optimal.jpg">
                <!-- random image -->
                <div class="caption right-align">
                    <h3>PHOTOGRAPHY (MFA)</h3>
                    <h5 class="light grey-text text-lighten-3">Committed to a broad definition of photography as a
                        lens-based medium open to a variety of expressive means. Darkroom, studio, and computer
                        facilities are provided. Students receive technical instruction in black-and-white and color
                        photography as well as nonsilver processes and digital image production.</h5>
                </div>
            </li>

            <li>
                <img src="https://static.wixstatic.com/media/68ddf3_5334f511aa904c63891f860f35dc597e~mv2.jpg">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>SCULPTURE (MFA)</h3>
                    <h5 class="light grey-text text-lighten-3">Critical feedback in a broad array of diverse voices. The
                        field of sculpture includes a varied collection of working methods and outcomes—one set of tools
                        is not privileged over another—creating a healthy and experimental program that mirrors the
                        issues facing artists outside of the institution.</h5>
                </div>
            </li>

            <li>
                <img
                    src="https://cdn.vox-cdn.com/thumbor/ybRf9TwAH2J7VeSRxemzJAvNhMw=/0x0:6720x4480/1200x800/filters:focal(2717x1620:3791x2694)/cdn.vox-cdn.com/uploads/chorus_image/image/60141553/shutterstock_1068876371.0.jpg">
                <!-- random image -->
                <div class="caption left-align">
                    <h3>FILM, VIDEO, INTERDISCIPLINARY</h3>
                    <h5 class="light grey-text text-lighten-3">Not a formal area of study in the School of Art; however,
                        a number of students work primarily in film/video or interdisciplinary while enrolled in other
                        areas.</h5>
                </div>
            </li>

        </ul>
    </div>

    <!-- FOOTER -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">YALE School Of Art - WebPage Project</h5>
                    <p class="grey-text text-lighten-4" >PROGRAMMING AND APPLICATIONS FOR THE WEB 2 - Purpose of this
                        class: Develop web applications by applying the knowledge you already have of programming in
                        HTML, CSS, JavaScript, PHP and databases.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contact Us</h5>
                        <div class="contact-form">
                            <form>
                            <div class="input-field">
                                <i class="small material-icons prefix">contacts</i>
                                <input class="white-text" type="text" name='name' placeholder="Full Name">
                                <input class="white-text" type="text" name='email' placeholder="E-mail">
                            </div>
                            
                                <div class="input-field">
                                    <i class="small material-icons prefix">text_fields</i>
                                    <textarea class="white-text" name='mensaje' placeholder="Ask Away"></textarea>
                                </div>
                            
                            <button class="btn-small waves-effect waves-light right" type="submit">SEND</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Time Range of Web Page's Display: January - May 2019
            </div>
        </div>
    </footer>


    <script>
    $(document).ready(function() {
        $('.modal').modal();
        $('.materialboxed').materialbox();
        $('.slider').slider();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $('#form_newpost').submit(function(event) {
            event.preventDefault();

            var check = $('#post_title').val();

            if (check == "") {
                alert("Debes de llenar todos los campos");
            } else {


                ///CREAR POST
                $.ajax({
                    type: 'POST',
                    url: "{{route('post.new')}}",
                    data: new FormData($("#form_newpost")[0]),
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status == "error") {
                            alert('HOLA');
                        } else {
                            var obj = response.mensaje;
                            $('#art_post').prepend("<div class='col s12 m7 l3'>" +
                                "<div class='card small'>" +
                                "<div class='card-image'>" +
                                "<img class='responsive-img img-cover' src='" + obj['imagePath'] + "'>" +
                                "</div>" +
                                "<div class='card-action modal-trigger'>" +
                                "<p hidden >" + obj['id_posts'] + "</p>" +
                                "<a id='modal-triggeo' href='#post_modal'>" + obj['title'] +
                                "</a>" +
                                "</div>" +
                                "</div>" +
                                "</div>");
                        }
                    },
                    error: function(xhr, ajaxoptions, thrownError) {
                        alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr
                            .responseText);

                    }
                });
            }
        });

        $(document).on('click', '#modal-triggeo', function() {

            var xd = $(this).parent().siblings(".card-image").children().attr("src");
            $('#modal-img').attr("src", xd);

            $("#post-id-modal").text($(this).siblings("p").text());

        });

        //CREAR UNA BUSQUEDA
        $("#search").keyup(function(event) {
            
            if (event.keyCode === 13) {
                
                var word = $(this).val();
                
                if(word != ""){
                            
                            var values = {
                                'text': word
                            };

                            $.ajax({
                        type: 'POST',
                        url: "{{route('user.search')}}",
                        data: values,
                        async: false,
                        success: function(response) {
                            if (response.status == "error") {
                                
                                alert(response.mensaje);
                            }
                            else{
                                window.location.href = "{{route('search.page')}}";
                                
                            }

                        },
                        error: function(xhr, ajaxoptions, thrownError) {
                            alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr
                            .responseText);

                        }
                    });
                }
            }
            });


        ///COMMENTS!

        $("#btn_comment").click(function() {

            var value = {
                'text': $('#messagebox').val(),
                'idPOST': $('#post-id-modal').text()

            };

            $.ajax({
                type: 'POST',
                url: "{{route('comm.do')}}",
                data: value,
                success: function(response) {
                    if (response.status == "error") {
                        alert('Necesitas estar registrado para comentar');
                    } else {

                        var obj = response.mensaje;


                        $('#seccionComments').prepend("<div class='col s12 m7 l3'>" +

                            "<p class='black-text' src='" + obj['id_users'] + "'>" +
                            "</p>" +

                            "<p class='black-text'>" + obj['text'] + "</p>" +
                            "</div>");

                    }

                },
                error: function(xhr, ajaxoptions, thrownError) {
                    alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr
                    .responseText);

                }
            });

        });

        ///ALWAYS POSTS

        $.ajax({
            type: 'POST',
            url: "{{route('post.index')}}",
            data: {},
            success: function(response) {
                if (response.status == "error") {
                    alert('HOLA');
                } else {

                    var obj = response.mensaje;
                    for (var i = 0; i < obj.length; i++) {

                        $('#art_post').prepend("<div class='col s12 m7 l3'>" +
                            "<div class='card small'>" +
                            "<div class='card-image'>" +
                            "<img class='responsive-img img-cover' src='" + obj[i]['imagePath'] + "'>" +
                            "</div>" +
                            "<div class='card-action modal-trigger'>" +
                            "<p hidden >" + obj[i]['id_posts'] + "</p>" +
                            "<a id='modal-triggeo' href='#post_modal'>" + obj[i]['title'] +
                            "</a>" +
                            "</div>" +
                            "</div>" +
                            "</div>");

                    }
                }
            },
            error: function(xhr, ajaxoptions, thrownError) {
                alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);

            }
        });

    });
    </script>

</body>

</html>