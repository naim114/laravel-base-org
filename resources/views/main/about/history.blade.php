@extends('layouts.main-master')

@section('page-title', trans('app.about.history'))

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
            <div class="section-title">
                <h1>History</h1>
                <p>Read the history of our organization.</p>
            </div>
            <p>
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
        </div>
    </section>
@stop
