<!-- <?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://laraveltest.com">
    [@foreach](http://laraveltest.com) ($posts as $post)
        <url>
            <loc>http://laraveltest.com{{ $post->uri }}</loc>
            <lastmod>{{ $post->publishes_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset> -->