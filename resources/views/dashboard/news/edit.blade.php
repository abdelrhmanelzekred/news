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
                                @lang('site.edite_news')
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form" action="{{route('dashboard.news.update',$news->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="kt-portlet__body">

                            @foreach(config('translatable.locales') as $locale)
                                <div class="form-group">
                                    <label>@lang('site.'.$locale.'.title')</label>
                                    <input type="text" name="{{$locale}}[title]" value="{{$news->translate($locale)->title}}" class="form-control" placeholder="Enter Title">
                                </div>

                                <div class="form-group form-group-last">
                                    <label for="exampleTextarea">@lang('site.'.$locale.'.description')</label>
                                    <textarea class="form-control" name="{{$locale}}[description]" id="exampleTextarea" rows="3">{{$news->translate($locale)->description}}</textarea>
                                </div>

                            @endforeach

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control image" >
                            </div>

                            <div class="form-group">
                                <img src="{{$news->image_path}}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>

                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>




@endsection
