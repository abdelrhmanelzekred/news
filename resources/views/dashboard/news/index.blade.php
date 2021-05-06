@extends('layouts.dashboard')

@section('content')

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                <h3 class="kt-portlet__head-title">
                    Sorting
                    <small>Sorting in local datasource</small>
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <a href="#" class="btn btn-clean btn-icon-sm">
                        <i class="la la-long-arrow-left"></i>
                        Back
                    </a>
                    &nbsp;
                    <div class="dropdown dropdown-inline">
                        <a href="{{route('dashboard.news.create')}}" type="button" class="btn btn-brand btn-icon-sm" >
                            <i class="flaticon2-plus"></i> @lang('site.add_new_news')
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Search Form -->
            <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <form action="{{ route('dashboard.news.index') }}" method="get">

                        <div class="row align-items-center">
                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-input-icon kt-input-icon--left">
                                    <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request()->search }}" >
                                    <span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>

                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary sm"><i class="fa fa-search"></i> @lang('site.search')</button>


                        </div>
                        </form>
                    </div>

                </div>
            </div>
            <!--end: Search Form -->
        </div>

        <div class="box-body">

            @if ($news->count() > 0)

                <table class="table table-hover">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('site.title')</th>
                        <th>@lang('site.image')</th>
                        <th>@lang('site.description')</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($news as $index=>$new)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$new->title}}</td>

    <td><img src="{{$new->image_path}}" style="width: 100px"  class="img-thumbnail" alt=""></td>
                            <td>{{$new->description}}</td>
                            <td>
<a href="{{route('dashboard.news.edit',$new->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
                                  <i class="fa fa-trash"></i> @lang('site.delete')
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">@lang('site.delete')</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                               @lang('site.delete_confirmation')  {{$new->title}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('site.close')</button>
                                                <form action="{{ route('dashboard.news.destroy', $new->id) }}" method="post" style="display: inline-block">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button type="submit" class="btn btn-danger delete btn-sm"> @lang('site.delete')</button>
                                                </form><!-- end of form -->                                            </div>
                                        </div>
                                    </div>
                                </div>







                            </td>
                        </tr>



                    @endforeach
                    </tbody>

                </table><!-- end of table -->

                {{ $news->appends(request()->query())->links() }}

            @else

                <h2>@lang('site.no_data_found')</h2>

            @endif

        </div><!-- end of box body -->

    </div>

@endsection
