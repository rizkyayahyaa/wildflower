<!-- resources/views/filament/resources/blogs/pages/view.blade.php -->
<div class="space-y-4">
    <h2 class="text-2xl font-semibold">Title: {{ $blog->title }}</h2>
    <div class="space-y-2">
        <strong>Content:</strong>
        <p>{{ $blog->content }}</p>
    </div>
</div>
