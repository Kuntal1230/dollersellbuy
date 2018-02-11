@extends('layouts.app')

@section('content')
  <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">
                  <h1 class="text-center" style="color:red;">{{ $status = $exception->getStatusCode() }}</h1>
                    <h1 class="text-center" style="color:red;">Page Not Found</h1>
                    <p class="text-center" style="color:red;">Sorry, but the page you were trying to view does not exist.</p>
                </div>
            </div>
</section>
@stop
