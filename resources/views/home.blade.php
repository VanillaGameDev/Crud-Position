<x-app-layout title="Home Page">


    {{-- code menginclude
        @extends('layout.app')

        @section('title', 'Home') --}}


@section('content')

    @section('style')

        <style>
            body{


            }
            </style>

    @endsection

    @component('components.alert')

    @slot('title')

    Header Component With <strong>Strong</strong> tag bang

    @endslot

    ini adalah clidren <strong>bang</strong> ok

    @slot('footer')

    footer <strong style="color: blue">Bang</strong>

    @endslot

    @endcomponent


@endsection

</x-app-layout>

