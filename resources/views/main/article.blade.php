@extends('layouts.main-master')

@section('page-title', 'Article Name')

@section('custom-head')
    <style>
        .card-title {
            line-height: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            /* number of lines to show */
            -webkit-line-clamp: 3;
            line-clamp: 3;
            -webkit-box-orient: vertical;
            transition: 0.3s all ease-in-out;
        }

        .card-time {
            color: #808791;
            font-size: 12.5px;
        }

        .card-img-top {
            height: 150px;
            object-fit: cover;
            opacity: 0.6;
            transition: 0.3s all ease-in-out;
        }

        .card:hover .card-title {
            color: #3b8af2;
        }

        .card:hover .card-img-top {
            opacity: 1;
        }
    </style>
@stop

@section('content')
    <section id="content">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-9">
                    <div class="text-center mb-4">
                        <img src="https://naim114.github.io/portfolio/demo/Company/assets/img/blog/blog-1.jpg"
                            class="img-fluid" alt="..." style="min-width: 100%;" />
                    </div>
                    <h2>Article Title #1</h2>
                    <h6 class="text-muted">Author: Saul Goodman<br>Published: Aug 16, 2022 | Updated: Aug
                        16, 2022
                    </h6>
                    <p class="mt-4">
                        Republican Party, by name Grand Old Party (GOP), in the United States, one of the two major
                        political
                        parties,
                        the other being the Democratic Party. During the 19th century the Republican Party stood against the
                        extension of slavery to the country’s new territories and, ultimately, for slavery’s complete
                        abolition.
                        During the 20th and 21st centuries the party came to be associated with laissez-faire capitalism,
                        low taxes,
                        and conservative social policies. The party acquired the acronym GOP, widely understood as “Grand
                        Old
                        Party,” in the 1870s. The party’s official logo, the elephant, is derived from a cartoon by Thomas
                        Nast and
                        also dates from the 1870s.
                        <br>
                        <br>
                        The term Republican was adopted in 1792 by supporters of Thomas Jefferson, who favoured a
                        decentralized
                        government with limited powers. Although Jefferson’s political philosophy is consistent with the
                        outlook of
                        the modern Republican Party, his faction, which soon became known as the Democratic-Republican
                        Party,
                        ironically evolved by the 1830s into the Democratic Party, the modern Republican Party’s chief
                        rival.
                        <br>
                        <br>
                        The Republican Party traces its roots to the 1850s, when antislavery leaders (including former
                        members of
                        the Democratic, Whig, and Free-Soil parties) joined forces to oppose the extension of slavery into
                        the
                        Kansas and Nebraska territories by the proposed Kansas-Nebraska Act. At meetings in Ripon, Wisconsin
                        (May
                        1854), and Jackson, Michigan (July 1854), they recommended forming a new party, which was duly
                        established
                        at the political convention in Jackson.
                    </p>
                    <div id="image-gallery">
                        <img src="https://naim114.github.io/portfolio/demo/Company/assets/img/portfolio/portfolio-3.jpg"
                            class="img-fluid mb-2" alt="..." />
                        <img src="https://naim114.github.io/portfolio/demo/Company/assets/img/portfolio/portfolio-2.jpg"
                            class="img-fluid mb-2" alt="..." />
                    </div>
                    <div id="video-gallery">
                        <video controls>
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        </video>
                    </div>

                    {{-- <div id="comment ">
                        <h4 class="mt-4 mb-3">9 Comments</h4>
                        <div>
                            <p><span class="fw-bold">Fernando Tatis Jr. </span><span class="fst-italic text-muted">01 Jan
                                    2020</span>
                            </p>
                            <p> Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente
                                quis molestiae est qui cum soluta. Vero aut rerum vel. Rerum quos laboriosam placeat ex qui.
                                Sint qui facilis et. </p>
                            <hr>
                        </div>
                        <div>
                            <p><span class="fw-bold">Kay Duggan </span><span class="fst-italic text-muted">01 Jan
                                    2020</span>
                            </p>
                            <p> Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente
                                quis molestiae est qui cum soluta. Vero aut rerum vel. Rerum quos laboriosam placeat ex qui.
                                Sint qui facilis et. </p>
                            <hr>
                        </div>
                    </div> --}}
                </div>
                <div class="col-md-3">
                    <h6>Read more like this</h6>
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow mb-2">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis
                                    blandit. Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus,
                                    sed
                                    feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam
                                    volutpat
                                    ultricies porttitor. Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor.
                                    Fusce scelerisque eleifend lectus in bibendum. Suspendisse lacinia egestas felis a
                                    volutpat.
                                </h6>
                                <p class="card-time"><i class="bi bi-clock"></i> 4 August 2020</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
@stop
