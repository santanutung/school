@extends('layouts.backend.app')

@section('title', 'dashbord')
@push('css')

@endpush
@section('content')
    <div class="row text-center">


        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background">
                    <h4 class="widget-content-light"><strong>Total</strong> Student</h4>
                </div>
                <div class="widget-extra-full"><span
                        class="h2 themed-color-dark animation-expandOpen">{{ $users->count() }}</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Student</strong> last join</h4>
                </div>
                <div class="widget-extra-full"><span
                        class="h2 themed-color-dark animation-expandOpen">{{ $users->where('created_at', '>', \Carbon\Carbon::now()->subDays(1))->count() }}</span>
                </div>
            </a>
        </div>

    </div>
    <!-- END Quick Stats -->

@endsection

@push('js')
@endpush
