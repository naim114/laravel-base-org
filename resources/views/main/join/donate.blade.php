@extends('layouts.main-master')

@section('page-title', trans('app.join.donate'))

@section('content')
    <section class="contact">
        <div class="container" data-aos="fade-up">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h1>Donate</h1>
                    <p>Support our organization by donating any amount you like.</p>
                </div>
                <div class="input-group mb-2">
                    <select class="form-select">
                        <option selected>Select amount to donate...</option>
                        <option value="10">RM10.00</option>
                        <option value="20">RM20.00</option>
                        <option value="50">RM50.00</option>
                        <option value="70">RM70.00</option>
                        <option value="100">RM100.00</option>
                        <option value="x">Enter any amount</option>
                    </select>
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text">RM</span>
                    <input type="text" class="form-control" aria-label="Ringgit amount (with dot and two decimal places)"
                        readonly>
                </div>
                <button type="button" class="btn btn-primary p-3">Donate Now</button>
            </div>
        </div>
    </section>
@stop
