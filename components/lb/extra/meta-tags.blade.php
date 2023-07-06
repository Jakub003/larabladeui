@props([
    'title' => 'LaraBlade - Free Laravel Components, Templates and Guides',
    'description' => "Streamline your web development with LaraBlade's collection of Laravel components, Tailwind CSS templates, and Livewire tutorials.",
    'keywords' => 'Laravel, blade components, Tailwind CSS, templates, Livewire, tutorials, open-source, free, web development, library',
    'image' => 'https://larablade.com/images/meta/thumbnail_web.jpg',
    'url' => 'https://larablade.com/',
    'author' => 'DreamByte Labs',
])

<meta property="og:locale" content="en" />

<meta name="title" content="{{ $title }}" />
<meta name="description" content="{{ $description }}" />
<meta name="keywords" content="{{ $keywords }}">

@isset($author)
    <meta name="author" content="{{ $author }}">
@endisset

<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $url }}" />
<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:image" content="{{ $image }}" />

<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="{{ $url }}" />
<meta property="twitter:title" content="{{ $title }}" />
<meta property="twitter:description" content="{{ $description }}" />
<meta property="twitter:image" content="{{ $image }}" />
