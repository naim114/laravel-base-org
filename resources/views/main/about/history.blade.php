@extends('layouts.main-master')

@section('page-title', trans('app.about.history'))

@section('content')
    <section id="content">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1>History</h1>
                <p>Read the history of our organization.</p>
            </div>
            <p>
                Republican Party, by name Grand Old Party (GOP), in the United States, one of the two major political
                parties,
                the other being the Democratic Party. During the 19th century the Republican Party stood against the
                extension of slavery to the country’s new territories and, ultimately, for slavery’s complete abolition.
                During the 20th and 21st centuries the party came to be associated with laissez-faire capitalism, low taxes,
                and conservative social policies. The party acquired the acronym GOP, widely understood as “Grand Old
                Party,” in the 1870s. The party’s official logo, the elephant, is derived from a cartoon by Thomas Nast and
                also dates from the 1870s.
            </p>
            <p>
                The term Republican was adopted in 1792 by supporters of Thomas Jefferson, who favoured a decentralized
                government with limited powers. Although Jefferson’s political philosophy is consistent with the outlook of
                the modern Republican Party, his faction, which soon became known as the Democratic-Republican Party,
                ironically evolved by the 1830s into the Democratic Party, the modern Republican Party’s chief rival.
            </p>
            <p>
                The Republican Party traces its roots to the 1850s, when antislavery leaders (including former members of
                the Democratic, Whig, and Free-Soil parties) joined forces to oppose the extension of slavery into the
                Kansas and Nebraska territories by the proposed Kansas-Nebraska Act. At meetings in Ripon, Wisconsin (May
                1854), and Jackson, Michigan (July 1854), they recommended forming a new party, which was duly established
                at the political convention in Jackson.
            </p>

            <div id="carouselGalleryCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://localhost:8000/home/img/hero-bg.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost:8000/home/img/hero-bg.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost:8000/home/img/hero-bg.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="caption-title">Third slide label</h5>
                            <p class="caption-subtitle">Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost:8000/home/img/hero-bg.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="caption-title">Fourth slide label</h5>
                            <p class="caption-subtitle">Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost:8000/home/img/hero-bg.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="caption-title">Fifth slide label</h5>
                            <p class="caption-subtitle">Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselGalleryCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselGalleryCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@stop
