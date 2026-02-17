@extends('layouts.app')

@section('content')
<section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
    <div class="auto-container">
        <h2>Search Results</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Search</li>
        </ul>
    </div>
</section>

<section class="news-one">
    <div class="auto-container">
        <div class="sec-title">
            <div class="sec-title_title">Search</div>
            <h2 class="sec-title_heading">Results for "{{ $query !== '' ? $query : '...' }}"</h2>
        </div>

        @if ($query === '')
            <p>Please type a search term to find pages.</p>
        @elseif (count($results) === 0)
            <p>No matching results found.</p>
        @else
            <div class="row clearfix">
                @foreach ($results as $result)
                    <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-content">
                                <h5 class="news-block_one-heading">
                                    <a href="{{ $result['route'] }}">{{ $result['title'] }}</a>
                                </h5>
                                <div class="news-block_one-text">{{ ucfirst($result['keywords']) }}</div>
                                <div class="news-block_one-info d-flex justify-content-between align-items-center flex-wrap">
                                    <a class="news-block_one-more theme-btn" href="{{ $result['route'] }}">open</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection

