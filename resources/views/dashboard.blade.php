{{--<x-layouts.app :title="__('Dashboard')">--}}
{{--    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">--}}
{{--        <div class="grid auto-rows-min gap-4 md:grid-cols-3">--}}
{{--            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">--}}
{{--                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />--}}
{{--            </div>--}}
{{--            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">--}}
{{--                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />--}}
{{--            </div>--}}
{{--            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">--}}
{{--                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">--}}
{{--            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-layouts.app>--}}


@extends('layouts.main')
@section('title' , __('Users'))
@section('content')

    <div class="container p-5 bg-mdi-gray">
        <div class="row">

            <h2 class="text-center">{{ __('Dashboard') }} </h2>

            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title">{{ __('All') }}</h5>
                                <h5  class="font-weight-light pb-2 mb-1 border-bottom counts">{{10}}</h5>
                                <h5 class="mt-3 text-muted text-center">{{__('Bookings')}}</h5>
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">attach_money</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--danger">
                            <div class="card-inner">
                                <h5 class="card-title">{{__('Booked')}}</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom counts">{{10}}</h5>
                                <h5 class="mt-3 text-muted text-center">{{__('Bookings')}}</h5>
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">book</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--primary">
                            <div class="card-inner">
                                <h5 class="card-title">{{__('Finished')}}</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom counts">{{10}}</h5>
                                <h5 class="mt-3 text-muted text-center">{{__('Bookings')}}</h5>
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">trending_up</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--info">
                            <div class="card-inner">
                                <h5 class="card-title">{{__('Canceled')}}</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom counts">{{10}}</h5>
                                <h5 class="mt-3 text-muted text-center">{{__('Bookings')}}</h5>
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">credit_card</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title">{{__('All')}}</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom counts">{{10}}</h5>
                                <h5 class="mt-3 text-muted text-center">{{__('Rents')}}</h5>
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">attach_money</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--danger">
                            <div class="card-inner">
                                <h5 class="card-title">{{__('Rented')}}</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom counts">{{10}}</h5>
                                <h5 class="mt-3 text-muted text-center">{{__('Rents')}}</h5>
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">book</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--primary">
                            <div class="card-inner">
                                <h5 class="card-title">{{__('Returned')}}</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom counts">{{10}}</h5>
                                <h5 class="mt-3 text-muted text-center">{{__('Rents')}}</h5>
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">trending_up</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--info">
                            <div class="card-inner">
                                <h5 class="card-title">{{ __('Canceled')}}</h5>
                                <h5 class="font-weight-light pb-2 mb-1 border-bottom counts">{{ 10}}</h5>
                                <h5 class=" text-muted mt-3 text-center">{{__('Rents')}}</h5>
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">credit_card</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


