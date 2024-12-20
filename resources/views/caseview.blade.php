@extends('layouts.main')

@section('main-container')

<div class="contents">


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
               
                
                    <!-- ends: .card -->
                  


                <div class="breadcrumb-main application-ui mb-30">
                    <div class="breadcrumb-action d-flex">
                        <div class="d-flex align-items-center user-member__title me-sm-25 me-0">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Application UI Design</h4>
                        </div>
                        <div class="action-btn me-10 my-sm-0">
                            <a href="#"  class="btn btn-primary bg-primary fs-12 fw-500" data-bs-toggle="modal" data-bs-target="#noteModal"><img
                                    src="img/svg/plus.svg" alt="plus" class="svg" data-bs-toggle="modal" data-bs-target="#noteModal"> Add
                                task</a>

                                {{-- <a href="#" class="btn btn-primary btn-default btn-rounded btn-block" data-bs-toggle="modal" data-bs-target="#noteModal"> <img src="img/svg/plus.svg" alt="plus" class="svg">
                                    Add Note</a> --}}
                        </div>
                        <div class="btn-group-toggle" data-bs-toggle="buttons">
                            <input type="checkbox" class="btn-check" id="btn-check-2-outlined">
                            <label class="btn btn-outline-secondary" for="btn-check-2-outlined"> <img
                                    src="img/svg/check.svg" alt="check" class="svg"> Mark as Complete</label>
                        </div>
                    </div>
                    <div class="d-flex text-capitalize">
                        <button type="button"
                            class="breadcrumb-edit btn btn-white border-0 color-primary content-center fs-12 fw-500 radius-md">
                            <img src="img/svg/edit-3.svg" alt="edit-3" class="svg">edit</button>
                        <button type="button"
                            class="breadcrumb-remove border-0 color-danger content-center bg-white fs-12 fw-500 ms-10 radius-md">
                            <img class="svg" src="img/svg/trash-2.svg" alt="trash-2">remove</button>
                    </div>
                </div>

                <div class="card card-default card-md mb-4">
                     
                    <div class="card-body">
                      <div class="dm-steps-wrap">
    
    
                        <div class="dm-steps">
                          <ul class="nav">
                            <li class="dm-steps__item finished">
                              <div class="dm-steps__line"></div>
                              <div class="dm-steps__content">
                                <span class="dm-steps__icon"><i class="la la-check"></i></span>
                                <span class="dm-steps__text">Finished</span>
                              </div>
                            </li>
                            <li class="dm-steps__item finished">
                              <div class="dm-steps__line"></div>
                              <div class="dm-steps__content">
                                <span class="dm-steps__icon"><span class="dm-steps__count">2</span></span>
                                <span class="dm-steps__text">In Progress</span>
                              </div>
                            </li>
                            <li class="dm-steps__item finished">
                              <div class="dm-steps__content">
                                <span class="dm-steps__icon"><span class="dm-steps__count">3</span></span>
                                <span class="dm-steps__text">pending</span>
                              </div>
                            </li>
                            <li class="dm-steps__item active">
                                <div class="dm-steps__content">
                                  <span class="dm-steps__icon"><span class="dm-steps__count">3</span></span>
                                  <span class="dm-steps__text">Waiting</span>
                                </div>
                              </li>
                              <li class="dm-steps__item">
                                <div class="dm-steps__content">
                                  <span class="dm-steps__icon"><span class="dm-steps__count">3</span></span>
                                  <span class="dm-steps__text">Waiting</span>
                                </div>
                              </li>
                              <li class="dm-steps__item">
                                <div class="dm-steps__content">
                                  <span class="dm-steps__icon"><span class="dm-steps__count">3</span></span>
                                  <span class="dm-steps__text">Waiting</span>
                                </div>
                              </li>
                              <li class="dm-steps__item">
                                <div class="dm-steps__content">
                                  <span class="dm-steps__icon"><span class="dm-steps__count">3</span></span>
                                  <span class="dm-steps__text">Waiting</span>
                                </div>
                              </li>
                           

                          </ul>
                        </div>
    
    
                      </div>
                    </div>
                  </div>


            </div>
        </div>
        <div class="modal fade noteModal" id="noteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body pb-0">
            <button type="button" class="close bg-transparent" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <form action="/">
            <div class="form-group mb-25">
            <label class="mb-2" for="text">Title</label>
            <input type="text" class="form-control" placeholder="Note Title" id="text">
            </div>
            <div class="form-group mb-25">
            <label class="mb-2" for="textarea">Description</label>
            <textarea id="textarea" class="form-control" placeholder="Note Description"></textarea>
            </div>
            <div class="form-group">
            <label class="mb-2" for="select-search">Note Label</label>
            <select class="form-control" id="select-search">
            <option>Social</option>
            <option>Work</option>
            <option>Personal</option>
            <option>Important</option>
            </select>
            </div>
            </form>
            </div>
            <div class="modal-footer note-submit-btn d-flex justify-content-end flex-wrap border-top-0 m-n1 px-30 pb-25">
            <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
            </div>
            </div>
            </div>
        <div class="projects-tab-content mb-30">
            <div class="row">
                <div class="col-xxl-3 col-lg-4 mb-25">
                    <div class="progress-box px-25 pt-25 pb-10 bg-success radius-xl">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="text-white fw-500 fs-16 text-capitalize">progress</h6>
                            <span class="progress-percentage text-white fw-500 fs-16 text-capitalize">64%</span>
                        </div>
                        <div class="progress-wrap d-flex align-items-center mb-15">
                            <div class="progress progress-height">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 64%;"
                                    aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-25">
                        <div class="card-body">
                            <div class="application-task d-flex align-items-center mb-25">
                                <div class="application-task-icon wh-60 bg-opacity-secondary content-center">
                                    <img class="svg wh-25 text-secondary" src="img/svg/at.svg" alt="img">
                                </div>
                                <div class="application-task-content">
                                    <h4>47</h4>
                                    <span class="text-light fs-14 mt-1 text-capitalize">total task</span>
                                </div>
                            </div>
                            <div class="application-task d-flex align-items-center mb-25">
                                <div class="application-task-icon wh-60 bg-opacity-primary content-center">
                                    <img class="svg wh-25 text-primary" src="img/svg/at2.svg" alt="img">
                                </div>
                                <div class="application-task-content">
                                    <h4>34</h4>
                                    <span class="text-light fs-14 mt-1 text-capitalize">task completed</span>
                                </div>
                            </div>
                            <div class="application-task d-flex align-items-center mb-25">
                                <div class="application-task-icon wh-60 bg-opacity-success content-center">
                                    <img class="svg wh-25 text-success" src="img/svg/at4.svg" alt="img">
                                </div>
                                <div class="application-task-content">
                                    <h4>$27,500</h4>
                                    <span class="text-light fs-14 mt-1 text-capitalize">Spendings</span>
                                </div>
                            </div>
                            <div class="application-task d-flex align-items-center">
                                <div class="application-task-icon wh-60 bg-opacity-warning content-center">
                                    <img class="svg wh-25 text-warning" src="img/svg/at3.svg" alt="img">
                                </div>
                                <div class="application-task-content">
                                    <h4>250</h4>
                                    <span class="text-light fs-14 mt-1 text-capitalize">hours spent</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xxl-6 col-lg-8 mb-25">
                    <div class="card border-0 pb-md-50 pb-15">
                        <div class="card-header py-sm-20 py-3  px-sm-25 px-3 ">
                            <h6>About Project</h6>
                        </div>
                        <div class="card-body">
                            <div class="about-projects">
                                <div class="about-projects__details">
                                    <p class="fs-15 mb-25">Many support queries and technical questions will
                                        already
                                        be
                                        answered in
                                        supporting
                                        documentation such as FAQ's and comments from previous buyers. Anim
                                        pariatur
                                        cliche
                                        reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                        squid. 3
                                        wolf moon
                                        officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt laborum
                                        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                        single-origin
                                        coffee nulla assumenda shoreditch.</p>
                                    <p class="fs-15"> Anim pariatur cliche reprehenderit, enim eiusmod high
                                        life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                        cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch
                                        3 wolf moon
                                        tempor</p>
                                </div>
                                <ul class="d-flex text-capitalize">
                                    <li>
                                        <span class="color-light fs-13">Project owner</span>
                                        <p class="color-dark fs-14 mt-1 mb-0 fw-500">Peter Jackson</p>
                                    </li>
                                    <li>
                                        <span class="color-light fs-13">Budget</span>
                                        <p class="color-dark fs-14 mt-1 mb-0 fw-500">$56,700</p>
                                    </li>
                                    <li>
                                        <span class="color-light fs-13">Start Date</span>
                                        <p class="color-primary fs-14 mt-1 mb-0 fw-500">26 Dec 2019</p>
                                    </li>
                                    <li>
                                        <span class="color-light fs-13">Deadline</span>
                                        <p class="color-danger fs-14 mt-1 mb-0 fw-500">18 Mar 2020</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- <div class="col-xxl-3 col-lg-6 col-12 mb-25 order-xxl-0 order-lg-1">
                    <div class="card h-100">
                        <div
                            class="card-header d-flex justify-content-between align-items-center py-10  px-sm-25 px-3">
                            <h6 class="fw-500 ">users</h6>
                            <button type="button"
                                class="border radius-lg color-primary fw-500 fs-12 bg-transparent acButton">
                                <img class="svg" src="img/svg/user-plus.svg" alt> add user</button>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-25">
                                <img src="img/tm1.png" class="wh-46 me-15" alt="img">
                                <div>
                                    <p class="fs-14 fw-600 color-dark mb-0">Meyri Carles</p>
                                    <span class=" mt-1 fs-14  color-light ">UI Designer</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-25">
                                <img src="img/tm2.png" class="wh-46 me-15" alt="img">
                                <div>
                                    <p class="fs-14 fw-600 color-dark mb-0">Shreyu Neu</p>
                                    <span class=" mt-1 fs-14  color-light ">Web Developer</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-25">
                                <img src="img/tm3.png" class="wh-46 me-15" alt="img">
                                <div>
                                    <p class="fs-14 fw-600 color-dark mb-0">Tuhin Molla</p>
                                    <span class=" mt-1 fs-14  color-light ">Project Manager</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-25">
                                <img src="img/tm4.png" class="wh-46 me-15" alt="img">
                                <div>
                                    <p class="fs-14 fw-600 color-dark mb-0">Billal Hossain</p>
                                    <span class=" mt-1 fs-14  color-light ">App Developer</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="img/tm5.png" class="wh-46 me-15" alt="img">
                                <div>
                                    <p class="fs-14 fw-600 color-dark mb-0">Khalid Hasan</p>
                                    <span class=" mt-1 fs-14  color-light ">App Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> --}}

                <div class="col-xxl-8 col-md-8  mb-25">
                    <div class="card">
                        <div class="card-header p-0">
                            <ul class="nav px-25 ap-tab-main app-ui-tab" id="project-ap-tab" role="tablist">

                                <li class="nav-item active">
                                    <a class="nav-link" id="project-timeline-tab" data-bs-toggle="pill"
                                        href="#project-timeline" role="tab" aria-selected="false">Activities</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content w-100" id="projectContent">

                            <div class="tab-pane fade show active" id="project-timeline" role="tabpanel"
                                aria-labelledby="project-timeline-tab">
                                <div class="card-body px-0 mx-25 border-bottom">
                                    <div class="task-activities d-flex align-items-center">
                                        <div class="task-activities__left d-flex">
                                            <div
                                                class="content-center border bg-normal radius-xl me-sm-20 me-0 task-activities__month">
                                                <div class=" px-20 text-center">
                                                    <h5>22</h5>
                                                    <span class="fs-13 color-gray">December</span>
                                                </div>
                                            </div>
                                            <div class="task-activities__right">
                                                <ul>
                                                    <li class>
                                                        <div
                                                            class="ffp d-flex justify-content-between align-items-center w-100">
                                                            <div class="d-flex">
                                                                <div
                                                                    class="me-3 ffp__imgWrapper d-flex align-items-center ">
                                                                    <span
                                                                        class=" wh-24 me-15 rounded-circle content-center color-danger bg-opacity-danger">
                                                                        <img src="img/svg/plus.svg" alt="plus"
                                                                            class="svg"></span>
                                                                    <span
                                                                        class="profile-image rounded-circle d-block wh-34 m-0 "
                                                                        style="background-image:url('img/tm5.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div>
                                                                    <a href="#">
                                                                        <p class="fw-500 fs-14 text-dark mb-0">
                                                                            Mumtahin
                                                                            <span
                                                                                class="color-light mx-1 fw-400">added
                                                                                new
                                                                                task</span>Mumtahin Dashboard
                                                                            Project
                                                                        </p>
                                                                    </a>
                                                                    <span
                                                                        class="pt-1 d-block color-extra-light fs-12">
                                                                        3:30 PM
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class>
                                                        <div
                                                            class="ffp d-flex justify-content-between align-items-center w-100">
                                                            <div class="d-flex">
                                                                <div
                                                                    class="me-3 ffp__imgWrapper d-flex align-items-center ">
                                                                    <span
                                                                        class=" wh-24 me-15 rounded-circle content-center color-primary bg-opacity-primary">
                                                                        <img src="img/svg/code.svg" alt="code"
                                                                            class="svg"></span>
                                                                    <span
                                                                        class="profile-image rounded-circle d-block wh-34 m-0 "
                                                                        style="background-image:url('img/tm6.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div>
                                                                    <a href="#">
                                                                        <p class="fw-500 fs-14 text-dark mb-0">
                                                                            Mike Greene
                                                                            <span
                                                                                class="color-light mx-1 fw-400">pushed
                                                                                commit</span>#652364
                                                                        </p>
                                                                    </a>
                                                                    <span
                                                                        class="pt-1 d-block color-extra-light fs-12">
                                                                        9:30 PM
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class>
                                                        <div
                                                            class="ffp d-flex justify-content-between align-items-center w-100">
                                                            <div class="d-flex">
                                                                <div
                                                                    class="me-3 ffp__imgWrapper d-flex align-items-center ">
                                                                    <span
                                                                        class=" wh-24 me-15 rounded-circle content-center color-success bg-opacity-success">
                                                                        <img src="img/svg/check.svg" alt="check"
                                                                            class="svg"></span>
                                                                    <span
                                                                        class="profile-image rounded-circle d-block wh-34 m-0 "
                                                                        style="background-image:url('img/tm2.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div>
                                                                    <a href="#">
                                                                        <p class="fw-500 fs-14 text-dark mb-0">
                                                                            Tomlinson
                                                                            <span
                                                                                class="color-light mx-1 fw-400">completed
                                                                                task</span>Invoice template
                                                                        </p>
                                                                    </a>
                                                                    <span
                                                                        class="pt-1 d-block color-extra-light fs-12">
                                                                        10:30 PM
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 mx-25">
                                    <div class="task-activities d-flex align-items-center">
                                        <div class="task-activities__left d-flex">
                                            <div
                                                class="content-center border bg-normal radius-xl me-sm-20 me-0 task-activities__month">
                                                <div class=" px-20 text-center">
                                                    <h5>21</h5>
                                                    <span class="fs-13 color-gray">December</span>
                                                </div>
                                            </div>
                                            <div class="task-activities__right">
                                                <ul>
                                                    <li class>
                                                        <div
                                                            class="ffp d-flex justify-content-between align-items-center w-100">
                                                            <div class="d-flex">
                                                                <div
                                                                    class="me-3 ffp__imgWrapper d-flex align-items-center ">
                                                                    <span
                                                                        class=" wh-24 me-15 rounded-circle content-center color-info bg-opacity-info">
                                                                        <img src="img/svg/user-plus.svg"
                                                                            alt="user-plus" class="svg"></span>
                                                                    <span
                                                                        class="profile-image rounded-circle d-block wh-34 m-0 "
                                                                        style="background-image:url('img/tm2.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div>
                                                                    <a href="#">
                                                                        <p class="fw-500 fs-14 text-dark mb-0">
                                                                            Mumtahin
                                                                            <span
                                                                                class="color-light mx-1 fw-400">added
                                                                                new
                                                                                task</span>Mumtahin Dashboard
                                                                            Project
                                                                        </p>
                                                                    </a>
                                                                    <span
                                                                        class="pt-1 d-block color-extra-light fs-12">
                                                                        3:30 PM
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class>
                                                        <div
                                                            class="ffp d-flex justify-content-between align-items-center w-100">
                                                            <div class="d-flex">
                                                                <div
                                                                    class="me-3 ffp__imgWrapper d-flex align-items-center ">
                                                                    <span
                                                                        class=" wh-24 me-15 rounded-circle content-center color-primary bg-opacity-primary">
                                                                        <img src="img/svg/code.svg" alt="code"
                                                                            class="svg"></span>
                                                                    <span
                                                                        class="profile-image rounded-circle d-block wh-34 m-0 "
                                                                        style="background-image:url('img/tm3.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div>
                                                                    <a href="#">
                                                                        <p class="fw-500 fs-14 text-dark mb-0">
                                                                            Mike Greene
                                                                            <span
                                                                                class="color-light mx-1 fw-400">pushed
                                                                                commit</span>#652364
                                                                        </p>
                                                                    </a>
                                                                    <span
                                                                        class="pt-1 d-block color-extra-light fs-12">
                                                                        9:30 PM
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class>
                                                        <div
                                                            class="ffp d-flex justify-content-between align-items-center w-100">
                                                            <div class="d-flex">
                                                                <div
                                                                    class="me-3 ffp__imgWrapper d-flex align-items-center ">
                                                                    <span
                                                                        class=" wh-24 me-15 rounded-circle content-center color-warning bg-opacity-warning">
                                                                        <img src="img/svg/upload.svg"
                                                                            alt="upload" class="svg"></span>
                                                                    <span
                                                                        class="profile-image rounded-circle d-block wh-34 m-0 "
                                                                        style="background-image:url('img/tm4.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div>
                                                                    <a href="#">
                                                                        <p class="fw-500 fs-14 text-dark mb-0">
                                                                            Tomlinson
                                                                            <span
                                                                                class="color-light mx-1 fw-400">completed
                                                                                task</span>Invoice template
                                                                        </p>
                                                                    </a>
                                                                    <span
                                                                        class="pt-1 d-block color-extra-light fs-12">
                                                                        10:30 PM
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xxl-4 col-lg-4 col-md-4 order-lg-0 order-md-1">
                    <div class="card pb-10 border-0">
                        <div class="card-header py-20  px-sm-25 px-3 ">
                            <h6>files</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-20">
                                <div class="files-area d-flex justify-content-between align-items-center">
                                    <div class="files-area__left d-flex align-items-center">
                                        <div class="files-area__img">
                                            <img src="img/zip@2x.png" alt="img" class="wh-42">
                                        </div>
                                        <div class="files-area__title">
                                            <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">
                                                Main-admin-design.zip</p>
                                            <span class="color-light fs-12 d-flex ">7.05 MB</span>
                                            <div class="d-flex text-capitalize">
                                                <a href="#" class="fs-12 fw-500 color-primary ">download</a>
                                                <a href="#" class="fs-12 fw-500 color-primary ms-10"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="files-area__right">
                                        <div class="dropdown dropleft">
                                            <button class="btn-link border-0 bg-transparent p-0"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img src="img/svg/more-horizontal.svg" alt="more-horizontal"
                                                    class="svg">
                                            </button>
                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                <a class="dropdown-item" href="#">view</a>
                                                <a class="dropdown-item" href="#">edit</a>
                                                <a class="dropdown-item" href="#">leave</a>
                                                <a class="dropdown-item" href="#">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-20">
                                <div class="files-area d-flex justify-content-between align-items-center">
                                    <div class="files-area__left d-flex align-items-center">
                                        <div class="files-area__img">
                                            <img src="img/pdf@2x.png" alt="img" class="wh-42">
                                        </div>
                                        <div class="files-area__title">
                                            <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">
                                                Product-guidelines.pdf</p>
                                            <span class="color-light fs-12 d-flex ">5.07 KB</span>
                                            <div class="d-flex text-capitalize">
                                                <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                                <a href="#"
                                                    class="fs-12 fw-500 color-primary ms-10">download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="files-area__right">
                                        <div class="dropdown dropleft">
                                            <button class="btn-link border-0 bg-transparent p-0"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img src="img/svg/more-horizontal.svg" alt="more-horizontal"
                                                    class="svg">
                                            </button>
                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                <a class="dropdown-item" href="#">view</a>
                                                <a class="dropdown-item" href="#">edit</a>
                                                <a class="dropdown-item" href="#">leave</a>
                                                <a class="dropdown-item" href="#">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-20">
                                <div class="files-area d-flex justify-content-between align-items-center">
                                    <div class="files-area__left d-flex align-items-center">
                                        <div class="files-area__img">
                                            <img src="img/psd@2x.png" alt="img" class="wh-42">
                                        </div>
                                        <div class="files-area__title">
                                            <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">
                                                admin-wireframe.psd</p>
                                            <span class="color-light fs-12 d-flex ">2.05 MB</span>
                                            <div class="d-flex text-capitalize">
                                                <a href="#" class="fs-12 fw-500 color-primary ">download</a>
                                                <a href="#" class="fs-12 fw-500 color-primary ms-10"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="files-area__right">
                                        <div class="dropdown dropleft">
                                            <button class="btn-link border-0 bg-transparent p-0"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img src="img/svg/more-horizontal.svg" alt="more-horizontal"
                                                    class="svg">
                                            </button>
                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                <a class="dropdown-item" href="#">view</a>
                                                <a class="dropdown-item" href="#">edit</a>
                                                <a class="dropdown-item" href="#">leave</a>
                                                <a class="dropdown-item" href="#">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-20">
                                <div class="files-area d-flex justify-content-between align-items-center">
                                    <div class="files-area__left d-flex align-items-center">
                                        <div class="files-area__img">
                                            <img src="img/jpg@2x.png" alt="img" class="wh-42">
                                        </div>
                                        <div class="files-area__title">
                                            <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">
                                                Wirefram-escreenshots.jpg</p>
                                            <span class="color-light fs-12 d-flex ">522 KB</span>
                                            <div class="d-flex text-capitalize">
                                                <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                                <a href="#"
                                                    class="fs-12 fw-500 color-primary ms-10">download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="files-area__right">
                                        <div class="dropdown dropleft">
                                            <button class="btn-link border-0 bg-transparent p-0"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img src="img/svg/more-horizontal.svg" alt="more-horizontal"
                                                    class="svg">
                                            </button>
                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                <a class="dropdown-item" href="#">view</a>
                                                <a class="dropdown-item" href="#">edit</a>
                                                <a class="dropdown-item" href="#">leave</a>
                                                <a class="dropdown-item" href="#">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="files-area d-flex justify-content-between align-items-center">
                                    <div class="files-area__left d-flex align-items-center">
                                        <div class="files-area__img">
                                            <img src="img/png@2x.png" alt="img" class="wh-42">
                                        </div>
                                        <div class="files-area__title">
                                            <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Logo.png</p>
                                            <span class="color-light fs-12 d-flex ">522 KB</span>
                                            <div class="d-flex text-capitalize">
                                                <a href="#" class="fs-12 fw-500 color-primary ">view</a>
                                                <a href="#"
                                                    class="fs-12 fw-500 color-primary ms-10">download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="files-area__right">
                                        <div class="dropdown dropleft">
                                            <button class="btn-link border-0 bg-transparent p-0"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <img src="img/svg/more-horizontal.svg" alt="more-horizontal"
                                                    class="svg">
                                            </button>
                                            <div class="dropdown-menu dropdown-menu--dynamic">
                                                <a class="dropdown-item" href="#">view</a>
                                                <a class="dropdown-item" href="#">edit</a>
                                                <a class="dropdown-item" href="#">leave</a>
                                                <a class="dropdown-item" href="#">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12 mb-50">
                    <div class="ticket-chat-wrapper pt-25 pb-30">
                    <h4>Log</h4>
               
                    <div class="ticket-search-header">
                    <form action="/" class="d-flex align-items-center">
                    <img class="svg" src="img/svg/smile.svg" alt="smile">
                    <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" placeholder="Type your message..." aria-label="Search">
                    </form>
                    <button type="button" class="border-0 btn-primary wh-50 p-10 rounded-circle">
                    <img class="svg" src="img/svg/send.svg" alt="send">
                    </button>
                    </div>

                    </div>
                    </div>

            </div>
        </div>

    </div>
</div>

@endsection
