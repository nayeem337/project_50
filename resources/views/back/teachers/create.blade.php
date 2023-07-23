@extends('back.master')

@section('title','Add Teacher')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center ">Add Teacher </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>



                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Phone </label>
                                    <div class="col-md-8">
                                        <input type="number" name="phone" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Subject</label>
                                    <div class="col-md-8">
                                        <input type="text" name="subject" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-success" value="Add Teacher ">
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
