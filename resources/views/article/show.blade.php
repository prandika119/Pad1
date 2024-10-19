@extends('layouts.layout')
@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2">
                <div class="bg-white shadow-md rounded-lg overflow-hidden mt-6">
                    <div class="px-6 py-4">
                        <h2 class="text-2xl font-bold mb-2">{{ $article->title }}</h2>
                        <p class="text-gray-600 mb-4"><strong>Date Created:</strong> {{ $article->created_at }}</p>
                        <img src="{{ asset('storage/article-images/' . $article->photo) }}" alt="{{ $article->title }}"
                            class="w-full h-auto mb-4 rounded">
                        <p class="text-gray-700">{{ $article->content }}</p>
                    </div>
                    <div class="px-6 py-4 bg-gray-100">
                        <a href="{{ route('article.index') }}" class="text-blue-500 hover:text-blue-700">Back to
                            Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
