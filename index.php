<?php
    /** Normal header */
    include "include/header.html";

    /** Instructor's Edit Page Header */
    //include "include/header_instructor_edit.html";

    /** Student Header */
    //include "include/header_student.html";
?>
<body class="layout-sticky layout-sticky-subnav ">

<div class="preloader">
    <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
    </div>
</div>

<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->

    <div id="header" class="mdk-header js-mdk-header mb-0" data-fixed>
        <?php
            /** Normal Nav for Login */
            //include "include/navbar_login.html";

            /** Instuctor Navbar */
            include "include/navbar_instructor.html";

            /** Student Navbar */
            //include "include/navbar_student.html";
        ?>
    </div>

    <!-- // END Header -->
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content top-margin">
        <!-- Drawer Layout -->
        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <!-- Drawer Layout Content -->
            <?php    

                /** Login */
                //include "view/login.html";

                /** Instructor's View */
                //include "view/instructor_home.html";
                //include "view/instructor_edit_course.html";
                include "view/instructor_edit_quiz.html";
                //include "view/instructor_quizzes.html";

                /** Student's View */
                //include "view/student_home.html";
                //include "view/student_courses.html";
                //include "view/student_courses_preview.html";
                //include "view/student_lesson.html";
                //include "view/student_quizzes.html";
                //include "view/student_quiz.html";
                //include "view/student_quiz_result.html";
            ?>
            <!-- // END drawer-layout__content -->
            <?php    
                /** Instrucor's Sidebar */
                include "include/sidebar_instructor.html";

                /** Student's Sidebar */
                //include "include/sidebar_student.html";
            ?>

        </div>
        <!-- // END drawer-layout -->

    </div>
    <!-- // END Header Layout Content -->

</div>
<!-- // END Header Layout -->
<?php    
    /** Normal Footer */
    include "include/footer.html";

    /** Instructor's Edit Page Footer */
    //include "include/footer_instructor_edit.html";

    /** Student's Footer */
    //include "include/footer_student.html";

?>