@extends('layouts.dashboard')

@section('content')

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                               @lang('site.add_new_news')
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form" action="{{ route('dashboard.news.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="kt-portlet__body">

                            @foreach(config('translatable.locales') as $locale)
                                <div class="form-group">
                                    <label>@lang('site.'.$locale.'.title')</label>
                                    <input type="text" name="{{$locale}}[title]" value="{{old($locale.'.title')}}" class="form-control" placeholder="@lang('site.enter_title')">
                                </div>

                                <div class="form-group form-group-last">
                                    <label for="exampleTextarea">@lang('site.'.$locale.'.description')</label>
                                    <textarea class="form-control" name="{{$locale}}[description]" id="exampleTextarea" placeholder="@lang('site.enter_description')" rows="3"></textarea>
                                </div>

                            @endforeach

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control image">
                            </div>

                            <div class="form-group">
                                <img src=""  style="width: 100px" class="img-thumbnail image-preview" alt="">
                            </div>


                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="submit" class="btn btn-primary">@lang('site.add')</button>
                            </div>
                        </div>
                    </form>

                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>




@endsection
