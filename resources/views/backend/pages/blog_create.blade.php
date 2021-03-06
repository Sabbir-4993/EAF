@extends('backend.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Create New Blog</h3>
                    </div>
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">

                            <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Blog Info:</h3>
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Blog Title:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="title" class="form-control" placeholder="Enter blog title">
                                        <span class="form-text text-muted">Please enter your blog title</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Sub Title:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="sub_title" class="form-control" placeholder="Enter blog sub title">
                                        <span class="form-text text-muted">Please enter your blog sub title</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Select Category:</label>
                                    <div class="col-lg-6">
                                        <select class="form-control selectpicker">
                                            <option disabled="" selected>Select Category</option>
                                            <option>Food</option>
                                            <option>Restaurant</option>
                                            <option>Kitchen</option>
                                            <option>Travel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Select Category:</label>
                                    <div class="col-lg-6 col-md-9 col-sm-12">
                                        <span contenteditable="" data-placeholder="Write some tags" aria-placeholder="Write some tags" class="tagify__input form-control" role="textbox" aria-autocomplete="both" aria-multiline="false" placeholder="enter tag..."></span><tags class="tagify form-control tagify--outside" tabindex="-1">
                                            <tag title="css" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" __isvalid="true" value="css"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">css</span></div></tag><tag title="html" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" __isvalid="true" value="html"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">html</span></div></tag><tag title="javascript" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" __isvalid="true" value="javascript"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">javascript</span></div></tag>
                                        </tags><input id="kt_tagify_3" name="tags-outside" class="form-control tagify tagify--outside" value="css, html, javascript" placeholder="Write some tags">
                                        <div class="mt-3 text-muted">Some cases might require addition of tags from outside of the box and not within.</div>
                                    </div>
                                </div>
                            </div>


                            <h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Blog Description:</h3>
                            <div class="mb-3">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Holder:</label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Enter full name">
                                        <span class="form-text text-muted">Please enter your account holder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="reset" class="btn btn-success mr-2 float-right">Create</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
@endsection
