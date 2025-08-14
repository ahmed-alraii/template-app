@extends('components.layouts.login')

@section('content')
    <div class="body-wrapper">
        <div class="main-wrapper">
            <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">

                <main class="auth-page">
                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                            <div
                                class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">



                                <div class="mdc-card p-5">


                                    <h2 class="text-center mb-3 text-purple font-weight-medium mb-5">{{__('Template App')}}</h2>


                                </div>
                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
